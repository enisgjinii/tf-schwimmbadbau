<?php include 'api/get_services.php'; ?>
<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="utf-8" />
  <title>Leistungen</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="keywords" />
  <meta content="" name="description" />
  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon" />
  <link href="https://api.fontshare.com/v2/css?f[]=general-sans@400&display=swap" rel="stylesheet">
  <!-- Icon Font Stylesheet -->
  <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css">
  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.4.2/uicons-regular-rounded/css/uicons-regular-rounded.css'>
  <!-- Libraries Stylesheet -->
  <link href="lib/animate/animate.min.css" rel="stylesheet" />
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" />
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
  <style>
    .service-card {
      border-radius: 15px;
      transition: transform 0.3s;
    }

    .service-card:hover {
      transform: scale(1.05);
    }

    .service-icon {
      font-size: 50px;
      color: #80b1d9;
      transition: color 0.3s;
    }

    .service-card:hover .service-icon {
      color: #80b1d9;
    }
  </style>
</head>

<body>
  <?php
  $partials = ['spinner', 'toopbar', 'navbar'];
  foreach ($partials as $partial) {
    include "partials/$partial.php";
  }
  ?>
  <!-- Page Header Start -->
  <div class="container-fluid header-bg py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
      <h1 class="display-4 text-white mb-3 animated slideInDown">Leistungen</h1>
      <nav aria-label="breadcrumb animated slideInDown">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item">
            <a class="text-white" href="#">Startseite</a>
          </li>
          <li class="breadcrumb-item text-primary active" aria-current="page">
            Leistungen
          </li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- Page Header End -->
  <!-- Services Section -->
  <section class="py-5">
    <div class="container">
      <div class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="text-primary text-uppercase mb-2">Unsere Leistungen</h6>
        <h1 class="display-5 mb-4">Wir gestalten Ihren Garten mit Leidenschaft</h1>
        <p class="lead">Entdecken Sie unsere vielfältigen Leistungen für die perfekte Gartengestaltung</p>
      </div>
      <div class="row g-4">
        <?php foreach ($services as $service) : ?>
          <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="<?php echo $service['delay']; ?>">
            <div class="card service-card text-center bg-light shadow-none">
              <div class="card-body">
                <i class="fi <?php echo $service['icon']; ?> service-icon mb-3"></i>
                <h5 class="card-title"><?php echo $service['title']; ?></h5>
                <p class="card-text"><?php echo $service['description']; ?></p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <?php include 'partials/footer.php'; ?>
  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fi fi-rr-arrow-up"></i></a>
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