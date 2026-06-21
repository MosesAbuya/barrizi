<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate</title>
    <?php include 'includes/head.php'?>
    <?php include 'includes/preloader.php'; ?>
    <style>
    h1 {
        font-size: 4.5rem;
        font-weight: 800;
        text-align: flex-start;
        color: #f27420;
        margin: 30px;
    }

    .h-container {
        background-image: url('assets/img/hero/back5.png');
        background-size: cover;
        background-attachment: fixed;
    }

    .slider-area2 {
        background-color: rgba(0, 0, 0, 0.252);
    }

    .header-area .header-top .header-info-left>ul>li {
        color: #1f2b7b;
    }

    .header-area .header-top .header-info-left .header-social>ul>li>a {
        color: #f27420;
    }

    .header-area .header-top .header-info-right .contact-now li a {
        color: #1f2b7b;
    }
    </style>
    <link rel="stylesheet" href="donate.css">
    <link rel="stylesheet" href="signin.css">
</head>

<body>
    <?php include 'includes/sidebar.php' ?>
    <?php include 'includes/navbar.php'?>

    <section class="donate-form">

        <div class="col-lg-8 mx-auto">
            <h1>Login to continue</h1>
            <form class="form-contact contact_form" method="post" id="contactForm" novalidate="novalidate">
                <div class="row">

                    <div class="col-12">
                        <div class="form-group">
                            <input class="form-control valid" name="email" id="email" type="email"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'"
                                placeholder="Email" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <input class="form-control" name="password" id="password" type="text"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter password'"
                                placeholder="Enter password" required>
                        </div>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <button type="submit" class="button button-contactForm boxed-btn">Next</button>
                </div>
                <p id="message"></p>
            </form>
        </div>

        <!-- <h1>We appreciate your donation sincerely.</h1> -->
    </section>
    <!-- Forgot Password Button -->
    <button class="mx-auto" style="width: 100%" type="button" id="forgotPasswordBtn">Forgot Password?</button>

    <!-- Forgot Password Modal -->
    <div id="forgotPasswordModal" class="modal" style="display: none;">
        <div class="modal-content">
            <span class="close" id="closeModal">&times;</span>
            <h2>Forgot Password</h2>
            <form id="forgotPasswordForm">
                <label for="resetEmail">Enter your email:</label>
                <input type="email" id="resetEmail" name="resetEmail" required>
                <button type="submit">Send Reset Link</button>
            </form>
            <p id="modalMessage"></p>
        </div>
    </div>

    <script>
    // Show Modal
    document.getElementById('forgotPasswordBtn').onclick = function() {
        document.getElementById('forgotPasswordModal').style.display = 'block';
    };

    // Close Modal
    document.getElementById('closeModal').onclick = function() {
        document.getElementById('forgotPasswordModal').style.display = 'none';
    };

    // Handle Forgot Password Submission
    document.getElementById('forgotPasswordForm').onsubmit = function(e) {
        e.preventDefault();
        let email = document.getElementById('resetEmail').value;

        fetch('forgot_password.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    email: email
                })
            })
            .then(response => response.json())
            .then(data => {
                document.getElementById('modalMessage').textContent = data.message;
            })
            .catch(error => {
                document.getElementById('modalMessage').textContent = 'An error occurred.';
            });
    };
    </script>



    <?php include 'includes/footer.php'?>
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <?php include 'includes/script.php'; ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function() {
        // Intercept form submission
        $('#contactForm').on('submit', function(event) {
            event.preventDefault(); // Prevent default form submission

            // Get the form data
            var email = $('#email').val();
            var password = $('#password').val();

            // Validate email and password
            if (email == '' || password == '') {
                alert("Please fill in all fields!");
                return;
            }

            // Serialize the form data for sending via AJAX
            var formData = $(this).serialize();

            $.ajax({
                url: 'signin_process.php', // PHP file to process the login
                type: 'POST',
                data: formData, // Send form data
                success: function(response) {
                    var messageElement = $('#message');

                    // Clear any previous messages
                    messageElement.text('');
                    messageElement.show();
                    if (response === 'success') {

                        messageElement.text(
                            'Signup successful!'); // Display success message
                        messageElement.css('color',
                            'green'); // Optional: change color for success
                        window.location.href = 'profile.php';
                    } else {
                        messageElement.text('Error: ' + response); // Display error message
                        messageElement.css('color',
                            'red'); // Optional: change color for error
                    }
                },
                error: function() {
                    alert('Error submitting the form. Please try again.');
                }
            });
        });
    });
    </script>

</body>

</html>
