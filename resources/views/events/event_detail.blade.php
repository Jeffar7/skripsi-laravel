@extends('layouts.app')

@section('title','TokoLokal | Event')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center mb-5">
        <h2 class="font-weight-bolder mb-5">{{$event->name}}</h2>
        <img src="{{asset('/uploads/events/'. $event->picture)}}" class="img-fluid img-thumbnail" alt="picture">
    </div>

    <div class="row justify-content-center mb-5">
        <div class="col-12 text-center">
            <label for="website" class="h4 font-weight-bold">Website</label><br>
            <a href="/{{$event->website}}" id="website" class="h3 font-weight-bolder">{{$event->website}}</a>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-12 text-center">
            <label for="website" class="h4 font-weight-bold">About Us</label><br>
            <p id="website" class="h5 ">{{$event->about_us}}</p>
        </div>
    </div>
</div>

@endsection