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
                                     Open Hours: Mon-Fri 09:00-18:00
                                    <a href="{{ $setting->facebook }}">
                                        <i class="fa fa-facebook ml-2 mr-2"></i>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <i class="fa fa-linkedin mr-2"></i>
                                    </a>
                                    <a href="javascript:void(0)">
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
                        <li class="nav-item"><a href="{{ route('feature') }}"
                                class="nav-link">FEATURES</a></li>
                        <li class="nav-item"><a href="{{ route('pricing') }}"
                                class="nav-link">PRICING </a></li>
                        <li class="nav-item"><a href="{{ route('contact') }}"
                                class="nav-link">CONTANT US</a></li>
                    </ul>

                </div>
                <ul class="float-right menu-right m-auto">
                    <li>
                        <a href="javascript:void(0)"><i class="fa fa-user  mr-lg-3 mr-sm-0 mt-sm-5 mt-lg-0"></i>Customer
                            Login</a>
                    </li>
                    <li>
                        <i class="fa fa-search ml-3 mr-3 text-dark mt-sm-5 mt-lg-0"></i>
                    </li>
                    <li>
                        <i class="fa fa-shopping-cart mr-3 text-dark mt-sm-5 mt-lg-0"></i>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- END nav -->
    </header>
