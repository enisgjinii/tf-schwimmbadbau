<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="utf-8" />
  <title></title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="keywords" />
  <meta content="" name="description" />
  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon" />
  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
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
</head>

<body>
  <?php include 'partials/spinner.php'; ?>
  <?php include 'partials/toopbar.php'; ?>
  <?php include 'partials/navbar.php'; ?>
  <!-- Page Header Start -->
  <div class="container-fluid header-bg py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
      <h1 class="display-4 text-white mb-3 animated slideInDown">Über Uns</h1>
      <nav aria-label="breadcrumb animated slideInDown">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item">
            <a class="text-white" href="#">Startseite</a>
          </li>
          <li class="breadcrumb-item text-primary active" aria-current="page">
            Über Uns
          </li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- Page Header End -->
  <!-- About Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
          <p><span class="text-primary me-2">#</span>Willkommen bei TF-Schwimmbadbau/Gartenbau</p>
          <h1 class="display-5 mb-4">
            Warum Sie mit
            <br>
            <span class="text-primary display-6">TF-Schwimmbadbau/Gartenbau</span>
          </h1>
          <p class="mb-4">
            Wir bieten Ihnen eine Komplettlösung für Ihren Traumpool, damit Sie Urlaubsgefühle zu Hause erleben können - alles aus einer Hand.
            Wir sind spezialisiert auf individuelle und hochwertige Lösungen für Ihren Garten.
          </p>
          <?php
          // Array of services to display
          $services = array(
            'Konzept, Planung, Designzeichnungen',
            'Angebotsvorbereitung und Visualisierung in 3D',
            'Pflasterarbeiten aller Art',
            'Schwimmbäder',
            'Treppen und Natursteinmauern',
            'Terrassengestaltung aus Stein/Holz',
            'Hochbeete, Sichtschutzelemente',
            'Wasserspiele',
            'Hauseingangsstufen',
            'Abbruch- und Erdbewegungsarbeiten',
            'Zäune und Tore'
          );
          // Output each service as a list item
          foreach ($services as $service) {
            echo '<h5 class="mb-3">';
            echo '<i class="far fa-check-circle text-primary me-3"></i>' . $service;
            echo '</h5>';
          }
          ?>
          <a class="btn btn-primary py-3 px-5 mt-3" href="#">Mehr Erfahren</a>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="img-border">
            <img class="img-fluid" src="img/about.jpg" alt="Über TF-Schwimmbadbau/Gartenbau" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- About End -->
  <!-- Facts Start -->
  <div class="container-fluid bg-primary facts my-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="row g-4">
      <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
        <i class="fa fa-swimming-pool fa-3x text-primary mb-3"></i>
        <h1 class="text-white mb-2" data-toggle="counter-up">5678</h1>
        <p class="text-white mb-0">Eingebaute Pools</p>
      </div>
      <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
        <i class="fa fa-smile fa-3x text-primary mb-3"></i>
        <h1 class="text-white mb-2" data-toggle="counter-up">9876</h1>
        <p class="text-white mb-0">Zufriedene Kunden</p>
      </div>
      <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
        <i class="fa fa-certificate fa-3x text-primary mb-3"></i>
        <h1 class="text-white mb-2" data-toggle="counter-up">5432</h1>
        <p class="text-white mb-0">Auszeichnungen Gewonnen</p>
      </div>
      <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
        <i class="fa fa-globe fa-3x text-primary mb-3"></i>
        <h1 class="text-white mb-2" data-toggle="counter-up">8765</h1>
        <p class="text-white mb-0">Länder Bedient</p>
      </div>
    </div>
  </div>
  <!-- Facts End -->
  <?php include 'partials/team.php'; ?>
  <?php include 'partials/footer.php'; ?>
  <!-- Zurück nach oben Button -->
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