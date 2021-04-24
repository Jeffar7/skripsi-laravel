@extends('layouts.app')

@section('title','TokoLokal | Cart')

@section('content')

<div class="container">
    <div class="row justify-content-center">
    <h1>Waiting For Review</h1>
        <div class="col-md-10">

        <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Product</th>
                <th scope="col">Arrived At</th>
                <th scope="col">Action</th>
            </tr>
        </thead>

        @if ($all_order->count() > 0)
         @foreach ($all_order as $product)
        <tbody>

        <tr>
            <th scope="row">#</th>
            <td> <img src="{{asset('uploads/products/' . $product->productimage)}}" width="100px;" height="100px;" alt="Image"></td>
            <td>{{$product->productname}}</td>
            <td>{{$product->created_at}}</td>
            <td>
             <a href="products/review/{{$product->id}}" class="btn btn-success"> Write Review </a>
            </td>
        </tr>

        </tbody>
        @endforeach
        @endif
        </table>
        </div>
    </div>
</div>

@endsection