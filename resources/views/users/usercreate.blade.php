@extends('layouts.app')

@section('title','TokoLokal | Add User')

@section('content')
<div class="loader"></div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="title-home mt-3 font-weight-bold">Add User</h1>
            <div class="card shadow-lg">
                <div class="card-header text-left bg-dark">
                    <h5 class="text-white">USER</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="/users/create" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="first_name">First Name</label>
                            <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" name="first_name" value="{{ old('first_name') }}" required>
                            @error('first_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="last_name">Last Name</label>
                            <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name" name="last_name" value="{{ old('last_name') }}" required>
                            @error('last_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>

                        <div class="form-group  col-md-6">
                            <label for="password_confirm">Confirm Password</label>
                            <input type="password" class="form-control" id="password_confirm" name="password_confirmation" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="DOB">Date of Birth</label>
                        <input type="date" class="form-control @error('DOB') is-invalid @enderror" id="DOB" name="DOB" value="{{ old('DOB') }}" required>
                    </div>

                    <div class="form-group">
                        <label class="my-1 mr-2" for="gender">Gender</label>
                        <select class="custom-select my-1 mr-sm-2 @error('gender') is-invalid @enderror" id="Gender" name="gender" value="{{ old('gender') }}" required>
                            <option selected>Choose...</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        @error('gender')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="picture">Picture</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="picture" id="picture" required>
                            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="my-1 mr-2" for="role">Role</label>
                        <select class="custom-select my-1 mr-sm-2 @error('role') is-invalid @enderror" id="role" value="{{ old('role') }}" name="role" required>
                            <option selected>Choose...</option>
                            <option value="customer">Customer</option>
                            <option value="admin">Admin</option>
                        </select>
                        @error('role')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="phonenumber">Phone Number</label>
                        <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phonenumber" value="{{ old('phone') }}" name="phone" placeholder="ex : 081212345678" required>
                        @error('phone')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="Address">Address</label>
                        <textarea class="form-control @error('address') is-invalid @enderror" id="Address" rows="3" value="{{ old('address') }}" placeholder="enter your current address here" name="address" required>{{ old('address') }} </textarea>
                        @error('address')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="about">About</label>
                        <textarea class="form-control @error('about') is-invalid @enderror" id="about" rows="3" placeholder="enter your information here" value="{{ old('about') }}" name="about" required>{{ old('about') }}</textarea>
                        @error('about')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <input type="hidden" name="site" value="-">

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Add User</button>
                    </div>

                    </form>
                </div>
            </div>
            <div class="mt-4"></div>
        </div>
    </div>
</div>

@endsection