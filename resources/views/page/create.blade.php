@extends('layouts.portal_theme')
@section('title') New Page @endsection
@section('content')
    <div class="container">
        <form action="{{ isset($page) ? route('update_page', $page->id) : route('store_page')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
            {{csrf_field()}}
            <div class="card edit-form">
                <div class="card-header">@if(isset($page)) Editing Page: ({{$page->title}}) @else New Page @endif</div>
                <div class="card-body">
                    @if(isset($page))
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md"><b>Created on: </b>{{$page->created_at}}</div>
                        <div class="col-md"><b>Last Updated: </b>{{$page->updated_at}}</div>
                    </div>
                    @endif
                    <br>
                    <div class="row form-group">
                        <div class="col col-md-2">
                            <label for="title" class=" form-control-label">Title</label>
                        </div>
                        <div class="col-12 col-md-10">
                            <input type="text" id="title" name="title" placeholder="Page Title" class="form-control" required value="{{isset($page) ? $page->title : ''}}">
                            <small class="form-text text-muted">This is the title of the page.</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-2">
                            <label for="content" class=" form-control-label">Content</label>
                        </div>
                        <div class="col-12 col-md-10">
                            <textarea id="content"  class="form-control"  name="content" rows="10" required>{{isset($page) ? $page->content : ''}}</textarea>
                            <small class="form-text text-muted">This is the content of the page.</small>
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
                    placeholder: 'Type the content of the page here. You can use the toolbar provided.',
                }
            );
        });
    </script>
@endsection