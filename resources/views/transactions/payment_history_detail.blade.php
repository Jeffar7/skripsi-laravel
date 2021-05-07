@extends('layouts.app')

@section('title','TokoLokal | Payment History Detail')

@section('content')

<div class="container pt-2">
    <div class="row justify-content-center mb-3 ">

        <h2>Payment History Detail</h2>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Prooduct Name</th>
                    <th scope="col">Picture</th>
                    <th scope="col">Qty</th>
                    <th scope="col">Size</th>
                    <th scope="col">Price</th>
                </tr>
            </thead>
            @foreach($order_product_detail as $product)
            <tbody>
                <tr>
                    <th scope="row"><a href="/men-tops/detail/{{$product->product_id}}">{{$product->productname}}</a></th>
                    <td> <img src="{{asset('../storage/images/Products/' . $product->productimage)}}" width="200px;" height="100px;" alt="Image"></td>
                    <td></td>
                    <td>{{$product->productsize}}</td>
                    <td>Rp. {{$product->productprice}}</td>
                </tr>
            </tbody>
            @endforeach
        </table>

    </div>
</div>

@endsection