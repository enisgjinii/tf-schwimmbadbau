<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Portfolio</title>
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
  <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.15/dist/sweetalert2.min.css" rel="stylesheet" />

</head>

<body>
  <!-- Spinner Start -->
  <?php include 'partials/spinner.php'; ?>
  <!-- Spinner End -->
  <!-- Topbar Start -->
  <?php include 'partials/toopbar.php'; ?>
  <!-- Topbar End -->
  <!-- Navbar Start -->
  <?php include 'partials/navbar.php'; ?>
  <!-- Navbar End -->
  <!-- Page Header Start -->
  <div class="container-fluid header-bg py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
      <h1 class="display-4 text-white mb-3 animated slideInDown">Portfolio</h1>
      <nav aria-label="breadcrumb animated slideInDown">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a class="text-white" href="#">Startseite</a></li>
          <li class="breadcrumb-item text-primary active" aria-current="page">Portfolio</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- Page Header End -->
  <!-- Portfolio Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-4">
        <?php
        $portfolioItems = [
          [
            'image' => 'portfolio-1.jpg',
            'title' => 'Ausstellungsgarten',
            'description' => 'Garten mit Sauna und Schwimmbad mit Holzabdeckung'
          ],
          [
            'image' => 'portfolio-2.jpg',
            'title' => 'BV: Zeitlarn - Pool im Garten',
            'description' => ''
          ],
          [
            'image' => 'portfolio-3.jpg',
            'title' => 'Zeitlarn',
            'description' => 'Gardenanlage mit Pool.'
          ],
          [
            'image' => 'portfolio-4.jpg',
            'title' => 'Hundertwasserturm in Abensberg',
            'description' => 'Hundertwasserturm und Kunsthaus in Abensberg.'
          ],
          [
            'image' => 'portfolio-5.jpg',
            'title' => 'Wasser im Garten',
            'description' => 'Pools - Schwimmteiche - Wasserspiele.'
          ],
          [
            //             HolzimGarten
            // Holz im Garten
            'image' => 'portfolio-6.jpg',
            'title' => 'HolzimGarten',
            'description' => 'Holz im Garten.'
          ],
          [
            // Gartenanlage Aufhausen
            // Gartenanlage Pflasterarbeiten Natursteinplatten Kiesabdeckung und Sichtschutzstehlen
            'image' => 'portfolio-7.jpg',
            'title' => 'Gartenanlage Aufhausen',
            'description' => 'Gartenanlage Pflasterarbeiten Natursteinplatten Kiesabdeckung und Sichtschutzstehlen.'
          ],
          [
            'image' => 'portfolio-8.jpeg',
            'title' => 'Pool mit Ausblick',
            'description' => ''
          ],
          [
            'image' => 'portfolio-9.jpeg',
            'title' => 'Poolanlage Regensburg',
            'description' => ''
          ],
          [
            'image' => 'portfolio-10.jpeg',
            'title' => 'Pool mit Holzeinfassung',
            'description' => ''
          ],
          [
            'image' => 'portfolio-11.jpeg',
            'title' => 'Pool mit grauer Folie',
            'description' => ''
          ],
          [
            'image' => 'portfolio-12.jpg',
            'title' => 'Gartenanlage mit Pool 7 x 3,50',
            'description' => ''
          ]
        ];
        $portfolioDir = 'img/portfolio-images';
        $delay = 0.1;
        foreach ($portfolioItems as $item) {
          $imagePath = "$portfolioDir/{$item['image']}";
          $title = $item['title'];
          $description = $item['description'];
          $delay += 0.1;
        ?>
          <!-- Portfolio Item Start -->
          <div class="col-lg-3 col-md-6 portfolio-item wow fadeInUp" data-wow-delay="<?= $delay ?>s">
            <div class="card h-100 d-flex flex-column">
              <img class="card-img-top" src="<?= $imagePath ?>" alt="<?= $title ?>" style="object-fit: cover; height: 200px;">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title"><?= $title ?></h5>
                <p class="card-text flex-grow-1"><?= $description ?: 'No description available' ?></p>
                <div class="d-flex justify-content-between align-items-center">
                  <a href="<?= $imagePath ?>" class="btn btn-primary mt-auto w-75 mx-1" style="border-radius: 8px;">Read More</a>
                  <a href="<?= $imagePath ?>" data-lightbox="portfolio" class="btn btn-primary mt-auto w-25" style="border-radius: 8px;">
                    <i class="bi bi-eye-fill"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- Portfolio Item End -->
        <?php
        }
        ?>
      </div>
    </div>
  </div>
  <!-- Portfolio End -->
  <!-- Footer Start -->
  <?php include 'partials/footer.php'; ?>
  <!-- Footer End -->
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
  ]<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    $(document).ready(function() {
      $('#contactForm').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
          url: 'send_email.php',
          method: 'POST',
          data: $(this).serialize(),
          dataType: 'json',
          success: function(response) {
            if (response.success) {
              Swal.fire({
                icon: 'success',
                title: 'Erfolg',
                text: response.message,
              });
              // Optional: Reset the form after successful submission
              $('#contactForm')[0].reset();
            } else {
              Swal.fire({
                icon: 'error',
                title: 'Fehler',
                text: response.message,
              });
            }
          },
          error: function(jqXHR, textStatus, errorThrown) {
            Swal.fire({
              icon: 'error',
              title: 'Fehler',
              text: 'Ein Fehler ist beim Senden der Nachricht aufgetreten. Bitte versuchen Sie es später erneut.',
            });
            console.error('AJAX error:', textStatus, errorThrown);
          }
        });
      });
    });
  </script>
</body>

</html>