@extends('layouts.portal_theme')
@section('title') Testimonials @endsection
@section('active_content') active @endsection
@section('content')
    {{$testimonials[0]}}
    <div class="container portal-content">
        <a href="{{route('new_testimonial')}}" class="pull-right btn btn-primary">New Testimonial</a>
        These are the testimonials you have received. You can add more, edit current or delete. All changes made here will reflect on the public website.
        <div class="table-responsive table--no-card m-b-30">
            <table class="table table-borderless table-striped table-earning">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>By</th>
                    <th>Rating</th>
                    <th>Created On</th>
                    <th>Updated On</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @forelse($testimonials as $testimonial)
                    <tr>
                        <td>{{$testimonial->title}}</td>
                        <td>{{$testimonial->client_name}}</td>
                        <td>{{$testimonial->rating}}</td>
                        <td>{{\Carbon\Carbon::parse($testimonial->created_at)->format('d M, Y H:i')}}</td>
                        <td>{{\Carbon\Carbon::parse($testimonial->updated_at)->format('d M, Y H:i')}}</td>
                        <td>
                            <a href="{{route('show_testimonial', $testimonial->id)}}" class="text-success"><i class="fa fa-info-circle"> View</i></a> &nbsp;
                            <a href="{{route('edit_testimonial', $testimonial->id)}}" class="text-warning"><i class="fa fa-edit"> Edit</i></a> &nbsp;
                            <a href="{{route('destroy_testimonial', $testimonial->id)}}" class="text-danger"><i class="fa fa-trash"> Delete</i></a>
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