@extends('layouts.app')

@section('title','TokoLokal | Event')

@section('content')
<div class="container py-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0 bg-transparent">
            <li class="breadcrumb-item"><a href="/" class="text-dark">Home</a></li>
            <li class="breadcrumb-item active text-bold text-dark" aria-current="page"
                style="color:black;font-weight:bold;">Event</li>
        </ol>
    </nav>
</div>

<div class="container">
    <div class="row justify-content-start">
        @foreach($events as $event)
        <div class="col col-md-4 mb-5">
            <a href="/events/detail/{{$event->id}}" class="text-decoration-none">


                <!-- Awal Gambar -->
                <div class="event-card">
                    <img src="{{asset('../storage/images/Events/'. $event->picture)}}" class="card-img-top" alt="..."
                        style="height: 350px;">
                    <div class="card-body" style="
                    border-top: 2px solid #c4c4c4;
                ">
                        <p class="card-text text-center font-weight-bolder text-dark mb-0">{{$event->name}}</p>
                        <p class="card-text text-center text-secondary text-truncate">{{$event->theme}}</p>
                    </div>
                </div>
                <!-- Akhir Gambar -->

            </a>
        </div>
        @endforeach
    </div>
</div>

<div class="container pt-4">
</div>
@endsection