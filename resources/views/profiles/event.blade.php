@extends('layouts.header')

<title>Inivec - {{ $event->eventname }}</title>
<link rel="stylesheet" href="{{ asset('assets/css/artiesten/book.css') }}">

@section('content')

        @dump($event)

@endsection

