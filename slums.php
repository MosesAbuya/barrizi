<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate</title>
    <?php include 'includes/head.php'?>
    <?php include 'includes/preloader.php'; ?>
    <style>
    h1 {
        font-size: 4.5rem;
        font-weight: 800;
        text-align: center;
        color: #f27420;
    }

    .h-container {
        background-image: url('assets/img/b6.jpg');
        background-size: cover;
        background-attachment: fixed;
        background-position: center;

        #p-h2 {
            color: #f27420;
        }
    }

    .slider-area2 {
        background-color: rgba(0, 0, 0, 0.252);
    }

    .header-area .header-top .header-info-left>ul>li {
        color: #1f2b7b;
    }

    .header-area .header-top .header-info-left .header-social>ul>li>a {
        color: #f27420;
    }

    .header-area .header-top .header-info-right .contact-now li a {
        color: #1f2b7b;
    }
    </style>
    <link rel="stylesheet" href="slums.css">
    <link rel="stylesheet" href="text-area.css">
</head>

<body>
    <?php include 'includes/sidebar.php' ?>
    <?php include 'includes/navbar.php'?>

    <div class="h-container">

        <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 pt-20 text-center">
                                <h2 id="text-color-n"><a href="index.php">Home</a>/Why Nairobi Slums?</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
    </div>

    <section class="text-area" id="work">
        <div class="section-tittle mb-35" id="left-t">
            <span>LIFE IN NAIROBI SLUMS</span>
            <h2>FACING THE CHALLENGE OF POVERTY AND INEQUALITY</h2>
        </div>
        <div class="text-area-container">
            <div class="text-area-image-left t-area-img">
                <img class="rotate-in" src="assets/img/b19.jpg" alt="education">
            </div>
            <div class="text-area-text-right slide-in-right t-area">
                <h2><span class="n-font">1</span> Addressing Population and Educational Challenges</h2>
                <p>
                    Nairobi's slums are home to approximately 2.5 million people, representing around 60% of the city's
                    population while occupying only 6% of the land area. In settlements like Dandora, nearly 40% of over
                    500,000 school-age children are not enrolled in school. Barrizi Organisation Kenya aims to bridge
                    this gap
                    by providing access to quality education, empowering children with the tools they need to break the
                    cycle of poverty.
                </p>
            </div>
        </div>
        <div class="text-area-container">
            <div class="text-area-text-mid-left slide-in-left t-area">
                <h2><span class="n-font">2</span> Combating Health and Nutritional Inequalities</h2>
                <p>
                    Children in Nairobi's slums face higher mortality rates, with under-five mortality approximately 20%
                    higher than in rural regions. Additionally, malnutrition rates are alarmingly high, with stunting
                    affecting between 33.5% and 47% of children. Barrizi Organisation focuses on improving healthcare
                    services, providing nutrition programs, and ensuring better maternal and child health outcomes.
                </p>
            </div>
            <div class="text-area-image-mid-right  t-area-img">
                <img class="fade-in" src="assets/img/b20.jpg" alt="education">
            </div>
        </div>

        <div class="text-area-container">
            <div class="text-area-text-mid-left slide-in-left t-area">
                <h2><span class="n-font">3</span> Empowering Social Development and Reducing Vulnerabilities</h2>
                <p>
                    Social challenges such as early parenthood, with 16% of girls in slums becoming mothers at a young
                    age, and limited access to essential services, further exacerbate poverty cycles. Barrizi
                    Organisation works to create awareness, provide life skills training, and empower young individuals
                    to make informed choices for a brighter future.
                </p>
            </div>
            <div class="text-area-image-mid-right  t-area-img">
                <img class="fade-in" src="assets/img/b3.jpg" alt="education">
            </div>
        </div>
    </section>
    <section class="video">
        <div class="v-text">
            <h2>Dandora, a <span class="n-font">30</span> acre site of waste</h2>
            <p>
                The Dandora Dumpsite, located in Nairobi, Kenya, covers an area of approximately 30 acres. It is one of
                the largest waste disposal sites in the country, handling a significant portion of Nairobi's daily
                waste. The dumpsite has been in operation for decades, but it faces significant environmental and health
                challenges due to its size, the volume of waste it processes, and its impact on surrounding communities.
            </p>
        </div>
        <video src="assets/video/vid1.mp4" controls></video>
    </section>



    <?php include 'includes/footer.php'?>
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <?php include 'includes/script.php'; ?>
</body>

</html>
