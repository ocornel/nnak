@extends('layouts.portal_theme')
@section('title') Partners @endsection
@section('active_content') active @endsection
@section('content')
    <div class="container portal-content">
        <a href="{{route('new_partner')}}" class="pull-right btn btn-primary">New Partner</a>
        These are the partners that have been included in your website home page. You may edit, delete or add a new one
        @forelse($partners as $partner)
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <img src="{{URL::to($partner->icon_url)}}" alt="" style="width: 100%">
                </div>
                <div class="col-md">
                    <ul class="ul-no-decoration">
                        <li><b>Name: </b><span class="pull-right">{{$partner->name}}</span></li>
                        <li><b>Website:</b> <span class="pull-right"><a href="{{$partner->url}}" title="{{$partner->url}}" target="_blank"><i class="fa fa-globe"> Visit Website</i></a></span></li>
                        <li><b>Created On: </b><span class="pull-right">{{$partner->created_at}}</span></li>
                        <li><b>Updated On: </b><span class="pull-right">{{$partner->updated_at}}</span></li>
                        <li class="pull-right"><span><a href="{{route('edit_partner', $partner->id)}}" class="btn btn-success"><i class="fa fa-edit"> Edit</i></a></span> &nbsp;
                            <span class="text-danger"><a href="{{route('destroy_partner', $partner->id)}}" class="btn btn-danger"><i class="fa fa-trash"> Delete</i></a></span></li>
                    </ul>
                </div>
            </div>
        @empty
            <tr>Nothing to show</tr>
    @endforelse

@endsection