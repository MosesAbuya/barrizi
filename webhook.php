<?php
// Include database connection
require_once 'includes/connection.php';

// Paystack secret key
$paystack_secret = 'sk_live_6b9e0b71b29646a6a3f1c25299846e73e6f053a3';

// Get raw request body and signature
$input = @file_get_contents("php://input");
$signature = $_SERVER['HTTP_X_PAYSTACK_SIGNATURE'] ?? '';

// Verify webhook signature
if ($signature !== hash_hmac('sha512', $input, $paystack_secret)) {
    http_response_code(401);
    exit("Invalid signature");
}

// Optional: Log payload for debugging
file_put_contents('data.txt', "[" . date("Y-m-d H:i:s") . "] Webhook Received:\n" . $input . "\n\n", FILE_APPEND);

// Decode payload
$data = json_decode($input, true);

if (!$data || !isset($data['event'])) {
    http_response_code(400);
    exit("Invalid webhook payload");
}

$event = $data['event'];
$tx = $data['data'] ?? [];

try {
    if ($event === 'charge.success') {
        // Extract transaction_id from custom fields
        $transaction_id = '';
        if (!empty($tx['metadata']['custom_fields'])) {
            foreach ($tx['metadata']['custom_fields'] as $field) {
                if ($field['variable_name'] === 'transaction_id') {
                    $transaction_id = $field['value'];
                    break;
                }
            }
        }

        // Basic details
        $paystack_id = $tx['id'];
        $reference = $tx['reference'];
        $amount = $tx['amount'];
        $currency = $tx['currency'];
        $channel = $tx['channel'];
        $paid_at = $tx['paid_at'];
        $email = strtolower($tx['customer']['email'] ?? '');
        $first_name = $tx['customer']['first_name'] ?? '';
        $last_name = $tx['customer']['last_name'] ?? '';
        $gateway_response = $tx['gateway_response'] ?? '';
        $bank = $tx['authorization']['bank'] ?? '';
        $auth_code = $tx['authorization']['authorization_code'] ?? '';
        $subscription_code = $tx['subscription_code'] ?? null;

        $isRecurring = !empty($subscription_code);
        $contact = null;
        $purpose = $isRecurring ? 'Subscription Payment' : 'Normal Donation';

        if (!empty($tx['metadata']['custom_fields'])) {
            foreach ($tx['metadata']['custom_fields'] as $field) {
                if ($field['variable_name'] === 'contact') {
                    $contact = $field['value'];
                } elseif ($field['variable_name'] === 'purpose' && !$isRecurring) {
                    $purpose = $field['value'];
                }
            }
        }

        // Insert into payments
        $stmt = $connection->prepare("INSERT INTO payments 
            (paystack_id, reference, amount, currency, channel, paid_at, customer_email, customer_first_name, customer_last_name, contact, gateway_response, bank, authorization_code, purpose, is_recurring, subscription_code, transaction_id)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        $stmt->execute([
            $paystack_id, $reference, $amount, $currency, $channel, $paid_at,
            $email, $first_name, $last_name, $contact, $gateway_response,
            $bank, $auth_code, $purpose, $isRecurring ? 1 : 0, $subscription_code,
            $transaction_id
        ]);

        // Insert transaction map for lookup later
        if ($transaction_id && $email) {
            $stmt = $connection->prepare("INSERT INTO transaction_map (email, transaction_id) VALUES (?, ?) ON DUPLICATE KEY UPDATE transaction_id = VALUES(transaction_id)");
            $stmt->execute([$email, $transaction_id]);
        }

    } elseif ($event === 'subscription.create') {
        // Basic subscription data
        $email = strtolower($tx['customer']['email'] ?? '');
        $transaction_id = '';

        // Look up transaction_id from earlier charge.success
        if (!empty($email)) {
            $stmt = $connection->prepare("SELECT transaction_id FROM transaction_map WHERE email = ?");
            $stmt->execute([$email]);
            $transaction_id = $stmt->fetchColumn();
        }

        

        // Insert into subscriptions
        $subscription_code = $tx['subscription_code'] ?? '';
        $status = $tx['status'] ?? '';
        $amount = $tx['amount'] ?? 0;
        $plan = $tx['plan'] ?? [];
        $plan_name = $plan['name'] ?? '';
        $plan_code = $plan['plan_code'] ?? '';
        $interval = $plan['interval'] ?? '';
        $next_payment_date = $tx['next_payment_date'] ?? null;
        $created_at = $tx['createdAt'] ?? null;

        $stmt = $connection->prepare("INSERT INTO subscriptions 
            (subscription_code, email, status, amount, plan_name, plan_code, intervals, next_payment_date, created_at, transaction_id)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        $stmt->execute([
            $subscription_code, $email, $status, $amount,
            $plan_name, $plan_code, $interval, $next_payment_date, $created_at,
            $transaction_id
        ]);
    }elseif ($event === 'subscription.not_renew') {
        // Handle subscription cancellation
        $subscription_code = $tx['subscription_code'] ?? null;

        if ($subscription_code) {
            // Update the subscription status to "deactivated"
            $stmt = $connection->prepare("UPDATE subscriptions SET status = 'deactivated' WHERE subscription_code = ?");
            $stmt->execute([$subscription_code]);
        }
    }
    

    http_response_code(200);
    echo "Webhook processed";
    

} catch (PDOException $e) {
    error_log("DB Error: " . $e->getMessage());
    http_response_code(500);
    echo "Database error";
}
