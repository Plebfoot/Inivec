<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inivec - 404</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome/css/font-awesome.min.css') }}">
</head>


<body>
    <div class="d-flex align-items-center justify-content-center vh-100">
        <div class="text-center">
            <h1 class="display-1 fw-bold">404</h1>
            <p class="fs-3"> <span class="text-danger">Oops!</span> Page not found.</p>
            <p class="lead">
                The page you’re looking for doesn’t exist.
              </p>
            <a href="/" class="btn btn-primary">Go Home</a>
        </div>
    </div>
</body>

<script>
    AOS.init();
</script>

</html>
