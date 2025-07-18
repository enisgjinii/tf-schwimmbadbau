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
  <div class="container-fluid p-0 mb-5 position-relative">
    <div class="hero-section" style="background-image: url('img/carousel-1.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 100vh; min-height: 600px;">
      <div class="overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0, 0, 0, 0.5);"></div>
      <div class="container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-lg-8 col-md-10 wow fadeIn" data-wow-delay="0.1s" style="position: relative; z-index: 2;">
            <div class="text-light">
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
        </div>
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
  <!-- <div class="container-fluid bg-primary facts my-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
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
  </div> -->
  <!-- </div> -->
  <!-- Facts End -->
  <!-- Service Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="col-lg-6">
          <p><span class="text-primary me-2">#</span>Unsere Leistungen</p>
          <h1 class="display-5 mb-0">
            Unsere Leistungen – <br>
            <span class="text-primary">Alles aus einer Hand</span>
          </h1>
        </div>
        <div class="col-lg-6 ">
          <div class="bg-primary h-100 d-flex align-items-center py-4 px-4 px-sm-5 " style="border-radius: 15px;">
            <i class="fa fa-3x fa-phone-alt text-white"></i>
            <div class="ms-4">
              <p class="text-white mb-0">Rufen Sie für weitere Informationen an</p>
              <h2 class="text-white mb-0">09443/916 999-0</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="row gy-5 gx-4">
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <i class="fas fa-comments fa-3x text-primary mb-3"></i>
          <h5 class="mb-3">Beratung & Planung</h5>
          <span>Wir nehmen uns Zeit, Ihre Wünsche zu verstehen – und entwickeln daraus ein passgenaues Poolkonzept.</span>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          <i class="fas fa-swimming-pool fa-3x text-primary mb-3"></i>
          <h5 class="mb-3">Neubau von Pools</h5>
          <span>Individuelle Pools aus Beton, Folie oder Edelstahl – exakt nach Maß, mit hochwertiger Technik und stilvollem Design.</span>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
          <i class="fas fa-tools fa-3x text-primary mb-3"></i>
          <h5 class="mb-3">Sanierung & Modernisierung</h5>
          <span>Ihr Pool ist in die Jahre gekommen? Wir bringen ihn auf den neuesten Stand – technisch und optisch.</span>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
          <i class="fas fa-cogs fa-3x text-primary mb-3"></i>
          <h5 class="mb-3">Pooltechnik & Zubehör</h5>
          <span>Von Filteranlagen über Wärmepumpen bis zur Beleuchtung – wir liefern und installieren die passende Technik.</span>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <i class="fas fa-wrench fa-3x text-primary mb-3"></i>
          <h5 class="mb-3">Wartung & Pflege</h5>
          <span>Auch nach dem Bau sind wir für Sie da – mit saisonaler Einwinterung, Reinigung und technischer Wartung.</span>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          <i class="fas fa-tree fa-3x text-primary mb-3"></i>
          <h5 class="mb-3">Gartengestaltung</h5>
          <span>Egal ob Wege, Stufen, Terrassen bis zu besonderen Bepflanzungen – alles aus einer Hand.</span>
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
          <h1 class="display-6 text-white mb-5">Lassen Sie uns über Ihren Pool sprechen</h1>
          <p class="text-white mb-4">Ob erste Idee oder konkreter Plan - wir freuen uns auf Ihre Anfrage.</p>
          
          <div class="text-white mb-4">
            <h5 class="mb-3 text-white">TF Schwimmbadbau</h5>
            <p class="mb-2">Werkstraße 7</p>
            <p class="mb-2">09443 916 999 0</p>
            <p class="mb-2">info@tfschwimmbadbau.de</p>
            <p class="mb-4">Mo-Fr. 8 bis 17 Uhr</p>
          </div>
          
          <!-- Contact Form -->
          <div class="bg-white rounded p-4">
            <h6 class="text-primary mb-3">Kontaktformular</h6>
            <form>
              <div class="mb-3">
                <label for="interest" class="form-label text-dark">Ich interessiere mich für…</label>
                <select class="form-select" id="interest">
                  <option selected>Bitte wählen Sie...</option>
                  <option value="beratung">Beratung & Planung</option>
                  <option value="neubau">Neubau von Pools</option>
                  <option value="sanierung">Sanierung & Modernisierung</option>
                  <option value="technik">Pooltechnik & Zubehör</option>
                  <option value="wartung">Wartung & Pflege</option>
                  <option value="garten">Gartengestaltung</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="name" class="form-label text-dark">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Ihr Name">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label text-dark">E-Mail</label>
                <input type="email" class="form-control" id="email" placeholder="ihre.email@example.com">
              </div>
              <div class="mb-3">
                <label for="phone" class="form-label text-dark">Telefon</label>
                <input type="tel" class="form-control" id="phone" placeholder="Ihre Telefonnummer">
              </div>
              <div class="mb-3">
                <label for="message" class="form-label text-dark">Nachricht</label>
                <textarea class="form-control" id="message" rows="4" placeholder="Ihre Nachricht an uns..."></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Anfrage senden</button>
            </form>
          </div>
        </div>
        <div class="col-md-6 text-light wow fadeIn" data-wow-delay="0.5s">
          <h1 class="display-6 text-white mb-5">Öffnungszeiten</h1>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <span>Montag</span>
              <span>8:00 - 17:00</span>
            </li>
            <li class="list-group-item">
              <span>Dienstag</span>
              <span>8:00 - 17:00</span>
            </li>
            <li class="list-group-item">
              <span>Mittwoch</span>
              <span>8:00 - 17:00</span>
            </li>
            <li class="list-group-item">
              <span>Donnerstag</span>
              <span>8:00 - 17:00</span>
            </li>
            <li class="list-group-item">
              <span>Freitag</span>
              <span>8:00 - 17:00</span>
            </li>
            <li class="list-group-item">
              <span>Samstag</span>
              <span>Nach Vereinbarung</span>
            </li>
            <li class="list-group-item">
              <span>Sonntag</span>
              <span>Geschlossen</span>
            </li>
          </ul>
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
      
      <!-- Elfsight Google Reviews | Untitled Google Reviews -->
      <script src="https://static.elfsight.com/platform/platform.js" async></script>
      <div class="elfsight-app-6f19bfb6-61fa-463b-a395-7005fe7c73bd" data-elfsight-app-lazy></div>
    </div>
  </div>
  <!-- Testimonial End -->
  
  <!-- Instagram Feed Start -->
  <div id="instagram-feed">
    <!-- Instagram feed will be loaded here via JavaScript -->
  </div>
  <!-- Instagram Feed End -->
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
  <!-- Instagram Feed Javascript -->
  <script src="js/instagram-feed.js"></script>
</body>

</html>