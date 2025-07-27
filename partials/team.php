<!-- Team Start -->
<div class="container-fluid py-5" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
  <div class="container">
    <div class="row g-5 mb-5 align-items-end wow fadeInUp" data-wow-delay="0.1s">
      <div class="col-lg-6">
        <p><span class="text-primary me-2">#</span>Unser Team</p>
        <h1 class="display-5 mb-0">
          Unsere Teammitglieder
        </h1>
      </div>
      <div class="col-lg-6 text-lg-end">
        <a class="btn btn-primary py-3 px-5" href="">Mehr Entdecken</a>
      </div>
    </div>
    <div class="row g-4">
      <?php
      // Define an array with descriptions for each person in the specified order
      $team_members = array(
        // 'fabian.jpg' => 'Firmeninhaber, Meisterbetrieb. Betreibt die Firma seit 2008. Fast alle Mitarbeiter haben ihre Lehre bei ihm absolviert. Vielen Dank an alle!',
        'reinhold.jpg' => 'Facharbeiter. Multitalent für alle Arbeiten.',
        'mostafa.jpg' => 'Facharbeiter. Zuverlässig und engagiert.',
        'namatulla.jpg' => 'Facharbeiter. Zuverlässig und engagiert.',
        'agron.jpg' => 'Facharbeiter. Verlegt sämtliche Pflastersteine.',
        'ilir.jpg' => 'Hilfsarbeiter. Hilft bei sämtlichen Arbeiten.',
        'basti.png' => '2. Ausbildungsjahr.',
        'erblin.png' => '2. Ausbildungsjahr.',
        'kathy.png' => 'Buchhaltung, Social Media.'
      );
      // Specify the order of team members
      $order = array(
        'fabian.jpg', 'reinhold.jpg', 'mostafa.jpg', 'namatulla.jpg',
        'agron.jpg', 'ilir.jpg', 'basti.png', 'erblin.png', 'kathy.png'
      );
      $image_directory = 'img/team/';
      foreach ($order as $image) {
        $image_path = $image_directory . $image;
        if (isset($team_members[$image]) && (pathinfo($image_path, PATHINFO_EXTENSION) == 'jpg' || pathinfo($image_path, PATHINFO_EXTENSION) == 'png')) {
          $person_name = ucfirst(strtolower(pathinfo($image, PATHINFO_FILENAME)));
      ?>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-4">
              <div class="col-12">
                <a class="animal-item" href="<?php echo $image_path; ?>" data-lightbox="team">
                  <div class="position-relative">
                    <img class="img-fluid" src="<?php echo $image_path; ?>" style="object-fit: cover;width: 100%;height: 300px" alt="<?php echo $person_name; ?>" />
                    <div class="animal-text p-4">
                      <p class="text-white small text-uppercase mb-0">Teammitglied</p>
                      <h5 class="text-white mb-0"><?php echo $person_name; ?></h5>
                      <p class="text-white mb-0"><?php echo $team_members[$image]; ?></p>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
      <?php
        }
      }
      ?>
    </div>
  </div>
</div>
<!-- Team End -->