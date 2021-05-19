    <header>
        <div class="wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="float-left text-white list-style">
                            <ul>
                                <li>
                                    <a href="mailto:{{ $setting->email }}">
                                        <i class="fa fa-envelope mr-2"></i>
                                        {{ $setting->email }}
                                    </a>
                                </li>
                                <li>
                                    <a href="tel:{{ $setting->phone }}">
                                        <i class="fa fa-phone mr-2"></i>
                                        {{ $setting->phone }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="float-right text-white list-style">
                            <ul>
                                <li>
                                    {!! $setting->headline ?? '' !!}
                                    <a href="{{ $setting->facebook }}">
                                        <i class="fa fa-facebook ml-2 mr-2"></i>
                                    </a>
                                    <a href="{{ $setting->linkedin }}">
                                        <i class="fa fa-linkedin mr-2"></i>
                                    </a>
                                    <a href="{{ $setting->pinterest }}">
                                        <i class="fa fa-pinterest-p mr-2"></i>
                                    </a>
                                    <a href="{{ $setting->twitter }}">
                                        <i class="fa fa-twitter mr-2"></i>
                                    </a>
                                    <a href="{{ $setting->instagram }}">
                                        <i class="fa fa-instagram mr-2"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
            <div class="container">
                <a class="navbar-brand logo" href="{{ route('home') }}"><img
                        src="{{ asset($setting->logo) }}"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                    aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="oi oi-menu"></span> Menu
                </button>
                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="nav navbar-nav ml-0 mr-0 m-auto">
                        <li class="nav-item active"><a href="{{ route('home') }}" class="nav-link">HOME</a></li>
                        <li class="nav-item"><a href="{{ (url('/') == url()->current())? '#feature' : url('/').'#feature' }}"
                                class="nav-link" id="featuretoggle">FEATURES</a></li>
                        <li class="nav-item"><a href="{{ route('pricing') }}"
                                class="nav-link">PRICING </a></li>
                        <li class="nav-item"><a href="{{ route('contact') }}"
                                class="nav-link">CONTANT US</a></li>
                    </ul>
                    <ul class="menu-right m-auto">
                        <li>
                            <a href="javascript:void(0)"><i class="fa fa-user mr-3"></i>Customer
                                Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END nav -->
    </header>
