@extends('layouts.portal_theme')
@section('title') New Image @endsection
@section('content')
    <div class="container">
        <form action="{{ isset($image) ? route('update_image', $image->id) : route('store_image')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
            {{csrf_field()}}
            <div class="card edit-form">
                <div class="card-header">@if(isset($image)) Editing Image: ({{$image->caption}}) @else New Image @endif</div>
                <div class="card-body">
                    @if(isset($image))
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md"><b>Created on: </b>{{\Carbon\Carbon::parse($image->created_at)->format('d M, Y H:i')}}</div>
                        <div class="col-md"><b>Last Updated: </b>{{\Carbon\Carbon::parse($image->updated_at)->format('d M, Y H:i')}}</div>
                    </div>
                    @endif
                    <br>
                    <div class="row form-group">
                        <div class="col col-md-2">
                            <label for="caption" class=" form-control-label">Caption</label>
                        </div>
                        <div class="col-12 col-md-10">
                            <input type="text" id="caption" name="caption" placeholder="Image Caption" class="form-control" required value="{{isset($image) ? $image->caption : ''}}">
                            <small class="form-text text-muted">This is the caption of the image.</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-2">
                            <label for="description" class=" form-control-label">Description</label>
                        </div>
                        <div class="col-12 col-md-10">
                            <input type="text" id="description" name="description" placeholder="Image Description" class="form-control" required value="{{isset($image) ? $image->description : ''}}">
                            <small class="form-text text-muted">The description for the image.</small>
                        </div>
                    </div>
                        
                    <div class="row form-group">
                        <div class="col col-md-2">
                            <label for="event_id" class=" form-control-label">Event</label>
                        </div>
                        <div class="col-12 col-md-10">
                            <select name="event_id" id="event_id"  class="form-control js-example-basic-single">
                                @if(isset($image))
                                    <option value="{{$image->event_id}}">{{$image->getEventPage()->title}}</option>
                                @endif
                                @foreach($events as $event)
                                    <option value="{{$event->id}}">{{$event->getPage()->title}}</option>
                                @endforeach
                            </select>
                            <small class="form-text text-muted">Select the event this image links to.</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-2">
                            <label for="image_image" class=" form-control-label">Image</label>
                        </div>
                        <div class="col-12 col-md-10">
                            @if(!isset($image))
                            <input type="file" accept="image/png, image/jpeg" id="image_url"
                                   class="form-control" name="image_image"
                                   @if(!isset($image))required @endif
                                   value="{{isset($image) ? $image->image_url  : old('image_url')}}">
                            @endif
                            @if(isset($image))
                            <img style="max-width: 100%" id="image_image"
                                 src="../{{$image->image_url}}"
                            />
                            @endif
                            <small class="form-text text-muted">{{isset($image) ? "Current Image Image. Can't change,": "Upload The image image."}}</small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2">
                            <label for="gallery" class=" form-control-label">Options</label>
                        </div>
                        <div class="col-md-5">
                            <input type="radio" name="on_gallery" value="1">Show on Gallery
                        </div>
                        <div class="col-md-5">
                            <input type="radio" name="on_gallery" value="0">Do NOT show on gallery
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
                    placeholder: 'Type the content of the image here. You can use the toolbar provided.',
                }
            );
        });
    </script>
@endsection