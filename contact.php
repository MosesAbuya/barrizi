<!doctype html>
<html lang="en">

<head>
    <?php include 'includes/head.php'; ?>
    <title>Contact Us | Barrizi Organisation Kenya</title>
    <style>
        body { padding-top: 0; background: var(--off-white); }
        .header-area { display: none !important; }

        /* Inner Page Header */
        .brz-page-header {
            background: var(--navy);
            padding: 160px 0 80px;
            position: relative;
            overflow: hidden;
            text-align: center;
        }
        .brz-page-header::before {
            content: '';
            position: absolute;
            inset: 0;
            background-image: url('assets/img/hero/back8.png');
            background-size: cover;
            background-position: center;
            opacity: 0.25; mix-blend-mode: luminosity;
            
        }
        .brz-page-header__content {
            position: relative;
            z-index: 2;
        }
        .brz-page-header__title {
            font-family: var(--font-heading);
            font-size: clamp(3rem, 7vw, 5rem);
            color: var(--white);
            line-height: 1;
            margin-bottom: 10px;
            text-transform: uppercase;
        }
        .brz-page-header__breadcrumb {
            font-family: var(--font-heading);
            font-size: 1.2rem;
            color: var(--yellow);
            letter-spacing: 0.1em;
            text-transform: uppercase;
        }
        .brz-page-header__breadcrumb a {
            color: var(--white);
            transition: color 0.3s;
        }
        .brz-page-header__breadcrumb a:hover {
            color: var(--orange);
        }

        /* Contact Details Cards */
        .brz-contact-card {
            background: var(--white);
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            text-align: center;
            height: 100%;
            transition: transform 0.3s;
            border-bottom: 4px solid var(--purple);
        }
        .brz-contact-card:hover {
            transform: translateY(-5px);
        }
        .brz-contact-icon {
            width: 70px;
            height: 70px;
            background: rgba(243, 112, 33, 0.1); /* Orange tint */
            color: var(--orange);
            font-size: 2rem;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            margin: 0 auto 20px;
        }
        .brz-contact-card h3 {
            font-family: var(--font-heading);
            color: var(--navy);
            font-size: 1.4rem;
            margin-bottom: 10px;
            text-transform: uppercase;
        }
        .brz-contact-card p {
            font-family: var(--font-body);
            color: var(--navy);
            opacity: 0.8;
            margin: 0;
            font-size: 1rem;
        }

        /* Contact Form */
        .brz-contact-form-wrap {
            background: var(--white);
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.05);
        }
        .form-control {
            border: 1px solid rgba(0,0,0,0.1);
            border-radius: 4px;
            padding: 15px 20px;
            font-family: var(--font-body);
            font-size: 1rem;
            transition: border-color 0.3s, box-shadow 0.3s;
            background: #fdfdfd;
        }
        .form-control:focus {
            border-color: var(--orange);
            box-shadow: 0 0 0 0.2rem rgba(243, 112, 33, 0.15);
            background: var(--white);
        }
        .brz-btn-submit {
            background: var(--purple);
            color: var(--white);
            border: none;
            padding: 15px 40px;
            font-family: var(--font-heading);
            font-size: 1.3rem;
            text-transform: uppercase;
            border-radius: 4px;
            letter-spacing: 0.05em;
            transition: background 0.3s, transform 0.2s;
            width: 100%;
        }
        .brz-btn-submit:hover {
            background: var(--orange);
            transform: translateY(-2px);
        }

        /* Map Section */
        .brz-map-container {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
            border: 5px solid var(--white);
        }
        .brz-map-container iframe {
            display: block;
        }
    </style>
</head>

<body>

