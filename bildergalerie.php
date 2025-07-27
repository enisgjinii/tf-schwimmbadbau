<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8" />
    <title>Bilder Galerie</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />
    <!-- Fonts -->
    <link href="https://api.fontshare.com/v2/css?f[]=general-sans@400&display=swap" rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.4.2/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
    <style>
        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            transition: transform 0.3s ease;
        }

        .gallery-item:hover {
            transform: translateY(-5px);
        }

        .gallery-item img {
            transition: filter 0.5s ease;
        }

        .gallery-item:hover img {
            filter: brightness(70%);
        }

        .gallery-item .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            color: white;
            opacity: 0;
            transition: opacity 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .gallery-item:hover .overlay {
            opacity: 1;
        }

        .download-btn {
            position: absolute;
            bottom: 10px;
            right: 10px;
            opacity: 0;
            transition: opacity 0.3s ease;
            border-radius: 50%;
        }

        .gallery-item:hover .download-btn {
            opacity: 1;
        }
    </style>

    <?php include 'msc.php'; ?>
</head>

<body>
    <?php include 'partials/spinner.php'; ?>
    <?php include 'partials/toopbar.php'; ?>
    <?php include 'partials/navbar.php'; ?>
    <div class="container-fluid header-bg py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-4 text-white mb-3 animated slideInDown">Portfolio</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Startseite</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="portfolio.php">Portfolio</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="portfoliodetails.php">Bauvorhaben - Zeitlarn</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Bilder Galerie</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="display-5 mb-4">Unsere Bildergalerie</h2>
                    <p class="lead text-muted">Entdecken Sie unsere beeindruckende Sammlung von Bildern aus verschiedenen Projekten.</p>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-6 mb-3">
                    <div class="input-group">
                        <span class="input-group-text bg-primary text-white"><i class="fi fi-rr-search"></i></span>
                        <input type="text" id="filterInput" class="form-control" placeholder="Filtern Sie Bilder nach Namen...">
                    </div>
                </div>
                <div class="col-md-6 text-md-end mb-3">
                    <div class="btn-group" role="group" aria-label="Gallery controls">
                        <button class="btn btn-outline-primary" id="sortAsc"><i class="fi fi-rr-sort-amount-down me-2"></i> A-Z</button>
                        <button class="btn btn-outline-primary" id="sortDesc"><i class="fi fi-rr-sort-amount-up me-2"></i> Z-A</button>
                        <button class="btn btn-outline-primary" id="shuffleGallery"><i class="fi fi-rr-shuffle me-2"></i> Mischen</button>
                    </div>
                    <button class="btn btn-success ms-2" id="downloadAll"><i class="fi fi-rr-download me-2"></i> Alles herunterladen</button>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <p class="text-muted">
                        Anzeigen <span id="shownImages" class="fw-bold">0</span> von <span id="totalImages" class="fw-bold">0</span> bilder
                    </p>
                </div>
            </div>
            <div class="row g-4" id="galleryContainer">
                <?php
                function extractNumber($filename)
                {
                    preg_match('/(\d+)/', $filename, $matches);
                    return $matches ? (int)$matches[0] : 0;
                }
                $directory = 'img/bildergalerie/';
                $images = glob($directory . "*.{jpg,jpeg,png,gif,webp}", GLOB_BRACE);
                usort($images, function ($a, $b) {
                    $aNum = extractNumber(basename($a));
                    $bNum = extractNumber(basename($b));
                    return $aNum - $bNum;
                });
                $totalImages = count($images);
                $initialLoad = 12; // Number of images to load initially
                $count = 0;
                foreach ($images as $image) {
                    if ($count >= $initialLoad) break;
                    $filename = basename($image);
                    echo '<div class="col-lg-4 col-md-6 mb-4 gallery-item">';
                    echo '<div class="card h-100 rounded-4 shadow-sm">';
                    echo '<a href="' . $image . '" data-lightbox="gallery" data-title="' . $filename . '" class="d-block h-100">';
                    echo '<img src="' . $image . '" alt="' . $filename . '" class="card-img-top img-fluid h-100 object-fit-cover">';
                    echo '<div class="overlay">' . $filename . '</div>';
                    echo '</a>';
                    echo '<button class="btn btn-sm btn-primary download-btn" data-src="' . $image . '" title="Download Image"><i class="fi fi-rr-download"></i></button>';
                    echo '</div>';
                    echo '</div>';
                    $count++;
                }
                ?>
            </div>
            <div class="row mt-5">
                <div class="col-12 text-center">
                    <button id="loadMore" class="btn btn-lg btn-primary"><i class="fas fa-plus me-2"></i>Mehr laden</button>
                </div>
            </div>
        </div>
    </div>
    <?php include 'partials/footer.php'; ?>
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fi fi-rr-arrow-up"></i></a>
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
    <script>
        $(document).ready(function() {
            let images = <?php echo json_encode($images); ?>;
            let currentIndex = <?php echo $initialLoad; ?>;
            const imagesPerLoad = 6;

            function updateImageCount() {
                $('#shownImages').text($('.gallery-item:visible').length);
                $('#totalImages').text(images.length);
            }
            updateImageCount();
            $('#loadMore').on('click', function() {
                for (let i = 0; i < imagesPerLoad && currentIndex < images.length; i++) {
                    const image = images[currentIndex];
                    const filename = image.split('/').pop();
                    const newItem = `
                <div class="col-lg-4 col-md-6 mb-4 gallery-item">
                    <div class="card h-100 shadow-sm">
                        <a href="${image}" data-lightbox="gallery" data-title="${filename}" class="d-block h-100">
                            <img src="${image}" alt="${filename}" class="card-img-top img-fluid h-100 object-fit-cover">
                            <div class="overlay">${filename}</div>
                        </a>
                        <button class="btn btn-sm btn-primary download-btn" data-src="${image}" title="Download Image"><i class="fas fa-download"></i></button>
                    </div>
                </div>
            `;
                    $('#galleryContainer').append(newItem);
                    currentIndex++;
                }
                updateImageCount();
                if (currentIndex >= images.length) {
                    $('#loadMore').hide();
                }
            });

            function extractNumber(filename) {
                const match = filename.match(/^(\d+)/);
                return match ? parseInt(match[1], 10) : Infinity;
            }
            $('#sortAsc, #sortDesc').on('click', function() {
                const isAsc = $(this).attr('id') === 'sortAsc';
                const sortedItems = $('.gallery-item').sort(function(a, b) {
                    const aText = $(a).find('.overlay').text();
                    const bText = $(b).find('.overlay').text();
                    const aNum = extractNumber(aText);
                    const bNum = extractNumber(bText);
                    if (aNum === bNum) {
                        return isAsc ? aText.localeCompare(bText) : bText.localeCompare(aText);
                    }
                    return isAsc ? aNum - bNum : bNum - aNum;
                });
                $('#galleryContainer').html(sortedItems);
            });
            $('#shuffleGallery').on('click', function() {
                const items = $('.gallery-item').toArray();
                for (let i = items.length - 1; i > 0; i--) {
                    const j = Math.floor(Math.random() * (i + 1));
                    [items[i], items[j]] = [items[j], items[i]];
                }
                $('#galleryContainer').empty().append(items);
            });
            $(document).on('click', '.download-btn', function() {
                const imageUrl = $(this).data('src');
                const link = document.createElement('a');
                link.href = imageUrl;
                link.download = imageUrl.split('/').pop();
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
            });
            $('#downloadAll').on('click', function() {
                $('.download-btn:visible').each(function() {
                    $(this).click();
                });
            });
            $('#filterInput').on('input', function() {
                const filterText = $(this).val().toLowerCase();
                $('.gallery-item').each(function() {
                    const fileName = $(this).find('.overlay').text().toLowerCase();
                    $(this).toggle(fileName.includes(filterText));
                });
                updateImageCount();
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