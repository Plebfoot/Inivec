@extends('layouts.header')

<link rel="stylesheet" href="{{ asset('assets/css/artiesten/main.css') }}">
<title>Inivec - Artiesten </title>

@section('content')
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
