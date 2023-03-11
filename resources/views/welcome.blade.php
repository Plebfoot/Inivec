@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="nav">
            <nav>
                <h1 class="logo"><a href="/">Inivec</a></h1>
                @if (Auth::check())
                <ul>
                    <li><a href="#">Óver ons</a></li>
                    <li><a href="#">Contact ons</a></li>
                </ul>
                    <a href="/home" style="text-decoration: none;"><button type="button" class="btn"
                            style="text-decoration: none;">Dashboard</button></a>
                @else
                <ul>
                    <li><a href="#">Óver ons</a></li>
                    <li><a href="#">Contact ons</a></li>
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
                        <div class="showcase-image"><a href="{{ route('profiles', $artist->name) }}"><img src="{{ asset("storage/$artist->image_url") }} "></a></div>
                        <div class="showcase-info">
                            <a href="{{ route('profiles', $artist->name) }}" style="text-decoration: none; color:black;" ><h3>{{ $artist->name }}</h3></a>
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

    </div>
    <div class="container_artists">
        <div class="arists_button">
            <a href="/artiesten" style="text-decoration: none;"><button class="btn">Zie alle artiesten</button></a>
        </div>
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
    </div>
    </div>
@endsection
