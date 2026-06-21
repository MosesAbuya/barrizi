<!doctype html>
<html lang="en">

<head>
    <?php include 'includes/head.php'; ?>
    <title>Our Programs | Barrizi Organisation Kenya</title>
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
            padding: 180px 0 100px;
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
            opacity: 0.2;
            
        }

        .brz-page-header__content {
            position: relative;
            z-index: 2;
        }

        .brz-page-header__title {
            font-family: var(--font-heading);
            font-size: clamp(3.5rem, 8vw, 6rem);
            color: var(--white);
            line-height: 1;
            margin-bottom: 15px;
            text-transform: uppercase;
            letter-spacing: 0.02em;
        }

        .brz-page-header__breadcrumb {
            font-family: var(--font-heading);
            font-size: 1.3rem;
            color: var(--yellow);
            letter-spacing: 0.15em;
            text-transform: uppercase;
        }

        .brz-page-header__breadcrumb a {
            color: var(--white);
            transition: color 0.3s;
            text-decoration: none;
        }

        .brz-page-header__breadcrumb a:hover {
            color: var(--orange);
        }

        /* Homepage Theme Polaroid Cards */
        .brz-polaroid-grid {
            padding: 80px 0 120px;
        }

        .brz-polaroid-item {
            margin-bottom: 50px;
            position: relative;
        }

        .brz-polaroid {
            background: var(--white);
            padding: 15px 15px 40px 15px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
            transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            height: 100%;
            display: flex;
            flex-direction: column;
            z-index: 1;
        }

        .brz-polaroid:hover {
            transform: scale(1.05) translateY(-10px) !important;
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.25);
            z-index: 10;
        }

        .brz-polaroid::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 6px;
            background: var(--card-color, var(--purple));
        }

        .brz-polaroid-img-wrap {
            position: relative;
            overflow: hidden;
            margin-bottom: 25px;
        }

        .brz-polaroid-img-wrap img {
            width: 100%;
            height: 280px;
            object-fit: cover;
            border: 1px solid rgba(0, 0, 0, 0.05);
            transition: transform 0.8s ease;
        }

        .brz-polaroid:hover .brz-polaroid-img-wrap img {
            transform: scale(1.1);
        }

        .brz-polaroid-content {
            text-align: center;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .brz-polaroid-title {
            font-family: var(--font-heading);
            font-size: 1.8rem;
            color: var(--navy);
            margin-bottom: 15px;
            text-transform: uppercase;
            line-height: 1.1;
            letter-spacing: 0.03em;
        }

        .brz-polaroid-title span {
            color: var(--card-color, var(--orange));
        }

        .brz-polaroid-text {
            font-family: var(--font-body);
            font-size: 1rem;
            color: var(--text-dark);
            line-height: 1.6;
            margin-bottom: 25px;
            opacity: 0.85;
            flex-grow: 1;
        }

        .brz-polaroid-btn {
            font-family: var(--font-heading);
            font-size: 1.1rem;
            color: var(--white) !important;
            background: var(--card-color, var(--purple));
            padding: 10px 25px;
            display: inline-block;
            text-decoration: none;
            letter-spacing: 0.05em;
            transition: all 0.3s;
            margin-top: auto;
            align-self: center;
        }

        .brz-polaroid-btn:hover {
            background: var(--navy);
            transform: translateY(-2px);
        }

        /* Large Typographic Watermark */
        .brz-watermark-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-family: var(--font-heading);
            font-size: 25vw;
            color: rgba(74, 21, 75, 0.03);
            /* Faint Purple */
            z-index: 0;
            white-space: nowrap;
            pointer-events: none;
        }

        /* Impact Section (from homepage theme) */
        .brz-impact-strip {
            background: var(--purple);
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }

        .brz-impact-strip::before {
            content: '';
            position: absolute;
            inset: 0;
            background: url('assets/img/gallery/education.jpg') center/cover;
            opacity: 0.1;
            mix-blend-mode: multiply;
        }

        .brz-stat-box {
            text-align: center;
            color: var(--white);
        }

        .brz-stat-num {
            font-family: var(--font-heading);
            font-size: 4.5rem;
            color: var(--yellow);
            line-height: 1;
            margin-bottom: 10px;
        }

        .brz-stat-label {
            font-family: var(--font-body);
            font-size: 1.1rem;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            font-weight: 700;
        }
    </style>
