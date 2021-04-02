@extends('layouts.app')

@section('title','TokoLokal | Manage Raffle')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <h1 class="text-center mt-3">Manage Raffle</h1>
            <a href="/raffles/create" class="btn btn-primary my-3">Add Raffle</a>

            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif

            <div class="card ">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Item ID</th>
                            <th scope="col">Raffle Name</th>
                            <th scope="col">Image</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Category</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Price</th>
                            <th scope="col">Description</th>
                            <th scope="col">Released Date</th>
                            <th scope="col">Actions </th>
                        </tr>
                    </thead>
                    @foreach($raffles as $raffle)
                    <tbody>
                        <tr>
                            <th scope="row">{{$raffle->id}}</th>
                            <td>{{$raffle->rafflename}}</td>
                            <td><img src="{{asset('uploads/raffles/' . $raffle->raffleimage)}}" width="100px;" height="100px;" alt="Image"></td>
                            <td>{{$raffle->brand->name}}</td>
                            <td>{{$raffle->categoryraffle->categoryname}}</td>
                            <td>{{$raffle->rafflequantity}}</td>
                            <td>{{$raffle->raffleprice}}</td>
                            <td>{{$raffle->raffledescription}}</td>
                            <td>{{$raffle->rafflereleasedate}}</td>
                            <td>
                                <a href="raffles/{{$raffle->id}}/edit" class="badge btn-success">Edit</a>

                                <form action="raffles/{{$raffle->id}}" method="POST" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="badge btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>

                    @endforeach
                </table>

            </div>

        </div>
    </div>
</div>


@endsection