@extends('layouts.template')

@section('title','Brand')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h1 class="text-center mt-3">Brand</h1>

            <thead class="thead-dark">
                <tr>

                    <th scope="col">Brand Name</th> <br>
                    <!-- <th scope="col">Picture</th> -->

                </tr>
            </thead>


            @foreach($brands as $brand)
            <tbody>
                <tr>
                    <td>{{$brand->name}}</td> <br>
                    <!-- <td>{{$brand->picture}}</td> -->
                </tr>
            </tbody>

            @endforeach
        </div>
    </div>
</div>

@endsection