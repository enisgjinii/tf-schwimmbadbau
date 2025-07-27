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
  <?php include 'msc.php'; ?>
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
      </div>
    </div>
  </div>
  <!-- About End -->
  <!-- Team Member Profile Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-5 align-items-center">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="position-relative">
            <img class="img-fluid rounded" src="img/team/fabian.jpg" alt="Thorsten Kreis - Geschäftsführer" />
            <!-- <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" style="background: rgba(0, 0, 0, 0.1); border-radius: 0.375rem;">
              <div class="text-center">
                <i class="fas fa-user-tie fa-3x text-white"></i>
              </div>
            </div> -->
          </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="ps-lg-4">
            <h1 class="display-6 text-primary mb-4 fw-bold">QUALITÄT DES LEBENS IN ALLEN BEREICHEN STEIGERN</h1>
            <p class="mb-4">
              Bei TF Schwimmbadbau setzen wir auf direkte Kommunikation, zielorientiertes und ehrliches Arbeiten.
              Unser Expertenteam garantiert Ihnen höchste Qualität bei jedem Projekt. Wir leben respektvollen Umgang,
              gelebten Teamgeist und Hilfsbereitschaft. Ein gutes Arbeitsklima sorgt für motivierte Mitarbeiter
              und langfristige Arbeitsfreude.
            </p>
            <div class="d-flex align-items-center mb-3">
              <button class="btn btn-outline-primary btn-sm me-2" type="button" data-bs-toggle="collapse" data-bs-target="#cvCollapse" aria-expanded="false" aria-controls="cvCollapse">
                <i class="fas fa-plus me-1"></i>Lebenslauf anzeigen
              </button>
            </div>
            <div class="collapse" id="cvCollapse">
              <div class="card card-body bg-light mb-3">
                <h6 class="text-primary mb-2">Beruflicher Werdegang</h6>
                <ul class="list-unstyled mb-0">
                  <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Über 15 Jahre Erfahrung im Poolbau</li>
                  <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Spezialisierung auf hochwertige Schwimmbadlösungen</li>
                  <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Zertifizierter Poolbauer und Gartenarchitekt</li>
                  <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Führungserfahrung in der Baubranche</li>
                </ul>
              </div>
            </div>
            <div class="border-start border-primary border-3 ps-3">
              <h4 class="fw-bold mb-1">THORSTEN KREIS</h4>
              <p class="text-muted mb-0">Dipl.-Ing.</p>
              <p class="text-muted mb-0">Geschäftsführer TF Schwimmbadbau</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Team Member Profile End -->
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
  <!-- SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- Template Javascript -->
  <script src="js/main.js"></script>
  <!--Start of Tawk.to Script-->
  <script type="text/javascript">
    var Tawk_API = Tawk_API || {},
      Tawk_LoadStart = new Date();
    (function() {
      var s1 = document.createElement("script"),
        s0 = document.getElementsByTagName("script")[0];
      s1.async = true;
      s1.src = 'https://embed.tawk.to/687ac93f487057192063ab77/1j0fq489v';
      s1.charset = 'UTF-8';
      s1.setAttribute('crossorigin', '*');
      s0.parentNode.insertBefore(s1, s0);
    })();
  </script>
  <!--End of Tawk.to Script-->
</body>

</html>