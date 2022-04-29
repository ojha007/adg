@extends('frontend.master')
@section('content')

    <section class="section-event-detail myaxis-40 position-relative">
        <div class="svg-box left center">
            <img src="{{asset('frontend/images/vert-dots.svg')}}" alt="">
        </div>
        <div class="svg-box right">
            <img src="{{asset('frontend/images/circle-dots.svg')}}" alt="">
        </div>
        <div class="container">
            <div class="row flex-center">
                <div class="col-lg-8 col-md-10 mb-4"><h4 class="mb-2">{!! $news->title !!}</h4><small
                        class="clamp__1 mt-1 text-gray-40 mb-3">{{\Carbon\Carbon::parse($news->created_at)->format('M d, Y')}}</small>
                    <div class="img-landscape-wide mb-2">
                        @if($news->image)
                            <img src="{{asset($news->image)}}" alt="{{$news->title}}">
                        @elseif($news->external_link)
                            <iframe width="420" height="315"
                                    src="{{$news->external_link}}">
                            </iframe>
                        @else
                        @endif
                    </div>
                    <div class="textbox pt-md-3">{!! $news->description !!}</div>
                </div>
                <div class="col-md-1">
                    <div class="sticky-side-component">
                        <div class="icon-square mb-3"><a class="ic-fb text-primary" href="#"></a></div>
                        <div class="icon-square mb-3"><a class="ic-instagram text-primary" href="#"></a></div>
                        <div class="icon-square mb-3"><a class="ic-twitter text-primary" href="#"></a></div>
                        <div class="icon-square"><a class="ic-link text-primary" href="#"></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5"><h4 class="text-primary mb-4">Other News</h4>
            <div class="row">
                @foreach($otherNews as $news)
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
                                    <img src="">
                                @endif
                            </div>
                            <h6 class="clamp__1 mt-2">{{$news->title}}</h6>
                            <small class="clamp__1 mt-1 text-gray-40">
                                {{\Carbon\Carbon::parse($news->created_at)->format('M d, y')}}
                            </small>
                            <a class="text-primary small mt-2 align-center"
                               href="{{route('news.show',$news->slug)}}">
                                Read More
                                <i class="ic-arrow-right ml-2"></i></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="section-join mbottom-64 position-relative flex-center-center flex-column"><h3
            class="text-white mb-3">We need your support</h3><a class="btn btn-secondary" href="#">Donate</a>
    </section>

@endsection
