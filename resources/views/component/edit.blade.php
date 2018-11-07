@extends('layouts.portal_theme')
@section('title') Edit Web Information @endsection
@section('content')
    <div class="container portal-content">
        <form action="{{route('update_component', $component->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
            {{csrf_field()}}
            <div class="card edit-form">
                <div class="card-header">Editing {{$component->position}} Component ({{$component->name}})</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md"><b>Last Updated: </b>{{$component->updated_at}}</div>
                    </div>
                    <br>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="content" class=" form-control-label">Title</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="title" name="title" placeholder="Type here" class="form-control" required value="{{$component->title}}">
                            <small class="form-text text-muted">This is the {{$component->title}} on the website.</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="content" class=" form-control-label">Content</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="content" name="content" placeholder="Type here" class="form-control" required value="{{$component->content}}">
                            <small class="form-text text-muted">This is the {{$component->title}} on the website.</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="content" class=" form-control-label">Icon</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select class="js-example-basic-single" name="icon" onchange="previewIcon(this.value)">
                                <option value="{{$component->icon}}">{{$component->icon}}</option>
                                @foreach(\NNAK\Component::ICONS as $icon)
                                    <option value="{{$icon}}">{{$icon}}</option>
                                @endforeach
                            </select>
                            <small class="form-text text-muted">This is the {{$component->icon}} on the website.</small>
                            <div class="row">
                                <div class="col-md-6">
                                    Current Icon <br>
                                    <i class="fa txt-huge {{$component->icon}}" style="color: blue"></i>
                                </div>
                                <div class="col-md-6">
                                    New Icon <br>
                                    <i class="fa txt-huge" id="icon_preview" style="color: green;"></i>
                                </div>
                            </div>

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
        var preview_icon = document.getElementById("icon_preview");

        function previewIcon(name) {
            var old_classes = preview_icon.classList;
            console.log(old_classes);
            preview_icon.classList.remove(old_classes[2]);
            // // preview_icon.classList.remove('theClassThatsThereNow');
            // // preview_icon.classList.add(name);
            // preview_icon.classList.add('txt-large fa');
            preview_icon.classList.add(name);
        }
    </script>
@endsection