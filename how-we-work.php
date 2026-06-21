<!doctype html>
<html lang="en">

<head>
    <?php include 'includes/head.php'; ?>
    <title>How We Work | Barrizi Organisation</title>
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
            background-image: url('assets/img/hero/back10.png');
            background-size: cover;
            background-position: center;
            opacity: 0.25;
            mix-blend-mode: luminosity;

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

        .program-section-title {
            font-family: var(--font-heading);
            font-size: 2.5rem;
            color: var(--navy);
            margin-top: 0;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        .program-text {
            font-size: 1.05rem;
            line-height: 1.8;
            color: var(--text-dark);
            margin-bottom: 20px;
        }

        /* Approach 2-column */
        .approach-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
            margin-bottom: 70px;
        }

        @media (max-width: 900px) {
            .approach-row {
                grid-template-columns: 1fr;
            }
        }

        /* Polaroid image stack */
        .brz-polaroid-stack {
            position: relative;
            padding: 30px;
            height: 420px;
        }

        .brz-polaroid-stack .bg-accent {
            position: absolute;
            top: 0;
            right: 0;
            width: 55%;
            height: 65%;
            background: var(--orange);
            transform: translate(15px, -15px);
            z-index: 0;
        }

        .brz-polaroid-main-img {
            position: relative;
            z-index: 2;
            transform: rotate(-2deg);
            display: block;
            background: #fff;
            padding: 10px 10px 30px;
            box-shadow: 0 15px 45px rgba(0, 0, 0, 0.15);
        }

        .brz-polaroid-main-img img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            display: block;
        }

        .brz-polaroid-secondary-img {
            position: absolute;
            left: -10px;
            bottom: -10px;
            z-index: 3;
            transform: rotate(4deg);
            width: 48%;
            background: #fff;
            padding: 8px 8px 24px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        .brz-polaroid-secondary-img img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            display: block;
        }

        /* Principles Grid */
        .principles-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 24px;
            margin-bottom: 60px;
        }

        .principle-card {
            background: #fff;
            border-radius: 14px;
            padding: 32px 24px;
            box-shadow: 0 6px 24px rgba(0, 0, 0, 0.06);
            text-align: center;
            transition: transform 0.3s;
            border-top: 4px solid var(--orange);
        }

        .principle-card:hover {
            transform: translateY(-6px);
        }

        .principle-card .pc-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: rgba(243, 112, 33, 0.1);
            color: var(--orange);
            font-size: 1.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
        }

        .principle-card .pc-title {
            font-family: var(--font-heading);
            font-size: 1.2rem;
            color: var(--navy);
            text-transform: uppercase;
            margin-bottom: 12px;
        }

        .principle-card .pc-desc {
            font-size: 0.92rem;
            color: var(--text-muted);
            line-height: 1.6;
        }

        /* Process Steps */
        .process-steps {
            position: relative;
            margin-bottom: 60px;
        }

        .process-steps::before {
            content: '';
            position: absolute;
            left: 30px;
            top: 30px;
            bottom: 30px;
            width: 2px;
            background: linear-gradient(to bottom, var(--orange), var(--navy));
        }

        @media (max-width: 600px) {
            .process-steps::before {
                left: 20px;
            }
        }

        .process-step {
            display: flex;
            align-items: flex-start;
            gap: 24px;
            margin-bottom: 36px;
            position: relative;
        }

        .ps-num {
            width: 62px;
            height: 62px;
            border-radius: 50%;
            background: var(--navy);
            color: var(--white);
            font-family: var(--font-heading);
            font-size: 1.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            position: relative;
            z-index: 1;
            box-shadow: 0 4px 16px rgba(11, 25, 44, 0.25);
        }

        .ps-content {
            background: #fff;
            border-radius: 12px;
            padding: 24px 28px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.05);
            flex: 1;
        }

        .ps-content h4 {
            font-family: var(--font-heading);
            font-size: 1.3rem;
            color: var(--orange);
            text-transform: uppercase;
            margin-bottom: 8px;
        }

        .ps-content p {
            font-size: 0.98rem;
            color: var(--text-dark);
            line-height: 1.7;
            margin: 0;
        }

        /* M&E Section */
        .me-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
            margin-bottom: 60px;
        }

        .me-card {
            background: #fff;
            border-radius: 12px;
            padding: 24px 22px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            display: flex;
            align-items: flex-start;
            gap: 16px;
        }

        .me-card i {
            color: var(--orange);
            font-size: 1.4rem;
            margin-top: 2px;
            flex-shrink: 0;
        }

        .me-card .mc-text h5 {
            font-family: var(--font-heading);
            font-size: 1.05rem;
            color: var(--navy);
            margin-bottom: 4px;
            text-transform: uppercase;
        }

        .me-card .mc-text p {
            font-size: 0.9rem;
            color: var(--text-muted);
            line-height: 1.55;
            margin: 0;
        }

        /* CTA */
        .cta-row {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            align-items: center;
            background: #fff;
            border-radius: 16px;
            padding: 40px 36px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.06);
            margin-bottom: 40px;
        }

        .cta-row .cta-text {
            flex: 1;
            min-width: 250px;
        }

        .cta-row .cta-text h3 {
            font-family: var(--font-heading);
            font-size: 1.8rem;
            color: var(--navy);
            text-transform: uppercase;
            margin-bottom: 8px;
        }

        .cta-row .cta-text p {
            color: var(--text-muted);
            margin: 0;
        }

        .cta-btns {
            display: flex;
            gap: 14px;
            flex-wrap: wrap;
        }
    </style>
