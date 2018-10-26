@extends('layouts.portal_theme')
@section('title') {{isset($member) ? "Edit Member": "New Member"}} @endsection
@section('content')
    <div class="container">
        <form action="{{ isset($member) ? route('update_member', $member->id) : route('store_member')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
            {{csrf_field()}}
            <div class="card edit-form">
                <div class="card-header">@if(isset($member)) Editing Member: ({{$member->name}}) @else New Member @endif</div>
                <div class="card-body">
                    @if(isset($member))
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md"><b>Created on: </b>{{\Carbon\Carbon::parse($member->created_at)->format('d M, Y H:i')}}</div>
                        <div class="col-md"><b>Last Updated: </b>{{\Carbon\Carbon::parse($member->updated_at)->format('d M, Y H:i')}}</div>
                    </div>
                    @endif
                    <br>
                    <div class="row form-group">
                        <div class="col col-md-2">
                            <label for="name" class=" form-control-label">Name</label>
                        </div>
                        <div class="col-12 col-md-10">
                            <input type="text" id="name" name="name" placeholder="Member Name" class="form-control" required value="{{isset($member) ? $member->name : ''}}">
                            <small class="form-text text-muted">This is the name of the member.</small>
                        </div>
                    </div>
                        
                    <div class="row form-group">
                        <div class="col col-md-2">
                            <label for="profession" class=" form-control-label">Profession</label>
                        </div>
                        <div class="col-12 col-md-10">
                            <input type="text" id="profession" name="profession" placeholder="Member Profession" class="form-control" required value="{{isset($member) ? $member->profession : ''}}">
                            <small class="form-text text-muted">This is the profession of the member.</small>
                        </div>
                    </div>
                        
                    <div class="row form-group">
                        <div class="col col-md-2">
                            <label for="role" class=" form-control-label">Role</label>
                        </div>
                        <div class="col-12 col-md-10">
                            <input type="text" id="role" name="role" placeholder="Member Role" class="form-control" required value="{{isset($member) ? $member->role : ''}}">
                            <small class="form-text text-muted">This is the role of the member.</small>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-2">
                            <label for="profile" class=" form-control-label">Profile</label>
                        </div>
                        <div class="col-12 col-md-10">
                            <textarea id="profile"  class="form-control"  name="profile" rows="10" required>{{isset($member) ? $member->profile : ''}}</textarea>
                            <small class="form-text text-muted">This is the profile of the member.</small>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-2">
                            <label for="icon_url" class=" form-control-label">Picture</label>
                        </div>
                        <div class="col-12 col-md-10">
                            <input type="file" accept="image/png, image/jpeg" id="icon_url"
                                   class="form-control" name="member_image"
                                   @if(!isset($member)) @endif
                                   value="{{isset($member) ? $member->image_url  : old('member_image')}}">
                            @if(isset($member))
                            <img style="max-width: 50%" id="image_url"
                                 src="../{{$member->image_url}}"
                            />
                            @endif
                            <small class="form-text text-muted">{{isset($member) ? "Current Member Image. You may change,": "Upload The member image."}}</small>
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
            $('#profile').summernote({
                    placeholder: 'Tell a bit about the member. A summary profile. You can use the toolbar provided.',
                }
            );
        });
    </script>
@endsection