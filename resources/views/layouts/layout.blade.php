<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Inivec</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.2.0/css/all.css" />

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome/css/font-awesome.min.css') }}">




    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>



</head>

<body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
    <!-- Navbar sectie -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid justify-content-between">
            <a class="navbar-brand" href="/">
                <span>Inivec</span>
            </a>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="bx bx-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-link active" aria-current="page" href="#">Over Ons</a>
                    <a class="nav-link" href="/artiesten">Artiesten</a>
                    <a class="nav-link" href="/inschrijven">Inschrijven</a>
                </div>
                @if (Auth::check())
                    <a href="/home" class="btn btn-primary shadow-none">Dashboard</a>
                @else
                    <a href="/login" class="btn btn-primary shadow-none">Login</a>
                @endif
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- Footer sectie -->
    <footer class="footer-distributed">

        <div class="footer-left">
            <h3><span>Inivec</span></h3>

            <p class="footer-links">
                <a href="#">Home</a>
                |
                <a href="/terms">Algemene Voorwaarden</a>
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

<script>
    AOS.init();
    var occasionSelect = document.getElementById("occasion");
    var otherOccasionDiv = document.getElementById("other-occasion");

    occasionSelect.addEventListener("change", function() {
        if (occasionSelect.value === "Anders") {
            otherOccasionDiv.style.display = "block";
        } else {
            otherOccasionDiv.style.display = "none";
        }
    });
</script>

</html>
