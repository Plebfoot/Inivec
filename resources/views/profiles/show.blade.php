@extends('layouts.header')

<title>Inivec - {{ $username->username }}</title>
<script src="/assets/js/main.js"></script>

@section('content')
    <div class="header__wrapper">
        <header></header>
        <div class="cols__container">
            <div class="left__col">
                <div class="img__container">
                    <img src="/assets/imgs/person.jpg" />
                </div>
                <h2>{{ $artist->name }}</h2>
                <p>{{ $artist->music_tags }}</p>
                <p>€{{ $artist->price_range }}</p>
                <p>{{ $artist->tijd_indicatie }} minuten</p>

                <ul class="about">
                    <li class="list"><span>{{ $artist->lids }}</span>Leden</li>
                    <li class="list"><span>Covers, Eigen</span>Speelt</li>
                    <li class="list"><span>12</span>Boekingen</li>
                </ul>

                <div class="content">
                    <p>
                        {{ $artist->bio }}
                        </span>
                    </p>
                    <a onclick="readFunction()" id="readBtn" href="#">Lees Meer</a>
                </div>

            </div>
            <div class="userInfo">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $artist->video_url }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <div class="music">
                    <h3>Nummers</h3>
                    <p>Fl</p>
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection
