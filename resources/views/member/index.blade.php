@extends('layouts.portal_theme')
@section('title') Members @endsection
@section('active_content') active @endsection
@section('content')
    <div class="container portal-content">
        <a href="{{route('new_member')}}" class="pull-right btn btn-primary">New Member</a>
        These are the images that have been uploaded in the system and their context of upload. You may edit.
        @forelse($members as $member)
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <img src="{{URL::to($member->image_url)}}" alt="" style="width: 100%">
                </div>
                <div class="col-md">
                    <ul class="ul-no-decoration">
                        <li><b>Name: </b><span class="pull-right">{{$member->name}}</span></li>
                        <li><b>Profession:</b> <span class="pull-right">{{$member->profession}}</span></li>
                        <li><b>Role: </b><span class="pull-right">{{$member->role}}</span></li>
                        <li><b>Created On: </b><span class="pull-right">{{$member->created_at}}</span></li>
                        <li><b>Updated On: </b><span class="pull-right">{{$member->updated_at}}</span></li>
                        <li><b>Profile:</b> {{$member->profile}}</li>
                        <li><span class="pull-right"><a href="{{route('edit_member', $member->id)}}" class="btn btn-primary">Edit</a></span></li>
                    </ul>
                </div>
            </div>
        @empty
            <tr>Nothing to show</tr>
        @endforelse

    </div>
@endsection