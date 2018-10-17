@extends('layouts.public_theme')

@section('title')
    {{$page->title}}

@endsection

@section('page_nav')
    <span class="page-title">{{$page->title}}</span>
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