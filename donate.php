<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1, user-scalable=no">
    <title>Donate | Barrizi Organisation</title>
    <?php include 'includes/head.php'; ?>
    <script src="https://js.paystack.co/v1/inline.js"></script>
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
            background-image: url('assets/img/hero/back5.png');
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

        /* Form Styling */
        .brz-donate-form-wrap {
            background: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
            border-top: 5px solid var(--orange);
            margin-bottom: 30px;
        }

        .brz-donate-form-wrap h2 {
            font-family: var(--font-heading);
            font-size: 2.5rem;
            color: var(--purple);
            margin-bottom: 25px;
            text-align: center;
        }

        .brz-form-group {
            margin-bottom: 20px;
        }

        .brz-form-control {
            width: 100%;
            padding: 15px;
            border: 2px solid #eee;
            border-radius: 4px;
            font-size: 1rem;
            transition: border-color 0.3s;
        }

        .brz-form-control:focus {
            outline: none;
            border-color: var(--orange);
        }

        .brz-toggle-btn {
            background: var(--navy);
            color: var(--white);
            border: none;
            padding: 12px 25px;
            font-family: var(--font-heading);
            font-size: 1.2rem;
            border-radius: 4px;
            letter-spacing: 0.05em;
            margin-bottom: 20px;
            display: inline-block;
        }

        .divider-text {
            text-align: center;
            font-family: var(--font-heading);
            font-size: 1.5rem;
            color: var(--navy);
            margin: 40px 0;
            position: relative;
        }

        .divider-text::before,
        .divider-text::after {
            content: '';
            position: absolute;
            top: 50%;
            width: 40%;
            height: 2px;
            background: #ddd;
        }

        .divider-text::before {
            left: 0;
        }

        .divider-text::after {
            right: 0;
        }
    </style>
</head>

