@extends('front.layout.front')
@section('title', 'Home')
@section('content')
    <section>
        <div class="slider-row">
            <div class="slider" style="background-image: url('{{$home->banner}}')">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 mt-5 pt-5">
                            <div class="main-header-heading">
                                {!! $home->banner_text ?? '' !!}
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
                @forelse($homecards as $homecard)
                <div class="col-lg-4">
                    <div class="card platform">
                        <div class="card-body">
                            <h3>{!! $homecard->icon ?? '' !!}</h3>
                            <h2>{{ $homecard->heading ?? '' }}</h2>
                            {!! $homecard->text ?? '' !!}
                            <hr class="w-50 bg-light">
                        </div>
                    </div>
                </div>
                @empty
                    <div class="col-md-12">
                        <p>No Services Data found.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <section class="mt-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
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
                <div class="col-lg-6">
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
            <div class="row">
                <div class="col-lg-6">
                    <img class="w-100" src="{{ $home->section_image }}" alt="">
                </div>
                <div class="col-lg-6 knowledge">
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
                    <br>
                    <p>
                        <a href="javascript:void(0)">Visit our support center <i class="fa fa-angle-right"></i></a>
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
