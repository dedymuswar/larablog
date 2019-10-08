<!DOCTYPE html>

<html lang="en">

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

</html>