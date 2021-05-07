@extends('layouts.app')

@section('title','TokoLokal | Manage Event')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="title-home mt-3">Manage Event</h1>
            <div class="text-right"><a href="/events/create" class="btn btn-primary my-3">Add Event</a></div>

            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif

            <table id="dtBasicExample" class="table table-striped table-bordered" style="width:100%">
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
                <tbody>
                    @foreach($events as $event)
                    <tr>
                        <th scope="row">{{$event->id}}</th>
                        <td>{{$event->name}}</td>
                        <td><img src="{{asset('../storage/images/Events/' . $event->picture)}}" width="100px;" height="100px;" alt="Image"></td>
                        <td>{{$event->held_on}}</td>
                        <td>{{$event->website}}</td>
                        <td>{{$event->capacity}}</td>
                        <td>{{$event->about_us}}</td>
                        <td>{{$event->created_at}}</td>
                        <td>
                            <a href="events/{{$event->id}}/edit" class="badge btn-success"><i class="fas fa-edit" style="color:white"></i></a>

                            <form action="events/{{$event->id}}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="badge btn-danger"><i class="fas fa-trash-alt" style="color:white"></i></button>
                            </form>


                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="mt-4"></div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#dtBasicExample').DataTable();
    });
</script>
@endsection