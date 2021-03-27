@extends('layouts.template')

@section('title','Manage Product')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

            <h1 class="text-center mt-3">Manage Product</h1>
            <a href="/products/create" class="btn btn-primary my-3">Add Product</a>

            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif

            <div class="card ">
                <table class="table">
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
                    @foreach($products as $product)
                    <tbody>
                        <tr>
                            <th scope="row">{{$product->id}}</th>
                            <td>{{$product->productname}}</td>
                            <td>{{$product->category->name}}</td>
                            <td><img src="{{asset('uploads/products/' . $product->productimage)}}" width="100px;" height="100px;" alt="Image"></td>
                            <td>{{$product->brand['name']}}</td>
                            <td>{{$product->productprice}}</td>
                            <td>{{$product->productquantity}}</td>
                            <td>{{$product->created_at}}</td>
                            <td>
                                <a href="products/{{$product->id}}/edit" class="badge btn-success">Edit</a>

                                <form action="products/{{$product->id}}" method="POST" class="d-inline">
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