@extends('layouts.public_theme')


@section('page_nav')
    <li class="active"><a href="#contact">Contacts</a></li>
    <li><a href="#form">Form</a></li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle red" data-toggle="dropdown">
            {{--<span class="badge custom-badge red pull-right">Extra</span>--}}
            <span class="red badge custom-badge">Admin Only<b class="caret"></b></span></a>
        <ul class="dropdown-menu">
            <li><a href="#">Edit Content</a></li>
            {{--<li><a href="../../../public/theme/index-form.html">Home Form</a></li>--}}
            {{--<li><a href="../../../public/theme/index-video.html">Home video</a></li>--}}
        </ul>
    </li>
@endsection

@section('title')
    Contact Us
@endsection

@section('content')
    <!-- Section: contacts -->
    <section id="contact" class="intro">
        <div class="intro-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
                            <h2 class="h-ultra">Medicio medical group</h2>
                        </div>
                        <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
                            <h4 class="h-light">Provide best quality healthcare for you</h4>
                        </div>
                        <div class="well well-trans">
                            <div class="wow fadeInRight" data-wow-delay="0.1s">

                                <ul class="lead-list">
                                    <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Affordable monthly premium packages</strong><br />Lorem ipsum dolor sit amet, in verterem persecuti vix, sit te meis</span></li>
                                    <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Choose your favourite doctor</strong><br />Lorem ipsum dolor sit amet, in verterem persecuti vix, sit te meis</span></li>
                                    <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Only use friendly environment</strong><br />Lorem ipsum dolor sit amet, in verterem persecuti vix, sit te meis</span></li>
                                </ul>
                                <p class="text-right wow bounceIn" data-wow-delay="0.4s">
                                    <a href="#" class="btn btn-skin btn-lg">Learn more <i class="fa fa-angle-right"></i></a>
                                </p>
                            </div>
                        </div>


                    </div>
                    <div class="col-lg-6">
                        <div class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                            <img src="{{ URL::to('theme/img/dummy/img-1.png')}}" class="img-responsive" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- /Section: intro -->

    <!-- Section: pricing -->
    <section id="form" class="home-section bg-gray paddingbot-60">
        <div class="container marginbot-50">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow lightSpeedIn" data-wow-delay="0.1s">
                        <div class="section-heading text-center">
                            <h2 class="h-bold">Health packages</h2>
                            <p>Take charge of your health today with our specially designed health packages</p>
                        </div>
                    </div>
                    <div class="divider-short"></div>
                </div>
            </div>
        </div>

        <div class="container">

            <div class="row">

                <div class="col-sm-4 pricing-box">
                    <div class="wow bounceInUp" data-wow-delay="0.1s">
                        <div class="pricing-content general">
                            <h2>Basic Fit 1 Package</h2>
                            <h3>$33<sup>.99</sup> <span>/ one time</span></h3>
                            <ul>
                                <li>Anthropometry (BMI, WH Ratio) <i class="fa fa-check icon-success"></i></li>
                                <li>Post Examination Review <i class="fa fa-check icon-success"></i></li>
                                <li>General Screening – Basic <i class="fa fa-check icon-success"></i></li>
                                <li><del>Health Screening Report</del> <i class="fa fa-times icon-danger"></i></li>
                            </ul>

                            <div class="price-bottom">
                                <a href="#" class="btn btn-skin btn-lg">Purchase</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 pricing-box featured-price">
                    <div class="wow bounceInUp" data-wow-delay="0.3s">
                        <div class="pricing-content featured">
                            <h2>Golden Glow Package</h2>
                            <h3>$65<sup>.99</sup> <span>/ one time</span></h3>
                            <ul>
                                <li>Anthropometry (BMI, WH Ratio) <i class="fa fa-check icon-success"></i></li>
                                <li>Post Examination Review <i class="fa fa-check icon-success"></i></li>
                                <li>General Screening – Basic <i class="fa fa-check icon-success"></i></li>
                                <li>Body Composition Analysis <i class="fa fa-check icon-success"></i></li>
                                <li>GR Assessment & Scoring <i class="fa fa-check icon-success"></i></li>
                            </ul>

                            <div class="price-bottom">
                                <a href="#" class="btn btn-skin btn-lg">Purchase</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 pricing-box">
                    <div class="wow bounceInUp" data-wow-delay="0.2s">
                        <div class="pricing-content general last">
                            <h2>Basic Fit 2 Package</h2>
                            <h3>$47<sup>.99</sup> <span>/ one time</span></h3>
                            <ul>
                                <li>Anthropometry (BMI, WH Ratio) <i class="fa fa-check icon-success"></i></li>
                                <li>Post Examination Review <i class="fa fa-check icon-success"></i></li>
                                <li>General Screening – Regular <i class="fa fa-check icon-success"></i></li>
                                <li><del>Health Screening Report</del> <i class="fa fa-times icon-danger"></i></li>
                            </ul>

                            <div class="price-bottom">
                                <a href="#" class="btn btn-skin btn-lg">Purchase</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- /Section: pricing -->
@endsection