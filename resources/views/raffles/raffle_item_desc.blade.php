@extends('layouts.app')

@section('title','TokoLokal | ' .e($raffle->rafflename))

@section('content')
<div class="container pt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0 bg-transparent">
            <li class="breadcrumb-item"><a href="/" class="text-dark">Home</a></li>
            <li class="breadcrumb-item"><a href="/allraffle" class="text-dark">Raffle</a></li>
            <li class="breadcrumb-item active text-bold text-dark" aria-current="page" style="color:black;font-weight:bold;">{{$raffle->rafflename}}</li>
        </ol>
    </nav>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 text-center mt-2 mb-4">
            <p class="title-home mt-0 mb-4 font-weight-bold">Raffle Item Description</p>
        </div>
    </div>
</div>

<div class="container pb-5">
    <div class="row justify-content-around">
        <div class="col-md-4 text-center">
            <img src="{{asset('../storage/images/Raffles/'. $raffle->raffleimage)}}" class="rounded-lg" alt="..." width="100%" height="300px" style="
            border: 1px solid #c4c4c4; box-shadow: 4px 4px 4px 4px #888888; object-fit:contain
        ">
            <div class="mt-5">
                @guest
                @if($raffle->status === 'running')
                <a href="/register" class="btn btn-primary" style="
                        width: 50%;
                    ">ENTER NOW</a>
                @elseif($raffle->status === 'closed')
                <a href="#" class="btn btn-danger disabled" style="
                        width: 50%;
                    ">CLOSED</a>
                @else
                <a href="#" class="btn btn-secondary disabled" style="
                        width: 50%;
                    ">UPCOMING</a>
                @endif
                @else
                @if($raffle->status === 'running')
                <a href="/raffle/detail/{{$raffle->id}}" class="btn btn-primary" style="
                        width: 50%;
                    ">ENTER NOW</a>
                @elseif($raffle->status === 'closed')
                <a href="#" class="btn btn-danger disabled" style="
                        width: 50%;
                    ">CLOSED</a>
                @else
                <a href="#" class="btn btn-secondary disabled" style="
                        width: 50%;
                    ">UPCOMING</a>
                @endif
                @endguest
            </div>
        </div>
        <div class="col">
            <div class="card pl-3 pr-3 rounded-lg" style="border: 1px solid #c4c4c4; box-shadow: 4px 4px 4px 4px #888888;
            ">
                <ul class="nav nav-tabs bg-transparent justify-content-around my-2" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link font-weight-bold active bg-transparent" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">SUMMARY</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link font-weight-bold bg-transparent" id="notification-tab" data-toggle="tab" href="#notification" role="tab" aria-controls="notification" aria-selected="false">DESCRIPTION</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link font-weight-bold bg-transparent" id="privacy-tab" data-toggle="tab" href="#privacy" role="tab" aria-controls="privacy" aria-selected="false">NOTES</a>
                    </li>
                </ul>

                <div class="tab-content py-2" id="myTabContent">
                    <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div style="background-color: #c4c4c4;height: 50px;">
                            <h2 class="px-5 py-2">{{$raffle->rafflename}}</h2>
                        </div>
                        <table class="mt-2 table table-borderless mx-5" style="
                        width: 90%;
                    ">
                            <tbody>
                                <tr>
                                    <th scope="row" style=" font-weight: bold; width: 40%;">Brand</th>
                                    <td style="color: #8b8b8b;
                                ">{{$raffle->brand->name}}</td>
                                </tr>
                                <tr>
                                    <th scope="row" style=" font-weight: bold; width: 40%;">Price</th>
                                    <td style="color: #8b8b8b;
                                ">Rp. {{number_format($raffle->raffleprice)}}</td>
                                </tr>
                                <tr>
                                    <th scope="row" style=" font-weight: bold; width: 40%;">Category</th>
                                    <td style="color: #8b8b8b;
                                ">{{$raffle->categoryraffle->categoryname}}</td>
                                </tr>
                                <tr>
                                    <th scope="row" style=" font-weight: bold; width: 40%;">Capacity</th>
                                    <td style="color: #8b8b8b;
                                ">{{$raffle->rafflequota}}</td>
                                </tr>
                                <tr>
                                    <th scope="row" style=" font-weight: bold; width: 40%;">Start Date</th>
                                    <td style="color: #8b8b8b;
                                ">{{date('d M Y H:i:s',strtotime($raffle->rafflereleasedate))}}</td>
                                </tr>
                                <tr>
                                    <th scope="row" style=" font-weight: bold; width: 40%;">End Date</th>
                                    <td style="color: #8b8b8b;
                                ">{{date('d M Y H:i:s',strtotime($raffle->raffleclosedate))}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade mt-3" id="notification" role="tabpanel" aria-labelledby="notification-tab">
                        <div class="pb-1 pt-3" style="background-color: #c4c4c4;">
                            <p class="py-2" style="text-align: center">{{$raffle->raffledescription}}</p>
                        </div>
                    </div>
                    <div class="tab-pane fade mt-3" id="privacy" role="tabpanel" aria-labelledby="privacy-tab">
                        <div class="pb-1 pt-3" style="background-color: #c4c4c4;">
                            <p class="py-2" style="text-align: center">Please read our <a href="/termsandcondition" class="text-dark font-weight-bold">Terms & Condition</a> before joining the raffles for the convenience</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pb-5"></div>
    </div>
    @endsection