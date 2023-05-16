<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <title>Hera Hub Solutions Limited | Travel With Ease</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <!-- favicon -->
    <link href="{{url('/')}}/uploads/favicon.png" rel="icon" sizes="32x32" type="image/png">
    <meta content="We are a travel solutions company based in Eastern Africa, Our main Goal is to make it easy for you " name="description">
    <meta content="Tash Toons" name="author">
    <meta content="Travel, Hera Hub" name="keywords">

    {{-- og meta tags --}}
    <link rel="canonical" href="{{url('/')}}"/>
    <meta name="author" content="Designekta Studios">
    <meta property="og:description" content="We are a travel solutions company based in Eastern Africa, Our main Goal is to make it easy for you ">
    <meta property="og:image" content="{{url('/')}}/uploads/favicon.png" />
    <meta property="fb:app_id" content="431980657174772" />
    <meta property="og:title" content="Hera Hub Solutions Limited | Travel With Ease " />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{url('/')}}" />

    <meta name="twitter:title" content="Hera Hub Solutions Limited | Travel With Ease" />
    <meta name="twitter:site" content="@herahubsolutions" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:creator" content="@herahubsolutions" />
    <meta name="_token" content="XBh6AVw8dkRSZWteUveqqKxRv0WefyHnhIA79b6C">
    {{-- og meta tags --}}



    <!-- Bootstrap CSS -->
    <link href="{{asset('theme/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- font themify CSS -->
    <link rel="stylesheet" href="{{asset('theme/css/themify-icons.css')}}">
    <!-- font awesome CSS -->
    <link href="{{asset('theme/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <!-- date picker CSS -->
    <link href="{{asset('theme/css/datepicker.min.css')}}" rel="stylesheet">
    <!-- revolution slider css -->
    <link rel="stylesheet" type="text/css" href="{{asset('theme/css/fullscreen.css')}}" media="screen" />
	  <link rel="stylesheet" type="text/css" href="{{asset('theme/rs-plugin/css/settings.css')}}" media="screen" />
    <link rel="stylesheet" href="{{asset('theme/css/rev-settings.css')}}" type="text/css">
    <!-- on3step CSS -->
    <link href="{{asset('theme/css/animated-on3step.css')}}" rel="stylesheet">
    <link href="{{asset('theme/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('theme/css/owl.theme.css')}}" rel="stylesheet">

    <link href="{{asset('theme/css/on3step-style.css')}}" rel="stylesheet">
    <link href="{{asset('theme/css/queries-on3step.css')}}" media="all" rel="stylesheet">
  </head>

  <body>

    <!-- preloader -->
    <div class="bg-preloader-white"></div>
    <div class="preloader-white">
      <div class="mainpreloader">
        <span></span>
      </div>
    </div>
    <!-- preloader end -->

   <!-- content wraper -->
   <div class="content-wrapper">

   <header class="init">

    <!-- subnav -->
    <div class="container-fluid m-5-hor">
    <div class="row">
        <div class="subnav">

         <div class="col-md-6">
          <div class="left">
            <div class="social-icons-subnav hidden-sm hidden-xs">
                <div>Call Us : +254 72 301 4032</div>
            </div>
          </div>
         </div>

         <div class="col-md-6">
          <div class="right">
            <div id="sub-icon" class="social-icons-subnav">
                <a href="#"><span class="ti-facebook"></span></a>
                <a href="#"><span class="ti-linkedin"></span></a>
                <a href="#"><span class="ti-twitter"></span></a>
                <a href="#"><span class="ti-instagram"></span></a>
                <a href="#"><span class="ti-youtube"></span></a>
            </div>
            <div class="social-icons-subnav">
              <a data-toggle="modal" data-target="#fLogin"><span class="ti-lock"></span> Login</a>
            </div>
            <div class="social-icons-subnav hidden-sm hidden-xs">
              <a data-toggle="modal" data-target="#fsignUp"><span class="ti-user"></span> Sign up</a>
            </div>
          </div>
         </div>

        </div>
    </div>
    </div>
    <!-- subnav end -->

      <!-- nav -->
      <div class="navbar-default-white navbar-fixed-top">
        <div class="container-fluid m-5-hor">
        <div class="row">

           <!-- menu mobile display -->
           <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse">
           <span class="icon icon-bar"></span>
           <span class="icon icon-bar"></span>
           <span class="icon icon-bar"></span></button>

          <!-- logo -->
          <a class="navbar-brand white" href="{{url('/')}}">
          <img class="white" alt="logo" src="{{asset('uploads/HERA-HUB-LOGO-04-dark.png')}}">
          <img class="black" alt="logo" src="{{asset('uploads/HERA-HUB-LOGO-04-light.png')}}">
          </a>
          <!-- logo end -->

          <!-- mainmenu start -->
          <div class="white menu-init" id="main-menu">
            <nav id="menu-center">
              <ul>
                <li>
                 <a class="actived" href="{{url('/')}}">Home <i class="fa fa-home"></i></a>

                </li>
                <li><a href="{{url('/')}}/about-us">About Us </a></li>

                <li><a  href="#">Destinations <i class="fa fa-angle-down"></i></a>
                <ul>
                    <li><a href="{{url('/')}}/destination/sample">Africa</a></li>
                    <li><a href="{{url('/')}}/destination/sample">Europe </a></li>
                    <li><a href="{{url('/')}}/destination/sample">Asia </a></li>
                    <li><a href="{{url('/')}}/destination/sample">Australia </a></li>
                    </ul>
                </li>
                <li><a  href="#">Countries <i class="fa fa-angle-down"></i></a>
                    <ul>
                        <li><a href="{{url('/')}}/destination/sample">Kenya</a></li>
                        <li><a href="{{url('/')}}/destination/sample">Tanzania </a></li>
                        <li><a href="{{url('/')}}/destination/sample">Egypt </a></li>
                        <li><a href="{{url('/')}}/destination/sample">Uganda </a></li>
                        </ul>
                    </li>
                <li><a href="#">Services <i class="fa fa-angle-down"></i></a>
                    <ul>
                        <li><a href="{{url('/services')}}">Air Ticketing</a></li>
                        <li><a href="{{url('/services')}}">Car Rental</a></li>
                        <li><a href="{{url('/services')}}">Hotel Bookings</a></li>
                        <li><a href="{{url('/services')}}">Airport Transfers</a></li>
                        <li><a href="{{url('/services')}}">Visa Processing </a></li>
                        <li><a href="{{url('/services')}}">Travel Insurance</a></li>
                        <li><a href="{{url('/services')}}">Charter Services</a></li>
                        <li><a href="{{url('/services')}}">Group Travel</a></li>

                    </ul>
                </li>
                <li><a  href="{{url('/latest-news')}}">Latest News</a>

                </li>
                <li><a  href="{{url('/contact-us')}}">Contact</a></li>
              </ul>
            </nav>
          </div>
          <!-- mainmenu end -->

        </div>
        </div>
        <!-- container -->
      </div>
      <!-- nav end -->
      </header>

      @yield('content')

      <!--  subfooter -->
      <section aria-label="subfooter" class="subfooter no-bottom">
        <div class="container-fluid m-5-hor">
          <div class="row">
           <div class="col-md-4">
            <div class="wrap-subfooter">
             <h4>Mission Statement</h4>
             <div class="subfooter-content-left">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</div>
             <span class="logo">
                <img style="max-width:300px" alt="logo" src="{{asset('uploads/HERA-HUB-LOGO-04-light.png')}}">
             </span>
            </div>
           </div>
           <div class="col-md-3 col-md-offset-1">
            <div class="wrap-subfooter">
             <h4>Lattest Destination</h4>
              <div class="tag-country">
                <a href="#" class="list-country">
                  Europe <sup>(40)tours</sup>
                </a>
                <a href="#" class="list-country">
                  Australia <sup>(40)tours</sup>
                </a>
                <a href="#" class="list-country">
                  America <sup>(40)tours</sup>
                </a>
                <a href="#" class="list-country">
                  Asia <sup>(40)tours</sup>
                </a>
                <a href="#" class="list-country">
                  Africa <sup>(40)tours</sup>
                </a>
                <a href="#" class="list-country">
                  Japan <sup>(40)tours</sup>
                </a>
                <a href="#" class="list-country">
                  Rusian <sup>(40)tours</sup>
                </a>
              </div>
            </div>
           </div>
           <div class="col-md-3 col-md-offset-1">
            <div class="wrap-subfooter">
             <h4>Contact Info</h4>
             <div class="subfooter-content-right">129 Park street, Westalands, NB0</div>
             <div class="subfooter-content-right">Phone: (+254) 0723014032</div>
             <div class="subfooter-content-right"><a href="#">Email: info@herahub.co.ke</a></div>
            </div>
           </div>
          </div>
        </div>
      </section>
      <!--  subfooter end -->

      <!-- footer -->
      <footer class="alt">
        <div class="container-fluid m-5-hor">
          <div class="row">

          <div class="col-md-6 text-left">
           <span>Copyright - {{date('Y')}} Hera Hub Solutions Limited All Right Reserved</span>
          </div>

          <div class="col-md-6 text-right">
            <div class="social-icons-subnav">
                <a href="#"><span class="ti-facebook"></span></a>
                <a href="#"><span class="ti-dribbble"></span></a>
                <a href="#"><span class="ti-twitter"></span></a>
                <a href="#"><span class="ti-instagram"></span></a>
                <a href="#"><span class="ti-linkedin"></span></a>
            </div>
          </div>

          </div>
        </div>
      </footer>
      <!-- footer end -->


      <!-- ScrolltoTop -->
      <div id="totop" class="init">
        <span class="ti-angle-up"></span>
      </div>

              <!-- modal login -->
              <div id="fLogin" class="modal fade">
                <div class="modal-dialog modal-login">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Member Log In</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                      <form action="#" method="post">
                        <div class="form-group">
                          <label>User Name</label>
                          <input type="text" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                          <label>Password</label>
                          <input type="password" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                          <input type="submit" class="btn btn-primary btn-block btn-lg" value="Log In">
                        </div>
                      </form>

                    </div>
                    <div class="modal-footer">
                      <a href="#">or Sign Up</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- modal login end -->

              <!-- modal registration -->
              <div id="fsignUp" class="modal fade">
                <div class="modal-dialog modal-login">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Member Registration</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                      <form>
                        <div class="form-group">
                        <label>First Name</label>
                        <input type="text" name="firstname" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" name="lastname" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                        <label><input type="checkbox" name="terms"> I agree with the <a href="#">Terms and Conditions</a>.</label>
                        </div>
                        <div class="form-group"><input type="submit" value="Sign up" class="btn btn-primary btn-block btn-lg"></div>
                        <div class="clearfix"></div>
                      </form>

                    </div>
                    <div class="modal-footer">
                      <a href="#">or Log In</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- modal registration end -->


    </div>
    <!-- content wraper end -->

    <!-- plugin JS -->
    <script src="{{asset('theme/plugin/pluginson3step.js')}}"></script>
    <script src="{{asset('theme/plugin/bootstrap.min.js')}}"></script>
    <script src="{{asset('theme/plugin/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('theme/plugin/sticky.js')}}"></script>
    <!-- slider revolution  -->
    <script src="{{asset('theme/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('theme/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
    <!-- on3step JS -->
    <script src="{{asset('theme/js/on3step.js')}}"></script>
    <script src="{{asset('theme/js/plugin-set.js')}}"></script>
  </body>

</html>
