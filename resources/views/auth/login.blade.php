<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>TokoLokal | Login</title>

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

    <link rel="shortcut icon" href="../storage/images/Store/TokoLokalLogoWithPic.png" type="image/png">
</head>

<body>
    <div class="row no-gutters">
        <div class="col-md-6 no-gutters">
            <div class="leftside">
                <div style="text-align: center;">
                    <h6 style="font-weight: 200" class="mb-3">WELCOME BACK TO</h6>
                    <a href="{{ url('/') }}"><img src="{{ asset('../storage/images/Store/TokoLokalLogoWithPic.png') }}" width="70" height="60" alt="" class="mb-3"></a>
                    <h6>Log in to get in the moment updates on the things that interest you</h6>
                </div>

                <form method="POST" action="{{ route('login') }}" id="formlogin">
                    @csrf
                    <div class="form-group row justify-content-center">
                        <div class="col-md-12 inner-addon left-addon">
                            <i class="fas fa-user"></i>
                            <input id="email" type="email" placeholder="Email" class="log-field @error('email') is-invalid @enderror " name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row justify-content-center">
                        <div class="col-md-12 inner-addon left-addon">
                            <i class="fas fa-lock"></i>
                            <input id="password" placeholder="Password" type="password" class="log-field @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row justify-content-center">
                        <div class="col-md-12">
                            <button type="submit" class="btn-regist">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12 mb-1" style="text-align: center;">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Stay Logged In') }}
                            </label>

                            @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="ml-4">
                                {{ __('Reset Password') }}
                            </a>
                            @endif
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12 mb-1" style="text-align: center;">
                            <label>Don't have an account?</label>
                            <a href="{{ route('register') }}">Sign Up Now</a>
                        </div>
                    </div>

                    <hr class="mt-1 mb-1">

                    <div class="form-row justify-content-center">
                        <div class="form-group mb-0">
                            <label>Continue with</label>
                        </div>
                    </div>

                    <div class="form-row justify-content-center">
                        <div class="form-group">
                            <i class="fab fa-google"></i>
                            <i class="fab fa-google"></i>
                            <i class="fab fa-google"></i>
                            <i class="fab fa-google"></i>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-6 no-gutters">
            <div class="rightside"></div>
        </div>
    </div>
</body>

</html>