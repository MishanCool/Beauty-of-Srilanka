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

    <link rel="stylesheet" href="mycss/admin.css">
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
                <li class="nav-item"><a href="{{ URL::to('/') }}" class="nav-link pl-0">Home</a></li>
                <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                <li class="nav-item"><a href="courses.html" class="nav-link">Courses</a></li>
                <li class="nav-item"><a href="teacher.html" class="nav-link">Staff</a></li>
                <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                <li class="nav-item active"><a href="{{ URL::to('/dashboard') }}" class="nav-link">Dashboard</a></li>
                {{-- <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Sign Up</a></li> --}}

            </ul>
            </div>
        </div>
        </nav>
    <!-- END nav -->

  <div class="container-fluid">
    <section class="ftco-section ftco-no-pt ftc-no-pb">
        <div class="row">
            <div class="col-md-2" id="side_bar">
                <div class="row">
                    <div class="card-profile mt-2 ml-5 text-center">
                        <div class="name">
                            {{ Auth::user()->name }}
                        </div>
                        <div class="email mt-3">
                            {{ Auth::user()->email }}
                        </div>
                        <div class="logout mt-5">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                   {{-- <ul class="list-group ml-5">
                    <li class="list-group-item active"><a href="{{ route('register') }}" class="list-group-item">New Admin</a></li>
                    <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Sign Up</a></li>
                   </ul> --}}
                   {{-- <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Sign Up</a></li> --}}
                </div>
            </div>

            <div class="col-md-6 p-4 p-md-8 order-md-last bg-light ml-5">
                <div class="card-header text-center mb-3">{{ __('New Place') }}</div>
                <form action="{{URL::to('/order')}}" method="POST">
                                @csrf

                              <div class="form-group">
                                <input type="text" class="form-control" name="author" placeholder="Author Name">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" name="district" placeholder="Enter District">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" name="title" placeholder="Enter Place Heding">
                              </div>
                              <div class="form-group">
                                <textarea type="text"  class="form-control" name="body" placeholder="About Place" id="exampleFormControlTextarea1" rows="5"></textarea>
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlFile1">Insert Image</label>
                                <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1" placeholder="Insert Image">
                              </div>
                              <div class="form-group">
                                <input type="submit" value="Create Place" class="btn btn-primary py-3 px-5">
                              </div>
                            </form>
            </div>
        </div>
    </section>

  </div>


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
