@extends('layouts.portal_theme')
@section('title') Users @endsection
@section('content')
    <div class="container portal-content">
        @if(Auth::user()->is_admin == true)
        <a href="{{route('new_user')}}" class="pull-right btn btn-primary">New Admin</a>
        @endif
        These are the people that can log into the portal to edit website content.
        <div class="table-responsive table--no-card m-b-30">
            <table class="table table-borderless table-striped table-earning">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Email Address</th>
                    <th>Created On</th>
                    <th>Updated On</th>
                    @if(Auth::user()->is_admin == true)
                    <th>Actions</th>
                    @endif
                </tr>
                </thead>
                <tbody>
                @forelse($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{\Carbon\Carbon::parse($user->created_at)->format('d M, Y H:i')}}</td>
                        <td>{{\Carbon\Carbon::parse($user->updated_at)->format('d M, Y H:i')}}</td>
                        @if(Auth::user()->is_admin == true)
                            <td>
                                @if($user->id > 2)
                            <a href="{{route('edit_user', $user->id)}}" class="text-warning"><i class="fa fa-edit"> Edit</i></a> &nbsp;
                            <a href="{{$user->id == Auth::user()->id ? '' : route('destroy_user', $user->id)}}" class="text-danger" {{$user->id == Auth::user()->id ? 'inactive' : ''}}><i class="fa fa-trash"> Delete</i></a>
                                    @else No actions @endif
                        </td>
                        @endif
                    </tr>
                @empty
                    <tr>Nothing to show</tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection