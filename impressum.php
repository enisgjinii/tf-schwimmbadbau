<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8" />
    <title>Über Uns - TF-Schwimmbadbau/Gartenbau</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />
    <!-- Google Web Fonts -->
    <link href="https://api.fontshare.com/v2/css?f[]=general-sans@400&display=swap" rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
    <style>
        .card-img-top {
            height: 150px;
            object-fit: contain;
            padding: 1rem;
        }

        .card {
            transition: transform 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }
    </style>
</head>

<body>
    <!-- Header and Navigation -->
    <?php include 'partials/spinner.php'; ?>
    <?php include 'partials/toopbar.php'; ?>
    <?php include 'partials/navbar.php'; ?>
    <!-- Page Header Start -->
    <div class="container-fluid header-bg py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-4 text-white mb-3 animated slideInDown">Impressum und links</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a class="text-white" href="#">Startseite</a>
                    </li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Impressum und links</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- About Content Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <h2 class="text-center mb-5">Unsere Partner und Materiallieferanten</h2>
            <!-- Partner Cards Row -->
            <div class="row row-cols-1 row-cols-md-4 g-4 mb-5">
                <div class="col">
                    <div class="card h-100">
                        <img src="img/godelmann.jpg" class="card-img-top" alt="Godelmann Logo">
                        <div class="card-body">
                            <h5 class="card-title">Godelmann</h5>
                            <p class="card-text">Hochwertige Betonprodukte für den Garten- und Landschaftsbau.</p>
                            <a href="https://www.godelmann.de/" class="btn btn-primary" target="_blank" rel="noopener noreferrer">Besuchen</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="img/kann.png" class="card-img-top" alt="KANN Baustoffwerke Logo">
                        <div class="card-body">
                            <h5 class="card-title">KANN Baustoffwerke</h5>
                            <p class="card-text">Innovative Lösungen für moderne Außengestaltung.</p>
                            <a href="https://kann.de/" class="btn btn-primary" target="_blank" rel="noopener noreferrer">Besuchen</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <!-- <img src="/api/placeholder/200/150" class="" alt="Birkenmeier Logo"> -->
                        <svg class="card-img-top" xmlns="http://www.w3.org/2000/svg" width="215" height="65" viewBox="0 0 215 65">
                            <path fill="#FFF" d="M42.474 59.376c-2.12 0-3.779-.485-5.158-1.814l1.226-1.227c.995 1.047 2.349 1.457 3.906 1.457 2.067 0 3.344-.741 3.344-2.224 0-1.098-.638-1.711-2.093-1.84l-2.068-.178c-2.451-.204-3.753-1.304-3.753-3.374 0-2.299 1.94-3.679 4.621-3.679 1.788 0 3.396.434 4.519 1.354l-1.2 1.201c-.894-.69-2.042-.996-3.344-.996-1.838 0-2.809.792-2.809 2.07 0 1.073.613 1.712 2.196 1.84l2.017.178c2.196.205 3.702 1.048 3.702 3.399 0 2.428-2.068 3.833-5.106 3.833zM54.447 59.224c-2.145 0-3.217-1.508-3.217-3.374v-7.717h-1.583v-1.406h1.583v-3.936h1.838v3.936h2.681v1.406h-2.681V55.8c0 1.15.536 1.84 1.71 1.84h.971v1.584h-1.302zM66.598 49.947c-.485-1.149-1.609-1.891-2.937-1.891s-2.451.741-2.936 1.891c-.281.69-.332 1.073-.383 2.095h6.638c-.051-1.022-.102-1.405-.382-2.095zm-6.256 3.475c0 2.76 1.302 4.345 3.702 4.345 1.456 0 2.297-.435 3.293-1.431l1.251 1.098c-1.276 1.278-2.451 1.942-4.596 1.942-3.319 0-5.489-1.993-5.489-6.439 0-4.064 1.966-6.44 5.157-6.44 3.242 0 5.158 2.351 5.158 6.083v.843h-8.476v-.001zM72.724 59.224V46.651h1.838v12.573h-1.838zm.92-16.05c-.689 0-1.251-.562-1.251-1.251s.562-1.252 1.251-1.252 1.276.562 1.276 1.252-.587 1.251-1.276 1.251zM87.225 59.224V51.48c0-2.223-1.199-3.347-3.088-3.347s-3.114 1.15-3.114 3.347v7.744h-1.838V46.651h1.838v1.379c.892-1.022 2.119-1.533 3.523-1.533 1.353 0 2.451.409 3.216 1.175.894.869 1.302 2.044 1.302 3.5v8.051h-1.839v.001zM98.765 53.244v4.498h-1.709v-4.498h-4.494v-1.713h4.494v-4.446h1.709v4.446h4.469v1.713h-4.469zM111.198 48.133c-2.732 0-3.166 2.351-3.166 4.805 0 2.453.433 4.804 3.166 4.804 2.732 0 3.141-2.352 3.141-4.804 0-2.454-.409-4.805-3.141-4.805zm3.165 11.091v-1.508c-1.02 1.329-2.195 1.661-3.574 1.661-1.276 0-2.4-.435-3.064-1.098-1.276-1.277-1.531-3.374-1.531-5.341 0-1.968.255-4.064 1.531-5.342.664-.665 1.788-1.099 3.064-1.099 1.379 0 2.528.307 3.549 1.61v-7.079h1.838v18.195h-1.813v.001zM128.176 49.947c-.485-1.149-1.608-1.891-2.935-1.891-1.328 0-2.451.741-2.938 1.891-.279.69-.332 1.073-.382 2.095h6.639c-.053-1.022-.103-1.405-.384-2.095zm-6.256 3.475c0 2.76 1.302 4.345 3.703 4.345 1.455 0 2.298-.435 3.293-1.431l1.251 1.098c-1.276 1.278-2.451 1.942-4.597 1.942-3.318 0-5.489-1.993-5.489-6.439 0-4.064 1.968-6.44 5.159-6.44 3.242 0 5.157 2.351 5.157 6.083v.843h-8.477v-.001zM138.259 59.376c-2.118 0-3.778-.485-5.157-1.814l1.226-1.227c.997 1.047 2.35 1.457 3.907 1.457 2.068 0 3.345-.741 3.345-2.224 0-1.098-.639-1.711-2.095-1.84l-2.067-.178c-2.451-.204-3.753-1.304-3.753-3.374 0-2.299 1.941-3.679 4.621-3.679 1.788 0 3.396.434 4.52 1.354l-1.201 1.201c-.892-.69-2.042-.996-3.345-.996-1.837 0-2.807.792-2.807 2.07 0 1.073.613 1.712 2.196 1.84l2.017.178c2.196.205 3.701 1.048 3.701 3.399-.001 2.428-2.069 3.833-5.108 3.833zM146.965 59.224V46.651h1.838v12.573h-1.838zm.92-16.05c-.689 0-1.251-.562-1.251-1.251s.562-1.252 1.251-1.252 1.276.562 1.276 1.252-.586 1.251-1.276 1.251zM157.74 48.133c-2.732 0-3.141 2.351-3.141 4.702s.409 4.702 3.141 4.702c2.73 0 3.114-2.351 3.114-4.702s-.383-4.702-3.114-4.702zM157.459 65c-1.891 0-2.936-.486-4.265-1.688l1.201-1.175c.918.818 1.557 1.253 3.013 1.253 2.425 0 3.446-1.712 3.446-3.859v-1.967c-1.021 1.303-2.17 1.636-3.523 1.636-1.276 0-2.375-.46-3.039-1.125-1.25-1.253-1.531-3.194-1.531-5.239s.281-3.987 1.531-5.239c.664-.665 1.788-1.099 3.064-1.099 1.379 0 2.503.307 3.523 1.636v-1.482h1.813v12.957c.001 3.116-1.94 5.391-5.233 5.391zM175.331 59.224V51.48c0-2.223-1.201-3.347-3.09-3.347-1.889 0-3.115 1.15-3.115 3.347v7.744h-1.838V46.651h1.838v1.379c.894-1.022 2.12-1.533 3.523-1.533 1.353 0 2.451.409 3.218 1.175.892.869 1.302 2.044 1.302 3.5v8.051h-1.838v.001zM181.417 40.628c1.221 0 2.209.989 2.209 2.211a2.21 2.21 0 11-4.418 0 2.21 2.21 0 012.209-2.211zm0 3.982c.995 0 1.733-.739 1.733-1.771s-.738-1.771-1.733-1.771-1.734.739-1.734 1.771c.001 1.032.739 1.771 1.734 1.771zm-.836-3.12h.978c.591 0 .884.238.884.77 0 .513-.299.708-.659.751l.739 1.057h-.513l-.738-1.044h-.25v1.044h-.44V41.49zm.44 1.129h.305c.355 0 .677-.024.677-.36 0-.299-.292-.367-.579-.367h-.403v.727z"></path>
                            <g fill="#E4032E">
                                <path d="M0 1.968h10.026c3.626 0 5.503.543 7.296 2.093 1.664 1.424 2.432 3.099 2.432 5.192 0 1.969-.726 3.644-2.005 4.899-.854.796-1.365 1.088-2.73 1.507 3.968 1.172 5.888 3.517 5.888 7.328 0 4.02-2.56 7.704-7.765 8.04a82.99 82.99 0 01-3.797.083H0V1.968zm5.888 4.983v6.699h3.541c1.408 0 2.048-.083 2.56-.376.811-.419 1.536-1.842 1.536-3.015 0-1.215-.683-2.471-1.707-2.931-.512-.251-1.152-.377-2.475-.377H5.888zm.085 11.515v7.872h3.883c1.237 0 2.09-.209 2.773-.67.896-.67 1.536-2.01 1.536-3.392 0-1.674-.896-3.14-2.176-3.559-.725-.25-.938-.25-2.303-.25H5.973zM27.648.292c1.92 0 3.456 1.55 3.456 3.475 0 1.927-1.578 3.476-3.541 3.476-1.92 0-3.499-1.549-3.499-3.476.001-1.925 1.622-3.475 3.584-3.475zm-2.943 9.757l5.717-.879v21.941h-5.717V10.049zM35.03 10.51l5.12-1.339c.512.879.811 1.841.896 3.056.811-1.089 2.176-2.219 3.243-2.722.469-.209 1.237-.334 1.877-.334.854 0 1.237.083 2.133.46l-1.579 4.941c-.555-.294-1.024-.419-1.664-.419-1.28 0-2.432.586-3.499 1.8v15.158H35.84v-14.32c.001-2.889-.34-5.067-.81-6.281zM49.495 1.382L55.254 0c.256 1.591.342 4.104.342 6.951v24.161h-5.717V6.951c-.001-1.885-.043-3.35-.384-5.569zm11.817 8.207h6.869l-6.954 9.044 8.576 12.479h-6.741l-7.338-12.144 5.588-9.379zM86.272 25.417l2.219 3.35c-2.518 2.009-5.163 2.973-8.234 2.973-6.272 0-10.325-4.354-10.325-11.096 0-3.852.811-6.407 2.73-8.5 1.792-1.968 3.967-2.889 6.869-2.889 2.516 0 4.905.837 6.314 2.261 2.005 2.01 2.901 4.899 2.901 9.379v1.299H76.119v.167c0 3.308 1.664 5.192 4.608 5.192 1.962-.001 3.796-.713 5.545-2.136zm-10.068-7.328h6.613v-.251c0-1.592-.17-2.429-.682-3.225-.555-.837-1.365-1.256-2.517-1.256-2.176 0-3.414 1.675-3.414 4.647v.085zM92.077 10.551l5.077-1.423c.513.879.811 1.8.811 2.68 1.324-.921 1.579-1.088 2.518-1.59 1.152-.586 2.646-.922 3.925-.922 2.431 0 4.565 1.256 5.247 3.099.299.795.427 1.717.427 3.057v15.661h-5.631V17.167c0-2.428-.426-3.141-1.92-3.141-1.152 0-2.646.754-3.967 1.926V31.11h-5.717V15.577c-.002-1.843-.258-3.602-.77-5.026zM114.861 10.678l5.162-1.382c.384.586.554 1.088.768 2.178 1.494-1.424 3.327-2.178 5.332-2.178 1.793 0 3.286.586 4.438 1.759.299.293.426.46.853 1.047 2.005-2.01 3.798-2.806 6.187-2.806 1.706 0 3.327.503 4.309 1.34 1.237 1.047 1.621 2.303 1.621 5.234v15.242h-5.546V16.958c0-2.554-.299-3.056-1.792-3.056-1.065 0-2.559.711-3.796 1.8v15.41h-5.418V17.167c0-2.68-.384-3.308-1.962-3.308-1.067 0-2.518.545-3.755 1.633v15.619h-5.588V16.162c-.002-3.099-.216-4.438-.813-5.484zM163.842 25.417l2.217 3.35c-2.517 2.009-5.162 2.973-8.234 2.973-6.271 0-10.324-4.354-10.324-11.096 0-3.852.811-6.407 2.73-8.5 1.792-1.968 3.967-2.889 6.869-2.889 2.517 0 4.906.837 6.314 2.261 2.005 2.01 2.9 4.899 2.9 9.379v1.299h-12.627v.167c0 3.308 1.663 5.192 4.608 5.192 1.963-.001 3.797-.713 5.547-2.136zm-10.069-7.328h6.613v-.251c0-1.592-.17-2.429-.683-3.225-.554-.837-1.364-1.256-2.517-1.256-2.176 0-3.413 1.675-3.413 4.647v.085zM173.017.292c1.92 0 3.455 1.55 3.455 3.475 0 1.927-1.579 3.476-3.541 3.476-1.92 0-3.499-1.549-3.499-3.476 0-1.925 1.622-3.475 3.585-3.475zm-2.945 9.757l5.717-.879v21.941h-5.717V10.049zM195.843 25.417l2.217 3.35c-2.517 2.009-5.162 2.973-8.234 2.973-6.271 0-10.324-4.354-10.324-11.096 0-3.852.81-6.407 2.73-8.5 1.792-1.968 3.967-2.889 6.869-2.889 2.517 0 4.906.837 6.314 2.261 2.005 2.01 2.9 4.899 2.9 9.379v1.299h-12.628v.167c0 3.308 1.664 5.192 4.608 5.192 1.964-.001 3.798-.713 5.548-2.136zm-10.07-7.328h6.613v-.251c0-1.592-.17-2.429-.683-3.225-.554-.837-1.364-1.256-2.517-1.256-2.176 0-3.414 1.675-3.414 4.647v.085zM201.731 10.51l5.12-1.339c.513.879.811 1.841.897 3.056.811-1.089 2.175-2.219 3.242-2.722.469-.209 1.237-.334 1.877-.334.853 0 1.237.083 2.132.46l-1.579 4.941a3.26 3.26 0 00-1.663-.419c-1.28 0-2.432.586-3.499 1.8v15.158h-5.718v-14.32c.002-2.889-.339-5.067-.809-6.281z"></path>
                            </g>
                        </svg>
                        <div class="card-body">
                            <h5 class="card-title">Birkenmeier Stein+Design</h5>
                            <p class="card-text">Exklusive Steine und Platten für anspruchsvolle Gestaltung.</p>
                            <a href="https://www.birkenmeier.com/" class="btn btn-primary" target="_blank" rel="noopener noreferrer">Besuchen</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="img/naturesteinpark.webp" class="card-img-top" alt="Natur Stein Park Logo">
                        <div class="card-body">
                            <h5 class="card-title">Natur Stein Park</h5>
                            <p class="card-text">Vielfältige Natursteinlösungen für jeden Geschmack.</p>
                            <a href="https://www.natur-stein-park.de/hp1/Startseite.htm" class="btn btn-primary" target="_blank" rel="noopener noreferrer">Besuchen</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-center mb-5">Über TF-Schwimmbadbau/Gartenbau</h2>
                        <div class="card mb-4">
                            <div class="card-header bg-primary text-white">
                                <h3 class="mb-0">Impressum</h3>
                            </div>
                            <div class="card-body">
                                <h4>Verantwortlich für den Inhalt dieser Webseite:</h4>
                                <ul class="list-unstyled">
                                    <li><strong>Name:</strong> Fabian Tuscher</li>
                                    <li><strong>Adresse:</strong> Münchener Str. 19, 93326 Abensberg</li>
                                    <li><strong>Telefon:</strong> 017623768429</li>
                                    <li><strong>Website:</strong> <a href="http://www.garten-mit-pep.de" target="_blank">www.garten-mit-pep.de</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header bg-info text-white">
                                <h3 class="mb-0">Rechtliche Hinweise</h3>
                            </div>
                            <div class="card-body">
                                <h4>Haftung für Inhalte</h4>
                                <p>Die Inhalte unserer Seiten wurden mit größter Sorgfalt erstellt. Für die Richtigkeit, Vollständigkeit und Aktualität der Inhalte können wir jedoch keine Gewähr übernehmen. Als Diensteanbieter sind wir gemäß § 7 Abs.1 TMG für eigene Inhalte auf diesen Seiten nach den allgemeinen Gesetzen verantwortlich.</p>
                                <h4>Haftung für Links</h4>
                                <p>Unser Angebot enthält Links zu externen Webseiten Dritter, auf deren Inhalte wir keinen Einfluss haben. Deshalb können wir für diese fremden Inhalte auch keine Gewähr übernehmen.</p>
                                <h4>Urheberrecht</h4>
                                <p>Die durch die Seitenbetreiber erstellten Inhalte und Werke auf diesen Seiten unterliegen dem deutschen Urheberrecht. Die Vervielfältigung, Bearbeitung, Verbreitung und jede Art der Verwertung außerhalb der Grenzen des Urheberrechtes bedürfen der schriftlichen Zustimmung des jeweiligen Autors bzw. Erstellers.</p>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header bg-success text-white">
                                <h3 class="mb-0">Datenschutz</h3>
                            </div>
                            <div class="card-body">
                                <h4>Allgemeine Informationen</h4>
                                <p>Die Nutzung unserer Webseite ist in der Regel ohne Angabe personenbezogener Daten möglich. Soweit auf unseren Seiten personenbezogene Daten erhoben werden, erfolgt dies, soweit möglich, stets auf freiwilliger Basis.</p>
                                <h4>Verwendung von Google Analytics</h4>
                                <p>Diese Website benutzt Google Analytics, einen Webanalysedienst der Google Inc. ("Google"). Google Analytics verwendet sog. "Cookies", Textdateien, die auf Ihrem Computer gespeichert werden und die eine Analyse der Benutzung der Website durch Sie ermöglichen.</p>
                                <h4>Verwendung von Google +1</h4>
                                <p>Mithilfe der Google +1-Schaltfläche können Sie Informationen weltweit veröffentlichen. Über die Google +1-Schaltfläche erhalten Sie und andere Nutzer personalisierte Inhalte von Google und unseren Partnern.</p>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header bg-warning text-dark">
                                <h3 class="mb-0">Personenbezogene Daten</h3>
                            </div>
                            <div class="card-body">
                                <p>Im Allgemeinen verwenden wir Ihre personenbezogenen Daten nur, um Ihre Anfrage zu beantworten, Ihren Auftrag zu bearbeiten oder Ihnen Zugang zu speziellen Informationen oder Angeboten zu verschaffen. Wir werden Ihre personenbezogenen Daten weder an Dritte verkaufen noch anderweitig vermarkten.</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header bg-danger text-white">
                                <h3 class="mb-0">Haftungsausschluss</h3>
                            </div>
                            <div class="card-body">
                                <p>TF-Pflasterbau oder seine Vertreter sind nicht für die Inhalte von Websites verantwortlich, auf die direkt oder indirekt per Link verwiesen wird. Die straf- und zivilrechtliche Verantwortung liegt beim jeweiligen Anbieter.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Content End -->
    <!-- Footer -->
    <?php include 'partials/footer.php'; ?>
    <!-- Back to Top Button -->
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