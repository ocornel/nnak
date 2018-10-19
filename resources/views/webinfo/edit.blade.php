@extends('layouts.portal_theme')
@section('title') Edit Web Information @endsection
@section('content')
    <div class="container portal-content">
        <form action="{{route('update_webinfo', $webinfo->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
            {{csrf_field()}}
            <div class="card edit-form">
                <div class="card-header">Editing Website Info ({{$webinfo->name}})</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md"><b>Info Created on: </b>{{$webinfo->created_at}}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md"><b>Info Last Updated: </b>{{$webinfo->updated_at}}</div>
                    </div>
                    <br>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="content" class=" form-control-label">Content</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="content" name="content" placeholder="Type here" class="form-control" required value="{{$webinfo->content}}">
                                <small class="form-text text-muted">This is the {{$webinfo->name}} on the website.</small>
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