@extends('layouts.layout')

<title>Inivec - {{ $event->eventname }}</title>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css">
    <meta content="Inivec" property="og:title" />
    <meta content="Maak je feest legendarisch met onze artiesten!" property="og:description" />
    <meta content="https://www.inivec.nl" property="og:url" />
    <meta content="#43B581" data-react-helmet="true" name="theme-color" />
    <link rel="stylesheet" href="{{ asset('assets/css/artiesten/event.css') }}">
</head>


@section('content')
<section class="event-section">
    <div class="container event-container">
        <div class="row">
                <div class="col-md-4">
                        <!-- Event afbeelding -->
                        <img src="{{ $event->event_img }}" alt="{{$event->eventname}}" class="img-fluid event-image">
                    </div>
            <div class="col-md-8">
                <!-- Event naam -->
                <h1>{{ $event->eventname }}</h1>
                <!-- Event bio -->
                <p>{{ $event->bio }}</p>
                <!-- Event datum en locatie -->
                <p><strong>Datum:</strong> {{ $event->event_date }} - {{$event->event_till}}</p>
                <p><strong>Locatie:</strong> {{ $event->location }}</p>
                <!-- Event prijs en tickets -->
                <p><strong>Prijs:</strong> {{ $event->price }}</p>
                <a href="#" class="btn btn-primary">Koop Tickets</a>
                <!-- Meer informatie -->
                <a href="#">Meer Informatie</a>
            </div>
        </div>
    </div>
</section>
@endsection
