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
  <style>
    .fade-in {
      animation: fadeIn 0.5s;
    }
    @keyframes fadeIn {
      from {
        opacity: 0;
      }
      to {
        opacity: 1;
      }
    }
  </style>
</head>
<body>
  <?php include 'partials/spinner.php'; ?>
  <?php include 'partials/toopbar.php'; ?>
  <?php include 'partials/navbar.php'; ?>
  <!-- Page Header Start -->
  <div class="container-fluid header-bg py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
      <h1 class="display-4 text-white mb-3 animated slideInDown">Pool und SPA Pflege bei uns erhältlich</h1>
      <nav aria-label="breadcrumb animated slideInDown">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a class="text-white" href="#">Startseite</a></li>
          <li class="breadcrumb-item text-primary active" aria-current="page">Pool und SPA Pflege bei uns erhältlich</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- Page Header End -->
  <!-- Product Catalog Start -->
  <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
      <h2 class="mb-4">Unsere Pool und SPA Pflegeprodukte</h2>
      <!-- Category filter -->
      <div class="mb-4">
        <select id="categoryFilter" class="form-select">
          <option value="">Alle Kategorien</option>
          <!-- Categories will be dynamically inserted here -->
        </select>
      </div>
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
      <div class="d-flex justify-content-between align-items-center mt-4">
        <button id="resetFilters" class="btn btn-secondary">Filter zurücksetzen</button>
        <ul id="pagination" class="pagination"></ul>
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
    $(document).ready(() => {
      const state = {
        allProducts: [],
        categories: [],
        currentPage: 1,
        productsPerPage: 12
      };
      const elements = {
        productList: $('#productList'),
        searchInput: $('#searchInput'),
        categoryFilter: $('#categoryFilter'),
        pagination: $('#pagination')
      };
      const init = async () => {
        try {
          const [products, categories] = await Promise.all([
            $.getJSON('get_products.php?action=getProducts'),
            $.getJSON('get_products.php?action=getCategories')
          ]);
          state.allProducts = products;
          state.categories = categories;
          populateCategoryFilter();
          displayProducts();
          setupEventListeners();
        } catch (error) {
          console.error('Error initializing:', error);
        }
      };
      const populateCategoryFilter = () => {
        state.categories.forEach(category => {
          elements.categoryFilter.append(`<option value="${category}">${category}</option>`);
        });
      };
      const setupEventListeners = () => {
        elements.searchInput.on('keyup', () => filterProducts());
        $('#searchForm').on('submit', e => {
          e.preventDefault();
          filterProducts();
        });
        elements.categoryFilter.on('change', () => filterProducts());
        $('#resetFilters').on('click', resetFilters);
        elements.productList.on('click', '.view-details', e => viewDetails($(e.target).data('product-id')));
      };
      const filterProducts = () => {
        const searchTerm = elements.searchInput.val().toLowerCase();
        const selectedCategory = elements.categoryFilter.val();
        const filteredProducts = state.allProducts.filter(product =>
          (product.name.toLowerCase().includes(searchTerm) ||
            product.description.toLowerCase().includes(searchTerm)) &&
          (!selectedCategory || product.category === selectedCategory)
        );
        state.currentPage = 1;
        displayProducts(filteredProducts);
      };
      const displayProducts = (products = state.allProducts) => {
        elements.productList.empty();
        const start = (state.currentPage - 1) * state.productsPerPage;
        const paginatedProducts = products.slice(start, start + state.productsPerPage);
        if (paginatedProducts.length === 0) {
          elements.productList.append('<div class="col-12 text-center"><h3>Keine Produkte gefunden</h3></div>');
        } else {
          paginatedProducts.forEach(renderProduct);
        }
        updatePagination(products.length);
      };
      const renderProduct = product => {
        elements.productList.append(`
      <div class="col-md-3 mb-3 fade-in">
        <div class="card h-100">
          <img src="${product.image}" class="card-img-top lazy" alt="${product.name}" loading="lazy">
          <div class="card-body">
            <h5 class="card-title">${product.name}</h5>
            <p class="card-text">${product.description}</p>
            <p class="card-text"><small class="text-muted">${product.category}</small></p>
          </div>
          <div class="card-footer">
            <button class="btn btn-primary view-details" data-product-id="${product.id}">Details</button>
          </div>
        </div>
      </div>
    `);
      };
      const updatePagination = totalProducts => {
        elements.pagination.empty();
        const totalPages = Math.ceil(totalProducts / state.productsPerPage);
        if (totalPages > 1) {
          for (let i = 1; i <= totalPages; i++) {
            elements.pagination.append(`<li class="page-item ${i === state.currentPage ? 'active' : ''}"><a class="page-link" href="#">${i}</a></li>`);
          }
          elements.pagination.find('a').on('click', e => {
            e.preventDefault();
            state.currentPage = parseInt($(e.target).text());
            displayProducts();
          });
        }
      };
      const resetFilters = () => {
        elements.searchInput.val('');
        elements.categoryFilter.val('');
        state.currentPage = 1;
        displayProducts();
      };
      const viewDetails = productId => {
        // Implement product details view logic here
        console.log(`Viewing details for product ${productId}`);
      };
      init();
    });
  </script>
</body>
</html>