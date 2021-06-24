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
                            <a href="events/{{$event->id}}/delete" class="delete-modal badge btn-danger" data-value="{{ $event->id }}" data-toggle="modal" data-target="#exampleModal{{ $event->id }}"><i class="fas fa-trash-alt" style="color:white"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            @foreach ($events as $event)
            <div class="modal fade" id="exampleModal{{ $event->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-sm">
                    <div class="modal-content shadow-sm">
                        <form action="/events/{{ $event->id }}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <div class="modal-body">
                                <h3 class="text-center">Are you sure?</h3>
                                <p class="text-center font-weight-normal mb-0">Do you really want to delete 
                                <br>
                                <span class="font-weight-bold">{{$event->name}}</span> item?</p> 
                                <p class="text-center font-weight-normal mb-0">This process cannot be undone.</p>
                            </div>
                            <div class="modal-footer justify-content-around pt-0 border-top-0">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger" name="delete_event">Delete</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="mt-4"></div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#dtBasicExample').DataTable();

        $(document).on("click", ".delete-modal", function (e) {
            var delete_id = $(this).attr('data-value');
            $('button[name="delete_event"]').val(delete_id);
        });
    });
</script>
@endsection