<?php include 'includes/navbar.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<main>
    <!-- Page Header -->
    <section class="brz-page-header">
        <div class="container brz-page-header__content">
            <h1 class="brz-page-header__title brz-observe slide-up">CONTACT <span style="color:var(--orange);">US</span></h1>
            <div class="brz-page-header__breadcrumb brz-observe slide-up anim-delay-1">
                <a href="index.php">Home</a> / Contact Us
            </div>
        </div>
    </section>

    <!-- Brush Stroke Divider -->
    <div class="brz-svg-divider" style="background:transparent; margin-top:-59px; position:relative; z-index:10; pointer-events:none;">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60" preserveAspectRatio="none" style="display:block;width:100%;height:60px;">
            <path fill="#FDFBF7" d="
                M0,30 C120,10 240,40 360,25 C480,10 600,45 720,30
                C840,15 960,45 1080,30 C1200,15 1320,35 1440,25
                L1440,60 L0,60 Z
            "/>
        </svg>
    </div>

    <!-- Contact Info Cards Section -->
    <section style="padding: 70px 0 40px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4 brz-observe slide-up">
                    <div class="brz-contact-card">
                        <div class="brz-contact-icon"><i class="fas fa-map-marker-alt"></i></div>
                        <h3>Headquarters</h3>
                        <p>Uhuru muigai road<br>Dandora, Kenya</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 brz-observe slide-up anim-delay-1">
                    <div class="brz-contact-card">
                        <div class="brz-contact-icon"><i class="fas fa-phone-alt"></i></div>
                        <h3>Phone Support</h3>
                        <p>+254 712 181 609<br>Mon to Fri, 9am to 6pm</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 brz-observe slide-up anim-delay-2">
                    <div class="brz-contact-card" style="border-bottom-color: var(--yellow);">
                        <div class="brz-contact-icon" style="background: rgba(255, 193, 7, 0.15); color: var(--yellow);"><i class="fas fa-envelope"></i></div>
                        <h3>Email Us</h3>
                        <p>support@barriziorganization.org<br>Send us your query anytime!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section style="padding: 40px 0 80px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 brz-observe slide-up">
                    <div class="brz-contact-form-wrap">
                        <div class="text-center mb-4">
                            <span class="brz-section-label label-purple">Let's Connect</span>
                            <h2 class="section-title-navy" style="font-size: 2.2rem;">SEND US A MESSAGE</h2>
                            <div class="divider-orange mx-auto"></div>
                        </div>

                        <form class="form-contact contact_form" id="contactForm" method="post" novalidate="novalidate">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <input class="form-control" name="name" id="name" type="text" placeholder="Enter your full name" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input class="form-control" name="email" id="email" type="email" placeholder="Enter your email address" required>
                                </div>
                                <div class="col-12 mb-3">
                                    <input class="form-control" name="subject" id="subject" type="text" placeholder="Enter Subject" required>
                                </div>
                                <div class="col-12 mb-4">
                                    <textarea class="form-control" name="message" id="message" cols="30" rows="7" placeholder="Write your message here..." required></textarea>
                                </div>
                            </div>
                            <button type="submit" class="brz-btn-submit">Send Message</button>
                            <div id="responseMessage" class="mt-3 text-center" style="font-family: var(--font-body); font-weight: 600;"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section style="padding: 0 0 100px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 brz-observe slide-up">
                    <div class="text-center mb-4">
                        <h2 class="section-title-purple">FIND US ON THE MAP</h2>
                        <p style="font-family: var(--font-body); max-width: 600px; margin: 0 auto; color: var(--navy);">
                            Visit us at our office in Uhuru muigai road, Dandora, Kenya. We are always ready to connect with you and discuss how we can work together to bring positive change.
                        </p>
                    </div>
                    <div class="brz-map-container">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.86959355716!2d36.9006872!3d-1.2495115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f145236be3acf%3A0x4bc95aad188d9b3b!2sMuigai%20Kenyatta%20Rd%2C%20Nairobi!5e0!3m2!1sen!2ske!4v1780240597487!5m2!1sen!2ske"
                            width="100%" height="450" style="border:0;" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include 'includes/footer.php'; ?>

<!-- Scroll Up -->
<a href="#" id="brz-back-top" title="Go to Top">
    <i class="fas fa-chevron-up"></i>
</a>

<?php include 'includes/script.php'; ?>

<!-- AJAX Contact Form Script -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('#contactForm').submit(function(e) {
        e.preventDefault(); 
        if ($('#name').val() === '' || $('#email').val() === '' || $('#subject').val() === '' || $('#message').val() === '') {
            $('#responseMessage').html('<span style="color: #d9534f;">Please fill out all fields.</span>');
            return;
        }
        var formData = $(this).serialize();
        
        // Show loading state
        var submitBtn = $(this).find('button[type="submit"]');
        var originalText = submitBtn.text();
        submitBtn.text('Sending...').prop('disabled', true);
        
        $.ajax({
            type: 'POST',
            url: 'contact_process.php',
            data: formData,
            dataType: 'json',
            success: function(response) {
                submitBtn.text(originalText).prop('disabled', false);
                if (response.status === 'success') {
                    $('#responseMessage').html('<span style="color: #28a745;">' + response.message + '</span>');
                    $('#contactForm')[0].reset(); 
                } else {
                    $('#responseMessage').html('<span style="color: #d9534f;">' + response.message + '</span>');
                }
            },
            error: function() {
                submitBtn.text(originalText).prop('disabled', false);
                $('#responseMessage').html('<span style="color: #d9534f;">An error occurred. Please try again later.</span>');
            }
        });
    });
});
</script>

<script>
// Intersection Observer for animations
(function() {
    if (!('IntersectionObserver' in window)) {
        document.querySelectorAll('.brz-observe').forEach(function(el) {
            el.classList.add('brz-visible');
        });
        return;
    }

    var observer = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('brz-visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.12 });

    document.querySelectorAll('.brz-observe').forEach(function(el) {
        observer.observe(el);
    });
})();

// Back to top logic
(function() {
    var btn = document.getElementById('brz-back-top');
    if (!btn) return;
    window.addEventListener('scroll', function() {
        if (window.scrollY > 400) {
            btn.classList.add('visible');
        } else {
            btn.classList.remove('visible');
        }
    }, { passive: true });
})();
</script>

</body>
</html>

