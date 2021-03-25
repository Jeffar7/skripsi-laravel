@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-7">
            <img src="{{ asset('images/signup.jpg') }}" class="img-regist" alt="">
        </div>
        <div class="col-md-5" style="text-align: center;">
            <div class="pt-4 mb-4">
                <h6 style="font-weight: 200" class="mb-3">WELCOME TO</h6>
                <img src="{{ asset('images/Store_Logo_210309.jpg') }}" width="70" height="60" alt="" class="mb-3">
                <h6>Register to get in the moment updates on the things that interest you</h6>
            </div>

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div>
                    <div class="form-row">
                        <div class="form-group col-md-6 inner-addon left-addon-regist">
                            <i class="fas fa-user"></i>
                            <input type="text" class="log-field" id="first_name" name="first_name" placeholder="First Name" autofocus>
                        </div>

                        <div class="form-group col-md-6 inner-addon left-addon-regist">
                            <i class="fas fa-user"></i>
                            <input type="text" class="log-field" id="last_name" name="last_name" placeholder="Last Name">
                        </div>
                    </div>

                    <div class="form-group inner-addon left-addon-email">
                        <i class="fas fa-envelope"></i>
                        <input type="text" class="log-field" id="email" name="email" placeholder="Email">
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6 inner-addon left-addon-regist">
                            <i class="fas fa-lock"></i>
                            <input type="password" class="log-field" id="password" name="password" placeholder="Password">
                        </div>
                        <div class="form-group col-md-6 inner-addon left-addon-regist">
                            <i class="fas fa-lock"></i>
                            <input type="password" class="log-field" id="password_confirm" name="password_confirmation" placeholder="Confirm Password">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" id="Gender" name="gender" value="Female">Female
                            </label>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" id="Gender" name="gender" value="Male">Male
                        </label>
                        </div>
                    </div>

                    <div class="form group mb-3">
                        <input id="datepicker" width="276" name="DOB" type="date" class="log-field">
                    </div>

                    <input type="hidden" value="Customer" name=role>
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
@endsection