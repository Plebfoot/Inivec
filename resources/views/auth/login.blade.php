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
    <link rel="stylesheet" href="{{ asset('assets/css/admin/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome/css/font-awesome.min.css') }}">


</head>

<body>
    <nav>
        <h1 class="logo"><a href="/">Inivec</a></h1>
        <ul>
            <li><a href="#">Óver ons</a></li>
            <li><a href="#">Contact ons</a></li>
            <li><a href="/inschrijven">Inschrijven</a></li>
        </ul>
    </nav>
    <div class="wrapper">
        <div class="container-login main">
            <div class="row">
                <div class="col-md-6 side-image">
                </div>
                <div class="col-md-6 right">
                    <div class="input-box">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                           
                            <div class="input-field">
                                <input id="email" type="email"
                                class="input @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                                
                                <label for="email">Email</label>
                            </div>
                            <div class="input-field">
                                <input id="password" type="password"
                                class="input @error('password') is-invalid @enderror" name="password"
                                required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="password">Wachtwoord</label>
                            </div>

                            <div class="input-field">
                              <input type="submit" class="submit" value="Login">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer-distributed">

        <div class="footer-left">
            <h3><span>Inivec</span></h3>

            <p class="footer-links">
                <a href="#">Home</a>
                |
                <a href="#">About</a>
                |
                <a href="#">Contact</a>
            </p>

            <p class="footer-company-name">Copyright © 2023 <strong>Inivec</strong> All rights reserved</p>
        </div>

        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span></span>
                    Nederland</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>--</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:klantenservice@inivec.nl">klantenservice@inivec.nl</a></p>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-company-about">
                <span>Over Inivec</span>
                <strong>Inivec</strong> is een bedrijf dat zich richt op beginnende artiesten. 
                Wij helpen artiesten om een leuk optreden te kunnen geven aan jullie.
            </p>
            <div class="footer-icons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-youtube"></i></a>
            </div>
        </div>
    </footer>
</body>

</html>

