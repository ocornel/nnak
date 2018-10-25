<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="National Nurses Association of Kenya Private Instituitions Branch- Mombasa County(NNAK PIB-Mombasa County)">
    <meta name="keywords" content="quickwapps Martin Cornel NNAK Mombasa County">
    <meta name="author" content="Martin Cornel">

    {{--favicon--}}
  <link rel="icon" href="{{ URL::to('img/logo.jpeg') }}" type="image/gif">

  <title>{{NNAK\Page::info('title')}} | @yield('title')</title>

  <!-- css -->
  <link href="{{URL::to('theme/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{URL::to('theme/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{URL::to('theme/plugins/cubeportfolio/css/cubeportfolio.min.css')}}" rel="stylesheet" type="text/css" >
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
  <link id="t-colors" href="{{URL::to('css/nnak.css')}}" rel="stylesheet">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
{{--National Nurses Association of Kenya Private Instituitions Branch- Mombasa County(NNAK PIB-Mombasa County)--}}
<?php use NNAK\Page;?>
  <div id="wrapper">

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
      @include('parts.main_nav')
      <div class="container navigation">

        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
          <a class="navbar-brand" href="{{route('index')}}">
                    <img src="{{ URL::to('img/logo.jpeg')}}" alt="" height="70" style="margin-top: -15px;"/>
            {{--<span class="txt-blue txt-large">NNAK</span> <span class="txt-green txt-large">PIB</span><span class="txt-red">Mombasa County</span>--}}
          </a>
          <div class="navbar-brand logo-text" >{{Page::info('logo_text')}}</div>
        </div>
          @include('parts.page_nav')
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>
      @yield('content')
    <footer class="footer-container">

      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Links</h5>
                <ul>
                  <li><a href="{{ route('about') }}">About Us</a></li>
                  <li><a href="{{ route('contact') }}">Contact Us</a></li>
                  <li><a href="{{ route('events') }}">Events</a></li>
                    <br>
                  {{--<li><a href="#">Terms & conditions</a></li>--}}
                  @if (Route::has('login'))
                    <li class="">
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
                <h5>Get in touch</h5>
                <ul>
                  <li class="row ml-5">
                    <span class="fa-stack fa-lg col-xs-2">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
								</span> <span class="col-xs-10">Mombasa Town <br> Bla blabla street</span>
                  </li>
                  <li class="row ml-5">
                    <span class="fa-stack fa-lg col-xs-2">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
                    </span>
                    <span class="col-xs-10">
                      {{ Page::info('phone_1') }} <br>
                      {{ Page::info('phone_2') }}
                    </span>
                  </li>
                  <li class="row ml-5">
                    <span class="fa-stack fa-lg col-xs-2">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
                    </span>
                    <span class="col-xs-10">{{ Page::info('email') }}</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Quote</h5>
                <blockquote>Your life is a blessing.</blockquote>
              </div>
            </div>
              <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widg et">
                <h5>Follow us</h5>
                <ul class="company-social">
                  <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li class="social-vimeo"><a href="https://www.nnak.or.ke/"><i class="fa fa-globe"></i></a></li>
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
                  <p>&copy;Copyright {{ date("Y") }} {{Page::info('title')}}. All rights reserved.</p>
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
