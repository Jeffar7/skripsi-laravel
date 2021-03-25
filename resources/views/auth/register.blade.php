@extends('layouts.app')

@section('content')
<div class="container">
<<<<<<< HEAD
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
=======
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <!-- new register -->
                        <div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="first_name">First Name</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="last_name">Last Name</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email">
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                                <div class="form-group  col-md-6">
                                    <label for="password_confirm">Confirm Password</label>
                                    <input type="password" class="form-control" id="password_confirm" name="password_confirmation">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="my-1 mr-2" for="gender">Gender</label>
                                <select class="custom-select my-1 mr-sm-2" id="Gender" name="gender">
                                    <option selected>Choose...</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>

                            <div class="form group">
                                <input id="datepicker" width="276" name="DOB" type="date" class="form-control">
                            </div>


                            <input type="hidden" value="customer" name=role>
                            <input type="hidden" value="-" name=address>
                            <input type="hidden" value="-" name=site>
                            <input type="hidden" value="-" name=about>
                            <input type="hidden" value="-" name=picture>
                            <input type="hidden" value="-" name=phone>


                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>

                            <!-- end new register -->

                            <!-- Old register -->
                            <!-- <div>


                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>


                                <div class="col-md-6">
                                    <input id="name" type="text" name="first_name" value="{{ old('name') }}" required autocomplete="first_name" autofocus>

                                </div>

                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" name="last_name" value="{{ old('name') }}" required autocomplete="last_name" autofocus>


                                </div>



                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" name="username" value="{{ old('email') }}" required autocomplete="Username">


                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" name="password" required autocomplete="new-password">

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="wanita" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Wanita
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="pria">
                                <label class="form-check-label" for="exampleRadios2">
                                    Pria
                                </label>
                            </div>

                        </div> -->
                    </form>
                </div>
            </div>
>>>>>>> 3f76f2f9cd310181f868c781650008e9e9704c6d
        </div>
    </div>
</div>
@endsection