<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
    <!-- Customize Css -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    
    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('images/Store_Logo_210309.jpg') }}" width="50" height="40" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    @if(Auth::check() && Auth::user()->role === 'admin')
                        <a class="nav-item nav-link" href="/usercontrol">ADMIN</a>
                        <a class="nav-item nav-link" href="/manageproduct">PRODUCT</a>
                        <a class="nav-item nav-link" href="#">RAFFLE</a>
                        <a class="nav-item nav-link" href="/managebrand">BRAND</a>
                        <a class="nav-item nav-link" href="#">EVENT</a>
                        <a class="nav-item nav-link" href="#">FORUM</a>
                    @elseif(Auth::check() && Auth::user()->role === 'customer' || Auth::guest())
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link " href="#" role="button" aria-haspopup="true" aria-expanded="false">CATEGORIES</a>
                                <ul class="dropdown-menu">
                                    <a class="dropdown-item" href="#">TOP</a>
                                    <a class="dropdown-item" href="#">BOTTOM</a>
                                    <a class="dropdown-item" href="#">SHOES</a>
                                    <a class="dropdown-item" href="#">ACCESSORIES</a>
                                    <a class="dropdown-item" href="#">NEW</a>
                                    <a class="dropdown-item" href="#">SALE</a>
                                </ul>
                        </li> -->

                        <li class="nav-item dropdown">
                            <a class="nav-link " href="/men" role="button" aria-haspopup="true" aria-expanded="false">MEN</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="/men-tops">TOP</a>
                                <a class="dropdown-item" href="/men-bottoms">BOTTOM</a> 
                                <a class="dropdown-item" href="/men-shoes">SHOES</a>
                                <a class="dropdown-item" href="/men-accessories">ACCESSORIES</a>
                                <a class="dropdown-item" href="/men-new">NEW</a>
                                <a class="dropdown-item" href="/men-sale">SALE</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link " href="/women" role="button" aria-haspopup="true" aria-expanded="false">WOMEN</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="/women-tops">TOP</a>
                                <a class="dropdown-item" href="/women-bottoms">BOTTOM</a>
                                <a class="dropdown-item" href="/women-shoes">SHOES</a>
                                <a class="dropdown-item" href="/women-accessories">ACCESSORIES</a>
                                <a class="dropdown-item" href="/women-new">NEW</a>
                                <a class="dropdown-item" href="/women-sale">SALE</a>
                            </div>
                        </li>
                        <a class="nav-item nav-link" href="/allbrand">BRANDS</a>
                        <a class="nav-item nav-link" href="/#">EVENTS</a>
                        <a class="nav-item nav-link" href="/#">RAFFLES</a>
                    </ul>
                    @endif
                    <!-- Middle Side of Navbar -->
                    <div class="search-group rounded left-addon-search inner-addon">
                        <i class="fas fa-search"></i>
                        <input type="search" class="search-field rounded" placeholder="Search" aria-label="Search"
                            aria-describedby="search-addon" />
                    </div>
                    
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->

                        @if(Auth::check() && Auth::user()->role === 'customer' || Auth::guest())
                            <li class="nav-item">
                                <a class="nav-link" href="/product-wish"><i class="far fa-heart"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fas fa-shopping-basket"></i></a>
                            </li>
                        @endif
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('LOG IN') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('SIGN UP') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="far fa-bell"></i></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fas fa-user-circle"></i>
                                </a>

                                <div class="dropdown-menu-log dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/userprofile">My Profile</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="pt-0">
            @yield('content')
        </main>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <img src="{{ asset('images/Store_Logo_210309.jpg') }}" width="50" height="40" alt="">
                        <br>
                        <p>TokoLokal is a concept store based in Jakarta. Started in 2021, TokoLokal become a point for fashion and lifestyle from Indonesian local brands. TokoLokal is a place for curated local products to compete with international products.</p>
                        <p>© 2021 TokoLokal. All Rights Reserved.</p>
                    </div>
                    <div class="col-2">
                        <div class="row"><p>EXPLORE</p></div>
                        <div class="row"><a style="color:black;" href="/">Home</a></div>
                        <div class="row"><a style="color:black;" href="/about">About Us</a></div>
                        <div class="row"><a style="color:black;" href="/contact">Contact Us</a></div>
                        <div class="row"><a style="color:black;" href="/termsandcondition">Term & Condition</a></div>
                        <div class="row"><a style="color:black;" href="#">Privacy Policy</a></div>
                    </div>
                    <div class="col-2">
                        <label>HELP CENTER</label>
                        <a href="/faq" style="color:black;">Customer Services</a>
                    </div>
                    <div class="col-4">
                        <p>VISIT</p>
                        <p>PT. CIPTA RETAIL PRAKARSA 
                            Wisma Anugraha Lantai GF, Jl. Taman Kemang No. 32B Kel. Pela Mampang, Kec. Mampang Jakarta Selatan 12730</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script>
        $(window).load(function() {
            $('#preloader').hide();
        });
    </script>
</body>
</html>
