@extends('layouts.template')

@section('title','Brand')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h1 class="text-center mt-3">Brand</h1>

            <div class="card ">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Brand Name</th> <br>
                            <!-- <th scope="col">Picture</th> -->
                        </tr>
                    </thead>


                    <tbody>
                        @foreach($brands as $brand)
                        <tr>
                            <td> <a href="/brands/{{$brand->id}}">{{$brand->name}}</a></td> <br>
                            <!-- <td>{{$brand->picture}}</td> -->
                        </tr>
                        @endforeach
                    </tbody>


                </table>
            </div>
        </div>
    </div>
</div>

@endsection