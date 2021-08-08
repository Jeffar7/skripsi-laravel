@extends('layouts.app')

@section('title', 'TokoLokal | Check Raffle')

@section('content')

<div class="container py-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0 bg-transparent">
            <li class="breadcrumb-item"><a href="/" class="text-dark">Home</a></li>
            <li class="breadcrumb-item"><a href="/manageraffle" class="text-dark">Raffle</a></li>
            <li class="breadcrumb-item active text-bold text-dark" aria-current="page" style="color:black;font-weight:bold;">{{$raffle->rafflename}}</li>
        </ol>
    </nav>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 text-center">
            <p class="h4 font-weight-bold text-capitalize text-secondary">{{$raffle->brand->name}}</p>
        </div>
    </div>
    <div class="row justify-content-center mb-3">
        <div class="col-12 text-center">
            <p class="h4 font-weight-bold text-capitalize">{{$raffle->rafflename}}</p>
        </div>
    </div>

    <div class="row justify-content-center mb-5">
        <div class="col-12 text-center">
            <img src="{{asset('../storage/images/Raffles/'. $raffle->raffleimage)}}" class="border border-secondary rounded-lg shadow-lg" alt="image" style="height: 400px; max-width: 100%;">
        </div>
    </div>

    <div class="form-row justify-content-around mb-3">
        <div class="col-md-12">
            @if($raffle->status == 'closed' & $is_random == 0)
            <a href="/raffles/check/random/{{$raffle->id}}" type="button" class="btn btn-primary btn-block" id="btn-submit">Choose Random Winner</a>
            @else
            <a href="/raffles/check/random/{{$raffle->id}}" type="button" class="btn btn-primary btn-block disabled" id="btn-submit">Choose Random Winner</a>
            @endif
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12">
            <p class="title-home text-left" style="font-weight:bold;">RAFFLE WINNER</p>
        </div>
    </div>
    <div class="row justify-content-center mb-3">
        <div class="col-12">
            <div class="card">
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr class="text-center">
                            <th scope="col">Username</th>
                            <th scope="col">Image</th>
                            <th scope="col">Email</th>
                            <th scope="col">Joined At</th>
                            <th scope="col">Close Date </th>
                            <th scope="col">Status </th>
                        </tr>
                    </thead>

                    @foreach($users as $user)
                    <tbody class="text-center">
                        <tr>
                            <td>{{$user->username}}</td>
                            <td><img src="{{asset('../storage/images/Users/' . $user->picture)}}" width="100px;" height="100px;" alt="Image"></td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->created_at}}</td>
                            <td>{{$user->raffleclosedate}}</td>
                            <td>{{$user->is_win}}</td>
                        </tr>

                    </tbody>
                    @endforeach
                </table>
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