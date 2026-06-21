<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adopt a Child | Barrizi Organisation</title>
    <?php include 'includes/head.php'; ?>
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
            background-image: url('assets/img/hero/back5.png');
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

        /* Adopt Block Styling */
        .brz-adopt-block {
            background: #fff;
            padding: 50px;
            border-radius: 8px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.05);
            margin-bottom: 30px;
            border-top: 5px solid var(--purple);
            display: flex;
            align-items: center;
            gap: 40px;
        }
        @media (max-width: 991px) {
            .brz-adopt-block { flex-direction: column; text-align: center; }
        }
        .brz-adopt-img {
            width: 100%;
            max-width: 400px;
            border-radius: 8px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .brz-adopt-text h2 {
            font-family: var(--font-heading);
            font-size: 2.5rem;
            color: var(--navy);
            margin-bottom: 15px;
            line-height: 1.1;
        }
        .brz-adopt-text p {
            font-size: 1.05rem;
            color: #555;
            margin-bottom: 0;
            line-height: 1.7;
        }

        /* Callout Box */
        .brz-callout {
            background: var(--yellow);
            padding: 40px;
            border-radius: 8px;
            text-align: center;
            border: 4px solid var(--navy);
            margin: 40px 0;
        }
        .brz-callout h3 {
            font-family: var(--font-heading);
            font-size: 2.2rem;
            color: var(--navy);
            margin: 0;
            line-height: 1.2;
        }
        
        /* Form Styling */
        .brz-form-wrap {
            background: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.08);
            border-top: 5px solid var(--orange);
            margin-bottom: 30px;
        }
        .brz-form-wrap h2 {
            font-family: var(--font-heading);
            font-size: 2.5rem;
            color: var(--purple);
            margin-bottom: 25px;
            text-align: center;
        }
        .brz-form-group {
            margin-bottom: 20px;
        }
        .brz-form-control {
            width: 100%;
            padding: 15px;
            border: 2px solid #eee;
            border-radius: 4px;
            font-size: 1rem;
            transition: border-color 0.3s;
        }
        .brz-form-control:focus {
            outline: none;
            border-color: var(--orange);
        }
        
        #responseMessage {
            margin-top: 20px;
            font-size: 1.1rem;
            font-weight: bold;
            text-align: center;
        }
        .success-message { color: green; }
        .error-message { color: red; }
    </style>
</head>
<body>
    <?php include 'includes/navbar.php'; ?>
    <?php include 'includes/preloader.php'; ?>

