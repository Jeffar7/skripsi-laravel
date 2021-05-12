@extends('layouts.app')

@section('title','TokoLokal | Payment History Detail')

@section('content')

<div class="container pt-2">
    <div class="row justify-content-center mb-3 ">

        <h2>Payment History Detail</h2>

        <table class="table">

            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif

            <thead class="thead-dark">
                <tr>
                    <th scope="col">Prooduct Name</th>
                    <th scope="col">Picture</th>
                    <th scope="col">Qty</th>
                    <th scope="col">Size</th>
                    <th scope="col">Price</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            @foreach($order_product_detail as $product)
            <tbody>
                <tr>
                    <th scope="row"><a href="/men-tops/detail/{{$product->product_id}}">{{$product->productname}}</a></th>
                    <td> <img src="{{asset('../storage/images/Products/' . $product->productimage)}}" width="200px;" height="100px;" alt="Image"></td>
                    <td>{{$product->quantity}}</td>
                    <td>{{$product->productsize}}</td>
                    <td>Rp. {{$product->productprice}}</td>
                    <td>
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
            </tbody>
            @endforeach
        </table>

    </div>
</div>

@endsection