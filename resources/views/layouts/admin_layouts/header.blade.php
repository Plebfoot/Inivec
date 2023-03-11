<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login - Inivec</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome/css/font-awesome.min.css') }}">


</head>

<body>
    <nav>
        <h1 class="logo"><a href="/">Inivec</a></h1>
        <ul>
            <li><a href="/home">Dashboard</a></li>
            <li><a href="/instellingen">Profiel Instellingen</a></li>
            <li><a href="{{ route('logout') }}"  onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Uitloggen</a></li>
        </ul>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </nav>
    <div class="wrapper">
        <div class="container-login main">
       
            @yield('content')

        </div>
    </div>
    <div class="footer">
        <p>© 2023 Inivec | <a href="https://www.inivec.nl"
                style="text-decoration: none; pointer: cursor; color:black;">www.inivec.nl</a></p>
    </div>
</body>

</html>