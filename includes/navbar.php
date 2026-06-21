<?php
// Include the mysqli database connection file using absolute path to avoid conflicts
require_once __DIR__ . '/connection.php';

// Fetch latest Projects (from blog table) - use $nav_row (not $row) to avoid overwriting page-level variables
$navProjects = [];
if ($connection) {
    $projQuery = mysqli_query($connection, "SELECT id, name FROM blog ORDER BY id DESC LIMIT 5");
    if ($projQuery) {
        while ($nav_row = mysqli_fetch_assoc($projQuery)) {
            $navProjects[] = $nav_row;
        }
    }
}
?>

<style>
/* ==========================================================================
   ALMOND VALLEY NAVBAR (Restored Height, Non-Sticky)
   ========================================================================== */
.brz-header-wrapper {
    background: var(--navy);
    position: relative;
    z-index: 1030;
    width: 100%;
    box-shadow: 0 4px 20px rgba(0,0,0,0.2);
}

.brz-header-container {
    position: relative;
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 20px;
}

/* LOGO TAB (Restored to 140px height) */
.brz-logo-tab {
    position: absolute;
    top: 0;
    left: 20px;
    width: 220px;
    height: 140px;
    background: var(--off-white);
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    z-index: 100;
}

.brz-logo-tab img {
    max-width: 100%;
    max-height: 65px; 
}

/* TOP BAR */
.brz-top-bar {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    height: 45px;
    border-bottom: 1px solid rgba(255,255,255,0.08);
    padding-left: 240px; /* Space for logo tab */
}
.brz-top-bar-inner {
    display: flex;
    justify-content: space-between;
    width: 100%;
    font-family: var(--font-body);
    font-size: 0.8rem;
    font-weight: 700;
    text-transform: uppercase;
}
.brz-top-notice { color: var(--orange); letter-spacing: 0.05em; }
.brz-top-links a { color: var(--white); margin-left: 30px; text-decoration: none; transition: color 0.3s; }
.brz-top-links a:hover { color: var(--yellow); }

/* MAIN NAVIGATION */
.brz-main-nav { padding: 0; }
.brz-main-nav .navbar-nav { display: flex; align-items: center; width: 100%; }

.brz-main-nav .nav-link {
    font-family: var(--font-heading);
    font-size: 1.25rem;
    color: var(--white) !important;
    padding: 10px 18px !important;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    display: flex;
    align-items: center;
    transition: color 0.3s;
}
.brz-main-nav .nav-link i { font-size: 0.8rem; margin-left: 8px; color: var(--white); opacity: 0.7; transition: transform 0.3s, color 0.3s; }
.brz-main-nav .nav-link:hover { color: var(--yellow) !important; }
.brz-main-nav .nav-link:hover i { color: var(--yellow); }

/* Standard Dropdown Submenu (Fixed to open on hover) */
.dropdown:hover > .dropdown-menu {
    display: block;
    opacity: 1;
    visibility: visible;
}

.dropdown-menu {
    display: none; /* Controlled by hover */
    border-radius: 4px;
    border: none;
    box-shadow: 0 10px 30px rgba(0,0,0,0.4);
    background: rgba(11, 25, 44, 0.95); /* Dark transparent Navy */
    backdrop-filter: blur(5px);
    border-top: 4px solid var(--orange);
    margin-top: 0;
    padding: 15px 0;
    position: absolute;
    top: 100%;
    left: 0;
}

.dropdown-item {
    font-family: var(--font-body);
    font-size: 0.95rem;
    font-weight: 600;
    text-transform: capitalize;
    padding: 12px 25px;
    color: var(--orange); 
    letter-spacing: 0.03em;
    transition: background 0.3s, color 0.3s, padding-left 0.3s;
}
.dropdown-item:hover {
    background: rgba(255,255,255,0.05);
    color: var(--yellow);
    padding-left: 30px; 
}

