@extends('layouts.portal_theme')
@section('title') New Event @endsection
@section('content')
    <div class="container">
        <form action="{{ isset($component) ? route('update_component', $component->id) : route('store_component')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
            {{csrf_field()}}
            <div class="card edit-form">
                <div class="card-header">@if(isset($component)) Editing Event: ({{$component->getPage()->title}}) @else New Event @endif</div>
                <div class="card-body">
                    @if(isset($component))
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md"><b>Created on: </b>{{$component->created_at}}</div>
                        <div class="col-md"><b>Last Updated: </b>{{$component->updated_at}}</div>
                    </div>
                    @endif
                    <br>
                    <div class="row form-group">
                        <div class="col col-md-2">
                            <label for="date" class=" form-control-label">Date</label>
                        </div>
                        <div class="col-12 col-md-3">
                            <input type="date" id="date" name="date" placeholder="date" class="form-control" required value="{{isset($component) ? $component->date : ''}}">
                            <small class="form-text text-muted">When?</small>
                        </div>
                        <div class="col col-md-2">
                            <label for="title" class=" form-control-label">Title</label>
                        </div>
                        <div class="col-12 col-md-5">
                            <input type="text" id="title" name="title" placeholder="Event Title" class="form-control" required value="{{isset($component) ? $page->title : ''}}">
                            <small class="form-text text-muted">This is the title of the component.</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-2">
                            <label for="content" class=" form-control-label">Intro</label>
                        </div>
                        <div class="col-12 col-md-10">
                            <textarea id="intro"  class="form-control"  name="intro" rows="3" required>{{isset($component) ? $component->intro : 'Briefly introduce the component'}}</textarea>
                            <small class="form-text text-muted">Give a brief introduction on the component.</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-2">
                            <label for="content" class=" form-control-label">Content</label>
                        </div>
                        <div class="col-12 col-md-10">
                            <textarea id="content"  class="form-control"  name="content" rows="10" required>{{isset($component) ? $page->content : 'Tell more about the component.'}}</textarea>
                            <small class="form-text text-muted">This is the content of the component.</small>
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
                    placeholder: 'Type the content of the component here. You can use the toolbar provided.',
                }
            );
        });
    </script>
@endsection