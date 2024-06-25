<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])

</head>

<body>
    <img class="hero-image" src="{{ asset('images/hero.jpg') }}" alt="Hero">
    <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-custom" style="background-color: #001535;>
        <div class=" container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Plants as decor</a>
                </li>
            </ul>
        </div>
        </div>
    </nav>

    <h1 style="text-align: center ">Products</h1>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card h-100">
                <h5 class="card-title">Card title</h5>
                <img src="{{ asset('images/produs1.png') }}" class="card-img-top" alt="Produs1">
                <div class="card-body">

                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer">
                    <small class="text-body-secondary">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <h5 class="card-title">Card title</h5>
                <img src="{{ asset('images/produs2.png') }}" class="card-img-top" alt="Produs2">
                <div class="card-body">

                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.
                    </p>
                </div>
                <div class="card-footer">
                    <small class="text-body-secondary">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <h5 class="card-title">Card title</h5>
                <img src="{{ asset('images/produs3.png') }}" class="card-img-top" alt="Produs3">
                <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This card has even longer content than the first to show that equal height
                        action.</p>
                </div>
                <div class="card-footer">
                    <small class="text-body-secondary">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
    </div>

    <style>
        .hero-image {
            width: 1920px;
            height: 780px;
            gap: 0px;
            opacity: 0px;

        }

        .navbar-custom {
            background-color: #001535;
            opacity: 81%;
            border-radius: 25px;
            position: absolute;
            top: 20px;
            width: 100%;
            text-align: center;
        }

        .navbar-custom .navbar-toggler {
            color: white !important;
            border-color: white !important;
        }

        .navbar-custom .navbar-nav {
            justify-content: flex-end;
        }

        .navbar-custom .nav-link {
            color: white !important;
            font-weight: bold;
            padding: 0.5rem 1rem;
        }

        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 470px;
            height: 540px;
            top: 20px;
            left: 163px;
            gap: 0px;
            opacity: 0px;

        }

        .card-img-top {
            width: 100%;
            height: 600px;
            object-fit: cover;
        }

        .card-title {
            font-family: Newsreader;
            font-size: 34px;
            font-weight: 400;
            line-height: 34px;
            text-align: center;

        }
    </style>


    @yield('content')
    <footer>

    </footer>
</body>

</html>