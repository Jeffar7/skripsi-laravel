@extends('layouts.app')

@section('title','TokoLokal | Manage Brand')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="title-home mt-3">Manage Brand</h1>
            <div class="text-right"><a href="/brands/create" class="btn btn-primary my-3">Add Brand</a></div>

            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif

            <table id="dtBasicExample" class="table table-striped table-bordered" style="width:100%">
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
                <tbody>
                    @foreach($brands as $brand)
                    <tr>
                        <th scope="row">{{$brand->id}}</th>
                        <td>{{$brand->name}}</td>
                        <td><img src="{{asset('../storage/images/Brands/' . $brand->picture)}}" class="img-fluid p-3" alt="Couldn't process image" height="323px" width="400px"></td>
                        <td>{{$brand->owner}}</td>
                        <td>{{$brand->website}}</td>
                        <td>{{$brand->created_at}}</td>
                        <td>
                            <a href="brands/{{$brand->id}}/edit" class="badge btn-success"><i class="fas fa-edit" style="color:white"></i></a>

                            <form action="brands/{{$brand->id}}" method="post" class="d-inline">
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
    $(document).ready(function () {
    $('#dtBasicExample').DataTable();
    });
</script>
@endsection