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
        <div class="col-md-10 text-center">
        <p class="title-home mt-0 mb-4">Raffle Item Description</p>
        </div>
    </div>
</div>

<div class="container pb-5">
    <div class="row justify-content-around">
        <div class="col-md-4 text-center">
            <img src="{{asset('../storage/images/Raffles/'. $raffle->raffleimage)}}" class="border rounded-lg shadow-lg" alt="..." width="100%">
            <div class="mt-5">
                @if(Auth::check() && Auth::user()->role === 'customer')
                <a href="/raffle/detail/{{$raffle->id}}" class="btn btn-primary">Enter Now</a>
                @else
                <a href="/register" class="btn btn-primary">Enter Now</a>
                @endif
            </div>
        </div>
        <div class="col">
            <div class="card pl-3 pr-3 rounded-lg shadow-lg">
                <ul class="nav nav-tabs bg-transparent justify-content-around" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active bg-transparent" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">SUMMARY</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link bg-transparent" id="notification-tab" data-toggle="tab" href="#notification" role="tab" aria-controls="notification" aria-selected="false">DESCRIPTION</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link bg-transparent" id="privacy-tab" data-toggle="tab" href="#privacy" role="tab" aria-controls="privacy" aria-selected="false">NOTES</a>
                    </li>
                </ul>
            
                <div class="tab-content py-2" id="myTabContent">
                    <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <th scope="row" style="font-weight: bold;">Brand</th>
                                    <td>{{$raffle->brand->name}}</td>
                                </tr>
                                <tr>
                                    <th scope="row" style="font-weight: bold;">Name</th>
                                    <td>{{$raffle->rafflename}}</td>
                                </tr>
                                <tr>
                                    <th scope="row" style="font-weight: bold;">Price</th>
                                    <td>Rp. {{number_format($raffle->raffleprice)}}</td>
                                </tr>
                                <tr>
                                    <th scope="row" style="font-weight: bold;">Category</th>
                                    <td><i class="far fa-check-square"></i></td>
                                </tr>
                                <tr>
                                    <th scope="row" style="font-weight: bold;">Capacity</th>
                                    <td><i class="far fa-check-square"></i></td>
                                </tr>
                                <tr>
                                    <th scope="row" style="font-weight: bold;">Start Date</th>
                                    <td>{{date('d M Y H:i:s',strtotime($raffle->rafflereleasedate))}}</td>
                                </tr>
                                <tr>
                                    <th scope="row" style="font-weight: bold;">End Date</th>
                                    <td>{{date('d M Y H:i:s',strtotime($raffle->raffleclosedate))}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade mt-3" id="notification" role="tabpanel" aria-labelledby="notification-tab">
                        <p class="text-center" style="font-weight:normal">{{$raffle->raffledescription}}</p>
                    </div>
                    <div class="tab-pane fade mt-3" id="privacy" role="tabpanel" aria-labelledby="privacy-tab">
                        <p class="text-center" style="font-weight:normal">Please read our Terms & Condition before joining the raffles for the convenience</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pb-5"></div>
</div>
@endsection