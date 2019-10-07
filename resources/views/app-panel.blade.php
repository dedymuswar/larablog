<!DOCTYPE html>
<!-- 
Template Name: Deepor - Responsive Bootstrap 4 Admin Dashboard Template
Author: Hencework

License: You must have a valid license purchased only from templatemonster to legally use the template for your project.
-->
<html lang="en">


<!-- Mirrored from hencework.com/theme/deepor/dashboard1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 Sep 2019 11:52:03 GMT -->

<head>
    @include('panel._header')
    @yield('stylesheets')
</head>

<body>
    <!-- HK Wrapper -->
    <div class="hk-wrapper">

        @yield('content')
        @include('sweet::alert')

    </div>
    <!-- /HK Wrapper -->

    @include('panel._footer')
    @yield('scriptjs')
</body>
<!-- Mirrored from hencework.com/theme/deepor/dashboard1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 Sep 2019 11:54:57 GMT -->

</html>