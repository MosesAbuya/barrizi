<!doctype html>
<html lang="en">

<head>
    <?php include 'includes/head.php'; ?>
    <title>Our Impact | Barrizi Organisation</title>
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
            padding: 160px 0 90px;
            position: relative;
            overflow: hidden;
            text-align: center;
        }

        .brz-page-header::before {
            content: '';
            position: absolute;
            inset: 0;
            background-image: url('assets/img/hero/back15.png');
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

        .brz-page-header__subtitle {
            font-size: 1.15rem;
            color: rgba(255, 255, 255, 0.75);
            margin-top: 12px;
            margin-bottom: 6px;
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

        /* Section Title */
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

        /* Stat Counter Cards */
        .stat-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 24px;
            margin-bottom: 60px;
        }

        .stat-card {
            background: #fff;
            border-radius: 14px;
            padding: 36px 24px 28px;
            text-align: center;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.06);
            position: relative;
            overflow: hidden;
            transition: transform 0.3s;
        }

        .stat-card:hover {
            transform: translateY(-6px);
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
        }

        .stat-card.orange::before {
            background: var(--orange);
        }

        .stat-card.navy::before {
            background: var(--navy);
        }

        .stat-card.purple::before {
            background: var(--purple);
        }

        .stat-card.yellow::before {
            background: var(--yellow);
        }

        .stat-card .sc-number {
            font-family: var(--font-heading);
            font-size: 3.8rem;
            line-height: 1;
            display: block;
            margin-bottom: 6px;
        }

        .stat-card.orange .sc-number {
            color: var(--orange);
        }

        .stat-card.navy .sc-number {
            color: var(--navy);
        }

        .stat-card.purple .sc-number {
            color: var(--purple);
        }

        .stat-card.yellow .sc-number {
            color: #C7920A;
        }

        .stat-card .sc-label {
            font-size: 0.95rem;
            color: var(--text-muted);
            line-height: 1.5;
        }

        /* Programme Accordion */
        .prog-accordion {
            margin-bottom: 60px;
        }

        .prog-acc-item {
            background: #fff;
            border-radius: 12px;
            margin-bottom: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            overflow: hidden;
        }

        .prog-acc-header {
            display: flex;
            align-items: center;
            gap: 16px;
            padding: 20px 24px;
            cursor: pointer;
            user-select: none;
            transition: background 0.2s;
        }

        .prog-acc-header:hover {
            background: rgba(243, 112, 33, 0.04);
        }

        .prog-acc-header.active {
            background: rgba(243, 112, 33, 0.07);
        }

        .prog-acc-icon {
            width: 46px;
            height: 46px;
            border-radius: 10px;
            background: var(--orange);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            flex-shrink: 0;
        }

        .prog-acc-title {
            font-family: var(--font-heading);
            font-size: 1.35rem;
            color: var(--navy);
            flex: 1;
            text-transform: uppercase;
        }

        .prog-acc-chevron {
            color: var(--orange);
            transition: transform 0.3s;
        }

        .prog-acc-header.active .prog-acc-chevron {
            transform: rotate(180deg);
        }

        .prog-acc-body {
            display: none;
            padding: 0 24px 24px 86px;
        }

        .prog-acc-body.open {
            display: block;
        }

        .prog-acc-body ul {
            list-style: none;
            padding: 0;
            margin: 0 0 16px;
        }

        .prog-acc-body ul li {
            position: relative;
            padding-left: 28px;
            margin-bottom: 10px;
            font-size: 1rem;
            line-height: 1.6;
            color: var(--text-dark);
        }

        .prog-acc-body ul li::before {
            display: none;
        }

        .prog-acc-body ul li i.li-icon {
            color: var(--orange);
            margin-right: 10px;
            flex-shrink: 0;
            margin-top: 3px;
        }

        .prog-acc-body ul li {
            display: flex;
            align-items: flex-start;
            padding-left: 0;
        }

        .prog-acc-body a {
            font-size: 0.92rem;
            color: var(--orange);
            font-weight: 700;
            text-decoration: none;
        }

        .prog-acc-body a:hover {
            text-decoration: underline;
        }

        /* Theory of Change */
        .toc-wrapper {
            background: var(--navy);
            border-radius: 16px;
            padding: 48px 36px;
            margin-bottom: 60px;
            overflow: hidden;
        }

        .toc-wrapper .program-section-title {
            color: var(--white);
        }

        .toc-flow {
            display: flex;
            align-items: center;
            gap: 0;
            flex-wrap: wrap;
            justify-content: center;
        }

        .toc-box {
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: 12px;
            padding: 22px 18px;
            text-align: center;
            flex: 1;
            min-width: 140px;
            max-width: 200px;
            position: relative;
        }

        .toc-box .toc-step-label {
            font-size: 0.72rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.12em;
            color: var(--orange);
            margin-bottom: 10px;
            display: block;
        }

        .toc-box .toc-step-title {
            font-family: var(--font-heading);
            font-size: 1rem;
            color: var(--white);
            text-transform: uppercase;
            display: block;
            margin-bottom: 8px;
        }

        .toc-box .toc-step-desc {
            font-size: 0.82rem;
            color: rgba(255, 255, 255, 0.6);
            line-height: 1.5;
        }

        .toc-arrow {
            color: var(--orange);
            font-size: 1.5rem;
            padding: 0 8px;
            flex-shrink: 0;
        }

        @media (max-width: 768px) {
            .toc-flow {
                flex-direction: column;
            }

            .toc-arrow {
                transform: rotate(90deg);
            }
        }

        /* Story Cards */
        .stories-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 28px;
            margin-bottom: 60px;
        }

        .story-card {
            background: #fff;
            border-radius: 14px;
            padding: 36px 32px 28px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.06);
            border-left: 5px solid var(--orange);
            position: relative;
        }

        .story-quote-mark {
            font-size: 5rem;
            line-height: 0.8;
            color: var(--orange);
            opacity: 0.2;
            font-family: Georgia, serif;
            position: absolute;
            top: 20px;
            left: 24px;
        }

        .story-card p {
            font-style: italic;
            font-size: 1rem;
            line-height: 1.8;
            color: var(--text-dark);
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
        }

        .story-name {
            font-family: var(--font-heading);
            font-size: 1.1rem;
            color: var(--navy);
            display: block;
        }

        .story-tag {
            font-size: 0.82rem;
            color: var(--orange);
            font-weight: 700;
            text-transform: uppercase;
        }

        /* Future Goals */
        .future-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 20px;
            margin-bottom: 60px;
        }

        .future-card {
            background: #fff;
            border-radius: 12px;
            padding: 28px 22px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.05);
            display: flex;
            align-items: flex-start;
            gap: 16px;
        }

        .future-card .fc-icon {
            width: 44px;
            height: 44px;
            border-radius: 10px;
            background: var(--navy);
            color: var(--orange);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
            flex-shrink: 0;
        }

        .future-card .fc-text {
            font-size: 0.98rem;
            line-height: 1.6;
            color: var(--text-dark);
        }

        /* CTA Strip */
        .cta-strip-purple {
            background: var(--purple);
            border-radius: 16px;
            padding: 56px 40px;
            text-align: center;
            margin-bottom: 40px;
        }

        .cta-strip-purple h3 {
            font-family: var(--font-heading);
            font-size: 2.2rem;
            color: var(--white);
            margin-bottom: 10px;
            text-transform: uppercase;
        }

        .cta-strip-purple p {
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 30px;
        }

        .cta-btn-group {
            display: flex;
            gap: 16px;
            justify-content: center;
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
                <h1 class="brz-page-header__title brz-observe slide-up">Our Impact</h1>
                <p class="brz-page-header__subtitle brz-observe slide-up anim-delay-1">Evidence of Change in Dandora,
                    Nairobi</p>
                <div class="brz-page-header__breadcrumb brz-observe slide-up anim-delay-2">
                    <a href='index.php'>Home</a> / Our Impact
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

                <!-- 1. Impact Summary Stats -->
                <div class="brz-observe slide-up" style="margin-bottom: 20px;">
                    <h2 class="program-section-title">Impact at a Glance</h2>
                </div>
                <div class="stat-grid brz-observe slide-up">
                    <div class="stat-card orange">
                        <span class="sc-number"><span class="brz-counter" data-target="200">0</span>+</span>
                        <span class="sc-label">Children enrolled in education programmes</span>
                    </div>
                    <div class="stat-card navy">
                        <span class="sc-number"><span class="brz-counter" data-target="15">0</span></span>
                        <span class="sc-label">Young mothers supported in school reintegration &amp;
                            entrepreneurship</span>
                    </div>
                    <div class="stat-card purple">
                        <span class="sc-number"><span class="brz-counter" data-target="6">0</span></span>
                        <span class="sc-label">Vocational training graduates empowered with skills</span>
                    </div>
                    <div class="stat-card yellow">
                        <span class="sc-number"><span class="brz-counter" data-target="5">0</span>+</span>
                        <span class="sc-label">Partner organisations providing support and accountability</span>
                    </div>
                </div>

                <!-- 2. Impact by Programme -->
                <div class="brz-observe slide-up" style="margin-bottom: 20px;">
                    <h2 class="program-section-title">Impact by Programme</h2>
                </div>
                <div class="prog-accordion brz-observe slide-up">

                    <div class="prog-acc-item">
                        <div class="prog-acc-header active" onclick="toggleAccordion(this)">
                            <div class="prog-acc-icon"><i class="fas fa-graduation-cap"></i></div>
                            <span class="prog-acc-title">Education Support</span>
                            <i class="fas fa-chevron-down prog-acc-chevron"></i>
                        </div>
                        <div class="prog-acc-body open">
                            <ul>
                                <li><i class="fas fa-check-circle li-icon"></i>200+ children pulled from the Dandora
                                    dumpsite and enrolled in primary school since 2020.</li>
                                <li><i class="fas fa-check-circle li-icon"></i>Full sponsorship of school fees,
                                    uniforms, books, and daily meals to remove all barriers to learning.</li>
                                <li><i class="fas fa-check-circle li-icon"></i>Significantly improved academic
                                    performance and retention rates among enrolled students.</li>
                            </ul>
                            <a href="education.php">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="prog-acc-item">
                        <div class="prog-acc-header" onclick="toggleAccordion(this)">
                            <div class="prog-acc-icon" style="background:var(--navy);"><i class="fas fa-school"></i>
                            </div>
                            <span class="prog-acc-title">Secondary Education (Juniors)</span>
                            <i class="fas fa-chevron-down prog-acc-chevron"></i>
                        </div>
                        <div class="prog-acc-body">
                            <ul>
                                <li><i class="fas fa-check-circle li-icon"></i>Supporting vulnerable students through
                                    secondary school with fees, mentorship, and pastoral care.</li>
                                <li><i class="fas fa-check-circle li-icon"></i>Bridging the gap between primary
                                    completion and secondary enrolment for at-risk youth.</li>
                                <li><i class="fas fa-check-circle li-icon"></i>Building academic confidence to ensure
                                    progression toward further education and employment.</li>
                            </ul>
                            <a href="junior.php">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="prog-acc-item">
                        <div class="prog-acc-header" onclick="toggleAccordion(this)">
                            <div class="prog-acc-icon" style="background:var(--purple);"><i class="fas fa-tools"></i>
                            </div>
                            <span class="prog-acc-title">Vocational Training</span>
                            <i class="fas fa-chevron-down prog-acc-chevron"></i>
                        </div>
                        <div class="prog-acc-body">
                            <ul>
                                <li><i class="fas fa-check-circle li-icon"></i>6 graduates trained in practical skills
                                    including tailoring, crafts, and small business management.</li>
                                <li><i class="fas fa-check-circle li-icon"></i>Equipping young adults who missed formal
                                    education pathways with marketable, income-generating skills.</li>
                                <li><i class="fas fa-check-circle li-icon"></i>Partnering with local trainers to ensure
                                    industry-relevant, practical learning.</li>
                            </ul>
                            <a href="vocational.php">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="prog-acc-item">
                        <div class="prog-acc-header" onclick="toggleAccordion(this)">
                            <div class="prog-acc-icon" style="background:#E53E3E;"><i class="fas fa-heart"></i></div>
                            <span class="prog-acc-title">Support for Young Mothers</span>
                            <i class="fas fa-chevron-down prog-acc-chevron"></i>
                        </div>
                        <div class="prog-acc-body">
                            <ul>
                                <li><i class="fas fa-check-circle li-icon"></i>15 young mothers supported in returning
                                    to school after pregnancy-related dropout.</li>
                                <li><i class="fas fa-check-circle li-icon"></i>Entrepreneurship training enabling
                                    financial independence alongside education.</li>
                                <li><i class="fas fa-check-circle li-icon"></i>Holistic welfare support addressing
                                    stigma, childcare, and wellbeing challenges.</li>
                            </ul>
                            <a href="mothers.php">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="prog-acc-item">
                        <div class="prog-acc-header" onclick="toggleAccordion(this)">
                            <div class="prog-acc-icon" style="background:#D69E2E;"><i class="fas fa-sun"></i></div>
                            <span class="prog-acc-title">Holiday Programmes</span>
                            <i class="fas fa-chevron-down prog-acc-chevron"></i>
                        </div>
                        <div class="prog-acc-body">
                            <ul>
                                <li><i class="fas fa-check-circle li-icon"></i>Holiday camps providing structured, safe
                                    activities during school breaks in Dandora.</li>
                                <li><i class="fas fa-check-circle li-icon"></i>Feeding initiatives ensuring no child
                                    goes hungry when school meals are unavailable.</li>
                                <li><i class="fas fa-check-circle li-icon"></i>Creative, recreational, and educational
                                    activities keeping children engaged and protected.</li>
                            </ul>
                            <a href="holiday.php">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="prog-acc-item">
                        <div class="prog-acc-header" onclick="toggleAccordion(this)">
                            <div class="prog-acc-icon" style="background:#38A169;"><i class="fas fa-users"></i></div>
                            <span class="prog-acc-title">Community Transformation</span>
                            <i class="fas fa-chevron-down prog-acc-chevron"></i>
                        </div>
                        <div class="prog-acc-body">
                            <ul>
                                <li><i class="fas fa-check-circle li-icon"></i>Deepening relationships with local
                                    families, community leaders, and faith networks in Dandora.</li>
                                <li><i class="fas fa-check-circle li-icon"></i>Awareness campaigns on child rights,
                                    safeguarding, and nutrition.</li>
                                <li><i class="fas fa-check-circle li-icon"></i>Creating a collective vision for a safer,
                                    more educated, and thriving Dandora community.</li>
                            </ul>
                            <a href="community.php">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                </div>

                <!-- 3. Theory of Change -->
                <div class="brz-observe slide-up" style="margin-bottom: 60px;">
                    <div class="toc-wrapper">
                        <h2 class="program-section-title" style="color:var(--white); margin-bottom:36px;">Our Theory of
                            Change</h2>
                        <div class="toc-flow">
                            <div class="toc-box">
                                <span class="toc-step-label">Step 1</span>
                                <span class="toc-step-title">Problem</span>
                                <span class="toc-step-desc">Child living in Dandora dumpsite exposed to poverty, hunger,
                                    and exploitation</span>
                            </div>
                            <div class="toc-arrow"><i class="fas fa-chevron-right"></i></div>
                            <div class="toc-box">
                                <span class="toc-step-label">Step 2</span>
                                <span class="toc-step-title">Intervention</span>
                                <span class="toc-step-desc">School enrolment + daily meals + uniform + holistic welfare
                                    support</span>
                            </div>
                            <div class="toc-arrow"><i class="fas fa-chevron-right"></i></div>
                            <div class="toc-box">
                                <span class="toc-step-label">Step 3</span>
                                <span class="toc-step-title">Output</span>
                                <span class="toc-step-desc">Child attends school daily, nourished, clothed, and
                                    safe</span>
                            </div>
                            <div class="toc-arrow"><i class="fas fa-chevron-right"></i></div>
                            <div class="toc-box">
                                <span class="toc-step-label">Step 4</span>
                                <span class="toc-step-title">Outcome</span>
                                <span class="toc-step-desc">Academic progress, growing confidence, and stable
                                    wellbeing</span>
                            </div>
                            <div class="toc-arrow"><i class="fas fa-chevron-right"></i></div>
                            <div class="toc-box">
                                <span class="toc-step-label">Step 5</span>
                                <span class="toc-step-title">Long-Term Impact</span>
                                <span class="toc-step-desc">Breaks the generational poverty cycle educated, employed,
                                    empowered adult</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 4. Beneficiary Stories -->
                <div class="brz-observe slide-up" style="margin-bottom: 20px;">
                    <h2 class="program-section-title">Beneficiary Stories</h2>
                    <p class="program-text">Behind every statistic is a real child, a real family, a real
                        transformation. Here are just two of the lives we have had the honour of walking alongside.</p>
                </div>
                <div class="stories-grid brz-observe slide-up">
                    <div class="story-card">
                        <div class="story-quote-mark">&ldquo;</div>
                        <p>When we first met Jasmine, she was just four years old wandering the edges of Dandora alone,
                            far from home, with no adult in sight. Today, she is thriving in our early childhood
                            daycare. She arrives every morning with a bright smile, ready to learn, play, and grow in a
                            safe, loving environment. Her mother now has the confidence to seek work, knowing Jasmine is
                            cared for.</p>
                        <span class="story-name">Jasmine, Age 4</span>
                        <span class="story-tag">Early Childhood Daycare Beneficiary</span>
                    </div>
                    <div class="story-card">
                        <div class="story-quote-mark">&ldquo;</div>
                        <p>She dropped out of school at 16 after becoming pregnant, convinced her education was over
                            forever. Through our Mothers Programme, she was reintegrated into school, given
                            entrepreneurship training, and connected with a mentor. She recently sat her secondary
                            school examinations and passed. She now dreams of becoming a nurse and has never stopped
                            believing in herself again.</p>
                        <span class="story-name">Anonymous, Age 18</span>
                        <span class="story-tag">Mothers Programme School Reintegration</span>
                    </div>
                </div>

                <!-- 5. What Comes Next -->
                <div class="brz-observe slide-up" style="margin-bottom: 20px;">
                    <h2 class="program-section-title">What Comes Next</h2>
                    <p class="program-text">We are just getting started. These are the goals that drive us forward:</p>
                </div>
                <div class="future-grid brz-observe slide-up">
                    <div class="future-card">
                        <div class="fc-icon"><i class="fas fa-child"></i></div>
                        <span class="fc-text"><strong>Enrol 500 children</strong> in Barrizi education programmes by
                            2027, ensuring no child in Dandora is left behind.</span>
                    </div>
                    <div class="future-card">
                        <div class="fc-icon"><i class="fas fa-building"></i></div>
                        <span class="fc-text"><strong>Establish a permanent Barrizi Community Centre</strong> in Dandora
                            to consolidate all programmes under one roof.</span>
                    </div>
                    <div class="future-card">
                        <div class="fc-icon"><i class="fas fa-futbol"></i></div>
                        <span class="fc-text"><strong>Launch a dedicated Barrizi Sports Academy</strong> to harness the
                            extraordinary talent of Dandora's young people.</span>
                    </div>
                    <div class="future-card">
                        <div class="fc-icon"><i class="fas fa-certificate"></i></div>
                        <span class="fc-text"><strong>Achieve full Kenya NGO Board registration</strong> to unlock new
                            funding partnerships and expand our reach nationally.</span>
                    </div>
                </div>

                <!-- 6. CTA Strip -->
                <div class="brz-observe slide-up">
                    <div class="cta-strip-purple">
                        <h3>Help Us Achieve These Goals</h3>
                        <p>Every donation, every volunteer hour, every partnership moves us closer to a Dandora where
                            every child thrives.</p>
                        <div class="cta-btn-group">
                            <a href="donation.php" class="brz-btn brz-btn-orange">Donate Now <i
                                    class="fas fa-arrow-right ml-2"></i></a>
                            <a href="volunteer.php" class="brz-btn"
                                style="background:#fff; color:var(--purple); font-weight:700;">Become a Volunteer <i
                                    class="fas fa-arrow-right ml-2"></i></a>
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

    <script>
        /* ---- Animated Counter ---- */
        (function () {
            var counters = document.querySelectorAll('.brz-counter');
            var started = false;

            function animateCounters() {
                counters.forEach(function (el) {
                    var target = parseInt(el.getAttribute('data-target'), 10);
                    var start = 0;
                    var duration = 1800;
                    var stepTime = Math.max(Math.floor(duration / target), 16);
                    var timer = setInterval(function () {
                        start += Math.ceil(target / (duration / stepTime));
                        if (start >= target) { start = target; clearInterval(timer); }
                        el.textContent = start;
                    }, stepTime);
                });
            }

            function onScroll() {
                if (started) return;
                var section = document.querySelector('.stat-grid');
                if (!section) return;
                var rect = section.getBoundingClientRect();
                if (rect.top < window.innerHeight - 60) {
                    started = true;
                    animateCounters();
                }
            }

            window.addEventListener('scroll', onScroll, { passive: true });
            onScroll();
        })();

        /* ---- Programme Accordion ---- */
        function toggleAccordion(header) {
            var body = header.nextElementSibling;
            var isOpen = body.classList.contains('open');
            // Close all
            document.querySelectorAll('.prog-acc-body').forEach(function (b) { b.classList.remove('open'); });
            document.querySelectorAll('.prog-acc-header').forEach(function (h) { h.classList.remove('active'); });
            if (!isOpen) {
                body.classList.add('open');
                header.classList.add('active');
            }
        }
    </script>
</body>

</html>

