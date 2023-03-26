@extends('layouts.header')

<title>Inivec - {{ $username->username }}</title>
<script src="/assets/js/main.js"></script>


@section('content')
    <div class="header__wrapper">
       <div class="banner">
        <h1> Boek {{ $artist->username }} nu! </h1>
       </div>
</div>

@endsection

