
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
            <form action="#" method="post">
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="name">Name</label>
                  <input type="text" id="name" class="form-control ">
                </div>
                <div class="col-md-6 form-group">
                  <label for="phone">Phone</label>
                  <input type="text" id="phone" class="form-control ">
                </div>
              </div>
             
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="email">Email</label>
                  <input type="email" id="email" class="form-control ">
                </div>
              </div>
               <div class="row">
                <div class="col-md-12 form-group">
                  <label for="message">Write Message</label>
                  <textarea name="message" id="message" class="form-control " cols="2" rows="4"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="submit" value="Send Message" class="btn btn-primary px-3 py-3">
                </div>
              </div>
               
            </form>
          </div>
          <div class="col-md-6 mb-5">
              <h2>Contact Information</h2>
            <div class="row">
              <div class="col-md-8  contact-form-contact-info">
                <p>
                  <i class="fa fa-map-marker mr-2" aria-hidden="true"></i>34 Street Name, City Name Here, United States
                </p>
      
                <p>
                  <i class="fa fa-phone mr-2"></i>
                 503-746-3142
                </p>
      
                <p>
                  <i class="fa fa-envelope mr-2"></i> info@proform360.com
                </p>
              </div>
              <iframe class="mr-2" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3618.1484460069382!2d67.09906145766993!3d24.927012405907472!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb338ca16b45125%3A0xd52d961225465a4b!2sPlot%20D%208A%2C%20Block%206%20Gulshan-e-Iqbal%2C%20Karachi%2C%20Karachi%20City%2C%20Sindh%2C%20Pakistan!5e0!3m2!1sen!2sus!4v1618390615533!5m2!1sen!2sus" width="600" height="300" style="border:0;margin-left:16px;" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </div>
        </div>
      </div>
  </div>       
@endsection