@extends('layouts.app')

@section('title','TokoLokal | Manage User')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="title-home mt-3 font-weight-bold">Manage User</h1>
            <div class="text-right"><a href="/users/create" class="btn btn-primary my-3">Add User</a></div>

            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif

            <table id="dtBasicExample" class="table table-striped table-bordered" style="width:100%">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">User ID</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <th scope="row">{{$user->id}}</th>
                        <td>{{$user->first_name}} {{$user->last_name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->role}}</td>
                        <td>{{$user->created_at}}</td>
                        <td>
                            <a href="users/{{$user->id}}/edit" class="badge btn-success"><i class="fas fa-edit" style="color:white"></i></a>
                            <a href="users/{{$user->id}}/delete" class="delete-modal badge btn-danger" data-value="{{ $user->id }}" data-toggle="modal" data-target="#exampleModal{{ $user->id }}"><i class="fas fa-trash-alt" style="color:white"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            @foreach ($users as $user)
            <div class="modal fade" id="exampleModal{{ $user->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-sm">
                    <div class="modal-content shadow-sm">
                        <form action="/users/{{ $user->id }}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <div class="modal-body">
                                <div class="faq-section-logo">
                                    <img src="http://127.0.0.1:8000/../storage/images/Wish List Page/DeleteLogo.png" class="rounded-0 image-cat" alt="User Delete Confirmation" width="50px" height="">
                                </div>
                                <h3 class="text-center">Are you sure?</h3>
                                <p class="text-center font-weight-normal mb-0">Do you really want to delete 
                                <br>
                                <span class="font-weight-bold">{{$user->first_name}} {{$user->last_name}}</span> item?</p> 
                                <p class="text-center font-weight-normal mb-0">This process cannot be undone.</p>
                            </div>
                            <div class="modal-footer justify-content-around pt-0 border-top-0">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger" name="delete_user">Delete</button>
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
            $('button[name="delete_user"]').val(delete_id);
        });
    });
</script>

@endsection