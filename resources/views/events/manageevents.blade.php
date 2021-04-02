@extends('layouts.app')

@section('title','TokoLokal | Manage Event')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-">

            <h1 class="text-center mt-3">Manage Event</h1>
            <a href="/events/create" class="btn btn-primary my-3">Add Event</a>

            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif

            <div class="card ">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Event ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Picture</th>
                            <th scope="col">Held On</th>
                            <th scope="col">Website</th>
                            <th scope="col">Capacity</th>
                            <th scope="col">About Us</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Actions </th>
                        </tr>
                    </thead>
                    @foreach($events as $event)
                    <tbody>
                        <tr>
                            <th scope="row">{{$event->id}}</th>
                            <td>{{$event->name}}</td>
                            <td><img src="{{asset('uploads/events/' . $event->picture)}}" width="100px;" height="100px;" alt="Image"></td>
                            <td>{{$event->held_on}}</td>
                            <td>{{$event->website}}</td>
                            <td>{{$event->capacity}}</td>
                            <td>{{$event->about_us}}</td>
                            <td>{{$event->created_at}}</td>
                            <td>
                                <a href="events/{{$event->id}}/edit" class="badge btn-success">Edit</a>

                                <form action="events/{{$event->id}}" method="POST" class="d-inline">
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