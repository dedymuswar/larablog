@extends('app')
@section('stylesheets')
<style>
    .mce-notification {
        display: none !important;
    }
</style>
@endsection
@section('title')
Edit User
@endsection
@section('content')
<!-- Breadcrumb -->
<nav class="hk-breadcrumb" aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-light bg-transparent">
        <li class="breadcrumb-item"><a href="#">Pages</a></li>
        <li class="breadcrumb-item active" aria-current="page">Post</li>
    </ol>
</nav>
<!-- /Breadcrumb -->

<!-- Container -->
<div class="container">
    <!-- Title -->
    <div class="hk-pg-header mb-10">
        <div>
            <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i
                            data-feather="book"></i></span></span>Edit User</h4>
        </div>
    </div>
    <!-- /Title -->

    <!-- Row -->
    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                @if ($errors->any())
                <div class="alert alert-danger alert-wth-icon alert-dismissible" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="row">
                    <div class="col-sm">
                        {!! Form::open(['action' => ['UserController@update',$user->id], 'method' =>'POST','enctype' =>
                        'multipart/form-data']) !!}
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="{{$user->name}}" name="nama"
                                            id="nama" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" value="{{$user->email}}" name="email"
                                            id="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="slug" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" name="password" id="password"
                                            placeholder="Password">
                                    </div>
                                </div>
                                <fieldset class="form-group mb-15">
                                    <div class="row">
                                        <label class="col-form-label col-sm-2 pt-0">Role</label>
                                        <div class="col-sm-10">
                                            <div class="custom-control custom-radio mb-5">
                                                <input id="option_1" value="admin" name="role"
                                                    class="custom-control-input" type="radio"
                                                    {{ ($user->roles->pluck('name')->implode('[]')=="admin")? "checked" : "" }}>
                                                <label class="custom-control-label" for="option_1">Admin</label>
                                            </div>
                                            <div class="custom-control custom-radio mb-5">
                                                <input id="option_2" value="user" name="role"
                                                    class="custom-control-input" type="radio"
                                                    {{ ($user->roles->pluck('name')->implode('[]')=="user")? "checked" : "" }}>
                                                <label class="custom-control-label" for="option_2">User</label>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="form-group row">
                                    <div class="col-sm-10 offset-sm-2">
                                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                            <div class="form-control text-truncate" data-trigger="fileinput"><i
                                                    class="glyphicon glyphicon-file fileinput-exists"></i> <span
                                                    class="fileinput-filename"></span></div>
                                            <span class="input-group-append">
                                                <span class=" btn btn-primary btn-file"><span
                                                        class="fileinput-new">Select Image</span><span
                                                        class="fileinput-exists">Change</span>
                                                    <input type="file" name="cover_image">
                                                </span>
                                                <a href="#" class="btn btn-secondary fileinput-exists"
                                                    data-dismiss="fileinput">Remove</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <img src="{{ asset('images/user/' . $user->image) }}" class="img-fluid img-thumbnail"
                                    alt="">
                            </div>
                            <div class="form-group mb-0 col-sm-8">
                                <div class="col-sm-10 offset-sm-2">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </div>
                        {{ form::hidden('_method','PUT')}}
                        {!! Form::close() !!}
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- /Row -->
</div>
<!-- /Container -->
@endsection
@section('scriptjs')

<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>
    tinymce.init({
        selector:'textarea.description',
        width: 700,
        height: 300
    });
</script>
@endsection