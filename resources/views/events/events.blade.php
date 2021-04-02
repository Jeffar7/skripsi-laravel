@extends('layouts.app')

@section('title','TokoLokal | Event')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-around">

        @foreach($events as $event)

        <a href="/events/detail/{{$event->id}}">

            <div class="col col-sm-4 mb-3">
                <!-- Awal Gambar -->

                <div class="card shadow-lg" style="width: 18rem;">
                    <img src="{{asset('/uploads/events/'. $event->picture)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text text-center font-weight-bolder">{{$event->name}}.</p>
                        <p class="card-text">{{$event->about_us}}</p>
                    </div>
                </div>

                <!-- Akhir Gambar -->
            </div>
        </a>

        @endforeach


    </div>
</div>

@endsection