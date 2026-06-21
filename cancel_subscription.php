<?php
// cancel_subscription.php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['subscription_code'])) {
    $subscriptionCode = $_POST['subscription_code'];

    $paystackSecret = 'sk_live_8e9bbeb138d82e018fe6f3b2e2d91b05d6ac77e6'; // Replace with your real secret key

    $url = "https://api.paystack.co/subscription/{$subscriptionCode}/disable";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Authorization: Bearer $paystackSecret",
        "Cache-Control: no-cache",
    ]);

    $response = curl_exec($ch);
    $statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($statusCode == 200) {
        echo "Subscription cancelled successfully.";
    } else {
        echo "Failed to cancel subscription. Please try again.";
    }
} else {
    echo "Invalid request.";
}
?>
