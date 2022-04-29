@extends('frontend.master')
@section('subTitle') Our News @endsection
@section('content')
    <main>
        <div class="section-hero-inner position-relative mbottom-64">
            <div class="hero">
            </div>
            <div class="position-absolute"><h1>News &amp; Updates</h1>
                <p class="mt-2 mb-4 hero-textbox">Empowering Communities, Enhancing Services &amp; Enriching Culture</p>
            </div>
        </div>
        <section class="section-service mbottom-88 position-relative">
            <div class="svg-box left top">
                <img src="{{asset('frontend/images/horz-dots.svg')}}"
                     alt="AMERICAN DIVERSITY GROUP">
            </div>
            <div class="svg-box right">
                <img src="{{asset('frontend/images/circle-dots.svg')}}"
                     alt="AMERICAN DIVERSITY GROUP">
            </div>
            <div class="container">
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
                                        <img src="">
                                    @endif
                                </div>
                                <h6 class="clamp__1 mt-2">{{$news->title}}</h6>
                                <small class="clamp__1 mt-1 text-gray-40">
                                    {{\Carbon\Carbon::parse($news->created_at)->format('M d, y')}}
                                </small>
{{--                                <p class="clamp__3 mt-1">{!! substr($news->description) !!}</p>--}}
                                <a class="text-primary small mt-2 align-center"
                                   href="{{route('news.show','slug')}}">Read
                                    More <i class="ic-arrow-right ml-2"></i></a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="flex-center">
                    <button class="btn btn-outline-primary">Load More</button>
                </div>
            </div>
        </section>
        <section class="section-join mbottom-64 position-relative flex-center-center flex-column"><h3
                class="text-white mb-3">We need your support</h3><a class="btn btn-secondary" href="#">Donate</a>
        </section>
    </main>
@endsection
