<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>TokoLokal | Register</title>

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
    <div id="app pt-0">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <img src="{{ asset('../storage/images/SignUp Page/signup.jpg') }}" class="img-regist" alt="">
                </div>
                <div class="col-md-5" style="text-align: center;">
                    <div class="pt-4 mb-4">
                        <h6 style="font-weight: 200" class="mb-3">WELCOME TO</h6>
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('../storage/images/Store/TokoLokalLogoWithPic.png') }}" width="70" height="60" alt="" class="mb-3">
                        </a>
                        <h6>Register to get in the moment updates on the things that interest you</h6>
                    </div>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div>
                            <div class="form-row">
                                <div class="form-group col-md-6 inner-addon left-addon-regist">
                                    <i class="fas fa-user"></i>
                                    <input type="text" class="log-field  @error('first_name') is-invalid @enderror" id="first_name" name="first_name" placeholder="First Name" autofocus>

                                    @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>


                                <div class="form-group col-md-6 inner-addon left-addon-regist">
                                    <i class="fas fa-user"></i>
                                    <input type="text" class="log-field  @error('last_name') is-invalid @enderror" id="last_name" name="last_name" placeholder="Last Name">

                                    @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>


                            </div>

                            <div class="form-group inner-addon left-addon-email">
                                <i class="fas fa-envelope"></i>
                                <input type="text" class="log-field  @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6 inner-addon left-addon-regist">
                                    <i class="fas fa-lock"></i>
                                    <input type="password" class="log-field  @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                                <div class="form-group col-md-6 inner-addon left-addon-regist">
                                    <i class="fas fa-lock"></i>
                                    <input type="password" class="log-field" id="password_confirm" name="password_confirmation" placeholder="Confirm Password">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input  @error('gender') is-invalid @enderror" id="Gender" name="gender" value="Female">Female
                                    </label>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input  @error('gender') is-invalid @enderror" id="Gender" name="gender" value="Male">Male
                                    </label>
                                </div>
                            </div>

                            <div class="form group mb-3">
                                <input id="datepicker" width="276" name="DOB" type="date" class="log-field @error('DOB') is-invalid @enderror">
                                @error('DOB')
                                <span class="invalid-feedback" role="alert">
                                    <strong>The Date Of Birth fields is required.</strong>
                                </span>
                                @enderror
                            </div>

                            <input type="hidden" value="customer" name=role>
                            <input type="hidden" value="-" name=address>
                            <input type="hidden" value="-" name=site>
                            <input type="hidden" value="-" name=about>
                            <input type="hidden" value="-" name=picture>
                            <input type="hidden" value="-" name=phone>

                            <div class="form group mb-3">
                                <button type="submit" class="btn-regist">
                                    {{ __('Register') }}
                                </button>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-12 justify-content-center mb-1">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Saya ingin tetap login') }}
                                    </label>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-12 justify-content-center mb-0">
                                    <label>Have an account?</label>
                                    <a href="{{ route('login') }}">Sign In</a>
                                </div>
                            </div>
                            <hr class="mt-1 mb-1">
                            <div class="form-row">
                                <label>By creating or registering an account, you are agree to the contents of the <a href="#">Terms and Conditions</a> & Our <a href="#">Privacy Policy</a></label>
                            </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>