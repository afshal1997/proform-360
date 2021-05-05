@extends('front.layout.front')
@section('title','Free-Trial')
@section('content')

<section class="free-trial-bg">
    <div class="center-div">
        <h1 class="font-weight-bold">FEATURED PACKAGES</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni, exercitationem!</p>
        <div class="header-button mt-5">
            <!--<a href="javascript:void(0)" class="btn btn-trail">FREE TRIAL 30 DAYS <i class="fa fa-arrow-right"></i></a>-->
            <a href="{{ route('contact') }}" class="btn-contact">Contact Us</a>
        </div>
    </div>
</section>
<section class="pricing-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="pricing-table">
                    <div class="card pricing-card">
                        <div class="card-body">
                            <h3>BASE FEATURES</h3>
                            <h2>Free</h2>
                            <p>$0 /mo</p>
                            <p>No Setup Fee</p>
                            <ul>
                                <li> <i class="fa fa-arrow-circle-o-right"></i> Engaging Social Media Posts</li>
                                <li> <i class="fa fa-arrow-circle-o-right"></i> Social Analytics</li>
                                <li> <i class="fa fa-arrow-circle-o-right"></i> Reputation Monitor</li>
                                <li> <i class="fa fa-arrow-circle-o-right"></i> Review Alerts</li>
                                <li> <i class="fa fa-arrow-circle-o-right"></i>Email Integration</li>
                                <li> <i class="fa fa-arrow-circle-o-right"></i>Sweepstakes</li>
                                <li> <i class="fa fa-arrow-circle-o-right"></i>Social Deals</li>
                                <li> <i class="fa fa-arrow-circle-o-right"></i> Branded Content</li>
                                <li><i class="fa fa-arrow-circle-o-right"></i> Social Ordering</li>
                            </ul>
                            <a href="javascript:void(0)"
                                class="btn-getstarted btn btn-shutter-more text-uppercase bg_blue"
                                onclick="getStarted('Free')" data-toggle="modal" data-target="#exampleModalCenter1">GET
                                STARTED</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="pricing-table">
                    <div class="card pricing-card">
                        <div class="card-body">
                            <h3>BASE FEATURES</h3>
                            <h2>Plus</h2>
                            <p>$139 /mo</p>
                            <p> Setup Fee </p>
                            <ul>
                                <li> <i class="fa fa-arrow-circle-o-right"></i> Social Analytics</li>
                                <li> <i class="fa fa-arrow-circle-o-right"></i> Sweepstakes</li>
                                <li> <i class="fa fa-arrow-circle-o-right"></i> Social Deals</li>
                            </ul>
                            <a href="javascript:void(0)"
                                class="btn-getstarted btn btn-shutter-more text-uppercase bg_blue"
                                onclick="getStarted('Plus')" data-toggle="modal" data-target="#exampleModalCenter2">GET
                                STARTED</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="pricing-table">
                    <div class="card pricing-card">
                        <div class="card-body">
                            <h3>BASE FEATURES</h3>
                            <h2>Premium</h2>
                            <p>$149 /mo</p>
                            <p>Setup Fee : $149</p>
                            <ul>
                                <li> <i class="fa fa-arrow-circle-o-right"></i> Engaging Social Media Posts</li>
                                <li> <i class="fa fa-arrow-circle-o-right"></i> Social Analytics</li>
                                <li> <i class="fa fa-arrow-circle-o-right"></i> Reputation Monitor</li>
                                <li> <i class="fa fa-arrow-circle-o-right"></i> Review Alerts</li>
                                <li> <i class="fa fa-arrow-circle-o-right"></i>Email Integration</li>
                                <li> <i class="fa fa-arrow-circle-o-right"></i>Sweepstakes</li>
                                <li> <i class="fa fa-arrow-circle-o-right"></i>Social Deals</li>
                                <li> <i class="fa fa-arrow-circle-o-right"></i> Branded Content</li>
                                <li><i class="fa fa-arrow-circle-o-right"></i> Social Ordering</li>
                            </ul>
                            <a href="javascript:void(0)"
                                class="btn-getstarted btn btn-shutter-more text-uppercase bg_blue"
                                onclick="getStarted('Premium')" data-toggle="modal"
                                data-target="#exampleModalCenter3">GET STARTED</a>
                        </div>
                    </div>
                </div>
            </div>
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
                        @include('front.components.form')
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
        <div class="modal-content" style="    background: #434343;box-shadow: 2px 2px 2px 3px #80470f;">
            <div class="modal-header">
                <h5 class="modal-title text-white">BASE FEATURES (Free)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-lg-12 col-sm-12 contact_form full_width_100" data-aos="fade-up">
                    <div class="inner_contact_row"> <br>
                        <center><img class="logo  w-100" src="{{ asset($setting->footerlogo) }}"> </center>

                        <br>
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
                                    <textarea name="message" id="message" class="form-control " cols="2"
                                        rows="4"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="submit" value="Send Message"
                                        class="btn btn-primary btn-get-a-quote px-3 py-2">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="    background: #434343;box-shadow: 2px 2px 2px 3px #80470f;">
            <div class="modal-header">
                <h5 class="modal-title text-white"> BASE FEATURES (Plus)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-lg-12 col-sm-12 contact_form full_width_100" data-aos="fade-up">
                    <div class="inner_contact_row"> <br>
                        <center><img class="logo  w-100" src="{{ asset($setting->footerlogo) }}"> </center>

                        <br>
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
                                    <textarea name="message" id="message" class="form-control " cols="2"
                                        rows="4"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="submit" value="Send Message"
                                        class="btn btn-primary btn-get-a-quote px-3 py-2">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="    background: #434343;box-shadow: 2px 2px 2px 3px #80470f;">
            <div class="modal-header">
                <h5 class="modal-title text-white"> BASE FEATURES (Premium) </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-lg-12 col-sm-12 contact_form full_width_100" data-aos="fade-up">
                    <div class="inner_contact_row"> <br>
                        <center><img class="logo  w-100" src="{{ asset($setting->footerlogo) }}"> </center>

                        <br>
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
                                    <textarea name="message" id="message" class="form-control " cols="2"
                                        rows="4"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="submit" value="Send Message"
                                        class="btn btn-primary btn-get-a-quote px-3 py-2">
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
