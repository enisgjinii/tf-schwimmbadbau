<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="utf-8" />
  <title>Kontakt</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="keywords" />
  <meta content="" name="description" />
  <link href="img/favicon.ico" rel="icon" />
  <link href="https://api.fontshare.com/v2/css?f[]=general-sans@400&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
  <link href="lib/animate/animate.min.css" rel="stylesheet" />
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" />
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

  <?php include 'msc.php'; ?>
</head>

<body>
  <?php include 'partials/spinner.php'; ?>
  <?php include 'partials/toopbar.php'; ?>
  <?php include 'partials/navbar.php'; ?>
  <div class="container-fluid header-bg py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
      <h1 class="display-4 text-white mb-3 animated slideInDown">Kontaktiere uns</h1>
      <nav aria-label="breadcrumb animated slideInDown">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a class="text-white" href="#">Startseite</a></li>
          <li class="breadcrumb-item text-primary active" aria-current="page">Kontaktiere uns</li>
        </ol>
      </nav>
    </div>
  </div>
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-4 mb-5">
        <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
          <div class="h-100 bg-light d-flex align-items-center p-5">
            <div class="btn-lg-square bg-white flex-shrink-0">
              <i class="fa fa-map-marker-alt text-primary"></i>
            </div>
            <div class="ms-4">
              <p class="mb-2"><span class="text-primary me-2">#</span>Adresse</p>
              <h5 class="mb-0">TF Pflasterbau Betriebsgelände</h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
          <div class="h-100 bg-light d-flex align-items-center p-5">
            <div class="btn-lg-square bg-white flex-shrink-0">
              <i class="fa fa-phone-alt text-primary"></i>
            </div>
            <div class="ms-4">
              <p class="mb-2"><span class="text-primary me-2">#</span>Jetzt anrufen</p>
              <h5 class="mb-0">+49 176 23768429</h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
          <div class="h-100 bg-light d-flex align-items-center p-5">
            <div class="btn-lg-square bg-white flex-shrink-0">
              <i class="fa fa-envelope-open text-primary"></i>
            </div>
            <div class="ms-4">
              <p class="mb-2"><span class="text-primary me-2">#</span>Jetzt mailen</p>
              <h5 class="mb-0">info@tfschwimmbadbau.de</h5>
            </div>
          </div>
        </div>
      </div>
      <div class="row g-5">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
          <p><span class="text-primary me-2">#</span>Kontaktieren Sie uns</p>
          <h1 class="display-5 mb-4">Haben Sie Fragen? Kontaktieren Sie uns!</h1>
          <p class="mb-4">
            Das Kontaktformular ist derzeit inaktiv. Holen Sie sich ein funktionsfähiges und
            arbeitendes Kontaktformular mit Ajax & PHP in wenigen Minuten. Kopieren
            und fügen Sie die Dateien ein, fügen Sie etwas Code hinzu und fertig.
            <a href="https://htmlcodex.com/contact-form">Jetzt herunterladen</a>.
          </p>
          <form id="contactForm" method="post" action="send_email.php">
            <div class="row g-3">
              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control bg-light border-0" id="name" name="name" placeholder="Ihr Name" />
                  <label for="name">Ihr Name</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating">
                  <input type="email" class="form-control bg-light border-0" id="email" name="email" placeholder="Ihre E-Mail" />
                  <label for="email">Ihre E-Mail</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-floating">
                  <input type="text" class="form-control bg-light border-0" id="subject" name="subject" placeholder="Betreff" />
                  <label for="subject">Betreff</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-floating">
                  <textarea class="form-control bg-light border-0" placeholder="Nachricht hinterlassen" id="message" name="message" style="height: 100px"></textarea>
                  <label for="message">Nachricht</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-floating">
                  <input type="text" class="form-control bg-light border-0" id="constructionAddress" name="constructionAddress" placeholder="Baustellenadresse" />
                  <label for="constructionAddress">Baustellenadresse</label>
                </div>
              </div>
              <div class="col-12">
                <button type="submit" id="submitButton" class="btn btn-primary py-3 px-5">Send Message</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="h-100" style="min-height: 400px">
            <iframe style="border-radius: 15px" class="rounded w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10510.80380544223!2d11.86493544107894!3d48.8066859!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479fb44c2f202ec9%3A0xea967918b2e36ccb!2sTF%20Schwimmbadbau%2FPflasterbau!5e0!3m2!1sen!2s!4v1720104849337!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0;border-radius: 25px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include 'partials/footer.php'; ?>
  <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#contactForm').on('submit', function(e) {
        e.preventDefault();

        $('#submitButton').prop('disabled', true);

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
          },
          complete: function() {
            $('#submitButton').prop('disabled', false);
          }
        });
      });
      $(document).ready(function() {
        $("#constructionAddress").autocomplete({
          source: function(request, response) {
            var apiKey = 'e5c43941f6e44dc5a9797863348f09f7'; // Replace with your OpenCage API key
            var apiUrl = `https://api.opencagedata.com/geocode/v1/json?q=${encodeURIComponent(request.term)}&key=${apiKey}&limit=25`;

            $.getJSON(apiUrl, function(data) {
              if (data.results) {
                var suggestions = data.results.map(function(result) {
                  return {
                    label: result.formatted,
                    value: result.formatted,
                    latitude: result.geometry.lat,
                    longitude: result.geometry.lng
                  };
                });
                response(suggestions);
              }
            }).fail(function(jqXHR, textStatus, errorThrown) {
              console.error('API request failed:', textStatus, errorThrown);
            });
          },
          select: function(event, ui) {
            console.log('Selected:', ui.item);
            // Store the selected coordinates, you might want to use hidden fields
            $("#latitude").val(ui.item.latitude);
            $("#longitude").val(ui.item.longitude);
          }
        });
      });
    });
  </script>
</body>

</html>