<?php include 'api/get_work_gallery.php'; ?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8" />
    <title>Portfolio - <?= htmlspecialchars($item['title']) ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />
    <link href="https://api.fontshare.com/v2/css?f[]=general-sans@400&display=swap" rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
    <style>
        .carousel-item img {
            width: 100%;
            height: 500px;
            /* Adjust height as needed */
            object-fit: cover;
        }
    </style>
    <?php include 'msc.php'; ?>
</head>
<body>
    <?php
    $partials = ['spinner', 'toopbar', 'navbar'];
    foreach ($partials as $partial) {
        include "partials/$partial.php";
    }
    ?>
    <div class="container-fluid header-bg py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-4 text-white mb-3 animated slideInDown">Portfolio</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Startseite</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="portfolio.php">Portfolio</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page"><?= htmlspecialchars($item['title']) ?></li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-12">
                    <!-- Carousel for Images -->
                    <div id="portfolioCarousel" class="carousel slide " data-bs-ride="carousel" data-bs-interval="3000" ">
                        <div class=" carousel-inner shadow" style="border-radius: 16px">
                        <?php foreach ($item['images'] as $index => $image) : ?>
                            <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                                <img src="img/portfolio-images-nested/<?= htmlspecialchars($image) ?>" alt="<?= htmlspecialchars($item['title']) ?>" class="d-block w-100 img-fluid" style="object-fit: cover;">
                                <div class="carousel-caption d-none d-md-block" style="background: rgba(255, 255, 255, 0.2);
border-radius: 16px;
box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
backdrop-filter: blur(50px);
-webkit-backdrop-filter: blur(5px);
border: 1px solid rgba(255, 255, 255, 0.3);">
                                    <h5 class="text-white"><?= htmlspecialchars($item['title']) ?></h5>
                                    <p><?= htmlspecialchars($item['description']) ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <a class="carousel-control-prev" href="#portfolioCarousel" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#portfolioCarousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                    <ol class="carousel-indicators">
                        <?php foreach ($item['images'] as $index => $image) : ?>
                            <li data-bs-target="#portfolioCarousel" data-bs-slide-to="<?= $index ?>" class="<?= $index === 0 ? 'active' : '' ?>"></li>
                        <?php endforeach; ?>
                    </ol>
                </div>
                <!-- Portfolio Details -->
                <div class="text-center">
                    <h2 class="mt-4"><?= htmlspecialchars($item['title']) ?></h2>
                    <p><?= htmlspecialchars($item['description']) ?></p>
                    <div><?= $item['full_description'] ?></div>
                    <br>
                    <?php if ($id == 3) : ?>
                        <button class="btn btn-primary my-2" style="border-radius:5px;" onclick="window.location.href='bildergalerie.php';">Bautagebuch mit Bildern</button>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php include 'partials/footer.php'; ?>
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>