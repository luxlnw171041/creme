<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title style="">Cremedelacremes</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="delicious/img/Favicon.png" rel="icon"> -->
  

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@500&family=Satisfy&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('delicious/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('delicious/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('delicious/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('delicious/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('delicious/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('delicious/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('delicious/css/style.css') }}" rel="stylesheet">
  <!-- =======================================================
  * Template Name: Delicious - v4.2.0
  * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
 
<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-flex align-items-center fixed-top topbar-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
      <i class="bi bi-phone d-flex align-items-center"><span >+66(0)86-977-7677, +66(0)95-556-5411</span></i>
      <i class="bi bi-clock ms-4 d-none d-lg-flex align-items-center"><span >Mon-Sun: 08:00 AM - 05:00 PM</span></i>
      &nbsp;<span><div style="margin-top:-15px; margin-left:500px;position: absolute;">
                <div id="google_translate_element"></div>
              </div></span>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <div class="logo me-auto">
        <h1  style="font-family: 'Satisfy', cursive;"><a href="">Creme</a></h1>
        <h5 style="font-family: 'Satisfy', cursive;">&nbsp;&nbsp;&nbsp;&nbsp; <a href="">de la Creme</a></h5>
        
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="asset/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="{{URL::to('/')}}">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li class="dropdown"><a href="#"><span>Petite</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="menu">menu</a></li>
            </ul>
          </li>
        </ul>
        
        <i class="bi bi-list mobile-nav-toggle"></i>
        
      </nav><!-- .navbar -->

    

    </div>
  </header><!-- End Header -->

@yield('content')

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Creme</h3>
      <p>Good bread heals everything.</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <audio controls autoplay loop>
        <source src="delicious/sound/Creme sound.mp3">
    </audio>
      <div class="copyright"> <br>
        &copy; Copyright <strong><span>Creme</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('delicious/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('delicious/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('delicious/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script type="text/javascript">
              function googleTranslateElementInit() {
                new google.translate.TranslateElement({pageLanguage: 'th'}, 'google_translate_element');
              }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  <!-- Template Main JS File -->
  <script src="{{ asset('delicious/js/main.js') }}"></script>
  
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
window.onload = function() {
  var context = new AudioContext();
}
</script>

</body>

</html>