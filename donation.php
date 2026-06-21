<!doctype html>
<html lang="en">

<head>
    <?php include 'includes/head.php'; ?>
    <title>Support Our Mission | Barrizi Organisation</title>
    <style>
        body {
            padding-top: 0;
            background: var(--off-white);
        }

        .header-area {
            display: none !important;
        }

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

        /* Donation Option Cards */
        .brz-donate-option {
            background: #fff;
            border-radius: 8px;
            padding: 40px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            border-bottom: 5px solid var(--orange);
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            transition: transform 0.3s ease;
        }

        .brz-donate-option:hover {
            transform: translateY(-10px);
        }

        .brz-donate-option h2 {
            font-family: var(--font-heading);
            font-size: 2.5rem;
            color: var(--navy);
            margin-bottom: 15px;
        }

        .brz-donate-option p {
            font-size: 1.05rem;
            color: #555;
            margin-bottom: 30px;
            flex-grow: 1;
        }

        /* Sponsorship Cards */
        .brz-sponsor-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 40px;
        }

        .brz-sponsor-card {
            background: #fff;
            padding: 30px 20px;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            border: 2px solid transparent;
            transition: all 0.3s ease;
            text-decoration: none;
            display: block;
        }

        .brz-sponsor-card:hover {
            border-color: var(--orange);
            transform: translateY(-5px);
            text-decoration: none;
        }

        .brz-sponsor-icon {
            font-size: 2.5rem;
            margin-bottom: 15px;
            display: block;
        }

        .brz-sponsor-title {
            font-family: var(--font-heading);
            font-size: 1.5rem;
            color: var(--navy);
            margin-bottom: 5px;
            text-transform: uppercase;
        }

        .brz-sponsor-price {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--orange);
        }

        /* Tier Colors */
        .tier-platinum {
            border-top: 4px solid #E5E4E2;
        }

        .tier-diamond {
            border-top: 4px solid #b9f2ff;
        }

        .tier-gold {
            border-top: 4px solid #FFD700;
        }

        .tier-silver {
            border-top: 4px solid #C0C0C0;
        }

        .tier-bronze {
            border-top: 4px solid #cd7f32;
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
                <h1 class="brz-page-header__title brz-observe slide-up">SUPPORT OUR <span
                        style="color:var(--orange);">MISSION</span></h1>
                <div class="brz-page-header__breadcrumb brz-observe slide-up anim-delay-1">
                    <a href="index.php">Home</a> / Support
                </div>
            </div>
        </section>

        <!-- Brush Stroke Divider -->
        <div class="brz-svg-divider"
            style="background:transparent; margin-top:-59px; position:relative; z-index:10; pointer-events:none;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60" preserveAspectRatio="none"
                style="display:block;width:100%;height:60px;">
                <path fill="#FDFBF7" d="
                M0,30 C120,10 240,40 360,25 C480,10 600,45 720,30
                C840,15 960,45 1080,30 C1200,15 1320,35 1440,25
                L1440,60 L0,60 Z
            " />
            </svg>
        </div>

        <!-- Main Options -->
        <section style="padding: 90px 0; background: var(--off-white);">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mb-4 brz-observe slide-up">
                        <div class="brz-donate-option" style="border-bottom-color: var(--purple);">
                            <h2>DONATE NOW</h2>
                            <p>Your general contributions provide essential support where it's needed most helping us
                                bring change to the lives of vulnerable children and mothers.</p>
                            <a href="donate.php" class="brz-btn brz-btn-purple">MAKE A DONATION</a>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4 brz-observe slide-up anim-delay-1">
                        <div class="brz-donate-option">
                            <h2>SUPPORT A CAUSE</h2>
                            <p>Choose a specific project or cause that resonates with you, and directly fund initiatives
                                like education support, school feeding, or vocational training.</p>
                            <a href="projects.php" class="brz-btn brz-btn-orange">SELECT A PROJECT</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Brush Stroke Divider -->
        <div class="brz-svg-divider" style="background:var(--off-white);">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60" preserveAspectRatio="none"
                style="display:block;width:100%;height:60px;">
                <path fill="#4A154B" d="
                M0,20 C100,40 200,5 300,25 C400,45 500,10 600,30
                C700,50 800,15 900,35 C1000,55 1100,20 1200,40
                C1300,60 1380,25 1440,40
                L1440,60 L0,60 Z
            " />
            </svg>
        </div>

        <!-- Sponsorship Section -->
        <section style="padding: 90px 0; background: var(--purple);">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-8 brz-observe slide-up">
                        <span class="brz-section-label label-yellow" style="color:var(--navy);">Premium
                            Membership</span>
                        <h2
                            style="font-family:var(--font-heading); font-size:clamp(2rem, 5vw, 4rem); color:var(--white); margin-bottom:20px; text-transform:uppercase;">
                            BECOME A SPONSOR
                        </h2>
                        <p style="color: rgba(255,255,255,0.8); font-size: 1.1rem; margin-bottom: 40px;">
                            Every contribution, from Bronze to Platinum, makes a meaningful impact. Select a package and
                            join us in making a difference today!
                        </p>

                        <div class="brz-sponsor-grid">
                            <a href="signup.php?package=Platinum-Member" class="brz-sponsor-card tier-platinum">
                                <span class="brz-sponsor-icon">💎</span>
                                <div class="brz-sponsor-title">Platinum</div>
                                <div class="brz-sponsor-price">$1500</div>
                            </a>
                            <a href="signup.php?package=Diamond-Member" class="brz-sponsor-card tier-diamond">
                                <span class="brz-sponsor-icon">💎</span>
                                <div class="brz-sponsor-title">Diamond</div>
                                <div class="brz-sponsor-price">$1000</div>
                            </a>
                            <a href="signup.php?package=Gold-Member" class="brz-sponsor-card tier-gold">
                                <span class="brz-sponsor-icon">🥇</span>
                                <div class="brz-sponsor-title">Gold</div>
                                <div class="brz-sponsor-price">$500</div>
                            </a>
                            <a href="signup.php?package=Silver-Member" class="brz-sponsor-card tier-silver">
                                <span class="brz-sponsor-icon">🥈</span>
                                <div class="brz-sponsor-title">Silver</div>
                                <div class="brz-sponsor-price">$300</div>
                            </a>
                            <a href="signup.php?package=Bronze-Member" class="brz-sponsor-card tier-bronze">
                                <span class="brz-sponsor-icon">🥉</span>
                                <div class="brz-sponsor-title">Bronze</div>
                                <div class="brz-sponsor-price">$100</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Direct CTA -->
        <section class="brz-cta-banner" style="background:var(--yellow); padding:60px 0; text-align:center;">
            <div class="container" style="position:relative; z-index:2;">
                <h2 class="brz-cta-banner__title brz-observe slide-up"
                    style="font-family:var(--font-heading); font-size:clamp(1.8rem, 4vw, 3rem); color:var(--navy); margin:0;">
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
</body>

</html>

