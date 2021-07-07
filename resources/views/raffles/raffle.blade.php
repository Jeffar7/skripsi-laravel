@extends('layouts.app')

@section('title','TokoLokal | Raffle')

@section('content')
<div class="container pt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0 bg-transparent">
            <li class="breadcrumb-item"><a href="/" class="text-dark">Home</a></li>
            <li class="breadcrumb-item active text-bold text-dark" aria-current="page" style="color:black;font-weight:bold;">Raffle</li>
        </ol>
    </nav>
</div>

<div class="big-image">
    <div class="overlay">
        <h1>Enter A Raffle</h1>
        <h6>If you want to enter the raffle please read our rules & regulation first</h6>
        <!-- <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        </form> -->
    </div>
</div>

<div class="container mt-4">
    <div class="row justify-content-between mt-4">
        <p class="title-home text-left" style="font-weight:bold;">ITEMS TO BE RAFFLE</p>
        <a href="/allraffle" class="title-home text-right text-decoration-none" style="text-transform:none; font-weight:bold; color:black; font-size:15px;">See More <i class="fas fa-arrow-circle-right"></i></a>
    </div>
    <div class="row justify-content-around">
        @foreach($raffles as $raffle)
        <div class="col-md-3 mb-3">
            <div class="card rounded-lg shadow-lg">
                @if($joined != null && $raffle->id == $joined->raffle_id )
                <a href="#" class="text-decoration-none" style="color:black; pointer-events: none; cursor: default;">
                    <img src="{{asset('../storage/images/Raffles/'. $raffle->raffleimage)}}" class="card-img-top p-3" alt="Image">
                    <div class="card-body border" style="background: #E5E5E5;">
                        <div class="row">
                            <div class="col align-self-end">
                                <p class="text-right mb-0">
                                    <!-- <u> -->
                                    <small class="font-weight-bolder">Started From:</small>
                                    <!-- </u> -->
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col align-self-end">
                                <h5 class="text-right">
                                    <u>
                                        <!-- <small></small> -->
                                        {{date('d M Y',strtotime($raffle->rafflereleasedate))}}
                                    </u>
                                </h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col align-self-start">
                                <p class="about-title mb-0">Item</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col align-self-start">
                                <p class="mb-0">
                                    {{$raffle->brand->name}}
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col align-self-start">
                                <p class="font-weight-bolder mb-0">
                                    {{$raffle->rafflename}}
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col align-self-start">
                                <p class="about-title mb-0">Price</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col align-self-start">
                                <p class="font-weight-normal mb-0">
                                    Rp. {{number_format($raffle->raffleprice)}}
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col align-self-end text-right">
                                @guest
                                <a href="/register" class="btn btn-primary">Enter Now</a>
                                @else
                                @if($raffle->status === 'running')
                                <a href="/raffle/detail/{{$raffle->id}}" class="btn btn-danger disabled">HAVE JOINED</a>
                                @elseif($raffle->status === 'closed')
                                <a href="/raffle/detail/{{$raffle->id}}" class="btn btn-danger disabled">CLOSED</a>
                                @else
                                <a href="/raffle/detail/{{$raffle->id}}" class="btn btn-secondary disabled">UPCOMING</a>
                                @endif
                                @endguest
                            </div>
                        </div>
                    </div>
                </a>

                @else
                <a href="/raffle/description/{{$raffle->id}}" class="text-decoration-none" style="color:black;">
                    <img src="{{asset('../storage/images/Raffles/'. $raffle->raffleimage)}}" class="card-img-top p-3" alt="Image">
                    <div class="card-body border" style="background: #E5E5E5;">
                        <div class="row">
                            <div class="col align-self-end">
                                <p class="text-right mb-0">
                                    <!-- <u> -->
                                    <small class="font-weight-bolder">Started From:</small>
                                    <!-- </u> -->
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col align-self-end">
                                <h5 class="text-right">
                                    <u>
                                        <!-- <small></small> -->
                                        {{date('d M Y',strtotime($raffle->rafflereleasedate))}}
                                    </u>
                                </h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col align-self-start">
                                <p class="about-title mb-0">Item</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col align-self-start">
                                <p class="mb-0">
                                    {{$raffle->brand->name}}
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col align-self-start">
                                <p class="font-weight-bolder mb-0">
                                    {{$raffle->rafflename}}
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col align-self-start">
                                <p class="about-title mb-0">Price</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col align-self-start">
                                <p class="font-weight-normal mb-0">
                                    Rp. {{number_format($raffle->raffleprice)}}
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col align-self-end text-right">
                                @guest
                                <a href="/register" class="btn btn-primary">Enter Now</a>
                                @else
                                @if($raffle->status === 'running')
                                <a href="/raffle/detail/{{$raffle->id}}" class="btn btn-primary">ENTER NOW</a>
                                @elseif($raffle->status === 'closed')
                                <a href="/raffle/detail/{{$raffle->id}}" class="btn btn-danger disabled">CLOSED</a>
                                @else
                                <a href="/raffle/detail/{{$raffle->id}}" class="btn btn-secondary disabled">UPCOMING</a>
                                @endif
                                @endguest
                            </div>
                        </div>
                    </div>
                </a>
                @endif
            </div>
        </div>
        @endforeach
    </div>

    <p class="title-home font-weight-bold text-center mt-4">TIMELINE</p>
    <div class="row justify-content-around my-4">
        <img src="images/raffle_timeline.png" alt="Timeline" class="col-md-10">
    </div>

    <!-- <div class="row justify-content-around mt-5">
        {{ $raffles->links() }}
    </div> -->
</div>


@endsection