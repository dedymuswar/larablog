@extends('app-panel')

@section('title')
Login
@endsection
@section('content')
<!-- Main Content -->
<div class="hk-pg-wrapper hk-auth-wrapper">
    <header class="d-flex justify-content-between align-items-center">
        <a class="d-flex auth-brand align-items-center" href="#">
            <img class="brand-img d-inline-block mr-5" src="{{asset('img/logo.png')}}" alt="brand" /><span
                class="text-white font-23">Deepor</span>
        </a>
    </header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-5 pa-0">
                <div id="owl_demo_1" class="owl-carousel dots-on-item owl-theme">
                    <div class="fadeOut item auth-cover-img overlay-wrap" style="background-image:url(img/bg2.jpg);">
                        <div class="auth-cover-info py-xl-0 pt-100 pb-50">
                            <div class="auth-cover-content text-center w-xxl-75 w-sm-90 w-xs-100">
                                <h1 class="display-3 text-white mb-20">Understand and look deep into nature.
                                </h1>
                                <p class="text-white">The purpose of lorem ipsum is to create a natural looking
                                    block of text (sentence, paragraph, page, etc.) that doesn't distract from
                                    the layout. Again during the 90s as desktop publishers bundled the text with
                                    their software.</p>
                            </div>
                        </div>
                        <div class="bg-overlay bg-trans-dark-50"></div>
                    </div>
                    <div class="fadeOut item auth-cover-img overlay-wrap" style="background-image:url(img/bg1.jpg);">
                        <div class="auth-cover-info py-xl-0 pt-100 pb-50">
                            <div class="auth-cover-content text-center w-xxl-75 w-sm-90 w-xs-100">
                                <h1 class="display-3 text-white mb-20">Experience matters for good applications.
                                </h1>
                                <p class="text-white">The passage experienced a surge in popularity during the
                                    1960s when Letraset used it on their dry-transfer sheets, and again during
                                    the 90s as desktop publishers bundled the text with their software.</p>
                            </div>
                        </div>
                        <div class="bg-overlay bg-trans-dark-50"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 pa-0">
                <div class="auth-form-wrap py-xl-0 py-50">
                    <div class="auth-form w-xxl-55 w-xl-75 w-sm-90 w-xs-100">
                        <form method="POST" action="{{ route('login')}}">
                            @csrf
                            <h1 class="display-4 mb-10">Welcome Back :)</h1>
                            <p class="mb-30">Silahkan login untuk dapat mengakses halaman admin panel.</p>

                            @error('email')
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{$message}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            @enderror
                            <div class="form-group">
                                <input id="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus
                                    placeholder="Email" type="email">

                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control @error('password')
                                is-invalid @enderror" placeholder="Password" type="password" id="password"
                                        name="password" required autocomplete="current-password">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><span class="feather-icon"><i
                                                    data-feather="eye-off"></i></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-control custom-checkbox mb-25">
                                <input class="custom-control-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>
                                <label class="custom-control-label font-14" for="same-address">Keep me logged
                                    in</label>
                            </div>
                            <button class="btn btn-warning btn-block" type="submit">Login</button>
                            <p class="font-14 text-center mt-15">Memiliki masalah saat login?</p>
                            <div class="option-sep">atau</div>
                            <p class="text-center">Belum memiliki akun? <a href="#">Sign Up</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Main Content -->
@endsection