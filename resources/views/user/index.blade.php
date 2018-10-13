@extends('layouts.portal_theme')
@section('title') Users @endsection
@section('content')
    <div class="container portal-content">
        <a href="{{route('new_user')}}" class="pull-right btn btn-primary">New Admin</a>
        These are the people that can log into the portal to edit website content.
        <div class="table-responsive table--no-card m-b-30">
            <table class="table table-borderless table-striped table-earning">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Email Address</th>
                    <th>Created On</th>
                    <th>Updated On</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @forelse($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->created_at}}</td>
                        <td>{{$user->updated_at}}</td>
                        <td>
                            <a href="{{route('edit_user', $user->id)}}" class="text-warning"><i class="fa fa-edit"> Edit</i></a> &nbsp;
                            <a href="{{$user->id == Auth::user()->id ? '' : route('destroy_user', $user->id)}}" class="text-danger" {{$user->id == Auth::user()->id ? 'inactive' : ''}}><i class="fa fa-trash"> Delete</i></a>
                        </td>
                    </tr>
                @empty
                    <tr>Nothing to show</tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection