<!doctype html>
<html lang="en">

<head>
    <?php include 'includes/head.php'; ?>
    <title>Terms &amp; Conditions | Barrizi Organisation Kenya</title>
    <meta name="description"
        content="Terms and Conditions governing use of the Barrizi Organisation Kenya website, donations, and services. Governed by the laws of Kenya.">
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
            background-image: url('assets/img/hero/back9.png');
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

        /* Policy Content */
        .policy-section {
            padding: 70px 0 90px;
            background: var(--off-white);
        }

        .policy-card {
            background: #fff;
            border-radius: 16px;
            padding: 50px 55px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.06);
        }

        .policy-effective {
            display: inline-block;
            background: rgba(243, 112, 33, 0.1);
            color: var(--orange);
            font-size: 0.88rem;
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            padding: 6px 16px;
            border-radius: 50px;
            margin-bottom: 28px;
        }

        .policy-intro {
            font-size: 1.1rem;
            line-height: 1.85;
            color: var(--text-muted);
            margin-bottom: 40px;
            padding-bottom: 30px;
            border-bottom: 2px solid rgba(0, 0, 0, 0.05);
        }

        .policy-section-heading {
            font-family: var(--font-heading);
            font-size: 1.7rem;
            color: var(--navy);
            margin-top: 40px;
            margin-bottom: 14px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .policy-section-heading i {
            color: var(--orange);
            font-size: 1.4rem;
        }

        .policy-text {
            font-size: 1.02rem;
            line-height: 1.85;
            color: var(--text-dark);
            margin-bottom: 18px;
        }

        .policy-list {
            list-style: none;
            padding: 0;
            margin: 0 0 20px;
        }

        .policy-list li {
            position: relative;
            padding-left: 30px;
            margin-bottom: 12px;
            font-size: 1.02rem;
            line-height: 1.7;
            color: var(--text-dark);
        }

        .policy-list li::before {
            content: '';
            position: absolute;
            left: 0;
            top: 10px;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--orange);
        }

        .policy-divider {
            border: none;
            border-top: 2px solid rgba(0, 0, 0, 0.05);
            margin: 35px 0;
        }

        .policy-highlight-box {
            background: #FDFBF7;
            border-left: 4px solid var(--orange);
            border-radius: 0 12px 12px 0;
            padding: 20px 24px;
            margin: 20px 0 24px;
        }

        .policy-highlight-box p {
            font-size: 1rem;
            line-height: 1.75;
            color: var(--text-dark);
            margin: 0;
        }

        .policy-contact-box {
            background: var(--navy);
            color: #fff;
            border-radius: 12px;
            padding: 30px 35px;
            margin-top: 40px;
        }

        .policy-contact-box h4 {
            font-family: var(--font-heading);
            font-size: 1.6rem;
            color: #fff;
            margin-bottom: 10px;
        }

        .policy-contact-box p {
            color: rgba(255, 255, 255, 0.7);
            margin-bottom: 14px;
            font-size: 0.98rem;
        }

        .policy-contact-box a {
            color: var(--orange);
            font-weight: 600;
        }

        @media (max-width: 767px) {
            .policy-card {
                padding: 30px 22px;
            }
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
                <h1 class="brz-page-header__title brz-observe slide-up">Terms &amp; Conditions</h1>
                <div class="brz-page-header__breadcrumb brz-observe slide-up anim-delay-1">
                    <a href='index.php'>Home</a> / Terms &amp; Conditions
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

        <!-- Terms Content -->
        <section class="policy-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="policy-card">

                            <span class="policy-effective"><i class="fas fa-calendar-alt mr-1"></i> Effective Date: May
                                2025</span>

                            <!-- Introduction -->
                            <p class="policy-intro">
                                These Terms and Conditions ("Terms") govern your access to and use of the Barrizi
                                Organisation Kenya website at <strong>www.barriziorganization.org</strong> (the
                                "Website") and any services, donations, or communications made through it. By accessing
                                or using the Website, you agree to be bound by these Terms. If you do not agree, please
                                do not use the Website.
                            </p>

                            <!-- 1. Acceptance of Terms -->
                            <h2 class="policy-section-heading"><i class="fas fa-handshake"></i> 1. Acceptance of Terms
                            </h2>
                            <p class="policy-text">By using this Website, you confirm that you are at least 18 years of
                                age or are accessing the Website under the supervision of a parent or legal guardian.
                                Barrizi Organisation Kenya reserves the right to modify these Terms at any time. Any
                                changes will be posted on this page with an updated effective date. Your continued use
                                of the Website after such changes constitutes your acceptance of the revised Terms.</p>

                            <hr class="policy-divider">

                            <!-- 2. Use of Website -->
                            <h2 class="policy-section-heading"><i class="fas fa-globe"></i> 2. Permitted Use of Website
                            </h2>
                            <p class="policy-text">You agree to use this Website only for lawful purposes and in a
                                manner that does not infringe the rights of others. You must not:</p>
                            <ul class="policy-list">
                                <li>Use the Website in any way that violates applicable Kenyan or international laws or
                                    regulations.</li>
                                <li>Transmit any unsolicited or unauthorised advertising or promotional material (spam).
                                </li>
                                <li>Attempt to gain unauthorised access to any portion of the Website or its systems.
                                </li>
                                <li>Introduce viruses, trojans, or other harmful or technologically harmful material.
                                </li>
                                <li>Reproduce, duplicate, copy, or re-sell any part of the Website in contravention of
                                    these Terms.</li>
                            </ul>
                            <p class="policy-text">We reserve the right to restrict access to the Website at any time
                                and without notice if, in our sole discretion, we believe you have violated these Terms.
                            </p>

                            <hr class="policy-divider">

                            <!-- 3. Donation Policy -->
                            <h2 class="policy-section-heading"><i class="fas fa-hand-holding-heart"></i> 3. Donation
                                Policy</h2>
                            <p class="policy-text">All donations made through the Barrizi Organisation Kenya Website are
                                entirely voluntary. By making a donation, you acknowledge and agree to the following:
                            </p>
                            <ul class="policy-list">
                                <li>All donations are used exclusively to fund our charitable programmes and operations
                                    in accordance with our mission to empower children, young mothers, and vulnerable
                                    community members in Dandora, Nairobi, Kenya.</li>
                                <li>No goods or services are provided to donors in exchange for a donation. Donations
                                    are not consideration for any commercial transaction.</li>
                                <li>Barrizi Organisation Kenya's registration as a charitable organisation is currently
                                    <strong>in progress</strong>. Donors are encouraged to contact us directly for
                                    up-to-date status information.</li>
                                <li>We reserve the right to use donated funds at our discretion in furtherance of our
                                    charitable mission, which may include programmatic, operational, or administrative
                                    expenses.</li>
                            </ul>

                            <div class="policy-highlight-box">
                                <p><i class="fas fa-info-circle mr-2" style="color:var(--orange);"></i>
                                    <strong>Note:</strong> Barrizi Organisation Kenya is committed to transparent use of
                                    all donations. We publish periodic impact reports on our website to demonstrate how
                                    your generosity makes a real difference in our community.</p>
                            </div>

                            <hr class="policy-divider">

                            <!-- 4. Refund Policy -->
                            <h2 class="policy-section-heading"><i class="fas fa-undo-alt"></i> 4. Refund Policy</h2>
                            <p class="policy-text">As a general principle, all completed donations are
                                <strong>non-refundable</strong>, as they are immediately allocated towards our
                                charitable programmes.</p>
                            <p class="policy-text">However, we understand that errors can occur. If you believe a
                                donation was made in error (for example, a duplicate charge or an incorrect amount), you
                                may request a review within <strong>14 calendar days</strong> of the transaction date by
                                contacting us at:</p>
                            <ul class="policy-list">
                                <li><strong>Email:</strong> <a href="mailto:support@barriziorganization.org"
                                        style="color:var(--orange);font-weight:600;">support@barriziorganization.org</a>
                                </li>
                                <li><strong>Phone / WhatsApp:</strong> <a href="tel:+254712181609"
                                        style="color:var(--orange);font-weight:600;">+254 712 181 609</a></li>
                            </ul>
                            <p class="policy-text">Each refund request will be assessed on a case-by-case basis. Barrizi
                                Organisation Kenya reserves the right to decline refund requests made after 14 days or
                                where the funds have already been deployed to programme activities.</p>

                            <hr class="policy-divider">

                            <!-- 5. Intellectual Property -->
                            <h2 class="policy-section-heading"><i class="fas fa-copyright"></i> 5. Intellectual Property
                            </h2>
                            <p class="policy-text">All content on this Website including but not limited to text,
                                graphics, logos, photographs, audio clips, videos, and data compilations is the property
                                of Barrizi Organisation Kenya or its content suppliers and is protected by applicable
                                copyright, trademark, and other intellectual property laws.</p>
                            <p class="policy-text">You may view, download, and print content from this Website for your
                                own personal, non-commercial use only. You must not reproduce, distribute, modify,
                                create derivative works from, or publicly display any content from this Website without
                                our prior written consent.</p>

                            <hr class="policy-divider">

                            <!-- 6. Third-Party Links -->
                            <h2 class="policy-section-heading"><i class="fas fa-external-link-alt"></i> 6. Third-Party
                                Links</h2>
                            <p class="policy-text">Our Website may contain links to third-party websites (including
                                payment processors, social media platforms, and partner organisations) for your
                                convenience and information. These links do not constitute an endorsement of those
                                websites or their content, and Barrizi Organisation Kenya has no control over and
                                accepts no responsibility for the content, privacy policies, or practices of any
                                third-party websites. We encourage you to review the privacy policies and terms of any
                                external websites you visit.</p>

                            <hr class="policy-divider">

                            <!-- 7. Limitation of Liability -->
                            <h2 class="policy-section-heading"><i class="fas fa-shield-alt"></i> 7. Limitation of
                                Liability</h2>
                            <p class="policy-text">To the maximum extent permitted by law, Barrizi Organisation Kenya,
                                its directors, staff, and volunteers shall not be liable for any direct, indirect,
                                incidental, consequential, or punitive damages arising from:</p>
                            <ul class="policy-list">
                                <li>Your use of, or inability to use, the Website or its content.</li>
                                <li>Any errors, omissions, or inaccuracies in the Website content.</li>
                                <li>Any unauthorised access to or alteration of your data.</li>
                                <li>Any transactions conducted through third-party payment processors.</li>
                            </ul>
                            <p class="policy-text">The Website and all content are provided on an "as is" and "as
                                available" basis without warranties of any kind, either express or implied.</p>

                            <hr class="policy-divider">

                            <!-- 8. Governing Law -->
                            <h2 class="policy-section-heading"><i class="fas fa-balance-scale"></i> 8. Governing Law
                            </h2>
                            <p class="policy-text">These Terms and Conditions are governed by and construed in
                                accordance with the <strong>laws of Kenya</strong>. Any disputes arising from or in
                                connection with these Terms shall be subject to the exclusive jurisdiction of the courts
                                of Kenya.</p>

                            <hr class="policy-divider">

                            <!-- 9. Severability -->
                            <h2 class="policy-section-heading"><i class="fas fa-puzzle-piece"></i> 9. Severability</h2>
                            <p class="policy-text">If any provision of these Terms is found to be invalid, unlawful, or
                                unenforceable under applicable law, that provision shall be severed from the remaining
                                Terms, which shall continue in full force and effect.</p>

                            <!-- Contact Box -->
                            <div class="policy-contact-box">
                                <h4><i class="fas fa-envelope mr-2" style="color:var(--orange);"></i> Questions About
                                    These Terms?</h4>
                                <p>If you have any questions about these Terms and Conditions, please contact us:</p>
                                <p>
                                    <i class="fas fa-envelope mr-2" style="color:var(--orange);"></i>
                                    <a
                                        href="mailto:support@barriziorganization.org">support@barriziorganization.org</a><br>
                                    <i class="fas fa-phone mr-2"
                                        style="color:var(--orange); margin-top:8px; display:inline-block;"></i>
                                    <a href="tel:+254712181609" style="color:var(--orange); font-weight:600;">+254 712
                                        181 609</a><br>
                                    <i class="fas fa-map-marker-alt mr-2"
                                        style="color:var(--orange); margin-top:8px; display:inline-block;"></i>
                                    <span style="color:rgba(255,255,255,0.7);">Dandora Community, Nairobi, Kenya</span>
                                </p>
                            </div>

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

