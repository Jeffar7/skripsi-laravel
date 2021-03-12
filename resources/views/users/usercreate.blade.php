@extends('layouts.template')

@section('title','User Create')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-10">
            <h2 class="mt-3">Add User</h2>

            <form method="POST" action="/users/create" enctype="multipart/form-data">
                @csrf
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
                    <label for="DOB">Date of Birth</label>
                    <input type="date" class="form-control" id="DOB" name="DOB">
                </div>

                <div class="form-group">
                    <label class="my-1 mr-2" for="gender">Gender</label>
                    <select class="custom-select my-1 mr-sm-2" id="Gender" name="gender">
                        <option selected>Choose...</option>
                        <option value="1">Male</option>
                        <option value="2">Female</option>
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
                        <option value="Customer" selected>Customer</option>
                        <option value="Admin">Admin</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="phonenumber">Password</label>
                    <input type="text" class="form-control" id="phonenumber" name="phonenumber" placeholder="ex : 081212345678">
                </div>

                <div class="form-group">
                    <label for="Address">Address</label>
                    <textarea class="form-control" id="Address" rows="3" placeholder="enter your current address here" name="address"></textarea>
                </div>

                <div class="form-group">
                    <label for="about">About</label>
                    <textarea class="form-control" id="about" rows="3" placeholder="enter your information here" name="about"></textarea>
                </div>

                <input type="hidden" name="site" value="-">

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Add User</button>
                </div>

            </form>

        </div>

    </div>
</div>

@endsection