<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/admin/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome/css/font-awesome.min.css') }}">

</head>
<div class="hero">
    <nav>
        @php($profile_img = Auth::user()->profile_img);
        <a href="/" class="logo">Inivec</a>
        <ul>
            <li><a href="">Over ons</a></li>
            <li><a href="">Contact</a></li>
        </ul>
        <img src="@if ($profile_img == null) {{ asset('storage/profile_images/person.jpg') }}  @else {{ asset("storage/$profile_img") }} @endif "
            onclick="toggleMenu()" class="user-pic">
        <div class="sub-menu-wrap" id="subMenu">
            <div class="sub-menu">
                <div class="user-info">
                    <img
                        src="@if ($profile_img == null) {{ asset('storage/profile_images/person.jpg') }}  @else {{ asset("storage/$profile_img") }} @endif">
                    <h2>{{ Auth::user()->name }} </h2>
                </div>
                <hr>

                <a href="/home" class="sub-menu-link">
                    <img src="{{ asset('assets/imgs/nav_imgs/profile.png') }}">
                    <p>Dashboard</p>
                    <span>></span>
                </a>

                <a href="/instellingen" class="sub-menu-link">
                    <img src="{{ asset('assets/imgs/nav_imgs/setting.png') }}">
                    <p>Instellingen & Privacy</p>
                    <span>></span>
                </a>

                <a href="{{ route('logout') }}" class="sub-menu-link" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    <img src="{{ asset('assets/imgs/nav_imgs/logout.png') }}">
                    <p>Uitloggen</p>
                    <span>></span>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    </nav>


<body>

    <div class="wrapper">
        <div class="container-login main" style="padding-top: 10px;">

            @yield('content')

        </div>
    </div>
    <div class="footer">
        <p>© 2023 Inivec | <a href="https://www.inivec.nl"
                style="text-decoration: none; pointer: cursor; color:black;">www.inivec.nl</a></p>
    </div>
</body>
</div>
    <!-- Javascript -->
    <script src="{{ asset('assets/js/admin/main.js') }}"></script>
</html>
