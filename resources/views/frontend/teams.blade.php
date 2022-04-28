@extends('frontend.master')
@section('subTitle') Teams @endsection
@section('content')
    <div class="modal fade modal-bod" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <div class="avatar-lg mb-3"><img src="assets/images/leader-1.jpg" alt=""></div>
                    <h5 class="mb-3">Mr. Paban Dhakal</h5>
                    <div class="align-center spacing__horizontal mb-3">
                        <div class="icon-square"><a class="ic-fb text-primary" href="#"></a></div>
                        <div class="icon-square"><a class="ic-linkedin text-primary" href="#"></a></div>
                        <div class="icon-square"><a class="ic-twitter text-primary" href="#"></a></div>
                    </div>
                    <p>Sonal Patel is President and CEO of SDK Consulting Inc a Geospatial Search Solution Company
                        supporting National Geospatial Agency, FBI, DHS and Ball Aerospace. She has worked on projects
                        implementing Enterprise Search, Geospatial Analysis and Predictive Analytics.</p></div>
            </div>
        </div>
    </div>

    <div class="section-hero-inner position-relative mbottom-64">
        <div class="hero"></div>
        <div class="position-absolute"><h1>Our Team</h1>
            <p class="mt-2 mb-4 hero-textbox">Empowering Communities, Enhancing Services &amp; Enriching Culture</p>
        </div>
    </div>
    <section class="section-who mbottom-88 pyaxis-56">
        <div class="container">
            <div class="row align-center">
                <div class="col-md-5"><h3 class="heading__line mb-2">Message from Mayur Mody</h3>
                    <div class="textbox"><p>As a first generation immigrant and health management professional, Mr. Mody
                            has first hand experience of health disparities when language and cultural barriers hinder
                            communication and access to health services. Thus, eliminating health disparity is both
                            professional and personal passion for Mr. Mody.</p></div>
                </div>
                <div class="col-lg-4 col-md-5 offset-lg-1">
                    <div class="img-portrait">
                        ¶<img src="{{asset('frontend/images/teams/ADG-3-Mayur_0-1024x654.webp')}}" alt="Mayur Mody">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-who mbottom-88 pyaxis-56 left">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-4 col-md-5 offset-lg-1">
                    <div class="img-portrait"><img src="{{asset('frontend/images/teams/Meet Desi.webp')}}"
                                                   alt="Meet Desi"></div>
                </div>
                <div class="col-md-5 offset-lg-1"><h3 class="heading__line mb-2">Message from Meet Desai</h3>
                    <div class="textbox"><p>Meet Desai is a financial Advisor at Morgan Stanley. He focuses on providing
                            wealth management solutions to business owners, individuals and families in Baltimore
                            area.</p>
                        <p>Leveraging resources of Morgan Stanley, he helps affluent clients address their five biggest
                            concerns; preserving their wealth, mitigating taxes, taking care of their heirs, ensuring
                            their assets are not unjustly taken, and charitable giving. He uses consultative process to
                            gain a detailed understanding of his clients' deepest values and goals.</p></div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-team mbottom-88">
        <div class="container"><h3 class="text-center">Steering Team Members</h3>
            <div class="row justify-content-md-center">
                <div class="col-lg-3 mt-4">
                    <div class="card-team">
                        <div class="img-portrait">
                            <img src="{{asset('frontend/images/teams/Sonai.webp')}}" alt="Sonal Patel"></div>
                        <div class="bg-primary p-3 flex-center flex-column">
                            <h6 class="text-white text-center">Sonal Patel</h6>
                            <div class="clearfix"></div>
                            {{--                            <p>--}}
                            {{--                                Sonal Patel is President and CEO of SDK Consulting Inc a Geospatial Search Solution--}}
                            {{--                                Company supporting National Geospatial Agency, FBI, DHS and Ball Aerospace. She has--}}
                            {{--                                worked on projects implementing Enterprise Search, Geospatial Analysis and Predictive--}}
                            {{--                                Analytics--}}
                            {{--                            </p>--}}
                            <button class="btn mt-3 bg-white text-primary btn-sm" data-toggle="modal"
                                    data-target="#exampleModal">View More
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mt-4">
                    <div class="card-team">
                        <div class="img-portrait"><img src="{{asset('frontend/images/teams/LR.webp')}}" alt=""></div>
                        <div class="bg-primary p-3 flex-center flex-column">
                            <h6 class="text-white text-center">Lorna
                                Imperial Seidel
                                PHD, AN, DN CNS </h6>
                            <button class="btn mt-3 bg-white text-primary btn-sm" data-toggle="modal"
                                    data-target="#exampleModal">View More
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mt-4">
                    <div class="card-team">
                        <div class="img-portrait">
                            <img src="{{asset('frontend/images/teams/Nash.webp')}}" alt="Nagarajan Pattabiraman "></div>
                        <div class="bg-primary p-3 flex-center flex-column">
                            <h6 class="text-white text-center">Nagarajan Pattabiraman </h6>
                            <button class="btn mt-3 bg-white text-primary btn-sm" data-toggle="modal"
                                    data-target="#exampleModal">View More
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-join mbottom-64 position-relative flex-center-center flex-column"><h3
            class="text-white mb-3">We need your support</h3><a class="btn btn-secondary" href="#">Donate</a></section>
    </main>

@endsection
