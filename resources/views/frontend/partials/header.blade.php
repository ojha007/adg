<div class="navbar-wrapper">
    <div class="navbar-top">
        <div class="container">
            <div class="flex-center-center">
                <div class="align-center d-none d-md-flex flex-grow-1"><a class="align-center mr-3" href="#"><i
                            class="ic-call text-primary mr-2"></i> 240-330-9421 </a><a class="align-center" href="#"><i
                            class="ic-gmail text-primary mr-2"></i> amdivgroup@gmail.com</a></div>
                <ul class="list list__inline">
                    <li><a class="ic-fb text-primary mr-3" href="#"></a></li>
                    <li><a class="ic-twitter text-primary mr-3" href="#"></a></li>
                    <li><a class="ic-instagram text-primary mr-3" href="#"></a></li>
                    <button class="btn btn-primary rounded-0">Donate</button>
                </ul>
            </div>
        </div>
    </div>
    <div class="navbar-home">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="/">
                    <img alt="ADG Logo"
                         src="{{asset('frontend/images/logo.png')}}">
                </a>
                <div class="navbar-menus">
                    <div class="navbar-collapse">
                        <button class="navbar-toggler toggle-close btn btn-icon btn-icon-only" id="navbarClose"><span
                                class="ic-close h6"></span></button>
                        <ul class="navbar-nav">
                            <li><a class="font-semibold" href="/">Home</a></li>
                            <li><a class="font-semibold" href="{{route('supportUs')}}">Support Us</a></li>
                            <li><a class="font-semibold" href="{{route('news.index')}}">News</a></li>
                            <li><a class="font-semibold" href="{{route('events.index')}}">Events</a></li>
                            <li><a class="font-semibold" href="{{route('contactUs')}}">Contact</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle font-semibold" id="navbarDropdown"
                                   type="button" role="button" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false">About</a>
                                <ul class="dropdown-menu dropdown-menu-right animate slideIn"
                                    aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="about.html">What We Do</a></li>
                                    <li><a class="dropdown-item" href="{{route('teams')}}">Our Team</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle font-semibold" id="navbarDropdown"
                                                    type="button" role="button" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">Resrouces</a>
                                <ul class="dropdown-menu dropdown-menu-right animate slideIn"
                                    aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="gallery-video.html">Video Gallery</a></li>
                                    <li><a class="dropdown-item" href="gallery.html">Image Gallery</a></li>
                                    <li><a class="dropdown-item" href="gallery.html">Covid-19 Resources</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <button class="navbar-toggler btn-con btn-icon-only" type="button" id="navbarToggle"><span
                            class="ic-menu h4"></span></button>
                </div>
            </nav>
        </div>
    </div>
</div>
