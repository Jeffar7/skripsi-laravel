@extends('layouts.app')

@section('title', 'TokoLokal | Check Raffle')

@section('content')

<div class="container pt-2">
    <div class="row justify-content-center mb-3 ">


        <h1>Joined Raffle</h1>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">User</th>
                    <th scope="col">Product Raffled</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>

            @foreach($users as $user)
            <tbody>
                <tr>
                    <td>{{$user->username}}</td>
                    <td>{{$user->rafflename}}</td>
                    <td><img src="{{asset('../storage/images/Raffles/' . $user->raffleimage)}}" width="100px;" height="100px;" alt="Image"></td>
                    <td><a href="#" class="btn btn-primary">Check</a></td>
                </tr>

            </tbody>
            @endforeach
        </table>


    </div>
</div>

@endsection