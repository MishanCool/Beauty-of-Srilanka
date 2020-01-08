<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Beauty Of Sri Lanka</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="mycss/mycss.css">
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
        <div class="slider-item" style="background-image:url(images/home1.jpg);">
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

        <div class="slider-item" style="background-image:url(images/home2.jpg);">
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

      <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
        <div class="col-md-1 ftco-animate" id="side-nav">
            <div class="btn-group-vertical ml-4">
                <button type="button" class="btn btn-secondary">Galle</button>
                <button type="button" class="btn btn-secondary">Kandy</button>
                <button type="button" class="btn btn-secondary">Jafna</button>
                <button type="button" class="btn btn-secondary">Kandy</button>
                <button type="button" class="btn btn-secondary">Galle</button>
                <button type="button" class="btn btn-secondary">Kandy</button>
                <button type="button" class="btn btn-secondary">Galle</button>
                <button type="button" class="btn btn-secondary">Kandy</button>
                <button type="button" class="btn btn-secondary">Galle</button>
                <button type="button" class="btn btn-secondary">Kandy</button>
                <button type="button" class="btn btn-secondary">Galle</button>
                <button type="button" class="btn btn-secondary">Kandy</button>
                <button type="button" class="btn btn-secondary">Galle</button>
                <button type="button" class="btn btn-secondary">Kandy</button>
                <button type="button" class="btn btn-secondary">Galle</button>
                <button type="button" class="btn btn-secondary">Kandy</button>
                <button type="button" class="btn btn-secondary">Galle</button>
                <button type="button" class="btn btn-secondary">Kandy</button>
                <button type="button" class="btn btn-secondary">Galle</button>
                <button type="button" class="btn btn-secondary">Kandy</button>
            </div>
        </div>

        <div class="col-md-9 ml-5">
            @foreach ($home_front as $new_place)
                {{-- <div class="card mb-3" style="width: 25rem;">
                    <img src="{{ asset('uploads/new_place/' . $new_place->image) }}" style="width: 25rem; height:auto;" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{ $new_place->title }}</h5>
                    <p class="card-text">{{ $new_place->body }}</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div> --}}

                <div class="card mb-3 mt-4" style="max-width: 1540px; height:500px">
                    <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="{{ asset('uploads/new_place/' . $new_place->image) }}" style="width: 25rem; height:auto;" class="card-img-top" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                        <h5 class="card-title">{{ $new_place->title }}</h5>
                        <div class="card-text">{!! $new_place->body !!}</div>
                        <p class="card-text"><small class="text-muted">{{ $new_place->updated_at }}</small></p>
                        </div>
                    </div>
                    </div>
                </div>


                {{-- <div class="card-deck">
                    <div class="card">
                        <img src="{{ asset('uploads/new_place/' . $new_place->image) }}" style="width: 25rem; height:auto;" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">{{ $new_place->title }}</h5>
                        <p class="card-text">{{ $new_place->body }}</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="{{ asset('uploads/new_place/' . $new_place->image) }}" style="width: 25rem; height:auto;" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">{{ $new_place->title }}</h5>
                        <p class="card-text">{{ $new_place->body }}</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="{{ asset('uploads/new_place/' . $new_place->image) }}" style="width: 25rem; height:auto;" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">{{ $new_place->title }}</h5>
                        <p class="card-text">{{ $new_place->body }}</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                  </div> --}}
            @endforeach
        </div>

    </div>

      <section class="ftco-section ftco-no-pt ftc-no-pb">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-5 order-md-last wrap-about wrap-about d-flex align-items-stretch">
                    <div class="img" style="background-image: url(images/about.jpg); border"></div>
                </div>
                <div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
          <h2 class="mb-4">What We Offer</h2>
                    <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word.</p>
                    <div class="row mt-5">
                        <div class="col-lg-6">
                            <div class="services-2 d-flex">
                                <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-security"></span></div>
                                <div class="text pl-3">
                                    <h3>Safety First</h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services-2 d-flex">
                                <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-reading"></span></div>
                                <div class="text pl-3">
                                    <h3>Regular Classes</h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services-2 d-flex">
                                <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-diploma"></span></div>
                                <div class="text pl-3">
                                    <h3>Certified Teachers</h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services-2 d-flex">
                                <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-education"></span></div>
                                <div class="text pl-3">
                                    <h3>Sufficient Classrooms</h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services-2 d-flex">
                                <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-jigsaw"></span></div>
                                <div class="text pl-3">
                                    <h3>Creative Lessons</h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services-2 d-flex">
                                <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-kids"></span></div>
                                <div class="text pl-3">
                                    <h3>Sports Facilities</h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                </div>
                            </div>
                        </div>
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


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

  </body>
</html>
