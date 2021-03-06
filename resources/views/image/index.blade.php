@extends('layouts.portal_theme')
@section('title') Images @endsection
@section('active_content') active @endsection
@section('content')
    <div class="container portal-content">
        These are the images that have been uploaded in the system while creating an event or a slide. You may edit.
        @forelse($images as $image)
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <img src="{{URL::to($image->image_url)}}" alt="" style="width: 100%">
                </div>
                <div class="col-md">
                    <ul class="ul-no-decoration">
                        <li><b>Caption: </b><span class="pull-right">{{$image->caption}}</span></li>
                        <li><b>Shown On Gallery:</b> <span class="pull-right">{{$image->on_gallery == 1? "Yes": "No"}}</span></li>
                        <li><b>Event: </b><span class="pull-right">{{$image->getEventPage()->title}}</span></li>
                        <li><b>Created On: </b><span class="pull-right">{{\Carbon\Carbon::parse($image->created_at)->format('d M, Y H:i')}}</span></li>
                        <li><b>Updated On: </b><span class="pull-right">{{\Carbon\Carbon::parse($image->updated_at)->format('d M, Y H:i')}}</span></li>
                        <li><b>Description:</b> {{$image->description}}</li>
                        <li class="pull-right"><span><a href="{{route('edit_image', $image->id)}}" class="btn btn-success"><i class="fa fa-edit"> Edit</i></a></span> &nbsp;
                            <span class="text-danger"><a href="{{route('destroy_image', $image->id)}}" class="btn btn-danger"><i class="fa fa-trash"> Delete</i></a></span></li>                        </ul>
                </div>
            </div>
        @empty
            <hr>
            <p>Nothing to show</p>
        @endforelse
    </div>
@endsection