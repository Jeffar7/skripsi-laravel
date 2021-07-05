<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Bootstrap Data Table CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <!-- JQuery UI CSS -->
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Customize Css -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"
        integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">

    <!-- fav icon -->
    <link rel="shortcut icon" href="../storage/images/Store/TokoLokalLogoWithPic.png" type="image/png">

    <!-- style for stripe -->
    @yield('extra-css')
</head>



<body>
    <div id="app">
        <?php

        use App\Http\Controllers\ProductController;
        use Illuminate\Support\Facades\Auth;

        $totalItemCart = 0;
        if (Auth::check() && Auth::user()->role === 'customer') {
            $totalItemCart = ProductController::countItemCart();
        }
        ?>
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('../storage/images/Store/TokoLokalLogoWithPic.png') }}" width="50" height="40"
                        alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    @if(Auth::check() && Auth::user()->role === 'admin')
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="/usercontrol">ADMIN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/manageproduct">PRODUCT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/manageraffle">RAFFLE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/managebrand">BRAND</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/manageevent">EVENT</a>
                        </li>
                    </ul>
                    @elseif(Auth::check() && Auth::user()->role === 'customer' || Auth::guest())
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="/men" role="button" aria-haspopup="true"
                                aria-expanded="false">MEN</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="/men-tops">TOP</a>
                                <a class="dropdown-item" href="/men-bottoms">BOTTOM</a>
                                <a class="dropdown-item" href="/men-shoes">SHOES</a>
                                <a class="dropdown-item" href="/men-accessories">ACCESSORIES</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link " href="/women" role="button" aria-haspopup="true"
                                aria-expanded="false">WOMEN</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="/women-tops">TOP</a>
                                <a class="dropdown-item" href="/women-bottoms">BOTTOM</a>
                                <a class="dropdown-item" href="/women-shoes">SHOES</a>
                                <a class="dropdown-item" href="/women-accessories">ACCESSORIES</a>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/allbrand">BRANDS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/event">EVENTS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/raffle">RAFFLES</a>
                        </li>
                    </ul>
                    @endif
                    <!-- Middle Side of Navbar -->
                    <form class="form-inline my-2 my-lg-0 rounded left-addon-search inner-addon"
                        action="{{ route('search') }}" method="GET">
                        <i class="fas fa-search"></i>
                        <input type="text" name="allsearch" value="{{ request()->allsearch }}"
                            class="search-field rounded" placeholder="Search" aria-label="Search"
                            aria-describedby="search-addon" />
                        <!-- <input type="hidden" name="sort" value="product_relevance" /> -->
                    </form>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <!-- Authentication Links -->

                        @if(Auth::check() && Auth::user()->role === 'customer')
                        <li class="nav-item">
                            <a class="nav-link" href="/product-wish"><i class="far fa-heart"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/product-cart"><i class="fas fa-shopping-basket"><span
                                        class="badge badge-pill badge-danger">{{$totalItemCart}}</span></i></a>
                        </li>
                        @endif
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="/product-wish"><i class="far fa-heart"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/product-cart"><i class="fas fa-shopping-basket"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('LOG IN') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('SIGN UP') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown" id="markasread" onclick="markNotificationAsRead()">
                            <a class="nav-link" href="/notification"><i class="far fa-bell"></i><span
                                    class="badge badge-pill badge-danger">{{count(auth()->user()->unreadNotifications)}}</span></a>

                            <div style="border-radius: 10px; box-shadow: 1px 2px #968585;">
                                <ul class="dropdown-menu card" role="menu"
                                    style="width: 200px; background-color: #c4c0c0">
                                    <li>
                                        <div class="boxes" style="background: white">
                                            <p class="ml-2 font-weight-bold">Notification</p>
                                            @forelse(auth()->user()->unreadNotifications as $notification)
                                            @include('layouts.notification.'.Str::snake(class_basename($notification->type)))

                                            @empty
                                            <a href="#">No unread Notifications</a>
                                        </div>
                                        @endforelse
                                        <div class="boxes" style="background: #c4c0c0">
                                            <a class="text-center" href="/notification">See More</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#"><i class="fas fa-envelope"></i></a>

                            <div class="dropdown-menu-log dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/raffle/history">My Raffle <span
                                        class="badge badge-primary badge-pill"></span></a>
                                <a class="dropdown-item" href="/waiting-for-review">Waiting For Review<span
                                        class="badge badge-primary badge-pill"></span></a>
                                <a class="dropdown-item" href="/payment-history">Payment History <span
                                        class="badge badge-primary badge-pill"></span></a>
                            </div>

                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" v-pre>
                                <i class="fas fa-user-circle"></i>
                            </a>

                            <div class="dropdown-menu-log dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/userprofile">My Profile</a>
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



        <main class="pt-0">
            @yield('content')
        </main>

        <footer style="
        bottom: 0;
        width: 100%;
    ">
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <img src="{{ asset('../storage/images/Store/TokoLokalLogoWithPic.png') }}" width="100"
                            height="50" alt="Tokolokal Logo">
                        <p class="pt-4">TokoLokal is a concept electronic store based in Jakarta. Started in 2021,
                            TokoLokal become a point for fashion and lifestyle from Indonesian local brands. TokoLokal
                            is a place for curated local products to compete with international products.</p>
                        <p>© 2021 TokoLokal. All Rights Reserved.</p>
                    </div>
                    <div class="col-2 px-5">
                        <div class="row pt-4">
                            <p class="font-weight-bold">EXPLORE</p>
                        </div>
                        <div class="pt-2">
                            <div class="row"><a style="color:black;" href="/">Home</a></div>
                            <div class="row"><a style="color:black;" href="/about">About Us</a></div>
                            <div class="row"><a style="color:black;" href="/contact">Contact Us</a></div>
                            <div class="row"><a style="color:black;" href="/termsandcondition">Terms & Condition</a>
                            </div>
                            <div class="row"><a style="color:black;" href="/privacypolicy">Privacy Policy</a></div>
                        </div>
                    </div>
                    <div class="col-2">
                        <p class="font-weight-bold pt-4">HELP CENTER</p>
                        <div class="pt-2">
                            <a href="/faq" style="color:black;">Customer Services</a>
                        </div>
                    </div>
                    <div class="col-4">
                        <p class="font-weight-bold pt-4">VISIT</p>
                        <div class="pt-2">
                            <p>PT. CIPTA RETAIL PRAKARSA
                                Wisma Anugraha Lantai GF, Jl. Taman Kemang No. 32B Kel. Pela Mampang, Kec. Mampang
                                Jakarta
                                Selatan 12730</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>


</body>

</html>