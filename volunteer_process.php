<?php
// Include the database connection and PHPMailer files
include 'includes/connection.php';
require 'vendor/autoload.php'; // Ensure PHPMailer is installed via Composer

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Check if the request is POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Sanitize and validate inputs
    $first_name = !empty($_POST['first-name']) ? htmlspecialchars(trim($_POST['first-name'])) : '';
    $last_name = !empty($_POST['last-name']) ? htmlspecialchars(trim($_POST['last-name'])) : '';
    $email = !empty($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL) : '';
    $address = !empty($_POST['address']) ? htmlspecialchars(trim($_POST['address'])) : '';
    $phone = !empty($_POST['phone']) ? htmlspecialchars(trim($_POST['phone'])) : '';
    $interests = !empty($_POST['interests']) ? htmlspecialchars(trim($_POST['interests'])) : '';
    $age = !empty($_POST['age']) ? (int)$_POST['age'] : 0;
    $gender = !empty($_POST['gender']) ? htmlspecialchars(trim($_POST['gender'])) : '';

    // Validate inputs
    if (empty($first_name) || empty($last_name) || empty($email) || empty($address) || empty($phone) || empty($interests) || empty($age) || empty($gender)) {
        echo json_encode(['status' => 'error', 'message' => 'All fields are required.']);
        exit;
    }

    // Insert data into the database
    try {
        // Prepare the SQL query
        $stmt = $connection->prepare("INSERT INTO volunteers (first_name, last_name, email, address, phone, interests, age, gender) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([$first_name, $last_name, $email, $address, $phone, $interests, $age, $gender]);

        // Send an email notification
        $mail = new PHPMailer(true);

        try {
            // PHPMailer configuration
            $mail->isSMTP();
            $mail->Host = 'mail.barriziorganizationkenya.org';
            $mail->SMTPAuth = true;
            $mail->Username = 'info@barriziorganizationkenya.org';
            $mail->Password = 'Barriziinfo1admin@';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // Set email sender and recipient
            $mail->setFrom($email, $first_name . ' ' . $last_name);
            $mail->addAddress('info@barriziorganizationkenya.org'); // Organization's email

            // Set email content
            $mail->isHTML(true);
            $mail->Subject = 'RE: Volunteer Registration';
            $mail->Body = "
                <p><strong>New Volunteer Registration</strong></p>
                <p><strong>First Name:</strong> $first_name</p>
                <p><strong>Last Name:</strong> $last_name</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Address:</strong> $address</p>
                <p><strong>Phone:</strong> $phone</p>
                <p><strong>Interests:</strong> $interests</p>
                <p><strong>Age:</strong> $age</p>
                <p><strong>Gender:</strong> $gender</p>
            ";

            // Send the email
            $mail->send();

            // Return success response
            echo json_encode(['status' => 'success', 'message' => 'Thank you for registering. We will contact you with further instructions!']);
        } catch (Exception $e) {
            echo json_encode(['status' => 'error', 'message' => 'Registration saved but failed to send email notification.']);
        }
    } catch (PDOException $e) {
        // Return error response
        echo json_encode(['status' => 'error', 'message' => 'Something went wrong. Please try again.']);
    }
}
?>
