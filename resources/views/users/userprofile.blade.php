@extends('layouts.app')

@section('title','User Profile')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-10">
            <h2 class="mt-3">Settings</h2>

            <div class="card text-center">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Notification</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Privacy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Help & Feedback</a>
                        </li>

                    </ul>
                </div>
                <div class="card-body">

                    <img src="image/profile.png" class="rounded float-left img-thumbnail rounded-circle" alt="..." width="150" height="150">

                    <tbody>
                        <h1>{{Auth::user()->username}} </h1>
                        <p>{{Auth::user()->role}}</p>
                    </tbody>


                    <h2>Contact Information: </h2><br>
                    <p1 class="mb-0">Phone: {{Auth::user()->address}} </p1> <br>
                    <p1 class="mb-0">E-mail: {{Auth::user()->email}} </p1> <br>
                    <p1 class="mb-0">Site: {{Auth::user()->site}} </p1> <br> <br>

                   <h2> Basic Information: </h2><br>
                    <p1 class="mb-0">Phone: {{Auth::user()->DOB}} </p1> <br>
                    <p1 class="mb-0">Gender: {{Auth::user()->gender}} </p1> <br>


                </div>
            </div>

        </div>

    </div>
</div>

@endsection