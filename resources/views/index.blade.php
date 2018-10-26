@extends('layouts.public_theme')

@section('page_nav')
    <li class="active"><a href="#intro">Home</a></li>
    <li><a href="#benefits">Benefits</a></li>
    <li><a href="#members">Members</a></li>
    @if(sizeof($gallery_images) > 0)
        <li><a href="#gallery">Gallery</a></li>
    @endif
    <li><a href="#testimonial">Testimonials</a></li>
    {{--<li class="dropdown">--}}
        {{--<a href="#" class="dropdown-toggle red" data-toggle="dropdown">--}}
            {{--<span class="red badge custom-badge">Admin Only<b class="caret"></b></span></a>--}}
        {{--<ul class="dropdown-menu">--}}
            {{--<li><a href="#">Edit Content</a></li>--}}
        {{--</ul>--}}
    {{--</li>--}}
@endsection

@section('title')
    Home
@endsection

@section('content')
    <!-- Section: intro -->
    <section id="intro" class="intro">
        <div class="intro-content">
            <div class="container">

                <div id="carousel-reviews" class="carousel slide nnak-slide" data-ride="carousel">

                    <div class="carousel-inner">
                        {{--<div class="item active">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-lg-6">--}}
                                    {{--<div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">--}}
                                        {{--<h2 class="h-ultra">Slider 2 Title</h2>--}}
                                    {{--</div>--}}
                                    {{--<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">--}}
                                        {{--<h4 class="h-light">Slider 2 tagline <span class="txt-blue">with formatted</span> text</h4>--}}
                                    {{--</div>--}}
                                    {{--<div class="well well-trans">--}}
                                        {{--<div class="wow fadeInRight" data-wow-delay="0.1s">--}}

                                            {{--<ul class="lead-list">--}}
                                                {{--<li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Formatted list item 1 </strong><br />Brief desciption. Just showing what could be done with this space</span></li>--}}
                                                {{--<li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Formatted list item 2 </strong><br />Brief desciption. Just showing what could be done with this space</span></li>--}}
                                                {{--<li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Formatted list item 3 </strong><br />Brief desciption. Just showing what could be done with this space</span></li>--}}
                                            {{--</ul>--}}

                                        {{--</div>--}}
                                    {{--</div>--}}

                                {{--</div>--}}
                                {{--<div class="col-lg-6">--}}
                                    {{--<div class="form-wrapper">--}}
                                        {{--<div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">--}}

                                            {{--<div class="panel panel-skin">--}}
                                                {{--<div class="panel-heading">--}}
                                                    {{--<h3 class="panel-title"><span class="fa fa-pencil-square-o"></span> Call to Action <small>(Request a callback !)</small></h3>--}}
                                                {{--</div>--}}
                                                {{--<div class="panel-body">--}}
                                                    {{--<div id="sendmessage">Your message has been sent. Thank you!</div>--}}
                                                    {{--<div id="errormessage"></div>--}}

                                                    {{--<form action="" method="post" role="form" class="contactForm lead">--}}
                                                        {{--<div class="row">--}}
                                                            {{--<div class="col-xs-6 col-sm-6 col-md-6">--}}
                                                                {{--<div class="form-group">--}}
                                                                    {{--<label>First Name</label>--}}
                                                                    {{--<input type="text" name="first_name" id="first_name" class="form-control input-md" data-rule="minlen:3" data-msg="Please enter at least 3 chars">--}}
                                                                    {{--<div class="validation"></div>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="col-xs-6 col-sm-6 col-md-6">--}}
                                                                {{--<div class="form-group">--}}
                                                                    {{--<label>Last Name</label>--}}
                                                                    {{--<input type="text" name="last_name" id="last_name" class="form-control input-md" data-rule="minlen:3" data-msg="Please enter at least 3 chars">--}}
                                                                    {{--<div class="validation"></div>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}

                                                        {{--<div class="row">--}}
                                                            {{--<div class="col-xs-6 col-sm-6 col-md-6">--}}
                                                                {{--<div class="form-group">--}}
                                                                    {{--<label>Email</label>--}}
                                                                    {{--<input type="email" name="email" id="email" class="form-control input-md" data-rule="email" data-msg="Please enter a valid email">--}}
                                                                    {{--<div class="validation"></div>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="col-xs-6 col-sm-6 col-md-6">--}}
                                                                {{--<div class="form-group">--}}
                                                                    {{--<label>Phone number</label>--}}
                                                                    {{--<input type="text" name="phone" id="phone" class="form-control input-md" data-rule="required" data-msg="The phone number is required">--}}
                                                                    {{--<div class="validation"></div>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}

                                                        {{--<input type="submit" value="Submit" class="btn btn-skin bg-blue btn-block btn-lg">--}}

                                                        {{--<p class="lead-footer">* We'll contact you by phone & email later</p>--}}

                                                    {{--</form>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        <div class="item active">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
                                        <h2 class="h-ultra">Welcome</h2>
                                    </div>
                                    <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
                                        <h4 class="h-light">NNAK-PIB Mombasa County</h4>
                                    </div>
                                    <div class="well well-trans">
                                        <div class="wow fadeInRight" data-wow-delay="0.1s">
                                            We are ...
                                            <p class="text-right wow bounceIn" data-wow-delay="0.4s">
                                                <a href="{{route('about')}}" class="btn btn-skin btn-lg">Read more <i class="fa fa-angle-right"></i></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                                        <img src="{{ URL::to('img/first_slide.JPG')}}" class="img-responsive slide-image" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    @foreach($slides as $slide)
                        <div class="item">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
                                        <h2 class="h-ultra">{{$slide->title}}</h2>
                                    </div>
                                    <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
                                        <h4 class="h-light">{{$slide->tagline}}</h4>
                                    </div>
                                    <div class="well well-trans">
                                        <div class="wow fadeInRight" data-wow-delay="0.1s">
                                            {!! $slide->content !!}
                                            <p class="text-right wow bounceIn" data-wow-delay="0.4s">
                                                <a href="{{route('visit_page', [$slide->getPage()->url, $slide->page_id])}}" class="btn btn-skin btn-lg">Read more <i class="fa fa-angle-right"></i></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                                        <img src="{{ URL::to($slide->image_url)}}" class="img-responsive slide-image" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

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

    {{----}}
    {{--<section id="boxes" class="home-section paddingtop-80">--}}

        {{--<div class="container">--}}

            {{--<div class="slides">--}}

            {{--</div>--}}
            {{--<div class="row">--}}
                {{--@forelse($home_components as $component)--}}
                    {{--<div class="col-sm-3 col-md-3">--}}
                        {{--<div class="wow fadeInUp" data-wow-delay="0.2s">--}}
                            {{--<div class="box text-center">--}}
                                {{--<i class="fa {{$component->icon}} fa-3x circled bg-skin"></i>--}}
                                {{--<h4 class="h-bold">{{$component->title}}</h4>--}}
                                {{--<p>--}}
                                    {{--{{$component->content}}--}}
                                {{--</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--@empty--}}
                {{--@endforelse--}}
            {{--</div>--}}
        {{--</div>--}}

    {{--</section>--}}
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
                                        <h3>{{\NNAK\Page::info('download_title')}}</h3>
                                        <p>{{\NNAK\Page::info('download_message')}}</p>
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
                    <div class="wow fadeInUp" data-wow-delay="0.2s" align="right">
                        <img src="{{ URL::to('img/Checklist.jpg')}}" class="img-responsive" alt="" />
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="row">
                        @forelse($benefit_components as $component)
                        <div class="wow fadeInRight col-sm-6 col-md-6" data-wow-delay="0.1s">
                            <div class="service-box">
                                <div class="service-icon">
                                    <span class="fa {{$component->icon}} fa-3x"></span>
                                </div>
                                <div class="service-desc">
                                    <h5 class="h-light">{{$component->title}}</h5>
                                    <p>{{$component->content}}</p>
                                </div>
                            </div>
                        </div>
                        @empty
                        @endforelse
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
                            <div class="cbp-filter-counter"></div>)
                        </div>
                        @foreach($roles as $role)
                        <div data-filter=".{{str_replace(' ', '_', $role)}}" class="cbp-filter-item">{{$role}}
                            (<div class="cbp-filter-counter"></div>)
                        </div>
                        @endforeach
                        {{--<div data-filter=".nurse" class="cbp-filter-item">Nurses (--}}
                            {{--<div class="cbp-filter-counter"></div>)</div>--}}
                        {{--<div data-filter=".stakeholder" class="cbp-filter-item">Stakeholders (--}}
                            {{--<div class="cbp-filter-counter"></div>)</div>--}}
                    </div>

                    <div id="grid-container" class="cbp-l-grid-team">
                        <ul>
                            @foreach($members as $member)
                            <li class="cbp-item {{str_replace(' ', '_', $member->role)}}">
                                <a href="{{route('show_member', $member->id)}}" class="cbp-caption cbp-singlePage">
                                    <div class="cbp-caption-defaultWrap">
                                        @if($member->image_url != null)
                                        <img src="{{ URL::to($member->image_url)}}" alt="" width="100%">
                                            @else
                                        <img src="{{ URL::to('img/no_image_profile')}}" alt="" width="100%">
                                        @endif
                                    </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="cbp-l-caption-alignCenter">
                                            <div class="cbp-l-caption-body">
                                                <div class="cbp-l-caption-text">VIEW PROFILE</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="{{route('show_member', $member->id)}}" class="cbp-singlePage cbp-l-grid-team-name">{{$member->name}}</a>
                                <div class="cbp-l-grid-team-position">{{$member->profession}}</div>
                            </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- /Section: team -->



    <!-- Section: works -->
    @if(sizeof($gallery_images) > 0)
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
                            @foreach($gallery_images as $image)
                                <div class="item"><a href="{{URL::to($image->image_url)}}" title="{{$image->title}}" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg')}}"><img src="{{ URL::to($image->image_url)}}" class="img-responsive" alt="img"></a></div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
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
                @foreach($partners as $partner)
                <div class="col-sm-6 col-md-3">
                    <div class="partner">
                        <a href="{{$partner->url}}" target="_blank" title="{{$partner->name}}"><img src="{{ URL::to($partner->icon_url)}}" alt="{{$partner->name}}" style="width: 70%" /></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection