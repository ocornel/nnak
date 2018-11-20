@extends('layouts.portal_theme')
@section('title') New Message @endsection
@section('content')
    <div class="container">
        <form action="{{ isset($message) ? route('update_message') : route('store_message')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
            {{csrf_field()}}
            <div class="card edit-form">
                <div class="card-header">@if(isset($message)) Editing Chairman's Message @else New Message @endif</div>
                <div class="card-body">
                    @if(isset($message))
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md"><b>Created on: </b>{{\Carbon\Carbon::parse($message->created_at)->format('d M, Y H:i')}}</div>
                            <div class="col-md"><b>Last Updated: </b>{{\Carbon\Carbon::parse($message->updated_at)->format('d M, Y H:i')}}</div>
                        </div>
                    @endif
                    <br>
                    <div class="row form-group">
                        <div class="col col-md-2">
                            <label for="title" class=" form-control-label">Title</label>
                        </div>
                        <div class="col-12 col-md-10">
                            <input type="text" id="title"  class="form-control"  name="title" required value="{{isset($message) ? $message->title : ''}}">
                            <small class="form-text text-muted">The title of the message.</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-2">
                            <label for="from" class=" form-control-label">From</label>
                        </div>
                        <div class="col-12 col-md-10">
                            <input type="text" id="from"  class="form-control"  name="from" required value="{{isset($message) ? $message->from : ''}}">
                            <small class="form-text text-muted">From who?</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-2">
                            <label for="content" class=" form-control-label">Content</label>
                        </div>
                        <div class="col-12 col-md-10">
                            <textarea id="content"  class="form-control"  name="content" rows="10" required>{{isset($message) ? $message->content : 'Type in the message.'}}</textarea>
                            <small class="form-text text-muted">This is the content of the message.</small>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm pull-right">
                        <i class="fa fa-dot-circle-o"></i> Submit
                    </button>
                    <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Reset
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection


@section('scripts')
    <script>
        $(document).ready(function() {
            $('#content').summernote({
                    placeholder: 'Type the content of the message here. You can use the toolbar provided.',
                }
            );
        });
    </script>
@endsection