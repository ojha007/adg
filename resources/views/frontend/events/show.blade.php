@extends('frontend.master')
@section('content')

    <section class="section-event-detail myaxis-40 position-relative">
        <div class="svg-box left center"><img src="{{asset('frontend/images/vert-dots.svg')}}" alt=""></div>
        <div class="svg-box right"><img src="{{asset('frontend/images/circle-dots.svg')}}" alt=""></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-8 mb-4"><h3 class="mb-2">Covid Vaccine</h3>
                    <div class="img-landscape"><img src="{{asset('frontend/images/about-1.jpg')}}" alt=""></div>
                    <ul class="list list-separator-dot mt-3">
                        <li class="small">Sun, Apr 24</li>
                        <li class="small">12210 Plum Orchard Dr, Silver Spring, MD 20904, USA</li>
                    </ul>
                    <p class="mt-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum assumenda
                        exercitationem sed culpa officiis voluptas, voluptatem impedit doloremque laboriosam delectus
                        ipsum odit dicta laborum quo velit quod suscipit modi molestias!</p><h4
                        class="text-secondary mt-3">Register Here</h4>
                    <form class="my-3 mb-md-0" action="">
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
                                <div class="form-group"><label for="">Email Address</label><input class="form-control">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group"><label
                                        for="exampleFormControlTextarea1">Message</label><textarea class="form-control"
                                                                                                   id="exampleFormControlTextarea1"
                                                                                                   rows="8"></textarea>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-secondary">Register</button>
                    </form>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="sticky-side-component">
                        <div class="card card__bordered card__rounded card__shadow text-center">
                            <a class="flex-center-center text-primary" href="#">
                                <i class="ic-gmail mr-2 h5"> </i><span>amdivgroup@gmail.com</span></a>
                            <h6 class="text-primary my-4 text-center">Want to talk to us directly about the event?</h6>
                            <a class="btn btn-primary btn-block" href="contact.html">Contact Us</a>
                            <div class="flex-center-center spacing__horizontal mt-4">
                                <div class="icon-square"><a class="ic-fb text-primary" href="#"></a></div>
                                <div class="icon-square"><a class="ic-instagram text-primary" href="#"></a></div>
                                <div class="icon-square"><a class="ic-twitter text-primary" href="#"></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-amenities mbottom-88 position-relative">
        <div class="container"><h4 class="text-primary mb-4">Other Events</h4>
            <div class="row">
                @for($i =0 ;$i<3;$i++ )
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="card card-01 h-100">
                            <div class="img-landscape"><img src="{{asset('frontend/images/about-1.jpg')}}" alt=""></div>
                            <div class="p-3 flex-grow-1 d-flex flex-column"><h5 class="title text-light-400">Covid
                                    Vaccine</h5>
                                <p class="mt-2 flex-grow-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Odit,
                                    ducimus.</p>
                                <ul class="list list-dot my-3">
                                    <li class="small">Sun, Apr 24</li>
                                    <li class="small">12210 Plum Orchard Dr, Silver Spring, MD 20904, USA</li>
                                </ul>
                                <a class="btn btn-primary btn-block" href="event-detail.html">Register</a></div>
                        </div>
                    </div>

                @endfor
            </div>
        </div>
    </section>
    <section class="section-join mbottom-64 position-relative flex-center-center flex-column"><h3
            class="text-white mb-3">We need your support</h3>
        <a class="btn btn-secondary" href="#">Donate</a>
    </section>

@endsection
