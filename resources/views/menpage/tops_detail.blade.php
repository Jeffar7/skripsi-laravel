@extends('layouts.app')

@section('title','TokoLokal | ' .e($product_tops->productname))

@section('content')
<div class="container py-4">
    <div>
        <p class="text-left">Home > {{$product_tops->category->name}} > {{$product_tops->productname}}</p>
    </div>
</div>


<div class="container">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <div class="row">
        <div class="col-md-2  ml-3 mr-4 border border-dark">
            <p>photo slider box</p>
        </div>
        <div class="col-md-5 mr-4 border border-dark">
            <img src="{{asset('uploads/products/' . $product_tops->productimage)}}" width="100px;" height="100px;" alt="Image">
        </div>
        <div class="col-md-4 border border-dark">
            <div class="card-body">
                <p class="about-title mb-0" style="text-decoration:normal;">{{$product_tops->brand->name}}</p>
                <p class="mb-0" style="font-weight:bold;">{{$product_tops->productname}}</p>
                <p style="font-weight:bold;">Rp. {{$product_tops->productprice}}</p>
                <p>{{$product_tops->productdescription}}</p>
            </div>
            <div class="row card-body mb-2" style="height:0px;">
                <div class="dropdown">
                    <button class="btn-filter dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Select Size
                    </button>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li>
                            <a href="">{{$product_tops->productsize}}</a>
                        </li>
                    </div>
                </div>
                <div class="dropdown ml-3">
                    <button class="btn-filter dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Quantity
                    </button>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li>
                            <a href=""></a>
                        </li>
                    </div>
                </div>
            </div>
            <div class="card-body mb-1" style="height:auto;">
                <!-- wish list button -->
                @guest
                <div class="row mb-3">
                    <a href="/login" class="card-link pt-2 text-black"><i class="far fa-heart" style="font-size: 22px;"></i></a>
                    <button class="btn btn-light border border-dark ml-3" style="width:300px; background-color:white;"><a href="/login" class="card-link" style="color:black;">Add to Cart</a></button>
                </div>
                <div class="row">
                    <button class="btn btn-dark" style="width:338px;"><a href="/login" class="card-link" style="color:white;">Buy Now</a></button>
                </div>
                @else
                <div class="row mb-3">
                    <form action="/wish-list/save" method="POST">
                        @csrf
                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                        <input type="hidden" name="product_id" value="{{$product_tops->id}}">
                        <button type="submit" class="pt-2 bg-white" style="height:34px;border-width: 0px;"><i class="far fa-heart" style="font-size: 22px;"></i></button>
                    </form>
                    <!--akhir wish list button -->
                    <button class="btn btn-light border border-dark ml-3" style="width:300px; background-color:white;"><a href="/product-cart" class="card-link" style="color:black;">Add to Cart</a></button>
                </div>
                <div class="row">
                    <button class="btn btn-dark" style="width:338px;"><a href="/buy-now/{{$product_tops->id}}" class="card-link" style="color:white;">Buy Now</a></button>
                </div>
                @endguest
            </div>
        </div>
    </div>
</div>

<div class="container mt-3">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="detail-tab" data-toggle="tab" href="#detail" role="tab" aria-controls="detail" aria-selected="false">Details</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="sizedetail-tab" data-toggle="tab" href="#sizedetail" role="tab" aria-controls="sizedetail" aria-selected="false">Size Details</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="true">Review</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="policy-tab" data-toggle="tab" href="#policy" role="tab" aria-controls="policy" aria-selected="false">Return Policy</a>
        </li>
    </ul>

    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active mt-3" id="detail" role="tabpanel" aria-labelledby="detail-tab">Detail</div>
        <div class="tab-pane fade mt-3" id="sizedetail" role="tabpanel" aria-labelledby="sizedetail-tab">Size Detail</div>
        <div class="tab-pane fade mt-3" id="review" role="tabpanel" aria-labelledby="review-tab">
            @guest
            <div class="card mb-3" style="border-radius: 10px; box-shadow: 1px 2px #888888; background-color: #F8F8F8">
                <div class="form-group text-center mb-0 pt-2">
                    <label for="commentbox" class="font-weight-bold" style="color: #888888">Please, log in first to write review.</label>
                </div>
            </div>
            @else
            <div class="card mb-3" style="border-radius: 10px; box-shadow: 1px 2px #888888; background-color: #F8F8F8">
                <div class="form-group">
                    <div class="row my-1 ml-2">
                        <label for="commentbox">Write and submit review:</label>
                    </div>
                    <div class="row my-1 ml-2">
                        <textarea name="review" id="commentbox" rows="3" cols="123"></textarea>
                        <button class="btn btn-light border border-dark ml-3 mt-3" type="submit" style="height:37px;"><a href="#" class="card-link" style="color:black;">Submit</a></button>
                    </div>
                </div>
            </div>
            @endguest

            @foreach($reviews as $review)
            @if($review->product_id == $product_tops->id)
            <div class="card mb-3" style="border-radius: 10px; box-shadow: 1px 2px #888888">
                <div class="media ml-3 mt-3">
                    <div class="col-md-2">
                        <img src="{{asset('uploads/users/' . $review->user->picture)}}" width="100px;" height="100px;" alt="Image" class="mr-3">
                    </div>
                    <div class="col-md-8">
                        <div class="media-body">
                            <h4 class="mt-0 text-left">{{$review->user->username}}</h4>
                            @if($review->rating_score == 5)
                            <p class="card-text"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> {{ $review->rating_score }}</p>
                            @elseif($review->rating_score == 4.5)
                            <p class="card-text"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> <i class="fa fa-star-half-o" aria-hidden="true"></i><i class="far fa-star"></i> {{ $review->rating_score }}</p>
                            @elseif($review->rating_score == 4)
                            <p class="card-text"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i> {{ $review->rating_score }}</p>
                            @elseif($review->rating_score == 3.5)
                            <p class="card-text"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fa fa-star-half-o" aria-hidden="true"></i><i class="far fa-star"></i><i class="far fa-star"></i> {{ $review->rating_score }}</p>
                            @elseif($review->rating_score == 3)
                            <p class="card-text"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> {{ $review->rating_score }}</p>
                            @elseif($review->rating_score == 2.5)
                            <p class="card-text"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fa fa-star-half-o" aria-hidden="true"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> {{ $review->rating_score }}</p>
                            @elseif($review->rating_score == 2)
                            <p class="card-text"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> {{ $review->rating_score }}</p>
                            @elseif($review->rating_score == 1.5)
                            <p class="card-text"><i class="fas fa-star"></i><i class="fa fa-star-half-o" aria-hidden="true"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> {{ $review->rating_score }}</p>
                            @elseif($review->rating_score == 1)
                            <p class="card-text"><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> {{ $review->rating_score }}</p>
                            @endif
                            <p>{{$review->review_description}}.</p>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <p class="mt-0 font-italic" style="font-size:12px; color: #888888;">{{$review->created_at}}</p>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
        <div class="tab-pane fade mt-3" id="policy" role="tabpanel" aria-labelledby="policy-tab">
            <div>
                <ul class="ml-4">
                    <li>
                        Refund request must be made within 14 days of delivery date. After 14 days from delivery date you must contact TokoLokal Customer Service to determine the best course of action. TokoLokal will not issue refunds for products purchades through other entities, such as distributors or retail partners. Defective units arecovered under TokoLokal oneyear limted warranty policy will be replaced at TokoLokal cost.
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection