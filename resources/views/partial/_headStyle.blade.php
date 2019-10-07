<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title>@yield('title')</title>
<meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
{{-- Ini CSS dan JS SweetAlert --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<!-- select2 CSS -->
<link href="https://hencework.com/theme/vendors4/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="{{URL::asset('css/select2.min.css')}}">
<!-- Favicon -->
<link rel="shortcut icon" href="favicon.ico">
<link rel="icon" href="favicon.ico" type="image/x-icon">

<!-- vector map CSS -->
<link href="{{URL::asset('css/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" type="text/css" />

<!-- Toggles CSS -->
<link href="{{URL::asset('css/toggles.css')}}" rel="stylesheet" type="text/css">
<link href="{{URL::asset('css/toggles-light.css')}}" rel="stylesheet" type="text/css">

<!-- Toastr CSS -->
<link href="{{URL::asset('css/jquery.toast.min.css')}}" rel="stylesheet" type="text/css">

<!-- Custom CSS -->
<link href="{{ asset('css/style.css')}}" rel="stylesheet" type="text/css">


{{-- <script src="{{asset('js/jquery.js')}}"></script> --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>