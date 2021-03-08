<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <meta name="theme-color" content="#38384b">
    <link rel="icon" type="image/png" sizes="357x338" href="{{ asset('frontend/assets/img/imageedit_1_9468446019.png')}}">
    <link rel="icon" type="image/png" sizes="357x338" href="{{ asset('frontend/assets/img/imageedit_1_9468446019.png')}}">
    <link rel="icon" type="image/png" sizes="357x338" href="{{ asset('frontend/assets/img/imageedit_1_9468446019.png')}}">
    <link rel="icon" type="image/png" sizes="357x338" href="{{ asset('frontend/assets/img/imageedit_1_9468446019.png')}}">
    <link rel="icon" type="image/png" sizes="357x338" href="{{ asset('frontend/assets/img/imageedit_1_9468446019.png')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="manifest" href="manifest.json">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alex+Brush">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arizonia">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cinzel+Decorative">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400,400i,600,700">
    <link rel="stylesheet" href="{{ asset('frontend/assets/fonts/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/fonts/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/fonts/fontawesome5-overrides.min.css')}}'">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/styles.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/fonts/simple-line-icons.min.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
</head>


<body>
<nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav" style="font-family: 'Cinzel Decorative', cursive;">
    <div class="container"><a class="navbar-brand js-scroll-trigger navbar-brand-centered" href="{{ url('/eden') }}" style="font-family: 'Cinzel Decorative', cursive;font-size: 58px;"><img class="img-fluid brand-image" src="{{asset('frontend/assets/img/imageedit_1_9468446019.png')}}"></a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-align-justify"></i></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="nav navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ url('/eden') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ url('/eden') }}">Services</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ url('/eden/about') }}">About us</a></li>
            </ul>
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link js-scroll-trigger active" href="#page-top">Portfolio</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" style="cursor: pointer;" href="{{ url('/eden/contact') }}">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<header class="masthead text-center text-white d-flex pages-header" style="background-image: url('assets/img/eventglass.jpg');">
    <div class="wrapper-header-section"></div>
    <div class="container my-auto">
        <div class="col-lg-8 mx-auto">
            <h1>Get in touch with us</h1><a class="btn btn-dark btn-xl js-scroll-trigger" role="button" href="{{ url('/eden/contact') }}">Contact us</a>
        </div>
    </div>
</header>
<div class="team-grid">
    <div class="container">
        <div class="intro">
            <div class="row mb-3" data-aos="slide-down" data-aos-duration="1100">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading" style="font-family: 'Cinzel Decorative', cursive;">Our able team</h2>
                    <hr class="my-4 heading-underline">
                </div>
            </div>
        </div>
        <div class="row people">
            @foreach (\App\Models\Team::all() as $item)
            <div class="col-md-4 col-lg-4 m-auto item">
                <div class="box" style="background-image: url({{ asset('storage/portfolio/'. $item->image) }})">
                    <div class="cover">
                        <h3 class="name">{{ $item->name }}</h3>
                        <p class="title">{{ $item->description }}<br></p>
                        <div class="social"><a href="{{ $item->facebook }}"><i class="fa fa-facebook-official"></i></a><a href="{{ $item->twitter }}"><i class="fa fa-twitter"></i></a><a href="{{ $item->instagram }}"><i class="fa fa-instagram"></i></a></div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<section id="portfolio" class="py-5">
    <div class="intro">
        <h2 class="text-center">Gallery</h2>
        <p class="text-center">The following is a list of some of the past events that we have planned and coordinated<br></p>
    </div>
    <div class="container">
        <div class="filtr-controls text-center lead text-uppercase mb-4" id="filter"><span class="active d-inline-block mx-3 position-relative" data-filter="all">all </span>@foreach(\App\Models\Category::all() as $category)<span class="d-inline-block mx-3 position-relative filter" data-filter="{{ $category->id }}"> {{ $category->name }}</a></span>@endforeach</div>
        <div class="row filtr-container">
{{--            <div class="col-sm-12 col-md-4 filtr-item" data-category="{{ $port->category }}"><img src="{{ asset('storage/portfolio/'. $port->image) }}"></div>--}}
            <div class="col-sm-12 col-md-4 filtr-item" data-category="3"><img src="assets/img/parties.jpg"></div>
            <div class="col-sm-12 col-md-4 filtr-item" data-category="2,1"><img src="assets/img/events.jpg"></div>
            <div class="col-sm-12 col-md-4 filtr-item" data-category="1"><img src="assets/img/about.jpg"></div>
            <div class="col-sm-12 col-md-4 filtr-item" data-category="1,2,3"><img src="assets/img/evenrs.jpg"></div>
            <div class="col-sm-12 col-md-4 filtr-item" data-category="1,2,3"><img src="assets/img/eventglass.jpg"></div>
            <div class="col-sm-12 col-md-4 filtr-item" data-category="1"><img src="assets/img/wedding%20event.jpg"></div>
            <div class="col-sm-12 col-md-4 filtr-item" data-category="1,2,3"><img src="assets/img/table%20event.jpg"></div>
        </div>
    </div>
