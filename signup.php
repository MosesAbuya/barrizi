<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1, user-scalable=no">
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
    @media(max-width: 768px){
        .donate-form{
            display:flex;
            flex-direction: column;
            justify-content:space-between;
            height: fit-content;
            align-items:center;
            width:98%;
        }
    }
    </style>
    
<style>
.hidden{
    display: none;
}

  .package {
    background: #fff;
    border: 2px solid #e0e0e0;
    border-radius: 12px;
    padding: 20px;
    margin: 20px auto;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 800px;
    transition: transform 0.3s, box-shadow 0.3s;
  }

  .package:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
  }

  .package-image {
    width: 100%;
    border-radius: 12px 12px 0 0;
    margin-bottom: 15px;
  }

  h2 {
    color: #2c3e50;
    font-size: 24px;
    margin-bottom: 10px;
  }

  p {
    font-size: 16px;
    margin-bottom: 15px;
  }

  ul {
    list-style-type: disc;
    padding-left: 20px;
  }

  ul li {
    margin-bottom: 10px;
  }
</style>
    <link rel="stylesheet" href="donate.css">
    <script>
function generateTransactionID(length = 10) {
    const chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    let result = '';
    for (let i = 0; i < length; i++) {
        result += chars.charAt(Math.floor(Math.random() * chars.length));
    }
    return result;
}

window.addEventListener('DOMContentLoaded', () => {
    document.getElementById('transaction_id').value = generateTransactionID();
});
</script>

</head>
<?php include 'includes/navbar.php'?>
<body>
    <?php include 'includes/sidebar.php' ?>
    

    <section class="donate-form">

        <div class="col-lg-8">
            <h1>Fill the form below to register</h1>
            <form class="form-contact contact_form" method="POST" id="contactForm" novalidate="novalidate">
                <div class="row">

                    <div class="col-sm-6">
                        <div class="form-group">
                            <input class="form-control valid" name="first-name" id="first-name" type="text"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your first name'"
                                placeholder="Enter your first name" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input class="form-control valid" name="last-name" id="last-name" type="text"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your last name'"
                                placeholder="Enter your last name" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <input class="form-control" name="country" id="country" type="text"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter country name'"
                                placeholder="Enter country name" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <input class="form-control valid" name="email" id="email" type="email"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'"
                                placeholder="Email" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <input class="form-control" name="organisation" id="organisation" type="text"
                                onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Enter organisation name(Optional)'"
                                placeholder="Enter organisation name(Optional)">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <input class="form-control" name="package" id="package" type="text" placeholder="package"
                                readonly required>

                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input class="form-control valid" name="password" id="password" type="password"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your password'"
                                placeholder="Enter your password" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input class="form-control valid" name="confirm-password" id="confirm-password"
                                type="password" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Confirm your password'" placeholder="Confirm your password"
                                required>
                        </div>
                    </div>
                    <!-- Hidden transaction ID input -->
                    <input type="hidden" name="transaction_id" id="transaction_id">
                </div>
                <div class="form-group mt-3">
                    <button type="submit" class="button button-contactForm boxed-btn">Next</button>
                </div>
                <p id="message"></p>
            </form>
            <script src="https://js.paystack.co/v1/inline.js"></script>
            
            <script>
