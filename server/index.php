<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>DITAQ Center</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon" alt="" class="avatar rounded-circle">
  <link href="assets/img/logo.png" rel="icon" alt="" class="avatar rounded-circle">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  
  <script src="assets/js/map.js"></script> <!-- Custom JavaScript for the map -->
</head>
<body class="page-index">

<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
    <a href="index.php" class="logo d-flex align-items-center">
      <img src="assets/img/logo.png" alt="" class="avatar rounded-circle">
      <h1 class="d-flex align-items-center">DIT Air Quality Center</h1>
	  
    </a>
    <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
    <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    <nav id="navbar" class="navbar">
      <ul>
        <li><a href="index.php"><span>Home</span></a></li>
		
        <li><a href="map.php"><span>Maps</a></li>
		<li><a href="report.php"><span>Data Reports</a></li>
		<li><a href="graphs.php"><span>visualized Data</a></li>
       
        <li class="dropdown"><a href="about.html"><span>About DITAQ Center</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
          <ul>
            
          
          </ul>
        </li>
      </ul>
    </nav>
  </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-xl-4">
        <blockquote>
          <h4 data-aos="fade-up"> AIR Quality data for EveryBody.</h4>
        </blockquote>
        <div class="d-flex" data-aos="fade-up" data-aos-delay="100">
          <a href="visual.php" class="btn-get-started">Check Air quality Status</a>
          <a href="report.php" class="btn-watch-video d-flex align-items-center"><i class="bi-arrow-down-short"></i><span></span></a>
        </div>
      </div>
    </div>
  </div>
</section><!-- End Hero Section -->

<main id="main">

  <!-- ======= Map Section ======= -->
  <section id="mapSection" class="mapSection" style="display:none;">
    <div class="container" data-aos="fade-up">
      <div id="map" style="height: 500px;"></div> <!-- Map container -->
    </div>
  </section><!-- End Map Section -->

  <!-- ======= Our Services Section ======= -->
  <section id="services-list" class="services-list">
    <div class="container" data-aos="fade-up">
      <div class="section-header">
        <h2>General Initiatives</h2>
      </div>
      <div class="row gy-5">
        <!-- Service Items -->
        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
          <div class="icon flex-shrink-0"><i class="bi bi-linkedin" style="color: #f57813;"></i></div>
          <div>
            <h4 class="title"><a href="#" class="stretched-link">Waste management flagship</a></h4>
            <p class="description"></p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
          <div class="icon flex-shrink-0"><i class="ri-base-station-line" style="color: #15a04a;"></i></div>
          <div>
            <h4 class="title"><a href="#" class="stretched-link">Air quality Education</a></h4>
            <p class="description"> </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
          <div class="icon flex-shrink-0"><i class="bi bi-bar-chart" style="color: #d90769;"></i></div>
          <div>
            <h4 class="title"><a href="#" class="stretched-link">Data Analysis</a></h4>
            <p class="description"></p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
          <div class="icon flex-shrink-0"><i class="ri-bar-chart-box-line" style="color: #15bfbc;"></i></div>
          <div>
            <h4 class="title"><a href="#" class="stretched-link">Public Health</a></h4>
            <p class="description"></p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="500">
          <div class="icon flex-shrink-0"><i class="ri-gradienter-line" style="color: #f5cf13;"></i></div>
          <div>
            <h4 class="title"><a href="#" class="stretched-link">Environmental Impact</a></h4>
            <p class="description"></p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="600">
          <div class="icon flex-shrink-0"><i class="ri-database-2-line" style="color: #1335f5;"></i></div>
          <div>
            <h4 class="title"><a href="#" class="stretched-link">Community Initiatives</a></h4>
            <p class="description"></p>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Our Services-->
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
<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>
</html>
