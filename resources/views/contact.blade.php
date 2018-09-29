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
    <!-- Section: contact -->
    <section id="contact" class="home-section nopadding paddingtop-60">

        <div class="container paddingtop-100">

            <div class="row">
                <div class="col-sm-9 col-md-9">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        [After you share your actual physical location, I will change this map to reflect the address.]
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.790475957992!2d36.80523381446791!3d-1.3005710360080527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10ec473dcd5b%3A0xc80b90a3fcf36781!2sNational+Nurses+Association+Of+Kenya!5e0!3m2!1sen!2ske!4v1538191670322" width="100%" height="450" frameborder="1" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    Detailed contact details will be included here
                </div>

            </div>
        </div>
    </section>
    <!-- /Section: services -->

    <!-- Section: testimonial -->
    <section id="form" class="home-section paddingbot-60 parallax testimonial" data-stellar-background-ratio="0.5">

        <div class="carousel-reviews broun-block">
            <div class="container">
                Working on A contact form that will be here
            </div>
        </div>
    </section>

@endsection