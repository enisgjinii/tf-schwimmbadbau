<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pool Service - Project Timeline</title>
  <link href="" rel="stylesheet">
  <?php include 'msc.php'; ?>
  <?php
  $css_files = [
    "https://api.fontshare.com/v2/css?f[]=general-sans@400&display=swap",
    "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css",
    "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css",
    "lib/animate/animate.min.css",
    "lib/lightbox/css/lightbox.min.css",
    "lib/owlcarousel/assets/owl.carousel.min.css",
    "css/bootstrap.min.css",
    "css/style.css"
  ];
  foreach ($css_files as $css) {
    echo "<link href=\"$css\" rel=\"stylesheet\">\n";
  }
  ?>
  <style>
    :root {
      --primary-color: #80b1d9;
      --secondary-color: #5c8eb6;
      --timeline-bg: #e0f0ff;
      --timeline-point: #80b1d9;
      --timeline-content-bg: #ffffff;
      --text-color: #333333;
    }
    body {
      background-color: #f0f8ff;
      color: var(--text-color);
    }
    .header-bg {
      background-color: var(--primary-color);
    }
    .timeline {
      position: relative;
      max-width: 1200px;
      margin: 0 auto;
      padding: 40px 0;
    }
    .timeline::after {
      content: '';
      position: absolute;
      width: 6px;
      background-color: var(--timeline-bg);
      top: 0;
      bottom: 0;
      left: 50%;
      margin-left: -3px;
      z-index: 1;
    }
    .timeline-step {
      padding: 20px 40px;
      position: relative;
      background: inherit;
      width: 50%;
    }
    .timeline-step::after {
      content: '';
      position: absolute;
      width: 50px;
      height: 50px;
      right: -25px;
      background-color: var(--primary-color);
      border: 4px solid #fff;
      top: 15px;
      border-radius: 50%;
      z-index: 2;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 24px;
      font-weight: bold;
      color: #fff;
      transition: all 0.3s ease;
    }
    .timeline-step:hover::after {
      transform: scale(1.2);
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }
    .timeline-left {
      left: 0;
    }
    .timeline-right {
      left: 50%;
    }
    .timeline-right::after {
      left: -25px;
    }
    .timeline-content {
      padding: 30px;
      background-color: var(--timeline-content-bg);
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: all 0.3s ease;
      border-left: 5px solid var(--primary-color);
      position: relative;
      z-index: 1;
    }
    .timeline-content:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    }
    .timeline-content h4 {
      margin-bottom: 15px;
      font-weight: bold;
      color: var(--primary-color);
    }
    .timeline-content img {
      max-width: 100%;
      height: auto;
      border-radius: 6px;
      margin-top: 20px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    @media screen and (max-width: 768px) {
      .timeline::after {
        left: 31px;
      }
      .timeline-step {
        width: 100%;
        padding-left: 70px;
        padding-right: 25px;
      }
      .timeline-step::after {
        left: 15px;
      }
      .timeline-right {
        left: 0;
      }
    }
    .image-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 10px;
    }
    .grid-item img {
      width: 100%;
      height: auto;
      object-fit: cover;
    }
    @media (max-width: 768px) {
      .image-grid {
        grid-template-columns: repeat(2, 1fr);
      }
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
  <header class="container-fluid header-bg py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
      <h1 class="display-4 text-white mb-3 animated slideInDown">Planung von A-Z </h1>
      <nav aria-label="breadcrumb animated slideInDown">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a class="text-white" href="#">Startseite</a></li>
          <li class="breadcrumb-item text-primary active" aria-current="page">Unser Prozess</li>
        </ol>
      </nav>
    </div>
  </header>
  <section class="container-xxl py-5">
    <div class="container">
      <h2 class="text-center mb-5">Unser Zeitplan für den Poolservice</h2>
      <div class="timeline">
        <?php
        $timelineSteps = [
          [
            'title' => 'Beratung und Planung (natürlich Kostenlos)',
            'description' => [
              'Bestandsaufnahme',
              'Beratung und Ideengebung',
              'Erstellung eines Plans zur Verdeutlichung'
            ],
            'image' => ['img/plunning-images/plunning-1.jpg']
          ],
          [
            'title' => 'Animation zur Verdeutlichung in 3D (Kostenpflichtig)',
            'description' => [
              '3D Ansichten',
              'Erstellung eines Videos zur Veranschaulichung'
            ],
            'image' => ['img/plunning-images/plunning-2a.jpg', 'img/plunning-images/plunning-2b.jpg'],
            'video' => 'video/plunning-video-2.mp4'
          ],
          [
            'title' => 'Erstellung eines Angebotes auf Basis des Plans (natürlich Kostenlos)',
            'description' => [
              'alle Positionen einzeln aufgeschlüsselt und dargestellt',
              'keine versteckten Kosten',
              'klar dargestellt und mit Bildern verdeutlicht'
            ],
          ],
          [
            'title' => 'Ausführung und Gestaltung Ihrer Außenanlagen',
            'description' => [
              'alle Arbeiten werden von uns ausgeführt und in Absprache mit Ihnen fertiggestellt',
              'Auf Wunsch Erstellung eines Bautagebuchs in Form von Bildern',
              'In der Galerie rechts sehen sie auch die Vorher- und Nachher-Bilder'
            ],
            'image' => ['img/plunning-images/plunning-3.jpg']
          ],
          [
            'title' => 'Ergebnis in Bildern ausgedrückt (alle Bilder Vorher und Nachher in der Galerie)',
            'description' => ['A final check to ensure everything meets our high standards of quality.'],
            'image' => [
              'img/plunning-images/plunning-5.1.jpg',
              'img/plunning-images/plunning-5.2.jpg',
              'img/plunning-images/plunning-5.3.jpg',
              'img/plunning-images/plunning-5.4.jpg',
              'img/plunning-images/plunning-5.5.jpg',
              'img/plunning-images/plunning-5.6.jpg',
              'img/plunning-images/plunning-5.7.jpg',
              'img/plunning-images/plunning-5.8.jpg'
            ]
          ]
        ];
        foreach ($timelineSteps as $index => $step) {
          $position = $index % 2 == 0 ? 'timeline-left' : 'timeline-right';
          $delay = ($index + 1) * 0.1;
          $stepNumber = $index + 1;
          echo "<div class='timeline-step $position wow fadeInUp' data-wow-delay='{$delay}s'>";
          echo "<div class='timeline-content'>";
          echo "<h4>{$step['title']}</h4><ul>";
          foreach ($step['description'] as $desc) {
            echo "<li>{$desc}</li>";
          }
          echo "</ul>";
          if (isset($step['image'])) {
            if ($index == 4) { // For the 5th step (index 4)
              echo "<div class='image-grid'>";
              foreach ($step['image'] as $imageIndex => $image) {
                $imageDelay = ($imageIndex + 1) * 0.1;
                echo "<div class='grid-item wow fadeInUp' data-wow-delay='{$imageDelay}s'>";
                echo "<a href='{$image}' data-lightbox='timeline-gallery' data-title='Ergebnis Bild " . ($imageIndex + 1) . "'>";
                echo "<img src='{$image}' alt='Ergebnis Bild " . ($imageIndex + 1) . "' style='object-fit: cover; width: 100%; height: 200px;' />";
                echo "</a>";
                echo "</div>";
              }
              echo "</div>";
            } else {
              foreach ($step['image'] as $image) {
                echo "<img src='{$image}' alt='{$step['title']} Image'>";
              }
            }
          }
          if (isset($step['video'])) {
            echo "<video controls>
                  <source src='{$step['video']}' type='video/mp4'>
                  Your browser does not support the video tag.
                </video>";
          }
          echo "</div>";
          echo "<style>.timeline-step:nth-child({$stepNumber})::after { content: '{$stepNumber}'; }</style>";
          echo "</div>";
        }
        ?>
      </div>
    </div>
  </section>
  <?php include 'partials/footer.php'; ?>
  <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
  <?php
  $js_files = [
    "https://code.jquery.com/jquery-3.6.0.min.js",
    "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js",
    "lib/wow/wow.min.js",
    "lib/easing/easing.min.js",
    "lib/waypoints/waypoints.min.js",
    "lib/counterup/counterup.min.js",
    "lib/owlcarousel/owl.carousel.min.js",
    "lib/lightbox/js/lightbox.min.js",
    "js/main.js"
  ];
  foreach ($js_files as $js) {
    echo "<script src=\"$js\"></script>\n";
  }
  ?>
</body>
</html>