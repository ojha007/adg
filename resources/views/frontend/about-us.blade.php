@extends('frontend.master')
@section('subTitle') About Us @endsection
@section('content')
    <div class="section-hero-inner position-relative mbottom-64">
        <div class="hero"></div>
        <div class="position-absolute"><h1 class="text-white">About Us</h1>
            <p class="mt-2 mb-4 hero-textbox">Empowering Communities, Enhancing Services &amp; Enriching Culture</p>
        </div>
    </div>
    <section class="section-who mbottom-88 pyaxis-56">
        <div class="container">
            <div class="row align-center">
                <div class="col-md-5"><h3 class="heading__line mb-2">Who We Are</h3>
                    <div class="textbox"><p>The American Diversity Group is organized to bring together the diverse
                            group of people to build and sustain healthy community and enriched lives. Our goal is to
                            serve individuals and families to improve the health and well-being of those we serve. We
                            strive to be the leading organization to provide the best care to everyone through
                            integrated medical practice, education and awareness. We are the the partner of choice as we
                            transform healthcare education and services for our community.
                        </p>
                        <p>Our focus is on improving health care access to under-served individuals by providing them
                            with proper healthcare related education. We are dedicated to the sole purpose of empowering
                            communities to lead high-quality lives with respect and dignity. For More information on of
                            these programs or how you can get involved contact ADG today.</p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 offset-lg-1">
                    <div class="img-portrait"><img src="assets/images/about-1.jpg" alt=""></div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-what mbottom-64 position-relative">
        <div class="svg-box left top">
            <img src="{{asset('frontend/images/horz-dots.svg')}}"
                 alt="AMERICAN DIVERSITY GROUP">
        </div>
        <div class="svg-box right">
            <img src="{{asset('frontend/images/circle-dots.svg')}}"
                 alt="AMERICAN DIVERSITY GROUP">
        </div>
        <div class="container">
            <div class="flex-center mb-4">
                <div class="col-md-6"><small class="text-primary font-semibold mb-1 text-center">WHAT WE DO</small>
                    <h3 class="text-center">We Believe that We can Save More Lifes with you</h3></div>
            </div>
            <div class="row">
                <div class="col-md-4 mbottom-32 media-detail">
                    <div class="d-flex flex-column h-100">
                        <div class="img-landscape"><img src="assets/images/about-1.jpg" alt=""></div>
                        <h6 class="clamp__1 mt-3">Enhance Services</h6>
                        <ul class="list-dot list">
                            <li class="small">Health Insurance Enrollment- The Affordable Care Act</li>
                            <li class="small">Community Health Fairs</li>
                            <li class="small">Case Management and Referral Services</li>
                            <li class="small">Alcohol Prevention Program</li>
                            <li class="small">Tobacco Use Prevention Program</li>
                            <li class="small">Senior Citizens Social Club</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 mbottom-32 media-detail">
                    <div class="d-flex flex-column h-100">
                        <div class="img-landscape"><img src="assets/images/about-2.jpg" alt=""></div>
                        <h6 class="clamp__1 mt-3">Empower Communities</h6>
                        <ul class="list-dot list">
                            <li class="small">Health Insurance Enrollment- The Affordable Care Act</li>
                            <li class="small">Community Health Fairs</li>
                            <li class="small">Case Management and Referral Services</li>
                            <li class="small">Alcohol Prevention Program</li>
                            <li class="small">Tobacco Use Prevention Program</li>
                            <li class="small">Senior Citizens Social Club</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 mbottom-32 media-detail">
                    <div class="d-flex flex-column h-100">
                        <div class="img-landscape"><img src="assets/images/about-3.jpg" alt=""></div>
                        <h6 class="clamp__1 mt-3">Enrich Culture</h6>
                        <ul class="list-dot list">
                            <li class="small">Health Insurance Enrollment- The Affordable Care Act</li>
                            <li class="small">Community Health Fairs</li>
                            <li class="small">Case Management and Referral Services</li>
                            <li class="small">Alcohol Prevention Program</li>
                            <li class="small">Tobacco Use Prevention Program</li>
                            <li class="small">Senior Citizens Social Club</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-join mbottom-64 position-relative flex-center-center flex-column">
        <h3
            class="text-white mb-3 text-center">
            We believe everyone deserves access to healthcare regardless economic, social or
            immigration status
        </h3>
        <a class="btn btn-secondary" href="#">Donate</a></section>
    <section class="ptop-64 pb-4 bg-primary-96 position-relative">
        <div class="svg-box left top"><img src="{{asset('frontend/images/horz-dots.svg')}}"
                                           alt="AMERICAN DIVERSITY GROUP"></div>
        <div class="container"><h3 class="mbottom-40 heading__line">Testimonials</h3>
            <div class="row flex-center">
                <div class="col-lg-4 col-md-6 mbottom-40">
                    <div class="card card__rounded h-100"><p class="mb-5 flex-grow-1">Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit. Aliquet malesuada leo feugiat sed cras sodales tellus
                            pellentesque. Id lectus nulla vulputate nibh. Eget netus arcu</p><h6 class="clamp__1 mb-1">
                            Russel Peters</h6></div>
                </div>
                <div class="col-lg-4 col-md-6 mbottom-40">
                    <div class="card card__rounded h-100"><p class="mb-5 flex-grow-1">Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit. Aliquet malesuada leo feugiat sed cras sodales tellus
                            pellentesque. Id lectus nulla vulputate nibh. Eget netus arcu</p><h6 class="clamp__1 mb-1">
                            Sheldon Cooper</h6></div>
                </div>
                <div class="col-lg-4 col-md-6 mbottom-40">
                    <div class="card card__rounded h-100"><p class="mb-5 flex-grow-1">Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit. Aliquet malesuada leo feugiat sed cras sodales tellus
                            pellentesque. Id lectus nulla vulputate nibh. Eget netus arcu</p><h6 class="clamp__1 mb-1">
                            Matthew Moniz</h6></div>
                </div>
            </div>
        </div>
    </section>
@endsection
