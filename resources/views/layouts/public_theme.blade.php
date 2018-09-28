<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>NNAK PIB-Mombasa County | @yield('title')</title>

  <!-- css -->
  <link href="{{URL::to('theme/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{URL::to('theme/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="{{URL::to('theme/plugins/cubeportfolio/css/cubeportfolio.min.css')}}">
  <link href="{{URL::to('theme/css/nivo-lightbox.css')}}" rel="stylesheet" />
  <link href="{{URL::to('theme/css/nivo-lightbox-theme/default/default.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{URL::to('theme/css/owl.carousel.css')}}" rel="stylesheet" media="screen" />
  <link href="{{URL::to('theme/css/owl.theme.css')}}" rel="stylesheet" media="screen" />
  <link href="{{URL::to('theme/css/animate.css')}}" rel="stylesheet" />
  <link href="{{URL::to('theme/css/style.css')}}" rel="stylesheet">

  <!-- boxed bg -->
  <link id="bodybg" href="{{URL::to('theme/bodybg/bg1.css')}}" rel="stylesheet" type="text/css" />
  <!-- template skin -->
  <link id="t-colors" href="{{URL::to('theme/color/default.css')}}" rel="stylesheet">

  <!-- custom css -->
  <link id="t-colors" href="{{URL::to('theme/css/nnak.css')}}" rel="stylesheet">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
{{--National Nurses Association of Kenya Private Instituitions Branch- Mombasa County(NNAK PIB-Mombasa County)--}}
  <div id="wrapper">

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
      @include('parts.main_nav')
      <div class="container navigation">

        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
          <a class="navbar-brand" href="{{route('index')}}">
                    <img src="{{ URL::to('theme/img/logo.png')}}" alt="" width="150" height="40" />
                </a>
        </div>
          @include('parts.page_nav')
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>
      @yield('content')
    <footer>

      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>About Medicio</h5>
                <p>
                  Lorem ipsum dolor sit amet, ne nam purto nihil impetus, an facilisi accommodare sea
                </p>
              </div>
            </div>
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                @if (Route::has('login'))
                  <div class="top-right links">
                    @auth
                      <a href="{{ route('home') }}">Admin</a>
                    @else
                      <a href="{{ route('login') }}">Admin</a>
                      {{--<a href="{{ route('register') }}">Register</a>--}}
                    @endauth
                  </div>
                @endif
              </div>
              <div class="widget">
                <h5>Information</h5>
                <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Laboratory</a></li>
                  <li><a href="#">Medical treatment</a></li>
                  <li><a href="#">Terms & conditions</a></li>
                  @if (Route::has('login'))
                    <li class="break-li">
                      @auth
                        <a href="{{ route('home') }}">Admin</a>
                      @else
                        <a href="{{ route('login') }}">Admin</a>
                        {{--<a href="{{ route('register') }}">Register</a>--}}
                      @endauth
                    </li>
                  @endif
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Medicio center</h5>
                <p>
                  Nam leo lorem, tincidunt id risus ut, ornare tincidunt naqunc sit amet.
                </p>
                <ul>
                  <li>
                    <span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-calendar-o fa-stack-1x fa-inverse"></i>
								</span> Monday - Saturday, 8am to 10pm
                  </li>
                  <li>
                    <span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-phone fa-stack-1x fa-inverse"></i>
								</span> +62 0888 904 711
                  </li>
                  <li>
                    <span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
								</span> hello@medicio.com
                  </li>

                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Our location</h5>
                <p>The Suithouse V303, Kuningan City, Jakarta Indonesia 12940</p>

              </div>
            </div>
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Follow us</h5>
                <ul class="company-social">
                  <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li class="social-google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li class="social-vimeo"><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
                  <li class="social-dribble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="sub-footer">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6">
              <div class="wow fadeInLeft" data-wow-delay="0.1s">
                <div class="text-left">
                  <p>&copy;Copyright {{ date("Y") }}- NNAK Mombasa. All rights reserved.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
              <div class="wow fadeInRight" data-wow-delay="0.1s">
                <div class="text-right">
                  <div class="credits">
                    Built by <a href="https://profile.quickwapps.com/">Cornel</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

  </div>
  <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

  <!-- Core JavaScript Files -->
  <script src="{{URL::to('theme/js/jquery.min.js')}}"></script>
  <script src="{{URL::to('theme/js/bootstrap.min.js')}}"></script>
  <script src="{{URL::to('theme/js/jquery.easing.min.js')}}"></script>
  <script src="{{URL::to('theme/js/wow.min.js')}}"></script>
  <script src="{{URL::to('theme/js/jquery.scrollTo.js')}}"></script>
  <script src="{{URL::to('theme/js/jquery.appear.js')}}"></script>
  <script src="{{URL::to('theme/js/stellar.js')}}"></script>
  <script src="{{URL::to('theme/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js')}}"></script>
  <script src="{{URL::to('theme/js/owl.carousel.min.js')}}"></script>
  <script src="{{URL::to('theme/js/nivo-lightbox.min.js')}}"></script>
  <script src="{{URL::to('theme/js/custom.js')}}"></script>

</body>

</html>
