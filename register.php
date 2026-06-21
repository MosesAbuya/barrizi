<?php
// Include the database connection
require 'includes/connection.php';

// Get the event_id from the URL
$event_id = isset($_GET['event_id']) ? $_GET['event_id'] : 0;

// Fetch the event data based on event_id
$query = "SELECT * FROM events WHERE id = ?";
$stmt = $connection->prepare($query);
$stmt->bind_param("i", $event_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Fetch the event details
    $event = $result->fetch_assoc();
} else {
    echo "Event not found.";
    exit; // Stop if the event is not found
}
?>

<!doctype html>
<html lang="en">

<head>
    <?php include 'includes/head.php'; ?>
    <style>
    /* Custom styling for the registration form */
    .registration-form {
        background-color: #f9f9f9;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .registration-form h3 {
        font-size: 28px;
        font-weight: bold;
        color: #333;
        margin-bottom: 20px;
    }

    .form-group input,
    .form-group textarea {
        border-radius: 5px;
        padding: 10px;
        font-size: 16px;
        width: 100%;
    }

    .button-contactForm {
        background-color: #f27420;
        color: #fff;
        padding: 12px 30px;
        border: none;
        border-radius: 5px;
        font-size: 18px;
        font-weight: bold;
        cursor: pointer;
    }

    .button-contactForm:hover {
        background-color: #e2631c;
    }

    #response-message {
        margin-top: 20px;
        color: green;
    }
    </style>
</head>

<body>
    <!--? Preloader Start -->
    <?php include 'includes/preloader.php'; ?>
    <!-- Preloader Start -->

    <header>
        <?php include 'includes/navbar.php'; ?>
    </header>

    <main>
        <div class="container">
            <!-- Event Registration Form -->
            <section class="registration-form section-padding">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <h3>Register for Event: <?php echo $event['name']; ?></h3>
                        <form id="eventRegisterForm">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" id="message" cols="30" rows="4"
                                            placeholder="Enter your message (optional)"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="name" id="name" type="text"
                                            placeholder="Enter your name" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="email" id="email" type="email"
                                            placeholder="Enter email address" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="phone" id="phone" type="text"
                                            placeholder="Enter phone number" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="hidden" name="event_id" value="<?php echo $event['id']; ?>" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button-contactForm">Register Now</button>
                            </div>
                        </form>

                        <div id="response-message"></div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>
    <!-- JS here -->
    <?php include 'includes/script.php'; ?>

    <!-- Include jQuery and AJAX for form submission -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function() {
        // Handle form submission via AJAX
        $('#eventRegisterForm').submit(function(e) {
            e.preventDefault(); // Prevent default form submission

            // Serialize form data
            var formData = $(this).serialize();

            // Send data to register_process.php
            $.ajax({
                type: "POST",
                url: "register_process.php",
                data: formData,
                success: function(response) {
                    // Display the success or error message
                    $('#response-message').html(response);
                },
                error: function() {
                    $('#response-message').html('An error occurred. Please try again.');
                }
            });
        });
    });
    </script>
</body>

</html>
