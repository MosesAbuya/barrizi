<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer | Barrizi Organisation</title>
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
            background-image: url('assets/img/b21.jpg');
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

        /* Video Section */
        .brz-video-wrap {
            max-width: 900px;
            margin: 0 auto 50px;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
            border: 4px solid var(--orange);
        }
        .brz-video-wrap video {
            width: 100%;
            display: block;
        }
        
        /* Form Styling */
        .brz-form-wrap {
            background: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.08);
            border-top: 5px solid var(--purple);
            margin-bottom: 30px;
        }
        .brz-form-wrap h2 {
            font-family: var(--font-heading);
            font-size: 2.5rem;
            color: var(--navy);
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
            background: #fdfdfd;
        }
        .brz-form-control:focus {
            outline: none;
            border-color: var(--purple);
            background: #fff;
        }
        
        #responseMessage {
            margin-top: 20px;
            font-size: 1.1rem;
            font-weight: bold;
            text-align: center;
        }
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
            <h1 class="brz-page-header__title brz-observe slide-up">VOLUNTEER <span style="color:var(--orange);">WITH US</span></h1>
            <div class="brz-page-header__breadcrumb brz-observe slide-up anim-delay-1">
                <a href="index.php">Home</a> / Volunteer
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
                <span class="brz-section-label label-orange">Make a Difference</span>
                <h2 class="section-title-purple">TRANSFORM A LIFE TODAY</h2>
                <div class="divider-orange mx-auto"></div>
                <p class="mt-4" style="font-size:1.1rem; color:#555; max-width:800px; margin:0 auto; line-height:1.7;">
                    Volunteering with Barrizi Organization in Kenya allows you to make a lasting impact by supporting projects that uplift vulnerable young girls, families, and communities. Your time and skills will help drive positive change, whether through educational programs, outreach, or fundraising. By volunteering, you’ll be part of a dedicated team committed to transforming lives. Together, we can create sustainable change and inspire hope for a better tomorrow.
                </p>
            </div>

            <div class="brz-video-wrap brz-observe slide-up">
                <video src="assets/video/vid.mp4" controls preload="metadata" poster="assets/img/b23.jpg"></video>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="brz-form-wrap brz-observe slide-up">
                        <h2>VOLUNTEER APPLICATION</h2>
                        <p class="text-center mb-4" style="color:#666; font-size:1.05rem;">Fill in the form below to participate and share your skills with us.</p>
                        
                        <form id="volunteerForm" method="post">
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
                                    <input class="brz-form-control" name="age" id="age" type="number" placeholder="Your Age" required />
                                </div>
                            </div>
                            <div class="brz-form-group">
                                <input class="brz-form-control" name="interests" id="interests" type="text" placeholder="Areas of Interest (e.g. teaching, fundraising)" required />
                            </div>
                            <div class="brz-form-group">
                                <select class="brz-form-control" name="gender" id="gender" required>
                                    <option value="" disabled selected>Select your gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                    <option value="prefer_not_to_say">Prefer not to say</option>
                                </select>
                            </div>
                            
                            <input type="hidden" name="p-id" id="p-id" value="12345">
                            
                            <button type="submit" class="brz-btn brz-btn-orange w-100 mt-3 text-center" style="font-size: 1.2rem; padding: 15px;">SUBMIT APPLICATION</button>
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
            <path fill="#0B192C" d="M0,20 C100,40 200,5 300,25 C400,45 500,10 600,30 C700,50 800,15 900,35 C1000,55 1100,20 1200,40 C1300,60 1380,25 1440,40 L1440,60 L0,60 Z"/>
        </svg>
    </div>

    <!-- Direct CTA -->
    <section class="brz-cta-banner" style="background:var(--navy); padding:80px 0; text-align:center;">
        <div class="container" style="position:relative; z-index:2;">
            <h2 class="brz-cta-banner__title brz-observe slide-up" style="font-family:var(--font-heading); font-size:clamp(2rem, 5vw, 4rem); color:var(--white);">
                BE PART OF THE CHANGE. BE PART OF THEIR FUTURE.
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('#volunteerForm').submit(function(e) {
        e.preventDefault(); 
        
        var isValid = true;
        $('input[required], select[required]').each(function() {
            if ($(this).val() === "" || $(this).val() === null) {
                isValid = false;
                $(this).css('border-color', 'red');
            } else {
                $(this).css('border-color', '');
            }
        });

        if (!isValid) {
            $('#responseMessage').html('<p style="color: red;">Please fill out all required fields.</p>');
            return;
        }

        var formData = $(this).serialize();

        $.ajax({
            type: 'POST',
            url: 'volunteer_process.php',
            data: formData,
            dataType: 'json',
            success: function(response) {
                if (response.status === 'success') {
                    $('#responseMessage').html('<p style="color: green;">' + response.message + '</p>');
                    $('#volunteerForm')[0].reset(); 
                } else {
                    $('#responseMessage').html('<p style="color: red;">' + response.message + '</p>');
                }
            },
            error: function() {
                $('#responseMessage').html('<p style="color: red;">An error occurred. Please try again later.</p>');
            }
        });
    });
});
</script>
</body>
</html>

