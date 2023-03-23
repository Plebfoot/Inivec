<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Inschrijven - Inivec</title>

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
                <li><a href="#">Óver ons</a></li>
                <li><a href="#">Contact ons</a></li>
                <li><a href="/inschrijven">Inschrijven</a></li>
                <li><a href="/login">Login</a></li>

            </ul>
        </nav>
    <div class="wrapper">
        <div class="container-login main">
            <div class="row">
                <div class="col-md-6 side-image">
                    {{-- <div class="text">
                        <p>Login bij je dashboard <i>Inivec</i></p>
                    </div> --}}
                </div>
                <div class="col-md-6 right">
                    <div class="input-box">
                        <div class="input-field">
                            <input type="text" class="input" id="naam" required autocomplete="off">
                            <label for="email">Naam en achternaam</label>
                        </div>
                        <div class="input-field">
                            <input type="email" class="input" id="email" required>
                            <label for="password">Email</label>
                        </div>
                        <div class="input-field">
                            <input type="text" class="input" id="tags" required>
                            <label for="password">Tags</label>
                        </div>
                        <div class="input-field">
                            <input type="text" class="input" id="biografie" required>
                            <label for="bio">Biografie</label>
                        </div>
                        <div class="input-field">
                            <p>Muziek</p>
                            <input type="file" class="input" required>
                        </div>
                        <div class="input-field">
                            <input type="submit" class="submit" value="Stuur door">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <p>© 2023 Inivec | <a href="https://www.inivec.nl" style="text-decoration: none; pointer: cursor; color:black;">www.inivec.nl</a></p>
      </div>
</body>

</html>
