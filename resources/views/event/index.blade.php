@extends('layouts.portal_theme')
@section('title') Events @endsection
@section('content')
    <div class="container portal-content">
        <a href="{{route('new_event')}}" class="pull-right btn btn-primary">New Testimonial</a>
        These are the events you have received. You can add more, edit current or delete. All changes made here will reflect on the public website.
        <div class="table-responsive table--no-card m-b-30">
            <table class="table table-borderless table-striped table-earning">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Added by</th>
                    <th>Event Date</th>
                    <th>Views</th>
                    <th>Created On</th>
                    <th>Updated On</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @forelse($events as $event)
                    <tr>
                        <td>{{$event->getPage()->title}}</td>
                        <td>{{$event->getCreator()->name}}</td>
                        <td class="{{$event->date < \Carbon\Carbon::now() ? 'text-danger' : 'text-success'}}">{{$event->date}}</td>
                        <td>{{$event->getViews()}}</td>
                        <td>{{$event->created_at}}</td>
                        <td>{{$event->updated_at}}</td>
                        <td>
                            <a href="{{route('visit_page', [$event->getPage()->url, $event->page_id])}}" class="text-success"><i class="fa fa-info-circle"> View</i></a> &nbsp;
                            <a href="{{route('edit_event', $event->id)}}" class="text-warning"><i class="fa fa-edit"> Edit</i></a> &nbsp;
                            <a href="{{route('destroy_event', $event->id)}}" class="text-danger"><i class="fa fa-trash"> Delete</i></a>
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