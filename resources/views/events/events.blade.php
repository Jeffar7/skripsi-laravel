@extends('layouts.app')

@section('title','TokoLokal | Event')

@section('content')
<div class="container py-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0 bg-transparent">
            <li class="breadcrumb-item"><a href="/" class="text-dark">Home</a></li>
            <li class="breadcrumb-item active text-bold text-dark" aria-current="page" style="color:black;font-weight:bold;">Event</li>
        </ol>
    </nav>
</div>

<div class="container">
    <div class="row justify-content-around">
        @foreach($events as $event)
        <a href="/events/detail/{{$event->id}}">
            <div class="col col-sm-4 mb-3">
                <!-- Awal Gambar -->
                <div class="card shadow-lg" style="width: 18rem;">
                    <img src="{{asset('../storage/images/Events/'. $event->picture)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text text-center font-weight-bolder text-dark mb-0">{{$event->name}}</p>
                        <p class="card-text text-center text-secondary text-truncate">{{$event->about_us}}</p>
                    </div>
                </div>
                <!-- Akhir Gambar -->
            </div>
        </a>
        @endforeach
    </div>
</div>

<div class="container pt-4">
</div>
@endsection