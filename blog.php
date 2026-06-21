<?php
require 'includes/connection.php';
?>
<!doctype html>
<html lang="en">
<head>
    <?php include 'includes/head.php'; ?>
    <title>Success Stories | Barrizi Organisation</title>
    <style>
        body { padding-top: 0; }
        .header-area { display: none !important; }

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
            background-image: url('assets/img/hero/back11.png');
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

        /* Success Story Cards */
        .brz-story-card {
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            height: 100%;
            display: flex;
            flex-direction: column;
            border-bottom: 4px solid var(--orange);
            transition: transform 0.3s ease;
        }
        .brz-story-card:hover {
            transform: translateY(-10px);
        }
        .brz-story-img {
            height: 250px;
            object-fit: cover;
            width: 100%;
        }
        .brz-story-body {
            padding: 30px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        .brz-story-date {
            font-family: var(--font-heading);
            color: var(--purple);
            font-size: 1.1rem;
            letter-spacing: 0.05em;
            margin-bottom: 10px;
        }
        .brz-story-title {
            font-family: var(--font-heading);
            font-size: 1.8rem;
            color: var(--navy);
            margin-bottom: 15px;
            line-height: 1.2;
        }
        .brz-story-desc {
            color: #555;
            font-size: 0.95rem;
            margin-bottom: 25px;
            flex-grow: 1;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
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
            <h1 class="brz-page-header__title brz-observe slide-up">SUCCESS <span style="color:var(--orange);">STORIES</span></h1>
            <div class="brz-page-header__breadcrumb brz-observe slide-up anim-delay-1">
                <a href="index.php">Home</a> / Success Stories
            </div>
        </div>
    </section>

    <!-- Brush Stroke Divider: Navy to Off-White -->
    <div class="brz-svg-divider" style="background:transparent; margin-top:-59px; position:relative; z-index:10; pointer-events:none;">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60" preserveAspectRatio="none" style="display:block;width:100%;height:60px;">
            <path fill="#FDFBF7" d="
                M0,30 C120,10 240,40 360,25 C480,10 600,45 720,30
                C840,15 960,45 1080,30 C1200,15 1320,35 1440,25
                L1440,60 L0,60 Z
            "/>
        </svg>
    </div>

    <!-- Blog Area Start-->
    <section style="background:var(--off-white); padding:90px 0;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center mb-5 brz-observe slide-up">
                    <span class="brz-section-label label-orange">Our Impact</span>
                    <h2 class="section-title-purple">LATEST ACHIEVEMENTS</h2>
                    <div class="divider-orange mx-auto"></div>
                </div>
            </div>

            <div class="row">
                <?php
                $query =  "SELECT * FROM products ORDER BY id DESC";
                $query_run = mysqli_query($connection, $query);
                $check_products = mysqli_num_rows($query_run) > 0;

                if ($check_products) {
                    while ($row = mysqli_fetch_array($query_run)) {
                ?>
                <div class="col-lg-4 col-md-6 mb-4 brz-observe slide-up">
                    <div class="brz-story-card">
                        <img class="brz-story-img" src="images/<?php echo htmlspecialchars($row['photo']); ?>" alt="">
                        <div class="brz-story-body">
                            <div class="brz-story-date"><?php echo htmlspecialchars($row['product_date']); ?></div>
                            <h3 class="brz-story-title"><?php echo htmlspecialchars($row['name']); ?></h3>
                            <p class="brz-story-desc"><?php echo htmlspecialchars($row['description']); ?></p>
                            <a href="blog_details.php?id=<?php echo $row['id']; ?>" class="brz-btn brz-btn-orange mt-auto" style="align-self: flex-start; padding: 10px 24px; font-size: 0.9rem;">READ MORE</a>
                        </div>
                    </div>
                </div>
                <?php
                    }
                } else {
                    echo "<div class='col-12 text-center'><p style='font-family:Montserrat,sans-serif; color:#888;'>No success stories found at this time.</p></div>";
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Brush Stroke Divider: Off-White to Purple -->
    <div class="brz-svg-divider" style="background:var(--off-white);">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60" preserveAspectRatio="none" style="display:block;width:100%;height:60px;">
            <path fill="#4A154B" d="
                M0,20 C100,40 200,5 300,25 C400,45 500,10 600,30
                C700,50 800,15 900,35 C1000,55 1100,20 1200,40
                C1300,60 1380,25 1440,40
                L1440,60 L0,60 Z
            "/>
        </svg>
    </div>

    <!-- Direct CTA -->
    <section class="brz-cta-banner" style="background:var(--purple); padding:100px 0; text-align:center;">
        <div class="container" style="position:relative; z-index:2;">
            <h2 class="brz-cta-banner__title brz-observe slide-up" style="font-size:clamp(2rem, 5vw, 4rem); color:var(--white);">
                EMPOWERING YOUNG LIVES.<br>
                <span class="hl-yellow" style="color:var(--yellow);">CREATING LASTING CHANGE.</span>
            </h2>
            <div class="mt-4 brz-observe slide-up anim-delay-1" style="display:flex; justify-content:center; gap:15px; flex-wrap:wrap;">
                <a href="donation.php" class="brz-btn brz-btn-orange">PARTNER WITH US</a>
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
</body>
</html>

