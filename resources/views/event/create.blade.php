@extends('layouts.portal_theme')
@section('title') New Event @endsection
@section('content')
    <div class="container">
        <form action="{{ isset($event) ? route('update_event', $event->id) : route('store_event')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
            {{csrf_field()}}
            <div class="card edit-form">
                <div class="card-header">@if(isset($event)) Editing Event: ({{$event->getPage()->title}}) @else New Event @endif</div>
                <div class="card-body">
                    @if(isset($event))
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md"><b>Created on: </b>{{\Carbon\Carbon::parse($event->created_at)->format('d M, Y H:i')}}</div>
                        <div class="col-md"><b>Last Updated: </b>{{\Carbon\Carbon::parse($event->updated_at)->format('d M, Y H:i')}}</div>
                    </div>
                    @endif
                    <br>
                    <div class="row form-group">
                        <div class="col col-md-2">
                            <label for="date" class=" form-control-label">Date</label>
                        </div>
                        <div class="col-12 col-md-3">
                            <input type="date" id="date" name="date" placeholder="date" class="form-control" required value="{{isset($event) ? $event->date : ''}}">
                            <small class="form-text text-muted">When?</small>
                        </div>
                        <div class="col col-md-2">
                            <label for="title" class=" form-control-label">Title</label>
                        </div>
                        <div class="col-12 col-md-5">
                            <input type="text" id="title" name="title" placeholder="Event Title" class="form-control" required value="{{isset($event) ? $page->title : ''}}">
                            <small class="form-text text-muted">This is the title of the event.</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-2">
                            <label for="content" class=" form-control-label">Intro</label>
                        </div>
                        <div class="col-12 col-md-10">
                            <textarea id="intro"  class="form-control"  name="intro" rows="3" required>{{isset($event) ? $event->intro : 'Briefly introduce the event'}}</textarea>
                            <small class="form-text text-muted">Give a brief introduction on the event.</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-2">
                            <label for="content" class=" form-control-label">Content</label>
                        </div>
                        <div class="col-12 col-md-10">
                            <textarea id="content"  class="form-control"  name="content" rows="10" required>{{isset($event) ? $page->content : 'Tell more about the event.'}}</textarea>
                            <small class="form-text text-muted">This is the content of the event.</small>
                        </div>
                    </div>

                        <div class="row form-group">
                            <div class="col col-md-2">
                                <label for="slide_image" class=" form-control-label">Uploads</label>
                            </div>
                            <div class="col-12 col-md-10">
                                <small class="form-text text-muted">{{isset($event) ? "Current Event Images. You may add,": "Upload The event images."}}</small>
                                @if(isset($event))
                                    <div class="row">
                                        @foreach($event->getImages() as $image)
                                            <div class="col-md-4 col-lg-3 col-sm-6">
                                                <img style="max-width: 100%" id=""
                                                     src="../{{$image->image_url}}"
                                                />
                                            </div>
                                        @endforeach
                                    </div>

                                @endif
                                <input type="file" accept="image/png, image/jpeg" id="image_url"
                                       class="form-control" name="event_images[]" multiple />
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
                    placeholder: 'Type the content of the event here. You can use the toolbar provided.',
                }
            );
        });
    </script>
@endsection