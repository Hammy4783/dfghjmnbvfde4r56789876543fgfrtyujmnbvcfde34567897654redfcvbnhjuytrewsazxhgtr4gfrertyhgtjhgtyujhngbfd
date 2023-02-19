<!doctype html>
<html>
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <title>@yield('page_title')</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('layouts.head')
    @yield('page_styles')
</head>
<body>
    <!-- BEGIN: Content-->
        @yield('content')
    <!-- END: Content-->
    {{-- @include('layouts.footer') --}}
    @include('layouts.scripts')
    @include('admin.include.sweetalert')
    @yield('page_scripts')
</body>
</html>
