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
    <div class="container card-middle-sizing"
>
        <div class="card login-card" style="box-shadow: 4px 4px 4px 4px #888888; margin-top: 4%;">
    <div class="row no-gutters" style="height: 600px;">
        <div class="col-md-6 no-gutters" style="height: 600px;">
            <div class="leftside">
                <div style="text-align: center;">
                    <h6 class="mb-3 font-weight-bold">WELCOME BACK TO</h6>
                    <a href="{{ url('/') }}"><img src="{{ asset('../storage/images/Store/TokoLokalLogoWithPic.png') }}" width="70" height="60" alt="" class="mb-3"></a>
                    <div class="row justify-content-center">
                        <div class="col-8">
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

                                <div class="col-md-6 my-2">
                                    <!-- An element to toggle between password visibility -->
                                    <input type="checkbox" onclick="myFunction()"> Show Password
                                </div>

                            </div>


                            <div class="form-group row justify-content-center">
                                <div class="col-md-12">
                                    <button type="submit" class="btn-regist visibleBtn">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-12 mb-1" style="text-align: center;">
                                    <input class="form-check-input ml-1" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label pl-4" for="remember">
                                        {{ __('Stay Logged In') }}
                                    </label>

                                    @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" class="ml-5">
                                        {{ __('Reset Password') }}
                                    </a>
                                    @endif
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-12 mb-1" style="text-align: center;">
                                    <label class="font-weight-bold mr-3 pr-5">Don't have an account?</label>
                                    <a href="{{ route('register') }}">Sign Up</a>
                                </div>
                            </div>

                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <div class="hl"></div>
                                </div>
                            </div>

                            <div class="form-row justify-content-center">
                                <div class="form-group mb-0">
                                    <label>Continue with</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <a href="/login/google" type="button" class="btn btn-outline-danger"> <i class="fab fa-google"></i> Google</a>
                                </div>
                            </div>

                            <div class="form-row justify-content-center">
                                <div class="form-group">
                                    <a href="www.gmail.com"></a>
                                    {{-- <a href="mailto:info@example.com?subject=subject&cc=cc@example.com"> --}}
                                    <i class="fab fa-google"></i>
                                    <i class="fab fa-facebook"></i>
                                    <i class="fab fa-twitter"></i>
                                    <i class="fab fa-apple"></i>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 no-gutters">
                    <div class="rightside" style="height: 600px"></div>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    function myFunction() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>

</html>