@extends('layouts.public_theme')

@section('title')
    {{$page->title}}

@endsection

@section('page_nav')
    <span class="page-title">{{$page->title}}</span>
    @if($page->getEvent() != null)
        @if(sizeof($page->getEvent()->getImages()) > 0)
            <li><a href="#gallery">Gallery</a></li>
        @endif
    @endif
    @if(Auth::user() != null)
        <span ><a href="{{route('edit_page', $page->id)}}" class="btn btn-primary">Edit Page</a></span>
    @endif
@endsection

@section('content')
    <div class="container page-content">
        <div class="">
            <div class="">
            {!! $page->content !!}
            </div>
        </div>

        @if($page->getEvent() != null)
            @if(sizeof($page->getEvent()->getImages()) > 0)
                <div class="event-gallery home-section paddingtop-90" id="gallery">
                    <h3>Event Gallery</h3>

                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="wow bounceInUp" data-wow-delay="0.2s">
                                <div id="owl-works" class="owl-carousel">
                                    @foreach($page->getEvent()->getImages() as $image)
                                        <div class="item"><a href="{{URL::to($image->image_url)}}" title="{{$image->title}}" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg')}}"><img src="{{ URL::to($image->image_url)}}" class="img-responsive" alt="img"></a></div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endif
        <div class="page-widget">
            <h5>More Pages</h5>
            <ul class="">
                @if(isset($links))
                    @forelse($links as $link)
                        <li><a href="{{ '../'.$link->url }}" title="{{$link->title}}">{{$link->name}}</a></li>
                    @empty
                    @endforelse
                @endif
            </ul>
        </div>

    </div>
@endsection