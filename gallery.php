<?php include 'includes/head.php'; ?>
<?php include 'includes/preloader.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <title>Our Gallery | Barrizi Organisation</title>
    <style>
        body { padding-top: 0; background: var(--off-white); }
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
            background-image: url('assets/img/hero/hero2v.png');
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

        /* Gallery Grid Layout */
        .brz-gallery-wrapper {
            column-count: 3;
            column-gap: 20px;
            padding: 20px 0;
        }
        @media (max-width: 991px) { .brz-gallery-wrapper { column-count: 2; } }
        @media (max-width: 575px) { .brz-gallery-wrapper { column-count: 1; } }

        .brz-gallery-item {
            break-inside: avoid;
            margin-bottom: 20px;
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        .brz-gallery-item img {
            width: 100%;
            height: auto;
            display: block;
            border-bottom: 5px solid var(--orange);
            transition: transform 0.4s ease;
        }
        .brz-gallery-item:nth-child(even) img { border-bottom-color: var(--purple); }
        .brz-gallery-item:nth-child(3n) img { border-bottom-color: var(--yellow); }

        .brz-gallery-item:hover img {
            transform: scale(1.05);
        }
        .brz-gallery-item {
            cursor: zoom-in;
        }

        /* ---- Lightbox ---- */
        .brz-lightbox {
            display: none;
            position: fixed;
            inset: 0;
            z-index: 9999;
            background: rgba(0,0,0,0.92);
            align-items: center;
            justify-content: center;
            animation: lbFadeIn 0.25s ease;
        }
        .brz-lightbox.open { display: flex; }
        @keyframes lbFadeIn { from { opacity:0; } to { opacity:1; } }
        .brz-lightbox__img {
            max-width: 92vw;
            max-height: 88vh;
            object-fit: contain;
            border-radius: 6px;
            box-shadow: 0 30px 80px rgba(0,0,0,0.6);
            animation: lbZoom 0.3s cubic-bezier(0.34,1.56,0.64,1);
        }
        @keyframes lbZoom { from { transform: scale(0.75); opacity:0; } to { transform: scale(1); opacity:1; } }
        .brz-lightbox__close {
            position: fixed;
            top: 20px;
            right: 28px;
            font-size: 2.8rem;
            color: #fff;
            background: none;
            border: none;
            cursor: pointer;
            line-height: 1;
            opacity: 0.8;
            transition: opacity 0.2s, transform 0.2s;
            z-index: 10000;
        }
        .brz-lightbox__close:hover { opacity: 1; transform: rotate(90deg) scale(1.1); }
        .brz-lightbox__nav {
            position: fixed;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(255,255,255,0.12);
            border: none;
            color: #fff;
            font-size: 2rem;
            width: 52px;
            height: 52px;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.2s;
            z-index: 10000;
        }
        .brz-lightbox__nav:hover { background: rgba(243,112,33,0.7); }
        .brz-lightbox__prev { left: 16px; }
        .brz-lightbox__next { right: 16px; }
        .brz-lightbox__counter {
            position: fixed;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            color: rgba(255,255,255,0.6);
            font-family: var(--font-body);
            font-size: 0.9rem;
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
            <h1 class="brz-page-header__title brz-observe slide-up">OUR <span style="color:var(--orange);">GALLERY</span></h1>
            <div class="brz-page-header__breadcrumb brz-observe slide-up anim-delay-1">
                <a href="index.php">Home</a> / Gallery
            </div>
        </div>
    </section>

    <!-- Brush Stroke Divider -->
    <div class="brz-svg-divider" style="background:transparent; margin-top:-59px; position:relative; z-index:10; pointer-events:none;">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60" preserveAspectRatio="none" style="display:block;width:100%;height:60px;">
            <path fill="#FDFBF7" d="M0,30 C120,10 240,40 360,25 C480,10 600,45 720,30 C840,15 960,45 1080,30 C1200,15 1320,35 1440,25 L1440,60 L0,60 Z"/>
        </svg>
    </div>

    <!-- Gallery Section -->
    <section style="padding: 60px 0 90px; background: var(--off-white);">
        <div class="container">
            <?php
            require 'includes/connection.php';
            $query = "SELECT * FROM gallery";
            $query_run = mysqli_query($connection, $query);
            $check_products = mysqli_num_rows($query_run) > 0;

            if ($check_products) {
                while ($row = mysqli_fetch_array($query_run)) {
                    if (!empty($row['images'])) {
                        $title = !empty($row['description']) ? htmlspecialchars($row['description']) : 'Gallery Updates';
                        ?>
                        <div class="text-center mt-5 mb-4 brz-observe slide-up">
                            <h3 style="font-family: var(--font-heading); font-size: 2.2rem; color: var(--navy); text-transform: uppercase; margin-bottom: 10px;">
                                <?php echo $title; ?>
                            </h3>
                            <div style="width: 60px; height: 4px; background: var(--orange); margin: 0 auto 30px;"></div>
                        </div>
                        <div class="brz-gallery-wrapper">
                        <?php
                        $images = explode(',', $row['images']);
                        foreach ($images as $image) { 
                            $image_path = "./images/gallery/" . trim($image);
                            if (file_exists($image_path)) { ?>
                                 <div class="brz-gallery-item brz-observe slide-up" onclick="openLightbox(this)">
                                    <img src="<?php echo $image_path; ?>" alt="<?php echo $title; ?>" loading="lazy">
                                </div>
                            <?php } 
                        }
                        echo '</div>';
                    }
                }
            } else {
                echo "<p class='text-center' style='font-family:var(--font-heading); font-size:1.5rem; color:var(--navy); padding: 50px 0;'>No photos available yet.</p>";
            }
            ?>
        </div>
    </section>

    <!-- Brush Stroke Divider -->
    <div class="brz-svg-divider" style="background:var(--off-white);">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60" preserveAspectRatio="none" style="display:block;width:100%;height:60px;">
            <path fill="#4A154B" d="M0,20 C100,40 200,5 300,25 C400,45 500,10 600,30 C700,50 800,15 900,35 C1000,55 1100,20 1200,40 C1300,60 1380,25 1440,40 L1440,60 L0,60 Z"/>
        </svg>
    </div>

    <!-- Direct CTA -->
    <section class="brz-cta-banner" style="background:var(--purple); padding:80px 0; text-align:center;">
        <div class="container" style="position:relative; z-index:2;">
            <h2 class="brz-cta-banner__title brz-observe slide-up" style="font-family:var(--font-heading); font-size:clamp(2rem, 5vw, 4rem); color:var(--white);">
                EDUCATE. EMPOWER. ELEVATE.
            </h2>
            <div class="mt-4 brz-observe slide-up anim-delay-1">
                <a href="about.php" class="brz-btn brz-btn-orange">SEE OUR WORK</a>
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

<!-- Lightbox Modal -->
<div class="brz-lightbox" id="brzLightbox" onclick="closeLightboxOnBackdrop(event)">
    <button class="brz-lightbox__close" onclick="closeLightbox()" title="Close">&times;</button>
    <button class="brz-lightbox__nav brz-lightbox__prev" onclick="lightboxNav(-1)"><i class="fas fa-chevron-left"></i></button>
    <img class="brz-lightbox__img" id="brzLightboxImg" src="" alt="Enlarged Gallery Image">
    <button class="brz-lightbox__nav brz-lightbox__next" onclick="lightboxNav(1)"><i class="fas fa-chevron-right"></i></button>
    <div class="brz-lightbox__counter" id="brzLightboxCounter"></div>
</div>

<script>
(function() {
    var images = [];
    var currentIndex = 0;

    // Collect all gallery images
    document.querySelectorAll('.brz-gallery-item img').forEach(function(img, i) {
        images.push(img.src);
    });

    window.openLightbox = function(el) {
        var src = el.querySelector('img').src;
        currentIndex = images.indexOf(src);
        showImage(currentIndex);
        document.getElementById('brzLightbox').classList.add('open');
        document.body.style.overflow = 'hidden';
    };

    window.closeLightbox = function() {
        document.getElementById('brzLightbox').classList.remove('open');
        document.body.style.overflow = '';
    };

    window.closeLightboxOnBackdrop = function(e) {
        if (e.target === document.getElementById('brzLightbox')) closeLightbox();
    };

    window.lightboxNav = function(dir) {
        currentIndex = (currentIndex + dir + images.length) % images.length;
        showImage(currentIndex);
    };

    function showImage(idx) {
        var img = document.getElementById('brzLightboxImg');
        img.src = images[idx];
        document.getElementById('brzLightboxCounter').textContent = (idx + 1) + ' / ' + images.length;
    }

    // Keyboard navigation
    document.addEventListener('keydown', function(e) {
        if (!document.getElementById('brzLightbox').classList.contains('open')) return;
        if (e.key === 'Escape') closeLightbox();
        if (e.key === 'ArrowRight') lightboxNav(1);
        if (e.key === 'ArrowLeft') lightboxNav(-1);
    });
})();
</script>
</body>
</html>

