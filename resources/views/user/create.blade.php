@extends('layouts.portal_theme')
@section('title') {{isset($user) ? "Edit User": "New User"}} @endsection
@section('content')
    @if(Auth::user()->is_admin == true)
        <div class="container">
        <form action="{{ isset($user) ? route('update_user', $user->id) : route('store_user')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
            {{csrf_field()}}
            <div class="card edit-form">
                <div class="card-header">@if(isset($user)) Editing User: ({{$user->name}}) @else New User @endif</div>
                <div class="card-body">
                    @if(isset($user))
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md"><b>Created on: </b>{{\Carbon\Carbon::parse($user->created_at)->format('d M, Y H:i')}}</div>
                            <div class="col-md"><b>Last Updated: </b>{{\Carbon\Carbon::parse($user->updated_at)->format('d M, Y H:i')}}</div>
                        </div>
                    @endif
                    <br>
                    <div class="row form-group">
                        <div class="col col-md-2">
                            <label for="name" class=" form-control-label">Name</label>
                        </div>
                        <div class="col-12 col-md-10">
                            <input type="text" id="name" name="name" placeholder="User Name" class="form-control" required value="{{isset($user) ? $user->name : ''}}">
                            <small class="form-text text-muted">This is the name of the user.</small>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-2">
                            <label for="profession" class=" form-control-label">Email Address</label>
                        </div>
                        <div class="col-12 col-md-10">
                            <input type="email" id="email" name="email" placeholder="User's Email address" class="form-control" required value="{{isset($user) ? $user->email : ''}}">
                            <small class="form-text text-muted">This is the email address for login.</small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-2">
                            <label for="gallery" class=" form-control-label">Options</label>
                        </div>
                        <div class="col-md-5">
                            <input type="radio" name="is_admin" value="1" id="set_true">Can Manage Other users
                        </div>
                        <div class="col-md-5">
                            <input type="radio" name="is_admin" value="0" id="set_false">Can Not manager others
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
    @else
        <div class="container" align="center">
            <div class="lost not-here">
                <h3 style="color: white; padding-top: 50px">You are not supposed to be here.</h3>
            </div>
        </div>
    @endif
@endsection


@section('scripts')
    <script>
        $(document).ready(function() {
            $('#profile').summernote({
                    placeholder: 'Tell a bit about the user. A summary profile. You can use the toolbar provided.',
                }
            );
        });
    </script>
@endsection
@if(isset($user))
    @section('added_scripts')
    <script>
        if (parseInt('{{$user->is_admin}}') === 1) {
            $('#set_true').click();
        } else $('#set_false').click();

        console.log('{{$user->name}}');
    </script>
    @endsection
@endif
