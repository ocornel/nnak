@extends('layouts.portal_theme')
@section('title') Components @endsection
@section('active_content') active @endsection
@section('content')
    <div class="container portal-content">
        <div class="mb-3">
            These are the components that have been custom created by uses of the portal. You may view or edit.
        </div>
        <div class="table-responsive table--no-card m-b-30">
            <table class="table table-borderless table-striped table-earning">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Title</th>
                    <th>Icon</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @forelse($components as $component)
                    <tr>
                        <td>{{$component->name}}</td>
                        <td>{{$component->title}}</td>
                        <td><i class="fa {{$component->icon}}"></i></td>
                        <td>
                            <a href="{{route('show_component',$component->id )}}"><i class="fa fa-info-circle"></i> View</a> &nbsp;
                            <a href="{{route('edit_component', $component->id)}}"><i class="fa fa-edit"></i> Edit</a>
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