@extends('layouts.app')

@section('title','TokoLokal | Manage Product')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="title-home mt-3">Manage Product</h1>
            <div class="text-right"><a href="/products/create" class="btn btn-primary my-3">Add Product</a></div>

            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif

            <table id="dtBasicExample" class="table table-striped table-bordered" style="width:100%">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Item ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Picture</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Created At</th>
                        <th scope="col"> Actions </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <th scope="row">{{$product->id}}</th>
                        <td>{{$product->productname}}</td>
                        <td>{{$product->category->name}}</td>
                        <td><img src="{{asset('../storage/images/Products/' . $product->productimage)}}" width="100px;" height="100px;" alt="Image"></td>
                        <td>{{$product->brand['name']}}</td>
                        <td>{{$product->productprice}}</td>
                        <td>{{$product->productquantity}}</td>
                        <td>{{$product->created_at}}</td>
                        <td>
                            <a href="products/{{$product->id}}/edit" class="badge btn-success"><i class="fas fa-edit" style="color:white"></i></a>

                            <form action="products/{{$product->id}}" method="POST" class="d-inline">
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