<body>
    <?php include 'includes/navbar.php'; ?>
    <?php include 'includes/preloader.php'; ?>

    <?php include 'includes/sidebar.php'; ?>
    <main>
        <!-- Page Header -->
        <section class="brz-page-header">
            <div class="container brz-page-header__content">
                <h1 class="brz-page-header__title brz-observe slide-up">MAKE A <span
                        style="color:var(--orange);">DONATION</span></h1>
                <div class="brz-page-header__breadcrumb brz-observe slide-up anim-delay-1">
                    <a href="index.php">Home</a> / Donate
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

        <!-- Forms Section -->
        <section style="padding: 90px 0; background: var(--off-white);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">

                        <!-- Regular Donation -->
                        <div class="brz-donate-form-wrap brz-observe slide-up">
                            <h2>REGULAR DONATION</h2>
                            <button type="button" class="brz-toggle-btn">Standard Form</button>

                            <form id="donationForm" onsubmit="payWithPaystack(event)">
                                <div class="row">
                                    <div class="col-md-6 brz-form-group">
                                        <input class="brz-form-control" name="first-name" id="first-name" type="text"
                                            placeholder="First Name" required />
                                    </div>
                                    <div class="col-md-6 brz-form-group">
                                        <input class="brz-form-control" name="last-name" id="last-name" type="text"
                                            placeholder="Last Name" required />
                                    </div>
                                </div>
                                <div class="brz-form-group">
                                    <input class="brz-form-control" name="email" id="email" type="email"
                                        placeholder="Email Address" required />
                                </div>
                                <div class="brz-form-group">
                                    <input class="brz-form-control" name="amount" id="amount" type="number"
                                        placeholder="Enter Amount (KES)" required />
                                </div>

                                <input type="hidden" name="p-id" id="p-id" value="12345" />
                                <input type="hidden" name="donation_type" id="donation_type" value="Normal Donation" />

                                <button type="submit" class="brz-btn brz-btn-orange w-100 mt-3 text-center"
                                    style="font-size: 1.2rem; padding: 15px;">PROCEED TO PAYMENT</button>
                            </form>
                        </div>

                        <div class="divider-text brz-observe slide-up">OR</div>

                        <!-- Anonymous Donation -->
                        <div class="brz-donate-form-wrap brz-observe slide-up" style="border-top-color: var(--purple);">
                            <h2 style="color:var(--orange);">ANONYMOUS DONATION</h2>
                            <button type="button" class="brz-toggle-btn" style="background:var(--purple);">Quick
                                Donate</button>

                            <form id="anonDonationForm" onsubmit="payWithPaystack1(event)">
                                <div class="brz-form-group">
                                    <input class="brz-form-control" name="amount" id="anon-amount" type="number"
                                        placeholder="Enter Amount (KES)" required />
                                </div>

                                <input type="hidden" name="p-id" id="anon-p-id" value="12345" />
                                <input type="hidden" name="donation_type" id="anon-donation-type"
                                    value="Anonymous Donation" />

                                <button type="submit" class="brz-btn brz-btn-purple w-100 mt-3 text-center"
                                    style="font-size: 1.2rem; padding: 15px;">PROCEED ANONYMOUSLY</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- Partnerships Section -->
        <section id="partnerships" style="background:var(--off-white); padding:90px 0;">
            <div class="container">
                <div class="row justify-content-center text-center mb-5">
                    <div class="col-lg-8 brz-observe slide-up">
                        <span class="brz-section-label label-purple">Get Involved</span>
                        <h2 class="section-title-purple">PARTNER WITH US</h2>
                        <div class="divider-orange mx-auto"></div>
                        <p style="color:#555; margin-top:20px; font-size:1.05rem; line-height:1.7;">
                            At Barrizi Organisation Kenya, we believe transformation is a shared responsibility. Whether
                            you are a business, a foundation, a government body, or a fellow NGO, there are meaningful
                            ways to partner with us and amplify our impact in Dandora.
                        </p>
                    </div>
                </div>

                <div class="row brz-observe slide-up">
                    <!-- Corporate Partnership -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div
                            style="background:#fff; border-radius:12px; padding:36px 28px; height:100%; box-shadow:0 8px 30px rgba(0,0,0,0.06); border-top:4px solid var(--orange); display:flex; flex-direction:column;">
                            <div
                                style="width:60px; height:60px; border-radius:50%; background:rgba(243,112,33,0.1); color:var(--orange); font-size:1.5rem; display:flex; align-items:center; justify-content:center; margin-bottom:20px;">
                                <i class="fas fa-building"></i>
                            </div>
                            <h3
                                style="font-family:var(--font-heading); font-size:1.5rem; color:var(--navy); text-transform:uppercase; margin-bottom:14px;">
                                Corporate CSR</h3>
                            <p style="color:#666; font-size:0.95rem; line-height:1.7; flex-grow:1;">Align your company's
                                social responsibility goals with Barrizi's programmes. We welcome corporate sponsors for
                                our feeding programme, school sponsorship, and vocational training. We can provide
                                branded visibility, employee volunteering days, and detailed impact reports.</p>
                            <a href="contact.php" class="brz-btn brz-btn-orange mt-4"
                                style="align-self:flex-start; font-size:0.9rem; padding:10px 22px;">ENQUIRE NOW</a>
                        </div>
                    </div>

                    <!-- NGO / Civil Society Partnership -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div
                            style="background:#fff; border-radius:12px; padding:36px 28px; height:100%; box-shadow:0 8px 30px rgba(0,0,0,0.06); border-top:4px solid var(--purple); display:flex; flex-direction:column;">
                            <div
                                style="width:60px; height:60px; border-radius:50%; background:rgba(74,21,75,0.08); color:var(--purple); font-size:1.5rem; display:flex; align-items:center; justify-content:center; margin-bottom:20px;">
                                <i class="fas fa-handshake"></i>
                            </div>
                            <h3
                                style="font-family:var(--font-heading); font-size:1.5rem; color:var(--navy); text-transform:uppercase; margin-bottom:14px;">
                                NGO &amp; Civil Society</h3>
                            <p style="color:#666; font-size:0.95rem; line-height:1.7; flex-grow:1;">We are always open
                                to strategic alliances with like-minded organisations. From joint programme delivery and
                                referral networks to shared advocacy and resource pooling we believe collaboration
                                multiplies impact. We are currently partnering with KAACR and Footsteps Kenya.</p>
                            <a href="contact.php" class="brz-btn mt-4"
                                style="align-self:flex-start; background:var(--purple); color:#fff; font-size:0.9rem; padding:10px 22px;">LET'S
                                COLLABORATE</a>
                        </div>
                    </div>

                    <!-- Institutional / Donor Partnership -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div
                            style="background:#fff; border-radius:12px; padding:36px 28px; height:100%; box-shadow:0 8px 30px rgba(0,0,0,0.06); border-top:4px solid var(--yellow); display:flex; flex-direction:column;">
                            <div
                                style="width:60px; height:60px; border-radius:50%; background:rgba(255,193,7,0.12); color:#b07d00; font-size:1.5rem; display:flex; align-items:center; justify-content:center; margin-bottom:20px;">
                                <i class="fas fa-landmark"></i>
                            </div>
                            <h3
                                style="font-family:var(--font-heading); font-size:1.5rem; color:var(--navy); text-transform:uppercase; margin-bottom:14px;">
                                Trusts &amp; Foundations</h3>
                            <p style="color:#666; font-size:0.95rem; line-height:1.7; flex-grow:1;">We welcome
                                applications from international and local trusts, foundations, and grant-making bodies.
                                Barrizi is a duly registered NGO (registered August 2024) with documented programmes,
                                community presence, and a committed board. We can provide full due diligence
                                documentation on request.</p>
                            <a href="contact.php" class="brz-btn mt-4"
                                style="align-self:flex-start; background:var(--navy); color:#fff; font-size:0.9rem; padding:10px 22px;">REQUEST
                                A CALL</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Brush Stroke Divider -->
        <div class="brz-svg-divider" style="background:var(--off-white);">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60" preserveAspectRatio="none"
                style="display:block;width:100%;height:60px;">
                <path fill="#FFC107"
                    d="M0,20 C100,40 200,5 300,25 C400,45 500,10 600,30 C700,50 800,15 900,35 C1000,55 1100,20 1200,40 C1300,60 1380,25 1440,40 L1440,60 L0,60 Z" />
            </svg>
        </div>

        <!-- Direct CTA -->
        <section class="brz-cta-banner" style="background:var(--yellow); padding:80px 0; text-align:center;">
            <div class="container" style="position:relative; z-index:2;">
                <h2 class="brz-cta-banner__title brz-observe slide-up"
                    style="font-family:var(--font-heading); font-size:clamp(2rem, 5vw, 4rem); color:var(--navy);">
                    A PATHWAY OUT OF POVERTY. A FUTURE FULL OF HOPE.
                </h2>
            </div>
        </section>

    </main>

    <?php include 'includes/footer.php'; ?>

    <script>
        // Regular Donation
        function payWithPaystack(e) {
            e.preventDefault();
            const email = document.getElementById('email').value || 'anonymous@example.com';
            const amount = parseFloat(document.getElementById('amount').value) * 100; // kobo
            const firstName = document.getElementById('first-name').value || '';
            const lastName = document.getElementById('last-name').value || '';
            const donationType = document.getElementById('donation_type').value;
            const pId = document.getElementById('p-id').value;

            const urlParams = new URLSearchParams(window.location.search);
            const eventId = urlParams.get('event_id');

            let purposeValue = donationType;
            if (donationType === 'Normal Donation') {
                if (eventId) {
                    purposeValue = eventId;
                } else {
                    purposeValue = 'Regular Donation';
                }
            } else if (pId) {
                purposeValue = pId;
            }

            var handler = PaystackPop.setup({
                key: 'pk_live_7d91a5bde7c9c0c86f48f8b787e3c54df39e040e',
                email: email,
                amount: amount,
                currency: 'KES',
                metadata: {
                    custom_fields: [
                        { display_name: "Donor", variable_name: "donor", value: `${firstName} ${lastName}`.trim() },
                        { display_name: "Purpose", variable_name: "purpose", value: purposeValue }
                    ]
                },
                callback: function (response) {
                    setTimeout(function () { window.location.href = "success.php"; }, 1000);
                },
                onClose: function () { }
            });
            handler.openIframe();
        }

        // Anonymous Donation
        function payWithPaystack1(e) {
            e.preventDefault();
            const amount = parseFloat(document.getElementById('anon-amount').value) * 100;
            const donationType = document.getElementById('anon-donation-type').value;
            const pId = document.getElementById('anon-p-id').value;

            const urlParams = new URLSearchParams(window.location.search);
            const eventId = urlParams.get('event_id');

            let purposeValue = donationType;
            if (donationType === 'Anonymous Donation') {
                if (eventId) {
                    purposeValue = eventId;
                } else {
                    purposeValue = 'Regular Donation';
                }
            } else if (pId) {
                purposeValue = pId;
            }

            var handler = PaystackPop.setup({
                key: 'pk_live_7d91a5bde7c9c0c86f48f8b787e3c54df39e040e',
                email: 'anonymous@example.com',
                amount: amount,
                currency: 'KES',
                metadata: {
                    custom_fields: [
                        { display_name: "Donor", variable_name: "donor", value: "Anonymous" },
                        { display_name: "Purpose", variable_name: "purpose", value: purposeValue }
                    ]
                },
                callback: function (response) {
                    setTimeout(function () { window.location.href = "success.php"; }, 1000);
                },
                onClose: function () { }
            });
            handler.openIframe();
        }
    </script>

    <?php include 'includes/script.php'; ?>
</body>

</html>