<?php include 'includes/sidebar.php'; ?>
<main>
    <!-- Page Header -->
    <section class="brz-page-header">
        <div class="container brz-page-header__content">
            <h1 class="brz-page-header__title brz-observe slide-up">DISTANCE <span style="color:var(--orange);">ADOPTION</span></h1>
            <div class="brz-page-header__breadcrumb brz-observe slide-up anim-delay-1">
                <a href="index.php">Home</a> / Adopt
            </div>
        </div>
    </section>

    <!-- Brush Stroke Divider -->
    <div class="brz-svg-divider" style="background:transparent; margin-top:-59px; position:relative; z-index:10; pointer-events:none;">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60" preserveAspectRatio="none" style="display:block;width:100%;height:60px;">
            <path fill="#FDFBF7" d="M0,30 C150,60 350,0 600,20 C850,40 1000,10 1200,30 C1350,45 1440,20 1440,20 L1440,60 L0,60 Z"/>
        </svg>
    </div>

    <!-- Content Section -->
    <section style="padding: 90px 0; background: var(--off-white);">
        <div class="container">
            
            <div class="text-center mb-5 brz-observe slide-up">
                <span class="brz-section-label label-orange">Transform a Child's Life</span>
                <h2 class="section-title-purple">WHY DISTANCE ADOPTION?</h2>
                <div class="divider-orange mx-auto"></div>
            </div>
            
            <div class="brz-adopt-block brz-observe slide-up">
                <img class="brz-adopt-img" src="assets/img/gallery/daycare.jpg" alt="empowerment">
                <div class="brz-adopt-text">
                    <h2>Empower a Girl, Change a Future</h2>
                    <p>When you join the <b>Distance Sponsorship Program</b> with Barrizi Organization Kenya, you’re giving a <b>girl child</b> the chance to build a better life. Your support provides crucial resources like <b>education, healthcare, and emotional support</b>, helping them overcome barriers such as <b>early pregnancies, gender discrimination, and poverty</b>. By sponsoring a girl, you’re not just helping one person, you’re transforming families and strengthening entire communities.</p>
                </div>
            </div>

            <div class="brz-adopt-block brz-observe slide-up flex-row-reverse" style="border-top-color: var(--orange);">
                <img class="brz-adopt-img" src="assets/img/gallery/education.jpg" alt="education">
                <div class="brz-adopt-text">
                    <h2>Transparent and Meaningful Connections</h2>
                    <p>At <b>Barrizi Organization Kenya</b>, we value <b>honesty and strong connections</b> between sponsors and the young girls they support. Through our program, you’ll receive regular updates, progress reports, and heartfelt messages from your sponsored girl. This ensures you can track her journey, see the <b>real impact of your support</b>, and stay connected despite the distance.</p>
                </div>
            </div>

            <div class="brz-callout brz-observe slide-up">
                <h3><i class="fas fa-lightbulb" style="color:var(--orange);"></i> You can adopt a child aged <span style="color:var(--orange); text-decoration:underline;">4 to 13</span> through distance parenting and provide them with support and care.</h3>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="brz-form-wrap brz-observe slide-up">
                        <h2>BECOME A SPONSOR TODAY</h2>
                        <p class="text-center mb-4" style="color:#666; font-size:1.1rem;">Thank you for your kindness and love! Fill in the form below so we can guide you on this meaningful journey.</p>
                        
                        <form id="adoptForm" method="post">
                            <div class="row">
                                <div class="col-md-6 brz-form-group">
                                    <input class="brz-form-control" name="first-name" id="first-name" type="text" placeholder="First Name" required />
                                </div>
                                <div class="col-md-6 brz-form-group">
                                    <input class="brz-form-control" name="last-name" id="last-name" type="text" placeholder="Last Name" required />
                                </div>
                            </div>
                            <div class="brz-form-group">
                                <input class="brz-form-control" name="email" id="email" type="email" placeholder="Email Address" required />
                            </div>
                            <div class="brz-form-group">
                                <input class="brz-form-control" name="address" id="address" type="text" placeholder="Physical Address" required />
                            </div>
                            <div class="row">
                                <div class="col-md-6 brz-form-group">
                                    <input class="brz-form-control" name="phone" id="phone" type="text" placeholder="Phone Number" required />
                                </div>
                                <div class="col-md-6 brz-form-group">
                                    <input class="brz-form-control" name="country" id="country" type="text" placeholder="Country" required />
                                </div>
                            </div>
                            
                            <input type="hidden" name="p-id" id="p-id" value="12345" />
                            
                            <button type="submit" class="brz-btn brz-btn-purple w-100 mt-3 text-center" style="font-size: 1.2rem; padding: 15px;">SUBMIT APPLICATION</button>
                            <div id="responseMessage"></div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Brush Stroke Divider -->
    <div class="brz-svg-divider" style="background:var(--off-white);">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60" preserveAspectRatio="none" style="display:block;width:100%;height:60px;">
            <path fill="#4A154B" d="M0,20 C100,40 200,5 300,25 C400,45 500,10 600,30 C700,50 800,15 900,35 C1000,55 1100,20 1200,40 C1300,60 1380,25 1440,40 L1440,60 L0,60 Z"/>
        </svg>
    </div>

    <!-- Direct CTA -->
    <section class="brz-cta-banner" style="background:var(--purple); padding:80px 0; text-align:center;">
        <div class="container" style="position:relative; z-index:2;">
            <h2 class="brz-cta-banner__title brz-observe slide-up" style="font-family:var(--font-heading); font-size:clamp(2rem, 5vw, 4rem); color:var(--white);">
                PARTNER WITH BARRIZI. CHANGE LIVES. CREATE IMPACT.
            </h2>
        </div>
    </section>

</main>

<?php include 'includes/footer.php'; ?>

<!-- Scroll Up -->
<a href="#" id="brz-back-top" title="Go to Top">
    <i class="fas fa-chevron-up"></i>
</a>

<?php include 'includes/script.php'; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
$(document).ready(function() {
    $('#adoptForm').on('submit', function(event) {
        event.preventDefault();

        var isValid = true;
        $('input[required]').each(function() {
            if ($(this).val() === "") {
                isValid = false;
                $(this).css('border-color', 'red');
            } else {
                $(this).css('border-color', '');
            }
        });

        if (!isValid) {
            $('#responseMessage').html("Please fill all required fields.").removeClass('success-message').addClass('error-message');
            return;
        }

        var formData = $(this).serialize();

        $.ajax({
            url: 'adopt_process.php',
            type: 'POST',
            data: formData,
            success: function(response) {
                if (response.indexOf("Error") !== -1) {
                    $('#responseMessage').html(response).removeClass('success-message').addClass('error-message');
                } else {
                    $('#responseMessage').html(response).removeClass('error-message').addClass('success-message');
                }
                $('#adoptForm')[0].reset();
            },
            error: function() {
                $('#responseMessage').html("There was an error processing your request. Please try again.").removeClass('success-message').addClass('error-message');
            }
        });
    });
});
</script>
</body>
</html>