document.getElementById('contactForm').addEventListener('submit', function(e) {
  e.preventDefault();

  const packagePlanCodes = {
    "Bronze-Member": "PLN_d0d3dn5qx0dfqxj",
    "Silver-Package": "PLN_xxxxxxx",
    "Gold-Package": "PLN_yyyyyyy"
  };

  const packageName = document.getElementById('package').value; // e.g. "Bronze-Package"
  const planCode = packagePlanCodes[packageName];

  if (!planCode) {
    document.getElementById('message').innerText = "Invalid package selected.";
    return;
  }

  // Other validation, password check etc.
  const password = document.getElementById('password').value;
  const confirmPassword = document.getElementById('confirm-password').value;
  if(password !== confirmPassword) {
    document.getElementById('message').innerText = "Passwords do not match!";
    return;
  }

  const email = document.getElementById('email').value;
  const firstName = document.getElementById('first-name').value;
  const lastName = document.getElementById('last-name').value;
    const transactionId = document.getElementById('transaction_id').value;


  // Paystack subscription setup
  var handler = PaystackPop.setup({
    key: 'pk_live_625c2c57f159c7d2d5240b7e8fb3a855d39b2091', // your public key
    email: email,
    plan: planCode,
    metadata: {
      custom_fields: [
        {
          display_name: "First Name",
          variable_name: "first_name",
          value: firstName
        },
        {
          display_name: "Last Name",
          variable_name: "last_name",
          value: lastName
        },
        {
          display_name: "Package",
          variable_name: "package",
          value: packageName
        },
         {
          display_name: "Transaction",
          variable_name: "transaction_id",
          value: transactionId
        }
      ]
    },
   callback: function(response) {
    // Optionally notify the user
    console.log('Payment complete! Reference: ' + response.reference);

    // Wait 2 seconds (2000 milliseconds) before redirecting
    setTimeout(function() {
        window.location.href = "subscription-success.php";
    }, 1000);
}
,
    onClose: function() {
      document.getElementById('message').innerText = "Subscription process was cancelled.";
    }
  });
  handler.openIframe();
});
</script>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#contactForm').on('submit', function(event) {
            event.preventDefault(); // Prevent page reload

            // Validate password match
            var password = $('#password').val();
            var confirmPassword = $('#confirm-password').val();

            if (password !== confirmPassword) {
                var messageElement = $('#message');

                // Clear any previous messages
                messageElement.text('');
                messageElement.show();

                messageElement.text('Error: Passwords do not match!'); // Display error message
                messageElement.css('color',
                    'red'); // Optional: change color for error
                return false;
            }

            // Serialize form data
            var formData = $(this).serialize();

            $.ajax({
                url: 'signup_process.php', // PHP file to handle the form submission
                type: 'POST',
                data: formData,
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
                        
                    } else {
                        messageElement.text('Error: ' + response); // Display error message
                        messageElement.css('color',
                            'red'); // Optional: change color for error
                    }
                },
                error: function() {
                    alert("There was an error submitting your form. Please try again.");
                }
            });
        });
    });
    </script>
    <script>
    // Function to get query parameters by name
    function getQueryParam(param) {
        const urlParams = new URLSearchParams(window.location.search);
        return urlParams.get(param);
    }

    // Populate the package input field
    document.addEventListener("DOMContentLoaded", function() {
        const packageName = getQueryParam('package'); // Get 'package' parameter from URL
        if (packageName) {
            document.getElementById('package').value = packageName; // Set the value in the input field
        }
    });
    </script>
    <script>
  document.addEventListener("DOMContentLoaded", function () {
    // Parse URL parameters
    const params = new URLSearchParams(window.location.search);
    const selectedPackage = params.get("package");

    // Hide all packages initially
    document.querySelectorAll(".package").forEach(package => {
      package.classList.add("hidden");
    });

    // Show the selected package if it matches
    if (selectedPackage) {
      const target = document.getElementById(selectedPackage);
      if (target) {
        target.classList.remove("hidden");
      } else {
        console.warn("Invalid package specified in the URL.");
      }
    } else {
      console.warn("No package parameter found in the URL.");
    }
  });
</script>
            
        </div>
<!-- Sponsorship Packages -->
<div id="Bronze-Member" class="package hidden">
  <img src="assets/bj.jpg" alt="Bronze Sponsor" class="package-image" />
  <h2>🥉 Bronze - $100</h2>
  <p><strong>Impact:</strong> As a Bronze sponsor, your support will help us provide essential resources to the children and young mothers in the Nairobi slums.</p>
  <ul>
    <li>1. Basic school supplies for children.</li>
    <li>2. Community events and activities focused on education and empowerment.</li>
    <li>3. Support services for young mothers.</li>
  </ul>
</div>

<div id="Silver-Member" class="package hidden">
  <img src="assets/bj.jpg" alt="Silver Sponsor" class="package-image" />
  <h2>🥈 Silver - $300</h2>
  <p><strong>Impact:</strong> As a Silver sponsor, your contribution will help us maintain our ongoing programs and initiatives.</p>
  <ul>
    <li>1. School supplies for children.</li>
    <li>2. Basic life skills workshops for teenagers and young mothers.</li>
    <li>3. Community outreach and awareness programs.</li>
  </ul>
</div>

<div id="Gold-Member" class="package hidden">
  <img src="assets/bj.jpg" alt="Gold Sponsor" class="package-image" />
  <h2>🥇 Gold - $500</h2>
  <p><strong>Impact:</strong> As a Gold sponsor, your support will help us continue to provide essential educational resources and training programs.</p>
  <ul>
    <li>1. School supplies and uniforms for children.</li>
    <li>2. Basic vocational training courses for teenagers and young mothers.</li>
    <li>3. Community events and workshops focused on education and empowerment.</li>
  </ul>
</div>

<div id="Diamond-Member" class="package hidden">
  <img src="assets/bj.jpg" alt="Diamond Sponsor" class="package-image" />
  <h2>💎 Diamond - $1000</h2>
  <p><strong>Impact:</strong> As a Diamond sponsor, your contribution will enhance our educational and vocational training programs.</p>
  <ul>
    <li>1. Partial scholarships for children, covering tuition and school supplies.</li>
    <li>2. Vocational training workshops for teenagers and young mothers.</li>
    <li>3. Health and wellness programs to support the physical and mental well-being of our beneficiaries.</li>
  </ul>
</div>

<div id="Platinum-Member" class="package hidden">
  <img src="assets/bj.jpg" alt="Platinum Sponsor" class="package-image" />
  <h2>💎 Platinum - $1500</h2>
  <p><strong>Impact:</strong> As a Platinum sponsor, your generous contribution will have a significant impact on our programs.</p>
  <ul>
    <li>1. Full scholarships for children, covering tuition, uniforms, and school supplies.</li>
    <li>2. Advanced vocational training programs for teenagers and young mothers.</li>
    <li>3. Community outreach programs to raise awareness about the importance of education and health.</li>
  </ul>
</div>




        <!-- <h1>We appreciate your donation sincerely.</h1> -->
    </section>

    <?php include 'includes/footer.php'?>
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <?php include 'includes/script.php'; ?>
    


</body>

</html>
