<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Customize Css -->
    <link href="/public/css/style.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">

</head>

<body>

    <nav class="navbar navbar-expand-md mb-5 shadow navbar-light bg-white">
        <div class="container">

            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <div class="position-top pl-5">
                    <a class="navbar-brand" href="/pagehome">
                        <img src="{{ asset('image/Store_Logo_210309.jpg') }}" width="50" height="40" alt="">
                    </a>
                </div>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
<!-- Middle Side Of Navbar -->
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">

                        <li class="nav-item dropdown">
                            <a class="nav-link " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">CATEGORIES</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">TOP</a>
                                <a class="dropdown-item" href="#">BOTTOM</a>
                                <a class="dropdown-item" href="#">SHOES</a>
                                <a class="dropdown-item" href="#">ACCESSORIES</a>
                                <a class="dropdown-item" href="#">NEW</a>
                                <a class="dropdown-item" href="#">SALE</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">MEN</a>
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
                            <a class="nav-link " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">WOMEN</a>
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
                        <a class="nav-item nav-link" href="/allbrand">SIGNATURE</a>
                        <!-- <a class="nav-item nav-link" href="/homeman">MAN</a>
                        <a class="nav-item nav-link" href="#">WOMAN</a> -->



                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>

                        <a class="nav-item nav-link far fa-user" href="/userprofile"> Profile </a>
                        <a class="nav-item nav-link far fa-user" href="/usercontrol"> Admin</a>
                        <a class="nav-item nav-link far fa-user" href="/managebrand"> Brand</a>
                        <a class="nav-item nav-link far fa-user" href="/manageproduct"> Product</a>

                    </div>
                </div>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>

                            {{ Auth::user()->username }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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

    @yield('content')

    <!-- <footer class="fixed-bottom card-footer text-center">
        <div class="container">
            <p class="text-muted">TokoLocal 2020</p>
        </div>
    </footer> -->
</body>


<!-- 






 -->

</html>