<!doctype html>
<html lang="en">

<head>
    <?php include 'includes/head.php'; ?>
    <title>Frequently Asked Questions | Barrizi Organisation</title>
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
            background-image: url('assets/img/hero/back14.png');
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

        /* FAQ Category Label */
        .faq-category-label {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: var(--navy);
            color: var(--white);
            font-family: var(--font-heading);
            font-size: 1.3rem;
            text-transform: uppercase;
            border-radius: 8px;
            padding: 12px 24px;
            margin-bottom: 20px;
            margin-top: 50px;
        }

        .faq-category-label i {
            color: var(--orange);
        }

        /* Accordion */
        .faq-accordion {
            margin-bottom: 8px;
        }

        .faq-item {
            background: #fff;
            border-radius: 10px;
            margin-bottom: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.04);
            overflow: hidden;
            border: 1.5px solid transparent;
            transition: border-color 0.25s;
        }

        .faq-item.open {
            border-color: var(--orange);
        }

        .faq-question {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            padding: 20px 24px;
            cursor: pointer;
            user-select: none;
            transition: background 0.2s;
        }

        .faq-question:hover {
            background: rgba(243, 112, 33, 0.04);
        }

        .faq-question .fq-text {
            font-family: var(--font-heading);
            font-size: 1.1rem;
            color: var(--navy);
            flex: 1;
        }

        .faq-item.open .fq-text {
            color: var(--orange);
        }

        .faq-question .fq-icon {
            width: 34px;
            height: 34px;
            border-radius: 50%;
            background: rgba(243, 112, 33, 0.1);
            color: var(--orange);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            font-size: 0.85rem;
            transition: transform 0.3s, background 0.2s;
        }

        .faq-item.open .fq-icon {
            transform: rotate(180deg);
            background: var(--orange);
            color: #fff;
        }

        .faq-answer {
            display: none;
            padding: 0 24px 22px 24px;
            font-size: 0.98rem;
            line-height: 1.8;
            color: var(--text-dark);
            border-top: 1px solid rgba(243, 112, 33, 0.12);
        }

        .faq-item.open .faq-answer {
            display: block;
        }

        .faq-answer a {
            color: var(--orange);
            font-weight: 600;
        }

        .faq-answer a:hover {
            text-decoration: underline;
        }

        /* CTA strip */
        .faq-cta {
            background: var(--navy);
            border-radius: 16px;
            padding: 50px 40px;
            text-align: center;
            margin-top: 60px;
            margin-bottom: 40px;
        }

        .faq-cta h3 {
            font-family: var(--font-heading);
            font-size: 2rem;
            color: var(--white);
            text-transform: uppercase;
            margin-bottom: 10px;
        }

        .faq-cta p {
            color: rgba(255, 255, 255, 0.75);
            margin-bottom: 28px;
        }

        .faq-cta-btns {
            display: flex;
            gap: 14px;
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
                <h1 class="brz-page-header__title brz-observe slide-up">Frequently Asked Questions</h1>
                <div class="brz-page-header__breadcrumb brz-observe slide-up anim-delay-1">
                    <a href='index.php'>Home</a> / FAQ
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

                <div class="brz-observe slide-up" style="max-width: 700px; margin-bottom: 10px;">
                    <h2 class="program-section-title" style="margin-top:0;">Got Questions? We Have Answers.</h2>
                    <p class="program-text">Find answers to the most common questions about Barrizi Organisation, our
                        programmes, donations, volunteering, and safeguarding. Can't find what you're looking for? <a
                            href="contact.php" style="color:var(--orange); font-weight:600;">Contact us</a>.</p>
                </div>

                <!-- ======= CATEGORY 1: About Barrizi ======= -->
                <div class="faq-category-label brz-observe slide-up">
                    <i class="fas fa-info-circle"></i> About Barrizi
                </div>
                <div class="faq-accordion brz-observe slide-up">

                    <div class="faq-item open" id="faq-1">
                        <div class="faq-question" onclick="toggleFaq('faq-1')">
                            <span class="fq-text">What is Barrizi Organisation?</span>
                            <span class="fq-icon"><i class="fas fa-chevron-down"></i></span>
                        </div>
                        <div class="faq-answer">
                            Barrizi Organisation is a Non-Governmental Organisation (NGO) founded in 2020, dedicated to
                            transforming the lives of vulnerable children and young people in Dandora, Nairobi. Our work
                            spans education support, secondary schooling, vocational training, support for young
                            mothers, holiday programmes, and community transformation. Our mission is to break the cycle
                            of poverty through education, opportunity, and community empowerment.
                        </div>
                    </div>

                    <div class="faq-item" id="faq-2">
                        <div class="faq-question" onclick="toggleFaq('faq-2')">
                            <span class="fq-text">Where do you operate?</span>
                            <span class="fq-icon"><i class="fas fa-chevron-down"></i></span>
                        </div>
                        <div class="faq-answer">
                            We currently operate in Dandora, Nairobi one of Kenya's most densely populated informal
                            settlements, home to East Africa's largest open dumpsite. All of our direct programmes are
                            delivered within this community, with plans to expand as our capacity grows.
                        </div>
                    </div>

                    <div class="faq-item" id="faq-3">
                        <div class="faq-question" onclick="toggleFaq('faq-3')">
                            <span class="fq-text">Are you a registered charity?</span>
                            <span class="fq-icon"><i class="fas fa-chevron-down"></i></span>
                        </div>
                        <div class="faq-answer">
                            We are currently operating as a registered Non-Governmental Organisation (NGO). Our formal
                            registration with the Kenya NGO Board is actively in progress. We are committed to full
                            legal compliance and will publish our registration certificate once confirmed. For
                            enquiries, email <a
                                href="mailto:support@barriziorganization.org">support@barriziorganization.org</a>.
                        </div>
                    </div>

                    <div class="faq-item" id="faq-4">
                        <div class="faq-question" onclick="toggleFaq('faq-4')">
                            <span class="fq-text">How long have you been operating?</span>
                            <span class="fq-icon"><i class="fas fa-chevron-down"></i></span>
                        </div>
                        <div class="faq-answer">
                            Barrizi Organisation has been active in the Dandora community since 2020. In that time, we
                            have supported over 200 children in education, 15 young mothers in school reintegration, and
                            trained 6 young adults through our vocational programme.
                        </div>
                    </div>

                </div>

                <!-- ======= CATEGORY 2: Donations ======= -->
                <div class="faq-category-label brz-observe slide-up">
                    <i class="fas fa-donate"></i> Donations
                </div>
                <div class="faq-accordion brz-observe slide-up">

                    <div class="faq-item" id="faq-5">
                        <div class="faq-question" onclick="toggleFaq('faq-5')">
                            <span class="fq-text">How can I donate?</span>
                            <span class="fq-icon"><i class="fas fa-chevron-down"></i></span>
                        </div>
                        <div class="faq-answer">
                            You can make a donation through our <a href="donation.php">Donations page</a>, which offers
                            options for one-time giving and recurring monthly support. You can also choose to sponsor a
                            specific child's education, covering fees, meals, uniform, and books. We accept both local
                            and international payments through our secure platform.
                        </div>
                    </div>

                    <div class="faq-item" id="faq-6">
                        <div class="faq-question" onclick="toggleFaq('faq-6')">
                            <span class="fq-text">How are donations used?</span>
                            <span class="fq-icon"><i class="fas fa-chevron-down"></i></span>
                        </div>
                        <div class="faq-answer">
                            70% of all donations go directly to programme delivery school fees, meals, uniforms, and
                            vocational training. 15% funds our feeding and nutrition initiatives. The remaining 15%
                            covers essential operations including staff, monitoring, and communications. See our full
                            breakdown on our <a href="transparency.php">Transparency page</a>.
                        </div>
                    </div>

                    <div class="faq-item" id="faq-7">
                        <div class="faq-question" onclick="toggleFaq('faq-7')">
                            <span class="fq-text">Can I get a tax receipt for my donation?</span>
                            <span class="fq-icon"><i class="fas fa-chevron-down"></i></span>
                        </div>
                        <div class="faq-answer">
                            Yes. We can provide donation receipts on request. Please email <a
                                href="mailto:support@barriziorganization.org">support@barriziorganization.org</a> with
                            your name, donation amount, and date of donation. Please note that tax deductibility depends
                            on the laws of your country of residence.
                        </div>
                    </div>

                    <div class="faq-item" id="faq-8">
                        <div class="faq-question" onclick="toggleFaq('faq-8')">
                            <span class="fq-text">Can I donate from outside Kenya?</span>
                            <span class="fq-icon"><i class="fas fa-chevron-down"></i></span>
                        </div>
                        <div class="faq-answer">
                            Yes, we welcome and gratefully accept international donations. Our payment platform supports
                            international transactions. If you experience any difficulty donating from your country,
                            please contact us at <a
                                href="mailto:support@barriziorganization.org">support@barriziorganization.org</a> and we
                            will be happy to assist with alternative arrangements.
                        </div>
                    </div>

                    <div class="faq-item" id="faq-9">
                        <div class="faq-question" onclick="toggleFaq('faq-9')">
                            <span class="fq-text">What is your refund policy?</span>
                            <span class="fq-icon"><i class="fas fa-chevron-down"></i></span>
                        </div>
                        <div class="faq-answer">
                            All donations to Barrizi Organisation are generally non-refundable, as funds are deployed
                            promptly to support our beneficiaries. However, if a donation was made in error (e.g.,
                            incorrect amount or duplicate payment), please contact us within 14 days at <a
                                href="mailto:support@barriziorganization.org">support@barriziorganization.org</a> and we
                            will do our best to resolve the issue promptly.
                        </div>
                    </div>

                </div>

                <!-- ======= CATEGORY 3: Volunteering ======= -->
                <div class="faq-category-label brz-observe slide-up">
                    <i class="fas fa-hands-helping"></i> Volunteering
                </div>
                <div class="faq-accordion brz-observe slide-up">

                    <div class="faq-item" id="faq-10">
                        <div class="faq-question" onclick="toggleFaq('faq-10')">
                            <span class="fq-text">How can I volunteer with Barrizi?</span>
                            <span class="fq-icon"><i class="fas fa-chevron-down"></i></span>
                        </div>
                        <div class="faq-answer">
                            We'd love to have you! Visit our <a href="volunteer.php">Volunteer page</a> to learn about
                            current opportunities and fill in an expression of interest form. Our team will follow up
                            with details about available roles and next steps. We welcome volunteers from all
                            backgrounds.
                        </div>
                    </div>

                    <div class="faq-item" id="faq-11">
                        <div class="faq-question" onclick="toggleFaq('faq-11')">
                            <span class="fq-text">Can I volunteer remotely?</span>
                            <span class="fq-icon"><i class="fas fa-chevron-down"></i></span>
                        </div>
                        <div class="faq-answer">
                            Absolutely. We welcome remote volunteers who can contribute their skills in areas such as
                            social media management, fundraising, graphic design, website content, grant writing, and
                            online communications. Remote volunteering is a meaningful and flexible way to support our
                            work from anywhere in the world.
                        </div>
                    </div>

                    <div class="faq-item" id="faq-12">
                        <div class="faq-question" onclick="toggleFaq('faq-12')">
                            <span class="fq-text">Is there a minimum commitment for volunteers?</span>
                            <span class="fq-icon"><i class="fas fa-chevron-down"></i></span>
                        </div>
                        <div class="faq-answer">
                            We ask for a minimum commitment of three months. This allows volunteers to build meaningful
                            relationships with our team and beneficiaries and make a genuine difference. Shorter
                            engagement may be considered for specific project-based or event volunteering roles.
                        </div>
                    </div>

                    <div class="faq-item" id="faq-13">
                        <div class="faq-question" onclick="toggleFaq('faq-13')">
                            <span class="fq-text">Do volunteers need to undergo background checks?</span>
                            <span class="fq-icon"><i class="fas fa-chevron-down"></i></span>
                        </div>
                        <div class="faq-answer">
                            Yes. All volunteers who will be working directly with children or young mothers are required
                            to undergo a vetting process, including a reference check and safeguarding screening. This
                            is a non-negotiable part of our commitment to child safety and follows best practices in
                            child protection. Remote volunteers not working directly with beneficiaries have a
                            simplified onboarding process.
                        </div>
                    </div>

                </div>

                <!-- ======= CATEGORY 4: Safeguarding ======= -->
                <div class="faq-category-label brz-observe slide-up">
                    <i class="fas fa-shield-alt"></i> Safeguarding
                </div>
                <div class="faq-accordion brz-observe slide-up">

                    <div class="faq-item" id="faq-14">
                        <div class="faq-question" onclick="toggleFaq('faq-14')">
                            <span class="fq-text">How do you protect the children in your care?</span>
                            <span class="fq-icon"><i class="fas fa-chevron-down"></i></span>
                        </div>
                        <div class="faq-answer">
                            Child safety is our highest priority. We operate a comprehensive safeguarding framework
                            covering staff vetting, volunteer screening, safe-space policies, and a clear reporting
                            mechanism for concerns. All staff complete safeguarding training and adhere to our Child
                            Protection Policy. For full details, please visit our <a
                                href="safeguarding.php">Safeguarding page</a>.
                        </div>
                    </div>

                    <div class="faq-item" id="faq-15">
                        <div class="faq-question" onclick="toggleFaq('faq-15')">
                            <span class="fq-text">How do I report a safeguarding concern?</span>
                            <span class="fq-icon"><i class="fas fa-chevron-down"></i></span>
                        </div>
                        <div class="faq-answer">
                            If you have any safeguarding concern, please report it immediately. You can email our
                            dedicated safeguarding address at <a
                                href="mailto:safeguarding@barriziorganization.org">safeguarding@barriziorganization.org</a>,
                            or reach us by WhatsApp at <a href="https://wa.me/254712181609">+254 712 181 609</a>. All
                            reports are treated with the utmost seriousness, urgency, and confidentiality.
                        </div>
                    </div>

                    <div class="faq-item" id="faq-16">
                        <div class="faq-question" onclick="toggleFaq('faq-16')">
                            <span class="fq-text">Do you share photos of your beneficiaries?</span>
                            <span class="fq-icon"><i class="fas fa-chevron-down"></i></span>
                        </div>
                        <div class="faq-answer">
                            We only share images or stories featuring identifiable children or young mothers when we
                            have obtained explicit written consent from a parent or legal guardian. We never share
                            personally identifying information (full names, school names, or precise addresses) of any
                            beneficiary in public-facing content. Dignity, privacy, and consent are cornerstones of our
                            communications approach.
                        </div>
                    </div>

                </div>

                <!-- CTA -->
                <div class="faq-cta brz-observe slide-up">
                    <h3>Still Have Questions?</h3>
                    <p>Our team is always happy to help. Reach out and we'll respond within 2 working days.</p>
                    <div class="faq-cta-btns">
                        <a href="contact.php" class="brz-btn brz-btn-orange">Contact Us <i
                                class="fas fa-arrow-right ml-2"></i></a>
                        <a href="mailto:support@barriziorganization.org" class="brz-btn"
                            style="background:rgba(255,255,255,0.1); color:#fff; border:1.5px solid rgba(255,255,255,0.25);">
                            <i class="fas fa-envelope mr-2"></i> support@barriziorganization.org
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

    <script>
        function toggleFaq(id) {
            var item = document.getElementById(id);
            if (!item) return;
            var isOpen = item.classList.contains('open');
            // Optionally close all others
            document.querySelectorAll('.faq-item').forEach(function (el) { el.classList.remove('open'); });
            if (!isOpen) {
                item.classList.add('open');
            }
        }
    </script>
</body>

</html>


