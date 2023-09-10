<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin Dashboard | Diploma Stars</title>
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
      
      <h1 class="logo"><img src="assets/img/icon/logo2.png" alt=""> <a href="/dashboard">Diploma Stars<span></span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/icon/logo3.png" alt=""></a> -->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="/index">Home</a></li>
          <li><a class="nav-link scrollto" href="/#about">About</a></li>
          <li><a class="nav-link scrollto " href="/#thanks">Thanks</a></li>
          <li><a class="nav-link scrollto" href="/#review">Review</a></li>
          <li><a class="nav-link scrollto" href="/#contact">Contact</a></li>
          <li><a class="nav-link scrollto" href="admin-logout">Logout</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======Dashboard==========-->
  <main id="main" class="main">


    <section class="section table">
      <div class="table-responsive">
        <div class="table-responsive">
          <table class="table">
            <thead class="bg-danger">
              <tr class="bg-danger">
                <th scope="col">Profile</th>
                <th scope="col">Name</th>
                <th scope="col">Branch</th>
                <th scope="col">College</th>
                <th scope="col">Job</th>
                <th scope="col">Company</th>
                <th scope="col">Achivement</th>
                <th scope="col">Message</th>
                <th scope="col">Approval</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
              @foreach($student as $students)
              <tr class="">
                <td scope="row">
                @if( $students->image)
                <img style="width:70px; height:70px;" src="{{ $students->image }}">
                @else
                <img style="width:70px; height:70px;" src="assets/img/icon/user.png">
                @endif
                </td>
                <td>{{ $students->name }}</td>
                <td>{{ $students->branch }}</td>
                <td>{{ $students->college }}</td>
                <td>{{ $students->job_profile }}</td>
                <td>{{ $students->company }}</td>
                <td>{{ $students->achivement }}</td>
                <td>{{ $students->message }}</td>
                @if( $students->approval==0 )
                <td><form action="" method="post" >{{ @csrf_field() }}<button class="btn btn-primary btn-sm" type="submit" name="approve" value="{{ $students->id }}">Approve</button></form></td>
                @else
                <td><form action="" method="post" >{{ @csrf_field() }}<button class="btn btn-secondary btn-sm" type="submit" name="disapprove" value="{{ $students->id }}">Disapprove</button></form></td>
                @endif
                <td><form action="" method="post" >{{ @csrf_field() }}<button class="btn btn-danger btn-sm" type="submit" name="delete" value="{{ $students->id }}" onclick="return confirm('Are you sure you want to delete?')">Delete</button></form></td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        
      </div>

        
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