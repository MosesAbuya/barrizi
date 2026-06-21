<?php
ob_start();
require 'includes/connection.php';

$event_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$event = null;

if ($event_id > 0) {
    $query_run = mysqli_query($connection, "SELECT * FROM events WHERE id = " . $event_id);
    if ($query_run && mysqli_num_rows($query_run) > 0) {
        $event = mysqli_fetch_assoc($query_run);
    }
}

if (!$event) {
    ob_end_clean();
    header("Location: index.php");
    exit;
}
?>

<!doctype html>
<html lang="en">

<head>
    <?php include 'includes/head.php'; ?>
    <style>
    /* Custom styles for the event details page */
    .event-details-header {
        margin-bottom: 30px;
        text-align: center;
    }

    .event-details-header h3 {
        font-size: 36px;
        font-weight: bold;
        color: #333;
        margin-bottom: 10px;
    }

    .event-details-header .event-date {
        font-size: 16px;
        color: #777;
    }

    .event-img img {
        width: 100%;
        height: auto;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .event-content {
        padding: 30px;
        background-color: #f9f9f9;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .event-content p {
        font-size: 18px;
        line-height: 1.6;
        color: #555;
    }

    .section-padding {
        padding: 80px 0;
    }

    .btn-register {
        background-color: #f27420;
        color: #fff;
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
        font-weight: bold;
    }

    .btn-register:hover {
        background-color: #e2631c;
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

    .slider-area2 {
        background-image: url('images/<?php echo $event['photo']; ?>');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        width: 100%;
        height: 500px;
    }

    #row {
        width: 100%;
    }

    .blog_details_area {
        width: 100%;
    }

    #t-wite {
        -webkit-text-stroke: .5px #ffff;
    }
    </style>
    <link rel="stylesheet" href="slums.css">
</head>

<body>
    <!--? Preloader Start -->
    <?php include 'includes/preloader.php'; ?>
    <!-- Preloader Start -->

    <header>
        <?php include 'includes/navbar.php'; ?>
    </header>

    <main>
        <!-- Hero Section for Event -->
        <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 pt-70 text-center" id="t-wite">
                                <h2></h2>
                                <h2 id="text-color-n"><a href="index.php">Home</a><span
                                        class="underline">/<?php echo $event['name']; ?></span> </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Event Content Start -->
        <section class="event_details_area section-padding">
            <div class="container">
                <div class="row">
                    <div class="" id="row">
                        <div class="event-details-header">
                            <div class="event-img">

                            </div>
                            <h3></h3>
                            <div class="event-date">
                                <span><?php echo $event['event_date']; ?> | <?php echo $event['event_time']; ?></span>
                            </div>
                        </div>
                        <div class="event-content">
                            <p><?php echo nl2br($event['description']); ?></p>
                            <a href="register.php?event_id=<?php echo $event['id']; ?>" class="btn-register">Register
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Event Content End -->
    </main>

    <?php include 'includes/footer.php'; ?>
    <!-- JS here -->
    <?php include 'includes/script.php'; ?>
</body>

</html>
