<!doctype html>
<html lang="en">

<head>
    <?php include 'includes/head.php'; ?>
    <title>Transparency & Accountability | Barrizi Organisation</title>
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

        /* Section Titles */
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

        /* Orange left-border callout */
        .brz-callout {
            border-left: 5px solid var(--orange);
            background: rgba(243, 112, 33, 0.05);
            border-radius: 0 12px 12px 0;
            padding: 28px 32px;
            margin-bottom: 50px;
            font-size: 1.08rem;
            line-height: 1.85;
            color: var(--text-dark);
        }

        /* Donation breakdown cards */
        .breakdown-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 24px;
            margin-bottom: 16px;
        }

        .breakdown-card {
            background: #fff;
            border-radius: 14px;
            padding: 36px 28px;
            text-align: center;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.06);
            position: relative;
            overflow: hidden;
        }

        .breakdown-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
        }

        .breakdown-card.orange-top::before {
            background: var(--orange);
        }

        .breakdown-card.navy-top::before {
            background: var(--navy);
        }

        .breakdown-card.purple-top::before {
            background: var(--purple);
        }

        .breakdown-card .bc-icon {
            font-size: 2.6rem;
            margin-bottom: 16px;
            display: block;
        }

        .breakdown-card .bc-pct {
            font-family: var(--font-heading);
            font-size: 3.5rem;
            line-height: 1;
            color: var(--navy);
            display: block;
            margin-bottom: 8px;
        }

        .breakdown-card.orange-top .bc-pct {
            color: var(--orange);
        }

        .breakdown-card.purple-top .bc-pct {
            color: var(--purple);
        }

        .breakdown-card .bc-label {
            font-family: var(--font-heading);
            font-size: 1.15rem;
            color: var(--navy);
            text-transform: uppercase;
            margin-bottom: 10px;
            display: block;
        }

        .breakdown-card .bc-desc {
            font-size: 0.92rem;
            color: var(--text-muted);
            line-height: 1.6;
        }

        .breakdown-note {
            font-size: 0.95rem;
            color: var(--text-muted);
            font-style: italic;
            margin-bottom: 40px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .breakdown-note i {
            color: var(--orange);
        }

        /* Legal / Governance card */
        .info-card {
            background: #fff;
            border-radius: 14px;
            padding: 36px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.06);
            margin-bottom: 40px;
        }

        .info-row {
            display: flex;
            align-items: flex-start;
            gap: 14px;
            padding: 14px 0;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }

        .info-row:last-child {
            border-bottom: none;
        }

        .info-row i {
            color: var(--orange);
            font-size: 1.1rem;
            margin-top: 3px;
            width: 22px;
            text-align: center;
            flex-shrink: 0;
        }

        .info-row .ir-label {
            font-weight: 700;
            color: var(--navy);
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            display: block;
            margin-bottom: 2px;
        }

        .info-row .ir-val {
            color: var(--text-dark);
            font-size: 1rem;
        }

        /* Annual reports */
        .reports-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 24px;
            margin-bottom: 40px;
        }

        .report-card {
            background: var(--navy);
            border-radius: 14px;
            padding: 32px 28px;
            color: var(--white);
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .report-card::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.03) 0%, transparent 60%);
        }

        .report-card .rc-year {
            font-family: var(--font-heading);
            font-size: 2.2rem;
            color: var(--yellow);
            line-height: 1;
            margin-bottom: 6px;
        }

        .report-card .rc-title {
            font-size: 0.95rem;
            color: rgba(255, 255, 255, 0.75);
            margin-bottom: 20px;
        }

        .report-card .rc-icon {
            font-size: 2.5rem;
            color: rgba(255, 255, 255, 0.12);
            position: absolute;
            bottom: 20px;
            right: 24px;
        }

        .rc-coming-soon {
            display: inline-block;
            background: rgba(243, 112, 33, 0.18);
            color: var(--orange);
            font-size: 0.8rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            border-radius: 20px;
            padding: 4px 14px;
            margin-bottom: 18px;
        }

        .rc-btn-disabled {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(255, 255, 255, 0.1);
            color: rgba(255, 255, 255, 0.45);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 8px;
            padding: 10px 20px;
            font-size: 0.9rem;
            cursor: not-allowed;
        }

        /* Governance team */
        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
            margin-bottom: 24px;
        }

        .team-card {
            background: #fff;
            border-radius: 12px;
            padding: 24px 20px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.05);
            border-top: 4px solid var(--orange);
        }

        .team-card .tc-name {
            font-family: var(--font-heading);
            font-size: 1.25rem;
            color: var(--navy);
            margin-bottom: 4px;
        }

        .team-card .tc-role {
            font-size: 0.88rem;
            color: var(--orange);
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.07em;
        }

        .governance-note {
            background: rgba(11, 25, 44, 0.04);
            border-radius: 10px;
            padding: 18px 22px;
            font-size: 0.95rem;
            color: var(--text-muted);
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 40px;
        }

        .governance-note i {
            color: var(--navy);
            font-size: 1.2rem;
        }

        /* Partners list */
        .partners-list {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 40px;
        }

        .partner-badge {
            background: var(--white);
            border: 1.5px solid rgba(11, 25, 44, 0.1);
            border-radius: 8px;
            padding: 10px 20px;
            font-size: 0.92rem;
            font-weight: 600;
            color: var(--navy);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .partner-badge i {
            color: var(--orange);
        }

        /* CTA */
        .cta-strip {
            background: var(--orange);
            border-radius: 16px;
            padding: 48px 40px;
            text-align: center;
            margin-bottom: 40px;
        }

        .cta-strip h3 {
            font-family: var(--font-heading);
            font-size: 2rem;
            color: var(--white);
            margin-bottom: 10px;
            text-transform: uppercase;
        }

        .cta-strip p {
            color: rgba(255, 255, 255, 0.88);
            margin-bottom: 28px;
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
                <h1 class="brz-page-header__title brz-observe slide-up">Transparency &amp; Accountability</h1>
                <div class="brz-page-header__breadcrumb brz-observe slide-up anim-delay-1">
                    <a href='index.php'>Home</a> / Transparency
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

                <!-- 1. Commitment to Transparency -->
                <div class="brz-observe slide-up" style="margin-bottom: 60px;">
                    <h2 class="program-section-title" style="margin-top:0;">Our Commitment to Transparency</h2>
                    <div class="brz-callout">
                        <i class="fas fa-quote-left"
                            style="color:var(--orange); font-size:1.5rem; margin-right:10px;"></i>
                        At Barrizi Organisation, we believe that every donor and partner has the right to know exactly
                        how their support is being used. We are committed to honest, open, and evidence-based
                        communication about our finances, governance, and impact.
                    </div>
                </div>

                <!-- 2. How Your Donations Are Used -->
                <div class="brz-observe slide-up" style="margin-bottom: 60px;">
                    <h2 class="program-section-title" style="margin-top:0;">How Your Donations Are Used</h2>
                    <div class="breakdown-grid">
                        <div class="breakdown-card orange-top">
                            <span class="bc-icon">🏫</span>
                            <span class="bc-pct">70%</span>
                            <span class="bc-label">Direct Programme Delivery</span>
                            <span class="bc-desc">School fees, meals, uniforms, and vocational training reaching
                                beneficiaries directly.</span>
                        </div>
                        <div class="breakdown-card navy-top">
                            <span class="bc-icon">🍽️</span>
                            <span class="bc-pct" style="color:var(--navy);">15%</span>
                            <span class="bc-label">Feeding &amp; Nutrition</span>
                            <span class="bc-desc">School meal programmes and holiday camp feeding to combat malnutrition
                                in Dandora.</span>
                        </div>
                        <div class="breakdown-card purple-top">
                            <span class="bc-icon">⚙️</span>
                            <span class="bc-pct">15%</span>
                            <span class="bc-label">Operations &amp; Administration</span>
                            <span class="bc-desc">Staff, monitoring systems, communications, and infrastructure that
                                make all programmes possible.</span>
                        </div>
                    </div>
                    <p class="breakdown-note">
                        <i class="fas fa-info-circle"></i>
                        We continually work to maximise the proportion of funds reaching our beneficiaries directly.
                    </p>
                </div>

                <!-- 3. Legal Status & Registration -->
                <div class="brz-observe slide-up" style="margin-bottom: 60px;">
                    <h2 class="program-section-title" style="margin-top:0;">Legal Status &amp; Registration</h2>
                    <div class="info-card">
                        <div class="info-row">
                            <i class="fas fa-certificate"></i>
                            <div>
                                <span class="ir-label">Registration Status</span>
                                <span class="ir-val">Non-Governmental Organisation (NGO) &mdash; registered with the
                                    Kenya NGO Board.</span>
                            </div>
                        </div>
                        <div class="info-row">
                            <i class="fas fa-calendar-alt"></i>
                            <div>
                                <span class="ir-label">Operating Since</span>
                                <span class="ir-val">15th August 2024</span>
                            </div>
                        </div>
                        <div class="info-row">
                            <i class="fas fa-flag"></i>
                            <div>
                                <span class="ir-label">Jurisdiction</span>
                                <span class="ir-val">Republic of Kenya</span>
                            </div>
                        </div>
                        <div class="info-row">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <span class="ir-label">Legal Enquiries</span>
                                <span class="ir-val"><a href="mailto:support@barriziorganization.org"
                                        style="color:var(--orange);">support@barriziorganization.org</a></span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 4. Annual Reports -->
                <div class="brz-observe slide-up" style="margin-bottom: 60px;">
                    <h2 class="program-section-title" style="margin-top:0;">Annual Reports</h2>
                    <p class="program-text">We are committed to publishing audited financial statements annually. Our 2024/2025 statement is currently being prepared by our auditors. Once complete, it will be available for download here.</p>
                    <div class="reports-grid" style="grid-template-columns: 1fr; max-width: 360px;">
                        <div class="report-card">
                            <span class="rc-year">2024/2025</span>
                            <span class="rc-title">Audited Financial Statement</span>
                            <span class="rc-coming-soon">In Preparation</span>
                            <span class="rc-btn-disabled"><i class="fas fa-download"></i> Download PDF</span>
                            <i class="fas fa-file-pdf rc-icon"></i>
                        </div>
                    </div>
                </div>

                <!-- 5. Our Governance -->
                <div class="brz-observe slide-up" style="margin-bottom: 60px;">
                    <h2 class="program-section-title" style="margin-top:0;">Our Governance</h2>
                    <p class="program-text">Barrizi Organisation is led by a dedicated team with deep roots in the
                        Dandora community. Our leadership is accountable to our beneficiaries, donors, and partners.</p>
                    <div class="team-grid">
                        <div class="team-card">
                            <div class="tc-name">Evelyn Agalla</div>
                            <div class="tc-role">Chairperson &amp; Executive Director</div>
                        </div>
                        <div class="team-card">
                            <div class="tc-name">Lorna Atieno</div>
                            <div class="tc-role">Secretary to the Board</div>
                        </div>
                        <div class="team-card">
                            <div class="tc-name">Maureen Rian</div>
                            <div class="tc-role">Board Treasurer</div>
                        </div>
                        <div class="team-card">
                            <div class="tc-name">Benson Njoroge</div>
                            <div class="tc-role">Board Member</div>
                        </div>
                        <div class="team-card">
                            <div class="tc-name">Miriam Marango</div>
                            <div class="tc-role">Board Member</div>
                        </div>
                    </div>
                    <div class="governance-note">
                        <i class="fas fa-info-circle"></i>
                        Barrizi Organisation Kenya is a duly registered Non-Governmental Organisation. The Board of Directors provides strategic oversight and is accountable to our beneficiaries, donors, and the Kenya NGO Board.
                    </div>
                </div>

                <!-- 6. Partners & Accountability -->
                <div class="brz-observe slide-up" style="margin-bottom: 60px;">
                    <h2 class="program-section-title" style="margin-top:0;">Partners &amp; Accountability</h2>
                    <p class="program-text">We work alongside trusted partner organisations who provide external
                        accountability and collaborative oversight of our community programmes:</p>
                    <div class="partners-list">
                        <div class="partner-badge"><i class="fas fa-handshake"></i> KAACR</div>
                        <div class="partner-badge"><i class="fas fa-handshake"></i> Footsteps Kenya</div>
                        <div class="partner-badge"><i class="fas fa-handshake"></i> Claire's Organisation</div>
                        <div class="partner-badge"><i class="fas fa-handshake"></i> Grapesyard</div>
                        <div class="partner-badge"><i class="fas fa-handshake"></i> Still Young Organisation</div>
                    </div>
                </div>

                <!-- CTA -->
                <div class="brz-observe slide-up">
                    <div class="cta-strip">
                        <h3>Have Questions About Our Finances?</h3>
                        <p>We welcome enquiries from donors, partners, and the public. Our team is happy to provide
                            further detail on any aspect of our financial management.</p>
                        <a href="contact.php" class="brz-btn brz-btn-navy"
                            style="background:var(--white); color:var(--orange); font-weight:700;">
                            Contact Us About Finances <i class="fas fa-arrow-right ml-2"></i>
                        </a>
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
