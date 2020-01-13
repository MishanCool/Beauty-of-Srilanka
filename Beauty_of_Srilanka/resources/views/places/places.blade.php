<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Beauty Of Sri Lanka & Places</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="{{ URL::asset('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet') }}">

    <link rel="stylesheet" href="{{ URL::asset('css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/animate.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('css/aos.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">

    {{-- <link rel="stylesheet" href="{{ URL::asset('mycss/mycss.css') }}"> --}}
  </head>
  <body>



    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container d-flex align-items-center px-4">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
            </button>
            <form action="#" class="searchform order-lg-last">
            <div class="form-group d-flex">
                <input type="text" class="form-control pl-3" placeholder="Search">
                <button type="submit" placeholder="" class="form-control search"><span class="ion-ios-search"></span></button>
            </div>
            </form>
            <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active"><a href="{{ URL::to('/') }}" class="nav-link pl-0">Home</a></li>
                <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                <li class="nav-item"><a href="courses.html" class="nav-link">Courses</a></li>
                <li class="nav-item"><a href="teacher.html" class="nav-link">Staff</a></li>
                <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Sign In</a></li>
                <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Sign Up</a></li>

            </ul>
            </div>
        </div>
        </nav>
    <!-- END nav -->

    <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image:url(../../../images/home1.jpg);">
            <div class="overlay"></div>
          <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
            <div class="col-md-6 ftco-animate">
              <h1 class="mb-4">Beauty of Sri Lanka</h1>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              {{-- <a><a href="#" class="btn btn-primary px-4 py-3 mt-3">Contact Us</a></a> --}}
            </div>
          </div>
          </div>
        </div>

        <div class="slider-item" style="background-image:url(../../../images/home2.jpg);">
            <div class="overlay"></div>
          <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
            <div class="col-md-6 ftco-animate">
              <h1 class="mb-4">Protect Sri Lanka</h1>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              {{-- <a><a href="#" class="btn btn-primary px-4 py-3 mt-3">Contact Us</a></a> --}}
            </div>
          </div>
          </div>
        </div>
      </section>





    <footer class="ftco-footer ftco-footer-2 ftco-section">
        <div class="container">
          <div class="row mb-5">
            <div class="col-md">
              <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">Knights</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                  <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
              </div>
            </div>
            <div class="col-md">
              <div class="ftco-footer-widget mb-4">
                  <h2 class="ftco-heading-2">Have a Questions?</h2>
                  <div class="block-23 mb-3">
                    <ul>
                      <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                      <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                      <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
                    </ul>
                  </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">

              <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
          </div>
        </div>
      </footer>




     <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
  <script src="{{ URL::asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ URL::asset('js/popper.min.js') }}"></script>
  <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ URL::asset('js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ URL::asset('js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ URL::asset('js/jquery.stellar.min.js') }}"></script>
  <script src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
  <script src="{{ URL::asset('js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ URL::asset('js/aos.js') }}"></script>
  <script src="{{ URL::asset('js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ URL::asset('js/scrollax.min.js') }}"></script>
  {{-- <script src="{{ URL::asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false') }}"></script> --}}
  <script src="{{ URL::asset('js/google-map.js') }}"></script>
  <script src="{{ URL::asset('js/main.js') }}"></script>

  </body>
</html>
