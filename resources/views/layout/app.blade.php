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
    @include('layout.components.footer')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

    <footer>
        <img src="{{ asset("assets/image3.jpg") }}" alt="img" loading="lazy" style="position: absolute; object-fit: cover; width: 100%; height: 70%; opacity:5%; top:0; user-select: none; pointer-events: none; z-index:1">
        <div class="container mx-auto">
            
            <div class="footer-top row">
                
                <div class="footer-brands col-md-4">
                    <img src="{{ asset('assets/laisin.png') }}" alt="">
                </div>
                <div class="footer-menus col-md-8">
                    <ul class="menu-1">
                         <li class="menu-head">LINKS<li>
                         <li class="menu-link">Home</li>
                         <li class="menu-link">Products</li>
                         <li class="menu-link">Contact</li>
                         <li class="menu-link">Find A Parts</li>
                    </ul>
                    <ul class="menu-2">
                       <li class="menu-head">PRODUCTS</li>
                       <li class="menu-link">Toyota</li>
                       <li class="menu-link">Ford</li>
                       <li class="menu-link">Scania</li>
                       <li class="menu-link">Mitsubishi</li>
                    </ul>
                    <ul class="menu-3">
                      <li class="menu-head">OFFICE</li>
                      <li class="company-name">
                        PT. LAISINDO ANUGERAH JAYAABADI
                      </li>
                      <li class="address">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                          </svg>
                        JL. RAYA PERANCIS KOMP. PERGUD 75 BLOK J NO 3 AB, RT.004/RW.008, Benda, Kec. Benda, Kota Tangerang, Banten 15125</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container mx-auto">
                    <p>Copyright © 2023 Laisindo . All Rights Reserved.</p>
                </div>
            </div>
            
        </div>
    </footer>


    <script src={{ asset('laisin-js/hamburger.js') }}></script>
    <script src="{{ asset('laisin-js/laisin-product.js') }}"></script>
    <script src="{{ asset('bootstrap.min.js') }}"></script>
</body>
</html>
