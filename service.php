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
  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Quicksand:wght@600;700&display=swap" rel="stylesheet" />
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
      <h1 class="display-4 text-white mb-3 animated slideInDown">Leistungen</h1>
      <nav aria-label="breadcrumb animated slideInDown">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item">
            <a class="text-white" href="#">Home</a>
          </li>
          <li class="breadcrumb-item">
            <a class="text-white" href="#">Pages</a>
          </li>
          <li class="breadcrumb-item text-primary active" aria-current="page">
            Leistungen
          </li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- Page Header End -->

  <!-- Service Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="col-lg-6">
          <p><span class="text-primary me-2">#</span>Unsere Leistungen</p>
          <h1 class="display-5 mb-0">
            Spezielle Leistungen für
            <span class="text-primary">Ihren Garten</span>
          </h1>
        </div>
        <div class="col-lg-6">
          <div class="bg-primary h-100 d-flex align-items-center py-4 px-4 px-sm-5">
            <i class="fa fa-3x fa-mobile-alt text-white"></i>
            <div class="ms-4">
              <p class="text-white mb-0">Rufen Sie für mehr Informationen an</p>
              <h2 class="text-white mb-0">+49 9443 916 999-0</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="row gy-5 gx-4">
        <?php
        $services = [
          ["img" => "img/icon/gartenbau.png", "title" => "Gartenbau", "description" => "Individuelle Lösungen für Gartenanlagen, inklusive Hochbeeten, Sichtschutz und mehr."],
          ["img" => "img/icon/poolbau.png", "title" => "Poolbau", "description" => "Planung und Bau von Schwimmbädern, einschließlich Technikschächten und Poolumrandungen."],
          ["img" => "img/icon/terrassenbau.png", "title" => "Terrassenbau", "description" => "Holzterrassen aus hochwertigen Materialien, perfekt abgestimmt auf Ihren Garten."],
          ["img" => "img/icon/zaunbau.png", "title" => "Zaunbau", "description" => "Stabile und ästhetische Zaunanlagen, inklusive elektrischen Hoftoren."],
          ["img" => "img/icon/bepflanzung.png", "title" => "Bepflanzung", "description" => "Kreative Bepflanzungen für jeden Geschmack, inklusive Formschnitt und Kiesflächen."],
          ["img" => "img/icon/bewässerung.png", "title" => "Bewässerung", "description" => "Effiziente Bewässerungssysteme für eine optimale Gartenpflege."]
        ];

        foreach ($services as $service) {
          echo "
                    <div class='col-lg-3 col-md-4 col-sm-6 wow fadeInUp' data-wow-delay='0.1s'>
                        <img class='img-fluid mb-3' src='{$service['img']}' alt='Icon' />
                        <h5 class='mb-3'>{$service['title']}</h5>
                        <span>{$service['description']}</span>
                    </div>";
        }
        ?>
      </div>
    </div>
  </div>
  <!-- Service End -->

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