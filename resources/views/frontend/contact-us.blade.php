@extends('frontend.master')
@section('subTitle') Contact Us @endsection
@section('content')

    <div class="section-hero-inner position-relative mbottom-64">
        <div class="hero"></div>
        <div class="position-absolute"><h1 >Contact Us</h1>
            <p class="mt-2 mb-4 hero-textbox">Empowering Communities, Enhancing Services &amp; Enriching Culture</p>
        </div>
    </div>
    <div class="container mbottom-88">
        <div class="img-landscape-02 mb-5">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.298034784557!2d85.31982911506212!3d27.708082882791558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19c9a1f2227d%3A0xd91ba01e9014d1b!2sMuktinath%20Capital%20Limited!5e0!3m2!1sen!2snp!4v1642149001916!5m2!1sen!2snp"
                style="border:0" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="row">
            <div class="col-lg-7 col-md-6"><h3 class="text-primary mb-4">Send us a Message</h3>
                <form class="mb-4 mb-md-0" action="">
                    <div class="form-row">
                        <div class="col-lg-6">
                            <div class="form-group"><label for="">First Name</label><input class="form-control"></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group"><label for="">Last Name</label><input class="form-control"></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group"><label for="">Phone No.</label><input class="form-control"></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group"><label for="">Email Address</label><input class="form-control">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group"><label for="exampleFormControlTextarea1">Message</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="8"></textarea>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-secondary">Submit</button>
                </form>
            </div>
            <div class="col-lg-4 col-md-6 offset-lg-1">
                <div class="card card__bordered card__rounded px-3 mb-4"><h5 class="text-primary mb-2">Location</h5>
                    <p>21204 Dorsey Spring Place, Germantown MD 20876</p></div>
                <div class="card card__bordered card__rounded px-3 mb-4"><h5 class="text-primary mb-2">Contact
                        Details</h5>
                    <p class="mb-2">Email Address: amdivgroup@gmail.com</p>
                    <p>Phone No.: 240-330-9421</p></div>
                <div class="card card__bordered card__rounded px-3"><h5 class="text-primary mb-2">Social Media</h5>
                    <div class="align-center spacing__horizontal">
                        <div class="icon-square"><a class="ic-fb text-primary" href="#"></a></div>
                        <div class="icon-square"><a class="ic-instagram text-primary" href="#"></a></div>
                        <div class="icon-square"><a class="ic-twitter text-primary" href="#"></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="section-join mbottom-64 position-relative flex-center-center flex-column"><h3
            class="text-white mb-3">We need your support</h3><a class="btn btn-secondary" href="#">Donate</a></section>

@endsection
