@extends('layouts.app')

@section('title','TokoLokal | Edit User')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="title-home mt-3">Edit User</h1>
            <div class="card shadow-lg">
                <div class="card-header text-left bg-dark">
                    <h5 class="text-white">USER</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="/users/adm/{{$user->id}}" enctype="multipart/form-data">
                        @method('patch')
                        @csrf

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="first_name">First Name</label>
                                <input type="text" class="form-control" id="first_name" name="first_name" value="{{$user->first_name}}">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="last_name">Last Name</label>
                                <input type="text" class="form-control" id="last_name" name="last_name" value="{{$user->last_name}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" value="{{$user->email}}">
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
                            <label for="DOB">Date of Birth</label>
                            <input type="date" class="form-control" id="DOB" name="DOB" value="{{$user->DOB}}">
                        </div>

                        <div class="form-group">
                            <label class="my-1 mr-2" for="gender">Gender</label>
                            <select class="custom-select my-1 mr-sm-2" id="Gender" name="gender">
                                <option selected>Choose...</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        Picture
                        <div class="form-group">
                            <div class="custom-file">
                                <label for="picture">Picture</label>
                                <input type="file" class="custom-file-input" name="picture" id="picture" required>
                                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="my-1 mr-2" for="role">Role</label>
                            <select class="custom-select my-1 mr-sm-2" id="Gender" name="role">
                                <option value="customer" selected>Customer</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="phonenumber">Phone Number</label>
                            <input type="text" class="form-control" id="phonenumber" name="phone" placeholder="ex : 081212345678" value="{{$user->phonenumber}}">
                        </div>

                        <div class="form-group">
                            <label for="Address">Address</label>
                            <textarea class="form-control" id="Address" rows="3" placeholder="enter your current address here" name="address">{{$user->address}}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="about">About</label>
                            <textarea class="form-control" id="about" rows="3" placeholder="enter your information here" name="about">{{$user->about}}</textarea>
                        </div>

                        <input type="hidden" name="site" value="-">

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Update User</button>
                        </div>

                    </form>
                </div>
            </div>
            <div class="mt-4"></div>
        </div>
    </div>
</div>

@endsection