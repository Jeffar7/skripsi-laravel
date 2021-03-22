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
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

</head>

<body>

    <div class="navbar navbar-expand-md  d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">

        <!-- Logo -->
        <a class="my-0 mr-md-auto font-weight-normal" href="/pagehome">
            <img src="{{ asset('image/Store_Logo_210309.jpg') }}" width="50" height="40" alt="">
        </a>

        <!-- Middle Side Of Navbar -->
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-5">

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
                <!-- <a class="nav-item nav-link" href="/homeman">MAN</a>
                        <a class="nav-item nav-link" href="#">WOMAN</a> -->

                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>

            </div>
        </div>

        <a class="p-2 text-dark" href="/userprofile"><i class="bi bi-person-circle"></i></a>
        <a class="p-2 text-dark" href="/product-wish"><i class="bi bi-heart"></i></a>

        <!-- Right Side Of Navbar -->
        @if(Auth::user()->role == 'admin')
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="/usercontrol">Admin</a>
            <a class="p-2 text-dark" href="/managebrand">Brand</a>
            <a class="p-2 text-dark" href="/manageproduct">Product</a>
        </nav>
        @endif


        <!--Logout -->
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

    @yield('content')

    <footer class="footerr bg-white text-primary text-center shadow-sm border-top box-shadow">
        <div class="container">
            <p class="pt-3">Created by <a href="pagehome" class="text-primary font-weight-bold">Tokolokal</a></p>
        </div>
    </footer>

</body>




</html>