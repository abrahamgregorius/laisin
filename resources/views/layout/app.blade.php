<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laisindo Autoparts</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light border-bottom border-3 border-warning">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold fs-3" href="{{ route('home.index') }}">Laisindo Autoparts</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a href="{{ route('home.index') }}" class="nav-link @if(request()->routeIs('home.index')) active @endif">Home</a>
                    <a href="{{ route('products.index') }}" class="nav-link @if(request()->routeIs('products.index')) active @endif">Products</a>
                    <a href="{{ route('contacts.index') }}" class="nav-link @if(request()->routeIs('contacts.index')) active @endif">Contact</a>
                    <a href="{{ route('products.index') }}" class="btn btn-warning d-none d-lg-inline fw-semibold"><span class=""></span>Find A Part</a>
                </div>
            </div>
        </div>
    </nav>
    

    <div class="container mt-3">
        @yield('content')
    </div>

    <script src="{{ asset('bootstrap.min.js') }}"></script>
</body>
</html>