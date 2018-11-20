@extends('layouts.portal_theme')
@section('title') New Document @endsection
@section('content')
    <div class="container">
        <form action="{{ isset($document) ? route('update_document', $document->id) : route('store_document')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
            {{csrf_field()}}
            <div class="card edit-form">
                <div class="card-header">@if(isset($document)) Editing Document: ({{$document->label}}) @else New Document @endif</div>
                <div class="card-body">
                    @if(isset($document))
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md"><b>Created on: </b>{{\Carbon\Carbon::parse($document->created_at)->format('d M, Y H:i')}}</div>
                            <div class="col-md"><b>Last Updated: </b>{{\Carbon\Carbon::parse($document->updated_at)->format('d M, Y H:i')}}</div>
                        </div>
                    @endif
                    <br>
                    <div class="row form-group">
                        <div class="col col-md-2">
                            <label for="label" class=" form-control-label">Label</label>
                        </div>
                        <div class="col-12 col-md-10">
                            <input type="text" id="label" name="label" placeholder="Document Label" class="form-control" required value="{{isset($document) ? $document->label : ''}}">
                            <small class="form-text text-muted">This is the label on the form's download button.</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-2">
                            <label for="tooltip" class=" form-control-label">Description</label>
                        </div>
                        <div class="col-12 col-md-10">
                            <input type="text" id="tooltip" name="tooltip" placeholder="Document tooltip" class="form-control" required value="{{isset($document) ? $document->tooltip : ''}}">
                            <small class="form-text text-muted">Help the user know what they are downloading..</small>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-2">
                            <label for="document_document" class=" form-control-label">Document</label>
                        </div>
                        <div class="col-12 col-md-10">
                            @if(!isset($document))

                            @endif
                            @if(isset($document))
                                <input type="file" accept="document/pdf, document/doc, document/docx, document/odt" id="document_url"
                                                    class="form-control" name="document"
                                                    @if(!isset($document))required @endif
                                                    value="{{isset($document) ? $document->document_url  : old('document_url')}}">
                                // todo figure out how to have pdf preview
                                {{--<img style="max-width: 100%" id="document_document"--}}
                                     {{--src="../{{$document->document_url}}"--}}
                                {{--/>--}}
                            @endif
                            <small class="form-text text-muted">{{isset($document) ? "Current Document attachment. Can't change,": "Upload The document."}}</small>
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
