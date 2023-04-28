@extends('layouts.admin_layouts.header')

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css">
    <meta content="Inivec" property="og:title" />
    <meta content="Maak je feest legendarisch met onze artiesten!" property="og:description" />
    <meta content="https://www.inivec.nl" property="og:url" />
    <meta content="#43B581" data-react-helmet="true" name="theme-color" />

</head>

@section('content')
    <div class="row justify-content-center" style="width: 100%; height: auto;">
        <div class="container mt-4">
            <table class="table table-hover">
                <h1 class="text-center" style="padding-bottom:25px;">
                    Oproepen
                </h1>
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Evenement</th>
                        <th scope="col">Budget</th>
                        <th scope="col">Locatie</th>
                        <th scope="col">Type act</th>
                        <th scope="col">Bekijk meer</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($call as $calls)
                        <tr>
                            <th scope="row" style="padding-top:10px;">{{ $loop->iteration }}</th>
                            <td>{{ $calls->occasion }}</td>
                            <td>€{{ $calls->budget }}</td>
                            <td>{{ $calls->location }}</td>
                            <td>{{ $calls->act_type }}</td>
                            <td>
                                <div class="buttons">
                                    <a href="/calls/{{ $loop->iteration }}" class="btn btn-primary">Bekijk meer</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div id='pagination' class="m-4">
                {!! $call->fragment('calls')->render() !!}
            </div>
        </div>
    </div>
@endsection
