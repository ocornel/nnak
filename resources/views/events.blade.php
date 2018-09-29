@extends('layouts.public_theme')


@section('page_nav')
    <li class="active"><a href="#events">Past Events</a></li>
    <li class="active"><a href="#events">Future Events</a></li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle red" data-toggle="dropdown">
            <span class="red badge custom-badge">Admin Only<b class="caret"></b></span></a>
        <ul class="dropdown-menu">
            <li><a href="#">Edit Content</a></li>
        </ul>
    </li>
@endsection

@section('title')
    Home
@endsection

@section('content')
    <!-- Section: past events -->
    <section id="events" class="home-section nopadding paddingtop-50">
        <div class="container marginbot-50  paddingtop-100">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <div class="section-heading text-center">
                            <h2 class="h-bold">Past Events</h2>
                            <p>Here are our most recent events.</p>
                        </div>
                    </div>
                    <div class="divider-short"></div>
                </div>
            </div>
        </div>
        <div class="container ">

            <div class="row">
                {{--<div class="col-sm-6 col-md-6">--}}
                    {{--<div class="wow fadeInUp" data-wow-delay="0.2s">--}}
                        {{--<img src="{{ URL::to('theme/img/dummy/img-1.jpg')}}" class="img-responsive" alt="" />--}}
                    {{--</div>--}}
                {{--</div>--}}
                <div class="col-sm-6 col-md-6">

                    <div class="wow fadeInRight" data-wow-delay="0.1s">
                        <div class="service-box row ml-5">
                            <div class="service-icon col-sm-1" align="center">
                                <a href="#" title="Click to read about event"><span class="fa fa-calendar fa-3x"></span></a>
                                24.07 <br>2018
                            </div>
                            <div class="service-desc col-sm-10">
                                <h5 class="h-light"><a href="#" title="Click to read about event">Event Title</a></h5>
                                <p>Description of the event will be summarized to fit the space then for more details about the event including pictures,
                                the user will click <br><a href="#" class="btn btn-primary">Read More ></a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">

                    <div class="wow fadeInRight" data-wow-delay="0.1s">
                        <div class="service-box row ml-5">
                            <div class="service-icon col-sm-1" align="center">
                                <a href="#" title="Click to read about event"><span class="fa fa-calendar fa-3x"></span></a>
                                24.07 <br>2018
                            </div>
                            <div class="service-desc col-sm-10">
                                <h5 class="h-light"><a href="#" title="Click to read about event">Event Title</a></h5>
                                <p>Description of the event will be summarized to fit the space then for more details about the event including pictures,
                                the user will click <br><a href="#" class="btn btn-primary">Read More ></a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">

                    <div class="wow fadeInRight" data-wow-delay="0.1s">
                        <div class="service-box row ml-5">
                            <div class="service-icon col-sm-1" align="center">
                                <a href="#" title="Click to read about event"><span class="fa fa-calendar fa-3x"></span></a>
                                24.07 <br>2018
                            </div>
                            <div class="service-desc col-sm-10">
                                <h5 class="h-light"><a href="#" title="Click to read about event">Event Title</a></h5>
                                <p>Description of the event will be summarized to fit the space then for more details about the event including pictures,
                                the user will click <br><a href="#" class="btn btn-primary">Read More ></a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">

                    <div class="wow fadeInRight" data-wow-delay="0.1s">
                        <div class="service-box row ml-5">
                            <div class="service-icon col-sm-1" align="center">
                                <a href="#" title="Click to read about event"><span class="fa fa-calendar fa-3x"></span></a>
                                24.07 <br>2018
                            </div>
                            <div class="service-desc col-sm-10">
                                <h5 class="h-light"><a href="#" title="Click to read about event">Event Title</a></h5>
                                <p>Description of the event will be summarized to fit the space then for more details about the event including pictures,
                                the user will click <br><a href="#" class="btn btn-primary">Read More ></a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">

                    <div class="wow fadeInRight" data-wow-delay="0.1s">
                        <div class="service-box row ml-5">
                            <div class="service-icon col-sm-1" align="center">
                                <a href="#" title="Click to read about event"><span class="fa fa-calendar fa-3x"></span></a>
                                24.07 <br>2018
                            </div>
                            <div class="service-desc col-sm-10">
                                <h5 class="h-light"><a href="#" title="Click to read about event">Event Title</a></h5>
                                <p>Description of the event will be summarized to fit the space then for more details about the event including pictures,
                                the user will click <br><a href="#" class="btn btn-primary">Read More ></a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">

                    <div class="wow fadeInRight" data-wow-delay="0.1s">
                        <div class="service-box row ml-5">
                            <div class="service-icon col-sm-1" align="center">
                                <a href="#" title="Click to read about event"><span class="fa fa-calendar fa-3x"></span></a>
                                24.07 <br>2018
                            </div>
                            <div class="service-desc col-sm-10">
                                <h5 class="h-light"><a href="#" title="Click to read about event">Event Title</a></h5>
                                <p>Description of the event will be summarized to fit the space then for more details about the event including pictures,
                                the user will click <br><a href="#" class="btn btn-primary">Read More ></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div><h5>More Past events:</h5></div>
            <div>Here will list the rest of the older events if there were more than the 6 with links so that visitors can get to look at them</div>
        </div>
    </section>
    <!-- /Section: past events -->
    
    <!-- Section: future events -->
    <section id="events" class="home-section nopadding paddingtop-100">
        <div class="container marginbot-50">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <div class="section-heading text-center">
                            <h2 class="h-bold">Future Events</h2>
                            <p>We have scheduled these upcoming events.</p>
                        </div>
                    </div>
                    <div class="divider-short"></div>
                </div>
            </div>
        </div>
        <div class="container">

            <div class="row">
                {{--<div class="col-sm-6 col-md-6">--}}
                    {{--<div class="wow fadeInUp" data-wow-delay="0.2s">--}}
                        {{--<img src="{{ URL::to('theme/img/dummy/img-1.jpg')}}" class="img-responsive" alt="" />--}}
                    {{--</div>--}}
                {{--</div>--}}
                <div class="col-sm-6 col-md-6">

                    <div class="wow fadeInRight" data-wow-delay="0.1s">
                        <div class="service-box row ml-5">
                            <div class="service-icon col-sm-1" align="center">
                                <a href="#" title="Click to read about event"><span class="fa fa-calendar fa-3x"></span></a>
                                06.11 <br>2018
                            </div>
                            <div class="service-desc col-sm-10">
                                <h5 class="h-light"><a href="#" title="Click to read about event">Event Title</a></h5>
                                <p>Description of the event will be summarized to fit the space then for more details about the event including pictures,
                                the user will click <br><a href="#" class="btn btn-primary">Read More ></a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6">

                    <div class="wow fadeInRight" data-wow-delay="0.1s">
                        <div class="service-box row ml-5">
                            <div class="service-icon col-sm-1" align="center">
                                <a href="#" title="Click to read about event"><span class="fa fa-calendar fa-3x"></span></a>
                                06.11 <br>2018
                            </div>
                            <div class="service-desc col-sm-10">
                                <h5 class="h-light"><a href="#" title="Click to read about event">Event Title</a></h5>
                                <p>Description of the event will be summarized to fit the space then for more details about the event including pictures,
                                the user will click <br><a href="#" class="btn btn-primary">Read More ></a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">

                    <div class="wow fadeInRight" data-wow-delay="0.1s">
                        <div class="service-box row ml-5">
                            <div class="service-icon col-sm-1" align="center">
                                <a href="#" title="Click to read about event"><span class="fa fa-calendar fa-3x"></span></a>
                                06.11 <br>2018
                            </div>
                            <div class="service-desc col-sm-10">
                                <h5 class="h-light"><a href="#" title="Click to read about event">Event Title</a></h5>
                                <p>Description of the event will be summarized to fit the space then for more details about the event including pictures,
                                the user will click <br><a href="#" class="btn btn-primary">Read More ></a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">

                    <div class="wow fadeInRight" data-wow-delay="0.1s">
                        <div class="service-box row ml-5">
                            <div class="service-icon col-sm-1" align="center">
                                <a href="#" title="Click to read about event"><span class="fa fa-calendar fa-3x"></span></a>
                                06.11 <br>2018
                            </div>
                            <div class="service-desc col-sm-10">
                                <h5 class="h-light"><a href="#" title="Click to read about event">Event Title</a></h5>
                                <p>Description of the event will be summarized to fit the space then for more details about the event including pictures,
                                the user will click <br><a href="#" class="btn btn-primary">Read More ></a></p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- /Section: services -->



@endsection