@extends('layouts.portal_theme')
@section('title') New Slide @endsection
@section('content')
    <div class="container">
        <form action="{{ isset($slide) ? route('update_slide', $slide->id) : route('store_slide')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
            {{csrf_field()}}
            <div class="card edit-form">
                <div class="card-header">@if(isset($slide)) Editing Slide: ({{$slide->title}}) @else New Slide @endif</div>
                <div class="card-body">
                    @if(isset($slide))
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md"><b>Created on: </b>{{\Carbon\Carbon::parse($slide->created_at)->format('d M, Y H:i')}}</div>
                        <div class="col-md"><b>Last Updated: </b>{{\Carbon\Carbon::parse($slide->updated_at)->format('d M, Y H:i')}}</div>
                    </div>
                    @endif
                    <br>
                    <div class="row form-group">
                        <div class="col col-md-2">
                            <label for="title" class=" form-control-label">Title</label>
                        </div>
                        <div class="col-12 col-md-10">
                            <input type="text" id="title" name="title" placeholder="Slide Title" class="form-control" required value="{{isset($slide) ? $slide->title : ''}}">
                            <small class="form-text text-muted">This is the title of the slide.</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-2">
                            <label for="tagline" class=" form-control-label">Tagline</label>
                        </div>
                        <div class="col-12 col-md-10">
                            <input type="text" id="tagline" name="tagline" placeholder="Slide Tagline" class="form-control" required value="{{isset($slide) ? $slide->tagline : ''}}">
                            <small class="form-text text-muted">The tagline for the slide.</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-2">
                            <label for="content" class=" form-control-label">Content</label>
                        </div>
                        <div class="col-12 col-md-10">
                            <textarea id="content"  class="form-control"  name="content" rows="10" required>{{isset($slide) ? $slide->content : ''}}</textarea>
                            <small class="form-text text-muted">This is the content of the slide.</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-2">
                            <label for="page_id" class=" form-control-label">Slide</label>
                        </div>
                        <div class="col-12 col-md-10">
                            <select name="page_id" id="page_id"  class="form-control">
                                @foreach($pages as $page)
                                    <option value="{{$page->id}}">{{$page->title}}</option>
                                @endforeach
                            </select>
                            <small class="form-text text-muted">Select the page this slide links to. Optional.</small>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-2">
                            <label for="slide_image" class=" form-control-label">Image</label>
                        </div>
                        <div class="col-12 col-md-10">
                            <input type="file" accept="image/png, image/jpeg" id="image_url"
                                   class="form-control" name="slide_image"
                                   @if(!isset($slide))required @endif
                                   value="{{isset($slide) ? $slide->image_url  : old('image_url')}}">
                            @if(isset($slide))
                            <img style="max-width: 100%" id="slide_image"
                                 src="../{{$slide->image_url}}"
                            />
                            @endif
                            <small class="form-text text-muted">{{isset($slide) ? "Current Slide Image. You may change,": "Upload The slide image."}}</small>
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
                    placeholder: 'Type the content of the slide here. You can use the toolbar provided.',
                }
            );
        });
    </script>
@endsection