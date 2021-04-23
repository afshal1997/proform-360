<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{asset(($setting->favico ?? 'assets/admin/images/favicon.ico'))}}"
          type="image/ico"/>

    <title>{{$setting->title??""}} | @yield('title','')</title>
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <!-- Font Awesome -->
    <link href="{{asset('assets/admin/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('assets/admin/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{asset('assets/admin/vendors/animate.css/animate.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/sweetalert.css') }}">
    <link rel="stylesheet" href="{{ asset('css/alert.css') }}">
</head>

<body class="login">
<div>
    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                @yield('content')
                <div class="clearfix"></div>
                <div class="separator">
                    <div class="clearfix"></div>
                    <div>
                        <p>Copyright © {{ date('Y') }} <a href="{{ url('/') }}" class="logo-wrap"><img width="150" src="{{ asset($setting->logo ?? '') }}" alt="logo"></a></p>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
</body>
</html>
