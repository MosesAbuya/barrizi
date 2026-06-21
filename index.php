<!doctype html>
<html lang="en">

<head>
    <?php include 'includes/head.php'; ?>
    <title>Barrizi Organisation Kenya Transforming Lives in Dandora, Nairobi</title>
    <meta name="description"
        content="Barrizi Organisation empowers children, vulnerable teens, and young mothers in Dandora, Nairobi through education, vocational training, and family support. Partner with us to create lasting impact.">

    <style>
        /* Page-level overrides only */
        body {
            padding-top: 0;
        }

        /* Ensure existing theme navbar is hidden on homepage to avoid conflict */
        .header-area {
            display: none !important;
        }

        /* Make our new navbar flush with top */
        #brz-header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 9999;
        }

        /* FIX FOR SVG WAVY DIVIDER GAPS */
        .brz-svg-divider {
            line-height: 0 !important;
            font-size: 0 !important;
            margin: -1px 0 !important;
            /* Pull up/down slightly to remove sub-pixel rendering gaps */
            padding: 0 !important;
            position: relative;
            z-index: 5;
        }

        .brz-svg-divider svg {
            display: block;
            margin: 0;
            padding: 0;
            width: 100%;
        }
    </style>
</head>

<body>

    <?php include 'includes/navbar.php'; ?>
    <?php include 'includes/sidebar.php'; ?>

    <main>

        <!-- ================================================================
         1. HERO SECTION  Full-bleed, split layout, massive condensed type
         ================================================================ -->
        <section class="brz-hero" id="hero" aria-label="Homepage hero">

            <!-- Background photo slides -->
            <div class="brz-hero__slide active" style="background-image: url('assets/new/project/2.png');"></div>
            <div class="brz-hero__slide" style="background-image: url('assets/new/project/23.png');"></div>
            <div class="brz-hero__slide" style="background-image: url('assets/new/h5.jpg');"></div>

            <!-- Purple-to-transparent gradient overlay -->
            <div class="brz-hero__overlay"></div>

            <!-- Content -->
            <div class="brz-hero__content">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 col-lg-9 col-md-11">


                            <!-- Tagline -->
                            <span class="brz-hero__tagline brz-observe slide-up anim-delay-2">EDUCATE · EMPOWER ·
                                ELEVATE</span>

                            <!-- Main headline  mixed purple & orange per poster -->
                            <h1 class="brz-hero__title brz-observe slide-up anim-delay-3">
                                TRANSFORMING<br>
                                LIVES IN DANDORA,<br>
                                <span class="hl-orange">NAIROBI</span>
                            </h1>

                            <!-- Description box with left orange border -->
                            <div class="brz-hero__desc brz-observe slide-up anim-delay-4">
                                <p>Barrizi Organisation empowers children, vulnerable teens, and young mothers through
                                    education, vocational training, and family support creating pathways out of poverty
                                    and towards dignity, independence, and hope.</p>
                            </div>

                            <!-- CTA Buttons -->
                            <div class="d-flex flex-wrap brz-observe slide-up anim-delay-5" style="gap:16px;">
                                <a href="donation.php" class="brz-btn brz-btn-orange">PARTNER WITH US</a>
                                <a href="about.php" class="brz-btn brz-btn-white-outline">SEE OUR WORK</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Circular badge  EDUCATE EMPOWER ELEVATE (like poster) -->
            <div class="brz-hero__badge" aria-hidden="true">
                EDUCATE<br>EMPOWER<br>ELEVATE
            </div>

            <!-- Slide indicator dots -->
            <div class="brz-hero__dots" id="heroSliderDots" aria-hidden="true">
                <div class="brz-hero__dot active" data-slide="0"></div>
                <div class="brz-hero__dot" data-slide="1"></div>
                <div class="brz-hero__dot" data-slide="2"></div>
            </div>

        </section>
        <!-- / HERO -->


        <!-- ================================================================
         2. PROGRAMME ICONS STRIP  Purple bar with circular icons (poster style)
         ================================================================ -->
        <section class="brz-icons-strip" id="programmes-strip"
            style="background:#4A154B; padding:70px 0; border-bottom:none;">
            <div class="container">
                <div class="row text-center justify-content-center">

                    <div class="col-6 col-sm-3 col-md-3 brz-observe slide-up anim-delay-1">
                        <div class="brz-icon-item" style="text-align:center;">
                            <div
                                style="width:100px; height:100px; background:#F37021; border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 15px; color:#4A154B; font-size:0px;">
                            </div>
                            <span
                                style="font-family:'Bebas Neue',sans-serif; color:#fff; font-size:1.2rem; letter-spacing:0.05em; line-height:1.2; display:block;">EDUCATION<br>SUPPORT</span>
                        </div>
                    </div>

                    <div class="col-6 col-sm-3 col-md-3 brz-observe slide-up anim-delay-2">
                        <div class="brz-icon-item" style="text-align:center;">
                            <div
                                style="width:100px; height:100px; background:#F37021; border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 15px; color:#fff; font-size:2.5rem;">
                                <i class="fas fa-cut"></i>
                            </div>
                            <span
                                style="font-family:'Bebas Neue',sans-serif; color:#fff; font-size:1.2rem; letter-spacing:0.05em; line-height:1.2; display:block;">VOCATIONAL<br>TRAINING</span>
                        </div>
                    </div>

                    <div class="col-6 col-sm-3 col-md-3 brz-observe slide-up anim-delay-3">
                        <div class="brz-icon-item" style="text-align:center;">
                            <div
                                style="width:100px; height:100px; background:#F37021; border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 15px; color:#fff; font-size:2.5rem;">
                                <i class="fas fa-heart"></i>
                            </div>
                            <span
                                style="font-family:'Bebas Neue',sans-serif; color:#fff; font-size:1.2rem; letter-spacing:0.05em; line-height:1.2; display:block;">SUPPORT
                                FOR<br>YOUNG MOTHERS</span>
                        </div>
                    </div>

                    <div class="col-6 col-sm-3 col-md-3 brz-observe slide-up anim-delay-4">
                        <div class="brz-icon-item" style="text-align:center;">
                            <div
                                style="width:100px; height:100px; background:transparent; border:3px solid #fff; border-radius:50%; display:flex; align-items:center; justify-content:center; margin:0 auto 15px; color:#fff; font-size:3rem;">
                                <i class="fas fa-child"></i>
                            </div>
                            <span
                                style="font-family:'Bebas Neue',sans-serif; color:#fff; font-size:1.2rem; letter-spacing:0.05em; line-height:1.2; display:block;">CHILD
                                DEVELOPMENT<br>&amp; ENRICHMENT</span>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- / ICONS STRIP -->


        <!-- ================================================================
         BRUSH-STROKE SVG DIVIDER: Purple → Off-white
         ================================================================ -->
        <div class="brz-svg-divider" style="background:#4A154B; margin-top:-2px !important;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 90" preserveAspectRatio="none"
                style="display:block;width:100%;height:80px;">
                <path fill="#FDFBF7" d="
                M0,45
                C80,30 160,65 240,52
                C320,40 400,68 480,56
                C560,44 640,70 720,58
                C800,46 880,72 960,60
                C1040,48 1120,74 1200,62
                C1280,50 1360,66 1440,55
                L1440,90 L0,90 Z
            " />
                <path fill="#FDFBF7" opacity="0.5" d="
                M0,60
                C100,48 200,72 300,60
                C400,48 500,70 600,58
                C700,46 800,70 900,58
                C1000,46 1100,68 1200,56
                C1300,44 1380,65 1440,55
                L1440,90 L0,90 Z
            " />
            </svg>
        </div>


        <!-- ================================================================
         3. ABOUT / MISSION  The Challenge in Dandora
         (Mirrors "From the Dumpsite to a Brighter Future" poster)
         ================================================================ -->
        <section class="brz-about py-5" id="about" style="background:#FDFBF7;">
            <div class="container py-5">
                <div class="row align-items-center">

                    <!-- Image column (Polaroid treatment) -->
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <div class="brz-about-img-stack position-relative" style="padding:30px;">
                            <!-- Orange accent block behind -->
                            <div
                                style="position:absolute; top:0; right:0; width:55%; height:65%; background:#F37021; z-index:0; transform:translate(15px,-15px);">
                            </div>
                            <!-- Main polaroid image -->
                            <div class="brz-polaroid brz-polaroid-main"
                                style="position:relative; z-index:2; transform:rotate(-2deg); background:#fff; padding:12px 12px 50px; box-shadow:0 15px 40px rgba(0,0,0,0.18); display:block;">
                                <img src="images/new/children playing on dirt field.jpeg" alt="Children in Dandora community"
                                    style="width:100%; height:260px; object-fit:cover; object-position:top; display:block;">
                                <div class="brz-polaroid-caption"
                                    style="font-family:'Montserrat',sans-serif; font-size:0.75rem; color:#888; text-align:center; padding-top:10px; font-style:italic;">
                                    Children of Dandora community, Nairobi</div>
                            </div>
                            <!-- Secondary overlapping polaroid -->
                            <div class="brz-polaroid"
                                style="position:absolute; right:-10px; bottom:-20px; z-index:3; transform:rotate(4deg); background:#fff; padding:10px 10px 40px; box-shadow:0 10px 25px rgba(0,0,0,0.2); width:48%; display:none;"
                                id="polaroidSub">
                                <img src="images/new/children posing.jpeg" alt="Youth empowerment programme"
                                    style="width:100%; height:160px; object-fit:cover; display:block;">
                            </div>
                        </div>
                    </div>

                    <!-- Text column -->
                    <div class="col-lg-6">
                        <div class="brz-observe slide-right">
                            <span class="brz-label-box-orange">THE CHALLENGE IN DANDORA</span>
                            <h2 class="brz-headline"
                                style="color:#4A154B; margin-top:16px; font-size:clamp(2rem,5vw,4rem);">
                                FROM THE DUMPSITE<br>
                                <span style="color:#F37021;">TO A BRIGHTER FUTURE</span>
                            </h2>
                            <div class="divider-orange"></div>

                            <p style="font-size:1rem; color:#3a3a3a; font-weight:500; margin-bottom:20px;">
                                Dandora is Nairobi's primary dumping site, spanning approx. 30 acres and supporting
                                around 3,000 families.
                            </p>

                            <!-- Challenge bullet list -->
                            <div class="mb-3">
                                <div class="brz-challenge-item">
                                    <span class="brz-challenge-icon"><i class="fas fa-times-circle"></i></span>
                                    <span class="brz-challenge-text">Children earn as little as <strong>$1.50 per
                                            day</strong> scavenging waste</span>
                                </div>
                                <div class="brz-challenge-item">
                                    <span class="brz-challenge-icon"><i class="fas fa-times-circle"></i></span>
                                    <span class="brz-challenge-text">Rising cases of <strong>child labour, exploitation,
                                            and early pregnancy</strong></span>
                                </div>
                                <div class="brz-challenge-item">
                                    <span class="brz-challenge-icon"><i class="fas fa-times-circle"></i></span>
                                    <span class="brz-challenge-text">Exposure to <strong>drugs, crime, and unsafe living
                                            conditions</strong></span>
                                </div>
                                <div class="brz-challenge-item">
                                    <span class="brz-challenge-icon"><i class="fas fa-times-circle"></i></span>
                                    <span class="brz-challenge-text">High dropout rates, often due to <strong>hunger not
                                            school fees</strong></span>
                                </div>
                            </div>

                            <a href="about.php" class="brz-btn brz-btn-purple">OUR APPROACH</a>
                            <a href="donate.php" class="brz-btn brz-btn-orange ms-2" style="margin-left:12px;">DONATE
                                NOW</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!-- ================================================================
         BRUSH-STROKE SVG DIVIDER: Off-white → Purple
         ================================================================ -->
        <div class="brz-svg-divider" style="background:#FDFBF7;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 90" preserveAspectRatio="none"
                style="display:block;width:100%;height:80px;">
                <path fill="#4A154B" d="
                M0,30
                C90,50 180,18 270,35
                C360,52 450,22 540,40
                C630,58 720,24 810,42
                C900,60 990,26 1080,44
                C1170,62 1260,28 1350,45
                L1440,30 L1440,90 L0,90 Z
            " />
                <path fill="#4A154B" opacity="0.35" d="
                M0,50
                C120,35 240,65 360,50
                C480,35 600,60 720,45
                C840,30 960,55 1080,40
                C1200,25 1320,50 1440,40
                L1440,90 L0,90 Z
            " />
            </svg>
        </div>


        <!-- ================================================================
         4. IMPACT STATS  Giant yellow numbers on purple (poster style)
         ================================================================ -->
        <section class="brz-impact" id="impact" style="background:#4A154B; padding:90px 0;">
            <div class="container">
                <h2 class="brz-impact-title brz-observe slide-up"
                    style="font-family:'Bebas Neue',sans-serif; font-size:clamp(2rem,5vw,3.5rem); color:#fff; text-align:center; margin-bottom:50px; letter-spacing:0.05em;">
                    OUR IMPACT <span style="color:#F37021;">(2020–2024)</span>
                </h2>

                <div class="row text-center">

                    <div class="col-6 col-md-3 mb-4">
                        <div class="brz-impact-item brz-observe scale-in anim-delay-1">
                            <span class="brz-impact-icon"><i class="fas fa-users"></i></span>
                            <span class="brz-impact-number">200</span>
                            <span class="brz-impact-label">Children Rescued &amp;<br>Enrolled in Schools</span>
                        </div>
                    </div>

                    <div class="col-6 col-md-3 mb-4">
                        <div class="brz-impact-item brz-observe scale-in anim-delay-2">
                            <span class="brz-impact-icon"><i class="fas fa-utensils"></i></span>
                            <span class="brz-impact-number"
                                style="font-size:clamp(2.5rem,6vw,6rem); color:#FFC107;">↑</span>
                            <span class="brz-impact-label">Increased School Retention<br>through Feeding
                                Programmes</span>
                        </div>
                    </div>

                    <div class="col-6 col-md-3 mb-4">
                        <div class="brz-impact-item brz-observe scale-in anim-delay-3">
                            <span class="brz-impact-icon"><i class="fas fa-female"></i></span>
                            <span class="brz-impact-number">6</span>
                            <span class="brz-impact-label">Teenage Mothers<br>Reintegrated into School</span>
                        </div>
                    </div>

                    <div class="col-6 col-md-3 mb-4">
                        <div class="brz-impact-item brz-observe scale-in anim-delay-4">
                            <span class="brz-impact-icon"><i class="fas fa-tools"></i></span>
                            <span class="brz-impact-number">15</span>
                            <span class="brz-impact-label">Teens Enrolled in<br>Vocational Training</span>
                        </div>
                    </div>

                </div>

                <!-- Quote callout from partner poster -->
                <div class="row justify-content-center mt-5">
                    <div class="col-lg-8">
                        <div class="brz-quote-section brz-observe slide-up"
                            style="background:rgba(0,0,0,0.3); border-left:6px solid #F37021; padding:40px; border-radius:4px;">
                            <span class="brz-quote-mark"
                                style="font-family:Georgia,serif; font-size:5rem; color:#F37021; line-height:0.5; display:block; margin-bottom:20px;">&ldquo;</span>
                            <p class="brz-quote-text">
                                Every child deserves a chance. Every young person deserves a future. Every family
                                deserves hope.
                            </p>
                            <p class="brz-quote-cta"
                                style="font-family:'Bebas Neue',sans-serif; font-size:clamp(1.4rem,3vw,2.2rem); color:#FFC107; text-transform:uppercase; letter-spacing:0.05em;">
                                TOGETHER, WE CAN MAKE IT POSSIBLE.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </section>


        <!-- ================================================================
         BRUSH-STROKE SVG DIVIDER: Purple → Off-white (reversed)
         ================================================================ -->
        <div class="brz-svg-divider flip-y" style="background:#4A154B;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 90" preserveAspectRatio="none"
                style="display:block;width:100%;height:80px;">
                <path fill="#FDFBF7" d="
                M0,45
                C80,30 160,65 240,52
                C320,40 400,68 480,56
                C560,44 640,70 720,58
                C800,46 880,72 960,60
                C1040,48 1120,74 1200,62
                C1280,50 1360,66 1440,55
                L1440,0 L0,0 Z
            " />
            </svg>
        </div>


        <!-- ================================================================
         5. OUR PROGRAMMES  Circular icon cards (poster table style)
         ================================================================ -->
        <section class="brz-programmes" id="programmes" style="background:#FDFBF7; padding:90px 0;">
            <div class="container">

                <style>
                    .brz-prog-card {
                        background: #fff;
                        padding: 40px 30px;
                        border-radius: 8px;
                        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
                        transition: all 0.3s ease;
                        border-top: 5px solid #FFC107;
                        height: 100%;
                    }

                    .brz-prog-card:hover {
                        transform: translateY(-10px);
                        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
                        border-top-color: #F37021;
                    }

                    .brz-prog-card__icon {
                        width: 70px;
                        height: 70px;
                        border-radius: 50%;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        font-size: 1.8rem;
                        margin-bottom: 25px;
                    }

                    .icon-orange {
                        background: rgba(243, 112, 33, 0.1);
                        color: #F37021;
                    }

                    .icon-yellow {
                        background: rgba(255, 193, 7, 0.15);
                        color: #FFC107;
                    }

                    .icon-purple {
                        background: rgba(74, 21, 75, 0.1);
                        color: #4A154B;
                    }

                    .icon-navy {
                        background: rgba(11, 25, 44, 0.1);
                        color: #0B192C;
                    }

                    .brz-prog-card__title {
                        font-family: 'Bebas Neue', sans-serif;
                        font-size: 1.8rem;
                        color: #0B192C;
                        margin-bottom: 15px;
                        letter-spacing: 0.03em;
                    }

                    .brz-prog-card__list {
                        list-style: none;
                        padding: 0;
                        margin: 0;
                        text-align: left;
                    }

                    .brz-prog-card__list li {
                        position: relative;
                        padding-left: 20px;
                        margin-bottom: 10px;
                        color: #555;
                        font-size: 0.95rem;
                        line-height: 1.5;
                    }

                    .brz-prog-card__list li::before {
                        content: '•';
                        position: absolute;
                        left: 0;
                        color: #F37021;
                        font-size: 1.2rem;
                        line-height: 1;
                    }
                </style>
                <div class="row justify-content-center text-center mb-5">
                    <div class="col-lg-7">
                        <span class="brz-section-label label-purple brz-observe slide-up">A Pathway Out of
                            Poverty</span>
                        <h2 class="section-title-purple brz-observe slide-up anim-delay-1"
                            style="font-size:clamp(2rem,5vw,4rem); color:#4A154B;">OUR PROGRAMMES</h2>
                        <div class="divider-orange mx-auto"></div>
                        <p class="brz-observe slide-up anim-delay-2"
                            style="font-size:0.95rem; color:#555; font-weight:500;">A holistic, school-based and
                            family-centred model that creates lasting change.</p>
                    </div>
                </div>

                <div class="row justify-content-center">

                    <!-- Education Support -->
                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="brz-prog-card-wrap">
                            <div class="brz-prog-card brz-observe slide-up anim-delay-1">
                                <div class="brz-prog-card__icon icon-orange">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>
                                <h3 class="brz-prog-card__title">Education Support</h3>
                                <ul class="brz-prog-card__list">
                                    <li>School enrolment, fees, uniforms &amp; books</li>
                                    <li>Daily school meals</li>
                                    <li>Stationery &amp; learning materials</li>
                                    <li>Academic mentorship</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Secondary & Further Education -->
                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="brz-prog-card-wrap">
                            <div class="brz-prog-card brz-observe slide-up anim-delay-2">
                                <div class="brz-prog-card__icon icon-yellow">
                                    <i class="fas fa-book"></i>
                                </div>
                                <h3 class="brz-prog-card__title">Secondary &amp; Further Education</h3>
                                <ul class="brz-prog-card__list">
                                    <li>Sponsorship for high school</li>
                                    <li>Full learning materials &amp; support</li>
                                    <li>University pathway guidance</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Vocational & Skills Training -->
                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="brz-prog-card-wrap">
                            <div class="brz-prog-card brz-observe slide-up anim-delay-3">
                                <div class="brz-prog-card__icon icon-orange">
                                    <i class="fas fa-cut"></i>
                                </div>
                                <h3 class="brz-prog-card__title">Vocational &amp; Skills Training</h3>
                                <ul class="brz-prog-card__list">
                                    <li>Tailoring, catering, hairdressing</li>
                                    <li>Computer skills &amp; more</li>
                                    <li>Sports, music, arts, acrobatics</li>
                                    <li>Taekwondo</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Support for Young Mothers -->
                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="brz-prog-card-wrap">
                            <div class="brz-prog-card brz-observe slide-up anim-delay-4">
                                <div class="brz-prog-card__icon icon-purple">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <h3 class="brz-prog-card__title">Support for Young Mothers</h3>
                                <ul class="brz-prog-card__list">
                                    <li>Entrepreneurship training</li>
                                    <li>Business start-up support</li>
                                    <li>Counselling &amp; mental health</li>
                                    <li>School reintegration</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Child Development & Enrichment -->
                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="brz-prog-card-wrap">
                            <div class="brz-prog-card brz-observe slide-up anim-delay-5">
                                <div class="brz-prog-card__icon icon-navy">
                                    <i class="fas fa-child"></i>
                                </div>
                                <h3 class="brz-prog-card__title">Child Development &amp; Enrichment</h3>
                                <ul class="brz-prog-card__list">
                                    <li>Daycare services</li>
                                    <li>Holiday programmes</li>
                                    <li>Mentorship &amp; life skills</li>
                                    <li>Nutritional support</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Rights Advocacy -->
                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="brz-prog-card-wrap">
                            <div class="brz-prog-card brz-observe slide-up anim-delay-6">
                                <div class="brz-prog-card__icon icon-orange">
                                    <i class="fas fa-fist-raised"></i>
                                </div>
                                <h3 class="brz-prog-card__title">Rights Advocacy</h3>
                                <ul class="brz-prog-card__list">
                                    <li>Fighting gender-based violence</li>
                                    <li>Community awareness</li>
                                    <li>Safe space creation</li>
                                    <li>Policy engagement</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="text-center mt-3">
                    <a href="program.php" class="brz-btn brz-btn-purple">VIEW ALL PROGRAMMES</a>
                </div>

            </div>
        </section>
        <!-- / PROGRAMMES -->

        <!-- ================================================================
         IMPACT IN ACTION CAROUSEL
         ================================================================ -->
        <section style="background:#0B192C; padding:0; position:relative;" id="impact-carousel-section">
            <!-- Main Slider Container -->
            <div class="brz-impact-slider"
                style="position:relative; width:100%; height:85vh; min-height:650px; overflow:hidden;">

                <?php
                $impact_texts = [
                    1 => ["EDUCATION", "Empowering the next generation through quality learning environments."],
                    2 => ["COMMUNITY", "Building strong networks of support for vulnerable families."],
                    3 => ["NUTRITION", "Ensuring no child learns on an empty stomach."],
                    4 => ["VOCATIONAL", "Equipping young mothers with tailoring and design skills."],
                    5 => ["HEALTH", "Promoting hygiene and well-being in Dandora."],
                    6 => ["SPORTS", "Fostering teamwork and discipline through athletics."],
                    7 => ["ARTS", "Unlocking creative potential and self-expression."],
                    8 => ["ENTERPRISE", "Supporting small business incubation for youth."],
                    9 => ["ADVOCACY", "Fighting for the rights of women and children."],
                    10 => ["MENTORSHIP", "Guiding teenagers towards brighter futures."]
                ];
                for ($i = 1; $i <= 10; $i++):
                    $title = isset($impact_texts[$i]) ? $impact_texts[$i][0] : "IMPACT";
                    $desc = isset($impact_texts[$i]) ? $impact_texts[$i][1] : "Transforming lives in Dandora through sustainable, community-led initiatives.";
                    ?>
                    <div class="brz-impact-slide <?php echo $i === 1 ? 'active' : ''; ?>"
                        data-slide-index="<?php echo $i; ?>"
                        style="position:absolute; top:0; left:0; width:100%; height:100%; opacity:<?php echo $i === 1 ? '1' : '0'; ?>; transition:opacity 1.2s ease, filter 1.2s ease; z-index:<?php echo $i === 1 ? '2' : '1'; ?>; filter:<?php echo $i === 1 ? 'blur(0)' : 'blur(10px)'; ?>;">
                        <!-- Background Image with Auto Zoom -->
                        <div class="brz-auto-zoom-bg"
                            style="position:absolute; top:0; left:0; width:100%; height:100%; background-image:url('assets/new/project/<?php echo $i; ?>.png'); background-size:cover; background-position:center;">
                        </div>

                        <!-- Gradient Overlay (Dark Morph to Right) -->
                        <div
                            style="position:absolute; top:0; left:0; width:100%; height:100%; background: linear-gradient(to right, rgba(11,25,44,0.1) 0%, rgba(11,25,44,0.95) 70%, rgba(11,25,44,1) 100%);">
                        </div>

                        <!-- Text Content (Right Aligned) -->
                        <div class="container h-100" style="position:relative; z-index:3;">
                            <div class="row h-100 align-items-center justify-content-end" style="padding-bottom:100px;">
                                <!-- Padding for thumbnails -->
                                <div class="col-lg-5 text-left" style="padding-right:40px;">
                                    <span
                                        style="font-family:'Bebas Neue',sans-serif; color:#F37021; font-size:1.5rem; letter-spacing:0.1em; display:block; margin-bottom:10px;">ACTION
                                        & RESULTS</span>
                                    <h2
                                        style="font-family:'Bebas Neue',sans-serif; font-size:clamp(3rem,6vw,5rem); color:#fff; line-height:1; margin-bottom:20px;">
                                        <?php echo $title; ?>
                                    </h2>
                                    <p
                                        style="font-size:1.1rem; color:rgba(255,255,255,0.85); line-height:1.6; margin-bottom:30px;">
                                        <?php echo $desc; ?>
                                    </p>
                                    <a href="projects.php" class="brz-btn brz-btn-orange">SEE FULL REPORT <i
                                            class="fas fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>

                <!-- Floating Thumbnail Pagination -->
                <div
                    style="position:absolute; bottom:0; left:0; width:100%; z-index:10; background:linear-gradient(to top, rgba(11,25,44,1), rgba(11,25,44,0.7) 50%, transparent); padding:30px 0 15px;">
                    <div class="container-fluid">
                        <div class="brz-impact-thumbnails"
                            style="display:flex; gap:8px; overflow-x:auto; padding-bottom:5px; scrollbar-width:none; -ms-overflow-style:none;">
                            <?php for ($i = 1; $i <= 10; $i++): ?>
                                <div class="brz-thumb-item <?php echo $i === 1 ? 'active' : ''; ?>"
                                    data-target-slide="<?php echo $i; ?>"
                                    style="flex: 0 0 80px; height:50px; cursor:pointer; opacity:0.5; transition:all 0.3s ease; border:2px solid transparent; border-radius:4px; overflow:hidden;">
                                    <img src="assets/new/project/<?php echo $i; ?>.png"
                                        style="width:100%; height:100%; object-fit:cover;">
                                </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
            </div>

            <style>
                .brz-impact-thumbnails::-webkit-scrollbar {
                    display: none;
                }

                .brz-thumb-item:hover {
                    opacity: 0.9;
                }

                .brz-thumb-item.active {
                    opacity: 1;
                    border-color: #FFC107;
                    transform: scale(1.1);
                    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
                }

                @keyframes autoZoom {
                    0% {
                        transform: scale(1);
                    }

                    100% {
                        transform: scale(1.15);
                    }
                }

                .brz-impact-slide.active .brz-auto-zoom-bg {
                    animation: autoZoom 8s linear forwards;
                }
            </style>
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    const thumbs = document.querySelectorAll('.brz-thumb-item');
                    const slides = document.querySelectorAll('.brz-impact-slide');
                    const thumbnailContainer = document.querySelector('.brz-impact-thumbnails');
                    let currentIndex = 1;
                    let autoPlayInterval;

                    function goToSlide(index) {
                        thumbs.forEach(t => t.classList.remove('active'));
                        const activeThumb = document.querySelector(`.brz-thumb-item[data-target-slide="${index}"]`);
                        if (activeThumb) activeThumb.classList.add('active');

                        slides.forEach(slide => {
                            if (slide.getAttribute('data-slide-index') == index) {
                                slide.style.opacity = '1';
                                slide.style.filter = 'blur(0)';
                                slide.style.zIndex = '2';
                            } else {
                                slide.style.opacity = '0';
                                slide.style.filter = 'blur(10px)';
                                slide.style.zIndex = '1';
                            }
                        });

                        if (activeThumb) {
                            const thumbRect = activeThumb.getBoundingClientRect();
                            const containerRect = thumbnailContainer.getBoundingClientRect();
                            const scrollLeft = activeThumb.offsetLeft - (containerRect.width / 2) + (thumbRect.width / 2);
                            thumbnailContainer.scrollTo({ left: scrollLeft, behavior: 'smooth' });
                        }
                        currentIndex = index;
                    }

                    function nextSlide() {
                        let next = parseInt(currentIndex) + 1;
                        if (next > 22) next = 1;
                        goToSlide(next);
                    }

                    function startAutoPlay() {
                        stopAutoPlay();
                        autoPlayInterval = setInterval(nextSlide, 5000);
                    }

                    function stopAutoPlay() {
                        if (autoPlayInterval) clearInterval(autoPlayInterval);
                    }

                    thumbs.forEach(thumb => {
                        thumb.addEventListener('click', function () {
                            const target = this.getAttribute('data-target-slide');
                            goToSlide(target);
                            startAutoPlay(); // Restart timer
                        });
                    });

                    startAutoPlay();
                });
            </script>
        </section>


        <!-- ================================================================
         TORN-PAPER SVG DIVIDER: Navy → Yellow (impact band)
         ================================================================ -->
        <div class="brz-svg-divider" style="background:#0B192C;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60" preserveAspectRatio="none"
                style="display:block;width:100%;height:60px;">
                <path fill="#FFC107" d="
                M0,20 C100,40 200,5 300,25 C400,45 500,10 600,30 C700,50 800,12 900,32
                C1000,52 1100,15 1200,35 C1300,55 1380,20 1440,35
                L1440,60 L0,60 Z
            " />
            </svg>
        </div>

        <!-- ================================================================
         6. SPONSOR / ADOPT A CHILD  Yellow CTA band
         ================================================================ -->
        <section style="background:#FFC107; padding:70px 0;" id="sponsor">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 brz-observe slide-left">
                        <div style="display:flex; align-items:center; gap:20px; flex-wrap:wrap; margin-bottom:20px;">
                            <div style="background:#0B192C; padding:14px 28px;">
                                <span
                                    style="font-family:'Bebas Neue',sans-serif; font-size:1.2rem; letter-spacing:0.1em; color:#FFC107; text-transform:uppercase;">BE
                                    PART OF THE CHANGE</span>
                            </div>
                        </div>
                        <h2
                            style="font-family:'Bebas Neue',sans-serif; font-size:clamp(2.5rem,6vw,5rem); color:#0B192C; line-height:1; text-transform:uppercase; margin-bottom:16px;">
                            SPONSOR A CHILD.<br>
                            <span style="color:#4A154B;">CHANGE A LIFE.</span>
                        </h2>
                        <p style="font-size:1rem; color:#1a1a1a; font-weight:600; max-width:600px; margin-bottom:30px;">
                            Together, we can break the cycle of poverty and build brighter futures for children, teens
                            and young mothers in Dandora.
                        </p>
                        <div style="display:flex; flex-wrap:wrap; gap:14px;">
                            <a href="adopt.php" class="brz-btn"
                                style="background:#4A154B; color:#fff !important; box-shadow:5px 5px 0 #0B192C;">SPONSOR
                                NOW</a>
                            <a href="donation.php" class="brz-btn"
                                style="background:#0B192C; color:#FFC107 !important; box-shadow:5px 5px 0 #4A154B;">MAKE
                                A DONATION</a>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center mt-5 mt-lg-0 brz-observe slide-right">
                        <!-- Heart icon block like poster -->
                        <div style="position:relative; width:280px; height:280px; margin:0 auto;">
                            <img src="assets/new/project/4.png"
                                style="position:absolute; width:130px; height:130px; border-radius:50%; object-fit:cover; border:5px solid #FFC107; top:10px; left:-10px; z-index:1; box-shadow:0 10px 20px rgba(0,0,0,0.2);">
                            <img src="assets/new/project/5.png"
                                style="position:absolute; width:110px; height:110px; border-radius:50%; object-fit:cover; border:5px solid #FFC107; bottom:20px; right:-10px; z-index:2; box-shadow:0 10px 20px rgba(0,0,0,0.2);">
                            <img src="images/new/children celebrating on a pitch.jpeg"
                                style="position:absolute; width:190px; height:190px; border-radius:50%; object-fit:cover; border:6px solid #4A154B; top:45px; left:45px; z-index:3; box-shadow:0 15px 30px rgba(0,0,0,0.3);">
                        </div>
                        <p
                            style="font-family:'Bebas Neue',sans-serif; font-size:1.6rem; color:#0B192C; margin-top:20px; letter-spacing:0.04em;">
                            BE PART OF THEIR FUTURE.
                        </p>
                    </div>
                </div>
            </div>
        </section>


        <!-- ================================================================
         TORN-PAPER SVG DIVIDER: Yellow → Off-white
         ================================================================ -->
        <div class="brz-svg-divider flip-y" style="background:#FFC107;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60" preserveAspectRatio="none"
                style="display:block;width:100%;height:60px;">
                <path fill="#FDFBF7" d="
                M0,20 C100,40 200,5 300,25 C400,45 500,10 600,30 C700,50 800,12 900,32
                C1000,52 1100,15 1200,35 C1300,55 1380,20 1440,35
                L1440,0 L0,0 Z
            " />
            </svg>
        </div>


        <!-- ================================================================
         7. PROJECTS  Cards with progress bars (from DB)
         ================================================================ -->
        <section style="background:#FDFBF7; padding:90px 0;" id="projects">
            <div class="container">

                <div class="row justify-content-center text-center mb-5">
                    <div class="col-lg-7">
                        <span class="brz-section-label brz-observe slide-up">Our Causes</span>
                        <h2 class="section-title-purple brz-observe slide-up anim-delay-1">SEE WHERE YOUR MONEY GOES
                        </h2>
                        <div class="divider-orange mx-auto"></div>
                    </div>
                </div>

                <div class="row">
                    <?php
                    require 'includes/connection.php';
                    $query = "SELECT * FROM blog";
                    $query_run = mysqli_query($connection, $query);
                    $check_products = mysqli_num_rows($query_run) > 0;

                    if ($check_products) {
                        while ($row = mysqli_fetch_array($query_run)) {
                            $raised = $row['raised'];
                            $target = $row['target'];
                            $percentage = ($target > 0) ? round(($raised / $target) * 100, 2) : 0;
                            ?>
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="brz-project-card brz-observe slide-up">
                                    <img class="brz-project-card__img"
                                        src="images/<?php echo htmlspecialchars($row['photo']); ?>"
                                        alt="<?php echo htmlspecialchars($row['name']); ?>">
                                    <div class="brz-project-card__body">
                                        <h3 class="brz-project-card__title">
                                            <a
                                                href="project_details.php?id=<?php echo $row['id']; ?>"><?php echo htmlspecialchars($row['name']); ?></a>
                                        </h3>
                                        <?php if ($percentage >= 25): ?>
                                        <div class="brz-progress">
                                            <div class="brz-progress-bar" style="width: <?php echo $percentage; ?>%;"></div>
                                        </div>
                                        <div class="brz-project-card__stats">
                                            <span class="brz-project-card__raised">Raised:
                                                $<?php echo number_format($row['raised']); ?></span>
                                            <span class="brz-project-card__goal">Goal:
                                                $<?php echo number_format($row['target']); ?></span>
                                        </div>
                                        <?php else: ?>
                                        <div style="background:rgba(243,112,33,0.08); border:1px dashed var(--orange); border-radius:6px; padding:10px 14px; margin:10px 0; text-align:center;">
                                            <p style="margin:0; font-size:0.85rem; color:var(--orange); font-weight:600;"><i class="fas fa-seedling" style="margin-right:6px;"></i>Help us kickstart this campaign!</p>
                                            <p style="margin:4px 0 0; font-size:0.8rem; color:#888;">Every contribution, big or small, brings us closer to our goal.</p>
                                        </div>
                                        <?php endif; ?>
                                        <a href="project_details.php?id=<?php echo $row['id']; ?>"
                                            class="brz-btn brz-btn-orange mt-3"
                                            style="font-size:0.9rem; padding:10px 24px; display:inline-block;">SUPPORT
                                            PROJECT</a>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    } else {
                        echo "<p class='text-center w-100' style='font-family:Montserrat,sans-serif; color:#888;'>No projects found  check back soon.</p>";
                    }
                    ?>
                </div>

                <div class="text-center mt-4">
                    <a href="projects.php" class="brz-btn brz-btn-purple">VIEW ALL PROJECTS</a>
                </div>

            </div>
        </section>
        <!-- / PROJECTS -->

        <!-- ================================================================
         OUR CAMPAIGNS & POSTERS (CAROUSEL)
         ================================================================ -->
        <section style="background:#4A154B; padding:90px 0; overflow:hidden;" id="campaigns-carousel-section">
            <div class="container text-center mb-5">
                <span
                    style="display:inline-block; background:#FFC107; color:#0B192C; font-family:'Bebas Neue',sans-serif; font-size:1.2rem; padding:6px 16px; letter-spacing:0.05em; margin-bottom:15px; transform:skewX(-10deg);">OUR
                    CORE MESSAGING</span>
                <h2
                    style="font-family:'Bebas Neue',sans-serif; font-size:clamp(2.5rem,5vw,4.5rem); color:#fff; line-height:1; letter-spacing:0.02em;">
                    CAMPAIGNS & INITIATIVES</h2>
                <div class="divider-orange mx-auto mt-3"
                    style="width:60px; height:4px; background:#F37021; margin:0 auto;"></div>
                <p style="color:rgba(255,255,255,0.8); max-width:600px; margin:20px auto 0; font-size:1.1rem;">The bold
                    campaigns driving our mission forward across Nairobi.</p>
            </div>

            <div class="container brz-campaigns-slider-wrap" style="position:relative; padding-bottom:50px;">
                <div class="brz-campaigns-slider-track" style="display:flex; transition:transform 0.5s ease-in-out;">
                    <?php
                    $campaigns = [
                        ['img' => 'p1.jpeg', 'title' => 'EDUCATION SUPPORT', 'desc' => 'Providing scholarships, school supplies, and mentorship to ensure every child in Dandora has access to quality education.'],
                        ['img' => 'p2.jpeg', 'title' => 'VOCATIONAL SKILLS TRAINING', 'desc' => 'Equipping the youth with practical skills such as tailoring, hairdressing, and mechanics to break the cycle of poverty and enter the job market with confidence.'],
                        ['img' => 'p3.jpeg', 'title' => 'DANDORA SLUM OUTREACH', 'desc' => 'Direct intervention in the heart of Dandora. We conduct regular feeding programs, medical camps, and community dialogues to address immediate needs.'],
                        ['img' => 'p4.jpeg', 'title' => 'FIGHTING CHILD LABOUR', 'desc' => 'Advocating against the exploitation of children in the dumpsite. We work with local authorities to rescue kids and transition them into our education support system.'],
                        ['img' => 'p5.jpeg', 'title' => 'GIRL CHILD ADVOCACY', 'desc' => 'Defending the rights of girls in marginalized communities. Our initiatives focus on menstrual health, reproductive rights, and protection against gender-based violence.'],
                        ['img' => 'p6.jpeg', 'title' => 'HOLIDAY MENTORSHIP CAMPS', 'desc' => 'Keeping children engaged and safe during school breaks. Our camps offer life skills training, sports, arts, and character development.'],
                        ['img' => 'p7.jpeg', 'title' => 'COMMUNITY HEALTH AWARENESS', 'desc' => 'Promoting hygiene, sanitation, and disease prevention in Dandora. We partner with local clinics to provide basic health education to families.'],
                        ['img' => 'p8.jpeg', 'title' => 'YOUTH SPORTS & ARTS', 'desc' => 'Nurturing talent through sports leagues, acrobatics, and creative arts. These programs offer a positive outlet and keep youth away from crime and drugs.'],
                        ['img' => 'p9.jpeg', 'title' => 'FAMILY STRENGTHENING', 'desc' => 'We believe in holistic support. By offering financial literacy and counseling to parents, we create a stable home environment for children to thrive.'],
                        ['img' => 'p10.jpeg', 'title' => 'SCHOLARSHIP FUND', 'desc' => 'Supporting bright but needy students through secondary school and university. Your support turns their dreams of higher education into reality.'],
                        ['img' => 'p11.jpeg', 'title' => 'SUSTAINABLE LIVELIHOODS', 'desc' => 'Teaching community members how to start and manage small businesses, fostering economic resilience and long-term sustainability for Dandora families.']
                    ];
                    foreach ($campaigns as $idx => $camp):
                        ?>
                        <div class="brz-camp-slide" style="flex:0 0 100%; padding:0 15px;">
                            <div class="row align-items-center"
                                style="background:#fff; border-radius:12px; overflow:hidden; box-shadow:0 15px 40px rgba(0,0,0,0.4); margin:0;">
                                <div class="col-md-5 p-0">
                                    <img src="assets/new/posters/<?php echo $camp['img']; ?>" alt="Campaign"
                                        style="width:100%; height:100%; min-height:400px; object-fit:cover; display:block;">
                                </div>
                                <div class="col-md-7 p-4 p-md-5 text-start">
                                    <h3
                                        style="font-family:'Bebas Neue',sans-serif; font-size:2.5rem; color:#4A154B; margin-bottom:15px;">
                                        <?php echo $camp['title']; ?>
                                    </h3>
                                    <div class="divider-orange mb-4"></div>
                                    <p style="font-size:1.1rem; color:#555; line-height:1.6;"><?php echo $camp['desc']; ?>
                                    </p>
                                    <a href="donation.php" class="brz-btn brz-btn-orange mt-3"
                                        style="display:inline-block; font-family:'Bebas Neue',sans-serif; letter-spacing:0.05em; font-size:1.2rem; padding:10px 25px; border-radius:4px; text-decoration:none;">SUPPORT
                                        THIS INITIATIVE</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Navigation Elements -->
                <button class="brz-camp-btn prev-btn"
                    style="position:absolute; left:-20px; top:45%; transform:translateY(-50%); background:#F37021; color:#fff; border:none; width:50px; height:50px; border-radius:50%; font-size:1.2rem; cursor:pointer; box-shadow:0 5px 15px rgba(0,0,0,0.4); z-index:10; transition:background 0.3s;"><i
                        class="fas fa-chevron-left"></i></button>
                <button class="brz-camp-btn next-btn"
                    style="position:absolute; right:-20px; top:45%; transform:translateY(-50%); background:#F37021; color:#fff; border:none; width:50px; height:50px; border-radius:50%; font-size:1.2rem; cursor:pointer; box-shadow:0 5px 15px rgba(0,0,0,0.4); z-index:10; transition:background 0.3s;"><i
                        class="fas fa-chevron-right"></i></button>

                <div class="brz-camp-dots" style="display:flex; justify-content:center; gap:8px; margin-top:30px;">
                    <?php foreach ($campaigns as $idx => $camp): ?>
                        <button class="brz-dot <?php echo $idx === 0 ? 'active' : ''; ?>" data-slide="<?php echo $idx; ?>"
                            style="width:12px; height:12px; border-radius:50%; background:rgba(255,255,255,0.3); border:none; padding:0; cursor:pointer; transition:background 0.3s, transform 0.3s;"></button>
                    <?php endforeach; ?>
                </div>
            </div>

            <style>
                .brz-dot.active {
                    background: #F37021 !important;
                    transform: scale(1.2);
                }

                .brz-camp-btn:hover {
                    background: #FFC107;
                    color: #0B192C;
                }

                @media (max-width:768px) {
                    .brz-camp-btn {
                        display: none;
                    }

                    /* Hide arrows on mobile */
                    .brz-camp-slide {
                        padding: 0 !important;
                    }
                }
            </style>

            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    const track = document.querySelector('.brz-campaigns-slider-track');
                    const slides = document.querySelectorAll('.brz-camp-slide');
                    const dots = document.querySelectorAll('.brz-dot');
                    const btnPrev = document.querySelector('.brz-camp-btn.prev-btn');
                    const btnNext = document.querySelector('.brz-camp-btn.next-btn');

                    let currentSlide = 0;
                    const totalSlides = slides.length;

                    function goToSlide(index) {
                        currentSlide = index;
                        track.style.transform = `translateX(-${currentSlide * 100}%)`;

                        dots.forEach((dot, idx) => {
                            if (idx === currentSlide) {
                                dot.classList.add('active');
                            } else {
                                dot.classList.remove('active');
                            }
                        });
                    }

                    btnNext.addEventListener('click', () => {
                        if (currentSlide < totalSlides - 1) {
                            goToSlide(currentSlide + 1);
                        } else {
                            goToSlide(0); // loop back
                        }
                    });

                    btnPrev.addEventListener('click', () => {
                        if (currentSlide > 0) {
                            goToSlide(currentSlide - 1);
                        } else {
                            goToSlide(totalSlides - 1); // loop to end
                        }
                    });

                    dots.forEach((dot, idx) => {
                        dot.addEventListener('click', () => goToSlide(idx));
                    });
                });
            </script>
        </section>


        <!-- ================================================================
         8. PARTNERSHIP SECTION (mirrors "Partner With Barrizi" poster)
         ================================================================ -->
        <section style="background:#0B192C; padding:90px 0;" id="partnership">
            <div class="container">
                <div class="row">

                    <!-- Left: main heading + text -->
                    <div class="col-lg-6 mb-5 mb-lg-0 brz-observe slide-left">
                        <h2
                            style="font-family:'Bebas Neue',sans-serif; font-size:clamp(2.5rem,6vw,5rem); color:#fff; line-height:1; text-transform:uppercase; margin-bottom:8px;">
                            PARTNER WITH BARRIZI.
                        </h2>
                        <h3
                            style="font-family:'Bebas Neue',sans-serif; font-size:clamp(1.5rem,4vw,3rem); color:#F37021; line-height:1; text-transform:uppercase; margin-bottom:30px;">
                            CHANGE LIVES. CREATE IMPACT.
                        </h3>
                        <p
                            style="font-size:0.95rem; color:rgba(255,255,255,0.75); font-weight:500; margin-bottom:30px; max-width:520px;">
                            Barrizi is uniquely positioned within the Dandora community with trusted local relationships
                            and a proven delivery model. With the right partnerships, we can scale our impact and
                            transform more lives.
                        </p>

                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <h4
                                    style="font-family:'Bebas Neue',sans-serif; font-size:1.3rem; color:#FFC107; letter-spacing:0.06em; margin-bottom:16px; border-bottom:2px solid rgba(255,193,7,0.3); padding-bottom:8px;">
                                    WHY PARTNERSHIP MATTERS</h4>
                                <ul class="brz-partner-why" style="list-style:none; padding:0; margin:0;">
                                    <li
                                        style="padding:8px 0 8px 34px; position:relative; font-size:0.88rem; color:rgba(255,255,255,0.8); font-weight:600; border-bottom:1px solid rgba(255,255,255,0.1);">
                                        <span
                                            style="position:absolute; left:0; top:50%; transform:translateY(-50%); width:20px; height:20px; background:#4A154B; border-radius:50%; display:flex; align-items:center; justify-content:center;">
                                            <i class="fas fa-user" style="font-size:0.55rem; color:#fff;"></i>
                                        </span>
                                        Deliver high-impact, community-led interventions
                                    </li>
                                    <li
                                        style="padding:8px 0 8px 34px; position:relative; font-size:0.88rem; color:rgba(255,255,255,0.8); font-weight:600; border-bottom:1px solid rgba(255,255,255,0.1);">
                                        <span
                                            style="position:absolute; left:0; top:50%; transform:translateY(-50%); width:20px; height:20px; background:#4A154B; border-radius:50%; display:flex; align-items:center; justify-content:center;">
                                            <i class="fas fa-heart" style="font-size:0.55rem; color:#fff;"></i>
                                        </span>
                                        Support Nairobi's most vulnerable populations
                                    </li>
                                    <li
                                        style="padding:8px 0 8px 34px; position:relative; font-size:0.88rem; color:rgba(255,255,255,0.8); font-weight:600; border-bottom:1px solid rgba(255,255,255,0.1);">
                                        <span
                                            style="position:absolute; left:0; top:50%; transform:translateY(-50%); width:20px; height:20px; background:#4A154B; border-radius:50%; display:flex; align-items:center; justify-content:center;">
                                            <i class="fas fa-leaf" style="font-size:0.55rem; color:#fff;"></i>
                                        </span>
                                        Contribute to sustainable development
                                    </li>
                                    <li
                                        style="padding:8px 0 8px 34px; position:relative; font-size:0.88rem; color:rgba(255,255,255,0.8); font-weight:600;">
                                        <span
                                            style="position:absolute; left:0; top:50%; transform:translateY(-50%); width:20px; height:20px; background:#4A154B; border-radius:50%; display:flex; align-items:center; justify-content:center;">
                                            <i class="fas fa-expand" style="font-size:0.55rem; color:#fff;"></i>
                                        </span>
                                        Create scalable models for replication
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6 mb-4">
                                <h4
                                    style="font-family:'Bebas Neue',sans-serif; font-size:1.3rem; color:#FFC107; letter-spacing:0.06em; margin-bottom:16px; border-bottom:2px solid rgba(255,193,7,0.3); padding-bottom:8px;">
                                    OPPORTUNITIES FOR PARTNERS</h4>
                                <ul style="list-style:none; padding:0; margin:0;">
                                    <li
                                        style="padding:8px 0 8px 28px; position:relative; font-size:0.88rem; color:rgba(255,255,255,0.8); font-weight:600; border-bottom:1px solid rgba(255,255,255,0.1);">
                                        <i class="fas fa-check-circle"
                                            style="position:absolute; left:0; top:50%; transform:translateY(-50%); color:#F37021; font-size:0.9rem;"></i>
                                        Co-develop funding proposals
                                    </li>
                                    <li
                                        style="padding:8px 0 8px 28px; position:relative; font-size:0.88rem; color:rgba(255,255,255,0.8); font-weight:600; border-bottom:1px solid rgba(255,255,255,0.1);">
                                        <i class="fas fa-check-circle"
                                            style="position:absolute; left:0; top:50%; transform:translateY(-50%); color:#F37021; font-size:0.9rem;"></i>
                                        Expand access to education &amp; training
                                    </li>
                                    <li
                                        style="padding:8px 0 8px 28px; position:relative; font-size:0.88rem; color:rgba(255,255,255,0.8); font-weight:600; border-bottom:1px solid rgba(255,255,255,0.1);">
                                        <i class="fas fa-check-circle"
                                            style="position:absolute; left:0; top:50%; transform:translateY(-50%); color:#F37021; font-size:0.9rem;"></i>
                                        Strengthen monitoring &amp; impact reporting
                                    </li>
                                    <li
                                        style="padding:8px 0 8px 28px; position:relative; font-size:0.88rem; color:rgba(255,255,255,0.8); font-weight:600;">
                                        <i class="fas fa-check-circle"
                                            style="position:absolute; left:0; top:50%; transform:translateY(-50%); color:#F37021; font-size:0.9rem;"></i>
                                        Build sustainable programmes with long-term outcomes
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <a href="contact.php" class="brz-btn brz-btn-orange mt-3">PARTNER WITH US</a>
                    </div>

                    <!-- Right: quote callout block -->
                    <div class="col-lg-6 brz-observe slide-right">
                        <div
                            style="background:#4A154B; padding:50px 40px; height:100%; display:flex; flex-direction:column; justify-content:center; border-left:6px solid #F37021;">
                            <span
                                style="font-family:Georgia,serif; font-size:6rem; color:#F37021; line-height:0.5; display:block; margin-bottom:20px;">&ldquo;</span>
                            <p
                                style="font-family:'Montserrat',sans-serif; font-size:1.1rem; color:#fff; line-height:1.7; font-style:italic; margin-bottom:24px;">
                                Every child deserves a chance. Every young person deserves a future. Every family
                                deserves hope.
                            </p>
                            <p
                                style="font-family:'Bebas Neue',sans-serif; font-size:clamp(1.5rem,3vw,2.2rem); color:#FFC107; text-transform:uppercase; letter-spacing:0.04em; margin-bottom:0;">
                                TOGETHER, WE CAN MAKE IT POSSIBLE.
                            </p>
                            <div
                                style="margin-top:30px; padding-top:24px; border-top:1px solid rgba(255,255,255,0.15);">
                                <p
                                    style="font-family:'Bebas Neue',sans-serif; font-size:clamp(1.2rem,2.5vw,1.8rem); color:#fff; letter-spacing:0.04em; margin-bottom:4px; text-transform:uppercase;">
                                    BE PART OF THE CHANGE.</p>
                                <p
                                    style="font-family:'Bebas Neue',sans-serif; font-size:clamp(1.2rem,2.5vw,1.8rem); color:#FFC107; letter-spacing:0.04em; margin-bottom:0; text-transform:uppercase;">
                                    BE PART OF THEIR FUTURE.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- / PARTNERSHIP -->

        <!-- ================================================================
         OUR PARTNERS
         ================================================================ -->
        <section style="background:var(--white); padding:60px 0; border-top:1px solid #eee;">
            <div class="container">
                <div class="row justify-content-center text-center mb-4">
                    <div class="col-lg-7">
                        <span class="brz-section-label brz-observe slide-up">Our Network</span>
                        <h2 class="section-title-navy brz-observe slide-up anim-delay-1"
                            style="font-size:2rem; margin-bottom:15px; text-transform:uppercase;">Trusted Partners</h2>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div
                            style="display:flex; justify-content:center; align-items:center; flex-wrap:wrap; gap:50px;">
                            <a href="https://kaacr.com/" target="_blank"
                                title="Kenya Alliance for Advancement of Children (KAACR)">
                                <img src="assets/new/partners/KAACR-LOGO.webp" alt="KAACR"
                                    style="height:70px; object-fit:contain; filter:grayscale(100%); transition:0.3s; opacity:0.7;"
                                    onmouseover="this.style.filter='grayscale(0%)'; this.style.opacity='1';"
                                    onmouseout="this.style.filter='grayscale(100%)'; this.style.opacity='0.7';">
                            </a>
                            <a href="https://footsteps.co.ke/" target="_blank" title="Footsteps Kenya">
                                <img src="assets/new/partners/Footsteps.png" alt="Footsteps Kenya"
                                    style="height:70px; object-fit:contain; filter:grayscale(100%); transition:0.3s; opacity:0.7;"
                                    onmouseover="this.style.filter='grayscale(0%)'; this.style.opacity='1';"
                                    onmouseout="this.style.filter='grayscale(100%)'; this.style.opacity='0.7';">
                            </a>
                            <a href="#" title="Grapesyard Organization">
                                <img src="assets/new/partners/Grapesyard_Organization_logo.jpg"
                                    alt="Grapesyard Organization"
                                    style="height:70px; object-fit:contain; filter:grayscale(100%); transition:0.3s; opacity:0.7;"
                                    onmouseover="this.style.filter='grayscale(0%)'; this.style.opacity='1';"
                                    onmouseout="this.style.filter='grayscale(100%)'; this.style.opacity='0.7';">
                            </a>
                            <a href="https://clairesorganisationkenya.co.ke/" target="_blank"
                                title="Claire's Organisation Kenya">
                                <img src="assets/new/partners/claire.png" alt="Claire's Organisation Kenya"
                                    style="height:70px; object-fit:contain; filter:grayscale(100%); transition:0.3s; opacity:0.7;"
                                    onmouseover="this.style.filter='grayscale(0%)'; this.style.opacity='1';"
                                    onmouseout="this.style.filter='grayscale(100%)'; this.style.opacity='0.7';">
                            </a>
                            <a href="#" title="Still Young Organisation">
                                <img src="assets/new/partners/still-young.png" alt="Still Young Organisation"
                                    style="height:70px; object-fit:contain; filter:grayscale(100%); transition:0.3s; opacity:0.7;"
                                    onmouseover="this.style.filter='grayscale(0%)'; this.style.opacity='1';"
                                    onmouseout="this.style.filter='grayscale(100%)'; this.style.opacity='0.7';">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ================================================================
         NUSTART COMMUNITY ENTERPRISE PARTNERSHIP
         ================================================================ -->
        <section style="background:#FDFBF7; padding:90px 0; overflow-x:hidden;">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-lg-6 mb-5 mb-lg-0 brz-observe slide-left">
                        <div class="brz-about-img-stack position-relative" style="padding:30px;">
                            <div
                                style="position:absolute; top:0; left:0; width:55%; height:65%; background:#4A154B; z-index:0; transform:translate(-15px,-15px);">
                            </div>
                            <div class="brz-polaroid brz-polaroid-main"
                                style="position:relative; z-index:2; transform:rotate(2deg); background:#fff; padding:12px; box-shadow:0 15px 40px rgba(0,0,0,0.18);">
                                <img src="images/new/happy girsl posing on football pitch.jpeg" alt="Barrizi and NuStart Partnership"
                                    style="width:100%; display:block;">
                            </div>
                            <div class="brz-polaroid"
                                style="position:absolute; left:-30px; bottom:-20px; z-index:3; transform:rotate(-4deg); background:#fff; padding:10px; box-shadow:0 10px 25px rgba(0,0,0,0.2); width:40%;">
                                <img src="images/new/large group of childeren watching football.jpeg" alt="Community Empowerment"
                                    style="width:100%; object-fit:cover; display:block;">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 brz-observe slide-right">
                        <span class="brz-section-label label-orange">STRATEGIC PARTNERSHIP</span>
                        <h2
                            style="font-family:'Bebas Neue',sans-serif; font-size:clamp(2.5rem,5vw,4rem); color:#0B192C; line-height:1; margin-bottom:20px; margin-top:10px;">
                            BARRIZI &amp; <span style="color:#F37021;">NUSTART</span><br>COMMUNITY ENTERPRISE
                        </h2>
                        <div class="divider-orange"></div>
                        <p style="font-size:1.1rem; color:#444; line-height:1.7; margin-bottom:20px;">
                            Our powerful alliance with <strong>NuStart Community Enterprise</strong> accelerates our
                            shared vision of empowering the most vulnerable populations in Dandora.
                        </p>
                        <p style="font-size:1.05rem; color:#666; line-height:1.7; margin-bottom:30px;">
                            By combining Barrizi's deep community roots and educational initiatives with NuStart's
                            robust enterprise and vocational frameworks, we are creating sustainable, long-term pathways
                            out of poverty for young mothers and vulnerable children. This partnership amplifies our
                            impact, ensuring that empowerment translates into tangible economic independence.
                        </p>
                        <ul class="brz-challenge-item" style="list-style:none; padding:0; margin-bottom:30px;">
                            <li style="margin-bottom:12px; display:flex; align-items:flex-start; gap:12px;">
                                <i class="fas fa-check-square"
                                    style="color:#F37021; font-size:1.2rem; margin-top:4px;"></i>
                                <span style="font-weight:600; color:#333;">Joint Vocational Training & Enterprise
                                    Incubation</span>
                            </li>
                            <li style="margin-bottom:12px; display:flex; align-items:flex-start; gap:12px;">
                                <i class="fas fa-check-square"
                                    style="color:#F37021; font-size:1.2rem; margin-top:4px;"></i>
                                <span style="font-weight:600; color:#333;">Shared Resources for Greater Community
                                    Outreach</span>
                            </li>
                            <li style="display:flex; align-items:flex-start; gap:12px;">
                                <i class="fas fa-check-square"
                                    style="color:#F37021; font-size:1.2rem; margin-top:4px;"></i>
                                <span style="font-weight:600; color:#333;">Unified Vision for Sustainable
                                    Transformation</span>
                            </li>
                        </ul>
                        <a href="contact.php" class="brz-btn brz-btn-purple">JOIN OUR NETWORK</a>
                    </div>
                </div>
            </div>
        </section>


        <!-- Removed unnecessary SVG divider to eliminate gap between two Off-White sections -->


        <!-- ================================================================
         9. EVENTS  Cards with orange date chips
         ================================================================ -->
        <section style="background:#FDFBF7; padding:90px 0;" id="events">
            <div class="container">

                <div class="row justify-content-center text-center mb-5">
                    <div class="col-lg-7">
                        <span class="brz-section-label brz-observe slide-up">Mark Your Calendar</span>
                        <h2 class="section-title-purple brz-observe slide-up anim-delay-1">UPCOMING EVENTS</h2>
                        <div class="divider-orange mx-auto"></div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <?php
                    $query = "SELECT * FROM events";
                    $query_run = mysqli_query($connection, $query);
                    $check_events = mysqli_num_rows($query_run) > 0;

                    if ($check_events) {
                        while ($row = mysqli_fetch_array($query_run)) {
                            ?>
                            <div class="col-lg-8 col-md-10 mb-4">
                                <div class="brz-event-card brz-observe slide-up">
                                    <img class="brz-event-card__img" src="images/<?php echo htmlspecialchars($row['photo']); ?>"
                                        alt="<?php echo htmlspecialchars($row['name']); ?>"
                                        style="height:180px; object-fit:cover; width:200px; min-width:200px;">
                                    <div class="brz-event-card__body">
                                        <span class="brz-event-date-chip"><?php echo htmlspecialchars($row['event_date']); ?> |
                                            <?php echo htmlspecialchars($row['event_time']); ?></span>
                                        <h4 class="brz-event-card__title"><a
                                                href="event_details.php?id=<?php echo $row['id']; ?>"><?php echo htmlspecialchars($row['name']); ?></a>
                                        </h4>
                                        <p style="font-size:0.9rem; color:#666; margin:0;"><i class="fas fa-map-marker-alt"
                                                style="color:#F37021; margin-right:6px;"></i><?php echo htmlspecialchars($row['location']); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    } else {
                        echo "<p class='text-center w-100' style='font-family:Montserrat,sans-serif; color:#888; padding:40px 0;'>Upcoming events will be announced soon. Check back shortly!</p>";
                    }
                    ?>
                </div>

            </div>
        </section>


        <!-- ================================================================
         10. VOLUNTEER / CTA BANNER  Purple bg, massive type
         ================================================================ -->
        <section class="brz-cta-banner"
            style="background:#4A154B; position:relative; overflow:hidden; max-width:100%; padding:120px 0; text-align:center;"
            id="volunteer">
            <!-- Subtle bg image -->
            <div
                style="position:absolute; inset:0; background-image:url('images/new/children celebrating.jpeg'); background-size:cover; background-position:center; opacity:0.12; mix-blend-mode:luminosity;">
            </div>

            <!-- Decorative circles -->
            <div
                style="position:absolute; top:-80px; left:-80px; width:320px; height:320px; border-radius:50%; background:rgba(243,112,33,0.15);">
            </div>
            <div
                style="position:absolute; bottom:-60px; right:-60px; width:260px; height:260px; border-radius:50%; background:rgba(255,193,7,0.1);">
            </div>

            <div class="container" style="position:relative; z-index:2;">
                <span class="brz-section-label label-yellow brz-observe slide-up" style="color:#0B192C;">Join Our
                    Team</span>
                <h2 class="brz-cta-banner__title brz-observe slide-up anim-delay-1"
                    style="font-family:'Bebas Neue',sans-serif; font-size:clamp(3rem,8vw,7rem); color:#fff; line-height:0.95; margin:20px 0;">
                    YOUR TIME CAN<br>
                    <span style="color:#F37021;">CHANGE A LIFE.</span>
                </h2>
                <p class="brz-cta-banner__text brz-observe slide-up anim-delay-2"
                    style="font-size:1.05rem; color:rgba(255,255,255,0.85); max-width:580px; margin:0 auto 40px; font-weight:500; line-height:1.7;">
                    Contributing your time, skills, and passion to empower children, teenage girls, and young mothers.
                    Join us in breaking the cycle of poverty and building a brighter Dandora.
                </p>
                <div class="brz-observe slide-up anim-delay-3"
                    style="display:flex; gap:16px; justify-content:center; flex-wrap:wrap;">
                    <a href="volunteer.php" class="brz-btn brz-btn-orange">BECOME A VOLUNTEER</a>
                    <a href="contact.php" class="brz-btn brz-btn-white-outline">GET IN TOUCH</a>
                </div>
            </div>
        </section>


        <!-- ================================================================
         BRUSH-STROKE SVG DIVIDER: Purple → Off-white
         ================================================================ -->
        <div class="brz-svg-divider" style="background:#4A154B;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 80" preserveAspectRatio="none"
                style="display:block;width:100%;height:80px;">
                <path fill="#FDFBF7" d="
                M0,50 C100,30 200,65 300,48 C400,32 500,60 600,44
                C700,28 800,58 900,42 C1000,26 1100,56 1200,40
                C1300,24 1380,50 1440,38
                L1440,80 L0,80 Z
            " />
            </svg>
        </div>


        <!-- ================================================================
         11. SUCCESS STORIES  Polaroid-twist blog cards
         ================================================================ -->
        <section class="brz-blog-section" style="background:#FDFBF7; padding:90px 0;" id="stories">
            <div class="container">

                <div class="row justify-content-center text-center mb-5">
                    <div class="col-lg-7">
                        <span class="brz-section-label brz-observe slide-up">Real Impact</span>
                        <h2 class="section-title-purple brz-observe slide-up anim-delay-1">REAL STORIES. REAL CHANGE.
                        </h2>
                        <div class="divider-orange mx-auto"></div>
                    </div>
                </div>

                <div class="row">
                    <?php
                    $query = "SELECT * FROM products ORDER BY id DESC LIMIT 4";
                    $query_run = mysqli_query($connection, $query);
                    $check_products = mysqli_num_rows($query_run) > 0;

                    if ($check_products) {
                        $delay = 1;
                        while ($row = mysqli_fetch_array($query_run)) {
                            ?>
                            <div class="col-lg-6 mb-5">
                                <div class="brz-blog-card brz-observe slide-up anim-delay-<?php echo $delay; ?>"
                                    style="box-shadow:0 8px 30px rgba(0,0,0,0.1);">
                                    <img class="brz-blog-card__img" src="images/<?php echo htmlspecialchars($row['photo']); ?>"
                                        alt="<?php echo htmlspecialchars($row['name']); ?>">
                                    <div class="brz-blog-card__body">
                                        <span
                                            class="brz-blog-date-badge"><?php echo htmlspecialchars($row['product_date']); ?></span>
                                        <h4 class="brz-blog-card__title">
                                            <a
                                                href="blog_details.php?id=<?php echo $row['id']; ?>"><?php echo htmlspecialchars($row['name']); ?></a>
                                        </h4>
                                        <p class="brz-blog-card__excerpt">
                                            <?php echo htmlspecialchars(substr(strip_tags($row['description']), 0, 160)); ?>...
                                        </p>
                                        <a href="blog_details.php?id=<?php echo $row['id']; ?>" class="brz-btn brz-btn-purple"
                                            style="font-size:0.85rem; padding:10px 24px;">READ STORY</a>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $delay++;
                        }
                    } else {
                        echo "<p class='text-center w-100' style='font-family:Montserrat,sans-serif; color:#888; padding:40px 0;'>No success stories found yet.</p>";
                    }
                    ?>
                </div>

                <div class="text-center mt-3">
                    <a href="blog.php" class="brz-btn brz-btn-purple">ALL SUCCESS STORIES</a>
                </div>

            </div>
    </main>

    <!-- ================================================================
     URGENT SAFEGUARDING CTA
     ================================================================ -->
    <section style="background: url('images/new/girls posing.jpeg') center/cover no-repeat; position: relative; margin-bottom: -90px;">
        <!-- Vibrant Gradient Overlay -->
        <div style="position: absolute; inset: 0; background: linear-gradient(135deg, rgba(11,25,44,0.92), rgba(243,112,33,0.85));"></div>
        
        <div class="container" style="position: relative; z-index: 2; padding: 120px 0 200px;">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center brz-observe slide-up">
                    
                    <!-- Glassmorphism Card -->
                    <div style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px); border: 1px solid rgba(255, 255, 255, 0.1); padding: 60px 40px; border-radius: 24px; box-shadow: 0 25px 50px rgba(0,0,0,0.3);">
                        
                        <!-- Animated Shield Icon -->
                        <div style="width: 90px; height: 90px; background: rgba(243, 112, 33, 0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px;">
                            <i class="fas fa-shield-alt" style="font-size: 3rem; color: var(--yellow); animation: brz-alert-pulse 2s infinite;"></i>
                        </div>
                        
                        <!-- Heading -->
                        <h2 style="color: var(--white); font-family: var(--font-heading); font-size: clamp(2.5rem, 6vw, 4.5rem); margin-bottom: 20px; text-transform: uppercase; letter-spacing: 1px; line-height: 1.1;">
                            Protecting Every Child
                        </h2>
                        
                        <!-- Orange Divider -->
                        <div style="width: 80px; height: 4px; background: var(--orange); margin: 0 auto 30px; border-radius: 2px;"></div>
                        
                        <!-- Message -->
                        <p style="color: rgba(255,255,255,0.95); font-family: var(--font-body); font-size: 1.15rem; font-weight: 500; margin-bottom: 45px; line-height: 1.8; max-width: 800px; margin-left: auto; margin-right: auto;">
                            Barrizi Organisation maintains a <strong style="color: var(--yellow); font-weight: 700;">ZERO-TOLERANCE</strong> policy towards abuse. If you witness a child facing child labour, abuse, or any violation of their fundamental rights in the community, <strong style="color: var(--white); font-weight: 700;">PLEASE REPORT IT IMMEDIATELY</strong>. Your voice can change a life.
                        </p>
                        
                        <!-- Action Button -->
                        <a href="safeguarding.php" class="brz-btn brz-btn-orange" style="padding: 18px 45px; font-size: 1.2rem; font-weight: 700; border-radius: 50px; box-shadow: 0 10px 20px rgba(243, 112, 33, 0.3); text-transform: uppercase; letter-spacing: 1px;">
                            Report a Concern Now
                        </a>
                    </div>

                </div>
            </div>
        </div>

        <style>
            @keyframes brz-alert-pulse {
                0% { transform: scale(1); box-shadow: 0 0 0 0 rgba(255, 193, 7, 0.4); border-radius: 50%; }
                70% { transform: scale(1.1); box-shadow: 0 0 0 20px rgba(255, 193, 7, 0); border-radius: 50%; }
                100% { transform: scale(1); box-shadow: 0 0 0 0 rgba(255, 193, 7, 0); border-radius: 50%; }
            }
        </style>
    </section>

    <!-- Footer (with brush-stroke SVG divider built in) -->
    <?php include 'includes/footer.php'; ?>

    <!-- Scroll to Top Button -->
    <a href="#hero" id="brz-back-top" title="Back to top" aria-label="Back to top">
        <i class="fas fa-chevron-up"></i>
    </a>

    <?php include 'includes/script.php'; ?>

    <script>
        // ====================================
        // Hero Slider
        // ====================================
        (function () {
            var slides = document.querySelectorAll('.brz-hero__slide');
            var dots = document.querySelectorAll('.brz-hero__dot');
            var current = 0;

            if (slides.length < 2) return;

            function goToSlide(n) {
                slides[current].classList.remove('active');
                if (dots[current]) dots[current].classList.remove('active');
                current = (n + slides.length) % slides.length;
                slides[current].classList.add('active');
                if (dots[current]) dots[current].classList.add('active');
            }

            // Auto-advance every 6s
            var timer = setInterval(function () { goToSlide(current + 1); }, 6000);

            // Dot click
            dots.forEach(function (dot) {
                dot.addEventListener('click', function () {
                    clearInterval(timer);
                    goToSlide(parseInt(this.dataset.slide));
                    timer = setInterval(function () { goToSlide(current + 1); }, 6000);
                });
            });
        })();


        // ====================================
        // Scroll-to-Top Visibility
        // ====================================
        (function () {
            var btn = document.getElementById('brz-back-top');
            if (!btn) return;
            window.addEventListener('scroll', function () {
                if (window.scrollY > 400) {
                    btn.classList.add('visible');
                } else {
                    btn.classList.remove('visible');
                }
            }, { passive: true });
        })();


        // ====================================
        // Intersection Observer  entrance animations
        // ====================================
        (function () {
            if (!('IntersectionObserver' in window)) {
                // Fallback: just make all visible
                document.querySelectorAll('.brz-observe').forEach(function (el) {
                    el.classList.add('brz-visible');
                });
                return;
            }

            var observer = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('brz-visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.12 });

            document.querySelectorAll('.brz-observe').forEach(function (el) {
                observer.observe(el);
            });
        })();


        // ====================================
        // Show secondary polaroid on desktop
        // ====================================
        (function () {
            var sub = document.getElementById('polaroidSub');
            if (sub && window.innerWidth >= 992) {
                sub.style.display = 'block';
            }
        })();


        // ====================================
        // Progress bars animate on scroll
        // ====================================
        (function () {
            var bars = document.querySelectorAll('.brz-progress-bar');
            if (!bars.length) return;

            var animated = false;
            function animateBars() {
                if (animated) return;
                bars.forEach(function (bar) {
                    var rect = bar.getBoundingClientRect();
                    if (rect.top < window.innerHeight) {
                        bar.style.width = bar.getAttribute('style').match(/width:\s*([\d.]+%)/)?.[1] || bar.style.width;
                        animated = true;
                    }
                });
            }

            window.addEventListener('scroll', animateBars, { passive: true });
            animateBars();
        })();
    </script>

</body>

</html>
