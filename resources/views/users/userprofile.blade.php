@extends('layouts.app')

@section('title','TokoLokal | User Profile')

@section('content')
<div class="container">
    <div class=" pt-4 pb-2">
        <h4>My Profile</h4>
    </div>
    <ul class="nav nav-tabs bg-transparent" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link bg-transparent active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Profile</a>
        </li>
        {{-- <li class="nav-item" role="presentation">
            <a class="nav-link bg-transparent" id="notification-tab" data-toggle="tab" href="#notification" role="tab" aria-controls="notification" aria-selected="false">Notification</a>
        </li> --}}
        <li class="nav-item" role="presentation">
            <a class="nav-link bg-transparent" id="privacy-tab" data-toggle="tab" href="#privacy" role="tab" aria-controls="privacy" aria-selected="false">Privacy</a>
        </li>
    </ul>
    <div class="card mt-4 pl-3 pr-3" style="border-radius: 10px; box-shadow: 1px 2px #888888">
        <div class="tab-content py-3" id="myTabContent">
            <div class="tab-pane fade show active m-3" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="row justify-content-center">
                    <div class="col-md-4 pt-2">
                        <img src="{{asset('../storage/images/Users/'.Auth::user()->picture)}}"
                            class="rounded img-thumbnail " alt="..." width="200" height="150" style="margin-left: 15%;">
                        <div style="padding-top: 20px;text-decoration: underline;text-align: center;"><a
                                href="/usersettings">Edit My Profile</a></div>
                    </div>
                    <div class="col-md-8 pt-2">
                        <tbody>
                            <h1 style="text-transform:capitalize;">{{Auth::user()->first_name}}
                                {{Auth::user()->last_name}}
                            </h1>
                            <p style="text-transform:capitalize;">{{Auth::user()->role}}</p>
                            <p style="font-style: italic;">"{{Auth::user()->about}}"</p>
                        </tbody>

                        <ul class="nav nav-tabs bg-transparent" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link bg-transparent active" id="profile-tab" data-toggle="tab" href="#1a"
                                    role="tab" aria-controls="home" aria-selected="true" style="
                                width: 100px;
                            "><i class="fas fa-user" style="=
                                    "></i><span style="
                                        padding-left: 10%;
                                    ">About</span></a>
                            </li></a>
                            </li>
                        </ul>

                        <p class="about-title pt-3 pb-0">Contact Information</p>
                        <div class="col-sm-12">
                            <div class="table-responsive-sm">
                                <table class="table mb-0">
                                    <tr class="border-0 about-title">
                                        <td  class="text-left border-0 font-weight-bold" style="color: black">
                                            <p class="about-title" style="color: black">Phone</p>

                                        </td>
                                        <td class="text-left border-0" style="color: black"><p class="about-title" style="color: black">: <span
                                            style="padding-left: 2%">{{Auth::user()->phone}}</span></p></td>
                                    </tr>
                                    <tr class="about-title">
                                        
                                        <td class="text-left border-0" style="color: black">                                <p class="about-title" style="color: black">Address</p>
                                        </td>
                                        <td class="text-left border-0" style="color: black"><p class="about-title" style="color: black">: <span
                                            style="padding-left: 2%">{{Auth::user()->address}}</span></p></td>
                                    </tr>
                                    <tr class="about-title">
                                        <td class="text-left border-0" style="color: black">                                <p class="about-title" style="color: black">Email</p>
                                        </td>
                                        <td class="text-left border-0" style="color: black"><p class="about-title" style="color: black">: <span
                                            style="padding-left: 2%">{{Auth::user()->email}}</span></p></td>
                                    </tr>
                                    <tr class="about-title">
                                        <td class="text-left border-0" style="color: black">                                <p class="about-title" style="color: black">Site</p>
                                        </td>
                                        <td class="text-left border-0" style="color: black"><p class="about-title" style="color: black">: <span
                                            style="padding-left: 2%">{{Auth::user()->site}}</span></p></td>
                                    </tr>
                                </table>
                            </div>
                        </div>


                        <p class="about-title pt-3 pb-0">Basic Information</p>
                        <div class="col-sm-12">
                            <div class="table-responsive-sm">
                                <table class="table mb-0">
                                    <tr class="about-title">
                                        <td class="text-left border-0" style="color: black; width: 20%">Birthday</td>
                                        <td class="text-left border-0" style="color: black;">: <span style="padding-left: 2%">{{Auth::user()->DOB}}</span></td>
                                    </tr>
                                    <tr class="about-title">
                                        <td class="text-left border-0" style="color: black">Gender</td>
                                        <td class="text-left border-0" style="color: black">: <span style="padding-left: 2%">{{Auth::user()->gender}}</span></td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            {{-- <div class="tab-pane fade m-3" id="notification" role="tabpanel" aria-labelledby="notification-tab">
                <h4 class="font-weight-bold">Notification</h4>
                <p>Set the notifications you want to receive here</p>
                <table class="table mt-2">
                    <tbody>
                        <h6 style="font-weight:600;" class="mt-4"><i class="fas fa-shopping-cart mr-2"></i>Payment
                            Transaction</h6>
                        <tr>
                            <th scope="row" style="font-weight: 100;">Waiting Payment</th>
                            <td colspan="10"></td>
                            <td style="width: 5%"><i class="far fa-check-square"></i></td>
                        </tr>
                        <tr>
                            <th scope="row" style="font-weight: 100;">Waiting Confirmation</th>
                            <td colspan="10"></td>
                            <td style="width: 5%"><i class="far fa-check-square"></i></td>
                        </tr>
                        <tr>
                            <th scope="row" style="font-weight: 100;">Orders Processed</th>
                            <td colspan="10"></td>
                            <td style="width: 5%"><i class="far fa-check-square"></i></td>
                        </tr>
                        <tr>
                            <th scope="row" style="font-weight: 100;">Orders Arrived</th>
                            <td colspan="10"></td>
                            <td style="width: 5%"><i class="far fa-check-square"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div> --}}
            <div class="tab-pane fade m-3" id="privacy" role="tabpanel" aria-labelledby="privacy-tab">

                @if(session('errorCurrentPassword'))
                <div class="alert alert-danger">
                    {{ session('errorCurrentPassword') }}
                </div>
                @endif

                @if(session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
                @endif

                @error('new_password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror


                <form action="/users/changepassword" method="POST">
                    @csrf
                    <h4 class="font-weight-bold">Change Password</h4>
                    <div class="row mt-4">
                        <div class="col-md-6 form-group pl-5">

                            <input type="password" class="form-control mb-3" name="current_password" placeholder="Current Password">
                            <input type="password" class="form-control mb-3" name="new_password" placeholder="New Password">
                            <input type="password" class="form-control mb-3" id="password_confirm" name="password_confirmation" placeholder="Confirm New Password">

                            <button type="submit" class="btn btn-dark" style="
    width: 100%;
">
                                Change Password
                            </button>
                        </div>
                        <div class="col-md-6" style="padding: 0 10%;">
                            <p class="font-weight-bold">Password Must Contain:</p>
                            <p>At least 1 upper case letter (A-Z)</p>
                            <p>At least 1 number (0-9)</p>
                            <p>At least 8 characters</p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="pb-5"></div>
</div>
@endsection