<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>@yield('title') | {{NNAK\Page::info('title')}} </title>

    <!-- Fontfaces CSS-->
    <link href="{{URL::to('admin_theme/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::to('admin_theme/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::to('admin_theme/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::to('admin_theme/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{URL::to('admin_theme/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{URL::to('admin_theme/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::to('admin_theme/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::to('admin_theme/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::to('admin_theme/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::to('admin_theme/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::to('admin_theme/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::to('admin_theme/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::to('/js/summernote/summernote.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{URL::to('admin_theme/css/theme.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::to('css/nnak.css')}}" rel="stylesheet" media="all">

</head>

<body class="animsition">
<div class="page-wrapper">
    <!-- HEADER DESKTOP-->
    <header class="header-desktop3 d-none d-lg-block nnak-blue-bg">
        <div class="section__content section__content--p35">
            <div class="header3-wrap">
                <div class="header__logo">
                    <a href="#">
                        <img src="{{URL::to('img/logdo.png')}}" alt="NNAK" />
                    </a>
                </div>
                <div class="header__navbar">
                    <ul class="list-unstyled">
                        <li class="{{url()->current() == route('home') ? 'active' : ''}}">
                            <a href="{{route('home')}}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard
                                <span class="bot-line"></span>
                            </a>
                        </li>
                        <li class="{{url()->current() == route('webinfo') ? 'active' : ''}}">
                            <a href="{{ route('webinfo') }}">
                                <i class="fas fa-info-circle"></i>
                                <span class="bot-line"></span>Web Info</a>
                        </li>
                        <li class="{{url()->current() == route('page') ? 'active' : ''}}">
                            <a href="{{ route('page') }}">
                                <i class="fas fa-columns"></i>
                                <span class="bot-line"></span>Pages</a>
                        </li>
                        <li class="has-sub @yield('active_content')">
                            <a href="#">
                                <i class="fas fa-plus-circle"></i>
                                <span class="bot-line"></span>Content</a>
                            <ul class="header3-sub-list list-unstyled">
                                <li>
                                    <a href="{{route('component')}}">Components</a>
                                </li>
                                <li>
                                    <a href="{{route('image')}}">Images</a>
                                </li>
                                <li>
                                    <a href="{{route('member')}}">Members</a>
                                </li>
                                <li>
                                    <a href="{{route('partner')}}">Partners</a>
                                </li>
                                <li>
                                    <a href="{{route('slide')}}">Slides</a>
                                </li>
                                <li>
                                    <a href="{{route('testimonial')}}">Testimonials</a>
                                </li>
                            </ul>
                        </li>
                        <li class="{{url()->current() == route('event') ? 'active' : ''}}">
                            <a href="{{ route('event') }}">
                                <i class="fas fa-calendar-alt"></i>
                                <span class="bot-line"></span>Events</a>
                        </li>
                        <li>
                        <li class="{{url()->current() == route('user') ? 'active' : ''}}">
                            <a href="{{ route('user') }}">
                                <i class="fas fa-group"></i>
                                <span class="bot-line"></span>Users</a>
                        </li>
                    </ul>
                </div>
                <div class="header__tool">
                    <div class="account-wrap">
                        <div class="account-item account-item--style2 clearfix js-item-menu">
                            <div class="image">
                                <img src="{{URL::to('img/no_image_profile.png')}}" />
                            </div>
                            <div class="content">
                                <a class="js-acc-btn" href="#">{{Auth::user()->name}}</a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="image">
                                        <a href="#">
                                            <img src="{{URL::to('img/no_image_profile.png')}}" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="name">
                                            <a href="#">{{Auth::user()->name}}</a>
                                        </h5>
                                        <span class="email">{{Auth::user()->email}}</span>
                                    </div>
                                </div>
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-account"></i>My Account</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-settings"></i>My Activities</a>
                                    </div>
                                </div>
                                <div class="account-dropdown__footer">
                                    <a href="#">
                                        <i class="zmdi zmdi-power"></i>Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- END HEADER DESKTOP-->

    <!-- HEADER MOBILE-->
    <header class="header-mobile header-mobile-2 d-block d-lg-none">
        <div class="header-mobile__bar">
            <div class="container-fluid">
                <div class="header-mobile-inner">
                    <a class="logo" href="index.html">
                        <img src="{{URL::to('img/logo.png')}}" alt="NNAK" />
                    </a>
                    <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                    </button>
                </div>
            </div>
        </div>
        <nav class="navbar-mobile">
            <div class="container-fluid">
                <ul class="navbar-mobile__list list-unstyled">
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="chart.html">
                            <i class="fas fa-chart-bar"></i>Web Info</a>
                    </li>
                    <li>
                        <a href="table.html">
                            <i class="fas fa-table"></i>Pages</a>
                    </li>
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-copy"></i>Contents</a>
                        <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                            <li>
                                <a href="login.html">Components</a>
                            </li>
                            <li>
                                <a href="register.html">Images</a>
                            </li>
                            <li>
                                <a href="forget-pass.html">Members</a>
                            </li>
                            <li>
                                <a href="forget-pass.html">Partners</a>
                            </li>
                            <li>
                                <a href="forget-pass.html">Users</a>
                            </li>
                            <li>
                                <a href="forget-pass.html">Slides</a>
                            </li>
                            <li>
                                <a href="forget-pass.html">Testimonials</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="form.html">
                            <i class="far fa-check-square"></i>Events</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="sub-header-mobile-2 d-block d-lg-none">
        <div class="header__tool">
            <div class="account-wrap">
                <div class="account-item account-item--style2 clearfix js-item-menu">
                    <div class="image">
                        <img src="{{URL::to('img/no_image_profile.png')}}" />
                    </div>
                    <div class="content">
                        <a class="js-acc-btn" href="#">{{Auth::user()->name}}</a>
                    </div>
                    <div class="account-dropdown js-dropdown">
                        <div class="info clearfix">
                            <div class="image">
                                <a href="#">
                                    <img src="{{URL::to('img/no_image_profile.png')}}" />
                                </a>
                            </div>
                            <div class="content">
                                <h5 class="name">
                                    <a href="#">{{Auth::user()->name}}</a>
                                </h5>
                                <span class="email">{{Auth::user()->email}}</span>
                            </div>
                        </div>
                        <div class="account-dropdown__body">
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-account"></i>My Account</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-settings"></i>My Activities</a>
                            </div>
                        </div>
                        <div class="account-dropdown__footer">
                            <a href="#">
                                <i class="zmdi zmdi-power"></i>Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END HEADER MOBILE -->

    <!-- PAGE CONTENT-->
    <div class="page-content--bgf7">
        {{--TODO put success or error message after actions--}}
        @yield('content')

        <!-- COPYRIGHT-->
            <section class="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2018 {{NNAK\Page::info('title')}} . Need help <a href="mailto:mrtncornel@gmail.com">Mail Martin</a> or visit
                                    <a href="http://quickwapps.com"> Support Site</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END COPYRIGHT-->
    </div>

