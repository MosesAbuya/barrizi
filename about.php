<!doctype html>
<html lang="en">

<head>
    <?php include 'includes/head.php'; ?>
    <title>About Us | Barrizi Organisation Kenya</title>
    <style>
        body {
            padding-top: 0;
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

        /* Dandora Story specific styles */
        .story-img-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin: 30px 0;
        }

        .story-img-grid img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-bottom: 4px solid var(--orange);
            border-radius: 4px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
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
                <h1 class="brz-page-header__title brz-observe slide-up">ABOUT <span
                        style="color:var(--orange);">US</span></h1>
                <div class="brz-page-header__breadcrumb brz-observe slide-up anim-delay-1">
                    <a href="index.php">Home</a> / About Us
                </div>
            </div>
        </section>

        <!-- Brush Stroke Divider: Navy to Off-White -->
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

        <!-- About Section -->
        <section class="brz-about" style="background:var(--off-white); padding:90px 0;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-5 mb-lg-0 brz-observe slide-left">
                        <span class="brz-section-label label-orange">About Barrizi Organization</span>
                        <h2 class="section-title-purple">EMPOWERING GIRLS AND YOUNG MOTHERS IN NAIROBI SLUMS</h2>
                        <div class="divider-orange"></div>
                        <p style="font-weight:600; color:var(--purple); font-size:1.05rem;">
                            At <b>Barrizi Organization Kenya</b>, we are dedicated to advocating for the rights and
                            empowerment of the girl child, young mothers and their children    including the
                            eradication of child labour in the slums of Nairobi, Kenya.
                        </p>
                        <p>
                            Through our targeted approach, we provide access to education, vocational training, and life
                            skills development to help girls, young mothers, and their children overcome societal
                            challenges. We recognise the struggles they face, including gender inequality, early
                            pregnancies, child labour, and limited educational opportunities. Our mission is to equip
                            them with the knowledge, confidence, and resources needed to build a brighter future and
                            break the cycle of poverty.
                        </p>
                        <p>
                            We believe that education is the key to lasting change. By ensuring that every girl and
                            every child has the opportunity to learn free from the burden of labour we are shaping
                            a future where they can thrive and contribute to their communities. At Barrizi, we are
                            committed to creating a world where every girl has a voice, every young mother has support,
                            and every child has the chance to succeed.
                        </p>
                        <p
                            style="font-size:0.9rem; color:var(--text-muted); border-left:3px solid var(--orange); padding-left:12px; margin-top:10px;">
                            <strong>Legal Status:</strong> Duly registered as a
                            Non-Governmental Organisation as at 15th August 2024.
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <div class="brz-about-img-stack position-relative" style="padding:30px;">
                            <div
                                style="position:absolute; top:0; right:0; width:55%; height:65%; background:var(--orange); z-index:0; transform:translate(15px,-15px);">
                            </div>
                            <div class="brz-polaroid brz-polaroid-main"
                                style="position:relative; z-index:2; transform:rotate(-2deg); background:#fff; padding:12px 12px 50px; display:block;">
                                <img src="assets/img/gallery/about3.png" alt="Empowering Girls"
                                    style="width:100%; height:320px; object-fit:cover; display:block;">
                                <div class="brz-polaroid-caption">Education & Mentorship</div>
                            </div>
                            <div class="brz-polaroid d-none d-lg-block"
                                style="position:absolute; right:-20px; bottom:-30px; z-index:3; transform:rotate(5deg); background:#fff; padding:10px 10px 40px; width:55%;">
                                <img src="assets/img/gallery/about4.png" alt="Vocational Training"
                                    style="width:100%; height:200px; object-fit:cover; display:block;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- Dandora Story Section -->
        <section style="background:var(--off-white); padding:90px 0; color:var(--text-dark);">
            <div class="container">
                <!-- Header -->
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-8 text-center brz-observe slide-up">
                        <span class="brz-section-label label-yellow" style="color:var(--navy);">A Visit To Dandora
                            Dumpsite</span>
                        <h2 class="section-title-purple"
                            style="color:var(--purple); font-size:clamp(2.5rem, 6vw, 4rem);">A CALL TO ACTION</h2>
                        <div class="divider-orange mx-auto"></div>
                        <p
                            style="font-family:var(--font-heading); font-size:1.2rem; color:var(--orange); letter-spacing:0.05em; text-transform:uppercase;">
                            By Evelyn Agalla Executive Director</p>
                    </div>
                </div>

                <!-- Row 1: The Reality -->
                <div class="row align-items-center mb-5 pb-4">
                    <div class="col-lg-6 mb-4 mb-lg-0 brz-observe slide-right">
                        <h3
                            style="color:var(--navy); font-family:var(--font-heading); font-size:2rem; text-transform:uppercase; margin-bottom:20px;">
                            The Shocking Reality</h3>
                        <p style="font-size:1.1rem; line-height:1.8;">During my visit to the Dandora Dumpsite in
                            Nairobi, I was deeply shocked by the reality I witnessed. The dumpsite, one of the most
                            neglected areas in Kenya, is home to thousands of people who make a living by sorting
                            through trash. However, what struck me most were the young children I saw children as young
                            as five or six following their mothers through the piles of garbage. Instead of attending
                            school, these children were working alongside their mothers, scavenging for recyclables just
                            to survive.</p>
                    </div>
                    <div class="col-lg-6 brz-observe slide-left">
                        <div class="brz-about-img-stack position-relative" style="padding:30px;">
                            <div
                                style="position:absolute; top:0; right:0; width:55%; height:65%; background:var(--orange); z-index:0; transform:translate(15px,-15px);">
                            </div>
                            <div class="brz-polaroid brz-polaroid-main"
                                style="position:relative; z-index:2; transform:rotate(-2deg); display:block;">
                                <img src="assets/img/b18.jpg" alt="Dandora Dumpsite"
                                    style="width:100%; height:320px; object-fit:cover; object-position:center; display:block;">
                                <div class="brz-polaroid-caption"
                                    style="text-align:center; padding-top:10px; font-style:italic; color:#888;">The
                                    harsh reality of the dumpsite</div>
                            </div>
                            <div class="brz-polaroid"
                                style="position:absolute; left:-10px; bottom:-20px; z-index:3; transform:rotate(4deg); width:48%; display:block;">
                                <img src="assets/img/b20.jpg" alt="Children in Dandora"
                                    style="width:100%; height:200px; object-fit:cover; display:block;">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Row 2: Teen Mothers -->
                <div class="row align-items-center mb-5 pb-4 flex-row-reverse">
                    <div class="col-lg-6 mb-4 mb-lg-0 brz-observe slide-left">
                        <h3
                            style="color:var(--navy); font-family:var(--font-heading); font-size:2rem; text-transform:uppercase; margin-bottom:20px;">
                            Lost Childhoods</h3>
                        <p style="font-size:1.1rem; line-height:1.8;">As I walked deeper into the site, I also met teen
                            mothers. Some were barely teenagers, yet they had already taken on the responsibility of
                            raising their own children while working in the dumpsite. These young girls, without any
                            support or resources, were forced to make ends meet in the most difficult and dangerous
                            conditions. There was no access to proper healthcare, no chance for education, and their
                            rights as young girls and mothers were being denied.</p>
                        <p style="font-size:1.1rem; line-height:1.8;">Seeing this overwhelming struggle in front of me,
                            I couldn’t walk away. It was clear to me that something had to be done. I could not just
                            stand by and let these children and mothers continue to suffer. That day, I made a firm
                            decision that Barrizi Organization Kenya would take immediate action.</p>
                    </div>
                    <div class="col-lg-6 brz-observe slide-right">
                        <div class="brz-about-img-stack position-relative" style="padding:30px;">
                            <div
                                style="position:absolute; bottom:0; left:0; width:55%; height:65%; background:var(--purple); z-index:0; transform:translate(-15px,15px);">
                            </div>
                            <div class="brz-polaroid brz-polaroid-main"
                                style="position:relative; z-index:2; transform:rotate(2deg); display:block;">
                                <img src="assets/img/b6.jpg" alt="Teen Mothers"
                                    style="width:100%; height:320px; object-fit:cover; object-position:center; display:block;">
                                <div class="brz-polaroid-caption"
                                    style="text-align:center; padding-top:10px; font-style:italic; color:#888;">Teen
                                    mothers struggling to survive</div>
                            </div>
                            <div class="brz-polaroid"
                                style="position:absolute; right:-10px; top:-20px; z-index:3; transform:rotate(-4deg); width:48%; display:block;">
                                <img src="assets/img/b7.jpg" alt="Hardships in the dumpsite"
                                    style="width:100%; height:200px; object-fit:cover; display:block;">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Row 3: Progress & Education -->
                <div class="row align-items-center mb-5 pb-4">
                    <div class="col-lg-6 mb-4 mb-lg-0 brz-observe slide-right">
                        <h3
                            style="color:var(--navy); font-family:var(--font-heading); font-size:2rem; text-transform:uppercase; margin-bottom:20px;">
                            Taking Action</h3>
                        <p style="font-size:1.1rem; line-height:1.8;">We’ve already made significant progress. So far,
                            we’ve rescued over 60 teen mothers from the dumpsite and given them the opportunity to leave
                            that dangerous environment. Through our vocational training programs, these young mothers
                            are learning new skills like sewing, hairdressing, and business management skills that will
                            help them earn a stable income and support their families without returning to the dumpsite.
                        </p>
                        <p style="font-size:1.1rem; line-height:1.8;">We’ve also focused on the children, enrolling them
                            in schools so they can receive the education they deserve and break the cycle of poverty.
                            These children, who once had no opportunity for a better future, are now attending school
                            with hope in their hearts. We’ve provided them with uniforms, books, and the support they
                            need to succeed.</p>
                    </div>
                    <div class="col-lg-6 brz-observe slide-left">
                        <div class="brz-about-img-stack position-relative" style="padding:30px;">
                            <div
                                style="position:absolute; top:0; right:0; width:55%; height:65%; background:var(--yellow); z-index:0; transform:translate(15px,-15px);">
                            </div>
                            <div class="brz-polaroid brz-polaroid-main"
                                style="position:relative; z-index:2; transform:rotate(-1.5deg); display:block;">
                                <img src="assets/img/b8.jpg" alt="Vocational Training"
                                    style="width:100%; height:320px; object-fit:cover; object-position:center; display:block;">
                                <div class="brz-polaroid-caption"
                                    style="text-align:center; padding-top:10px; font-style:italic; color:#888;">
                                    Vocational training programs</div>
                            </div>
                            <div class="brz-polaroid"
                                style="position:absolute; left:-10px; bottom:-20px; z-index:3; transform:rotate(3deg); width:48%; display:block;">
                                <img src="assets/img/b10.jpg" alt="Education support"
                                    style="width:100%; height:200px; object-fit:cover; display:block;">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Row 4: Healthcare & Conclusion -->
                <div class="row align-items-center mb-5 pb-4 flex-row-reverse">
                    <div class="col-lg-6 mb-4 mb-lg-0 brz-observe slide-left">
                        <h3
                            style="color:var(--navy); font-family:var(--font-heading); font-size:2rem; text-transform:uppercase; margin-bottom:20px;">
                            Restoring Dignity</h3>
                        <p style="font-size:1.1rem; line-height:1.8;">In addition to education, we’ve set up healthcare
                            services for the families. Many of the people living and working in the dumpsite had no
                            access to even basic medical care. Now, through our outreach programs, we’ve been able to
                            provide maternal care, vaccinations, and treatment for common illnesses.</p>
                        <p style="font-size:1.1rem; line-height:1.8;">When I think about what we’ve accomplished so far,
                            I’m filled with hope, but I know our work is far from finished. We will continue to fight
                            for these children and young mothers, ensuring they have the tools they need to escape
                            poverty and create a better future.</p>
                    </div>
                    <div class="col-lg-6 brz-observe slide-right">
                        <div class="brz-about-img-stack position-relative" style="padding:30px;">
                            <div
                                style="position:absolute; bottom:0; left:0; width:55%; height:65%; background:var(--orange); z-index:0; transform:translate(-15px,15px);">
                            </div>
                            <div class="brz-polaroid brz-polaroid-main"
                                style="position:relative; z-index:2; transform:rotate(2deg); display:block;">
                                <img src="assets/img/b11.jpg" alt="Healthcare outreach"
                                    style="width:100%; height:320px; object-fit:cover; object-position:center; display:block;">
                                <div class="brz-polaroid-caption"
                                    style="text-align:center; padding-top:10px; font-style:italic; color:#888;">
                                    Healthcare outreach programs</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quote Block -->
                <div class="row justify-content-center">
                    <div class="col-lg-10 brz-observe slide-up">
                        <div class="brz-quote-section mt-4"
                            style="background:var(--white); border-left:6px solid var(--purple); padding:40px; box-shadow:0 15px 40px rgba(0,0,0,0.05);">
                            <p class="brz-quote-text"
                                style="font-size:1.4rem; color:var(--purple); font-weight:600; font-style:italic; line-height:1.6; margin:0;">
                                "I want to thank everyone who has supported Barrizi Organization Kenya our donors,
                                volunteers, and partners. Your help has made it possible for us to rescue these children
                                and teen mothers and offer them the chance to build a life filled with opportunity and
                                hope. Together, we can make a real, lasting difference."
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Brush Stroke Divider: Off-White to White -->
        <div class="brz-svg-divider flip-y" style="background:var(--off-white);">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60" preserveAspectRatio="none"
                style="display:block;width:100%;height:60px;">
                <path fill="#FFFFFF" d="
                M0,20 C100,40 200,5 300,25 C400,45 500,10 600,30
                C700,50 800,15 900,35 C1000,55 1100,20 1200,40
                C1300,60 1380,25 1440,40
                L1440,0 L0,0 Z
            " />
            </svg>
        </div>

        <!-- Mission & Vision -->
        <section id="mission" style="background:var(--white); padding:90px 0;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-5 mb-lg-0 brz-observe slide-left">
                        <span class="brz-section-label label-purple">Our Mission & Vision</span>
                        <h2 class="section-title-purple">GUIDING OUR PURPOSE AND FUTURE</h2>
                        <div class="divider-orange"></div>

                        <div
                            style="background:var(--off-white); border-left:4px solid var(--orange); padding:25px; margin-bottom:25px; border-radius:4px; box-shadow:0 5px 15px rgba(0,0,0,0.05);">
                            <h3
                                style="font-family:var(--font-heading); color:var(--orange); font-size:1.8rem; margin-bottom:10px;">
                                MISSION</h3>
                            <p style="margin:0; font-weight:500;">To empower children, teens, and young mothers in the
                                Dandora Dumpsite by providing access to basic education, vocational training, and
                                essential resources, fostering long-term independence and self-sufficiency.</p>
                        </div>

                        <div
                            style="background:var(--off-white); border-left:4px solid var(--purple); padding:25px; border-radius:4px; box-shadow:0 5px 15px rgba(0,0,0,0.05);">
                            <h3
                                style="font-family:var(--font-heading); color:var(--purple); font-size:1.8rem; margin-bottom:10px;">
                                VISION</h3>
                            <p style="margin:0; font-weight:500;">To eradicate poverty and child labor by ensuring the
                                right to education for every child, regardless of socio-economic background, gender, or
                                geographic location. We aspire to build a community where every individual has the
                                opportunity to thrive.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center brz-observe slide-right">
                        <div style="display:inline-block; position:relative;">
                            <div
                                style="position:absolute; top:-20px; right:-20px; width:100px; height:100px; background:var(--yellow); border-radius:50%; z-index:0;">
                            </div>
                            <div
                                style="position:absolute; bottom:-30px; left:-30px; width:150px; height:150px; background:var(--orange); border-radius:50%; z-index:0; opacity:0.2;">
                            </div>
                            <img src="assets/img/b4.jpg" alt="Mission Vision"
                                    style="position:relative; z-index:1; border-radius:8px; box-shadow:0 15px 40px rgba(74,21,75,0.2); max-width:100%;">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why the slums -->
        <section style="background:var(--navy); padding:90px 0; color:var(--white);">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-5 mb-lg-0 order-lg-2 brz-observe slide-right">
                        <span class="brz-section-label label-orange">The Context</span>
                        <h2 class="section-title-purple" style="color:var(--white);">WHY THE SLUMS IN KENYA?</h2>
                        <div class="divider-orange"></div>
                        <p style="font-size:1.05rem; line-height:1.7; color:rgba(255,255,255,0.85);">
                            Barrizi Organisation is committed to transforming the lives of Kenya's slum dwellers by
                            addressing key challenges in education, healthcare, and social empowerment. With millions
                            living in overcrowded informal settlements, many children face barriers to education, high
                            mortality rates, and social vulnerabilities.
                        </p>
                        <p style="font-size:1.05rem; line-height:1.7; color:rgba(255,255,255,0.85);">
                            Barrizi works to bridge these gaps through quality education initiatives, improved
                            healthcare services, nutrition programs, and life skills training, empowering communities to
                            break the cycle of poverty and build a brighter future.
                        </p>
                        <a href="slums.php" class="brz-btn brz-btn-orange mt-3">LEARN MORE</a>
                    </div>
                    <div class="col-lg-6 order-lg-1 brz-observe slide-left">
                        <div style="display:grid; grid-template-columns: 1fr 1fr; gap:15px;">
                            <img src="assets/new/project/15.png" alt="Slums"
                                style="width:100%; height:250px; object-fit:cover; border-radius:4px; border-bottom:4px solid var(--orange);">
                            <img src="assets/new/project/16.png" alt="Slums 2"
                                style="width:100%; height:250px; object-fit:cover; border-radius:4px; border-bottom:4px solid var(--yellow); margin-top:30px;">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Board of Directors -->
        <section id="team" style="background:var(--navy); padding:90px 0;">
            <div class="container">
                <div class="text-center mb-5 brz-observe slide-up">
                    <span class="brz-section-label label-orange">Governance &amp; Leadership</span>
                    <h2
                        style="font-family:var(--font-heading); font-size:clamp(2.5rem,6vw,4.5rem); color:var(--white); text-transform:uppercase; margin-top:10px; line-height:1;">
                        BOARD OF <span style="color:var(--orange);">DIRECTORS</span></h2>
                    <div class="divider-orange mx-auto"></div>
                    <p
                        style="color:rgba(255,255,255,0.65); margin-top:16px; max-width:600px; margin-left:auto; margin-right:auto;">
                        Our board provides strategic oversight and governance, ensuring Barrizi remains accountable to
                        our mission, our beneficiaries, and our supporters.</p>
                </div>

                <div class="row justify-content-center">
                    <!-- Evelyn - Chairperson -->
                    <div class="col-lg-4 col-md-6 mb-4 brz-observe slide-up anim-delay-1">
                        <div style="background:rgba(255,255,255,0.05); border-radius:12px; overflow:hidden; border:1px solid rgba(255,255,255,0.1); transition:transform 0.3s, box-shadow 0.3s;"
                            onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.3)'"
                            onmouseout="this.style.transform=''; this.style.boxShadow=''">
                            <img src="assets/gallery/m1.jpg" alt="Evelyn Agalla"
                                style="width:100%; height:280px; object-fit:cover; border-bottom:3px solid var(--orange);">
                            <div style="padding:24px; text-align:center;">
                                <div
                                    style="display:inline-block; background:var(--orange); color:#fff; font-size:0.7rem; font-weight:700; letter-spacing:0.1em; padding:4px 10px; border-radius:20px; text-transform:uppercase; margin-bottom:10px;">
                                    Chairperson</div>
                                <h4
                                    style="font-family:var(--font-heading); color:var(--white); font-size:1.4rem; text-transform:uppercase; margin-bottom:4px;">
                                    Evelyn Agalla</h4>
                                <p
                                    style="color:var(--orange); font-size:0.85rem; font-weight:600; letter-spacing:0.1em; text-transform:uppercase; margin-bottom:12px;">
                                    Executive Director</p>
                                <p style="color:rgba(255,255,255,0.6); font-size:0.9rem; line-height:1.6;">Founding
                                    visionary of Barrizi, leading the organisation's strategic direction and championing
                                    the rights of vulnerable children and young mothers in Dandora.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Lorna - Secretary -->
                    <div class="col-lg-4 col-md-6 mb-4 brz-observe slide-up anim-delay-2">
                        <div style="background:rgba(255,255,255,0.05); border-radius:12px; overflow:hidden; border:1px solid rgba(255,255,255,0.1); transition:transform 0.3s, box-shadow 0.3s;"
                            onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.3)'"
                            onmouseout="this.style.transform=''; this.style.boxShadow=''">
                            <img src="assets/gallery/m2.jpg" alt="Lorna Atieno"
                                style="width:100%; height:280px; object-fit:cover; border-bottom:3px solid var(--yellow);">
                            <div style="padding:24px; text-align:center;">
                                <div
                                    style="display:inline-block; background:var(--yellow); color:var(--navy); font-size:0.7rem; font-weight:700; letter-spacing:0.1em; padding:4px 10px; border-radius:20px; text-transform:uppercase; margin-bottom:10px;">
                                    Secretary</div>
                                <h4
                                    style="font-family:var(--font-heading); color:var(--white); font-size:1.4rem; text-transform:uppercase; margin-bottom:4px;">
                                    Lorna Atieno</h4>
                                <p
                                    style="color:var(--yellow); font-size:0.85rem; font-weight:600; letter-spacing:0.1em; text-transform:uppercase; margin-bottom:12px;">
                                    Secretary to the Board</p>
                                <p style="color:rgba(255,255,255,0.6); font-size:0.9rem; line-height:1.6;">Ensuring
                                    effective board governance, record-keeping, and coordinating across all departments
                                    to support Barrizi's growing impact.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Maureen - Treasurer -->
                    <div class="col-lg-4 col-md-6 mb-4 brz-observe slide-up anim-delay-3">
                        <div style="background:rgba(255,255,255,0.05); border-radius:12px; overflow:hidden; border:1px solid rgba(255,255,255,0.1); transition:transform 0.3s, box-shadow 0.3s;"
                            onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.3)'"
                            onmouseout="this.style.transform=''; this.style.boxShadow=''">
                            <img src="assets/gallery/m4.jpg" alt="Maureen Rian"
                                style="width:100%; height:280px; object-fit:cover; border-bottom:3px solid var(--purple);">
                            <div style="padding:24px; text-align:center;">
                                <div
                                    style="display:inline-block; background:var(--purple); color:#fff; font-size:0.7rem; font-weight:700; letter-spacing:0.1em; padding:4px 10px; border-radius:20px; text-transform:uppercase; margin-bottom:10px;">
                                    Treasurer</div>
                                <h4
                                    style="font-family:var(--font-heading); color:var(--white); font-size:1.4rem; text-transform:uppercase; margin-bottom:4px;">
                                    Maureen Rian</h4>
                                <p
                                    style="color:rgba(180,130,255,1); font-size:0.85rem; font-weight:600; letter-spacing:0.1em; text-transform:uppercase; margin-bottom:12px;">
                                    Board Treasurer</p>
                                <p style="color:rgba(255,255,255,0.6); font-size:0.9rem; line-height:1.6;">Overseeing
                                    financial stewardship and ensuring responsible, transparent management of donor
                                    funds to maximise community impact.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Benson - Board Member -->
                    <div class="col-lg-6 col-md-6 mb-4 brz-observe slide-up anim-delay-4">
                        <div style="background:rgba(255,255,255,0.05); border-radius:12px; overflow:hidden; border:1px solid rgba(255,255,255,0.1); transition:transform 0.3s, box-shadow 0.3s;"
                            onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.3)'"
                            onmouseout="this.style.transform=''; this.style.boxShadow=''">
                            <img src="assets/gallery/m3.jpg" alt="Benson Njoroge"
                                style="width:100%; height:280px; object-fit:cover; object-position:top; border-bottom:3px solid var(--orange);">
                            <div style="padding:24px; text-align:center;">
                                <div
                                    style="display:inline-block; background:rgba(255,255,255,0.12); color:#fff; font-size:0.7rem; font-weight:700; letter-spacing:0.1em; padding:4px 10px; border-radius:20px; text-transform:uppercase; margin-bottom:10px;">
                                    Board Member</div>
                                <h4
                                    style="font-family:var(--font-heading); color:var(--white); font-size:1.4rem; text-transform:uppercase; margin-bottom:4px;">
                                    Benson Njoroge</h4>
                                <p
                                    style="color:var(--orange); font-size:0.85rem; font-weight:600; letter-spacing:0.1em; text-transform:uppercase; margin-bottom:12px;">
                                    Board Member</p>
                                <p style="color:rgba(255,255,255,0.6); font-size:0.9rem; line-height:1.6;">Providing
                                    strategic counsel and community insight to support Barrizi's governance and
                                    programme development.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Miriam - Board Member -->
                    <div class="col-lg-6 col-md-6 mb-4 brz-observe slide-up anim-delay-5">
                        <div style="background:rgba(255,255,255,0.05); border-radius:12px; overflow:hidden; border:1px solid rgba(255,255,255,0.1); transition:transform 0.3s, box-shadow 0.3s;"
                            onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.3)'"
                            onmouseout="this.style.transform=''; this.style.boxShadow=''">
                            <img src="assets/gallery/" alt="Miriam Marango"
                                style="width:100%; height:280px; object-fit:cover; border-bottom:3px solid var(--yellow);"
                                onerror="this.src='assets/gallery/m2.jpg'">
                            <div style="padding:24px; text-align:center;">
                                <div
                                    style="display:inline-block; background:rgba(255,255,255,0.12); color:#fff; font-size:0.7rem; font-weight:700; letter-spacing:0.1em; padding:4px 10px; border-radius:20px; text-transform:uppercase; margin-bottom:10px;">
                                    Board Member</div>
                                <h4
                                    style="font-family:var(--font-heading); color:var(--white); font-size:1.4rem; text-transform:uppercase; margin-bottom:4px;">
                                    Miriam Marango</h4>
                                <p
                                    style="color:var(--yellow); font-size:0.85rem; font-weight:600; letter-spacing:0.1em; text-transform:uppercase; margin-bottom:12px;">
                                    Board Member</p>
                                <p style="color:rgba(255,255,255,0.6); font-size:0.9rem; line-height:1.6;">Championing
                                    child welfare and gender equality, bringing a deep commitment to the rights of women
                                    and children across Barrizi's programmes.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Core Values -->
        <section style="background:var(--off-white); padding:90px 0;">
            <div class="container">
                <div class="text-center mb-5 brz-observe slide-up">
                    <span class="brz-section-label label-purple">Our Core Values</span>
                    <h2 class="section-title-purple">THE PILLARS THAT GUIDE US</h2>
                    <div class="divider-orange mx-auto"></div>
                </div>

                <div class="row justify-content-center">
                    <!-- Value 1 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="brz-prog-card brz-observe slide-up anim-delay-1"
                            style="border-top:none; border-bottom:4px solid var(--purple);">
                            <div class="brz-prog-card__icon icon-purple" style="margin-top:-60px;"><i
                                    class="fas fa-shield-alt"></i></div>
                            <h3 class="brz-prog-card__title mt-3">Honesty</h3>
                            <p style="font-size:0.95rem; color:var(--text-dark);">The foundation of trust, where
                                transparency and truthfulness reign supreme in all we do, fostering credibility and
                                ethical relationships.</p>
                        </div>
                    </div>
                    <!-- Value 2 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="brz-prog-card brz-observe slide-up anim-delay-2"
                            style="border-top:none; border-bottom:4px solid var(--orange);">
                            <div class="brz-prog-card__icon icon-orange" style="margin-top:-60px;"><i
                                    class="fas fa-clipboard-check"></i></div>
                            <h3 class="brz-prog-card__title mt-3">Accountability</h3>
                            <p style="font-size:0.95rem; color:var(--text-dark);">We hold ourselves to a high standard,
                                demonstrating faithfulness to resources, lives, and relationships.</p>
                        </div>
                    </div>
                    <!-- Value 3 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="brz-prog-card brz-observe slide-up anim-delay-3"
                            style="border-top:none; border-bottom:4px solid var(--yellow);">
                            <div class="brz-prog-card__icon icon-yellow" style="margin-top:-60px;"><i
                                    class="fas fa-heart"></i></div>
                            <h3 class="brz-prog-card__title mt-3">Compassion</h3>
                            <p style="font-size:0.95rem; color:var(--text-dark);">We listen without judgment and respond
                                to the needs of the people in our community with empathy.</p>
                        </div>
                    </div>
                    <!-- Value 4 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="brz-prog-card brz-observe slide-up anim-delay-4"
                            style="border-top:none; border-bottom:4px solid var(--navy);">
                            <div class="brz-prog-card__icon icon-navy" style="margin-top:-60px;"><i
                                    class="fas fa-users"></i></div>
                            <h3 class="brz-prog-card__title mt-3">Inclusivity</h3>
                            <p style="font-size:0.95rem; color:var(--text-dark);">Creating spaces where all individuals
                                feel welcomed, valued, and included.</p>
                        </div>
                    </div>
                    <!-- Value 5 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="brz-prog-card brz-observe slide-up anim-delay-5"
                            style="border-top:none; border-bottom:4px solid var(--orange);">
                            <div class="brz-prog-card__icon icon-orange" style="margin-top:-60px;"><i
                                    class="fas fa-rocket"></i></div>
                            <h3 class="brz-prog-card__title mt-3">Empowerment</h3>
                            <p style="font-size:0.95rem; color:var(--text-dark);">Providing tools and confidence to
                                individuals so they can excel and achieve their potential.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Partners Section -->
        <section style="background:var(--white); padding:90px 0;">
            <div class="container">
                <div class="row justify-content-center text-center mb-5">
                    <div class="col-lg-7">
                        <span class="brz-section-label brz-observe slide-up">Our Network</span>
                        <h2 class="section-title-navy brz-observe slide-up anim-delay-1"
                            style="font-size:3rem; margin-bottom:15px; text-transform:uppercase;">Our Partners</h2>
                        <p class="brz-observe slide-up anim-delay-2" style="font-size:1.1rem; color:var(--text-muted);">
                            We collaborate with trusted organizations to amplify our impact and deliver holistic
                            transformation in Dandora.</p>
                        <div class="divider-orange mx-auto mt-4"></div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div
                            style="display:flex; justify-content:center; align-items:center; flex-wrap:wrap; gap:50px;">
                            <a href="https://kaacr.com/" target="_blank"
                                title="Kenya Alliance for Advancement of Children (KAACR)">
                                <img src="assets/new/partners/KAACR-LOGO.webp" alt="KAACR"
                                    style="height:90px; object-fit:contain; filter:grayscale(100%); transition:0.3s; opacity:0.7;"
                                    onmouseover="this.style.filter='grayscale(0%)'; this.style.opacity='1';"
                                    onmouseout="this.style.filter='grayscale(100%)'; this.style.opacity='0.7';">
                            </a>
                            <a href="https://footsteps.co.ke/" target="_blank" title="Footsteps Kenya">
                                <img src="assets/new/partners/Footsteps.png" alt="Footsteps Kenya"
                                    style="height:90px; object-fit:contain; filter:grayscale(100%); transition:0.3s; opacity:0.7;"
                                    onmouseover="this.style.filter='grayscale(0%)'; this.style.opacity='1';"
                                    onmouseout="this.style.filter='grayscale(100%)'; this.style.opacity='0.7';">
                            </a>
                            <a href="#" title="Grapesyard Organization">
                                <img src="assets/new/partners/Grapesyard_Organization_logo.jpg"
                                    alt="Grapesyard Organization"
                                    style="height:90px; object-fit:contain; filter:grayscale(100%); transition:0.3s; opacity:0.7;"
                                    onmouseover="this.style.filter='grayscale(0%)'; this.style.opacity='1';"
                                    onmouseout="this.style.filter='grayscale(100%)'; this.style.opacity='0.7';">
                            </a>
                            <a href="https://clairesorganisationkenya.co.ke/" target="_blank"
                                title="Claire's Organisation Kenya">
                                <img src="assets/new/partners/claire.png" alt="Claire's Organisation Kenya"
                                    style="height:90px; object-fit:contain; filter:grayscale(100%); transition:0.3s; opacity:0.7;"
                                    onmouseover="this.style.filter='grayscale(0%)'; this.style.opacity='1';"
                                    onmouseout="this.style.filter='grayscale(100%)'; this.style.opacity='0.7';">
                            </a>
                            <a href="#" title="Still Young Organisation">
                                <img src="assets/new/partners/still-young.png" alt="Still Young Organisation"
                                    style="height:90px; object-fit:contain; filter:grayscale(100%); transition:0.3s; opacity:0.7;"
                                    onmouseover="this.style.filter='grayscale(0%)'; this.style.opacity='1';"
                                    onmouseout="this.style.filter='grayscale(100%)'; this.style.opacity='0.7';">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Banner -->
        <section class="brz-cta-banner" style="background:var(--purple); padding:100px 0; text-align:center;">
            <div class="container" style="position:relative; z-index:2;">
                <h2 class="brz-cta-banner__title brz-observe slide-up" style="font-size:clamp(2.5rem, 6vw, 4.5rem);">
                    FROM THE DUMPSITE TO A <br>
                    <span class="hl-yellow" style="color:var(--yellow);">BRIGHTER FUTURE</span>
                </h2>
                <a href="volunteer.php" class="brz-btn brz-btn-orange mt-4 brz-observe slide-up anim-delay-1">BECOME A
                    VOLUNTEER</a>
            </div>
        </section>

        <!-- Stats Section -->
        <section style="background:var(--orange); padding:60px 0; border-top:5px solid var(--yellow);">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                        <div class="brz-observe scale-in anim-delay-1">
                            <div
                                style="font-family:var(--font-heading); font-size:4.5rem; color:var(--navy); line-height:1;">
                                100<span style="color:var(--white);">+</span></div>
                            <div
                                style="font-family:var(--font-heading); font-size:1.2rem; color:var(--white); letter-spacing:0.05em; margin-top:5px;">
                                VOLUNTEERS</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                        <div class="brz-observe scale-in anim-delay-2">
                            <div
                                style="font-family:var(--font-heading); font-size:4.5rem; color:var(--navy); line-height:1;">
                                80<span style="color:var(--white);">+</span></div>
                            <div
                                style="font-family:var(--font-heading); font-size:1.2rem; color:var(--white); letter-spacing:0.05em; margin-top:5px;">
                                CHILDREN SUPPORTED</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <div class="brz-observe scale-in anim-delay-3">
                            <div
                                style="font-family:var(--font-heading); font-size:4.5rem; color:var(--navy); line-height:1;">
                                50<span style="color:var(--white);">+</span></div>
                            <div
                                style="font-family:var(--font-heading); font-size:1.2rem; color:var(--white); letter-spacing:0.05em; margin-top:5px;">
                                YOUNG MOTHERS SUPPORTED</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="brz-observe scale-in anim-delay-4">
                            <div
                                style="font-family:var(--font-heading); font-size:4.5rem; color:var(--navy); line-height:1;">
                                56<span style="color:var(--white);">+</span></div>
                            <div
                                style="font-family:var(--font-heading); font-size:1.2rem; color:var(--white); letter-spacing:0.05em; margin-top:5px;">
                                GIRLS MENTORED</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <?php include 'includes/footer.php'; ?>

    <!-- Scroll Up -->
    <a href="#" id="brz-back-top" title="Go to Top">
        <i class="fas fa-chevron-up"></i>
    </a>

    <?php include 'includes/script.php'; ?>

    <script>
        // Intersection Observer for animations
        (function () {
            if (!('IntersectionObserver' in window)) {
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

        // Back to top logic
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
    </script>

</body>

</html>