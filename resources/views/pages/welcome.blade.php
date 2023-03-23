@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="nav">
            <nav>
                <h1 class="logo"><a href="/">Inivec</a></h1>
                @if (Auth::check())
                    <ul>
                        <li><a href="#">Óver ons</a></li>
                        <li><a href="/artiesten">Artiesten</a></li>
                        <li><a href="#">Contact ons</a></li>
                    </ul>
                    <a href="/home" style="text-decoration: none;"><button type="button" class="btn"
                            style="text-decoration: none;">Dashboard</button></a>
                @else
                    <ul>
                        <li><a href="#">Óver ons</a></li>
                        <li><a href="/artiesten">Artiesten</a></li>
                        <li><a href="/inschrijven">Inschrijven</a></li>
                    </ul>
                    <a href="/login" style="text-decoration: none;"><button type="button" class="btn"
                            style="text-decoration: none;">Login</button></a>
                @endif
            </nav>
        </div>
        <div class="header">
            <div class="header-content">
                <h1>Inivec<br>
                    <p>Vind en boek live muziek.</p>
                </h1>
                <p>Bands, DJs en solo-artiesten inhuren. <br>Zonder commissies.</p>
                <form>
                    <input type="text" placeholder="Trefwoorden...">
                    <button type='submit' class='btn'>Zoek</button>
                </form>
            </div>
            <div class="header-content">
                <h2>Willekeurige artiest</h2>
                <div class="artist-showcase">
                    <div class="showcase-image"><a href="{{ route('profiles', $artist->username) }}"><img
                                src="{{ asset("storage/$artist->profile_img") }} "></a></div>
                    <div class="showcase-info">
                        <a href="{{ route('profiles', $artist->username) }}" style="text-decoration: none; color:black;">
                            <h3>{{ $artist->username }}</h3>
                        </a>
                        <caption>{{ $artist->tags }}</caption>
                        <div class="rating">
                            @for ($i = 1; $i <= 5; $i++)
                                @if ($i <= $artist->rating)
                                    <span class="fa fa-star checked"></span>
                                @else
                                    <span class="fa fa-star"></span>
                                @endif
                            @endfor
                        </div>
                        <span class="tags">{{ $artist->music_tags }}</span> </br>
                        <span class="price">€{{ $artist->price_range }}</span>
                    </div>
                    <div class="video">
                        <img src="{{ asset('assets/imgs/band.jpg') }}">
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="section-regular neutral-100">
            <div class="container-regular">
                <div data-w-id="37957543-e9bd-2ee5-9d77-68c8ee874409"
                    style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 1; transform-style: preserve-3d;"
                    class="title-wrap-row">
                    <div class="title-wrap-left">
                        <div class="margin-bottom-16">
                            <h3>De vier beste genres</h3>
                        </div>
                        <p class="paragraph-regular text-gray-600">We hebben nog heel veel meer genres!</p>
                    </div>
                </div>


            </div>
            <div class="container_artists">

                <div class="imgs">
                    <a class="type-item darken">
                        <img class="type-img img-responsive center-block" alt="Boek een band"
                            src="https://dz8pdz0wfluv5.cloudfront.net/production/pictures/images/000/047/515/original/bands.png?1644923887">
                    </a>
                </div>
                <div class="imgs">
                    <a class="type-item darken" href="#">
                        <img class="type-img img-responsive center-block" alt="Boek een band"
                            src="https://dz8pdz0wfluv5.cloudfront.net/production/pictures/images/000/047/515/original/bands.png?1644923887">
                    </a>
                </div>
                <div class="imgs">
                    <a class="type-item darken" href="#">
                        <img class="type-img img-responsive center-block" alt="Boek een band"
                            src="https://dz8pdz0wfluv5.cloudfront.net/production/pictures/images/000/047/515/original/bands.png?1644923887">
                    </a>
                </div>
                <div class="imgs">
                    <a class="type-item darken" href="#">
                        <img class="type-img img-responsive center-block" alt="Boek een band"
                            src="https://dz8pdz0wfluv5.cloudfront.net/production/pictures/images/000/047/515/original/bands.png?1644923887">
                    </a>
                </div>
                {{-- <div class="arists_button">
            <a href="/artiesten" style="text-decoration: none;"><button class="btn">Zie alle artiesten</button></a>
        </div> --}}
            </div>
        </div>
    </div>
    <div class="info">
        <div class="infotext">
            <h2>Waarom kiezen voor Inivec?</h2>

        </div>
    </div>
    <div class="other">
        <div class="infotext">
            <h2>Artiesten inschrijven</h2>
        </div>
    </div>
    <div class="info">
        <div class="infotext">
            <h2>Greep in de database</h2>
        </div>
    </div>
    <div class="other">
        <div class="infotext">
            <h2>Nieuws & Niet zeker shit</h2>
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
@endsection
