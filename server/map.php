<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>DIT Air Quality Center</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons --
  <link href="assets/img/logo.png" rel="icon" alt="Logo" class="avatar rounded-circle">

  <!-- Leaflet CSS -->
  <link rel="stylesheet" href="assets/leaflet/leaflet.css" />

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- Custom Styles -->
  <style>
    body {
      background-color: purple; /* Set the background color to purple */
    }
  </style>
</head>
<body>

<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
    <a href="index.php" class="logo d-flex align-items-center">
      <!--<img src="assets/img/logo.png" alt="Logo" class="avatar rounded-circle"> -->
      <h1 class="d-flex align-items-center">DIT Air Quality Center</h1>
    </a>

    <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
    <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a href="index.php"><span>Home</span></a></li>
        <li><a href="map.php"><span>Maps</span></a></li> <!-- Corrected link to Maps -->
        <li class="dropdown"><a href="report.php"><span>Data</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
          <ul>
            <li><a href="visual.php">Visualized data</a></li>
            <li><a href="report.php">Data reports</a></li>
            <li><a href="">Add your Sensor</a></li>
          </ul>
        </li>
        <li class="dropdown"><a href="report.php"><span>About us</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
          <ul>
            <li><a href="about.html">About DITAQ Center</a></li>
            <li><a href="">Report Extreme Pollution</a></li>
            <li><a href="">Contact Us</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
</header><!-- End Header -->

<main id="main">
  <!-- ======= Map Section ======= -->
  <section id="mapSection" class="mapSection">
    <div class="container" data-aos="fade-up">
      <div id="map" style="height: 500px;"></div> <!-- Map container -->
    </div>
  </section><!-- End Map Section -->
</main>

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
  <div class="footer-content">
    <div class="footer-legal">
      <div class="container">
        <div class="copyright">
          &copy; <?php echo date('Y'); ?> Copyright <strong>DIT Electronics & Telecommunication department.</strong> All Rights Reserved
        </div>
        <div class="credits"> 
          Designed by <a href="#">Group 2, BENG21 ETE.</a>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Leaflet JavaScript -->
<script src="assets/leaflet/leaflet.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

<!-- Your custom map initialization script -->
<script src="assets/js/map.js"></script>

</body>
</html>
