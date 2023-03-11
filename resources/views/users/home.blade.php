@extends('layouts.admin_layouts.header')

@section('content')
    @csrf
    <div class="test">
        <div class="row justify-content-center">
            <h1 style="text-align: center; padding-top: 10px;">Welkom {{ Auth::user()->name }}</h1>
        </div>
    </div>
@endsection
