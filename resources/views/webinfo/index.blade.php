@extends('layouts.portal_theme')
@section('title') Web Information @endsection
@section('content')
    <div class="container portal-content">
        This is a list of your website information. You can view for more details or edit to change. All changes made here will reflect on the public website.
        <div class="table-responsive table--no-card m-b-30">
            <table class="table table-borderless table-striped table-earning">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Content</th>
                        <th>Created On</th>
                        <th>Updated On</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($webinfos as $webinfo)
                    <tr>
                        <td>{{$webinfo->name}}</td>
                        <td>{{$webinfo->content}}</td>
                        <td>{{$webinfo->created_at}}</td>
                        <td>{{$webinfo->updated_at}}</td>
                        <td>
                            <a href="{{route('edit_webinfo', $webinfo->id)}}"><i class="fa fa-edit"></i> Edit</a>
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