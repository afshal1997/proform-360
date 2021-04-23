<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{asset(($setting->favico)? $setting->favico :'assets/admin/images/favicon.ico')}}"
          type="image/ico"/>

    <title>{{$setting->title??""}}</title>
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <link href="{{asset('assets/admin/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/sweetalert.css') }}">
    <link rel="stylesheet" href="{{ asset('css/alert.css') }}">
    @yield('page_css')
</head>
<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <!-- side navigation -->
        @include('admin.layout.side_nav')
        <!-- /side navigation -->
        <!-- top navigation -->
        @include('admin.layout.top_nav')
        <!-- /top navigation -->
        <!-- page content -->
        @yield('content')
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right">
                {{$setting->title??""}} <a href="{{url('/')}}">Developed by mnb.</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<script>
    var baseUrl = '{{ url('/') }}';
</script>
<script src="{{asset('js/custom.js')}}"></script>
<script src="{{ asset('js/sweetalert.min.js') }}"></script>
<script src="{{ asset('js/alert.js') }}"></script>
@if(session()->has('success'))
    <script type="text/javascript">js_success("{{ session('success') }}")</script>
@endif
@if(session()->has('error'))
    <script type="text/javascript">js_error("{{ session('error') }}")</script>
@endif
@yield('page_js')
</body>
</html>
