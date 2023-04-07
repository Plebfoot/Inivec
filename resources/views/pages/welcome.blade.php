@extends('layouts.layout')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
<link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css">
<meta content="Inivec" property="og:title" />
<meta content="Maak je feest legendarisch met onze artiesten!" property="og:description" />
<meta content="https://www.inivec.nl" property="og:url" />
<meta content="#43B581" data-react-helmet="true" name="theme-color" />

@section('content')
    <!-- Navbar sectie -->

    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid justify-content-between">
            <a class="navbar-brand" href="/">
                {{-- <img src="/assets/imgs/logo.jpg" alt="brand" width="120px"> --}}
                <span>Inivec</span>
            </a>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="bx bx-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-link active" aria-current="page" href="#">Over Ons</a>
                    <a class="nav-link" href="/artiesten">Artiesten</a>
                    <a class="nav-link" href="/inschrijven">Inschrijven</a>
                </div>
                @if (Auth::check())
                    <a href="/home" class="btn btn-primary shadow-none">Dashboard</a>
                @else
                    <a href="/login" class="btn btn-primary shadow-none">Login</a>
                @endif
            </div>
        </div>
    </nav>
    <!-- Hero Sectie  -->
    <section class="hero">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 order-2 order-md-1">
                    <div class="copy" data-aos="fade-up">
                        <div class="text-label">
                            Vind en boek live muziek.
                        </div>
                        <div class="text-hero-bold">
                            Maak je feest legendarisch met onze artiesten!
                        </div>
                        <div class="text-hero-regular">
                            Ben je op zoek naar fantastische live muziek, een swingende band, een ervaren DJ of een
                            getalenteerde solo-artiest voor je feest, evenement of bruiloft?
                        </div>
                        <div class="btn-container">
                            <a href="/artiesten" class="btn btn-primary shadow-none">Bekijk artiesten</a>
                            <a href="#" class="btn btn-secondary shadow-none">Plaats oproep</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 order-1 order-md-2" data-aos="fade-down">
                    <img src="/assets/imgs/hero-image.png" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <div class="genres">
        <div class="container text-center" style="padding-top: 25px;">
            <h2>Vier beste genres</h2>
            <p>We hebben nog veel meer!</p>
            <div class="genre-wrapper" style="padding-top: 25px;" data-aos="fade-left">
                <div class="genre">
                    <div class="image-container">
                        <img src="https://dz8pdz0wfluv5.cloudfront.net/production/pictures/images/000/047/515/original/bands.png?1644923887"
                            alt="Image 1" class="img-fluid">
                        <div class="image-text">Bands</div>
                    </div>
                </div>
                <div class="genre">
                    <div class="image-container">
                        <img src="https://dz8pdz0wfluv5.cloudfront.net/production/pictures/images/000/047/517/original/soloist.png?1644923584"
                            alt="Image 2" class="img-fluid">
                        <div class="image-text">Solo</div>
                    </div>
                </div>
                <div class="genre">
                    <div class="image-container">
                        <a href="/artiesten/ensemble">
                            <img src="https://dz8pdz0wfluv5.cloudfront.net/assets/ensemble.jpg" alt="Image 3"
                                class="img-fluid">
                            <div class="image-text">Ensemble</div>
                        </a>
                    </div>
                </div>
                <div class="genre">
                    <div class="image-container">
                        <img src="https://dz8pdz0wfluv5.cloudfront.net/production/pictures/images/000/047/668/original/5_Holiday_Traditions_to_try_this_year_%28400_%C3%97_400_px%29.png?1645537134"
                            alt="Image 4" class="img-fluid">
                        <div class="image-text">DJ's</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center mx-auto" style="padding-top: 25px;">
                    <div class="btn-container" style="padding-bottom: 25px">
                        <a href="#" class="btn btn-primary">Bekijk genres</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    <section class="about-section section bg-tertiary position-relative overflow-hidden">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="section-title" data-aos="fade-down">
                        <p class="text-primary text-uppercase fw-bold mb-3" style="color:var(--primary)!important;">Over
                            Inivec</p>
                        <h1>Inivec waar muziek &amp; <a style="font-size:29px!important;"> evenementen samenkomen</a></h1>
                        <p class="lead mb-0 mt-4">
                        </p>
                        <p>Ons doel is om een naadloze en stressvrije ervaring te bieden voor zowel artiesten als klanten.
                        </p><br>
                        <p>Onze uitgebreide selectie van artiesten maakt het eenvoudig om de perfecte entertainment te
                            vinden voor elk evenement. Van bruiloften tot bedrijfsfeesten, festivals tot intieme concerten,
                            we hebben de perfecte artiesten voor elke gelegenheid.</p>
                        <p></p>
                         {{-- <a class="btn btn-primary mt-4" href="about.html">Know About Us</a> --}}
                    </div>
                </div>
                <div class="col-lg-7 text-center text-lg-end" data-aos="fade-left">
                    <img loading="lazy" decoding="async" src="/assets/imgs/aboutus-image.png" alt="About Ourselves"
                        class="img-fluid">
                </div>
            </div>
            <div class="has-shapes">
                <svg class="shape shape-left text-light" width="381" height="443" viewBox="0 0 381 443"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M334.266 499.007C330.108 469.108 304.151 446.496 276.261 435.921C248.372 425.346 218.077 424.035 188.666 419.32C159.254 414.589 128.795 405.375 108.664 383.129C72.8533 343.535 83.3445 282.01 77.7634 228.587C69.3017 147.754 15.4873 73.3967 -58.0001 40.9907"
                        stroke="currentColor" stroke-miterlimit="10"></path>
                    <path
                        d="M349.584 485.51C345.427 455.611 319.469 433 291.58 422.425C263.69 411.85 233.395 410.538 203.984 405.823C174.573 401.092 144.114 391.878 123.982 369.632C88.1716 330.038 98.6628 268.513 93.0817 215.09C84.62 134.258 30.8056 59.8999 -42.6819 27.494"
                        stroke="currentColor" stroke-miterlimit="10"></path>
                    <path
                        d="M364.904 472.013C360.747 442.114 334.789 419.503 306.9 408.928C279.011 398.352 248.716 397.041 219.304 392.326C189.893 387.595 159.434 378.381 139.303 356.135C103.492 316.541 113.983 255.016 108.402 201.593C99.9403 120.76 46.1259 46.4028 -27.3616 13.9969"
                        stroke="currentColor" stroke-miterlimit="10"></path>
                    <path
                        d="M380.24 458.516C376.083 428.617 350.125 406.006 322.236 395.431C294.347 384.856 264.051 383.544 234.64 378.829C205.229 374.098 174.77 364.884 154.639 342.638C118.828 303.044 129.319 241.519 123.738 188.096C115.276 107.264 61.4619 32.906 -12.0255 0.500103"
                        stroke="currentColor" stroke-miterlimit="10"></path>
                </svg>
                <svg class="shape shape-right text-light" width="406" height="433" viewBox="0 0 406 433"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M101.974 -86.77C128.962 -74.8992 143.467 -43.2447 146.175 -12.7857C148.883 17.6734 142.273 48.1263 139.087 78.5816C135.916 109.041 136.681 141.702 152.351 167.47C180.247 213.314 240.712 218.81 289.413 238.184C363.095 267.516 418.962 340.253 430.36 421.687"
                        stroke="currentColor" stroke-miterlimit="10"></path>
                    <path
                        d="M118.607 -98.5031C145.596 -86.6323 160.101 -54.9778 162.809 -24.5188C165.517 5.94031 158.907 36.3933 155.72 66.8486C152.549 97.3082 153.314 129.969 168.985 155.737C196.881 201.581 257.346 207.077 306.047 226.451C379.729 255.783 435.596 328.52 446.994 409.954"
                        stroke="currentColor" stroke-miterlimit="10"></path>
                    <path
                        d="M135.241 -110.238C162.23 -98.3675 176.735 -66.7131 179.443 -36.254C182.151 -5.79492 175.541 24.6581 172.354 55.1134C169.183 85.573 169.948 118.234 185.619 144.002C213.515 189.846 273.98 195.342 322.681 214.716C396.363 244.048 452.23 316.785 463.627 398.219"
                        stroke="currentColor" stroke-miterlimit="10"></path>
                    <path
                        d="M151.879 -121.989C178.867 -110.118 193.373 -78.4638 196.081 -48.0047C198.789 -17.5457 192.179 12.9074 188.992 43.3627C185.821 73.8223 186.586 106.483 202.256 132.251C230.153 178.095 290.618 183.591 339.318 202.965C413.001 232.297 468.867 305.034 480.265 386.468"
                        stroke="currentColor" stroke-miterlimit="10"></path>
                </svg>
            </div>
        </div>
    </section>
    <section id="features" class="bg-white">
        <div class="container">
            <div class="section-content">
                <!-- Section Title -->
                <div class="title-wrap mb-5" data-aos="fade-up">
                    <h2 class="section-title text-center">
                        Hoe werkt <a style="color:var(--primary)">Inivec</a>
                    </h2>
                    <p class="section-sub-title text-center">Ontdek de kracht van Inivec - eenvoudig, snel en effectief.</p>
                </div>
                <!-- End of Section Title -->
                <div class="row">
                    <!-- Features Holder-->
                    <div class="col-md-10 offset-md-1 features-holder">
                        <div class="row">
                            <!-- Features Item -->
                            <div id="feature-1" class="col-md-4 col-sm-12 text-center mt-4">
                                <div class="shadow rounded feature-item p-4 mb-4" data-aos="fade-right">
                                    <div class="my-4">
                                        <i class="lnr lnr-cog fs-40"></i>
                                    </div>
                                    <h4>Artiest zoeken</h4>
                                    <p>Van zangers tot dansers, van bands tot DJ's, bij ons vindt u de artiest die past bij
                                        uw evenement.</p>
                                </div>

                            </div>
                            <!-- End of Feature Item -->
                            <!-- Features Item -->
                            <div id="feature-2" class="col-md-4 col-sm-12 text-center">
                                <div class="shadow rounded feature-item p-4 mb-4" data-aos="fade-up">
                                    <div class="my-4">
                                        <i class="lnr lnr-bubble fs-40"></i>
                                    </div>
                                    <h4>Contact met artiest</h4>
                                    <p>Bij ons heeft u direct contact met de artiest zelf, zodat u alle details kunt
                                        bespreken en afspraken kunt maken.</p>
                                </div>

                            </div>
                            <!-- End of Feature Item -->
                            <!-- Features Item -->
                            <div id="feature-3" class="col-md-4 col-sm-12 text-center mt-4">
                                <div class="shadow rounded feature-item p-4 mb-4" data-aos="fade-left">
                                    <div class="my-4">
                                        <i class="lnr lnr-clock fs-40"></i>
                                    </div>
                                    <h4>Wachten maar!</h4>
                                    <p>U bent klaar met uw aanvraag, nu hoeft u alleen nog maar even op het evenement te
                                        wachten!</p>
                                </div>
                            </div>
                            <!-- End of Feature Item -->
                        </div>
                    </div>
                    <!-- End of Features Holder-->
                </div>
            </div>
        </div>
    </section>
    <div class="events" id='events'>
        <div class="infotext text-center" style="padding-top: 100px;">
            <h2>Opkomende evenementen</h2>
            <div class="col-md-12">
                <a href="/events">
                    <p class="text-muted">Bekijk alle evenementen &#8594;</p>
                </a>
            </div>
            @foreach ($event as $events)
                <div class="artist-container" data-aos="fade-up">
                    <div class="artist">
                        <img src="{{ $events->event_img }}" class="artist-image">
                        <div class="artist-details">
                            <caption>Locatie: {{ $events->location }}</caption>
                            <a href="#" style="color: #000!important;">
                                <h3 class="artist-name">{{ $events->eventname }}</h3>
                            </a>
                            <h4 class="price-range">{{ $events->event_date }} - {{ $events->event_till }}</h4>
                            <h5>Prijs: {{ $events->price }} </h5>
                            <p class="biography">{{ $events->bio }}</p>

                            <div class="buttons">
                                <a href="/events/{{ $events->eventname }}" class="btn btn-primary">Bekijk meer</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div id='pagination' class="m-4">
                {!! $event->fragment('events')->render() !!}
            </div>
            <hr style="width: 50%;border-width: 2px;">
        </div>
    </div>
    <footer class="footer-distributed">

        <div class="footer-left">
            <h3><span>Inivec</span></h3>

            <p class="footer-links">
                <a href="#">Home</a>
                |
                <a href="#">About</a>
                |
                <a href="#">Contact</a>
            </p>

            <p class="footer-company-name">Copyright © 2023 <strong>Inivec</strong> All rights reserved</p>
        </div>

        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span></span>
                    Nederland</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>--</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:klantenservice@inivec.nl">klantenservice@inivec.nl</a></p>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-company-about">
                <span>Over Inivec</span>
                <strong>Inivec</strong> is een bedrijf dat zich richt op beginnende artiesten.
                Wij helpen artiesten om een leuk optreden te kunnen geven aan jullie.
            </p>
            <div class="footer-icons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-youtube"></i></a>
            </div>
        </div>
    </footer>
