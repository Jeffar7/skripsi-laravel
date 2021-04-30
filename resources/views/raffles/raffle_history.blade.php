@extends('layouts.app')

@section('title','TokoLokal | Raffle History')

@section('content')

<div class="container">

    <div class="row justify-content-center">

        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Raffle Product</th>
                    <th scope="col">Price</th>
                    <th scope="col">Raffle Close Date</th>
                    <th scope="col">Status</th>
                    <th scope="col">Message</th>
                </tr>
            </thead>
            @if($raffles->count() > 0)
            @foreach($raffles as $raffle)
            <tbody>
                <tr>
                    <th scope="row"><img src="{{asset('../storage/images/Raffles/' . $raffle->raffleimage)}}" width="100px;" height="80px;" alt="Image"></th>
                    <td>{{$raffle->rafflename}}</td>
                    <td>Rp. {{$raffle->raffleprice}}</td>
                    <td>{{$raffle->raffleclosedate}}</td>
                    <td>CLOSED</td>
                    <td>Try again next time!</td>
                </tr>
            </tbody>
            @endforeach
            @endif
        </table>

    </div>

</div>

@endsection