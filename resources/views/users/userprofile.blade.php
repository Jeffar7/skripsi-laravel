@extends('layouts.app')

@section('title','TokoLokal | User Profile')

@section('content')
<div class="container">
    <div class="row pt-4 pb-2">
        <h4>My Profile</h4>
    </div>
</div>
<div id="exTab1" class="container pb-5">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item active">
            <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#1a" role="tab" aria-controls="home"
            aria-selected="true">Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="notification-tab" data-toggle="tab" href="#2a" role="tab" aria-controls="profile" aria-selected="false">Notification</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="privacy-tab" data-toggle="tab" href="#3a" role="tab" aria-controls="profile" aria-selected="false">Privacy</a>
        </li>
    </ul>	
    <div class="card mt-4 pl-3 pr-3" style="border-radius: 10px; box-shadow: 1px 2px #888888">
        <div class="tab-content clearfix py-3">
            <div class="tab-pane active" id="1a">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{asset('uploads/users/' . Auth::user()->picture)}}" class="rounded img-thumbnail rounded-circle" alt="..." width="200" height="150" style="margin-left: 80px;">
                        <div style="padding-top: 20px;text-decoration: underline;text-align: center;"><a href="/usersettings">Edit My Profile</a></div>
                    </div>
                    <div class="col-md-8">
                        <tbody>
                            <h1 style="text-transform:capitalize;">{{Auth::user()->first_name}} {{Auth::user()->last_name}}</h1>
                            <p style="text-transform:capitalize;">{{Auth::user()->role}}</p>
                            <p style="font-style: italic;">"{{Auth::user()->about}}"</p>
                        </tbody>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item active">
                                <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#1a" role="tab" aria-controls="home"
                                aria-selected="true">About</a>
                            </li>
                        </ul>
                        
                        <p class="about-title pt-3">Contact Information</p>
                        <p class="about-desc mb-0">Phone: {{Auth::user()->phone}} </p> 
                        <p class="about-desc mb-0">Address: {{Auth::user()->address}} </p> 
                        <p class="about-desc mb-0">E-mail: {{Auth::user()->email}}</p> 
                        <p class="about-desc">Site: {{Auth::user()->site}}</p>

                        <p class="about-title">Basic Information</p>
                        <p class="about-desc mb-0">Birthday: {{Auth::user()->DOB}}</p> 
                        <p class="about-desc">Gender: {{Auth::user()->gender}}</p>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="2a">
                <h4>Notification</h4>
                <p>Set the notifications you want to receive here</p>
                <table class="table mt-2">
                    <tbody>
                        <h6 style="font-weight:600;" class="mt-4"><i class="fas fa-shopping-cart mr-2"></i>Payment Transaction</h6>
                        <tr>
                            <th scope="row" style="font-weight: 100;">Waiting Payment</th>
                            <td colspan="2"></td>
                            <td><i class="far fa-check-square"></i></td>
                        </tr>
                        <tr>
                            <th scope="row" style="font-weight: 100;">Waiting Confirmation</th>
                            <td colspan="2"></td>
                            <td><i class="far fa-check-square"></i></td>
                        </tr>
                        <tr>
                            <th scope="row" style="font-weight: 100;">Orders Processed</th>
                            <td colspan="2"></td>
                            <td><i class="far fa-check-square"></i></td>
                        </tr>
                        <tr>
                            <th scope="row" style="font-weight: 100;">Orders Arrived</th>
                            <td colspan="2"></td>
                            <td><i class="far fa-check-square"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane mb-3" id="3a">
                <h4>Change Password</h4>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <input type="password" class="log-field mb-3" id="password" name="password" placeholder="New Password">
                        <input type="password" class="log-field mb-3" id="password" name="password" placeholder="Confirm Password">
                        <button type="submit" class="btn-regist">
                            Change Password
                        </button>
                    </div>
                    <div class="col-md-6" style="text-align:center; font-weight:bold;">
                        <p>Password Must Contain:</p>
                        <p>At least 1 upper case letter (A-Z)</p>
                        <p>At least 1 number (0-9)</p>
                        <p>At least 8 characters</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pb-5"></div>
</div>
@endsection