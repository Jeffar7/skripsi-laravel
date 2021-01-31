@extends('layouts.template')

@section('title','Man')

@section('content')

Home > Man

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            @foreach($products as $product)
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$product->productname}}</h5>
                    <p class="card-text">{{$product->productdescription}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>



@endsection