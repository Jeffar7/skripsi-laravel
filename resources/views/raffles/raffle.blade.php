@extends('layouts.app')

@section('title','TokoLokal | Raffle')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-around">
        @foreach($raffles as $raffle)
        <div class="col-sm- mb-3">

            <div class="card shadow-lg" style="width: 18rem; height:27rem;">
                <img src="{{asset('/uploads/raffles/'. $raffle->raffleimage)}}" class="card-img-top p-3" alt="Image">
                <div class="card-body">
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
                            <p>
                                {{$raffle->brand->name}}
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col align-self-start">
                            <p class="font-weight-bolder">
                                {{$raffle->rafflename}}
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col align-self-start">
                            <p class="font-weight-normal">
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