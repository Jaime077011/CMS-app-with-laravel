<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description"
    content="Welcome to Rakon Multi-Purpose HTML5 Templates RTL Supported, built with HTML, JS, SASS, CSS3 and jQuery, RTL Supported, Easy User Experience and Responsive to all devices" />
  <meta name="keywords"
    content="HTML, CSS, JavaScript, Bootstrap, jQuery, Rakon, Themeforest, Template, envato, SASS, SCSS, HTML5, landing page, SaaS Product, SaaS Modern,  MultiPurpose, Crypto, Currency, ICO, Hosting, Agency, Mobile, App, Interior, Charity" />
  <meta name="author" content="Rakon - Creative Multi-Purpose HTML5 Templates" />

  <title>Blog Classic - Creative Multi-Purpose HTML5 Templates</title>
  <!-- favicon -->
  <link rel="shortcut icon" href="../../assets/website/img/favicon.ico" type="image/x-icon" />
  <!-- Bootstrap 4.5 -->
  <link rel="stylesheet" href="../../assets/website/css/bootstrap.min.css" type="text/css" />
  <!-- animate -->
  <link rel="stylesheet" href="../../assets/website/css/animate.css" type="text/css" />
  <!-- Swiper -->
  <link rel="stylesheet" href="../../assets/website/css/swiper.min.css" />
  <!-- aos -->
  <link rel="stylesheet" href="../../assets/website/css/aos.css" type="text/css" />
  <!-- icons -->
  <link rel="stylesheet" href="../../assets/website/css/icons.css" type="text/css" />
  <!-- main css -->
  <link rel="stylesheet" href="../../assets/website/css/main.css" type="text/css" />
  <!-- normalize -->
  <link rel="stylesheet" href="../../assets/website/css/normalize.css" type="text/css" />

  <!-- js for Brwoser -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
  <div id="wrapper">
    <div id="content">
      <!-- Start header -->
      <header class="header-nav-center active-blue" id="myNavbar">
        <div class="container">
          <!-- navbar -->
          <nav class="navbar navbar-expand-lg navbar-light px-sm-0">
            <a class="navbar-brand" href="">
              <img class="logo" src="../../assets/website/img/logo.svg" alt="logo" />
            </a>

            <button class="navbar-toggler menu ripplemenu" type="button" data-toggle="collapse"
              data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <svg viewBox="0 0 64 48">
                <path d="M19,15 L45,15 C70,15 58,-2 49.0177126,7 L19,37"></path>
                <path d="M19,24 L45,24 C61.2371586,24 57,49 41,33 L32,24"></path>
                <path d="M45,33 L19,33 C-8,33 6,-2 22,14 L45,37"></path>
              </svg>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mx-auto nav-pills">
                @foreach($navbarlinks as $navbarlink)
                  <li class="nav-item">
                    <a class="nav-link" href="{{$navbarlink->link}}">{{$navbarlink->title}}</a>
                  </li>
                @endforeach

              </ul>

            </div>
          </nav>
          <!-- End Navbar -->
        </div>
        <!-- end container -->
      </header>
      <!-- End header -->

      <!-- Stat main -->
      @yield('content')
    </div>
    <!-- [id] content -->
  
    <!-- Start footer -->
    <footer class="foot_demo2 padding-py-12 footer_inner_one bg-dark">
      <div class="container">
        <!-- Start footer -->
        <div class="defalut-footer">
          <div class="row">
            <div class="col-md-6 col-lg-4 mb-4 mb-sm-0">
              <div class="item_about">
                <a class="logo" href="hosting.html">
                  <img src="../../assets/website/img/logo.svg" alt="" />
                </a>
                <p>
                  Rakon is a simple, elegant, and secure way to build your
                  bitcoin and crypto portfolio.
                </p>
                <div class="address">
                  <span>1989 Don Jackson Lane</span>
                  <span>Call us:
                    <a class="c-red" href="tel:8089569599">808-956-9599</a></span>
                </div>
              </div>
            </div>
            <div class="col-6 col-md-2">
              <div class="item_links">
                <h4>Social</h4>
                <a class="nav-link" href="">Blog</a>
                <a class="nav-link" href="">Facebook</a>
                <a class="nav-link" href="">Twitter</a>
                <a class="nav-link" href="">Instagram</a>
              </div>
            </div>
            <div class="col-6 col-md-2">
              <div class="item_links">
                <h4>Company</h4>
                <a class="nav-link" href="">About</a>
                <a class="nav-link" href="">Affiliates</a>
                <a class="nav-link" href="">Careers</a>
                <a class="nav-link" href="">Legal & Privacy</a>
              </div>
            </div>
            <div class="col-md-4 mt-4 mt-sm-0">
              <div class="item_subscribe">
                <h4>Subscribe</h4>
                <p>
                  Subscribe to get the latest<br />
                  news form us
                </p>
                <form class="form-row">
                  <div class="col-md-11 form-group subscribebtn">
                    <div class="item_input">
                      <input type="email" class="form-control rounded-pill" id="exampleInputEmail1"
                        placeholder="Enter email address" aria-describedby="emailHelp" />
                      <button type="button" class="btn ripple_circle scale rounded-circle btn_subscribe">
                        <i class="tio send"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 margin-t-1">
              <select data-menu>
                <option selected>English</option>
                <option>Arabic</option>
                <option>Russian</option>
              </select>
            </div>
          </div>
          <div class="col-12 text-center padding-t-6">
            <div class="copyright">
              <span>?? 2020
                <a href="https://themeforest.net/user/orinostu" target="_blank">OrinoStu.</a>
                All Right Reseved</span>
            </div>
          </div>
        </div>
        <!-- End Footer -->
      </div>
    </footer>
    <!-- End Footer -->

    <!-- Video Modal -->
    <div class="modal mdll_video fade" id="mdllVideo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <!-- Close -->
      <button type="button" class="close bbt_close ripple_circle" data-dismiss="modal" aria-label="Close">
        <i class="tio clear"></i>
      </button>
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-body">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"
                allow="autoplay"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Back to top with progress indicator-->
    <div class="prgoress_indicator">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
    </div>


  </div>
  <!-- End. wrapper -->

  <!-- jquery -->
  <script src="../../assets/website/js/jquery-3.5.0.js" type="text/javascript"></script>
  <!-- jquery-migrate -->
  <script src="../../assets/website/js/jquery-migrate.min.js" type="text/javascript"></script>
  <!-- popper -->
  <script src="../../assets/website/js/popper.min.js" type="text/javascript"></script>
  <!-- bootstrap -->
  <script src="../../assets/website/js/bootstrap.min.js" type="text/javascript"></script>
  <!--
  ============
  vendor file
  ============
   -->
  <!-- particles -->
  <script src="../../assets/website/js/vendor/particles.min.js" type="text/javascript"></script>
  <!-- TweenMax -->
  <script src="../../assets/website/js/vendor/TweenMax.min.js" type="text/javascript"></script>
  <!-- ScrollMagic -->
  <script src="../../assets/website/js/vendor/ScrollMagic.js" type="text/javascript"></script>
  <!-- animation.gsap -->
  <script src="../../assets/website/js/vendor/animation.gsap.js" type="text/javascript"></script>
  <!-- addIndicators -->
  <script src="../../assets/website/js/vendor/debug.addIndicators.min.js" type="text/javascript"></script>
  <!-- Swiper js -->
  <script src="../../assets/website/js/vendor/swiper.min.js" type="text/javascript"></script>
  <!-- countdown -->
  <script src="../../assets/website/js/vendor/countdown.js" type="text/javascript"></script>
  <!-- simpleParallax -->
  <script src="../../assets/website/js/vendor/simpleParallax.min.js" type="text/javascript"></script>
  <!-- waypoints -->
  <script src="../../assets/website/js/vendor/waypoints.min.js" type="text/javascript"></script>
  <!-- counterup -->
  <script src="../../assets/website/js/vendor/jquery.counterup.min.js" type="text/javascript"></script>
  <!-- charming -->
  <script src="../../assets/website/js/vendor/charming.min.js" type="text/javascript"></script>
  <!-- imagesloaded -->
  <script src="../../assets/website/js/vendor/imagesloaded.pkgd.min.js" type="text/javascript"></script>
  <!-- BX-Slider -->
  <script src="../../assets/website/js/vendor/jquery.bxslider.min.js" type="text/javascript"></script>
  <!-- Sharer -->
  <script src="../../assets/website/js/vendor/sharer.js" type="text/javascript"></script>
  <!-- sticky -->
  <script src="../../assets/website/js/vendor/sticky.min.js" type="text/javascript"></script>
  <!-- Aos -->
  <script src="../../assets/website/js/vendor/aos.js" type="text/javascript"></script>
  <!-- main file -->
  <script src="../../assets/website/js/main.js" type="text/javascript"></script>

</body>

</html>