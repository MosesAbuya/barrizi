<?php
ob_start();
require 'includes/connection.php';

$product_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$product = null;

if ($product_id > 0) {
    $query = "SELECT * FROM products WHERE id = " . $product_id;
    $query_run = mysqli_query($connection, $query);
    if ($query_run && mysqli_num_rows($query_run) > 0) {
        $product = mysqli_fetch_assoc($query_run);
    }
}

if (!$product) {
    ob_end_clean();
    header("Location: blog.php");
    exit;
}
?>
<!doctype html>
<html lang="en">
<head>
    <?php include 'includes/head.php'; ?>
    <title><?php echo htmlspecialchars($product['name'] ?? 'Blog'); ?> | Barrizi Organisation</title>
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
            background-image: url('images/<?php echo htmlspecialchars($product['photo'] ?? ''); ?>');
            background-size: cover;
            background-position: center;
            opacity: 0.25;
            
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
            margin-bottom: 15px;
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

        .brz-article-content {
            background: #fff;
            padding: 50px;
            border-radius: 8px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.05);
            margin-top: -60px;
            position: relative;
            z-index: 10;
            border-top: 5px solid var(--orange);
        }
        
        .brz-article-meta {
            font-family: var(--font-heading);
            color: var(--purple);
            font-size: 1.2rem;
            letter-spacing: 0.05em;
            margin-bottom: 25px;
            display: inline-block;
            background: rgba(74, 21, 75, 0.1);
            padding: 5px 15px;
            border-radius: 4px;
        }
        
        .brz-article-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #444;
            margin-bottom: 40px;
        }

        .brz-gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 15px;
            margin-top: 30px;
        }
        .brz-gallery-grid img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 4px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            border-bottom: 3px solid var(--orange);
            cursor: zoom-in;
            transition: transform 0.3s ease;
        }
        .brz-gallery-grid img:hover { transform: scale(1.03); }

        /* ---- Lightbox ---- */
        .brz-lightbox {
            display: none;
            position: fixed;
            inset: 0;
            z-index: 9999;
            background: rgba(0,0,0,0.92);
            align-items: center;
            justify-content: center;
        }
        .brz-lightbox.open { display: flex; }
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
            <h1 class="brz-page-header__title brz-observe slide-up"><?php echo htmlspecialchars($product['name'] ?? ''); ?></h1>
            <div class="brz-page-header__breadcrumb brz-observe slide-up anim-delay-1">
                <a href="index.php">Home</a> / <a href="blog.php">Achievements</a> / Details
            </div>
        </div>
    </section>

    <!-- Brush Stroke Divider -->
    <div class="brz-svg-divider" style="background:transparent; margin-top:-59px; position:relative; z-index:10; pointer-events:none;">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60" preserveAspectRatio="none" style="display:block;width:100%;height:60px;">
            <path fill="#FDFBF7" d="M0,30 C120,10 240,40 360,25 C480,10 600,45 720,30 C840,15 960,45 1080,30 C1200,15 1320,35 1440,25 L1440,60 L0,60 Z"/>
        </svg>
    </div>

    <!-- Content Section -->
    <section style="padding-bottom: 90px; background: var(--off-white);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="brz-article-content brz-observe slide-up">
                        <div class="brz-article-meta">
                            <i class="far fa-calendar-alt"></i> <?php echo htmlspecialchars($product['product_date'] ?? ''); ?>
                        </div>
                        
                        <div class="brz-article-text">
                            <p><?php echo nl2br(htmlspecialchars($product['description'] ?? '')); ?></p>
                        </div>
                        
                        <?php
                        $other_photos = json_decode($product['other_photos'] ?? '[]', true);
                        if (!empty($other_photos)) {
                            echo '<h4 style="font-family:var(--font-heading); font-size:2rem; color:var(--navy); margin-bottom:20px;">Gallery</h4>';
                            echo '<div class="brz-gallery-grid">';
                            foreach ($other_photos as $photo) {
                                echo '<img src="images/' . htmlspecialchars($photo) . '" alt="Achievement Photo" onclick="openLightbox(this)">';
                            }
                            echo '</div>';
                        }
                        ?>
                    </div>
                    
                    <div class="text-center mt-5">
                        <a href="blog.php" class="brz-btn brz-btn-purple"><i class="fas fa-arrow-left"></i> BACK TO STORIES</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Brush Stroke Divider -->
    <div class="brz-svg-divider" style="background:var(--off-white);">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60" preserveAspectRatio="none" style="display:block;width:100%;height:60px;">
            <path fill="#FFC107" d="
                M0,20 C100,40 200,5 300,25 C400,45 500,10 600,30
                C700,50 800,15 900,35 C1000,55 1100,20 1200,40
                C1300,60 1380,25 1440,40
                L1440,60 L0,60 Z
            "/>
        </svg>
    </div>

    <!-- Direct CTA -->
    <section class="brz-cta-banner" style="background:var(--yellow); padding:80px 0; text-align:center;">
        <div class="container" style="position:relative; z-index:2;">
            <h2 class="brz-cta-banner__title brz-observe slide-up" style="font-family:var(--font-heading); font-size:clamp(2rem, 5vw, 4rem); color:var(--navy);">
                BE PART OF THE CHANGE. BE PART OF THEIR FUTURE.
            </h2>
            <div class="mt-4 brz-observe slide-up anim-delay-1">
                <a href="donation.php" class="brz-btn" style="background:var(--navy); color:var(--white);">SUPPORT OUR WORK</a>
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
<div class="brz-lightbox" id="brzLightbox" onclick="if(event.target===this)closeLightbox()">
    <button class="brz-lightbox__close" onclick="closeLightbox()">&times;</button>
    <button class="brz-lightbox__nav brz-lightbox__prev" onclick="lightboxNav(-1)"><i class="fas fa-chevron-left"></i></button>
    <img class="brz-lightbox__img" id="brzLightboxImg" src="" alt="">
    <button class="brz-lightbox__nav brz-lightbox__next" onclick="lightboxNav(1)"><i class="fas fa-chevron-right"></i></button>
    <div class="brz-lightbox__counter" id="brzLightboxCounter"></div>
</div>
<script>
(function() {
    var images = [], currentIndex = 0;
    document.querySelectorAll('.brz-gallery-grid img').forEach(function(img) { images.push(img.src); });
    window.openLightbox = function(el) {
        currentIndex = images.indexOf(el.src);
        showImage(currentIndex);
        document.getElementById('brzLightbox').classList.add('open');
        document.body.style.overflow = 'hidden';
    };
    window.closeLightbox = function() {
        document.getElementById('brzLightbox').classList.remove('open');
        document.body.style.overflow = '';
    };
    window.lightboxNav = function(dir) {
        currentIndex = (currentIndex + dir + images.length) % images.length;
        showImage(currentIndex);
    };
    function showImage(idx) {
        document.getElementById('brzLightboxImg').src = images[idx];
        document.getElementById('brzLightboxCounter').textContent = (idx+1) + ' / ' + images.length;
    }
    document.addEventListener('keydown', function(e) {
        if (!document.getElementById('brzLightbox').classList.contains('open')) return;
        if (e.key==='Escape') closeLightbox();
        if (e.key==='ArrowRight') lightboxNav(1);
        if (e.key==='ArrowLeft') lightboxNav(-1);
    });
})();
</script>
</body>
</html>

