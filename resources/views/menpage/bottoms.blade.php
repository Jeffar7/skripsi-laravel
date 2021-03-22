@extends('layouts.template')

@section('title','Men - Bottoms | TokoLokal')

@section('content')

<h1>Detail Men - Bottoms</h1>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Image</th>
            <th scope="col">Product Name</th>
            <th scope="col">Price</th>
        </tr>
    </thead>
    @foreach($bottoms as $bottom)
    <tbody>
        @foreach($bottom->product as $product)
        <tr>
            <th scope="row">1</th>
            <td><a href="/men-tops/detail/{{$product->id}}"><img src="{{asset('uploads/products/' . $product->productimage)}}" width="100px;" height="100px;" alt="Image"></a></td>
            <td><a href="/men-tops/detail/{{$product->id}}">{{$product->productname}}</a></td>
            <td>{{$product->productprice}}</td>
        </tr>
        @endforeach
    </tbody>
    @endforeach
</table>

@endsection