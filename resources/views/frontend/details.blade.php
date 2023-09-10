<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Diploma Stars</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/icon/fevicon.png" rel="icon">
  <link href="assets/img/icon/fevicon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/custom.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      
      <h1 class="logo"><img src="assets/img/icon/logo2.png" alt=""> <a href="/">Diploma Stars<span></span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/icon/logo3.png" alt=""></a> -->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="/index">Home</a></li>
          <li><a class="nav-link scrollto" href="/#about">About</a></li>
          <li><a class="nav-link scrollto " href="/#thanks">Thanks</a></li>
          <li><a class="nav-link scrollto" href="/#review">Review</a></li>
          <li><a class="nav-link scrollto" href="/#contact">Contact</a></li>
          <li><a class="nav-link scrollto" href="login">Login</a></li>
          <li><a class="nav-link scrollto" href="login">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======Dashboard==========-->
  <main id="main" class="main">


    <section class="section profile">
      <div class="row">
        <div class="col-xl-4 col-md-12"></div>

        <div class="col-xl-4 col-md-12">
          <div style="background-color: rgb(255, 254, 227);" class="card py-5 border border-3 border-danger">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
              @if( $details->image)
              <img src="{{ $details->image }}" alt="Profile" class="rounded-circle">
              @else
              <img src="assets/img/icon/user.png" alt="Profile" class="rounded-circle">
              @endif

              <h2>{{ $details->name }}</h2>
              <h5>{{ $details->job_profile }} at {{ $details->company }}</h5>
              <p><b>Branch:</b> {{ $details->branch }} <br>
              <b>College:</b> {{ $details->college }}<br>
              @if($details->achivement)
              <b>Achivement:</b> {{ $details->achivement }}<br>
              @endif
              @if($details->message)
              <b>Message:</b> {{ $details->message }}</p>
              @endif
              <!-- <div class="social-links mt-2">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div> -->
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-md-12"></div>
      </div>
    </section>

  </main><!-- End #main -->


  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Diploma Stars</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/Diplomastars-bootstrap-business-template/ -->
        Designed by <a href="https://manishkumartiwari.com/">Manish Tiwari</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>