</div>

<!-- Jquery JS-->
<script src="{{URL::to('admin_theme/vendor/jquery-3.2.1.min.js')}}"></script>
<!-- Bootstrap JS-->
<script src="{{URL::to('admin_theme/vendor/bootstrap-4.1/popper.min.js')}}"></script>
<script src="{{URL::to('admin_theme/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
<!-- Vendor JS       -->
<script src="{{URL::to('admin_theme/vendor/slick/slick.min.js')}}">
</script>
<script src="{{URL::to('admin_theme/vendor/wow/wow.min.js')}}"></script>
<script src="{{URL::to('admin_theme/vendor/animsition/animsition.min.js')}}"></script>
<script src="{{URL::to('admin_theme/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
</script>
<script src="{{URL::to('admin_theme/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
<script src="{{URL::to('admin_theme/vendor/counter-up/jquery.counterup.min.js')}}">
</script>
<script src="{{URL::to('admin_theme/vendor/circle-progress/circle-progress.min.js')}}"></script>
<script src="{{URL::to('admin_theme/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
<script src="{{URL::to('admin_theme/vendor/chartjs/Chart.bundle.min.js')}}"></script>
<script src="{{URL::to('admin_theme/vendor/select2/select2.min.js')}}"> </script>
<script src="{{ URL::to('js/summernote/summernote.js')}}"></script>

<!-- Main JS-->
<script src="{{URL::to('admin_theme/js/main.js')}}"></script>
@yield('scripts')
</body>

</html>
<!-- end document-->