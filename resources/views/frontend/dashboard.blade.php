<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard | Diploma Stars</title>
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
          <li><a class="nav-link scrollto" href="logout">Logout</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======Dashboard==========-->
  <main id="main" class="main">


    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card py-5">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
              @if( $user->image)
              <img src="{{ $user->image }}" alt="Profile" class="rounded-circle">
              @else
              <img src="assets/img/icon/user.png" alt="Profile" class="rounded-circle">
              @endif

              <h2>{{ $user->name }}</h2>
              <h3>{{ $user->job_profile }}</h3>
              <!-- <div class="social-links mt-2">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div> -->
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-picture">Profile Image</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Profile Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                    <div class="col-lg-9 col-md-8">{{ $user->name }}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Branch</div>
                    <div class="col-lg-9 col-md-8">{{ $user->branch }}</div>
                  </div>

                  @if($user->company)
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Company</div>
                    <div class="col-lg-9 col-md-8">{{ $user->company }}</div>
                  </div>
                  @endif

                  @if($user->job_profile)
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Job Profile</div>
                    <div class="col-lg-9 col-md-8">{{ $user->job_profile }}</div>
                  </div>
                  @endif

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">College</div>
                    <div class="col-lg-9 col-md-8">

                        @if($user->college)
                          {{ $user->college }}
                        @else
                          Not Available
                        @endif

                    </div>
                  </div>

                  @if($user->achivement)
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Achivement</div>
                    <div class="col-lg-9 col-md-8">{{ $user->achivement }}</div>
                  </div>
                  @endif

                  @if($user->message)
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Message</div>
                    <div class="col-lg-9 col-md-8">{{ $user->message }}</div>
                  </div>
                  @endif

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8">{{ $user->email }}</div>
                  </div>

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form method="POST" action="">
                  {{ @csrf_field() }}
                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="name" type="text" class="form-control" id="fullName" value="{{ $user->name }}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="company" class="col-md-4 col-lg-3 col-form-label">Branch</label>
                      <div class="col-md-8 col-lg-9">
                        <select name="branch" class="form-control" required>
                          <option value="" selected disabled>Your Branch</option>
                          <option value="Civil Engineering" {{ $user->branch =="Civil Engineering" ? "selected" : "" }} >Civil Engineering</option>
                          <option value="Electrical Engineering" {{ $user->branch =="Electrical Engineering" ? "selected" : "" }} >Electrical Engineering</option>
                          <option value="Mechanical Engineering" {{ $user->branch =="Mechanical Engineering" ? "selected" : "" }} >Mechanical Engineering</option>
                          <option value="Electronics Engineering" {{ $user->branch =="Electronics Engineering" ? "selected" : "" }} >Electronics Engineering</option>
                          <option value="Computer Science" {{ $user->branch =="Computer Science" ? "selected" : "" }} >Computer Science</option>
                          <option value="Information Technology" {{ $user->branch =="Information Technology" ? "selected" : "" }} >Information Technology</option>
                          <option value="Chemical Engineering" {{ $user->branch =="Chemical Engineering" ? "selected" : "" }} >Chemical Engineering</option>
                        </select>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Job" class="col-md-4 col-lg-3 col-form-label">College</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="college" type="text" class="form-control" id="college" value="{{ $user->college }}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Country" class="col-md-4 col-lg-3 col-form-label">Company</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="company" type="text" class="form-control" id="Company" value="{{ $user->company }}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Address" class="col-md-4 col-lg-3 col-form-label">Job Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="job_profile" type="text" class="form-control" id="Job" value="{{ $user->job_profile }}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Achivement</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="achivement" type="text" class="form-control" id="achivement" value="{{ $user->achivement }}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="email" class="form-control" id="Email" value="{{ $user->email }}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="about" class="col-md-4 col-lg-3 col-form-label">Message</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea name="message" class="form-control" id="about" style="height: 70px">{{ $user->message }}</textarea>
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-danger">Save Changes</button>
                    </div>
                  </form><!-- End Profile Edit Form -->
                  </div>

                  <!-- Profile Pictre Update -->
                  <div class="tab-pane fade profile-picture pt-3" id="profile-picture">
                      <div class="row mb-3">
                        <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                        <div class="col-md-8 col-lg-9">
                          @if( $user->image)
                          <img src="{{ $user->image }}" alt="Profile">
                          @else
                          <img src="assets/img/icon/user.png" alt="Profile">
                          @endif
                          
                          <form method="POST" enctype="multipart/form-data" action="upload">
                          {{ @csrf_field() }}
                            <div class="pt-2">
                              <label class="btn btn-primary btn-sm">
                                <input type="file" name="image" style="display: none;" />
                                <i class="bi bi-upload"></i>
                                Upload
                              </label>
                              <button type="submit" class="btn btn-outline-primary btn-sm">
                                Submit
                              </button>
                            </div>
                            @error('image')
                            <span class="col-12 text-center text-danger">
                                  {{$message}}
                            </span>
                            @enderror
                            
                          </form>
                          <div class="pt-2">
                              <form action="remove-profile-img" method="post">
                              {{ @csrf_field() }}
                              <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete?')"><i class="bi-trash"></i>&nbsp;Delete</button>
                              </form>
                              </div>
                        </div>
                      </div>
                    </form>

                  </div><!-- Profile Pictre Update -->

              </div><!-- End Bordered Tabs -->

            </div>
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