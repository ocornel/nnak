@extends('layouts.portal_theme')
@section('title') Members @endsection
@section('active_content') active @endsection
@section('content')
    <div class="container portal-content">
        <a href="{{route('new_member')}}" class="pull-right btn btn-primary">New Member</a>
        These are members that have been included in your website page. You may edit, add, remove.
        @forelse($members as $member)
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <img src="{{URL::to($member->image_url)}}" alt="" style="width: 100%">
                </div>
                <div class="col-md">
                    <ul class="ul-no-decoration">
                        <li><b>Name: </b><span class="pull-right">{{$member->name}}</span></li>
                        <li><b>Profession:</b> <span class="pull-right">{{$member->profession}}</span></li>
                        <li><b>Role: </b><span class="pull-right">{{$member->role}}</span></li>
                        <li><b>Created On: </b><span class="pull-right">{{\Carbon\Carbon::parse($member->created_at)->format('d M, Y H:i')}}</span></li>
                        <li><b>Updated On: </b><span class="pull-right">{{\Carbon\Carbon::parse($member->updated_at)->format('d M, Y H:i')}}</span></li>
                        <li class="pull-right"><span><a href="{{route('edit_member', $member->id)}}" class="btn btn-success"><i class="fa fa-edit"> Edit</i></a></span> &nbsp;
                            <span class="text-danger"><a href="{{route('destroy_member', $member->id)}}" class="btn btn-danger"><i class="fa fa-trash"> Delete</i></a></span></li>      
                    </ul>
                </div>
            </div>
            <b>Profile:</b> {!! $member->profile !!}
        @empty
            <tr>Nothing to show</tr>
        @endforelse

    </div>
@endsection