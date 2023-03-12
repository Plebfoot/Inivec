@extends('layouts.admin_layouts.header')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
@section('content')
    <div class="row justify-content-center" style="width: 100%; height: auto;">
        <div class="container mt-4">

            <form method="POST" enctype="multipart/form-data" id="profile_setup_frm" action="{{ route('update.profile') }}">
                    <div id="imgChanger" class="col-md-4 border-right">
                        <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                            @php($profile_img = auth()->user()->profile_img)
                            <img id="userImage" class="rounded-circle mt-5"
                                src="@if ($profile_img == null) {{ asset('storage/profile_images/person.jpg') }}  @else {{ asset("storage/$profile_img") }} @endif"
                                id="image_preview_container">
                            <span id="input" class="font-weight-bold">
                                <input type="file" name="profile_image" id="profile_image" class="form-control">
                            </span>
                        </div>
                    </div>
                    <div class="col-md-8 border-right">
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-right">Profiel Instellingen</h4>
                            </div>

                            <div class="mt-2">

                                <div class="col-md-6">
                                    <label class="labels">Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="first name"
                                        value="{{ auth()->user()->name }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="labels">Email</label>
                                    <input type="text" name="email" disabled class="form-control"
                                        value="{{ auth()->user()->email }}" placeholder="Email">
                                </div>
                            </div>

                            <div class="mt-5 text-center"><button id="btn" class="btn btn-primary profile-button"
                                    type="submit">Save Profile</button>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
    </div>
    <script src="assets/js/main.js"></script>
@endsection
