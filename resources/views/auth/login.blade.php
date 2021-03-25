@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6" style="text-align: center;padding-right: 110px;padding-top: 50px;">
            <div class="pt-5 mb-4">
                <h6 style="font-weight: 200" class="mb-3">WELCOME BACK TO</h6>
                <img src="{{ asset('images/Store_Logo_210309.jpg') }}" width="70" height="60" alt="" class="mb-3">
                <h6>Log in to get in the moment updates on the things that interest you</h6>
            </div>
            
            <form method="POST" action="{{ route('login') }}" id="formlogin">
                @csrf
                <div class="form-group row justify-content-center">  
                    <div class="col-md-8 inner-addon left-addon">
                        <i class="fas fa-user"></i>
                        <input id="email" type="email" placeholder="Email" class="log-field @error('email') is-invalid @enderror " name="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row justify-content-center">
                    <div class="col-md-8 inner-addon left-addon">
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
                    <div class="col-md-8">
                        <button type="submit" class="btn-regist">
                            {{ __('Login') }}
                        </button>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12 justify-content-center mb-1">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Saya ingin tetap login') }}
                        </label>

                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="ml-4">
                                {{ __('Reset Password') }}
                            </a>
                        @endif
                    </div>
                </div>


                <div class="form-row">
                    <div class="form-group col-md-12 justify-content-center mb-1">
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
        <div class="col-md-6">
            <img src="{{ asset('images/login.jpg') }}" class="img-log" alt="">
        </div>
    </div>
</div>

<div id="preloader"></div>
<script type="text/javascript">
     $('#formlogin').submit(function() {
       $('#preloader').show(); 
       return true;
     });
 </script>
@endsection
