<?php include 'includes/head.php'; ?>
<?php include 'includes/preloader.php'; ?>
<!doctype html>
<html lang="en">

<head>
    <title>Secondary & Further Education | Barrizi Organisation</title>
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
            background-image: url('assets/img/jr1.jpg');
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

        /* Program Content Layout */
        .program-section-title {
            font-family: var(--font-heading);
            font-size: 2.5rem;
            color: var(--navy);
            margin-top: 40px;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        .program-text {
            font-size: 1.05rem;
            line-height: 1.8;
            color: var(--text-dark);
            margin-bottom: 20px;
        }

        /* Lists with Checkmarks */
        .brz-check-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .brz-check-list li {
            position: relative;
            padding-left: 35px;
            margin-bottom: 15px;
            font-size: 1.05rem;
            line-height: 1.6;
        }

        .brz-check-list li i {
            position: absolute;
            left: 0;
            top: 4px;
            color: var(--orange);
            font-size: 1.2rem;
        }

        /* Goal Cards */
        .goal-cards-wrapper {
            display: flex;
            gap: 20px;
            margin-top: 30px;
            margin-bottom: 40px;
            flex-wrap: wrap;
        }

        .goal-card {
            flex: 1;
            min-width: 280px;
            border-radius: 12px;
            padding: 30px;
        }

        .goal-card.short-term {
            background: var(--orange);
            color: var(--white);
        }

        .goal-card.long-term {
            background: #F4F6F9;
            color: var(--text-dark);
            border: 1px solid rgba(0, 0, 0, 0.05);
        }

        .goal-card h4 {
            font-family: var(--font-heading);
            font-size: 1.8rem;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .goal-card.short-term h4 {
            color: var(--white);
        }

        .goal-card.long-term h4 {
            color: var(--navy);
        }

        .goal-card ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .goal-card ul li {
            position: relative;
            padding-left: 25px;
            margin-bottom: 12px;
            font-size: 0.95rem;
        }

        .goal-card ul li i {
            position: absolute;
            left: 0;
            top: 4px;
        }

        .goal-card.short-term ul li i {
            color: rgba(255, 255, 255, 0.7);
        }

        .goal-card.long-term ul li i {
            color: var(--purple);
        }

        /* Impact Box */
        .impact-box {
            background: #FDFBF7;
            border: 1px solid rgba(0, 0, 0, 0.05);
            border-radius: 12px;
            padding: 30px;
            margin-bottom: 40px;
        }

        /* How to Help Box */
        .help-box {
            border: 2px solid rgba(243, 112, 33, 0.3);
            background: rgba(243, 112, 33, 0.02);
            border-radius: 12px;
            padding: 30px;
            margin-bottom: 40px;
        }

        /* Action Buttons */
        .action-buttons {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        /* Sidebar Styles */
        .sidebar-card {
            background: #fff;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
        }

        .sidebar-card h4 {
            font-family: var(--font-heading);
            font-size: 1.6rem;
            color: var(--navy);
            margin-bottom: 20px;
            border-bottom: 2px solid rgba(0, 0, 0, 0.05);
            padding-bottom: 10px;
        }

        .prog-info-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .prog-info-list li {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 15px;
            font-size: 0.95rem;
            color: var(--text-muted);
        }

        .prog-info-list li i {
            color: var(--orange);
            width: 20px;
            text-align: center;
            font-size: 1.1rem;
        }

        .other-programs-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .other-programs-list li {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 15px;
        }

        .other-programs-list li a {
            display: flex;
            align-items: center;
            gap: 15px;
            color: var(--text-dark);
            font-weight: 500;
            font-size: 0.95rem;
            text-decoration: none;
        }

        .other-programs-list li a:hover {
            color: var(--orange);
        }

        .other-programs-list img {
            width: 60px;
            height: 60px;
            border-radius: 8px;
            object-fit: cover;
        }

        .contact-cta-box {
            background: #FDFBF7;
            border-radius: 12px;
            padding: 25px;
            text-align: left;
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
                <h1 class="brz-page-header__title brz-observe slide-up">Junior High School & Senior High School
                    Education</h1>
                <div class="brz-page-header__breadcrumb brz-observe slide-up anim-delay-1">
                    <a href='index.php'>Home</a> / <a href='program.php'>Programs</a> / Secondary Education
                </div>
            </div>
        </section>

        <!-- Brush Stroke Divider -->
        <div class="brz-svg-divider"
            style="background:transparent; margin-top:-59px; position:relative; z-index:10; pointer-events:none;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60" preserveAspectRatio="none"
                style="display:block;width:100%;height:60px;">
                <path fill="#FDFBF7"
                    d="M0,30 C120,10 240,40 360,25 C480,10 600,45 720,30 C840,15 960,45 1080,30 C1200,15 1320,35 1440,25 L1440,60 L0,60 Z" />
            </svg>
        </div>

        <!-- Main Content Layout -->
        <section style="padding: 60px 0 90px; background: var(--off-white);">
            <div class="container">
                <!-- Row 1: Feature Image, Overview, What We Do & Sidebar -->
                <div class="row">
                    <!-- LEFT COLUMN: Main Content -->
                    <div class="col-lg-8 mb-5 mb-lg-0 brz-observe slide-right">

                        <!-- Polaroid Image Stack -->
                        <div class="brz-about-img-stack position-relative" style="padding:30px; margin-bottom:40px;">
                            <div
                                style="position:absolute; top:0; right:0; width:55%; height:65%; background:var(--orange); z-index:0; transform:translate(15px,-15px);">
                            </div>
                            <div class="brz-polaroid brz-polaroid-main"
                                style="position:relative; z-index:2; transform:rotate(-2deg); display:block;">
                                <img src="assets/img/jr1.jpg" alt="Program"
                                    style="width:100%; height:350px; object-fit:cover; display:block;">
                            </div>
                            <div class="brz-polaroid"
                                style="position:absolute; left:-10px; bottom:-20px; z-index:3; transform:rotate(4deg); width:48%; display:block;">
                                <img src="assets/new/junior.jpeg" alt="Program Details"
                                    style="width:100%; height:200px; object-fit:cover; display:block;">
                            </div>
                        </div>

                        <!-- Program Overview -->
                        <h2 class="program-section-title">Program Overview</h2>
                        <div class="program-text">
                            The transition from primary to secondary school is a critical vulnerability point for youth
                            in Dandora. Without financial support, many promising teenagers are forced to drop out,
                            immediately exposing them to the risks of early pregnancy, gang involvement, drug abuse, and
                            a return to the dumpsite. Our Secondary and Further Education program acts as a vital safety
                            net, ensuring that academic potential is never wasted due to poverty.<br><br>We provide full
                            sponsorship for high school students, encompassing boarding fees, advanced learning
                            materials, and continuous mentorship. Our family-centred model ensures that parents and
                            guardians are involved in their teenager's educational journey, creating a supportive home
                            environment that complements their academic growth.
                        </div>

                        <!-- What We Do -->
                        <h2 class="program-section-title">What We Do</h2>
                        <ul class="brz-check-list"
                            style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 15px;">
                            <li><i class="fas fa-check-circle"></i> High School Sponsorship: Full coverage of secondary
                                school tuition and, where applicable, boarding fees.</li>
                            <li><i class="fas fa-check-circle"></i> Advanced Learning Materials: Provision of
                                specialized textbooks, calculators, and laboratory equipment requirements.</li>
                            <li><i class="fas fa-check-circle"></i> Mentorship & Life Skills: Regular workshops focusing
                                on leadership, reproductive health, and career guidance.</li>
                            <li><i class="fas fa-check-circle"></i> Family Support: Working directly with parents to
                                ensure they understand the value of continued education and keeping teens away from
                                early labor.</li>
                        </ul>
                    </div>

                    <!-- RIGHT COLUMN: Sidebar -->
                    <div class="col-lg-4 brz-observe slide-left">
                        <!-- Program Information -->
                        <div class="sidebar-card">
                            <h4>Program Information</h4>
                            <ul class="prog-info-list">
                                <li><i class="fas fa-tags"></i> <strong>Category:</strong> Youth Development</li>
                                <li><i class="fas fa-users"></i> <strong>Target Group:</strong> Teenagers aged 14-18
                                </li>
                                <li><i class="fas fa-map-marker-alt"></i> <strong>Location:</strong> Dandora, Nairobi
                                </li>
                                <li><i class="fas fa-check-circle" style="color:#38A169;"></i> <strong>Status:</strong>
                                    Active</li>
                            </ul>
                        </div>

                        <!-- Other Programs -->
                        <div class="sidebar-card">
                            <h4>Other Programs</h4>
                                                                                                    <ul class="other-programs-list">
                            <li>
                                <a href="education.php">
                                    <img src="assets/new/h2.jpg" alt="Education">
                                    <span>Education Support</span>
                                </a>
                            </li>
                            <li>
                                <a href="junior.php">
                                    <img src="assets/new/junior.jpeg" alt="Junior">
                                    <span>Secondary Education</span>
                                </a>
                            </li>
                            <li>
                                <a href="vocational.php">
                                    <img src="assets/img/gallery/vocational.jpg" alt="Vocational">
                                    <span>Vocational Training</span>
                                </a>
                            </li>
                            <li>
                                <a href="mothers.php">
                                    <img src="assets/new/young.jpeg" alt="Mothers">
                                    <span>Support for Young Mothers</span>
                                </a>
                            </li>
                            <li>
                                <a href="holiday.php">
                                    <img src="assets/img/gallery/sports.jpg" alt="Holiday">
                                    <span>Holiday Programmes</span>
                                </a>
                            </li>
                            <li>
                                <a href="community.php">
                                    <img src="assets/img/gallery/women.jpg" alt="Community">
                                    <span>Community Transformation</span>
                                </a>
                            </li>
                        </ul>
                        </div>

                        <!-- Contact Box -->
                        <div class="sidebar-card contact-cta-box">
                            <h4 style="border:none; padding:0; margin-bottom:10px;">Need More Information?</h4>
                            <p style="font-size:0.95rem; color:var(--text-muted); margin-bottom:20px;">Contact us to
                                learn more about Secondary & Further Education or to get involved.</p>
                            <a href="contact.php" class="brz-btn w-100"
                                style="background:#D69E2E; color:#fff; text-align:center;">Contact Us <i
                                    class="fas fa-arrow-up ml-2" style="transform: rotate(45deg);"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Row 2: Full Width Layout for the rest of the content -->
                <div class="row mt-5">
                    <div class="col-12 brz-observe slide-up">


                        <!-- Our Goals -->
                        <h2 class="program-section-title">Our Goals</h2>
                        <div class="goal-cards-wrapper">
                            <div class="goal-card short-term">
                                <h4><i class="fas fa-bullseye"></i> Short-term Goals</h4>
                                <ul>
                                    <li><i class="fas fa-bullseye"></i> Prevent primary-to-secondary school dropout
                                        rates among vulnerable Dandora teens.</li>
                                    <li><i class="fas fa-bullseye"></i> Provide safe, structured environments for
                                        teenagers during critical developmental years.</li>
                                    <li><i class="fas fa-bullseye"></i> Equip students with the necessary materials to
                                        compete fairly in national examinations.</li>
                                </ul>
                            </div>
                            <div class="goal-card long-term">
                                <h4><i class="fas fa-rocket"></i> Long-term Vision</h4>
                                <ul>
                                    <li><i class="fas fa-rocket"></i> Create a pipeline of educated young adults ready
                                        for university or advanced vocational training.</li>
                                    <li><i class="fas fa-rocket"></i> Break the cycle of poverty by producing the first
                                        generation of high school graduates in heavily marginalized families.</li>
                                    <li><i class="fas fa-rocket"></i> Foster community leaders who will eventually
                                        return to uplift Dandora.</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Our Impact -->
                        <h2 class="program-section-title">Our Impact</h2>
                        <div class="impact-box">
                            <ul class="brz-check-list">
                                <li><i class="fas fa-check-circle"></i> Successfully retained high-risk teenagers in the
                                    education system who would have otherwise dropped out.</li>
                                <li><i class="fas fa-check-circle"></i> Fostered strong local relationships, proving our
                                    delivery model works in keeping youth away from dumpsite labor.</li>
                                <li><i class="fas fa-check-circle"></i> Holistic support has led to improved mental
                                    well-being and confidence among teenage beneficiaries.</li>
                            </ul>
                        </div>

                        <!-- How You Can Help -->
                        <h2 class="program-section-title">How You Can Help</h2>
                        <div class="help-box">
                            <ul class="brz-check-list">
                                <li><i class="fas fa-heart"></i> Fund a Scholar: Your donation can cover the annual
                                    tuition for a high school student.</li>
                                <li><i class="fas fa-heart"></i> Provide Mentorship: Professionals can volunteer to
                                    speak to our teens about career pathways.</li>
                                <li><i class="fas fa-heart"></i> Corporate Sponsorship: Partner with us to build
                                    sustainable programmes with long-term educational outcomes.</li>
                            </ul>
                        </div>

                        <!-- Action Buttons -->
                        <div class="action-buttons mt-4">
                            <a href="donation.php" class="brz-btn brz-btn-orange">Donate Now <i
                                    class="fas fa-arrow-right ml-2"></i></a>
                            <a href="volunteer.php" class="brz-btn" style="background:#0B192C; color:#fff;">Become a
                                Volunteer <i class="fas fa-arrow-right ml-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- Wave to Footer -->
    <div class="brz-svg-divider" style="background:var(--off-white); margin-bottom:-2px !important;">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60" preserveAspectRatio="none"
            style="display:block;width:100%;height:60px;">
            <path fill="#0B192C"
                d="M0,20 C100,40 200,5 300,25 C400,45 500,10 600,30 C700,50 800,15 900,35 C1000,55 1100,20 1200,40 C1300,60 1380,25 1440,40 L1440,60 L0,60 Z" />
        </svg>
    </div>

    <?php include 'includes/footer.php'; ?>

    <!-- Scroll Up -->
    <a href="#" id="brz-back-top" title="Go to Top">
        <i class="fas fa-chevron-up"></i>
    </a>

    <?php include 'includes/script.php'; ?>
</body>

</html>






