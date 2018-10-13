@extends('layouts.public_theme')


@section('page_nav')
    <li class="active"><a href="#intro">Home</a></li>
    <li><a href="#benefits">Benefits</a></li>
    <li><a href="#members">Members</a></li>
    <li><a href="#gallery">Gallery</a></li>
    <li><a href="#testimonial">Testimonials</a></li>
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
    <!-- Section: intro -->
    <section id="intro" class="intro">
        <div class="intro-content">
            <div class="container">

                <div id="carousel-reviews" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
                                        <h2 class="h-ultra">Slide 1 Title</h2>
                                    </div>
                                    <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
                                        <h4 class="h-light">Slide One tagline</h4>
                                    </div>
                                    <div class="well well-trans">
                                        <div class="wow fadeInRight" data-wow-delay="0.1s">

                                            Slide One content will go here <br>
                                            <p>
                                                You could use any text to generally invite people to the website. Note that this is the first page visitors see.
                                            </p>
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
                        <div class="item">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
                                        <h2 class="h-ultra">Slider 2 Title</h2>
                                    </div>
                                    <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
                                        <h4 class="h-light">Slider 2 tagline <span class="txt-blue">with formatted</span> text</h4>
                                    </div>
                                    <div class="well well-trans">
                                        <div class="wow fadeInRight" data-wow-delay="0.1s">

                                            <ul class="lead-list">
                                                <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Formatted list item 1 </strong><br />Brief desciption. Just showing what could be done with this space</span></li>
                                                <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Formatted list item 2 </strong><br />Brief desciption. Just showing what could be done with this space</span></li>
                                                <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Formatted list item 3 </strong><br />Brief desciption. Just showing what could be done with this space</span></li>
                                            </ul>

                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-6">
                                    <div class="form-wrapper">
                                        <div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">

                                            <div class="panel panel-skin">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title"><span class="fa fa-pencil-square-o"></span> Call to Action <small>(Request a callback !)</small></h3>
                                                </div>
                                                <div class="panel-body">
                                                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                                                    <div id="errormessage"></div>

                                                    <form action="" method="post" role="form" class="contactForm lead">
                                                        <div class="row">
                                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                                <div class="form-group">
                                                                    <label>First Name</label>
                                                                    <input type="text" name="first_name" id="first_name" class="form-control input-md" data-rule="minlen:3" data-msg="Please enter at least 3 chars">
                                                                    <div class="validation"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                                <div class="form-group">
                                                                    <label>Last Name</label>
                                                                    <input type="text" name="last_name" id="last_name" class="form-control input-md" data-rule="minlen:3" data-msg="Please enter at least 3 chars">
                                                                    <div class="validation"></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                                <div class="form-group">
                                                                    <label>Email</label>
                                                                    <input type="email" name="email" id="email" class="form-control input-md" data-rule="email" data-msg="Please enter a valid email">
                                                                    <div class="validation"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                                <div class="form-group">
                                                                    <label>Phone number</label>
                                                                    <input type="text" name="phone" id="phone" class="form-control input-md" data-rule="required" data-msg="The phone number is required">
                                                                    <div class="validation"></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <input type="submit" value="Submit" class="btn btn-skin bg-blue btn-block btn-lg">

                                                        <p class="lead-footer">* We'll contact you by phone & email later</p>

                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                    <a class="left carousel-control" href="#carousel-reviews" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-reviews" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>




            </div>
        </div>
    </section>

    <!-- /Section: intro -->

    <!-- Section: boxes -->
    <section id="boxes" class="home-section paddingtop-80">

        <div class="container">

            <div class="slides">

            </div>
            <div class="row">


                <div class="col-sm-3 col-md-3">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box text-center">
                            <i class="fa fa-list-alt fa-3x circled bg-skin"></i>

                            <h4 class="h-bold">Membership</h4>
                            <p>
                                Give a brief description concerning membership in this association. Preferably, yay long to fit in here.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box text-center">
                            <i class="fa fa-hospital-o fa-3x circled bg-skin"></i>

                            <h4 class="h-bold">Participation</h4>
                            <p>
                                Give a brief description concerning participation in this association. Preferably, yay long to fit in here.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box text-center">
                            <i class="fa fa-check fa-3x circled bg-skin"></i>

                            <h4 class="h-bold">Benefits</h4>
                            <p>
                                Note: These could have their titles and description changed by the admin. So they don't have to be these.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box text-center">
                            <i class="fa fa-user-md fa-3x circled bg-skin"></i>
                            <h4 class="h-bold">Works and Research</h4>
                            <p>
                                Try as much as possible to have the lengths of the descriptions equalling so as to balance the heights.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- /Section: boxes -->


    <section id="callaction" class="home-section paddingtop-40">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="callaction bg-gray">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="cta-text">
                                        <h3>You are a nurse? You'd love to join us?</h3>
                                        <p>We welcome you to download the <a href="#" class="txt-blue" title="Link to download form could go here.">NCK licence renewal form</a> and <a href="#" title="Link for membership form could go here." class="txt-blue">membership form.</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="row">
                                    <div class="wow lightSpeedIn col-md" data-wow-delay="0.1s">
                                        <div class="cta-btn">
                                            <a href="#" class="btn btn-skin btn-lg"> <i class="fa fa-download"></i> Licence form</a>
                                        </div>
                                    </div>
                                    <div class="wow lightSpeedIn  col-md" data-wow-delay="0.1s">
                                        <div class="cta-btn">
                                            <a href="#" class="btn btn-skin btn-lg"> <i class="fa fa-download"></i> Membership form</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: benefits -->
    <section id="benefits" class="home-section nopadding paddingtop-60">

        <div class="container">

            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <img src="{{ URL::to('theme/img/dummy/img-1.jpg')}}" class="img-responsive" alt="" />
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">

                    <div class="wow fadeInRight" data-wow-delay="0.1s">
                        <div class="service-box">
                            <div class="service-icon">
                                <span class="fa fa-stethoscope fa-3x"></span>
                            </div>
                            <div class="service-desc">
                                <h5 class="h-light">Benefit 1</h5>
                                <p>Brief description of this benefit for members.</p>
                            </div>
                        </div>
                    </div>

                    <div class="wow fadeInRight" data-wow-delay="0.2s">
                        <div class="service-box">
                            <div class="service-icon">
                                <span class="fa fa-wheelchair fa-3x"></span>
                            </div>
                            <div class="service-desc">
                                <h5 class="h-light">Benefit 2</h5>
                                <p>You could share the list and description for coding.</p>
                            </div>
                        </div>
                    </div>
                    <div class="wow fadeInRight" data-wow-delay="0.3s">
                        <div class="service-box">
                            <div class="service-icon">
                                <span class="fa fa-plus-square fa-3x"></span>
                            </div>
                            <div class="service-desc">
                                <h5 class="h-light">Benefit 3</h5>
                                <p>You can also use this section for other stuff that...</p>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-sm-3 col-md-3">

                    <div class="wow fadeInRight" data-wow-delay="0.1s">
                        <div class="service-box">
                            <div class="service-icon">
                                <span class="fa fa-h-square fa-3x"></span>
                            </div>
                            <div class="service-desc">
                                <h5 class="h-light">Benefit 4</h5>
                                <p>...could be arranged in this format. Share for coding.</p>
                            </div>
                        </div>
                    </div>

                    <div class="wow fadeInRight" data-wow-delay="0.2s">
                        <div class="service-box">
                            <div class="service-icon">
                                <span class="fa fa-filter fa-3x"></span>
                            </div>
                            <div class="service-desc">
                                <h5 class="h-light">Benefit 5</h5>
                                <p>They don't have to be this many. Just list even count</p>
                            </div>
                        </div>
                    </div>
                    <div class="wow fadeInRight" data-wow-delay="0.3s">
                        <div class="service-box">
                            <div class="service-icon">
                                <span class="fa fa-user-md fa-3x"></span>
                            </div>
                            <div class="service-desc">
                                <h5 class="h-light">Benefit 6</h5>
                                <p>Though 6 works best for this space as you can see.....</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- /Section: services -->


    <!-- Section: member -->
    <section id="members" class="home-section bg-gray paddingbot-60">
        <div class="container marginbot-50">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <div class="section-heading text-center">
                            <h2 class="h-bold">Members</h2>
                            <p>These are some of the members we have with us</p>
                        </div>
                    </div>
                    <div class="divider-short"></div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div id="filters-container" class="cbp-l-filters-alignLeft">
                        <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">All (
                            <div class="cbp-filter-counter"></div>)</div>
                        <div data-filter=".administrative" class="cbp-filter-item">Administrative (
                            <div class="cbp-filter-counter"></div>)</div>
                        <div data-filter=".nurse" class="cbp-filter-item">Nurses (
                            <div class="cbp-filter-counter"></div>)</div>
                        <div data-filter=".stakeholder" class="cbp-filter-item">Stakeholders (
                            <div class="cbp-filter-counter"></div>)</div>
                    </div>

                    <div id="grid-container" class="cbp-l-grid-team">
                        <ul>
                            <li class="cbp-item nurse">
                                <a href="../../../public/theme/doctors/member1.html" class="cbp-caption cbp-singlePage">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="{{ URL::to('theme/img/team/1.jpg')}}" alt="" width="100%">
                                    </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="cbp-l-caption-alignCenter">
                                            <div class="cbp-l-caption-body">
                                                <div class="cbp-l-caption-text">VIEW PROFILE</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="../../../public/theme/doctors/member1.html" class="cbp-singlePage cbp-l-grid-team-name">Alice Grue</a>
                                <div class="cbp-l-grid-team-position">Psychiatrist</div>
                            </li>
                            <li class="cbp-item administrative">
                                <a href="../../../public/theme/doctors/member2.html" class="cbp-caption cbp-singlePage">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="{{ URL::to('theme/img/team/2.jpg')}}" alt="" width="100%">
                                    </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="cbp-l-caption-alignCenter">
                                            <div class="cbp-l-caption-body">
                                                <div class="cbp-l-caption-text">VIEW PROFILE</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="../../../public/theme/doctors/member2.html" class="cbp-singlePage cbp-l-grid-team-name">Tomas Murphy</a>
                                <div class="cbp-l-grid-team-position">Treasurer</div>
                            </li>
                            <li class="cbp-item stakeholder">
                                <a href="../../../public/theme/doctors/member4.html" class="cbp-caption cbp-singlePage">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="{{ URL::to('theme/img/team/4.jpg')}}" alt="" width="100%">
                                    </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="cbp-l-caption-alignCenter">
                                            <div class="cbp-l-caption-body">
                                                <div class="cbp-l-caption-text">VIEW PROFILE</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="../../../public/theme/doctors/member4.html" class="cbp-singlePage cbp-l-grid-team-name">Adam Taylor</a>
                                <div class="cbp-l-grid-team-position">Neurologist</div>
                            </li>
                            <li class="cbp-item nurse">
                                <a href="../../../public/theme/doctors/member1.html" class="cbp-caption cbp-singlePage">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="{{ URL::to('theme/img/dummy/img-1.png')}}" alt="" width="100%">
                                    </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="cbp-l-caption-alignCenter">
                                            <div class="cbp-l-caption-body">
                                                <div class="cbp-l-caption-text">VIEW PROFILE</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="../../../public/theme/doctors/member1.html" class="cbp-singlePage cbp-l-grid-team-name">Jane Song</a>
                                <div class="cbp-l-grid-team-position">Nurse</div>
                            </li>
                            <li class="cbp-item administrative">
                                <a href="../../../public/theme/doctors/member2.html" class="cbp-caption cbp-singlePage">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="{{ URL::to('theme/img/team/2.jpg')}}" alt="" width="100%">
                                    </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="cbp-l-caption-alignCenter">
                                            <div class="cbp-l-caption-body">
                                                <div class="cbp-l-caption-text">VIEW PROFILE</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="../../../public/theme/doctors/member2.html" class="cbp-singlePage cbp-l-grid-team-name">Joseph Murphy</a>
                                <div class="cbp-l-grid-team-position">Chair person</div>
                            </li>
                            <li class="cbp-item administrative">
                                <a href="../../../public/theme/doctors/member3.html" class="cbp-caption cbp-singlePage">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="{{ URL::to('theme/img/team/3.jpg')}}" alt="" width="100%">
                                    </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="cbp-l-caption-alignCenter">
                                            <div class="cbp-l-caption-body">
                                                <div class="cbp-l-caption-text">VIEW PROFILE</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="../../../public/theme/doctors/member3.html" class="cbp-singlePage cbp-l-grid-team-name">Alison Davis</a>
                                <div class="cbp-l-grid-team-position">Secretary</div>
                            </li>
                            <li class="cbp-item stakeholder">
                                <a href="../../../public/theme/doctors/member4.html" class="cbp-caption cbp-singlePage">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="{{ URL::to('theme/img/team/4.jpg')}}" alt="" width="100%">
                                    </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="cbp-l-caption-alignCenter">
                                            <div class="cbp-l-caption-body">
                                                <div class="cbp-l-caption-text">VIEW PROFILE</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="../../../public/theme/doctors/member4.html" class="cbp-singlePage cbp-l-grid-team-name">Kelvin Taylor</a>
                                <div class="cbp-l-grid-team-position">Medical Donor</div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- /Section: team -->



    <!-- Section: works -->
    <section id="gallery" class="home-section paddingbot-60">
        <div class="container marginbot-50">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <div class="section-heading text-center">
                            <h2 class="h-bold">Our Work photo Gallery</h2>
                            <p>A gallery of some of the work we've done over time</p>
                        </div>
                    </div>
                    <div class="divider-short"></div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="wow bounceInUp" data-wow-delay="0.2s">
                        <div id="owl-works" class="owl-carousel">
                            <div class="item"><a href="{{URL::to('theme/img/photo/1.jpg')}}" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg')}}"><img src="{{ URL::to('theme/img/photo/1.jpg')}}" class="img-responsive" alt="img"></a></div>
                            <div class="item"><a href="{{URL::to('theme/img/photo/2.jpg')}}" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/2@2x.jpg')}}"><img src="{{ URL::to('theme/img/photo/2.jpg')}}" class="img-responsive " alt="img"></a></div>
                            <div class="item"><a href="{{URL::to('theme/img/photo/3.jpg')}}" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/3@2x.jpg')}}"><img src="{{ URL::to('theme/img/photo/3.jpg')}}" class="img-responsive " alt="img"></a></div>
                            <div class="item"><a href="{{URL::to('theme/img/photo/4.jpg')}}" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/4@2x.jpg')}}"><img src="{{ URL::to('theme/img/photo/4.jpg')}}" class="img-responsive " alt="img"></a></div>
                            <div class="item"><a href="{{URL::to('theme/img/photo/5.jpg')}}" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/5@2x.jpg')}}"><img src="{{ URL::to('theme/img/photo/5.jpg')}}" class="img-responsive " alt="img"></a></div>
                            <div class="item"><a href="{{URL::to('theme/img/photo/6.jpg')}}" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/6@2x.jpg')}}"><img src="{{ URL::to('theme/img/photo/6.jpg')}}" class="img-responsive " alt="img"></a></div>
                            <div class="item"><a href="{{URL::to('theme/img/photo/3.jpg')}}" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/3@2x.jpg')}}"><img src="{{ URL::to('theme/img/photo/3.jpg')}}" class="img-responsive " alt="img"></a></div>
                            <div class="item"><a href="{{URL::to('theme/img/photo/4.jpg')}}" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/4@2x.jpg')}}"><img src="{{ URL::to('theme/img/photo/4.jpg')}}" class="img-responsive " alt="img"></a></div>
                            <div class="item"><a href="{{URL::to('theme/img/photo/5.jpg')}}" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/5@2x.jpg')}}"><img src="{{ URL::to('theme/img/photo/5.jpg')}}" class="img-responsive " alt="img"></a></div>
                            <div class="item"><a href="{{URL::to('theme/img/photo/6.jpg')}}" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/6@2x.jpg')}}"><img src="{{ URL::to('theme/img/photo/6.jpg')}}" class="img-responsive " alt="img"></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Section: works -->


    <!-- Section: testimonial -->
    <section id="testimonial" class="home-section paddingbot-60 parallax testimonial" data-stellar-background-ratio="0.5">

        <div class="carousel-reviews broun-block">
            <div class="container">
                <div class="row">
                    <div id="carousel-reviews" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-md-4 col-sm-6">
                                    <div class="block-text rel zmin">
                                        <a title="" href="#">Testimonial title</a>
                                        <div class="mark">Rating: <span class="rating-input">
                                                <span data-value="0" class="glyphicon glyphicon-star"></span>
                                                <span data-value="1" class="glyphicon glyphicon-star"></span>
                                                <span data-value="2" class="glyphicon glyphicon-star"></span>
                                                <span data-value="3" class="glyphicon glyphicon-star"></span>
                                                <span data-value="4" class="glyphicon glyphicon-star-empty"></span>
                                                <span data-value="5" class="glyphicon glyphicon-star-empty"></span>
                                            </span>
                                        </div>
                                        <p>Testimonial message. Tell me if you will provide static testimonials or I should design for people to give tesimonials which will then show here</p>
                                        <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                    </div>
                                    <div class="person-text rel text-light person">
                                        {{--<img src="{{ URL::to('theme/img/testimonials/1.jpg')}}" alt="" class=" img-circle" />--}}
                                        <a title="" href="#">Anna</a>
                                        <span>Chicago, Illinois</span>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 hidden-xs">
                                    <div class="block-text rel zmin">
                                        <a title="" href="#">Orthopedic Surgery</a>
                                        <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star-empty"></span>
                                                <span
                                data-value="3" class="glyphicon glyphicon-star-empty"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span> </span>
                                        </div>
                                        <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
                                        <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                    </div>
                                    <div class="person-text rel text-light">
{{--                                        <img src="{{ URL::to('theme/img/testimonials/2.jpg')}}" alt="" class="person img-circle" />--}}
                                        <a title="" href="#">Matthew G</a>
                                        <span>San Antonio, Texas</span>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
                                    <div class="block-text rel zmin">
                                        <a title="" href="#">Medical consultation</a>
                                        <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3"
                                                                                                                                                                                                                                                                                             class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star"></span><span data-value="5" class="glyphicon glyphicon-star"></span> </span>
                                        </div>
                                        <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
                                        <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                    </div>
                                    <div class="person-text rel text-light">
{{--                                        <img src="{{ URL::to('theme/img/testimonials/3.jpg')}}" alt="" class="person img-circle" />--}}
                                        <a title="" href="#">Scarlet Smith</a>
                                        <span>Dallas, Texas</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-4 col-sm-6">
                                    <div class="block-text rel zmin">
                                        <a title="" href="#">Birth control pills</a>
                                        <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3"
                                                                                                                                                                                                                                                                                             class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span> </span>
                                        </div>
                                        <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
                                        <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                    </div>
                                    <div class="person-text rel text-light">
{{--                                        <img src="{{ URL::to('theme/img/testimonials/4.jpg')}}" alt="" class="person img-circle" />--}}
                                        <a title="" href="#">Lucas Thompson</a>
                                        <span>Austin, Texas</span>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 hidden-xs">
                                    <div class="block-text rel zmin">
                                        <a title="" href="#">Radiology</a>
                                        <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star-empty"></span>
                        <span
                                data-value="3" class="glyphicon glyphicon-star-empty"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span> </span>
                                        </div>
                                        <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
                                        <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                    </div>
                                    <div class="person-text rel text-light">
{{--                                        <img src="{{ URL::to('theme/img/testimonials/5.jpg')}}" alt="" class="person img-circle" />--}}
                                        <a title="" href="#">Ella Mentree</a>
                                        <span>Fort Worth, Texas</span>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
                                    <div class="block-text rel zmin">
                                        <a title="" href="#">Cervical Lesions</a>
                                        <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3"
                                                                                                                                                                                                                                                                                             class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star"></span><span data-value="5" class="glyphicon glyphicon-star"></span> </span>
                                        </div>
                                        <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
                                        <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                    </div>
                                    <div class="person-text rel text-light">
{{--                                        <img src="{{ URL::to('theme/img/testimonials/6.jpg')}}" alt="" class="person img-circle" />--}}
                                        <a title="" href="#">Suzanne Adam</a>
                                        <span>Detroit, Michigan</span>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <a class="left carousel-control" href="#carousel-reviews" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-reviews" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Section: testimonial -->


    <!-- Section: pricing -->
    {{--<section id="pricing" class="home-section bg-gray paddingbot-60">--}}
        {{--<div class="container marginbot-50">--}}
            {{--<div class="row">--}}
                {{--<div class="col-lg-8 col-lg-offset-2">--}}
                    {{--<div class="wow lightSpeedIn" data-wow-delay="0.1s">--}}
                        {{--<div class="section-heading text-center">--}}
                            {{--<h2 class="h-bold">Health packages</h2>--}}
                            {{--<p>Take charge of your health today with our specially designed health packages</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="divider-short"></div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="container">--}}

            {{--<div class="row">--}}

                {{--<div class="col-sm-4 pricing-box">--}}
                    {{--<div class="wow bounceInUp" data-wow-delay="0.1s">--}}
                        {{--<div class="pricing-content general">--}}
                            {{--<h2>Basic Fit 1 Package</h2>--}}
                            {{--<h3>$33<sup>.99</sup> <span>/ one time</span></h3>--}}
                            {{--<ul>--}}
                                {{--<li>Anthropometry (BMI, WH Ratio) <i class="fa fa-check icon-success"></i></li>--}}
                                {{--<li>Post Examination Review <i class="fa fa-check icon-success"></i></li>--}}
                                {{--<li>General Screening – Basic <i class="fa fa-check icon-success"></i></li>--}}
                                {{--<li><del>Health Screening Report</del> <i class="fa fa-times icon-danger"></i></li>--}}
                            {{--</ul>--}}

                            {{--<div class="price-bottom">--}}
                                {{--<a href="#" class="btn btn-skin btn-lg">Purchase</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="col-sm-4 pricing-box featured-price">--}}
                    {{--<div class="wow bounceInUp" data-wow-delay="0.3s">--}}
                        {{--<div class="pricing-content featured">--}}
                            {{--<h2>Golden Glow Package</h2>--}}
                            {{--<h3>$65<sup>.99</sup> <span>/ one time</span></h3>--}}
                            {{--<ul>--}}
                                {{--<li>Anthropometry (BMI, WH Ratio) <i class="fa fa-check icon-success"></i></li>--}}
                                {{--<li>Post Examination Review <i class="fa fa-check icon-success"></i></li>--}}
                                {{--<li>General Screening – Basic <i class="fa fa-check icon-success"></i></li>--}}
                                {{--<li>Body Composition Analysis <i class="fa fa-check icon-success"></i></li>--}}
                                {{--<li>GR Assessment & Scoring <i class="fa fa-check icon-success"></i></li>--}}
                            {{--</ul>--}}

                            {{--<div class="price-bottom">--}}
                                {{--<a href="#" class="btn btn-skin btn-lg">Purchase</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="col-sm-4 pricing-box">--}}
                    {{--<div class="wow bounceInUp" data-wow-delay="0.2s">--}}
                        {{--<div class="pricing-content general last">--}}
                            {{--<h2>Basic Fit 2 Package</h2>--}}
                            {{--<h3>$47<sup>.99</sup> <span>/ one time</span></h3>--}}
                            {{--<ul>--}}
                                {{--<li>Anthropometry (BMI, WH Ratio) <i class="fa fa-check icon-success"></i></li>--}}
                                {{--<li>Post Examination Review <i class="fa fa-check icon-success"></i></li>--}}
                                {{--<li>General Screening – Regular <i class="fa fa-check icon-success"></i></li>--}}
                                {{--<li><del>Health Screening Report</del> <i class="fa fa-times icon-danger"></i></li>--}}
                            {{--</ul>--}}

                            {{--<div class="price-bottom">--}}
                                {{--<a href="#" class="btn btn-skin btn-lg">Purchase</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

            {{--</div>--}}

        {{--</div>--}}
    {{--</section>--}}
    <!-- /Section: pricing -->

    <section id="partner" class="home-section paddingbot-60">
        <div class="container marginbot-50">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow lightSpeedIn" data-wow-delay="0.1s">
                        <div class="section-heading text-center">
                            <h2 class="h-bold">Our partner</h2>
                            <p>Companies and organizations that we work together with.</p>
                        </div>
                    </div>
                    <div class="divider-short"></div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="partner">
                        <a href="#"><img src="{{ URL::to('theme/img/dummy/partner-1.jpg')}}" alt="" /></a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="partner">
                        <a href="#"><img src="{{ URL::to('theme/img/dummy/partner-2.jpg')}}" alt="" /></a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="partner">
                        <a href="#"><img src="{{ URL::to('theme/img/dummy/partner-3.jpg')}}" alt="" /></a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="partner">
                        <a href="#"><img src="{{ URL::to('theme/img/dummy/partner-4.jpg')}}" alt="" /></a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="partner">
                        <a href="#"><img src="{{ URL::to('theme/img/dummy/partner-1.jpg')}}" alt="" /></a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="partner">
                        <a href="#"><img src="{{ URL::to('theme/img/dummy/partner-2.jpg')}}" alt="" /></a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="partner">
                        <a href="#"><img src="{{ URL::to('theme/img/dummy/partner-3.jpg')}}" alt="" /></a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="partner">
                        <a href="#"><img src="{{ URL::to('theme/img/dummy/partner-4.jpg')}}" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection