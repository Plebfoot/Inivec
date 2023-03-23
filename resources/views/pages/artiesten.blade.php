@extends('layouts.header')

<link rel="stylesheet" href="{{ asset('assets/css/artiesten/main.css') }}">
<title>Inivec - Artiesten </title>

@section('content')
    <div class="info">
        <div class="header">
            <h1>Boek onze artiesten online</h1>
            <hr>
            <br>
        </div>
        @foreach ($artists as $artist)
            <div class="artist-showcase">
                <div class="text">
                    <small>€{{ $artist->price_range }}</small>
                    <h1>{{ $artist->username }} </h1>
                    <p>{{ $artist->bio }}</p>
                    <a class="text" href="{{ route('profiles', $artist->username) }}">Bekijk artiest &rarr;</a>
                </div>
                <div class="artist_image">
                    <img src="{{ asset("storage/$artist->profile_img") }} ">
                </div>
            </div>
            <br>

            {{-- <div class="artist-showcase">
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
            </div> --}}
        @endforeach
    </div>
@endsection
