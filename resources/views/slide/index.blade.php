@extends('layouts.portal_theme')
@section('title') Slides @endsection
@section('active_content') active @endsection
@section('content')
    <div class="container portal-content">
        <a href="{{route('new_slide')}}" class="pull-right btn btn-primary">New Slide</a>
        These are slides that run on the home page top area. You may edit, add or delete.
        @forelse($slides as $slide)
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <img src="{{$slide->image_url}}" alt="" style="max-width: 100%; max-height: 200px">
                </div>
                <div class="col-md">
                    <ul class="ul-no-decoration">
                        <li><b>Title: </b><span class="pull-right">{{$slide->title}}</span></li>
                        <li><b>Tag line: </b><span class="pull-right">{{$slide->tagline}}</span></li>
                        <li><b>Page:</b> <span class="pull-right"><a href="{{route('visit_page', [$slide->getPage()->url, $slide->page_id])}}" title="{{$slide->getPage()->title}}"><i class="fa fa-globe"> Visit Page</i></a></span></li>
                        <li><b>Created On: </b><span class="pull-right">{{$slide->created_at}}</span></li>
                        <li><b>Updated On: </b><span class="pull-right">{{$slide->updated_at}}</span></li>
                        <li class="pull-right"><span><a href="{{route('edit_slide', $slide->id)}}" class="btn btn-success"><i class="fa fa-edit"> Edit</i></a></span> &nbsp;
                            <span class="text-danger"><a href="{{route('destroy_slide', $slide->id)}}" class="btn btn-danger"><i class="fa fa-trash"> Delete</i></a></span></li>
                    </ul>
                </div>
            </div>
            <b>Content:</b> {{$slide->title}}
        @empty
            <tr>Nothing to show</tr>
    @endforelse

@endsection