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
                <div class="col-lg-8 col-md-10 mb-4"><h4 class="mb-2">Montgomery county MD, bringing COVID-19
                        vaccinations/boosters to its diverse community.</h4><small
                        class="clamp__1 mt-1 text-gray-40 mb-3">Jan 3, 2022</small>
                    <div class="img-landscape-wide mb-2">
                        <img src="{{asset('frontend/images/about-1.jpg')}}" alt="">
                    </div>
                    <div class="textbox"><p>Ultricies et ornare fusce vivamus odio elit sit massa. Adipiscing
                            parturient
                            rhoncus vitae diam. Purus facilisi condimentum in viverra vitae quisque justo. Nisl
                            egestas
                            egestas a sed tincidunt dolor auctor ante <a href="#">pretium</a>. At aliquet augue
                            vitae
                            sed eu. Nisi vitae nisi at felis sit eget. Sed phasellus nunc ac volutpat. Vivamus
                            mattis
                            tempor nisl id ut. Duis ultrices quis ut cras lorem sed cursus eu sit. Vivamus sodales
                            diam<a href="#">facilisis</a> est.</p>
                        <p>Ultricies et ornare fusce vivamus odio elit sit massa. Adipiscing parturient rhoncus
                            vitae
                            diam. Purus facilisi condimentum in viverra vitae quisque justo. Nisl egestas egestas a
                            sed
                            tincidunt dolor auctor ante pretium. At aliquet augue vitae sed eu. Nisi vitae nisi at
                            felis
                            sit eget. Sed phasellus nunc ac volutpat. Vivamus mattis tempor nisl id ut. Duis
                            ultrices
                            quis ut cras lorem sed cursus eu sit. <a href="#">Vivamus</a> sodales diam facilisis
                            est.Ultricies et ornare fusce vivamus odio elit sit massa. Adipiscing parturient rhoncus
                            vitae diam.</p><h6>Nisi vitae</h6>
                        <p>Nisi vitae nisi at felis sit eget. Sed phasellus nunc ac volutpat. Vivamus mattis tempor
                            nisl
                            id ut. Duis ultrices quis ut cras lorem sed cursus eu sit. Vivamus sodales diam
                            facilisis
                            est.Ultricies et ornare fusce vivamus odio elit sit massa. Adipiscing parturient rhoncus
                            vitae diam.</p>
                        <ul>
                            <li>Initial Public Offerings of Shares and Bonds</li>
                            <li>Rights Issue of Shares</li>
                            <li>Further Public Offerings of Shares</li>
                            <li>Private Placement</li>
                        </ul>
                        <h6>Curiculum vitae</h6>
                        <p>Nisi vitae nisi at felis sit eget. Sed phasellus nunc ac volutpat. Vivamus mattis tempor
                            nisl
                            id ut. Duis ultrices quis ut cras lorem sed cursus eu sit. Vivamus sodales diam
                            facilisis
                            est.Ultricies et ornare fusce vivamus odio elit sit massa. Adipiscing parturient rhoncus
                            vitae diam. Vivamus mattis tempor nisl id ut. Duis ultrices quis ut cras lorem sed
                            cursus eu
                            sit. Vivamus sodales diam facilisis est.Ultricies et ornare fusce vivamus odio elit sit
                            massa. Adipiscing parturient rhoncus vitae diam.</p>
                        <p>Nisi vitae nisi at felis sit eget. Sed phasellus nunc ac volutpat. Vivamus mattis tempor
                            nisl
                            id ut. Duis ultrices quis ut cras lorem sed cursus eu sit. Vivamus.</p></div>
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
                @for($i=0;$i <3 ;$i++)
                    <div class="col-md-4 mbottom-32 media-detail">
                        <div class="d-flex flex-column h-100">
                            <div class="img-landscape">
                                <img src="{{asset('frontend/images/about-1.jpg')}}" alt=""></div>
                            <h6 class="clamp__1 mt-2">Enhance Services</h6>
                            <small class="clamp__1 mt-1 text-gray-40">Jan
                                3,
                                2022</small>
                            <p class="clamp__3 mt-1">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, ducimus.</p>
                            <a class="text-primary small mt-2 align-center" href="{{route('news.show','slug')}}">Read
                                More <i class="ic-arrow-right ml-2"></i></a></div>
                    </div>
                @endfor

            </div>
        </div>
    </section>
    <section class="section-join mbottom-64 position-relative flex-center-center flex-column"><h3
            class="text-white mb-3">We need your support</h3><a class="btn btn-secondary" href="#">Donate</a>
    </section>

@endsection