</head>

<body>
    <?php include 'includes/preloader.php'; ?>

    <?php include 'includes/preloader.php'; ?>
    <?php include 'includes/navbar.php'; ?>
    <?php include 'includes/sidebar.php'; ?>

    <main>
        <!-- Page Header -->
        <section class="brz-page-header">
            <div class="container brz-page-header__content">
                <h1 class="brz-page-header__title brz-observe slide-up">How We Work</h1>
                <div class="brz-page-header__breadcrumb brz-observe slide-up anim-delay-1">
                    <a href='index.php'>Home</a> / How We Work
                </div>
            </div>
        </section>

        <!-- Wave Divider -->
        <div class="brz-svg-divider"
            style="background:transparent; margin-top:-59px; position:relative; z-index:10; pointer-events:none;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60" preserveAspectRatio="none"
                style="display:block;width:100%;height:60px;">
                <path fill="#FDFBF7"
                    d="M0,30 C120,10 240,40 360,25 C480,10 600,45 720,30 C840,15 960,45 1080,30 C1200,15 1320,35 1440,25 L1440,60 L0,60 Z" />
            </svg>
        </div>

        <!-- Main Content -->
        <section style="padding: 60px 0 90px; background: var(--off-white);">
            <div class="container">

                <!-- 1. Our Approach -->
                <div class="approach-row brz-observe slide-up">
                    <!-- Image Stack -->
                    <div class="brz-polaroid-stack">
                        <div class="bg-accent"></div>
                        <div class="brz-polaroid-main-img">
                            <img src="assets/new/posters/p2.jpeg" alt="Barrizi community work">
                        </div>
                        <div class="brz-polaroid-secondary-img">
                            <img src="assets/new/posters/p2.jpeg" alt="Barrizi supporting families">
                        </div>
                    </div>
                    <!-- Text -->
                    <div>
                        <h2 class="program-section-title">Our Approach</h2>
                        <div class="program-text">
                            Barrizi operates on the belief that sustainable change only comes from within communities.
                            We don't parachute in solutions we build relationships, earn trust, and design every
                            intervention together with the families and young people of Dandora.
                        </div>
                        <div class="program-text">
                            Our work is rooted in empathy and humility. We listen before we act. We ask before we
                            assume. And we stay long after the work has begun because lasting change takes years, not
                            months.
                        </div>
                        <div style="display: flex; gap: 16px; flex-wrap: wrap; margin-top: 24px;">
                            <a href="impact.php" class="brz-btn brz-btn-orange">See Our Impact <i
                                    class="fas fa-arrow-right ml-2"></i></a>
                            <a href="program.php" class="brz-btn" style="background:var(--navy); color:#fff;">Our
                                Programmes <i class="fas fa-arrow-right ml-2"></i></a>
                        </div>
                    </div>
                </div>

                <!-- 2. Our 5 Principles -->
                <div class="brz-observe slide-up" style="margin-bottom: 20px;">
                    <h2 class="program-section-title">Our 5 Principles</h2>
                </div>
                <div class="principles-grid brz-observe slide-up">
                    <div class="principle-card">
                        <div class="pc-icon"><i class="fas fa-users"></i></div>
                        <div class="pc-title">Community First</div>
                        <div class="pc-desc">Every programme is designed with direct community input. We co-create, not
                            impose.</div>
                    </div>
                    <div class="principle-card">
                        <div class="pc-icon"><i class="fas fa-heart"></i></div>
                        <div class="pc-title">Holistic Support</div>
                        <div class="pc-desc">We address the whole person education, nutrition, mental wellbeing, and
                            economic security.</div>
                    </div>
                    <div class="principle-card">
                        <div class="pc-icon"><i class="fas fa-chart-line"></i></div>
                        <div class="pc-title">Measurable Outcomes</div>
                        <div class="pc-desc">We track what changes, not just what we do. Data and stories together tell
                            the full picture.</div>
                    </div>
                    <div class="principle-card">
                        <div class="pc-icon"><i class="fas fa-handshake"></i></div>
                        <div class="pc-title">Local Partnerships</div>
                        <div class="pc-desc">We build local capacity and avoid dependency empowering communities to
                            sustain progress themselves.</div>
                    </div>
                    <div class="principle-card">
                        <div class="pc-icon"><i class="fas fa-calendar-check"></i></div>
                        <div class="pc-title">Long-Term Commitment</div>
                        <div class="pc-desc">We invest in relationships over years, not months. Trust is built through
                            consistency and presence.</div>
                    </div>
                </div>

                <!-- 3. Our Process -->
                <div class="brz-observe slide-up" style="margin-bottom: 20px;">
                    <h2 class="program-section-title">Our Process</h2>
                    <p class="program-text">Every beneficiary journey follows a structured, compassionate process
                        designed to meet each person exactly where they are.</p>
                </div>
                <div class="process-steps brz-observe slide-up">
                    <div class="process-step">
                        <div class="ps-num">1</div>
                        <div class="ps-content">
                            <h4>Community Mapping</h4>
                            <p>We identify the most vulnerable families in Dandora through sustained community presence,
                                local referrals, and structured outreach ensuring we reach those most in need.</p>
                        </div>
                    </div>
                    <div class="process-step">
                        <div class="ps-num">2</div>
                        <div class="ps-content">
                            <h4>Enrolment &amp; Assessment</h4>
                            <p>Every child or young mother is assessed holistically. We understand their educational
                                background, family situation, health status, and specific barriers to progress.</p>
                        </div>
                    </div>
                    <div class="process-step">
                        <div class="ps-num">3</div>
                        <div class="ps-content">
                            <h4>Tailored Support Plan</h4>
                            <p>We design the right combination of programmes for each beneficiary no two plans are
                                identical. Support may include school fees, meals, vocational training, or pastoral
                                care.</p>
                        </div>
                    </div>
                    <div class="process-step">
                        <div class="ps-num">4</div>
                        <div class="ps-content">
                            <h4>Ongoing Monitoring</h4>
                            <p>Monthly check-ins, school attendance reports, teacher feedback, and welfare visits ensure
                                every child is progressing and no one falls through the cracks.</p>
                        </div>
                    </div>
                    <div class="process-step">
                        <div class="ps-num" style="background:var(--orange);">5</div>
                        <div class="ps-content">
                            <h4>Graduation &amp; Alumni</h4>
                            <p>We celebrate milestones and support beneficiaries as they transition into independence
                                whether that is secondary school, employment, or further training. Graduation is not the
                                end; it is a new beginning.</p>
                        </div>
                    </div>
                </div>

                <!-- 4. Monitoring & Evaluation -->
                <div class="brz-observe slide-up" style="margin-bottom: 20px;">
                    <h2 class="program-section-title">Monitoring &amp; Evaluation</h2>
                    <p class="program-text">We are serious about knowing whether our work is making a difference. Our
                        M&amp;E approach is built into every programme from day one.</p>
                </div>
                <div class="me-grid brz-observe slide-up">
                    <div class="me-card">
                        <i class="fas fa-clipboard-check"></i>
                        <div class="mc-text">
                            <h5>School Attendance Tracking</h5>
                            <p>Monthly attendance records submitted by each enrolled school, reviewed by our team.</p>
                        </div>
                    </div>
                    <div class="me-card">
                        <i class="fas fa-book-open"></i>
                        <div class="mc-text">
                            <h5>Academic Performance Reports</h5>
                            <p>End-of-term school reports collected and analysed to track academic progress and flag
                                concerns.</p>
                        </div>
                    </div>
                    <div class="me-card">
                        <i class="fas fa-smile"></i>
                        <div class="mc-text">
                            <h5>Wellbeing Assessments</h5>
                            <p>Structured welfare conversations with children, mothers, and families to monitor holistic
                                health.</p>
                        </div>
                    </div>
                    <div class="me-card">
                        <i class="fas fa-file-alt"></i>
                        <div class="mc-text">
                            <h5>Annual Impact Report</h5>
                            <p>A published report each year documenting our reach, outcomes, and financial
                                accountability.</p>
                        </div>
                    </div>
                    <div class="me-card">
                        <i class="fas fa-handshake"></i>
                        <div class="mc-text">
                            <h5>External Partner Reviews</h5>
                            <p>Regular collaborative reviews with partner organisations including KAACR and Footsteps
                                Kenya.</p>
                        </div>
                    </div>
                </div>

                <!-- 5. Theory of Change -->
                <div class="brz-observe slide-up" style="margin-bottom: 20px;">
                    <h2 class="program-section-title">Our Theory of Change</h2>
                    <p class="program-text">We believe that when you invest in a vulnerable child or young mother, you
                        catalyse a ripple effect that transforms entire families and communities. Here is how we
                        understand that journey.</p>
                </div>

                <div class="brz-observe slide-up" style="margin-bottom:60px;">
                    <!-- Theory of Change Visual Flow -->
                    <div
                        style="display:grid; grid-template-columns: repeat(auto-fit, minmax(160px, 1fr)); gap:0; align-items:stretch; position:relative;">

                        <!-- Column 1: Inputs -->
                        <div
                            style="background:var(--navy); color:#fff; padding:28px 20px; border-radius:12px 0 0 12px; text-align:center;">
                            <div
                                style="width:52px; height:52px; border-radius:50%; background:var(--orange); display:flex; align-items:center; justify-content:center; margin:0 auto 14px; font-size:1.3rem;">
                                <i class="fas fa-hand-holding-heart"></i></div>
                            <div
                                style="font-family:var(--font-heading); font-size:1.1rem; text-transform:uppercase; color:var(--orange); margin-bottom:12px;">
                                Inputs</div>
                            <ul
                                style="list-style:none; padding:0; margin:0; font-size:0.85rem; color:rgba(255,255,255,0.8); line-height:1.8;">
                                <li>Donor funding</li>
                                <li>Volunteer time</li>
                                <li>Community trust</li>
                                <li>Partner resources</li>
                                <li>Staff expertise</li>
                            </ul>
                        </div>

                        <!-- Arrow -->
                        <div
                            style="display:flex; align-items:center; justify-content:center; background:#f5f0fa; padding:10px 5px;">
                            <i class="fas fa-chevron-right" style="color:var(--purple); font-size:1.5rem;"></i>
                        </div>

                        <!-- Column 2: Activities -->
                        <div style="background:#f0ebf8; padding:28px 20px; text-align:center;">
                            <div
                                style="width:52px; height:52px; border-radius:50%; background:var(--purple); display:flex; align-items:center; justify-content:center; margin:0 auto 14px; font-size:1.3rem; color:#fff;">
                                <i class="fas fa-chalkboard-teacher"></i></div>
                            <div
                                style="font-family:var(--font-heading); font-size:1.1rem; text-transform:uppercase; color:var(--purple); margin-bottom:12px;">
                                Activities</div>
                            <ul
                                style="list-style:none; padding:0; margin:0; font-size:0.85rem; color:var(--text-dark); line-height:1.8;">
                                <li>School sponsorship</li>
                                <li>Vocational training</li>
                                <li>Feeding programme</li>
                                <li>Rights advocacy</li>
                                <li>Daycare &amp; mentorship</li>
                            </ul>
                        </div>

                        <!-- Arrow -->
                        <div
                            style="display:flex; align-items:center; justify-content:center; background:#f5f0fa; padding:10px 5px;">
                            <i class="fas fa-chevron-right" style="color:var(--purple); font-size:1.5rem;"></i>
                        </div>

                        <!-- Column 3: Outputs -->
                        <div style="background:#fff8ec; padding:28px 20px; text-align:center;">
                            <div
                                style="width:52px; height:52px; border-radius:50%; background:var(--yellow); display:flex; align-items:center; justify-content:center; margin:0 auto 14px; font-size:1.3rem; color:var(--navy);">
                                <i class="fas fa-check-double"></i></div>
                            <div
                                style="font-family:var(--font-heading); font-size:1.1rem; text-transform:uppercase; color:#b07d00; margin-bottom:12px;">
                                Outputs</div>
                            <ul
                                style="list-style:none; padding:0; margin:0; font-size:0.85rem; color:var(--text-dark); line-height:1.8;">
                                <li>Children in school</li>
                                <li>Mothers trained</li>
                                <li>Children fed daily</li>
                                <li>Awareness raised</li>
                                <li>Safe spaces created</li>
                            </ul>
                        </div>

                        <!-- Arrow -->
                        <div
                            style="display:flex; align-items:center; justify-content:center; background:#f5f0fa; padding:10px 5px;">
                            <i class="fas fa-chevron-right" style="color:var(--purple); font-size:1.5rem;"></i>
                        </div>

                        <!-- Column 4: Outcomes -->
                        <div style="background:#fff3ee; padding:28px 20px; text-align:center;">
                            <div
                                style="width:52px; height:52px; border-radius:50%; background:var(--orange); display:flex; align-items:center; justify-content:center; margin:0 auto 14px; font-size:1.3rem; color:#fff;">
                                <i class="fas fa-chart-line"></i></div>
                            <div
                                style="font-family:var(--font-heading); font-size:1.1rem; text-transform:uppercase; color:var(--orange); margin-bottom:12px;">
                                Outcomes</div>
                            <ul
                                style="list-style:none; padding:0; margin:0; font-size:0.85rem; color:var(--text-dark); line-height:1.8;">
                                <li>Improved literacy</li>
                                <li>Economic income</li>
                                <li>Better nutrition</li>
                                <li>Gender confidence</li>
                                <li>Reduced child labour</li>
                            </ul>
                        </div>

                        <!-- Arrow -->
                        <div
                            style="display:flex; align-items:center; justify-content:center; background:#f5f0fa; padding:10px 5px;">
                            <i class="fas fa-chevron-right" style="color:var(--purple); font-size:1.5rem;"></i>
                        </div>

                        <!-- Column 5: Impact -->
                        <div
                            style="background:var(--navy); color:#fff; padding:28px 20px; border-radius:0 12px 12px 0; text-align:center;">
                            <div
                                style="width:52px; height:52px; border-radius:50%; background:#FFC107; display:flex; align-items:center; justify-content:center; margin:0 auto 14px; font-size:1.3rem; color:var(--navy);">
                                <i class="fas fa-globe-africa"></i></div>
                            <div
                                style="font-family:var(--font-heading); font-size:1.1rem; text-transform:uppercase; color:#FFC107; margin-bottom:12px;">
                                Impact</div>
                            <ul
                                style="list-style:none; padding:0; margin:0; font-size:0.85rem; color:rgba(255,255,255,0.8); line-height:1.8;">
                                <li>Poverty broken</li>
                                <li>Child labour ended</li>
                                <li>Mothers independent</li>
                                <li>Communities stronger</li>
                                <li>Futures transformed</li>
                            </ul>
                        </div>
                    </div>

                    <div
                        style="background:rgba(74,21,75,0.06); border-left:4px solid var(--purple); border-radius:4px; padding:20px 24px; margin-top:30px;">
                        <p style="margin:0; font-size:1rem; color:var(--navy); line-height:1.7;">
                            <strong style="color:var(--purple);">Our core assumption:</strong> When a vulnerable child
                            or young mother is given consistent, holistic, and dignified support education, nutrition,
                            skills, and safety they not only escape the cycle of poverty, but become agents of change
                            within their own families and communities.
                        </p>
                    </div>
                </div>

                <!-- 6. CTA -->
                <div class="cta-row brz-observe slide-up">
                    <div class="cta-text">
                        <h3>See the Results of Our Work</h3>
                        <p>Explore our impact data, stories, and financials or get in touch with our team.</p>
                    </div>
                    <div class="cta-btns">
                        <a href="impact.php" class="brz-btn brz-btn-orange">Our Impact <i
                                class="fas fa-arrow-right ml-2"></i></a>
                        <a href="contact.php" class="brz-btn" style="background:var(--navy); color:#fff;">Contact Us <i
                                class="fas fa-arrow-right ml-2"></i></a>
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