@extends('layouts.app')

@section('content')
<div class="container">
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
        </div>
    </div>
</div>
@endsection