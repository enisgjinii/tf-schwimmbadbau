<!DOCTYPE html>
<html lang="en">

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
  <!-- Header Start -->
  <div class="container-fluid bg-dark p-0 mb-5">
    <div class="row g-0">
      <div class="col-lg-6 p-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="bg-dark h-100 d-flex flex-column justify-content-center p-5">
          <h1 class="display-4 text-light mb-5">
            TF Schwimmbadbau – weil Ihr Garten mehr verdient.
          </h1>
          <div class="d-flex align-items-center pt-4 animated slideInDown">
            <a href="" class="btn btn-primary py-sm-3 px-3 px-sm-5 me-5">Mehr lesen</a>
            <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
              <span></span>
            </button>
            <h6 class="text-white m-0 ms-4 d-none d-sm-block">Schau Video</h6>
          </div>
        </div>
      </div>
      <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
        <img class="img-fluid" src="img/carousel-1.jpg" alt="" />
      </div>
    </div>
  </div>
  <!-- Header End -->
  <!-- Video Modal Start -->
  <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content rounded-0">
        <div class="modal-header">
          <h3 class="modal-title" id="exampleModalLabel">video</h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- 16:9 aspect ratio -->
          <div class="ratio ratio-16x9">
            <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always" allow="autoplay"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Video Modal End -->
  <!-- About Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
          <p><span class="text-primary me-2">#</span>Willkommen bei TF Schwimmbadbau - Ihr Partner für exklusiven Poolbau</p>
          <h2 class="fs-4 mb-4">
            Träumen Sie von Ihrem eigenen Pool im Garten? <br><span class="text-primary fs-1">Wir machen diesen Traum wahr!</span>
          </h2>
          <p class="mb-4">
            Als Spezialist für hochwertigen Schwimmbadbau in privaten Anlagen gestalten wir individuelle Poollösungen - präzise geplant, professionell umgesetzt, langlebig und stilvoll.
          </p>
          <p class="mb-4">
            Ob moderner Betonpool mit Folie, eleganter Edelstahlpool oder Fertigbecken - wir schaffen Orte der Entspannung und Lebensqualität.
          </p>
          <h5 class="mb-3">
            <i class="far fa-check-circle text-primary me-3"></i>Planung & Beratung
          </h5>
          <h5 class="mb-3">
            <i class="far fa-check-circle text-primary me-3"></i>Poolbau & Technik & Gartengestaltung
          </h5>
          <h5 class="mb-3">
            <i class="far fa-check-circle text-primary me-3"></i>Sanierung & Modernisierung
          </h5>
          <h5 class="mb-3">
            <i class="far fa-check-circle text-primary me-3"></i>Pflege & Wartung
          </h5>
          <a class="btn btn-primary py-3 px-5 mt-3" href="contact.php">Kontakt aufnehmen</a>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="img-border">
            <img class="img-fluid" src="img/about.jpg" alt="" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- About End -->
  <!-- Fakten Start -->
  <!-- <div class="container-xl bg-primary facts my-5 py-5 wow fadeInUp" data-wow-delay="0.1s"> -->
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
  <!-- </div> -->
  <!-- Facts End -->
  <!-- Service Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="col-lg-6">
          <p><span class="text-primary me-2">#</span>Unsere Leistungen</p>
          <h1 class="display-5 mb-0">
            Besondere Services für <br>
            <span class="text-primary">Pool und Garten</span>
          </h1>
        </div>
        <div class="col-lg-6 ">
          <div class="bg-primary h-100 d-flex align-items-center py-4 px-4 px-sm-5 " style="border-radius: 15px;">
            <i class="fa fa-3x fa-phone-alt text-white"></i>
            <div class="ms-4">
              <p class="text-white mb-0">Rufen Sie für weitere Informationen an</p>
              <h2 class="text-white mb-0">+012 345 6789</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="row gy-5 gx-4">
        <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
          <i class="fas fa-swimming-pool fa-3x text-primary mb-3"></i>
          <h5 class="mb-3">Poolbau</h5>
          <span>Planung, Bau und Installation von individuellen Swimmingpools.</span>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
          <i class="fas fa-tree fa-3x text-primary mb-3"></i>
          <h5 class="mb-3">Landschaftsgestaltung</h5>
          <span>Gestaltung und Pflege von Gärten und Außenanlagen.</span>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
          <i class="fas fa-wrench fa-3x text-primary mb-3"></i>
          <h5 class="mb-3">Wartung und Reparatur</h5>
          <span>Regelmäßige Wartung und Reparaturdienste für Pools und Gärten.</span>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
          <i class="fas fa-swimmer fa-3x text-primary mb-3"></i>
          <h5 class="mb-3">Schwimmunterricht</h5>
          <span>Professionelle Schwimmunterrichte für Kinder und Erwachsene.</span>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
          <i class="fas fa-umbrella-beach fa-3x text-primary mb-3"></i>
          <h5 class="mb-3">Poolzubehör</h5>
          <span>Verkauf und Installation von Poolzubehör wie Abdeckungen und Pumpen.</span>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
          <i class="fas fa-tree fa-3x text-primary mb-3"></i>
          <h5 class="mb-3">Gartenbau</h5>
          <span>Planung, Anlage und Pflege von Gärten und Grünanlagen.</span>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
          <i class="fas fa-shower fa-3x text-primary mb-3"></i>
          <h5 class="mb-3">Poolreinigung</h5>
          <span>Professionelle Reinigungsdienste für einen sauberen und gesunden Pool.</span>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
          <i class="fas fa-utensils fa-3x text-primary mb-3"></i>
          <h5 class="mb-3">Essen & Getränke</h5>
          <span>Genießen Sie köstliche Speisen und erfrischende Getränke in unserer Einrichtung.</span>
        </div>
      </div>
    </div>
  </div>
  <!-- Service End -->
  <!-- Animal Start -->
  <!-- <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-5 mb-5 align-items-end wow fadeInUp" data-wow-delay="0.1s">
        <div class="col-lg-6">
          <p><span class="text-primary me-2">#</span>Our Animals</p>
          <h1 class="display-5 mb-0">
            Let`s See Our <span class="text-primary">Zoofari</span> Awsome
            Animals
          </h1>
        </div>
        <div class="col-lg-6 text-lg-end">
          <a class="btn btn-primary py-3 px-5" href="">Explore More Animals</a>
        </div>
      </div>
      <div class="row g-4">
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="row g-4">
            <div class="col-12">
              <a class="animal-item" href="img/animal-md-1.jpg" data-lightbox="animal">
                <div class="position-relative">
                  <img class="img-fluid" src="img/animal-md-1.jpg" alt="" />
                  <div class="animal-text p-4">
                    <p class="text-white small text-uppercase mb-0">Animal</p>
                    <h5 class="text-white mb-0">Elephant</h5>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-12">
              <a class="animal-item" href="img/animal-lg-1.jpg" data-lightbox="animal">
                <div class="position-relative">
                  <img class="img-fluid" src="img/animal-lg-1.jpg" alt="" />
                  <div class="animal-text p-4">
                    <p class="text-white small text-uppercase mb-0">Animal</p>
                    <h5 class="text-white mb-0">Elephant</h5>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          <div class="row g-4">
            <div class="col-12">
              <a class="animal-item" href="img/animal-lg-2.jpg" data-lightbox="animal">
                <div class="position-relative">
                  <img class="img-fluid" src="img/animal-lg-2.jpg" alt="" />
                  <div class="animal-text p-4">
                    <p class="text-white small text-uppercase mb-0">Animal</p>
                    <h5 class="text-white mb-0">Elephant</h5>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-12">
              <a class="animal-item" href="img/animal-md-2.jpg" data-lightbox="animal">
                <div class="position-relative">
                  <img class="img-fluid" src="img/animal-md-2.jpg" alt="" />
                  <div class="animal-text p-4">
                    <p class="text-white small text-uppercase mb-0">Animal</p>
                    <h5 class="text-white mb-0">Elephant</h5>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="row g-4">
            <div class="col-12">
              <a class="animal-item" href="img/animal-md-3.jpg" data-lightbox="animal">
                <div class="position-relative">
                  <img class="img-fluid" src="img/animal-md-3.jpg" alt="" />
                  <div class="animal-text p-4">
                    <p class="text-white small text-uppercase mb-0">Animal</p>
                    <h5 class="text-white mb-0">Elephant</h5>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-12">
              <a class="animal-item" href="img/animal-lg-3.jpg" data-lightbox="animal">
                <div class="position-relative">
                  <img class="img-fluid" src="img/animal-lg-3.jpg" alt="" />
                  <div class="animal-text p-4">
                    <p class="text-white small text-uppercase mb-0">Animal</p>
                    <h5 class="text-white mb-0">Elephant</h5>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  <!-- Animal End -->
  <!-- Visiting Hours Start -->
  <div class="container-xxl bg-primary visiting-hours my-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
      <div class="row g-5">
        <div class="col-md-6 wow fadeIn" data-wow-delay="0.3s">
          <h1 class="display-6 text-white mb-5">Öffnungszeiten</h1>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <span>Montag</span>
              <span>9:00 - 18:00</span>
            </li>
            <li class="list-group-item">
              <span>Dienstag</span>
              <span>9:00 - 18:00</span>
            </li>
            <li class="list-group-item">
              <span>Mittwoch</span>
              <span>9:00 - 18:00</span>
            </li>
            <li class="list-group-item">
              <span>Donnerstag</span>
              <span>9:00 - 18:00</span>
            </li>
            <li class="list-group-item">
              <span>Freitag</span>
              <span>9:00 - 18:00</span>
            </li>
            <li class="list-group-item">
              <span>Samstag</span>
              <span>9:00 - 18:00</span>
            </li>
            <li class="list-group-item">
              <span>Sonntag</span>
              <span>Geschlossen</span>
            </li>
          </ul>
        </div>
        <div class="col-md-6 text-light wow fadeIn" data-wow-delay="0.5s">
          <h1 class="display-6 text-white mb-5">Kontaktinformationen</h1>
          <table class="table">
            <tbody>
              <tr>
                <td>Pool Services</td>
                <td>Werkstraße 7
                  93326 Abensberg</td>
              </tr>
              <tr>
                <td>Kontakt</td>
                <td>
                  <p class="mb-2">Tel. 09443/916 999-0</p>
                  <p class="mb-0">info@tfschwimmbadbau.de</p>
                </td>
              </tr>
              <!-- <tr>
                <td>Support</td>
                <td>
                  <p class="mb-2">+49 123 4567890</p>
                  <p class="mb-0">support@example.com</p>
                </td>
              </tr> -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- Visiting Hours End -->
  <!-- Testimonial Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <h1 class="display-5 text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
        Das sagen unsere Kunden!
      </h1>
      <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
        <div class="testimonial-item text-center">
          <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4" src="img/testimonial-1.jpg" style="width: 100px; height: 100px" />
          <div class="testimonial-text rounded text-center p-4">
            <p>
              „Ich bin sehr zufrieden mit dem Poolservice. Das Team ist pünktlich, professionell und sorgt immer dafür, dass mein Pool in perfektem Zustand ist. Absolut empfehlenswert!“
            </p>
            <h5 class="mb-1">Stefan Müller</h5>
            <span class="fst-italic">Hausbesitzer</span>
          </div>
        </div>
        <div class="testimonial-item text-center">
          <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4" src="img/testimonial-2.jpg" style="width: 100px; height: 100px" />
          <div class="testimonial-text rounded text-center p-4">
            <p>
              „Seitdem ich diesen Service nutze, hat sich die Qualität meines Poolwassers enorm verbessert. Die Mitarbeiter sind freundlich und sehr kompetent. Eine echte Bereicherung!“
            </p>
            <h5 class="mb-1">Anna Schmidt</h5>
            <span class="fst-italic">Villa Besitzerin</span>
          </div>
        </div>
        <div class="testimonial-item text-center">
          <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4" src="img/testimonial-3.jpg" style="width: 100px; height: 100px" />
          <div class="testimonial-text rounded text-center p-4">
            <p>
              „Der Komplettservice ist jeden Cent wert. Von der Reinigung bis zur Wartung, alles wird sorgfältig und zuverlässig erledigt. Ich kann es nur weiterempfehlen!“
            </p>
            <h5 class="mb-1">Lars Becker</h5>
            <span class="fst-italic">Hotelmanager</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Testimonial End -->
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