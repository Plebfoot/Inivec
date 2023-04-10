@extends('layouts.layout')

<head>
<link rel="stylesheet" href="{{ asset('assets/css/artiesten/main.css') }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
<link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css">
<meta content="Inivec" property="og:title" />
<meta content="Maak je feest legendarisch met onze artiesten!" property="og:description" />
<meta content="https://www.inivec.nl" property="og:url" />
<meta content="#43B581" data-react-helmet="true" name="theme-color" />
<title>Inivec - Artiesten </title>
</head>
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
    <div class="wrapper">
        <div class="banner">
            <h1>Boek Artiesten Online</h1>
            <hr>
            <div class="search-bar">
                <input type="text" placeholder="Zoek artiesten">
                <button><i class="fa fa-search"></i></button>
            </div>
        </div>
        @foreach ($artists as $artist)
            <div class="artist-container">
                <div class="artist">
                    <img src="{{ asset("storage/$artist->profile_img") }}" alt="{{ $artist->username }}"
                        class="artist-image">
                    <div class="artist-details">
                        <caption>{{ $artist->tags }}</caption>
                        <a href="{{ route('profiles', $artist->username) }}" style="color: #000!important;"><h3 class="artist-name">{{ $artist->username }}</h3></a>
                        <h2 class="price-range">€{{ $artist->price_range }}</h2>
                        <p class="tags">{{ $artist->music_tags }}</p>
                        <p class="biography">{{ $artist->bio }}</p>
                     
                        <div class="buttons">
                            <div class="rating">
                              @for ($i = 1; $i <= 5; $i++)
                                  @if ($i <= $artist->rating)
                                      <span class="fa fa-star checked"></span>
                                  @else
                                      <span class="fa fa-star"></span>
                                  @endif
                              @endfor
                          </div>
                            <a href="{{ route('booking', $artist->username) }}" class="btn-bookprofile">Boek nu</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="m-4">
            {{ $artists->onEachSide(1)->links() }}
        </div>
    </div>
@endsection
