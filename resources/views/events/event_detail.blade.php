@extends('layouts.app')

@section('title','TokoLokal | ' .e($event->name))

@section('content')
<div class="container pt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0 bg-transparent">
            <li class="breadcrumb-item"><a href="/" class="text-dark">Home</a></li>
            <li class="breadcrumb-item"><a href="/event" class="text-dark">Event</a></li>
            <li class="breadcrumb-item active text-bold text-dark" aria-current="page" style="color:black;font-weight:bold;">{{$event->name}}</li>
        </ol>
    </nav>
</div>

<div class="container pb-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2 class="text-center mt-3" style="text-transform:capitalize;font-weight:bold">{{$event->name}}</h2>

            <div class="text-center">
                <img src="{{asset('../storage/images/Events/' . $event->picture)}}" class="img-fluid p-3" alt="Couldn't process image" height="323px" width="400px">
            </div>

            <div class="text-center">
                <img src="{{asset('../storage/images/Events/' . $event->detail_picture)}}" class="img-fluid p-3" alt="Couldn't process image" height="323px" width="400px">
            </div>

            <h5 class="text-center mt-3" style="font-weight:bold">Theme</h5>
            <div class="text-center"><p class="text-center font-weight-light">{{$event->theme}}</p></div>

            <h5 class="text-center mt-3" style="font-weight:bold">Website</h5>
            <div class="text-center"><a href="">{{$event->website}}</a></div>
            
            <h5 class="text-center mt-3" style="font-weight:bold">Held On</h5>
            <div class="text-center"><p class="text-center font-weight-light">{{$event->held_on}}</p></div>

            <h5 class="text-center mt-3" style="font-weight:bold">About Us</h5>
            <p class="text-center font-weight-light">{{$event->about_us}}</p>
        </div>
    </div>
</div>
@endsection