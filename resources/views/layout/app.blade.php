<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laisindo Autoparts</title>
    <link rel="stylesheet" href="{{ asset('laisin-css/homepage.css') }}">
    <link rel="stylesheet" href="{{ asset('laisin-css/products.css') }}">
    <link rel="stylesheet" href="{{ asset('laisin-css/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/laisin-favicon.png') }}" type="image/x-icon">
</head>
<body>
    {{-- Navbar --}}
    <header>
        <nav class="laisin-navbar container">
            <div class="laisin-brand">
                <img src="{{ asset("assets/laisin.png") }}" alt="">
            </div>
            <ul class="laisin-menu">
                <li class="@if(request()->routeIs('home.index')) laisin-active @endif"><a href="{{ route('home.index') }}">Home</a></li>
                <li class="@if(request()->routeIs('products.index')) laisin-active @endif"><a href="{{ route('products.index') }}">Products</a></li>
                <li class="@if(request()->routeIs('contacts.index')) laisin-active @endif"><a href={{ route('contacts.index') }}>Contact</a></li>
                <li class="@if(request()->routeIs('products.index')) {{-- laisin-active --}} @endif">
                    <a href={{ route('products.index') }}>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                     Find A Part
                  </a>
                </li>
            </ul>
            <div class="hamburger">
                <div class="not-open">
                    <svg fill="white" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                </div>
                <div class="open hide">
                    <svg fill="white" xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                      </svg>
                </div>

            </div>
        </nav>
    </header>
    <div class="mobile-nav">
        <div class="close-mobile-nav">
            <svg fill="white" xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
              </svg>
        </div>
        <ul class="laisin-menu-mobile">
            <li><a href="{{ route('home.index') }}">Home</a></li>
            <li><a href="{{ route('products.index') }}">Products</a></li>
            <li><a href={{ route('contacts.index') }}>Contact</a></li>
            <li>
                <a href={{ route('products.index') }}>
                 Find A Part
              </a>
            </li>
        </ul>
    </div>

    <main>
        @yield('content')
    </main>

    <script src={{ asset('laisin-js/hamburger.js') }}></script>
    <script src="{{ asset('bootstrap.min.js') }}"></script>
</body>
</html>