</section>
<div class="modal fade" role="dialog" tabindex="-1" id="contact-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center d-block border-bottom-0"><img src="assets/img/logo.png"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
            <div class="modal-body">
                <form data-bss-recipient="1cd5dc3c3a20567b6cf6d0354d7e1968" data-bss-subject="Eden Event customer">
                    <h2 class="text-center about-us-heading">Contact us</h2>
                    <div class="form-group"><select class="custom-select">
                            <option value="12" selected="" disabled="">Select Type of Event</option>
                            <option value="13">Wedding</option>
                            <option value="14">Corporate</option>
                            <option value="">Birthday</option>
                        </select></div>
                    <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name"></div>
                    <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
                    <div class="form-group"><textarea class="form-control" name="message" placeholder="Message" rows="9"></textarea></div>
                    <div class="form-group"><button class="btn btn-primary" type="submit">MAke an inquiry&nbsp;</button></div>
                </form>
            </div>
        </div>
    </div>
</div>
<div data-bs-parallax-bg="true" class="footer-dark" style="background-image: url(assets/img/goldbg.jpg);background-position: center;background-size: cover;">
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 item">
                    <h3>Quick links</h3>
                    <ul>
                        <li class="font-raleway"><a class="text-capitalize" href="{{ url('/eden') }}">Home</a></li>
                        <li class="font-raleway"><a class="text-capitalize" href="{{ url('/eden/portfolio') }}">Portfolio</a></li>
                        <li class="font-raleway"><a class="text-capitalize" href="contactus.html">Contact</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3 item">
                    <h3>About</h3>
                    <ul>
                        <li class="font-raleway"><a href="#">Company</a></li>
                        <li class="font-raleway"><a href="#">Portfolio</a></li>
                        <li class="font-raleway"><a href="#">Organizations</a></li>
                    </ul>
                </div>
                <div class="col-md-6 item text">
                    <h3>Eden events</h3>
                    <p class="font-raleway">&nbsp;Eden Event Planners has built an impressive events repertoire and clientele without compromising its principles and quality.</p>
                </div>
                <div class="col-sm-12 col-lg-3 m-auto item social fixed-bottom p-0 pb-2"><a data-toggle="modal" data-target="#contact-modal"><i class="icon ion-ios-email-outline"></i></a><a href="https://www.facebook.com/ElegantlyEden" target="_blank"><i class="icon ion-social-facebook-outline" style="color: var(--blue);"></i></a><a href="https://twitter.com/edenepke" target="_blank"><i class="icon ion-social-twitter-outline" style="color: var(--cyan);"></i></a><a href="https://api.whatsapp.com/send?phone=254722945812" target="_blank"><i class="icon ion-social-whatsapp-outline" style="color: var(--green);"></i></a><a href="https://www.youtube.com" target="_blank"><i class="icon ion-social-youtube-outline" style="color: var(--danger);"></i></a><a href="https://www.instagram.com/edeneventplanners/?igshid=17xynqguejm3m" target="_blank"><i class="icon ion-social-instagram-outline" style="color: var(--orange);"></i></a></div>
            </div>
            <p class="copyright">Eden events © 2020</p>
        </div>
    </footer>
</div>
<script src="{{ asset('frontend/assets/js/jquery.min.js')}}"></script>
<script src="{{ asset('frontend/assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/smart-forms.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<script src="{{ asset('frontend/assets/js/script.min.js')}}'"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    AOS.init();
</script>

</body>

</html>
