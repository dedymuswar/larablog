<!DOCTYPE html>
<!-- 
Template Name: Deepor - Responsive Bootstrap 4 Admin Dashboard Template
Author: Hencework

License: You must have a valid license purchased only from templatemonster to legally use the template for your project.
-->
<html lang="en">


<!-- Mirrored from hencework.com/theme/deepor/dashboard1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 Sep 2019 11:52:03 GMT -->

<head>
    @include('partial._headStyle')
    @yield('stylesheets')
</head>

<body>
    <!-- HK Wrapper -->
    <div class="hk-wrapper hk-vertical-nav">

        <!-- Top Navbar -->
        @include('partial._topNavbar')
        <!-- /Top Navbar -->

        <!-- Vertical Nav -->
        @include('partial._verNavbar')
        <!-- /Vertical Nav -->

        <!-- Setting Panel -->

        <!-- /Setting Panel -->

        <!-- Main Content -->
        <div class="hk-pg-wrapper">
            <!-- Container -->
            <div class="container-fluid">
                @yield('content')
                @include('sweet::alert')
            </div>
            <!-- /Container -->

            <!-- Footer -->
            @include('partial._footer')
            <!-- /Footer -->
        </div>
        <!-- /Main Content -->

    </div>
    <!-- /HK Wrapper -->

    @include('partial._footScript')
    @yield('scriptjs')
</body>
<!-- Mirrored from hencework.com/theme/deepor/dashboard1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 Sep 2019 11:54:57 GMT -->

</html>