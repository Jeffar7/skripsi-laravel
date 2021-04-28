@extends('layouts.app')

@section('title','TokoLokal | Manage User')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="title-home mt-3">Manage User</h1>
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
                            <form action="/users/{{$user->id}}" method="POST" class="d-inline">
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