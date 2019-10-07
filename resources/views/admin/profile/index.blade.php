@extends('app')

@section('title')
Profile
@endsection
@section('content')
<div class="row">
    <div class="col-xl-12 pa-0">
        <div class="profile-cover-wrap overlay-wrap">
            <div class="profile-cover-img" style="background-image:url('img/bg1.jpg')"></div>
            <div class="bg-overlay bg-trans-dark-60"></div>
            <div class="container profile-cover-content py-50">
                <div class="hk-row">
                    <div class="col-lg-6">
                        <div class="media align-items-center">
                            <div class="media-img-wrap  d-flex">
                                <div class="avatar">
                                    <img src="{{asset('images/user/'.$profil->image)}}" alt="user"
                                        class="avatar-img rounded-circle">
                                </div>
                            </div>
                            <div class="media-body">
                                <div class="text-white text-capitalize display-6 mb-5 font-weight-400">{{$profil->name}}
                                </div>
                                <div class="font-14 text-white"><span class="mr-5"><span
                                            class="font-weight-500 pr-5">Role = </span><span
                                            class="mr-5">{{$role->implode('[]')}}</span></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="button-list">
                            <a href="#" class="btn btn-dark btn-wth-icon icon-wthot-bg btn-rounded"><span
                                    class="btn-text">Message</span><span class="icon-label"><i
                                        class="icon ion-md-mail"></i> </span></a>
                            <a href="#" class="btn btn-icon btn-icon-circle btn-indigo btn-icon-style-2"><span
                                    class="btn-icon-wrap"><i class="fa fa-facebook"></i></span></a>
                            <a href="#" class="btn btn-icon btn-icon-circle btn-sky btn-icon-style-2"><span
                                    class="btn-icon-wrap"><i class="fa fa-twitter"></i></span></a>
                            <a href="#" class="btn btn-icon btn-icon-circle btn-purple btn-icon-style-2"><span
                                    class="btn-icon-wrap"><i class="fa fa-instagram"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content mt-sm-25 mt-10">
            <div class="tab-pane fade show active" role="tabpanel">
                <div class="container">
                    <div class="hk-pg-header">
                        <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-toggle-right">
                                        <rect x="1" y="5" width="22" height="14" rx="7" ry="7"></rect>
                                        <circle cx="16" cy="12" r="3"></circle>
                                    </svg></span></span>Your Profile</h4>
                    </div>
                    <div class="hk-row">
                        <div class="col-lg-6 ">
                            <div class="card card-profile-feed">
                                <div class="card-header card-header-action">
                                    <h5 class="hk-sec-title">Change Password</h5>
                                </div>
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
                                <div class="alert alert-danger alert-dismissible d-none" id="message" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-sm">
                                            {!! Form::open(['action' => ['ProfilController@update', auth()->user()->id],
                                            'method' => 'POST'])
                                            !!}
                                            {{ form::hidden('_method','PUT')}}
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-5 col-form-label">Old
                                                    Password</label>
                                                <div class="col-sm-7">
                                                    <input type="password" name="old_password" class="form-control"
                                                        id="oldPassword" placeholder="Old Password">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-5 col-form-label">New
                                                    Password</label>
                                                <div class="col-sm-7">
                                                    <input type="password" name="new_password" class="form-control"
                                                        id="password" placeholder="New Password">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-5 col-form-label">Confirm
                                                    New
                                                    Password</label>
                                                <div class="col-sm-7">
                                                    <input type="password" class="form-control" name="confirm_password"
                                                        id="confirm_password" onchange="check()"
                                                        placeholder="Confirm New Password">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-0">
                                                <div class="col-sm-7 offset-sm-5">
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </div>
                                            </div>
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 ">
                            <div class="card card-profile-feed">
                                <div class="card-header card-header-action">
                                    <h5 class="hk-sec-title">Change Username</h5>
                                </div>
                                <div class="card-body ">
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
                                            {!! Form::open(['url' => route('change.name', ['name_user' =>
                                            auth()->user()->id]),'method' => 'POST']) !!}
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-5 col-form-label">New
                                                    Name</label>
                                                <div class="col-sm-7">
                                                    <input type="text" name="new_name" class="form-control"
                                                        placeholder="new name">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-0">
                                                <div class="col-sm-7 offset-sm-5">
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </div>
                                            </div>
                                            {{ form::hidden('_method','PUT')}}
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-sm">
                                            <h5 class="hk-sec-title mb-20">Change Profile Picture</h5>
                                            @if ($errors->any())
                                            <div class="alert alert-danger alert-wth-icon alert-dismissible"
                                                role="alert">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                    <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            @endif
                                            {!! Form::open(['url' => route('change.picture', ['picture_user' =>
                                            auth()->user()->id]), 'enctype' =>
                                            'multipart/form-data', 'method' => 'POST']) !!}
                                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                                <div class="form-control text-truncate" data-trigger="fileinput"><i
                                                        class="glyphicon glyphicon-file fileinput-exists"></i> <span
                                                        class="fileinput-filename"></span></div>
                                                <span class="input-group-append">
                                                    <span class=" btn btn-primary btn-file"><span
                                                            class="fileinput-new">Select file</span><span
                                                            class="fileinput-exists">Change</span>
                                                        <input type="file" name="profile_picture">
                                                    </span>
                                                    <a href="#" class="btn btn-secondary fileinput-exists"
                                                        data-dismiss="fileinput">Remove</a>
                                                </span>
                                            </div>
                                            <div class="form-group row mb-0 mt-4">
                                                <div class="col-sm-7 offset-sm-5">
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </div>
                                            </div>
                                            {{ form::hidden('_method','PUT')}}
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scriptjs')
<script>
    function check() {
    if(document.getElementById('password').value ===
    document.getElementById('confirm_password').value) {
    // document.getElementById('message').innerHTML = "match";
    } else {
    var element = document.getElementById("message");
    element.classList.remove("d-none");
    element.classList.add("show");
    document.getElementById('message').innerHTML = "new password not match";
    }
    }
</script>
@endsection