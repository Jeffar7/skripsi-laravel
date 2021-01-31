@extends('layouts.template')

@section('title','Detail Brand')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h1 class="text-center mt-3">{{$brand->name}}</h1>

            <img src="image\nike.jpg" class="img-fluid" alt="Responsive image">

            <h1 class="text-center mt-3">About Us</h1>

            <p class="text-center">{{$brand->about}}</p>

        </div>
    </div>
</div>

@endsection