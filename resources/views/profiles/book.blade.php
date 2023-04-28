@extends('layouts.layout')

<title>Inivec - {{ $username->username }}</title>
<link rel="stylesheet" href="{{ asset('assets/css/artiesten/book.css') }}">

@section('content')
    <div class="header__wrapper">
       <div class="banner">
        <h1> Boek {{ $artist->username }} nu! </h1>
       </div>
</div>
@endsection

