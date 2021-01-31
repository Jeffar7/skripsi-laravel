@extends('layouts.template')

@section('title','Manage Brand')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

            <h1 class="text-center mt-3">Manage Brand</h1>
            <a href="/brands/create" class="btn btn-primary my-3">Add Brand</a>

            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif

            <div class="card ">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Brand ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Picture</th>
                            <th scope="col">Owner</th>
                            <th scope="col">Website</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>

                    @foreach($brands as $brand)
                    <tbody>
                        <tr>
                            <th scope="row">{{$brand->id}}</th>
                            <td>{{$brand->name}}</td>
                            <td>{{$brand->picture}}</td>
                            <td>{{$brand->owner}}</td>
                            <td>{{$brand->website}}</td>
                            <td>{{$brand->created_at}}</td>
                            <td>
                                <a href="#" class="badge btn-success">edit</a>
                                <a href="#" class="badge btn-danger">delete</a>
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