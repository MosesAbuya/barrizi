<!doctype html>
<html lang="en">

<head>
    <?php include 'includes/head.php'; ?>
    <title>Safeguarding &amp; Child Protection Policy | Barrizi Organisation Kenya</title>
    <meta name="description"
        content="Barrizi Organisation Kenya's Safeguarding and Child Protection Policy   our absolute commitment to the safety and dignity of every child and vulnerable adult in our care.">
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
            background-image: url('assets/img/hero/back13.png');
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
            font-size: clamp(2.5rem, 6vw, 4.5rem);
            color: var(--white);
            line-height: 1.1;
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

        /* Report a Concern CTA Box */
        .safeguarding-report-box {
            background: linear-gradient(135deg, var(--orange) 0%, #c8520f 100%);
            border-radius: 16px;
            padding: 35px 40px;
            margin-bottom: 50px;
            color: #fff;
            position: relative;
            overflow: hidden;
        }

        .safeguarding-report-box::before {
            content: '';
            position: absolute;
            top: -40px;
            right: -40px;
            width: 180px;
            height: 180px;
            background: rgba(255, 255, 255, 0.07);
            border-radius: 50%;
        }

        .safeguarding-report-box::after {
            content: '';
            position: absolute;
            bottom: -60px;
            right: 60px;
            width: 220px;
            height: 220px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 50%;
        }

        .safeguarding-report-box h3 {
            font-family: var(--font-heading);
            font-size: 2rem;
            color: #fff;
            margin-bottom: 10px;
            position: relative;
            z-index: 1;
        }

        .safeguarding-report-box p {
            color: rgba(255, 255, 255, 0.9);
            font-size: 1rem;
            margin-bottom: 20px;
            line-height: 1.7;
            position: relative;
            z-index: 1;
            max-width: 650px;
        }

        .safeguarding-report-box .report-contact-row {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            position: relative;
            z-index: 1;
        }

        .safeguarding-report-box .report-contact-item {
            display: flex;
            align-items: center;
            gap: 10px;
            background: rgba(255, 255, 255, 0.18);
            border-radius: 50px;
            padding: 10px 20px;
            font-size: 0.97rem;
            font-weight: 600;
            color: #fff;
            text-decoration: none;
            transition: background 0.3s;
            backdrop-filter: blur(6px);
        }

        .safeguarding-report-box .report-contact-item:hover {
            background: rgba(255, 255, 255, 0.3);
            color: #fff;
            text-decoration: none;
        }

        .safeguarding-report-box .report-contact-item i {
            font-size: 1.1rem;
        }

        /* Zero Tolerance Badge */
        .zero-tolerance-badge {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: var(--navy);
            color: #fff;
            border-radius: 8px;
            padding: 12px 22px;
            font-family: var(--font-heading);
            font-size: 1.1rem;
            letter-spacing: 0.05em;
            margin-bottom: 24px;
        }

        .zero-tolerance-badge i {
            color: var(--orange);
            font-size: 1.3rem;
        }

        /* Commitment statement */
        .commitment-statement {
            background: #FDFBF7;
            border-left: 5px solid var(--navy);
            border-radius: 0 12px 12px 0;
            padding: 24px 28px;
            margin: 20px 0 28px;
        }

        .commitment-statement p {
            font-size: 1.08rem;
            line-height: 1.8;
            color: var(--text-dark);
            margin: 0;
            font-style: italic;
        }

        /* Two-column list */
        .policy-two-col-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 12px 30px;
            list-style: none;
            padding: 0;
            margin: 0 0 20px;
        }

        .policy-two-col-list li {
            position: relative;
            padding-left: 28px;
            font-size: 1rem;
            line-height: 1.65;
            color: var(--text-dark);
        }

        .policy-two-col-list li::before {
            content: '';
            position: absolute;
            left: 0;
            top: 9px;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--orange);
        }

        /* Prohibited list */
        .prohibited-list {
            list-style: none;
            padding: 0;
            margin: 0 0 20px;
        }

        .prohibited-list li {
            position: relative;
            padding-left: 32px;
            margin-bottom: 12px;
            font-size: 1.02rem;
            line-height: 1.7;
            color: var(--text-dark);
        }

        .prohibited-list li i {
            position: absolute;
            left: 0;
            top: 4px;
            color: #E53E3E;
            font-size: 1rem;
        }

        /* Whistleblower box */
        .whistleblower-box {
            background: rgba(11, 25, 44, 0.04);
            border: 1.5px solid rgba(11, 25, 44, 0.12);
            border-radius: 12px;
            padding: 28px 32px;
            margin-bottom: 10px;
        }

        .whistleblower-box h4 {
            font-family: var(--font-heading);
            font-size: 1.4rem;
            color: var(--navy);
            margin-bottom: 10px;
        }

        /* DSL Card */
        .dsl-card {
            display: flex;
            align-items: center;
            gap: 24px;
            background: var(--navy);
            border-radius: 14px;
            padding: 28px 32px;
            margin-top: 40px;
        }

        .dsl-card__icon {
            width: 64px;
            height: 64px;
            background: var(--orange);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .dsl-card__icon i {
            color: #fff;
            font-size: 1.6rem;
        }

        .dsl-card__content h4 {
            font-family: var(--font-heading);
            font-size: 1.5rem;
            color: #fff;
            margin-bottom: 4px;
        }

        .dsl-card__content p {
            color: rgba(255, 255, 255, 0.65);
            font-size: 0.92rem;
            margin: 0;
        }

        .dsl-card__content a {
            color: var(--orange);
            font-weight: 600;
        }

        @media (max-width: 767px) {
            .policy-card {
                padding: 30px 22px;
            }

            .safeguarding-report-box {
                padding: 28px 24px;
            }

            .dsl-card {
                flex-direction: column;
                gap: 16px;
            }
        }
    </style>
</head>

<body>

    <?php include 'includes/preloader.php'; ?>
    <?php include 'includes/navbar.php'; ?>
    <?php include 'includes/sidebar.php'; ?>

    <main>
        <!-- Page Header -->
        <section class="brz-page-header">
            <div class="container brz-page-header__content">
                <h1 class="brz-page-header__title brz-observe slide-up">Safeguarding &amp;<br>Child Protection</h1>
                <div class="brz-page-header__breadcrumb brz-observe slide-up anim-delay-1">
                    <a href='index.php'>Home</a> / Safeguarding Policy
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

        <!-- Safeguarding Content -->
        <section class="policy-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="policy-card">

                            <span class="policy-effective"><i class="fas fa-calendar-alt mr-1"></i> Effective Date: May
                                2025 &nbsp;|&nbsp; Reviewed Annually</span>

                            <div class="zero-tolerance-badge">
                                <i class="fas fa-shield-alt"></i>
                                ZERO TOLERANCE FOR ABUSE OF ANY KIND
                            </div>

                            <!-- Report a Concern Box   Prominent CTA -->
                            <div class="safeguarding-report-box">
                                <h3><i class="fas fa-exclamation-triangle mr-2"></i> Report a Safeguarding Concern</h3>
                                <p>
                                    If you have witnessed, experienced, or suspect any form of abuse, exploitation, or
                                    harm involving a child or vulnerable adult in connection with Barrizi Organisation,
                                    please report it immediately. All reports are treated with strict confidentiality
                                    and will be acted upon without delay.
                                </p>
                                <div class="report-contact-row">
                                    <a href="mailto:safeguarding@barriziorganization.org" class="report-contact-item">
                                        <i class="fas fa-envelope"></i>
                                        safeguarding@barriziorganization.org
                                    </a>
                                    <a href="https://wa.me/254712181609" target="_blank" rel="noopener"
                                        class="report-contact-item">
                                        <i class="fab fa-whatsapp"></i>
                                        WhatsApp: +254 712 181 609
                                    </a>
                                </div>
                                <p
                                    style="margin-top:14px; font-size:0.85rem; color:rgba(255,255,255,0.75); margin-bottom:0;">
                                    Mark your WhatsApp message as <strong>"CONFIDENTIAL SAFEGUARDING"</strong>. All
                                    reporters are protected under our Whistleblower Protection Policy.</p>
                            </div>

                            <!-- Introduction -->
                            <p class="policy-intro">
                                Barrizi Organisation Kenya ("Barrizi") is an NGO committed to transforming lives in the
                                Dandora community, Nairobi, Kenya, through education, vocational training, and family
                                support. We work directly with children, young mothers, and vulnerable adults. The
                                safety, dignity, and well-being of every person in our care is our <strong>highest
                                    priority</strong>. This Safeguarding and Child Protection Policy sets out our firm
                                commitment, standards of behaviour, and operational procedures to ensure a safe
                                environment for all.
                            </p>

                            <!-- 1. Our Commitment -->
                            <h2 class="policy-section-heading"><i class="fas fa-heart"></i> 1. Our Commitment</h2>
                            <div class="commitment-statement">
                                <p>"Barrizi Organisation Kenya is unequivocally committed to the protection of every
                                    child and vulnerable adult who comes into contact with our organisation. We believe
                                    in the inherent dignity and right to safety of every person. Any form of abuse,
                                    exploitation, harm, or neglect whether physical, emotional, sexual, or financial
                                    will not be tolerated under any circumstances."</p>
                            </div>
                            <p class="policy-text">This commitment applies without exception to all activities,
                                programmes, events, partnerships, and communications conducted by or on behalf of
                                Barrizi Organisation Kenya, whether in Kenya or internationally.</p>

                            <hr class="policy-divider">

                            <!-- 2. Scope -->
                            <h2 class="policy-section-heading"><i class="fas fa-users"></i> 2. Scope of This Policy</h2>
                            <p class="policy-text">This policy applies to <strong>all individuals</strong> who are
                                involved with Barrizi Organisation Kenya, including:</p>
                            <ul class="policy-two-col-list">
                                <li>Paid staff and employees</li>
                                <li>Volunteers and interns</li>
                                <li>Board members and trustees</li>
                                <li>Consultants and contractors</li>
                                <li>Partner organisations and their staff</li>
                                <li>Visitors, donors, and journalists</li>
                                <li>Anyone visiting or participating in our programmes</li>
                            </ul>
                            <p class="policy-text">This policy covers all children under the age of 18 and any
                                vulnerable adult (a person who due to age, disability, illness, or circumstance may be
                                at risk of abuse or exploitation).</p>

                            <hr class="policy-divider">

                            <!-- 3. Child Protection Policy -->
                            <h2 class="policy-section-heading"><i class="fas fa-child"></i> 3. Child Protection Policy
                            </h2>
                            <p class="policy-text"><strong>Zero Tolerance:</strong> Barrizi has a zero-tolerance policy
                                towards any form of child abuse physical, emotional, sexual, or neglect. Any allegation
                                or confirmed incident of abuse will be referred immediately to the appropriate statutory
                                authorities in Kenya.</p>
                            <p class="policy-text"><strong>Definitions of abuse we recognise:</strong></p>
                            <ul class="policy-list">
                                <li><strong>Physical abuse</strong> Any act that causes, or is likely to cause, physical
                                    harm to a child, including hitting, shaking, burning, or physical punishment.</li>
                                <li><strong>Emotional/Psychological abuse</strong> Persistent emotional ill-treatment
                                    causing severe adverse effects on a child's emotional development, including
                                    humiliation, threats, or constant criticism.</li>
                                <li><strong>Sexual abuse</strong> Any form of sexual activity with a child, including
                                    non-contact activities such as exposing children to sexual material or grooming.
                                </li>
                                <li><strong>Neglect</strong> The persistent failure to meet a child's basic physical
                                    and/or psychological needs, which is likely to result in serious impairment of their
                                    health or development.</li>
                                <li><strong>Exploitation</strong> Using a child for labour, financial gain, trafficking,
                                    or any activity that harms their development or violates their rights.</li>
                            </ul>
                            <p class="policy-text"><strong>Signs of abuse:</strong> Our staff are trained to recognise
                                potential indicators including unexplained physical injuries, significant changes in
                                behaviour, withdrawal, fearfulness, inappropriate sexual knowledge, poor hygiene or
                                signs of malnourishment beyond what is expected in the child's circumstances.</p>

                            <hr class="policy-divider">

                            <!-- 4. Code of Conduct -->
                            <h2 class="policy-section-heading"><i class="fas fa-clipboard-check"></i> 4. Code of Conduct
                                for Staff &amp; Volunteers</h2>
                            <p class="policy-text">All Barrizi staff and volunteers are required to sign and adhere to
                                our Code of Conduct. The following standards of behaviour are expected at all times:</p>
                            <ul class="policy-list">
                                <li>Treat all children and beneficiaries with respect, dignity, and kindness.</li>
                                <li>Ensure that interactions with children occur in visible, open environments never in
                                    private or isolated settings.</li>
                                <li>Report any concerns about a child's welfare immediately to the Designated
                                    Safeguarding Lead.</li>
                                <li>Maintain professional boundaries at all times do not form inappropriate personal
                                    relationships with beneficiaries.</li>
                                <li>Respect confidentiality while understanding that child protection concerns override
                                    general confidentiality duties.</li>
                            </ul>
                            <p class="policy-text"><strong>The following behaviours are strictly prohibited:</strong>
                            </p>
                            <ul class="prohibited-list">
                                <li><i class="fas fa-times-circle"></i> Physical punishment or rough handling of any
                                    child or beneficiary.</li>
                                <li><i class="fas fa-times-circle"></i> Spending time alone with a child away from
                                    others.</li>
                                <li><i class="fas fa-times-circle"></i> Photographing or filming children without
                                    explicit guardian consent.</li>
                                <li><i class="fas fa-times-circle"></i> Sharing identifying information about child
                                    beneficiaries on social media or with third parties.</li>
                                <li><i class="fas fa-times-circle"></i> Giving personal gifts, money, or favours to
                                    individual children or their families outside of official programme activities.</li>
                                <li><i class="fas fa-times-circle"></i> Using language that is demeaning,
                                    discriminatory, or inappropriate around children.</li>
                                <li><i class="fas fa-times-circle"></i> Engaging in any sexual conduct or discussion
                                    with or in the presence of children.</li>
                            </ul>

                            <hr class="policy-divider">

                            <!-- 5. Reporting Mechanisms -->
                            <h2 class="policy-section-heading"><i class="fas fa-flag"></i> 5. Reporting Mechanisms</h2>
                            <p class="policy-text">We have clear, accessible, and confidential channels for reporting
                                any safeguarding concern. <strong>Anyone</strong> whether a staff member, beneficiary,
                                community member, parent, donor, or visitor can and should report a concern without fear
                                of reprisal.</p>
                            <p class="policy-text"><strong>How to report:</strong></p>
                            <ul class="policy-list">
                                <li><strong>Email:</strong> <a href="mailto:safeguarding@barriziorganization.org"
                                        style="color:var(--orange);font-weight:600;">safeguarding@barriziorganization.org</a>
                                    monitored by the Designated Safeguarding Lead.</li>
                                <li><strong>WhatsApp:</strong> <a href="https://wa.me/254712181609" target="_blank"
                                        rel="noopener" style="color:var(--orange);font-weight:600;">+254 712 181 609</a>
                                    mark as "CONFIDENTIAL SAFEGUARDING".</li>
                                <li><strong>In person:</strong> Speak directly with the Executive Director or any senior
                                    staff member.</li>
                                <li><strong>External authorities:</strong> You may also report directly to Kenyan child
                                    protection authorities, including the Department of Children's Services (DCS) or the
                                    National Police Service.</li>
                            </ul>
                            <p class="policy-text">All reports will be acknowledged within 24 hours and acted upon in
                                accordance with our internal procedures and, where appropriate, referred to statutory
                                authorities. Barrizi will maintain a confidential record of all safeguarding reports and
                                their outcomes.</p>

                            <hr class="policy-divider">

                            <!-- 6. Safer Recruitment -->
                            <h2 class="policy-section-heading"><i class="fas fa-user-check"></i> 6. Safer Recruitment
                            </h2>
                            <p class="policy-text">Barrizi is committed to safe recruitment practices to ensure that no
                                person who is a risk to children is appointed to any role within the organisation. Our
                                safer recruitment process includes:</p>
                            <ul class="policy-list">
                                <li>All candidates must declare any criminal convictions or cautions as part of the
                                    application process.</li>
                                <li>At least two professional references are obtained and verified for every
                                    appointment.</li>
                                <li>A structured interview that includes questions specifically designed to assess the
                                    candidate's values and attitude towards child protection.</li>
                                <li>Criminal background checks are conducted for all roles involving direct contact with
                                    children, to the extent permitted under Kenyan law.</li>
                                <li>A probationary period applies to all new hires, during which safeguarding
                                    performance is actively monitored.</li>
                            </ul>

                            <hr class="policy-divider">

                            <!-- 7. Data Protection of Beneficiaries -->
                            <h2 class="policy-section-heading"><i class="fas fa-lock"></i> 7. Data Protection of
                                Beneficiaries</h2>
                            <p class="policy-text">The privacy and dignity of our beneficiaries especially children is
                                paramount. Barrizi is committed to the following standards:</p>
                            <ul class="policy-list">
                                <li>All personal data relating to child beneficiaries (names, photographs, personal
                                    circumstances) is stored securely and accessed only by authorised staff on a
                                    need-to-know basis.</li>
                                <li>Photographs or videos of children are only taken and used with the written, informed
                                    consent of their parents or legal guardians.</li>
                                <li>Images of children used in fundraising or communications materials must not be
                                    exploitative, demeaning, or pose any risk to the child's identity or safety.</li>
                                <li>Beneficiary data is never sold, shared publicly, or transferred to third parties
                                    without explicit consent, except where required by law or safeguarding obligations.
                                </li>
                            </ul>

                            <hr class="policy-divider">

                            <!-- 8. Whistleblower Protection -->
                            <h2 class="policy-section-heading"><i class="fas fa-user-secret"></i> 8. Whistleblower
                                Protection</h2>
                            <div class="whistleblower-box">
                                <h4><i class="fas fa-shield-alt mr-2" style="color:var(--orange);"></i> Full Protection
                                    Guaranteed</h4>
                                <p class="policy-text" style="margin-bottom:0;">Any individual who reports a
                                    safeguarding concern or suspected misconduct in good faith is <strong>fully
                                        protected from retaliation</strong> by Barrizi Organisation Kenya. This includes
                                    protection against dismissal, demotion, harassment, exclusion from programmes, or
                                    any other form of adverse treatment. Victimisation of a whistleblower is itself a
                                    serious disciplinary matter that will result in immediate action, up to and
                                    including dismissal.</p>
                            </div>
                            <p class="policy-text">Reports made anonymously will also be taken seriously and
                                investigated to the extent possible. Confidentiality of the reporter's identity will be
                                maintained unless disclosure is required by law.</p>

                            <hr class="policy-divider">

                            <!-- 9. Training -->
                            <h2 class="policy-section-heading"><i class="fas fa-graduation-cap"></i> 9. Training &amp;
                                Capacity Building</h2>
                            <p class="policy-text">Barrizi Organisation Kenya is committed to ensuring that all staff
                                and volunteers are equipped with the knowledge and skills to fulfil their safeguarding
                                responsibilities. To this end:</p>
                            <ul class="policy-list">
                                <li>All staff and volunteers undergo <strong>mandatory safeguarding induction
                                        training</strong> before commencing any work involving contact with children or
                                    vulnerable adults.</li>
                                <li>All staff receive <strong>annual safeguarding refresher training</strong> to stay
                                    current with best practices and legal obligations.</li>
                                <li>The Designated Safeguarding Lead receives specialist training appropriate to their
                                    role.</li>
                                <li>Safeguarding is a standing agenda item at all staff meetings and quarterly board
                                    meetings.</li>
                            </ul>

                            <hr class="policy-divider">

                            <!-- 10. Policy Review -->
                            <h2 class="policy-section-heading"><i class="fas fa-sync-alt"></i> 10. Policy Review</h2>
                            <p class="policy-text">This Safeguarding and Child Protection Policy is reviewed
                                <strong>annually</strong> by the Executive Director and the Board of Directors, or more
                                frequently if triggered by a significant safeguarding incident, a change in legislation,
                                or a change in Barrizi's operational context. All staff and volunteers will be informed
                                of any updates to this policy.</p>

                            <hr class="policy-divider">

                            <!-- 11. Designated Safeguarding Lead / Contact -->
                            <h2 class="policy-section-heading"><i class="fas fa-id-badge"></i> 11. Designated
                                Safeguarding Lead &amp; Contact</h2>
                            <p class="policy-text">The Designated Safeguarding Lead (DSL) at Barrizi Organisation Kenya
                                is responsible for receiving and acting on all safeguarding concerns, ensuring this
                                policy is implemented, and liaising with external statutory bodies as required.</p>

                            <div class="dsl-card">
                                <div class="dsl-card__icon">
                                    <i class="fas fa-user-shield"></i>
                                </div>
                                <div class="dsl-card__content">
                                    <h4>Everlyn Agalla</h4>
                                    <p><strong style="color:rgba(255,255,255,0.85);">Executive Director &amp; Designated
                                            Safeguarding Lead</strong></p>
                                    <p>Barrizi Organisation Kenya, Dandora Community, Nairobi, Kenya</p>
                                    <p>
                                        <a
                                            href="mailto:support@barriziorganization.org">support@barriziorganization.org</a>
                                        &nbsp;|&nbsp;
                                        <a
                                            href="mailto:safeguarding@barriziorganization.org">safeguarding@barriziorganization.org</a>
                                    </p>
                                    <p><a href="tel:+254712181609" style="color:var(--orange);">+254 712 181 609</a></p>
                                </div>
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

