<?php include 'get_products.php'; ?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="utf-8" />
  <title>Pool und SPA Pflege Produkte</title>
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
</head>
<body>
  <?php include 'partials/spinner.php'; ?>
  <?php include 'partials/toopbar.php'; ?>
  <?php include 'partials/navbar.php'; ?>
  <!-- Page Header Start -->
  <div class="container-fluid header-bg py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
      <h1 class="display-4 text-white mb-3 animated slideInDown">
        Pool und SPA Pflege bei uns erhältlich
      </h1>
      <nav aria-label="breadcrumb animated slideInDown">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item">
            <a class="text-white" href="#">Startseite</a>
          </li>
          <li class="breadcrumb-item text-primary active" aria-current="page">
            Pool und SPA Pflege bei uns erhältlich
          </li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- Page Header End -->
  <!-- Product Catalog Start -->
  <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
      <h2 class="mb-4">Unsere Pool und SPA Pflegeprodukte</h2>
      <!-- Search form -->
      <form id="searchForm" class="mb-4">
        <div class="input-group">
          <input type="text" id="searchInput" class="form-control" placeholder="Produkt suchen">
          <button type="submit" class="btn btn-primary">Suchen</button>
        </div>
      </form>
      <!-- Product list -->
      <div id="productList" class="row">
        <!-- Products will be dynamically inserted here -->
      </div>
      <!-- Product details modal -->
      <div class="modal fade" id="productModal" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title"></h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
              <!-- Product details will be dynamically inserted here -->
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Schließen</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Product Catalog End -->
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
  <script>
    $(document).ready(function() {
      let allProducts = [];
      // Load products
      $.getJSON('?action=getProducts', function(data) {
        allProducts = data;
        displayProducts(allProducts);
      });
      // Search functionality
      $('#searchForm').on('submit', function(e) {
        e.preventDefault();
        const searchTerm = $('#searchInput').val().toLowerCase();
        const filteredProducts = allProducts.filter(product =>
          product.name.toLowerCase().includes(searchTerm) ||
          product.description.toLowerCase().includes(searchTerm)
        );
        displayProducts(filteredProducts);
      });
      // Display products
      function displayProducts(products) {
        const productList = $('#productList');
        productList.empty();
        products.forEach(product => {
          productList.append(`
            <div class="col-md-3 mb-3">
              <div class="card h-100">
                <img src="${product.image}" class="card-img-top" alt="${product.name}">
                <div class="card-body">
                  <h5 class="card-title">${product.name}</h5>
                  <p class="card-text">${product.description}</p>
                </div>
                <div class="card-footer">
                  <button class="btn btn-primary view-details" data-product-id="${product.id}">Details</button>
                </div>
              </div>
            </div>
          `);
        });
      }
      // Show product details
      $(document).on('click', '.view-details', function() {
        const productId = $(this).data('product-id');
        const product = allProducts.find(p => p.id === productId);
        const modal = $('#productModal');
        modal.find('.modal-title').text(product.name);
        modal.find('.modal-body').html(`
          <img src="${product.image}" class="img-fluid mb-3" alt="${product.name}">
          <p><strong>Beschreibung:</strong> ${product.description}</p>
          <p><strong>Anwendung:</strong> ${product.usage}</p>
          <strong>Eigenschaften:</strong>
          <ul>
            ${product.features.map(feature => `<li>${feature}</li>`).join('')}
          </ul>
        `);
        modal.modal('show');
      });
    });
  </script>
</body>
</html>