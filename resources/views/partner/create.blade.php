@extends('layouts.portal_theme')
@section('title') New Partner @endsection
@section('content')
    <div class="container">
        <form action="{{ isset($partner) ? route('update_partner', $partner->id) : route('store_partner')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
            {{csrf_field()}}
            <div class="card edit-form">
                <div class="card-header">@if(isset($partner)) Editing Partner: ({{$partner->name}}) @else New Partner @endif</div>
                <div class="card-body">
                    @if(isset($partner))
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md"><b>Created on: </b>{{\Carbon\Carbon::parse($partner->created_at)->format('d M, Y H:i')}}</div>
                        <div class="col-md"><b>Last Updated: </b>{{\Carbon\Carbon::parse($partner->updated_at)->format('d M, Y H:i')}}</div>
                    </div>
                    @endif
                    <br>
                    <div class="row form-group">
                        <div class="col col-md-2">
                            <label for="name" class=" form-control-label">Name</label>
                        </div>
                        <div class="col-12 col-md-10">
                            <input type="text" id="name" name="name" placeholder="Partner Name" class="form-control" required value="{{isset($partner) ? $partner->name : ''}}">
                            <small class="form-text text-muted">This is the name of the partner.</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-2">
                            <label for="url" class=" form-control-label">Link</label>
                        </div>
                        <div class="col-12 col-md-10">
                            <input type="url" id="url" name="url" placeholder="Partner Website address" class="form-control" value="{{isset($partner) ? $partner->url : ''}}">
                            <small class="form-text text-muted">The web link for the partner.</small>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-2">
                            <label for="icon_url" class=" form-control-label">Image</label>
                        </div>
                        <div class="col-12 col-md-10">
                            <input type="file" accept="image/png, image/jpeg" id="icon_url"
                                   class="form-control" name="partner_image"
                                   @if(!isset($partner))required @endif
                                   value="{{isset($partner) ? $partner->image_url  : old('partner_image')}}">
                            @if(isset($partner))
                            <img style="max-width: 50%" id="icon_url"
                                 src="../{{$partner->icon_url}}"
                            />
                            @endif
                            <small class="form-text text-muted">{{isset($partner) ? "Current Partner Image. You may change,": "Upload The partner image."}}</small>
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
                    placeholder: 'Type the content of the partner here. You can use the toolbar provided.',
                }
            );
        });
    </script>
@endsection