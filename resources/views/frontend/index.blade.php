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
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto " href="#thanks">Thanks</a></li>
          <li><a class="nav-link scrollto" href="#review">Review</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          @if(Session::has('userid'))
          <li><a class="nav-link scrollto" href="dashboard">Dashboard</a></li>
          @else
          <li><a class="nav-link scrollto" href="login">Login</a></li>
          <li><a class="nav-link scrollto" href="#register">Register</a></li>
          @endif
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======Slider==========-->
  <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img src="assets/img/slider/3.jpg" class="w-100 d-block" alt="First slide">
        </div>
        <div class="carousel-item">
            <img src="assets/img/slider/4.jpg" class="w-100 d-block" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img src="assets/img/slider/1.jpg" class="w-100 d-block" alt="Third slide">
        </div>
        <div class="carousel-item">
            <img src="assets/img/slider/5.jpg" class="w-100 d-block" alt="forth slide">
        </div>
        <div class="carousel-item">
          <img src="assets/img/slider/2.jpg" class="w-100 d-block" alt="forth slide">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- ======End Slider==========-->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="row">
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="">
            <div class="feature-1 text-center">
              <div class="wrap-icon icon-1">
                <i class="bi bi-fire"></i>
              </div>
              <h3 class="mb-3">Get Inspiration</h3>
              <p>Get inspiration from your senior and move forward in the Future</p>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="feature-1 text-center">
              <div class="wrap-icon icon-1">
                <i class="bi bi-mortarboard"></i>
              </div>
              <h3 class="mb-3">Be Diploma Star</h3>
              <p>We wish you, get success in your life and become a Diploma Star</p>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="feature-1 text-center">
              <div class="wrap-icon icon-1">
                <i class="bi bi-bar-chart"></i>
              </div>
              <h3 class="mb-3">Carrior Growth</h3>
              <p>Get motivation from your seniors to achive your dream in the Future</p>
            </div>
          </div>
        </div>
        </div>

      </div>
    </section>
    <!-- End Featured Services Section -->
    
    <!-- ======= Diploma Stars Profile ======= -->
    <section>
      <div class="container">
        <div class="section-title">
          <h2>Meet</h2>
          <h3>Diploma <span>Stars</span></h3>
          <p>These Students got success in their life, and bacame a inspiration for coming student in Diploma</p>
        </div>
        <div class="row mx-1">
        @foreach($data as $diplomastar)
          <div class="col1">
            <div class="pic">
            @if( $diplomastar->image)
            <img class="img1" src="{{ $diplomastar->image }}">
              @else
              <img class="img1" src="assets/img/icon/user.png">
              @endif
                
            </div>
            <div class="contain">
              <h2 class="card-name">{{ $diplomastar->name }}</h2>
              <h3 class="card-discription">{{ $diplomastar->job_profile}} in {{ $diplomastar->company }}</h3>
                  Branch: {{ $diplomastar->branch }}<br>
                  {{ $diplomastar->college }}<br>
                    <form method="post" action="details">{{ @csrf_field() }}<button class="btn btn-danger mt-2" type="submit" name="id" value="{{ $diplomastar->id }}">More Details</button></form>
            </div>
          </div>
          @endforeach
          
        </div>
      </div>
    </section>
    <!-- ======= Diploma Stars Profile ======= -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
          <h3>About <span>College</span></h3>
          <p>This institude is one of the oldest Polytechnic Institude in U.P. It is located on National Highway No. 7 (Riwa Road)</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <img src="assets/img/government_polytechnic_mirzapur.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <h3>Government Polytechnic, Mirzapur Uttar, Pradesh</h3>
            <p>
              The institution has a strong academic heritage having an envious track record of placement with major companies in India. A dynamic, industrious and prudent Principal, along with highly efficient and effective team of faculty members, leads the college. It is indeed a pleasure to admit that we have progressed rapidly to achieve the goal of imparting quality education to the students.
            </p>
            <ul>
              <li>
                <i class="bx bx-bar-chart"></i>
                <div>
                  <h5>Vision</h5>
                  <p>Our vision is to develop well rounded, confident and responsible individuals who aspire to achieve their full potential. We will do this by providing a welcoming, happy, safe, and supportive learning environment in which everyone is equal and all achievements are celebrated.</p>
                </div>
              </li>
              <li>
                <i class="bx bx-award"></i>
                <div>
                  <h5>Mission</h5>
                  <p>At the core of all we do is a focus on our students’ needs as we prepare them for their careers. Our educators are highly efficient who work side-by-side with our students in hands-on, innovative and creative learning environments..</p>
                </div>
              </li>
            </ul>
            <p>
              The institute is affiliated from the Board of Technical Education, U.P., Lucknow and all running courses are approved by All India Council for Technical Education (AICTE).
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->


    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="1032" data-purecounter-duration="1" class="purecounter"></span>
              <p>Placed Students</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-briefcase"></i>
              <span data-purecounter-start="0" data-purecounter-end="144000" data-purecounter-duration="1" class="purecounter"></span>
              <p>Average Package</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-bank"></i>
              <span data-purecounter-start="0" data-purecounter-end="109" data-purecounter-duration="1" class="purecounter"></span>
              <p>Govt. College in U.P.</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p>Registerd Students</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container" data-aos="zoom-in">

        <div class="row">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/companies/Tata-Group.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/companies/Vedanta.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/companies/Ultratech_Cement.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/companies/Wipro-logo.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/companies/Larsen__Toubro_Logo.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/companies/aditya-birla.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Services Section ======= -->
    <section id="thanks" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Mentors</h2>
          <h3>Special <span>Thanks</span></h3>
          <p>We whould like to thank all our mentors from the bottom of the heart, who helped us to make this Project.</p>
        </div>

        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-3 mb-5" data-aos="zoom-in" data-aos-delay="100">
            <div class="d-flex justify-content-center mb-3 mx-5">
              <img class="img-fluid rounded-circle" src="assets/img/mentors/principal.jpeg" alt="" srcset="">
            </div>
            <div class="text-center">
              <h4><a href="">Shri Rakesh Varma</a></h4>
              <p><b>Principle</b><br>Government polytecnic Mirzapur</p>
            </div>
          </div>
          <div class="col-md-2"></div>
          <div class="col-md-3" data-aos="zoom-in" data-aos-delay="100">
            <div class="d-flex justify-content-center mb-3 mx-5">
              <img class="img-fluid rounded-circle" src="assets/img/mentors/swadesh_kumar.jpg" alt="" srcset="">
            </div>
            <div class="text-center">
              <h4><a href="">Shri Swadesh Kumar</a></h4>
              <p><b>Head of Department</b><br>
                Information Technology<br>
                Government polytecnic Mirzapur</p>
              
            </div>
          </div>
          <div class="col-md-2"></div>


        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="review" class="testimonials">
      <div class="container" data-aos="zoom-in">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/review/sachin.jpeg" class="testimonial-img" alt="">
                <h3>Sachin Sukla</h3>
                <h4>Student<br>Goverment Polytechnic, Lucknow</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  we whould like to thank diploma stars for giving us such type of inspiration to grow in our carrior.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/review/sonam.jpg" class="testimonial-img" alt="">
                <h3>Sonam Gaur</h3>
                <h4>Student<br>Gandhi Polytechnic, Muzaffarnagar</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  I am so inspired by Diploma stars message, It gives me ray of hope for grow in my life, and i am sure that i will be succeed in my life.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/review/anutosh.jpg" class="testimonial-img" alt="">
                <h3>Anutosh Gautam</h3>
                <h4>Student<br>Goverment Polytechnic, Mirzapur</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  we whould like to thank diploma stars for giving us such type of inspiration to grow in our carrior.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/review/satyam.jpg" class="testimonial-img" alt="">
                <h3>Satyam Singh</h3>
                <h4>Student<br>Goverment Polytechnic, Kanpur</h4>

                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  I am so inspired by Diploma stars message, It gives me ray of hope for grow in my life, and i am sure that i will be succeed in my life.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <h3><span>Contact Us</span></h3>
          <p>Contact information given below, so you can easily contact with us.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>Bathua, Riwa Rd, Mirzapur, 231001</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>contact@govtpolymzp.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>+91 8726833838</p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6 ">
            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14448.980279312736!2d82.5633867!3d25.1274042!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398fc0274831b749%3A0xdc4a69a60c2c69c5!2sGovernment%20Polytechnic!5e0!3m2!1sen!2sin!4v1686019932397!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14448.980279312736!2d82.5633867!3d25.1274042!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398fc0274831b749%3A0xdc4a69a60c2c69c5!2sGovernment%20Polytechnic!5e0!3m2!1sen!2sin!4v1686019932397!5m2!1sen!2sin" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

          <div id="register" class="col-lg-6">
            <form action="submit" method="post" role="form" class="form">
            {{ @csrf_field() }}
              <div class="section-title">
                <h2>Register Now</h2>
                <p>Register for Become a Diploma Star</p>
              </div>
              <div class="row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" value="{{old('name')}}" required>
                  <span class="text-danger">
                    @error('name')
                    {{$message}}
                    @enderror
                  </span>
                </div>
                <div class="col form-group">
                  <select name="branch" id=""  class="form-control" required>
                    <option value="" selected disabled>Your Branch</option>
                    <option value="Civil Engineering" {{ old('branch') =="Civil Engineering" ? "selected" : "" }} >Civil Engineering</option>
                    <option value="Electrical Engineering" {{ old('branch') =="Electrical Engineering" ? "selected" : "" }} >Electrical Engineering</option>
                    <option value="Mechanical Engineering" {{ old('branch') =="Mechanical Engineering" ? "selected" : "" }} >Mechanical Engineering</option>
                    <option value="Electronics Engineering" {{ old('branch') =="Electronics Engineering" ? "selected" : "" }} >Electronics Engineering</option>
                    <option value="Computer Science" {{ old('branch') =="Computer Science" ? "selected" : "" }} >Computer Science</option>
                    <option value="Information Technology" {{ old('branch') =="Information Technology" ? "selected" : "" }} >Information Technology</option>
                    <option value="Chemical Engineering" {{ old('branch') =="Chemical Engineering" ? "selected" : "" }} >Chemical Engineering</option>
                  </select>
                  <span class="text-danger">
                    @error('branch')
                    {{$message}}
                    @enderror
                  </span>
                </div>
              </div>
              <div class="col form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" value= "{{old('email')}}" required>
                <span class="text-danger">
                    @error('email')
                    {{$message}}
                    @enderror
                  </span>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="password" id="password" placeholder="Password" required>
                <span class="text-danger">
                    @error('password')
                    {{$message}}
                    @enderror
                  </span>
              </div>
              <div class="text-center"><button type="submit" name="submit" >Submit</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Join Newsletter for new update from the college and website</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <a href="index.html" class="logo"><img src="assets/img/icon/diploma-stars-logo.png" alt=""> Diploma Stars</a>
            <h3></h3>
            <p>
              Inspired by: <br>
              Government Polytechnic, Mirzapur<br>
              For All Diploma Students<br><br>
              <strong>Phone:</strong> +91 8726833838<br>
              <strong>Email:</strong> info@govtpolymzp.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Sections</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#thanks">Special Thanks</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#review">Student Reviews</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#register">Register</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="login.php">Login</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Google Map</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Official Website</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="admin">Admin Login</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Check out and Follow our all our Social Media Networks</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-youtube"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

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