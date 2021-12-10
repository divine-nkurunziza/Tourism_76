<?php
 require('bookings_db.php') ;

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MIDZO - Booking</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/midzo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

  <body>

    <main>
      <div class="container">
    
        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
    
                <div class="d-flex justify-content-center py-4">
                  <a href="index.html" class="logo d-flex align-items-center w-auto">
                    <img src="assets/img/midzo.png" alt="">
                    <span class="d-none d-lg-block"></span>
                  </a>
                </div><!-- End Logo -->
    
    
                <div class="card mb-3">
    
                  <div class="card-body">
    
                    <div class="pt-4 pb-2">
                      <h5 class="card-title text-center pb-0 fs-4">Make a Booking</h5>
                      <p class="text-center small">Enter your booking details with us</p>
                    </div>
    
                    <form method="Post" action=" " class="row g-3 needs-validation" enctype="multipart/form-data" novalidate>

                       <div class="col-12">
                      <label for="yourMail" class="form-label">email</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="email" name="yourMail" class="form-control" id="yourMail" required>
                        <div class="invalid-feedback">Please enter your email.</div>
                      </div>
                    </div>

    
                      <div class="col-12">
                        <label for="yoursite" class="form-label">Enter your Itinerary</label>
                        <input type="text" name="site" class="form-control" id="yoursite" required>
                        <div class="invalid-feedback">Please enter your chosen site</div>
                      </div>
    
                      

                      <div class="col-12">
                      <label for="yourName" class="form-label">Upload your receipt</label>
                            <input type="file" name="file" >
                        </div>

                      <div class="col-12">
                        <button class="btn btn-primary w-100" type="submit" name="submit1" >Confirm Booking</button>
                      </div>
                      <div class="col-12">
                        <p class="small mb-0">Done Booking?<a href="index.php">Log out</a></p>
                      </div>
                    </form>
    
                  </div>
                </div>
    
                </div>
    
              </div>
            </div>
          </div>
    
        </section>
    
      </div>
    </main><!-- End #main -->
    
    
      <!-- ======= Footer ======= -->
      <footer id="footer">
        <div class="footer-top">
          <div class="container">
            <div class="row">
    
              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                  <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                </ul>
              </div>
    
              <div class="col-lg-3 col-md-6 footer-contact">
                <h4>Contact Us</h4>
                <p>
                  1 University Avenue <br>
                  Berekuso<br>
                  Ghana <br><br>
                  <strong>Phone:</strong> +233-514-634-169<br>
                  <strong>Email:</strong> info@midzo.com<br>
                </p>
    
              </div>
    
              <div class="col-lg-3 col-md-6 footer-info">
                <h3>About Midzo</h3>
                <p>We are a travel agency that aims to give our clients quality service as they explore the world with affordable prices.</p>
                <div class="social-links mt-3">
                  <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                  <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                  <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                  <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                  <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
              </div>
    
              <div class="col-lg-3 col-md-6 footer-links">
                <p class="animate__animated animate__fadeInUp"><img src="assets/img/midzo.png" alt="" class="img-fluid"></a>
              </div>
    
            </div>
          </div>
        </div>
    
        <div class="container">
          <div class="copyright">
            &copy; Copyright <strong><span>Midzo</span></strong>. All Rights Reserved
          </div>
        </div>
      </footer><!-- End Footer -->
    
      <div id="preloader"></div>
      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    
      <!-- Vendor JS Files -->
      <script src="assets/vendor/aos/aos.js"></script>
      <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
      <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
      <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
      <script src="assets/vendor/php-email-form/validate.js"></script>
    
      <!-- Template Main JS File -->
      <script src="assets/js/main.js"></script>
    
    </body>
    
    </html>