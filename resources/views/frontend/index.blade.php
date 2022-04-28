@extends('frontend.master')
@section('content')
    <section class="section-hero mbottom-88 bg-primary-96">
        <div class="img-landscape"><img src="{{asset('/frontend/images/hero-banner.jpg')}}" alt=""></div>
        <div class="position-absolute"><h1 class="text-white mb-2">Providing Access To Crucial Heath Services </h1>
            <p class="mb-4"></p>
            <button class="btn btn-primary">Donate Now</button>
        </div>
    </section>
    <section class="section-service mbottom-88 position-relative">
        <div class="svg-box left top"><img src="{{asset('frontend/images/horz-dots.svg')}}" alt=""></div>
        <div class="svg-box right"><img src="{{asset('frontend/images/circle-dots.svg')}}" alt=""></div>
        <div class="container"><small class="text-primary font-semibold mb-1">WHY CHOOSE US</small>
            <div class="row align-center mbottom-40">
                <div class="col-lg-5"><h3>We Believe that We can Save More Lifes with you</h3></div>
                <div class="col-lg-6 offset-lg-1"><p class="mt-4">The American Diversity Group is organized to bring
                        together the diverse group of people to build and sustain healthy community and enriched lives.
                        Our goal is to serve individuals and families to improve the health and well-being of those we
                        serve.</p></div>
            </div>
            <div class="row">
                <div class="col-md-4 mbottom-32 media-detail">
                    <div class="d-flex flex-column h-100">
                        <div class="img-landscape"><img src="{{asset('frontend/images/about-1.jpg')}}" alt=""></div>
                        <h6 class="clamp__1 mt-3">Enhance Services</h6>
                        <p class="clamp__3 mt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit,
                            ducimus.</p></div>
                </div>
                <div class="col-md-4 mbottom-32 media-detail">
                    <div class="d-flex flex-column h-100">
                        <div class="img-landscape"><img src="{{asset('frontend/images/about-2.jpg')}}" alt=""></div>
                        <h6 class="clamp__1 mt-3">Empower Communities</h6>
                        <p class="clamp__3 mt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit,
                            ducimus.</p></div>
                </div>
                <div class="col-md-4 mbottom-32 media-detail">
                    <div class="d-flex flex-column h-100">
                        <div class="img-landscape"><img src="{{asset('/frontend/images/about-3.jpg')}}" alt=""></div>
                        <h6 class="clamp__1 mt-3">Enrich Culture</h6>
                        <p class="clamp__3 mt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit,
                            ducimus.</p></div>
                </div>
            </div>
            <div class="flex-center mt-2">
                <button class="btn btn-primary">Read More</button>
            </div>
        </div>
    </section>
    <section class="section-amenities mbottom-88 bg-primary-96 pyaxis-64 position-relative">
        <div class="svg-box left center"><img src="{{asset('/frontend/images/vert-dots.svg')}}" alt=""></div>
        <div class="container">
            <div class="row mbottom-40 flex-center">
                <div class="col-md-6 text-center"><small class="text-primary font-semibold mb-1">OUR EVENTS</small>
                    <h3 class="textbox-product-01 mb-2">Our Recent Causes to serve better</h3>
                    <p class="mt-3 mt-lg-0 textbox-product-01">We provide services in the area of IFRS and management
                        reporting, helping companies to reach their highest level.</p></div>
            </div>
            <div class="row">
                @foreach($events as $event)
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="card card-01 h-100">
                            <div class="img-landscape">
                                <img src="{{asset($event->image)}}" alt="{{$event->slug}}">
                            </div>
                            <div class="p-3 flex-grow-1 d-flex flex-column">
                                <h5 class="title text-light-400">{{$event->title}}</h5>
                                <p class="mt-2 flex-grow-1"></p>
                                <ul class="list list-dot my-3">
                                    @if($event->time)
                                        <li class="small">{{$event->time}}</li>
                                    @endif
                                    <li class="small">{{$event->location}}</li>
                                </ul>
                                <button class="btn btn-primary btn-block">Register</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="section-service mbottom-88 position-relative">
        <div class="svg-box left top"><img src="{{asset('frontend/images/horz-dots.svg')}}"
                                           alt="AMERICAN DIVERSITY GROUP"></div>
        <div class="svg-box right"><img src="{{asset('frontend/images/circle-dots.svg')}}"
                                        alt="AMERICAN DIVERSITY GROUP"></div>
        <div class="container">
            <div class="flex-center-between mbottom-32"><h3 class="mr-4">Latest News</h3><a
                    class="btn btn-outline-primary btn-sm" href="{{route('news.index')}}">View All</a></div>
            <div class="row">
                @foreach($allNews as $news)
                    <div class="col-md-4 mbottom-32 media-detail">
                        <div class="d-flex flex-column h-100">
                            <div class="img-landscape">
                                @if($news->image)
                                    <img src="{{asset($news->image)}}" alt="{{$news->title}}">
                                @elseif($news->external_link)
                                    <iframe width="420" height="315"
                                            src="{{$news->external_link}}">
                                    </iframe>
                                @else
                                @endif
                            </div>
                            <h6 class="clamp__1 mt-2">{{$news->title}}</h6>
                            <small
                                class="clamp__1 mt-1 text-gray-40">{{\Carbon\Carbon::parse($news->created_at)->format('M d, y')}}
                            </small>
{{--                            <p class="clamp__3 mt-1">{!! substr($news->description,0,100) !!}</p>--}}
                            <a class="text-primary small mt-2 align-center" href="{{route('news.show',$news->slug)}}">Read
                                More
                                <i class="ic-arrow-right ml-2"></i></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="section-quote mbottom-64 position-relative bg-primary py-5">
        <div class="container">
            <div class="row flex-center">
                <div class="col-md-8 text-center"><h4 class="text-white mb-3">" Healthcare is a human right. Every
                        child, parent, and family should receive health care no matter where they are born "</h4>
                    <p class="text-white">Mayur Mody, President of American Diversity Group</p></div>
            </div>
        </div>
    </section>
    <section class="section-offer pyaxis-64 bg-primary-96 position-relative">
        <div class="svg-box left top"><img src="{{asset('frontend/images/horz-dots.svg')}}"
                                           alt="AMERICAN DIVERSITY GROUP"></div>
        <div class="svg-box right"><img src="{{asset('frontend/images/circle-dots.svg')}}"
                                        alt="AMERICAN DIVERSITY GROUP" ¶></div>
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
                                <div class="form-group"><label for="">Email Address</label><input class="form-control">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group"><label
                                        for="exampleFormControlTextarea1">Message</label>
                                    <textarea class="form-control"
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
                        <img src="{{asset('frontend/images/contact.webp')}}"
                             alt="AMERICAN DIVERSITY GROUP"></div>
                </div>
            </div>
        </div>
    </section>
@endsection
