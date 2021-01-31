@extends('layouts.template')

@section('title','User Control')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h1 class="text-center mt-3">User Control</h1>

            <a href="/users/create" class="btn btn-primary my-3">Add User</a>

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
                        <td>{{$user->username}}</td>
                        <td>{{$user->role}}</td>
                        <td>{{$user->created_at}}</td>
                        <td>
                            <a href="" class="badge badge-success">edit</a>
                            <a href="" class="badge badge-danger">delete</a>
                        </td>

                    </tr>
                </tbody>


                @endforeach

            </table>

        </div>
    </div>
</div>





@endsection