@extends('layouts.app')

@section('title','TokoLokal | Transaction History Detail')

@section('content')

<div class="container pt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0 bg-transparent">
            <li class="breadcrumb-item"><a href="/" class="text-dark">Home</a></li>
            <li class="breadcrumb-item active text-bold text-dark" aria-current="page" style="color:black;font-weight:bold;">Transaction History Detail</li>
        </ol>
    </nav>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mb-4">
            <h3 class="font-weight-bold mt-3" style="
            text-align: left;
        ">Transaction History Detail</h3>

            <!-- Status -->
            @if ($message = Session::get('success'))
            <div class="row">
                <div class="col-md-4 align-self-center">
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                </div>
            </div>
            @endif
            @if ($message = Session::get('already'))
            <div class="row">
                <div class="col-md-4 align-self-center">
                    <div class="alert alert-warning alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                </div>
            </div>
            @endif
            <!-- EndStatus -->

            <div class="top-border my-4"></div>

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
                            <a href="/products/review/{{$product->id}}" class="btn btn-warning">Write Review</a>
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
            <div class="mb-5"></div>
        </div>
    </div>
</div>

@endsection