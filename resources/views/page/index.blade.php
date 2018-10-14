@extends('layouts.portal_theme')
@section('title') Pages @endsection
@section('content')
    <div class="container portal-content">
        These are the pages that have been custom created by uses of the portal. You may view or edit.
        <a href="{{route('new_page')}}" class="pull-right btn btn-primary">New Page</a>
        <div class="table-responsive table--no-card m-b-30">
            <table class="table table-borderless table-striped table-earning">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Created By</th>
                    <th>Created On</th>
                    <th>Updated On</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @forelse($pages as $page)
                    <tr>
                        <td>{{$page->title}}</td>
                        <td>{{$page->getCreator()->name}}</td>
                        <td>{{$page->created_at}}</td>
                        <td>{{$page->updated_at}}</td>
                        <td>
                            <a href="{{route('visit_page',[$page->url,$page->id] )}}" target="_blank"><i class="fa fa-globe"></i> Visit</a> &nbsp;
                            <a href="{{route('edit_page', $page->id)}}"><i class="fa fa-edit"></i> Edit</a>
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