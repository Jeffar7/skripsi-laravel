@extends('layouts.app')

@section('title','TokoLokal | Manage User')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h1 class="text-center mt-3">User Control</h1>

            <a href="/users/create" class="btn btn-primary my-3">Add User</a>

            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif

            <table class="table">
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
                            <a href="users/{{$user->id}}/edit" class="badge badge-success">Edit</a>

                            <form action="/users/{{$user->id}}" method="POST" class="d-inline">
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





@endsection