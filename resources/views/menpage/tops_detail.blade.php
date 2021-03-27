@extends('layouts.app')

@section('title','TokoLokal | Men - Tops')

@section('content')

<h1>Detail Men - Tops</h1>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

            <div class="card" style="width: 18rem;">
                <img src="{{asset('uploads/products/' . $product_tops->productimage)}}" width="100px;" height="100px;" alt="Image">
                <div class="card-body">
                    <h5 class="card-title">{{$product_tops->productname}}</h5>
                    <p class="card-text">{{$product_tops->productdescription}}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Price: Rp. {{$product_tops->productprice}}</li>
                    <li class="list-group-item">Size: {{$product_tops->productsize}}</li>
                    <li class="list-group-item"><a href="#"><i class="bi bi-heart-fill"></a></i></li>
                </ul>
                <div class="card">
                    <a href="#" class="card-link">Select Size</a>
                    <a href="#" class="card-link">Quantity</a>
                    <a href="#" class="card-link">Add to Cart</a>
                    <button class="btn btn-dark"><a href="#" class="card-link">Buy Now</a></button>
                </div>
            </div>

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Review</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Details</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Size Details</a>
                </li>
            </ul>

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    @foreach($reviews as $review)
                    <br>
                    @if($review->product_id == $product_tops->id)
                    <div class="media">
                        <img src="{{asset('uploads/users/' . $review->user->picture)}}" width="100px;" height="100px;" alt="Image" class="mr-3">
                        <div class="media-body">
                            <h4 class="mt-0">{{$review->user->username}}</h4>
                            <h5 class="mt-0">{{$review->rating_score}}</h5>
                            <p>{{$review->review_description}}.</p>
                        </div>
                    </div>

                    @endif

                    @endforeach
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
            </div>

        </div>
    </div>
</div>

@endsection