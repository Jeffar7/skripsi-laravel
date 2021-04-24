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
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</div>

<div class="container mt-4">
    <p class="title-home font-weight-bold text-left">ITEMS TO BE RAFFLE</p>
    <div class="row justify-content-around">
        @foreach($raffles as $raffle)
        <div class="col-sm- mb-3">
            <div class="card rounded-lg shadow-lg" style="width: 18rem;">
                <img src="{{asset('../storage/images/Raffles/'. $raffle->raffleimage)}}" class="card-img-top p-3" alt="Image">
                <div class="card-body border" style="background: #E5E5E5;">
                    <div class="row">
                        <div class="col align-self-end">
                            <p class="text-right">
                                <u>
                                    <small>{{$raffle->rafflereleasedate}}</small>
                                </u>
                            </p>
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
                            <p class="font-weight-normal mb-0">
                                Rp. {{$raffle->raffleprice}}
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col align-self-end text-right">
                            @if(Auth::check() && Auth::user()->role === 'customer')
                            <a href="/raffle/detail/{{$raffle->id}}" class="btn btn-primary">Enter Now</a>
                            @else
                            <a href="/register" class="btn btn-primary">Enter Now</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

        </div>
        @endforeach
    </div>
    <div class="row justify-content-around mt-5">
        {{ $raffles->links() }}
    </div>
</div>


@endsection()