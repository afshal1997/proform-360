@extends('front.layout.front')
@section('title', 'Home')
@section('content')
<style>
@media only screen and (max-width: 1024px){
    .main-header-video iframe{
        width:100% !important;
    }
}
</style>
    <section>
        <div class="slider-row">
            <div class="slider" style="background-image: url('{{$home->banner}}')">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 mt-5 pt-5" data-aos="zoom-in-up" data-aos-easing="ease-in-sine" data-aos-duration="600">
                            <div class="main-header-heading">
                                {!! $home->banner_text ?? '' !!}
                            </div>
                        </div>
                        <div class="col-lg-6 m-auto" data-aos="zoom-in-up" data-aos-easing="ease-in-sine" data-aos-duration="600">
                            <div class="main-header-video">
                               <iframe src="https://player.vimeo.com/video/301696749" width="640" height="360" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5 mb-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="btn-btns">
                        <a href="{{ route('free-trial') }}" class="shadow-lg free-trial"> Free Trial
                            (30 Days) </a>
                        <a href="javascript:void(0)" class="feature shadow-lg"> FEATURED PACKAGES </a>
                    </div>
                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-02">
                        <h2>{!! $home->section_heading1 ?? '' !!}</h2>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
 
            
                @for($i = 0; $i<=3; $i++)
                <div class="col-lg-3" data-aos="fade-up" data-aos-duration="300">
                    <div class="card platform">
                        <div class="card-body">
                            <img class="w-100" src="{{ $homecards[$i]->icon }}" alt="">
                            <h2>{{ $homecards[$i]->heading ?? '' }}</h2>
                            {!! $homecards[$i]->text ?? '' !!}
                            <hr class="w-50 bg-light">
                        </div>
                    </div>
                </div>
                @endfor
            </div>
            <div class="row">
                <div class="col-lg-1 m-auto"></div>
                @for($i = 4; $i<=6; $i++)
                <div class="col-lg-3" data-aos="fade-up" data-aos-duration="300">
                    <div class="card platform">
                        <div class="card-body">
                            <img class="w-100" src="{{ $homecards[$i]->icon }}" alt="">
                            <h2>{{ $homecards[$i]->heading ?? '' }}</h2>
                            {!! $homecards[$i]->text ?? '' !!}
                            <hr class="w-50 bg-light">
                        </div>
                    </div>
                </div>
                @endfor
                <div class="col-lg-1 m-auto"></div>
            </div>
        </div>
    </section>

    <section class="mt-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" data-aos="zoom-in" data-aos-duration="400">
                    <div class="people">
                        <h1>
                            <b>{{ $home->section_heading1 }}</b>
                        </h1>
                        <h5>
                            <b>{{ $home->section_sub_heading1 }}</b>
                        </h5>
                        <p class="text-muted">
                            Schedule activities based on your sales scripts: calls, meetings, mailing,
                            and quotations. Get all the information you need, directly on the opportunity:
                            website pages viewed, mail received, etc.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="zoom-in" data-aos-duration="400">
                    <div class="people">
                        <h1>
                            <b>{{ $home->section_heading2 }}</b>
                        </h1>
                        <h5>
                            <b>{{ $home->section_sub_heading2 }}</b>
                        </h5>
                        {!! $home->section_paragraph2 ?? '' !!}
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-6" data-aos="zoom-in" data-aos-duration="400">
                    <div class="packages-and-pricing">
                        <div class="row">
                            <div class="col-lg-6">
                                <img class="w-100" src="{{ asset('assets/front/images/proform/icons/prroform-icons-01.png') }}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="w-100" src="{{ asset('assets/front/images/proform/icons/prroform-icons-02.png') }}" alt="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <img class="w-100" src="{{ asset('assets/front/images/proform/icons/prroform-icons-03.png') }}"  alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="w-100" src="{{ asset('assets/front/images/proform/icons/prroform-icons-04.png') }}"  alt="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 m-auto">
                                <img class="w-100" src="{{ asset('assets/front/images/proform/icons/prroform-icons-05.png') }}"  alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 knowledge" data-aos="zoom-in" data-aos-duration="400">
                    <h2>{{ $home->section_heading3 }}</h2>
                    {!! $home->section_paragraph3 ?? '' !!}
                    <h1>
                        {{ $home->section_heading4 }}
                    </h1>
                    {!! $home->section_paragraph4 ?? '' !!}
                    <ul>
                        <li>
                            <i class="fa fa-check-circle"></i> Knowledge base
                        </li>
                        <li>
                            <i class="fa fa-check-circle"></i> Community
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    <section class="feature-section mb-5">
        <div class="col-lg-12">
                    <div class="features-div mb-5"  id="feature">
                        <h1>Features</h1>
                         <p>Social media tools that will grow your business</p>
                    </div>
                </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3" data-aos="zoom-in" data-aos-duration="200">
                    <div class="feature-table">
                        <div class="card feature-card">
                            <img src="{{ asset('assets/front/images/features/shfeatures_social-design.png') }}" class="w-50" />
                            <h3>Social Assessment</h3>
                            <p>We do a complete audit of your business's social media strategy.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" data-aos="zoom-in" data-aos-duration="300">
                    <div class="feature-table">
                        <div class="card feature-card">
                            <img src="{{ asset('assets/front/images/features/shfeatures_engaging-content.png') }}" class="w-50" />
                            <h3>Engaging Content</h3>
                            <p>You will get rich and engaging content for your social media pages.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" data-aos="zoom-in" data-aos-duration="400">
                    <div class="feature-table">
                        <div class="card feature-card">
                            <img src="{{ asset('assets/front/images/features/shfeatures_Advanced_Scheduling.png') }}" class="w-50" />
                            <h3>Advanced Scheduling</h3>
                            <p>Save time by scheduling posts in advance with an easy-to-use calendar.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" data-aos="zoom-in" data-aos-duration="500">
                    <div class="feature-table">
                        <div class="card feature-card">
                            <img src="{{ asset('assets/front/images/features/shfeatures_tailored-strategy.png') }}" class="w-50" />
                            <h3>Tailored Strategy</h3>
                            <p>Your social media strategy will be tailored to your business.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3" data-aos="zoom-in" data-aos-duration="200">
                    <div class="feature-table">
                        <div class="card feature-card">
                            <img src="{{ asset('assets/front/images/features/shfeatures_reputation-monitoring.png') }}" class="w-50" />
                            <h3>Reputation Monitoring</h3>
                            <p>We monitor your business's online reputation on review sites like yelp.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" data-aos="zoom-in" data-aos-duration="300">
                    <div class="feature-table">
                        <div class="card feature-card">
                            <img src="{{ asset('assets/front/images/features/shfeatures_review-alerts.png') }}" class="w-50" />
                            <h3>Review Alerts</h3>
                            <p>You will get alerts when someone comments or reviews your business online.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" data-aos="zoom-in" data-aos-duration="400">
                    <div class="feature-table">
                        <div class="card feature-card">
                            <img src="{{ asset('assets/front/images/features/shfeatures_social-design.png') }}" class="w-50" />
                            <h3>Social Optimization</h3>
                            <p>We design and optimize your social media profiles to keep them fresh.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" data-aos="zoom-in" data-aos-duration="500">
                    <div class="feature-table">
                        <div class="card feature-card">
                            <img src="{{ asset('assets/front/images/features/shfeatures_sweepstakes.png') }}" class="w-50" />
                            <h3>Sweepstakes</h3>
                            <p>Engage customers with social sweepstakes and giveaways.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4" data-aos="zoom-in" data-aos-duration="300">
                    <div class="feature-table">
                        <div class="card feature-card">
                            <img src="{{ asset('assets/front/images/features/shfeatures_social-deals.png') }}" class="w-50" />
                            <h3>Social Deals</h3>
                            <p>Generate new and return customers with our social deals apps.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="zoom-in" data-aos-duration="400">
                    <div class="feature-table">
                        <div class="card feature-card">
                            <img src="{{ asset('assets/front/images/features/shfeatures_social-analytics.png') }}" class="w-50" />
                            <h3>Social Analytics</h3>
                            <p>Easy-to-understand social analytics and post insights.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="zoom-in" data-aos-duration="500">
                    <div class="feature-table">
                        <div class="card feature-card">
                            <img src="{{ asset('assets/front/images/features/shopping-cart.png') }}" class="w-50" />
                            <h3>Social Shopping Cart</h3>
                            <p>Easy to create and implement takeout/delivery ordering system.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
