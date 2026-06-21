<?php
// Include the database connection
require 'includes/connection.php';
require 'vendor/autoload.php'; // Ensure PHPMailer is installed via Composer

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Check if the form is submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitize and validate form data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars(trim($_POST['phone']));
    $message = htmlspecialchars(trim($_POST['message']));
    $event_id = intval($_POST['event_id']); // Ensure event_id is an integer

    // Basic validation
    if (empty($name) || empty($email) || empty($phone) || empty($event_id)) {
        echo "Please fill in all required fields.";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit;
    }

    // Fetch event name from the database based on event_id
    $event_query = "SELECT name FROM events WHERE id = ?";
    $event_stmt = $connection->prepare($event_query);
    $event_stmt->bind_param("i", $event_id);
    $event_stmt->execute();
    $event_result = $event_stmt->get_result();

    if ($event_result->num_rows > 0) {
        // Fetch the event name
        $event = $event_result->fetch_assoc();
        $event_name = $event['name'];
    } else {
        echo "Event not found.";
        exit; // Stop if the event is not found
    }

    // Prepare SQL query to insert registration data into the event_registrations table
    $query = "INSERT INTO event_registrations (event_id, name, email, phone, message) VALUES (?, ?, ?, ?, ?)";
    $stmt = $connection->prepare($query);

    // Bind parameters to the query
    $stmt->bind_param("issss", $event_id, $name, $email, $phone, $message);

    // Execute the query and check if the registration was successful
    if ($stmt->execute()) {

        // Send an email notification to events@barriziorganizationkenya.org using PHPMailer
        try {
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host = 'mail.barriziorganizationkenya.org';
            $mail->SMTPAuth = true;
            $mail->Username = 'info@barriziorganizationkenya.org';
            $mail->Password = 'Barriziinfo1admin@';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // Set the sender and recipient
            $mail->setFrom($email, $name); // Email from the user
            $mail->addAddress('events@barriziorganizationkenya.org'); // Send to the event email

            // Set the subject and body of the email
            $mail->isHTML(true);
            $mail->Subject = "New Event Registration for Event: $event_name";
            $mail->Body = "
                <p>You have received a new registration for the event: <strong>$event_name</strong>.</p>
                <p><strong>Name:</strong> $name</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Phone:</strong> $phone</p>
                <p><strong>Message:</strong> $message</p>
            ";

            // Send the email
            $mail->send();

            // Respond with a success message
            echo "Thank you for registering! We have received your registration.";
        } catch (Exception $e) {
            echo "Error: Could not send notification email. Please try again later.";
        }

    } else {
        echo "Error: Could not register. Please try again later.";
    }

    // Close the prepared statement
    $stmt->close();
    $event_stmt->close();
} else {
    echo "Invalid request.";
}
?>
