@extends('layouts.app')

@section('title','TokoLokal | List Raffle')

@section('content')
<div class="container pt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0 bg-transparent mb-0">
            <li class="breadcrumb-item"><a href="/" class="text-dark">Home</a></li>
            <li class="breadcrumb-item active text-bold text-dark" aria-current="page" style="color:black;font-weight:bold;">Raffle</li>
        </ol>
    </nav>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 text-center">
            <h3 class="mt-4">Raffle Item List</h3>
            <p style="font-weight:normal;">Here are all our listed raffle item that you can joined, hope you enjoyed it!</p>
            <div class="search-group rounded left-addon-search inner-addon" style="width:100%;">
                <i class="fas fa-search"></i>
                <input type="search" class="search-field rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" style="width:100%;" />
            </div>
        </div>
    </div>
</div>
<div class="container mt-4">
    <div class="row justify-content-around">
        <div class="col-md-10">
            <div class="row">
                <div class="col">
                    <p class="title-home text-left" style="font-weight:bold;">ITEMS TO BE RAFFLE</p>
                </div>
                <div class="col">
                    <div class="row justify-content-end px-3">
                        <a href="#" class="title-home text-right text-decoration-none pr-5" style="text-transform:none; font-weight:bold; color:black; font-size:15px;">Hide Filters</a>
                        <a href="#" class="title-home text-right text-decoration-none" style="text-transform:none; font-weight:bold; color:black; font-size:15px;">Sort By</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-around">
        @foreach($raffles as $raffle)
        <div class="col-md-10 mb-3">
            @if($raffle->status === 'running' || $raffle->status === 'not_started')
            <div class="card rounded-lg shadow-lg">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <a href="/raffle/description/{{$raffle->id}}">
                            <img src="{{asset('../storage/images/Raffles/'. $raffle->raffleimage)}}" class="card-img-top p-3" alt="Image">
                        </a>
                    </div>
                    <div class="col-md-8" style="background: #E5E5E5;">
                        <div class="card-body border">
                            <a href="/raffle/description/{{$raffle->id}}" class="text-decoration-none" style="color:black;">
                                <p class="text-right mb-0">
                                    <!-- <u> -->
                                        <small class="font-weight-bolder">Started From:</small>
                                    <!-- </u> -->
                                </p>
                                <h5 class="text-right">
                                    <u>
                                        <!-- <small></small> -->
                                        {{date('d M Y',strtotime($raffle->rafflereleasedate))}}
                                    </u>
                                </h5>
                                <p class="about-title mb-0">Item</p>
                                <p class="mb-0">{{$raffle->brand->name}}
                                </p>
                                <p class="font-weight-bolder mb-0">{{$raffle->rafflename}}
                                </p>
                                <p class="about-title mb-0">Price</p>
                                <p style="font-weight:bold;">Rp. {{number_format($raffle->raffleprice)}}</p>
                            </a>
                            <div class="text-right">
                                @if(Auth::check() && Auth::user()->role === 'customer' || Auth::user()->role === 'admin')
                                    @if($raffle->status === 'running')
                                    <a href="/raffle/detail/{{$raffle->id}}" class="btn btn-primary">ENTER NOW</a>
                                    @elseif($raffle->status === 'closed')
                                    <a href="/raffle/detail/{{$raffle->id}}" class="btn btn-danger disabled">CLOSED</a>
                                    @else
                                    <a href="/raffle/detail/{{$raffle->id}}" class="btn btn-secondary disabled">UPCOMING</a>
                                    @endif
                                @else
                                <a href="/register" class="btn btn-primary">Enter Now</a>
                                @endif
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                <p class="mb-0">
                                    @if($raffle->status === 'running')
                                    <small class="font-weight-bolder"><i class="fas fa-user-alt"></i> ~/{{$raffle->rafflequota}}</small>
                                    @else
                                    <small class="font-weight-bolder"><i class="fas fa-user-alt"></i> N/A</small>
                                    @endif
                                </p>
                                </div>
                                <div class="col">
                                <p class="mb-0">
                                    <small class="font-weight-bolder">Category: {{$raffle->categoryraffle->categoryname}}</small>
                                </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @elseif($raffle->status === 'closed')
            <div class="card rounded-lg shadow-lg" id="overlay">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <a href="/raffle/description/{{$raffle->id}}">
                            <img src="{{asset('../storage/images/Raffles/'. $raffle->raffleimage)}}" class="card-img-top p-3" alt="Image">
                        </a>
                    </div>
                    <div class="col-md-8" style="background: #E5E5E5;">
                        <div class="card-body border">
                            <a href="/raffle/description/{{$raffle->id}}" class="text-decoration-none" style="color:black;">
                                <p class="text-right mb-0">
                                    <!-- <u> -->
                                        <small class="font-weight-bolder">Started From:</small>
                                    <!-- </u> -->
                                </p>
                                <h5 class="text-right">
                                    <u>
                                        <!-- <small></small> -->
                                        {{date('d M Y',strtotime($raffle->rafflereleasedate))}}
                                    </u>
                                </h5>
                                <p class="about-title mb-0">Item</p>
                                <p class="mb-0">{{$raffle->brand->name}}
                                </p>
                                <p class="font-weight-bolder mb-0">{{$raffle->rafflename}}
                                </p>
                                <p class="about-title mb-0">Price</p>
                                <p style="font-weight:bold;">Rp. {{number_format($raffle->raffleprice)}}</p>
                            </a>
                            <div class="text-right">
                                @if(Auth::check() && Auth::user()->role === 'customer' || Auth::user()->role === 'admin')
                                    @if($raffle->status === 'running')
                                    <a href="/raffle/detail/{{$raffle->id}}" class="btn btn-primary">ENTER NOW</a>
                                    @elseif($raffle->status === 'closed')
                                    <a href="/raffle/detail/{{$raffle->id}}" class="btn btn-danger disabled">CLOSED</a>
                                    @else
                                    <a href="/raffle/detail/{{$raffle->id}}" class="btn btn-secondary disabled">UPCOMING</a>
                                    @endif
                                @else
                                <a href="/register" class="btn btn-primary">Enter Now</a>
                                @endif
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                <p class="mb-0">
                                    <small class="font-weight-bolder"><i class="fas fa-user-alt"></i> ~/{{$raffle->rafflequota}}</small>
                                </p>
                                </div>
                                <div class="col">
                                <p class="mb-0">
                                    <small class="font-weight-bolder">Category: {{$raffle->categoryraffle->categoryname}}</small>
                                </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
        @endforeach
    </div>

    <div class="row justify-content-around mt-5">
        {{ $raffles->links() }}
    </div>
</div>
@endsection