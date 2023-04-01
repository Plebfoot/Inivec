@extends('layouts.layout')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
<link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css">

@section('content')
    <!-- Navbar sectie -->

    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="/assets/imgs/logo.jpg" alt="brand" width="120px">
                <span>Inivec</span>
            </a>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="bx bx-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-link active" aria-current="page" href="#">Product</a>
                    <a class="nav-link" href="#">Features</a>
                    <a class="nav-link" href="#">About</a>
                    <a class="nav-link" href="#">Contact</a>
                </div>
                <a href="/login" class="btn btn-primary shadow-none">Login</a>
            </div>
        </div>
    </nav>
    <!-- Hero Sectie  -->
    <section class="hero">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
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
                        <div class="cta">
                            <a href="/artiesten" class="btn btn-primary shadow-none">Bekijk artiesten</a>
                            <a href="#" class="btn btn-secondary shadow-none ml-3">Plaats oproep</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <img src="/assets/imgs/hero-image.png">
                </div>
            </div>

        </div>
    </section>
    <div class="genres">
        <div class="container text-center" style="padding-top: 25px;">
            <h2>Vier beste genres</h2>
            <p>We hebben nog veel meer!</p>
            <div class="row">
                <div class="col-md-3">
                    <div class="image-container">
                        <img src="https://dz8pdz0wfluv5.cloudfront.net/production/pictures/images/000/047/515/original/bands.png?1644923887"
                            alt="Image 1" class="img-fluid">
                        <div class="image-text">Bands</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="image-container">
                        <img src="https://dz8pdz0wfluv5.cloudfront.net/production/pictures/images/000/047/515/original/bands.png?1644923887"
                            alt="Image 2" class="img-fluid">
                        <div class="image-text">Solo</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="image-container">
                        <a href="/artiesten/ensemble">
                            <img src="https://dz8pdz0wfluv5.cloudfront.net/production/pictures/images/000/047/515/original/bands.png?1644923887"
                                alt="Image 3" class="img-fluid">
                            <div class="image-text">Ensemble</div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="image-container">
                        <img src="https://dz8pdz0wfluv5.cloudfront.net/production/pictures/images/000/047/515/original/bands.png?1644923887"
                            alt="Image 4" class="img-fluid">
                        <div class="image-text">DJ's</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center mx-auto" style="padding-top: 10px;">
                <a href="#" class="btn btn-primary">Bekijk genres</a>
            </div>
        </div>
    </div>
    <div class="events" id='events'>
        <div class="infotext text-center" style="padding-top: 25px;">
            <h2>Opkomende evenementen</h2>
            @foreach ($event as $events)
                <div class="artist-container">
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
                                <a href="#" class="btn btn-primary">Bekijk meer</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div id='pagination' class="m-4">
                {!! $event->fragment('events')->render() !!}
            </div>
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




    {{--
    <section class="artiesten">
        <div class="artiest-inschrijven">
            <h2>Word een artiest</h2>
            <p>Als artiest krijg je de kans om je talent te laten zien aan een breed publiek en je netwerk uit te breiden.
                Registreer nu en begin met het delen van je talent met de wereld!</p>
            <div class="buttons">
                <a href="/inschrijven" class="btn-bookprofile">Inschrijven</a>
            </div>
        </div>
        <div class="oproep-plaatsen">
            <h2>Oproep plaatsen</h2>
            <p>Plaats een oproep voor artiesten of evenementen en bereik een breed publiek van getalenteerde artiesten.
                Registreer nu en begin met het vinden van het talent dat je nodig hebt!</p>
            <div class="buttons">
                <a href="#" class="btn-bookprofile">Oproep plaatsen</a>
            </div>
        </div>
    </section>
    <div class="events" id='events'>
        <div class="infotext">
            <h2>Opkomende evenementen</h2>
            @foreach ($event as $events)
                <div class="artist-container">
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
                                <a href="#" class="btn-bookprofile">Bekijk meer</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="m-4">
                {!! $event->fragment('events')->render() !!}
            </div>
        </div>
    </div>
    <section class="why-choose-us">
        <h2>Waarom kiezen voor Inivec?</h2>
        <div class="reasons">
            <div class="reason">
                <h3>Breed aanbod van artiesten</h3>
                <p> Inivec heeft een uitgebreid netwerk van artiesten, variërend van muzikanten en bands tot solo-artiesten.
                    Klanten hebben daardoor veel keuze en kunnen altijd een artiest vinden die past bij hun wensen.</p>
            </div>
            <div class="reason">
                <h3>Persoonlijke service</h3>
                <p>Inivec biedt persoonlijke service aan klanten, waarbij er goed geluisterd wordt naar de wensen en
                    behoeften van de klant. Hierdoor kan Inivec een op maat gemaakte oplossing bieden die perfect aansluit
                    bij de specifieke situatie van de klant.</p>
            </div>
            <div class="reason">
                <h3>Direct contact met de artiest</h3>
                <p>Bij Inivec hebben klanten direct contact met de artiest die ze willen huren. Hierdoor kunnen ze hun
                    wensen en verwachtingen rechtstreeks met de artiest bespreken en eventuele vragen of onduidelijkheden
                    direct aan de artiest stellen. </p>
            </div>
        </div>
    </section>
    <div class="news">
        @foreach ($news as $news)
            <article>
                {{ $news->naam }} <br>
                {{ $news->small_bericht }} <br>
                {{ $news->username }} <br>
                {{ $news->created_at }} <br>
            </article>
        @endforeach

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
    </footer> --}}
@endsection
