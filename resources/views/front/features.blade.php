@extends('front.layout.front')
@section('title','Features')
@section('content')

    <section class="features-bg">
        <div class="center-div">
            <h1>Features</h1>
            <p>Social media tools that will grow your business</p>
            <div aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Features</li>
                </ol>
            </div>
        </div>
    </section>
    <section class="feature-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="feature-table">
                        <div class="card feature-card">
                            <img src="{{ asset('assets/front/images/features/shfeatures_social-design.png') }}" class="w-50" />
                            <h3>Social Assessment</h3>
                            <p>We do a complete audit of your business's social media strategy.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="feature-table">
                        <div class="card feature-card">
                            <img src="{{ asset('assets/front/images/features/shfeatures_engaging-content.png') }}" class="w-50" />
                            <h3>Engaging Content</h3>
                            <p>You will get rich and engaging content for your social media pages.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="feature-table">
                        <div class="card feature-card">
                            <img src="{{ asset('assets/front/images/features/shfeatures_Advanced_Scheduling.png') }}" class="w-50" />
                            <h3>Advanced Scheduling</h3>
                            <p>Save time by scheduling posts in advance with an easy-to-use calendar.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
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
                <div class="col-md-3">
                    <div class="feature-table">
                        <div class="card feature-card">
                            <img src="{{ asset('assets/front/images/features/shfeatures_reputation-monitoring.png') }}" class="w-50" />
                            <h3>Reputation Monitoring</h3>
                            <p>We monitor your business's online reputation on review sites like yelp.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="feature-table">
                        <div class="card feature-card">
                            <img src="{{ asset('assets/front/images/features/shfeatures_review-alerts.png') }}" class="w-50" />
                            <h3>Review Alerts</h3>
                            <p>You will get alerts when someone comments or reviews your business online.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="feature-table">
                        <div class="card feature-card">
                            <img src="{{ asset('assets/front/images/features/shfeatures_social-design.png') }}" class="w-50" />
                            <h3>Social Optimization</h3>
                            <p>We design and optimize your social media profiles to keep them fresh.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
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
                <div class="col-md-4">
                    <div class="feature-table">
                        <div class="card feature-card">
                            <img src="{{ asset('assets/front/images/features/shfeatures_social-deals.png') }}" class="w-50" />
                            <h3>Social Deals</h3>
                            <p>Generate new and return customers with our social deals apps.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-table">
                        <div class="card feature-card">
                            <img src="{{ asset('assets/front/images/features/shfeatures_social-analytics.png') }}" class="w-50" />
                            <h3>Social Analytics</h3>
                            <p>Easy-to-understand social analytics and post insights.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
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
    <section class="footer-contact">
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mb-2">
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
                                        <input type="submit" value="Send Message" class="btn btn-primary btn-get-a-quote px-3 py-2 mt-2">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6 mb-1">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.152535962182!2d67.09666901550536!3d24.926873048730325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb338ca16b45125%3A0xd52d961225465a4b!2sPlot%20D%208A%2C%20Block%206%20Gulshan-e-Iqbal%2C%20Karachi%2C%20Karachi%20City%2C%20Sindh%2C%20Pakistan!5e0!3m2!1sen!2sus!4v1618386548625!5m2!1sen!2sus" width="100%" height="460" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection