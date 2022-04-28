@extends('frontend.master')
@section('content')

    <div class="section-hero-inner position-relative mbottom-64">
        <div class="hero"></div>
        <div class="position-absolute"><h1>Our Events</h1>
            <p class="mt-2 mb-4 hero-textbox">Empowering Communities, Enhancing Services &amp; Enriching Culture</p>
        </div>
    </div>
    <section class="section-amenities mbottom-88 position-relative">
        <div class="svg-box left center">
            <img src="{{asset('frontend/images/vert-dots.svg')}}" alt="">
        </div>
        <div class="svg-box right">
            <img src="{{asset('frontend/images/circle-dots.svg')}}" alt="">
        </div>
        <div class="container">
            <div class="row">
                @for($i =0 ;$i<6 ;$i++)
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
                                <a class="btn btn-primary btn-block" href="{{route('events.show','e')}}">Register</a>
                            </div>
                        </div>
                    </div>
                @endfor

            </div>
            <div class="flex-center">
                <button class="btn btn-outline-primary">Load More</button>
            </div>
        </div>
    </section>
    <section class="section-join mbottom-64 position-relative flex-center-center flex-column"><h3
            class="text-white mb-3">We need your support</h3>
        <a class="btn btn-secondary" href="#">Donate</a>
    </section>

@endsection
