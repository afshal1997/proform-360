<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Proform-360 | @yield('title','Home')</title>
    @include('front.layout.css')
    @yield('pageCss')
</head>

<body>
    @include('front.layout.header')
    @yield('content')
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3 mb-4 mb-md-0 text-center-sm">
                    <div class="footer-logo">
                        <a href="{{ route('home') }}"><img
                                src="{{ asset('assets/front/images/logo/footer-logo.png') }}"></a>
                    </div>
                </div>
                <div class="col-0 col-md-0 col-lg-0 mb-4">

                </div>
                <div class="col-0 col-md-4 col-lg-2 mb-4">

                </div>
                <div class="col-12 col-md-4 col-lg-4 mb-4">
                    <h3 class="text-white">
                        Contact
                    </h3>
                    <div class="block-23 mb-3">
                        <ul>
                            <li>
                                <span class="text">
                                    Mon-Fri 08:00am - 6:00pm<br>
                                    112W 34th St,
                                </span>
                            </li>
                            <li>
                                <a href="tel:503-746-3142">
                                    <span class="icon fa fa-phone"></span>
                                    <span class="text">503-746-3142</span>
                                </a>
                            </li>
                            <li>
                                <a href="mailto:info@proform360.com">
                                    <span class="icon fa fa-paper-plane"></span>
                                    <span class="text">info@proform360.com</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4 mb-md-0 pl-2">
                    <h3 class="text-white">
                        Subcribe To NewsLetter
                    </h3>
                    <div class="block-23 mb-3">
                        <p class="text-white"> Get the latest business resources on the market delivered to your inbox.
                        </p>
                        <form>


                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Your Email">
                                <div class="input-group-append">
                                    <span class="input-group-text" style="padding:10px;"><a href=""><i
                                                class="fa fa-paper-plane"></i></a></span>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="float-right text-white list-style" style="position:absolute;bottom:0">
                        <ul>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="fa fa-facebook mr-4 text-white"></i>
                                </a>
                                <a href="javascript:void(0)">
                                    <i class="fa fa-linkedin mr-4 text-white"></i>
                                </a>
                                <a href="javascript:void(0)">
                                    <i class="fa fa-pinterest-p mr-4 text-white"></i>
                                </a>
                                <a href="javascript:void(0)">
                                    <i class="fa fa-twitter mr-4 text-white"></i>
                                </a>
                                <a href="javascript:void(0)">
                                    <i class="fa fa-instagram mr-4 text-white"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        var baseUrl = '{{ url('/') }}';

    </script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/sweetalert.min.js') }}"></script>
    <script src="{{ asset('js/alert.js') }}"></script>

    @if (session()->has('success'))
        <script type="text/javascript">
            js_success("{{ session('success') }}")

        </script>
    @endif
    @if (session()->has('error'))
        <script type="text/javascript">
            js_error("{{ session('error') }}")

        </script>

    @endif
    @include('front.layout.js')
    
    @yield('pageJs')
</body>

</html>
