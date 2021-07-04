@extends('layouts.app')

@section('title','TokoLokal | Payment History Detail')

@section('content')

<div class="container pt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0 bg-transparent">
            <li class="breadcrumb-item"><a href="/" class="text-dark">Home</a></li>
            <li class="breadcrumb-item active text-bold text-dark" aria-current="page" style="color:black;font-weight:bold;">Payment History Detail</li>
        </ol>
    </nav>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="title-home mt-3">Payment History Detail</h1>

            <table class="table table-striped table-bordered" style="width:100%">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" class="text-center">Product Name</th>
                        <th scope="col" class="text-center">Picture</th>
                        <th scope="col" class="text-center">Qty</th>
                        <th scope="col" class="text-center">Size</th>
                        <th scope="col" class="text-center">Price</th>
                        <th scope="col" class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($order_product_detail as $product)
                    <tr>
                        <th scope="row" class="text-center font-weight-normal"><a href="/product/detail/{{$product->product_id}}" class="text-dark">{{$product->productname}}</a></th>
                        <td class="text-center font-weight-normal"> <img src="{{asset('../storage/images/Products/' . $product->productimage)}}" width="100px;" height="80px;" alt="Image"></td>
                        <td class="text-center font-weight-normal">{{$product->quantity}}</td>
                        <td class="text-center font-weight-normal">{{$product->productsize}}</td>
                        <td class="text-center font-weight-normal">Rp. {{number_format($product->productprice)}}</td>
                        <td class="text-center font-weight-normal">
                            @if($product->is_review == 'no')
                            <a href="/products/review/{{$product->id}}" class="btn btn-success">Write Review</a>
                            @endif
                            <a href="/payment-history/buy-again/{{$product->id}}" class="btn btn-success">Buy Again</a>
                            <!-- <form action="/payment-history/buy-again/{{$product->id}}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger">Buy Again</button>
                            </form> -->
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-4"></div>
        </div>
    </div>
</div>

@endsection