</head>

<body>

    <?php include 'includes/navbar.php'; ?>
    <?php include 'includes/sidebar.php'; ?>

    <main style="position: relative; overflow: hidden;">

        <!-- Background Watermark -->
        <div class="brz-watermark-text">PROGRAMS</div>

        <!-- Page Header -->
        <section class="brz-page-header">
            <div class="container brz-page-header__content">
                <h1 class="brz-page-header__title brz-observe slide-up">OUR <span
                        style="color:var(--orange);">PROGRAMS</span></h1>
                <div class="brz-page-header__breadcrumb brz-observe slide-up anim-delay-1">
                    <a href="index.php">Home</a> <span style="color:var(--white);margin:0 10px;">/</span> Programs
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

        <!-- Intro text -->
        <section style="position: relative; z-index: 2; padding: 80px 0 0;">
            <div class="container text-center">
                <span class="brz-section-label label-orange brz-observe slide-up">What we offer</span>
                <h2 class="section-title-purple brz-observe slide-up anim-delay-1"
                    style="max-width: 800px; margin-left: auto; margin-right: auto;">
                    EMPOWERING GIRLS AND YOUNG MOTHERS THROUGH EDUCATION AND ADVOCACY
                </h2>
                <div class="divider-orange mx-auto"></div>
            </div>
        </section>

        <!-- Polaroid Grid Section -->
        <section class="brz-polaroid-grid">
            <div class="container" style="position: relative; z-index: 2;">
                <div class="row">

                    <!-- Program 1 -->
                    <div class="col-lg-4 col-md-6 brz-polaroid-item brz-observe slide-up">
                        <div class="brz-polaroid" style="--rot: -2deg; --card-color: var(--orange);">
                            <div class="brz-polaroid-img-wrap">
                                <img src="assets/new/h2.jpg" alt="Education">
                            </div>
                            <div class="brz-polaroid-content">
                                <h3 class="brz-polaroid-title">QUALITY <span>EDUCATION</span></h3>
                                <p class="brz-polaroid-text">Ensuring girls in underserved communities receive access to
                                    quality early childhood and primary education in a safe, nurturing environment.</p>
                                <a href="education.php" class="brz-polaroid-btn">LEARN MORE</a>
                            </div>
                        </div>
                    </div>

                    <!-- Program 2 -->
                    <div class="col-lg-4 col-md-6 brz-polaroid-item brz-observe slide-up anim-delay-1">
                        <div class="brz-polaroid" style="--rot: 1deg; --card-color: var(--yellow);">
                            <div class="brz-polaroid-img-wrap">
                                <img src="assets/new/junior.jpeg" alt="Junior Secondary">
                            </div>
                            <div class="brz-polaroid-content">
                                <h3 class="brz-polaroid-title">JUNIOR <span>SECONDARY</span></h3>
                                <p class="brz-polaroid-text">Offering scholarships, mentorship, and learning materials
                                    to ensure that bright young girls stay in school and build a promising future.</p>
                                <a href="junior.php" class="brz-polaroid-btn" style="color:var(--navy)!important;">LEARN
                                    MORE</a>
                            </div>
                        </div>
                    </div>

                    <!-- Program 3 -->
                    <div class="col-lg-4 col-md-6 brz-polaroid-item brz-observe slide-up anim-delay-2">
                        <div class="brz-polaroid" style="--rot: -1deg; --card-color: var(--purple);">
                            <div class="brz-polaroid-img-wrap">
                                <img src="assets/img/gallery/sports.jpg" alt="Holiday Programs">
                            </div>
                            <div class="brz-polaroid-content">
                                <h3 class="brz-polaroid-title">HOLIDAY <span>PROGRAMS</span></h3>
                                <p class="brz-polaroid-text">Engaging girls through structured holiday activities like
                                    sports, music, and acrobatics to build confidence and discipline safely.</p>
                                <a href="holiday.php" class="brz-polaroid-btn">LEARN MORE</a>
                            </div>
                        </div>
                    </div>

                    <!-- Program 4 -->
                    <div class="col-lg-4 col-md-6 brz-polaroid-item brz-observe slide-up">
                        <div class="brz-polaroid" style="--rot: 2deg; --card-color: var(--navy);">
                            <div class="brz-polaroid-img-wrap">
                                <img src="assets/img/gallery/vocational.jpg" alt="Vocational Training">
                            </div>
                            <div class="brz-polaroid-content">
                                <h3 class="brz-polaroid-title">VOCATIONAL <span>TRAINING</span></h3>
                                <p class="brz-polaroid-text">Providing teen mothers with practical skills in tailoring,
                                    catering, and computer literacy to help them regain financial independence.</p>
                                <a href="vocational.php" class="brz-polaroid-btn">LEARN MORE</a>
                            </div>
                        </div>
                    </div>

                    <!-- Program 5 -->
                    <div class="col-lg-4 col-md-6 brz-polaroid-item brz-observe slide-up anim-delay-1">
                        <div class="brz-polaroid" style="--rot: -1.5deg; --card-color: var(--orange);">
                            <div class="brz-polaroid-img-wrap">
                                <img src="assets/new/young.jpeg" alt="Mentorship">
                            </div>
                            <div class="brz-polaroid-content">
                                <h3 class="brz-polaroid-title">TEEN MOTHERS<span>MENTORSHIP</span></h3>
                                <p class="brz-polaroid-text">Offering life skills training, counseling, and guidance to
                                    break social stigma and help young mothers rebuild their confidence.</p>
                                <a href="mothers.php" class="brz-polaroid-btn">LEARN MORE</a>
                            </div>
                        </div>
                    </div>

                    <!-- Program 6 -->
                    <div class="col-lg-4 col-md-6 brz-polaroid-item brz-observe slide-up anim-delay-2">
                        <div class="brz-polaroid" style="--rot: 1.5deg; --card-color: var(--purple);">
                            <div class="brz-polaroid-img-wrap">
                                <img src="assets/img/gallery/women.jpg" alt="Women's Rights">
                            </div>
                            <div class="brz-polaroid-content">
                                <h3 class="brz-polaroid-title">WOMEN'S <span>RIGHTS</span></h3>
                                <p class="brz-polaroid-text">Fighting for the rights of girls through policy advocacy
                                    and community outreach to end child marriages and gender-based violence.</p>
                                <a href="community.php" class="brz-polaroid-btn">LEARN MORE</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Impact Strip -->
        <section class="brz-impact-strip">
            <div class="container position-relative z-index-2">
                <div class="row">
                    <div class="col-md-4 mb-4 mb-md-0 brz-observe slide-up">
                        <div class="brz-stat-box">
                            <div class="brz-stat-num">500+</div>
                            <div class="brz-stat-label">Girls Educated</div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 mb-md-0 brz-observe slide-up anim-delay-1">
                        <div class="brz-stat-box">
                            <div class="brz-stat-num">200+</div>
                            <div class="brz-stat-label">Teen Mothers Trained</div>
                        </div>
                    </div>
                    <div class="col-md-4 brz-observe slide-up anim-delay-2">
                        <div class="brz-stat-box">
                            <div class="brz-stat-num">10+</div>
                            <div class="brz-stat-label">Communities Reached</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Bottom SVG Divider (Removed to let the purple flow directly into the footer wave) -->

    </main>

    <!-- Style to morph the purple background onto the footer's top wave -->
    <style>
        #brz-footer-wave {
            background: var(--purple) !important;
        }
    </style>

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


