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
  <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.15/dist/sweetalert2.min.css" rel="stylesheet" />
  <style>
    .portfolio-item .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0,0,0,0.15) !important;
    }
    
    .portfolio-item .card:hover img {
      transform: scale(1.05);
    }
    
    .portfolio-item .card {
      border: none;
      overflow: hidden;
    }
    
    .portfolio-item .btn {
      border: none;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      font-size: 14px;
    }
    
    .portfolio-item .btn:hover {
      transform: translateY(-1px);
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    }
    
    .portfolio-item .card-title {
      color: #2c3e50;
      font-size: 1.1rem;
    }
    
    .portfolio-item .card-text {
      font-size: 0.9rem;
      line-height: 1.5;
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
          <li class="breadcrumb-item text-primary active" aria-current="page">Portfolio</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- Page Header End -->
  <!-- Portfolio Start -->
  <div class="container-fluid py-5" style="background: #ffffff;">
    <div class="container">
      <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
        <h1 class="display-5 mb-3 text-primary">Unsere Referenzprojekte</h1>
        <p class="lead text-muted">Entdecken Sie unsere vielfältigen Pool- und Gartenprojekte</p>
      </div>
      <div class="row g-4">
        <?php
        $portfolioItems = [
          [
            'id' => 1,
            'image' => 'portfolio-1.jpg',
            'title' => 'Ausstellungsgarten',
            'description' => 'Garten mit Sauna und Schwimmbad mit Holzabdeckung'
          ],
          [
            'id' => 2,
            'image' => 'portfolio-2.jpg',
            'title' => 'BV: Zeitlarn - Pool im Garten',
            'description' => ''
          ],
          [
            'id' => 3,
            'image' => 'portfolio-3.jpg',
            'title' => 'Zeitlarn',
            'description' => 'Gardenanlage mit Pool.'
          ],
          [
            'id' => 4,
            'image' => 'portfolio-4.jpg',
            'title' => 'Hundertwasserturm in Abensberg',
            'description' => 'Hundertwasserturm und Kunsthaus in Abensberg.'
          ],
          [
            'id' => 5,
            'image' => 'portfolio-5.jpg',
            'title' => 'Wasser im Garten',
            'description' => 'Pools - Schwimmteiche - Wasserspiele.'
          ],
          [
            'id' => 6,
            'image' => 'portfolio-6.jpg',
            'title' => 'HolzimGarten',
            'description' => 'Holz im Garten.'
          ],
          [
            'id' => 7,
            'image' => 'portfolio-7.jpg',
            'title' => 'Gartenanlage Aufhausen',
            'description' => 'Gartenanlage Pflasterarbeiten Natursteinplatten Kiesabdeckung und Sichtschutzstehlen.'
          ],
          [
            'id' => 8,
            'image' => 'portfolio-8.jpeg',
            'title' => 'Pool mit Ausblick',
            'description' => ''
          ],
          [
            'id' => 9,
            'image' => 'portfolio-9.jpeg',
            'title' => 'Poolanlage Regensburg',
            'description' => ''
          ],
          [
            'id' => 10,
            'image' => 'portfolio-10.jpeg',
            'title' => 'Pool mit Holzeinfassung',
            'description' => ''
          ],
          [
            'id' => 11,
            'image' => 'portfolio-11.jpeg',
            'title' => 'Pool mit grauer Folie',
            'description' => ''
          ],
          [
            'id' => 12,
            'image' => 'portfolio-12.jpg',
            'title' => 'Gartenanlage mit Pool 7 x 3,50',
            'description' => ''
          ]
        ];
        $portfolioDir = 'img/portfolio-images';
        $delay = 0.1;
        foreach ($portfolioItems as $item) {
          $imagePath = "$portfolioDir/{$item['image']}";
          $id = $item['id'];
          $title = $item['title'];
          $description = $item['description'];
          $delay += 0.1;
        ?>
          <!-- Portfolio Item Start -->
          <div class="col-lg-4 col-md-6 portfolio-item wow fadeInUp" data-wow-delay="<?= $delay ?>s">
            <div class="card border-0 shadow-sm h-100 d-flex flex-column" style="border-radius: 0; transition: transform 0.3s ease, box-shadow 0.3s ease;">
              <div class="position-relative overflow-hidden" style="height: 250px;">
                <img class="card-img-top w-100 h-100" src="<?= $imagePath ?>" alt="<?= $title ?>" style="object-fit: cover; transition: transform 0.3s ease;">
                <div class="position-absolute top-0 end-0 m-2">
                  <a href="<?= $imagePath ?>" data-lightbox="portfolio" class="btn btn-light btn-sm" style="border-radius: 0; opacity: 0.9;">
                    <i class="bi bi-eye-fill"></i>
                  </a>
                </div>
              </div>
              <div class="card-body d-flex flex-column p-4">
                <h5 class="card-title mb-3 fw-bold"><?= $title ?></h5>
                <p class="card-text flex-grow-1 text-muted mb-4"><?= $description ?: 'Keine Beschreibung verfügbar' ?></p>
                <div class="mt-auto">
                  <a href="portfoliodetails.php?id=<?= $id ?>" class="btn btn-primary w-100" style="border-radius: 0; padding: 12px 24px; font-weight: 500;">
                    <i class="fa fa-arrow-right me-2"></i>Details anzeigen
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
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
  <!--Start of Tawk.to Script-->
  <script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/687ac93f487057192063ab77/1j0fq489v';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script>
  <!--End of Tawk.to Script-->
</body>
</html>