/* MEGA MENU TEMPLATE */
.brz-mega-menu { position: static !important; }
.brz-mega-dropdown {
    position: absolute;
    top: 100%;
    left: 0;
    right: 0;
    width: 100%;
    background: var(--navy);
    border: none;
    border-top: 3px solid var(--orange);
    border-radius: 0;
    box-shadow: 0 20px 50px rgba(0,0,0,0.4);
    padding: 0;
    margin: 0;
    opacity: 0;
    visibility: hidden;
    transform: translateY(15px);
    transition: all 0.3s ease;
    display: block; 
}
.brz-mega-menu:hover .brz-mega-dropdown,
.brz-mega-menu.show .brz-mega-dropdown {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}

.mega-menu-wrapper { display: flex; width: 100%; min-height: 350px; }
.mega-menu-sidebar {
    background: rgba(0,0,0,0.2);
    width: 250px;
    padding: 30px 0;
    flex-shrink: 0;
}
.mega-menu-sidebar h5 {
    color: var(--orange);
    font-family: var(--font-heading);
    padding: 0 30px;
    margin-bottom: 20px;
    font-size: 1.3rem;
    letter-spacing: 0.1em;
}
.mega-menu-sidebar ul { list-style: none; padding: 0; margin: 0; }
.mega-menu-sidebar ul li a {
    color: rgba(255,255,255,0.8);
    font-family: var(--font-heading);
    font-size: 1.1rem;
    letter-spacing: 0.05em;
    text-transform: uppercase;
    display: block;
    padding: 10px 30px;
    transition: all 0.3s;
    border-left: 3px solid transparent;
}
.mega-menu-sidebar ul li a:hover {
    color: var(--white);
    background: rgba(255,255,255,0.05);
    border-left-color: var(--orange);
}

.mega-menu-content {
    flex: 1;
    padding: 40px 50px;
    background: var(--navy);
}
.mega-col h5 {
    font-family: var(--font-heading);
    color: var(--yellow);
    font-size: 1.3rem;
    letter-spacing: 0.08em;
    margin-bottom: 25px;
    text-transform: uppercase;
    border-bottom: 1px solid rgba(255,255,255,0.1);
    padding-bottom: 10px;
}
.mega-col ul { list-style: none; padding: 0; margin: 0; }
.mega-col ul li { margin-bottom: 12px; }
.mega-col ul li a {
    color: rgba(255,255,255,0.9);
    font-family: var(--font-body);
    font-size: 0.85rem;
    font-weight: 500;
    text-transform: uppercase;
    transition: color 0.2s;
}
.mega-col ul li a:hover { color: var(--orange); text-decoration: none; }

/* CTA BUTTON */
.brz-nav-cta { margin-left: auto; height: 100%; display: flex; align-items: center; }
.brz-donate-btn {
    background: var(--orange);
    color: var(--white) !important;
    font-family: var(--font-heading);
    font-size: 1.25rem;
    padding: 12px 35px;
    text-transform: uppercase;
    border-radius: 4px;
    transition: background 0.3s, transform 0.2s;
    text-decoration: none;
    letter-spacing: 0.05em;
}
.brz-donate-btn:hover { background: var(--yellow); color: var(--navy) !important; transform: translateY(-2px); }

/* Desktop Alignment */
@media (min-width: 992px) {
    .brz-main-nav { padding-left: 250px; height: 80px; } /* Restored to 80px */
}

/* Mobile Adjustments */
@media (max-width: 991px) {
    .brz-logo-tab { display: none; }
    .brz-top-bar { display: none; }
    .brz-main-nav { padding: 10px 15px; height: auto; flex-wrap: wrap; }
    .navbar-collapse { background: rgba(0,0,0,0.2); padding: 20px; border-radius: 8px; margin-top: 15px; }
    .brz-nav-cta { margin-left: 0; margin-top: 20px; width: 100%; }
    .brz-donate-btn { width: 100%; text-align: center; padding: 15px; }
    .brz-mega-dropdown, .dropdown-menu { position: static; display: none; opacity: 1; visibility: visible; transform: none; box-shadow: none; border: none; }
    .brz-mega-menu.show .brz-mega-dropdown, .dropdown.show > .dropdown-menu { display: block; }
    .mega-menu-wrapper { flex-direction: column; }
    .mega-menu-sidebar { width: 100%; padding: 20px; }
    .mega-menu-content { padding: 20px; }
    .mega-col { margin-bottom: 20px; }
}
</style>

