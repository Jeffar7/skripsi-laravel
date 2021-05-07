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
                    <th scope="col-md-2">Image</th>
                    <th scope="col-md-2">Raffle Product</th>
                    <th scope="col-md-2">Price</th>
                    <th scope="col-md-2">Raffle Close Date</th>
                    <th scope="col-md-2">Status</th>
                    <th scope="col-md-2">Message</th>
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
                    <td>{{$raffle->status}}</td>
                    @if($raffle->status == 'pending')
                    <td>Waiting until raffle closedate</td>
                    @elseif($raffle->status == 'closed')
                    <td>wait for the system to determine the winner</td>
                    @elseif($raffle->status == 'lose')
                    <td>sorry you are not lucky, please choose another raffle product.</td>
                    @else
                    <td>congratulations you can buy this product. click the following <a href="#!">link</a> to continue the transaction</td>
                    @endif

                </tr>
            </tbody>
            @endforeach
            @endif
        </table>

    </div>

</div>

@endsection