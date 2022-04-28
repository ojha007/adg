@extends('frontend.master')
@section('subTitle') Support Us @endsection
@section('content')
    <main>
        <div class="section-hero-inner position-relative mbottom-64">
            <div class="hero"></div>
            <div class="position-absolute"><h1>Support Us</h1>
                <p class="mt-2 mb-4 hero-textbox">Empowering Communities, Enhancing Services &amp; Enriching Culture</p>
            </div>
        </div>
        <section class="section-faq mbottom-88 position-relative">
            <div class="svg-box left top"><img src="{{asset('frontend/images/vert-dots.svg')}}" alt=""></div>
            <div class="container">
                <div class="row align-center">
                    <div class="col-lg-5"><h3 class="mb-2">Let's Make A Change</h3>
                        <p>Over the past four years, we have organized over 50 health fairs to benefit hundreds of
                            community
                            members. We need YOUR support to continue our efforts in building a strong healthy
                            foundation
                            for our community.</p></div>
                    <div class="col-lg-6 offset-lg-1">
                        <div class="row flex-center">
                            <div class="col-sm-6 mt-4">
                                <div class="card card-02 card__bordered h-100"><h5 class="font-bold text-gray-72">
                                        01</h5><h6
                                        class="mt-3 mb-1 flex-grow-1">In Person</h6><a href="#">8815 Centre Park Dr
                                        Suite
                                        430, lumbia, MD 21045, USA</a></div>
                            </div>
                            <div class="col-sm-6 mt-4">
                                <div class="card card-02 card__bordered h-100"><h5 class="font-bold text-gray-72">
                                        03</h5><h6
                                        class="mt-3 mb-1 flex-grow-1">Over the Phone</h6><a href="#">240-330-9421</a>
                                </div>
                            </div>
                            <div class="col-sm-6 mt-4">
                                <div class="card card-02 card__bordered"><h5 class="font-bold text-gray-72">02</h5><h6
                                        class="mt-3 mb-1">Online</h6>
                                    <p class="mb-3">Donate through paypal</p><a class="btn btn-outline-primary"
                                                                                href="#">Donate</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-offer pyaxis-64 bg-primary-96 position-relative">
            <div class="svg-box left top">
                <img src="{{asset('frontend/images/horz-dots.svg')}}"
                     alt="AMERICAN DIVERSITY GROUP"></div>
            <div class="svg-box right">
                <img src="{{asset('frontend/images/circle-dots.svg')}}"
                     alt="AMERICAN DIVERSITY GROUP"></div>
            <div class="container">
                <div class="row align-center">
                    <div class="col-md-6"><h3 class="mb-3">Join With us Become A Volunteer</h3>
                        <form class="mb-4 mb-md-0" action="">
                            <div class="form-row">
                                <div class="col-lg-6">
                                    <div class="form-group"><label for="">First Name</label><input class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group"><label for="">Last Name</label><input class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group"><label for="">Phone No.</label><input class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group"><label for="">Email Address</label><input
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group"><label
                                            for="exampleFormControlTextarea1">Message</label><textarea
                                            class="form-control"
                                            id="exampleFormControlTextarea1"
                                            rows="8"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <div class="col-lg-5 offset-lg-1 col-md-6">
                        <div class="img-portrait">
                            <img src="{{asset('frontend/images/hero-banner.jpg')}}" alt=""></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-join mbottom-64 position-relative flex-center-center flex-column"><h3
                class="text-white mb-3">We need your support</h3><a class="btn btn-secondary" href="#">Donate</a>
        </section>
    </main>
@endsection