<!-- ========================
     ALMOND VALLEY STYLE NAVBAR
     ======================== -->
<header class="brz-header-wrapper" id="brz-header">
    
    <!-- Mobile Header (Logo + Toggle) -->
    <div class="d-flex justify-content-between align-items-center w-100 d-lg-none px-4 py-3">
        <a href="index.php">
            <img src="assets/img/logo/logo.png" alt="Barrizi Logo" style="height:45px; width:auto; filter: brightness(0) invert(1);">
        </a>
        <button class="navbar-toggler border-0 p-0" type="button" data-toggle="collapse" data-target="#brzNavMenu">
            <span style="display:flex; flex-direction:column; gap:6px; padding:8px; background:rgba(255,255,255,0.1); border-radius:4px;">
                <span style="display:block; width:25px; height:3px; background:var(--white);"></span>
                <span style="display:block; width:25px; height:3px; background:var(--white);"></span>
                <span style="display:block; width:18px; height:3px; background:var(--white);"></span>
            </span>
        </button>
    </div>

    <!-- Desktop Top Bar & Logo Tab -->
    <div class="brz-header-container d-none d-lg-block">
        <!-- Hanging Logo Tab -->
        <div class="brz-logo-tab">
            <a href="index.php">
                <img src="assets/img/logo/logo.png" alt="Barrizi Logo">
            </a>
        </div>

        <!-- Top Thin Bar -->
        <div class="brz-top-bar">
            <div class="brz-top-bar-inner">
                <div class="brz-top-socials" style="display:flex; gap:15px; font-size:1.1rem;">
                    <a href="https://www.facebook.com/profile.php?id=61572862911559" target="_blank" style="color:var(--orange); transition:color 0.3s;"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.linkedin.com/company/barrizi-organization-kenya/" target="_blank" style="color:var(--orange); transition:color 0.3s;"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="brz-top-links">
                    <a href="projects.php">Projects</a>
                    <a href="blog.php">News</a>
                    <a href="contact.php">Contact</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navigation Menu -->
    <div class="brz-header-container">
        <nav class="navbar navbar-expand-lg brz-main-nav">
            <div class="collapse navbar-collapse w-100" id="brzNavMenu">
                
                <ul class="navbar-nav mx-auto">
                    
                    <!-- 1. ABOUT US (Dropdown) -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="about.php">About</a>
                        <div class="dropdown-menu" style="min-width:220px; padding:10px 0; border-top:3px solid var(--orange); border-radius:0;">
                            <a class="dropdown-item" href="about.php"><i class="fas fa-info-circle mr-2" style="color:var(--orange);"></i> About Barrizi</a>
                            <a class="dropdown-item" href="about.php#team"><i class="fas fa-users mr-2" style="color:var(--orange);"></i> Our Team</a>
                            <a class="dropdown-item" href="about.php#mission"><i class="fas fa-bullseye mr-2" style="color:var(--orange);"></i> Mission &amp; Vision</a>
                            <a class="dropdown-item" href="how-we-work.php"><i class="fas fa-cogs mr-2" style="color:var(--orange);"></i> How We Work</a>
                            <a class="dropdown-item" href="impact.php"><i class="fas fa-chart-bar mr-2" style="color:var(--orange);"></i> Our Impact</a>
                            <a class="dropdown-item" href="transparency.php"><i class="fas fa-file-alt mr-2" style="color:var(--orange);"></i> Transparency</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="faq.php"><i class="fas fa-question-circle mr-2" style="color:var(--orange);"></i> FAQ</a>
                            <a class="dropdown-item" href="safeguarding.php"><i class="fas fa-shield-alt mr-2" style="color:var(--orange);"></i> Safeguarding</a>
                        </div>
                    </li>

                    <!-- 2. PROGRAMS (Mega Menu Template) -->
                    <li class="nav-item dropdown brz-mega-menu">
                        <a class="nav-link dropdown-toggle" href="program.php">
                            Programs
                        </a>
                        <div class="dropdown-menu brz-mega-dropdown">
                            <div class="mega-menu-wrapper">
                                <!-- Dynamic Section for Programs -->
                                <div class="mega-menu-sidebar">
                                    <h5>Our Programs</h5>
                                    <ul>
                                        <li><a href="program.php">All Programs</a></li>
                                        <li><a href="education.php">Education Support</a></li>
                                        <li><a href="junior.php">Junior Secondary</a></li>
                                        <li><a href="holiday.php">Holiday Programs</a></li>
                                        <li><a href="vocational.php">Vocational Training</a></li>
                                        <li><a href="mothers.php">Mentorship Programs</a></li>
                                        <li><a href="community.php">Women's Rights</a></li>
                                    </ul>
                                </div>
                                <!-- Reusable Shortcuts -->
                                <div class="mega-menu-content">
                                    <div class="row">
                                        <div class="col-md-4 mega-col">
                                            <h5>Get Involved</h5>
                                            <ul>
                                                <li><a href="volunteer.php">Volunteer with us</a></li>
                                                <li><a href="adopt.php">Sponsor a Child</a></li>
                                                <li><a href="donation.php">Make a Donation</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4 mega-col">
                                            <h5>Impact & Stories</h5>
                                            <ul>
                                                <li><a href="impact.php">Our Impact</a></li>
                                                <li><a href="blog.php">Success Stories</a></li>
                                                <li><a href="how-we-work.php">How We Work</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4 mega-col">
                                            <h5>Accountability</h5>
                                            <ul>
                                                <li><a href="transparency.php">Transparency</a></li>
                                                <li><a href="safeguarding.php">Safeguarding</a></li>
                                                <li><a href="faq.php">FAQ</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- 3. PROJECTS (Mega Menu Template) -->
                    <li class="nav-item dropdown brz-mega-menu">
                        <a class="nav-link dropdown-toggle" href="projects.php">
                            Projects
                        </a>
                        <div class="dropdown-menu brz-mega-dropdown">
                            <div class="mega-menu-wrapper">
                                <!-- Dynamic Section for Projects -->
                                <div class="mega-menu-sidebar">
                                    <h5>Our Projects</h5>
                                    <ul>
                                        <li><a href="projects.php">All Projects</a></li>
                                        <?php foreach ($navProjects as $proj): ?>
                                        <li><a href="project_details.php?id=<?php echo $proj['id']; ?>"><?php echo htmlspecialchars($proj['name']); ?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                                <!-- Reusable Shortcuts (Same as Programs) -->
                                <div class="mega-menu-content">
                                    <div class="row">
                                        <div class="col-md-4 mega-col">
                                            <h5>Get Involved</h5>
                                            <ul>
                                                <li><a href="volunteer.php">Volunteer with us</a></li>
                                                <li><a href="adopt.php">Sponsor a Child</a></li>
                                                <li><a href="donation.php">Make a Donation</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4 mega-col">
                                            <h5>Impact & Stories</h5>
                                            <ul>
                                                <li><a href="impact.php">Our Impact</a></li>
                                                <li><a href="blog.php">Success Stories</a></li>
                                                <li><a href="how-we-work.php">How We Work</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4 mega-col">
                                            <h5>Accountability</h5>
                                            <ul>
                                                <li><a href="transparency.php">Transparency</a></li>
                                                <li><a href="safeguarding.php">Safeguarding</a></li>
                                                <li><a href="faq.php">FAQ</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="gallery.php">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    
                </ul>
                
                <div class="brz-nav-cta d-none d-lg-flex">
                    <a href="donation.php" class="brz-donate-btn">DONATE NOW</a>
                </div>
                
                <div class="brz-nav-cta d-lg-none">
                    <a href="donation.php" class="brz-donate-btn w-100 text-center">DONATE NOW</a>
                </div>
                
            </div>
        </nav>
    </div>
</header>