<?php
function isActive($page)
{
    $current_page = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    return strtolower($current_page) === strtolower($page) ? 'active' : '';
}

function isDropdownActive($pages)
{
    $current_page = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    return in_array(strtolower($current_page), array_map('strtolower', $pages)) ? 'active' : '';
}
?>

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-4 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
    <a href="index.php" class="navbar-brand p-0 d-flex align-items-center">
        <!-- <img class="img-fluid me-3" src="img/icon/icon-10.png" alt="Icon" /> -->
        <h5 class="m-0 text-primary">
            <span class="d-none d-md-inline">TF-Schwimmbadbau/Gartenbau</span>
            <span class="d-inline d-md-none">TF</span>
        </h5>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse py-4 py-lg-0" id="navbarCollapse">
        <div class="navbar-nav ms-auto">
            <a href="index.php" class="nav-item nav-link <?php echo isActive('index.php'); ?>">Home</a>
            <a href="about.php" class="nav-item nav-link <?php echo isActive('about.php'); ?>">Über uns</a>
            <!-- Portfolio -->
            <a href="portfolio.php" class="nav-item nav-link <?php echo isActive('portfolio.php'); ?>">Portfolio</a>
            <a href="service.php" class="nav-item nav-link <?php echo isActive('service.php'); ?>">Leistungen</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle <?php echo isDropdownActive(['team.php', 'membership.php', 'visiting.php', 'testimonial.php', '404.php']); ?>" data-bs-toggle="dropdown">Seiten</a>
                <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                    <a href="team.php" class="dropdown-item <?php echo isActive('team.php'); ?>">Unsere Tiere</a>
                    <a href="membership.php" class="dropdown-item <?php echo isActive('membership.php'); ?>">Mitgliedschaft</a>
                    <a href="visiting.php" class="dropdown-item <?php echo isActive('visiting.php'); ?>">Öffnungszeiten</a>
                    <a href="testimonial.php" class="dropdown-item <?php echo isActive('testimonial.php'); ?>">Referenzen</a>
                    <a href="404.php" class="dropdown-item <?php echo isActive('404.php'); ?>">404 Seite</a>
                </div>
            </div>
            <a href="contact.php" class="nav-item nav-link <?php echo isActive('contact.php'); ?>">Kontakt</a>
        </div>
        <a href="" class="btn btn-primary">Ticket kaufen<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>
<!-- Navbar End -->