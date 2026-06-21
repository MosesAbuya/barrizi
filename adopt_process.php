<?php
// Include the database connection and PHPMailer files
include 'includes/connection.php';
require 'vendor/autoload.php'; // Ensure PHPMailer is installed via Composer

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    // Sanitize and validate the input data
    $firstName = htmlspecialchars(trim($_POST['first-name']));
    $lastName = htmlspecialchars(trim($_POST['last-name']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $address = htmlspecialchars(trim($_POST['address']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $consent = isset($_POST['consent']) ? 1 : 0;  // Ensure checkbox is checked
    $pId = htmlspecialchars(trim($_POST['p-id']));
    $country = htmlspecialchars(trim($_POST['country']));

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit();
    }

    // Validate phone (simple check, you can improve it)
    if (!preg_match("/^[0-9]{10,15}$/", $phone)) {
        echo "Invalid phone number.";
        exit();
    }

    // Prepare SQL statement to prevent SQL injection
    try {
        $stmt = $connection->prepare("INSERT INTO adoption (first_name, last_name, email, address, phone, p_id, country) VALUES (:first_name, :last_name, :email, :address, :phone, :p_id, :country)");
        
        // Bind parameters to avoid SQL injection
        $stmt->bindParam(':first_name', $firstName);
        $stmt->bindParam(':last_name', $lastName);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':p_id', $pId);
        $stmt->bindParam(':country', $country);

        // Execute the query
        $stmt->execute();

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
            $mail->setFrom($email, $firstName . ' ' . $lastName);
            $mail->addAddress('info@barriziorganizationkenya.org'); // Organization's email

            // Set email content
            $mail->isHTML(true);
            $mail->Subject = 'RE: Distance Parenting Adoption';
            $mail->Body = "
                <p><strong>New Adoption Form Submission</strong></p>
                <p><strong>First Name:</strong> $firstName</p>
                <p><strong>Last Name:</strong> $lastName</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Address:</strong> $address</p>
                <p><strong>Phone:</strong> $phone</p>
                <p><strong>Parent ID:</strong> $pId</p>
                <p><strong>Country:</strong> $country</p>
            ";

            // Send the email
            $mail->send();

            // Send a success response
            echo "Thank you for your adoption interest! Your information has been submitted successfully. We will contact you shortly.";
        } catch (Exception $e) {
            echo "Error sending email: " . $mail->ErrorInfo;
        }
    } catch (PDOException $e) {
        // If an error occurs, catch it and display the error message
        echo "Error: " . $e->getMessage();
    }
}
?>
