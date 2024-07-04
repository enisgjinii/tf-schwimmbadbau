<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Planning - Project Timeline</title>
  <link rel="icon" href="img/favicon.ico">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Quicksand:wght@600;700&display=swap" rel="stylesheet">

  <!-- CSS Libraries -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

  <style>
    :root {
      --timeline-bg: #ddd;
      --timeline-point: #FF5733;
      --timeline-content-bg: #FF5733;
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
    }

    .timeline-step {
      padding: 20px 40px;
      position: relative;
      background: inherit;
      width: 50%;
      box-sizing: border-box;
    }

    .timeline-step::after {
      content: '';
      position: absolute;
      width: 30px;
      height: 30px;
      right: -15px;
      background-color: white;
      border: 4px solid var(--timeline-point);
      top: 20px;
      border-radius: 50%;
      z-index: 1;
      transition: all 0.3s ease;
    }

    .timeline-step:hover::after {
      transform: scale(1.2);
    }

    .timeline-left {
      left: 0;
    }

    .timeline-right {
      left: 50%;
    }

    .timeline-right::after {
      left: -15px;
    }

    .timeline-content {
      padding: 30px;
      background-color: var(--timeline-content-bg);
      position: relative;
      border-radius: 8px;
      color: white;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: all 0.3s ease;
    }

    .timeline-content:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    }

    .timeline-content h4 {
      margin-bottom: 15px;
      font-weight: bold;
    }

    .timeline-content img,
    .timeline-content video {
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
  </style>
</head>

<body>
  <?php include 'partials/spinner.php'; ?>
  <?php include 'partials/toopbar.php'; ?>
  <?php include 'partials/navbar.php'; ?>

  <!-- Page Header Start -->
  <header class="container-fluid header-bg py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
      <h1 class="display-4 text-white mb-3 animated slideInDown">Planning</h1>
      <nav aria-label="breadcrumb animated slideInDown">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
          <li class="breadcrumb-item text-primary active" aria-current="page">Planning</li>
        </ol>
      </nav>
    </div>
  </header>
  <!-- Page Header End -->

  <!-- Timeline Section Start -->
  <section class="container-xxl py-5">
    <div class="container">
      <h2 class="text-center mb-5">Project Timeline</h2>
      <div class="timeline">
        <?php
        $timelineSteps = [
          [
            'title' => 'Initial Consultation',
            'description' => 'Discussing project requirements and expectations with the client.',
            'image' => 'img/step1.jpg',
            'video' => 'video/step1.mp4'
          ],
          [
            'title' => 'Site Analysis',
            'description' => 'Conducting a thorough analysis of the project site.',
            'image' => 'img/step2.jpg',
            'video' => 'video/step2.mp4'
          ],
          [
            'title' => 'Design Proposal',
            'description' => 'Creating a detailed design proposal based on the analysis.',
            'image' => 'img/step3.jpg',
            'video' => 'video/step3.mp4'
          ],
          [
            'title' => 'Implementation',
            'description' => 'Executing the design plan with precision and care.',
            'image' => 'img/step4.jpg',
            'video' => 'video/step4.mp4'
          ],
          [
            'title' => 'Project Completion',
            'description' => 'Final touches and client walkthrough to ensure satisfaction.',
            'image' => 'img/step5.jpg',
            'video' => 'video/step5.mp4'
          ]
        ];

        foreach ($timelineSteps as $index => $step) {
          $position = $index % 2 == 0 ? 'timeline-left' : 'timeline-right';
          $delay = ($index + 1) * 0.1;
          echo "<div class='timeline-step {$position} wow fadeInUp' data-wow-delay='{$delay}s'>";
          echo "<div class='timeline-content'>";
          echo "<h4>{$step['title']}</h4>";
          echo "<p>{$step['description']}</p>";
          echo "<img src='{$step['image']}' alt='{$step['title']} Image'>";
          echo "<video controls><source src='{$step['video']}' type='video/mp4'>Your browser does not support the video tag.</video>";
          echo "</div></div>";
        }
        ?>
      </div>
    </div>
  </section>
  <!-- Timeline Section End -->

  <?php include 'partials/footer.php'; ?>

  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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