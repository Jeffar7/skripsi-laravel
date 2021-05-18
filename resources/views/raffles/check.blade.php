@extends('layouts.app')

@section('title', 'TokoLokal | Check Raffle')

@section('content')

<div class="container pt-2">
    <div class="row my-3 justify-content-md-center">

        <div class="col-md-auto">
            <div class="card" style="width: 18rem;">
                <img src="{{asset('../storage/images/Raffles/' . $raffle->raffleimage)}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$raffle->rafflename}}</h5>
                    <p class="card-text">{{$raffle->raflledescription}}.</p>
                    <p class="card-text">Rp. {{$raffle->raffleprice}}</p>
                </div>
            </div>

        </div>

    </div>

    <div class="row mb-3">

        <div class="col">


            @if($raffle->status == 'closed')
            <div class="text-right"><a href="/raffles/check/random/{{$raffle->id}}" type="button" class="btn btn-primary" id="btn-submit">Choose Random Winner</a></div>
            @else
            <div class="text-right"><a href="/raffles/check/random/{{$raffle->id}}" type="button" class="btn btn-primary disabled" id="btn-submit">Choose Random Winner</a></div>
            @endif
            <div class="col">

                <h2 class="text-center">Joined Users</h2>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Username</th>
                            <th scope="col">Image</th>
                            <th scope="col">Email</th>
                            <th scope="col">Joined at</th>
                            <th scope="col">Closedate </th>
                            <th scope="col">Status </th>
                        </tr>
                    </thead>

                    @foreach($users as $user)
                    <tbody>
                        <tr>
                            <td>{{$user->username}}</td>
                            <td><img src="{{asset('../storage/images/Users/' . $user->picture)}}" width="100px;" height="100px;" alt="Image"></td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->created_at}}</td>
                            <td>{{$user->raffleclosedate}}</td>
                            <td>{{$user->status}}</td>
                        </tr>

                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $("#btn-submit").click(function() {
            $(this).prop("disabled", true);
            $(this).css("cursor", "not-allowed");
        });
    });
</script>
@endsection