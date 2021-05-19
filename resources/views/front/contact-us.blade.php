@extends('front.layout.front')
@section('title','Contact Us')
@section('content')
  
   <section class="contact-us">
          <div class="center-div">
              <h1 class="font-weight-bold">Contact Us</h1>
              <p>Proform360 Social Media and Reputation Dashboard</p>
              <div aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
              </div>
          </div>
      </section>
  <div class="section-contact-page">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mb-5 contactbg" style="background:#eee">
              <h2>Get In Touch</h2>
            @include('front.components.form')
          </div>
          <div class="col-lg-6 mb-5">
            <div class="map-location">
              <h2>Contact Information</h2>
                <div class="row">
                  <div class="col-md-8  contact-form-contact-info">
                    <p>
                      <i class="fa fa-map-marker mr-2" aria-hidden="true"></i>4931 SW 76th Avenue 129 Portland, OR 97225
                    </p>
          
                    <p>
                      <i class="fa fa-phone mr-2"></i>
                        070-8860-4678
                    </p>
          
                    <p>
                      <i class="fa fa-envelope mr-2"></i> info@proform360.com
                    </p>
                  </div>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2797.2729727987203!2d-122.75745318490583!3d45.484447540113905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54950bf384bb611f%3A0xbac3331d781d0b5e!2sThe%20UPS%20Store!5e0!3m2!1sen!2s!4v1621280941664!5m2!1sen!2s" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
          </div>
        </div>
      </div>
  </div>       
@endsection