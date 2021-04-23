@extends('front.layout.front')
@section('title', 'Pricing')
@section('content')

    <section class="pricing">
        <div class="center-div">
            <h1 class="font-weight-bold">PRICING PACKAGES</h1>
            <p>Social media tools that will grow your business!</p>
            <div class="header-button mt-5">
                <a href="{{ route('free-trial') }}" class="btn btn-trail">FREE TRIAL 30 DAYS <i class="fa fa-arrow-right"></i>
                </a>
                <a href="{{ route('contact') }}" class="btn-contact">Contact Us</a>
            </div>
        </div>
    </section>
    <section class="pricing-section">
        <div class="container">
            <div class="row">
                @forelse($pricing as $price)
                <div class="col-md-4">
                    <div class="pricing-table">
                        <div class="card pricing-card">
                            <div class="card-body">
                                <h3>{{ $price->title ?? '' }}</h3>
                                <h2>{{ $price->package ?? '' }}</h2>
                                <p>${{ $price->pricing ?? '' }} /mo</p>
                                <p>{{ $price->setup ?? '' }}</p>
                                {!! $price->description ?? '' !!}
                                <a href="javascript:void(0)" class="btn-getstarted btn btn-shutter-more text-uppercase bg_blue" onclick="openModal(this)">GET STARTED</a>
                            </div>
                        </div>
                    </div>
                </div>
                    @empty
                    <div class="col-md-12">
                        <p>No Pricing Data found.</p>
                    </div>
                    @endforelse
            </div>
        </div>

    </section>

    <section class="footer-contact">
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="contact-form">
                            <h3>Get In Touch</h3>
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label for="name">Name</label>
                                        <input type="text" id="name" class="form-control ">
                                    </div>
                                    <div class="col-md-12 form-group">
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
                                    <div class="col-md-6 form-group">
                                        <input type="submit" value="Send Message"
                                               class="btn btn-primary btn-get-a-quote px-3 py-2 mt-2">
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                    <div class="col-md-6 mb-2">

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.152535962182!2d67.09666901550536!3d24.926873048730325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb338ca16b45125%3A0xd52d961225465a4b!2sPlot%20D%208A%2C%20Block%206%20Gulshan-e-Iqbal%2C%20Karachi%2C%20Karachi%20City%2C%20Sindh%2C%20Pakistan!5e0!3m2!1sen!2sus!4v1618386548625!5m2!1sen!2sus"
                            width="100%" height="460" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="background: #434343; box-shadow: 2px 2px 2px 3px #80470f;">
                <div class="modal-header">
                    <h5 class="modal-title text-white"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-lg-12 col-sm-12 contact_form full_width_100">
                        <div class="inner_contact_row"><br>
                            <center>
                                <img class="logo  w-100" src="{{ asset('assets/front/images/logo/footer-logo.png') }}">
                            </center>
                            <br>
                            <form action="javascript:void(0)" onsubmit="submitPackageForm(event, this)">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for="first-name">First Name</label>
                                        <input type="text" id="first-name" class="form-control" name="customer_first_name" @if (auth()->check()) value="{{ auth()->user()->first_name }}" @endif>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="last-name">Last Name</label>
                                        <input type="text" id="last-name" class="form-control" name="customer_last_name" @if (auth()->check()) value="{{ auth()->user()->last_name }}" @endif>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" id="phone" class="form-control" name="customer_phone" @if (auth()->check()) value="{{ auth()->user()->phone }}" @endif>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label for="email">Email</label>
                                        <input type="email" id="email" class="form-control" name="customer_email" @if (auth()->check()) value="{{ auth()->user()->email }}" @endif>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label for="message">Write Message</label>
                                        <textarea name="customer_message" id="message" class="form-control " cols="2" rows="4"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <button type="submit" class="btn btn-primary btn-get-a-quote px-3 py-2">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
