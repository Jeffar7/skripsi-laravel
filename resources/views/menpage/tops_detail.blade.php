@extends('layouts.app')

@section('title','TokoLokal | ' .e($product_tops->productname))

@section('content')
<div class="container py-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0 bg-transparent">
            <li class="breadcrumb-item"><a href="/" class="text-dark">Home</a></li>
            <li class="breadcrumb-item"><a href="#" class="text-dark">{{$product_tops->category->name}}</a></li>
            <li class="breadcrumb-item active text-bold text-dark" aria-current="page"
                style="color:black;font-weight:bold;">{{$product_tops->productname}}</li>
        </ol>
    </nav>
</div>

<div class="container">
    <div class="row">
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
    </div>
    <div class="row">
        <div id='carousel-custom' class='col carousel slide m-0' data-interval='false'>
            <div class="row">
                <div class="col-3">
                    <ol class='carousel-indicators justify-content-center flex-column'>
                            <li data-target='#carousel-custom' data-slide-to='0' class="active"><img src="{{asset('../storage/images/Products/' . $image_detail->image_detail_1)}}" alt='Image' class="border border-dark photo-thumb"/></li>
                        @if(!empty($image_detail->image_detail_2))
                            <li data-target='#carousel-custom' data-slide-to='1'><img src="{{asset('../storage/images/Products/' . $image_detail->image_detail_2)}}" alt='Image' class="border border-dark photo-thumb"/></li>
                        @endif
                        @if(!empty($image_detail->image_detail_3))
                            <li data-target='#carousel-custom' data-slide-to='2'><img src="{{asset('../storage/images/Products/' . $image_detail->image_detail_3)}}" alt='Image' class="border border-dark photo-thumb"/></li>
                        @endif
                        @if(!empty($image_detail->image_detail_4))
                            <li data-target='#carousel-custom' data-slide-to='3'><img src="{{asset('../storage/images/Products/' . $image_detail->image_detail_4)}}" alt='Image' class="border border-dark photo-thumb"/></li>
                        @endif
                    </ol>
                </div>
                <div class="col">
                    <div class='carousel-inner text-center'>
                        <div class='carousel-item active'>
                            <img src="{{asset('../storage/images/Products/' . $image_detail->image_detail_1)}}" alt='Image' class="border border-dark photo-detail"/>
                        </div>
                        @if(!empty($image_detail->image_detail_2))
                        <div class='carousel-item'>
                            <img src="{{asset('../storage/images/Products/' . $image_detail->image_detail_2)}}" alt='Image' class="border border-dark photo-detail"/>
                        </div>
                        @endif
                        @if(!empty($image_detail->image_detail_3))
                        <div class='carousel-item'>
                            <img src="{{asset('../storage/images/Products/' . $image_detail->image_detail_3)}}" alt='Image' class="border border-dark photo-detail"/>
                        </div>
                        @endif
                        @if(!empty($image_detail->image_detail_4))
                        <div class='carousel-item'>
                            <img src="{{asset('../storage/images/Products/' . $image_detail->image_detail_4)}}" alt='Image' class="border border-dark photo-detail"/>
                        </div>
                        @endif  
                    </div>
                </div>
            </div>
        </div>  

        <div class="col-6">
            <div class="card p-4 border border-dark"> 
                <!-- product about -->
                <p class="about-title mb-0" style="text-decoration:normal;">{{$product_tops->brand->name}}</p>
                <p class="mb-0" style="font-weight:bold;">{{$product_tops->productname}}</p>
                <p style="font-weight:bold;">Rp. {{number_format($product_tops->productprice)}}</p>
                <p>{{$product_tops->productdescription}}</p>

                <!-- button size and quantity -->
                <form action="/wish-list/save" method="POST">
                    <input type="hidden" name="product_id" value="{{$product_tops->id}}">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-auto">
                            <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
                            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="size">
                                <option selected>Select Size</option>
                                @foreach($product_tops->category->sizeDetails as $size)
                                <option value="{{$size->size}}">{{$size->size}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col">
                            <div class="input-group quantity">
                                <div class="input-group-prepend decrement-btn changeQuantity" style="cursor: pointer">
                                    <span class="input-group-text">-</span>
                                </div>
                                <input type="text" class="qty-input form-control text-center" maxlength="2" value="1"
                                    id="qty-input" name="quantity">
                                <div class="input-group-append increment-btn changeQuantity" style="cursor: pointer">
                                    <span class="input-group-text">+</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- wish list button -->
                    @guest
                    <div class="row" style="margin-bottom: -5%">
                        <div class="col-3 stage pt-2">
                            <a href="/login"><div class="heart"></div></a>
                        </div>
                        <div class="col">
                            <button class="btn btn-light border border-dark"
                                style="width:100%; background-color:white;"><a href="/login" class="card-link" style="color:black;">Add to Cart</a></button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-dark" style="width:100%;"><a href="/login" class="card-link" style="color:white;">Buy Now</a></button>
                        </div>
                    </div>
                    @else
                    <input type="hidden" id="userid" name="user_id" value="{{Auth::user()->id}}">
                    <input type="hidden" id="productid" name="product_id" value="{{$product_tops->id}}">
                    <div class="row" style="margin-bottom: -5%">
                        <div class="col-3">
                            <button type="submit" class="heart" style="border:none;"></button>
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-light border border-dark"
                                style="width:100%; background-color:white;" formaction="/cart-list/add">Add to Cart</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-dark" style="width:100%;" formaction="/buy-now/add">Buy Now</button>
                        </div>
                    </div>
                    @endguest
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container mt-3">
    <ul class="nav nav-tabs bg-transparent" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active bg-transparent" id="detail-tab" data-toggle="tab" href="#detail" role="tab"
                aria-controls="detail" aria-selected="false">Details</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link bg-transparent" id="sizedetail-tab" data-toggle="tab" href="#sizedetail" role="tab"
                aria-controls="sizedetail" aria-selected="false">Size Details</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link bg-transparent" id="review-tab" data-toggle="tab" href="#review" role="tab"
                aria-controls="review" aria-selected="true">Review</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link bg-transparent" id="policy-tab" data-toggle="tab" href="#policy" role="tab"
                aria-controls="policy" aria-selected="false">Return Policy</a>
        </li>
    </ul>

    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active mt-3" id="detail" role="tabpanel" aria-labelledby="detail-tab">
            <div class="tab-pane fade show active mt-4" id="detail" role="tabpanel" aria-labelledby="detail-tab" style="
            margin: 0 4%;">
                <div class="row">
                    <div class="col-sm-1 col-md-2">
                        <p class="about-title">SKU              </p>
                        <p class="about-title">Category         </p>
                        <p class="about-title">Care Instruction </p>
                        <p class="about-title">Material         </p>
                    </div>
                    <div class="col-sm-5 offset-sm-2 col-md-10 offset-md-0">
                        <p class="about-title">:  <span style="padding-left: 2%">{{$product_tops->sku}}</span></p>
                        <p class="about-title">: <span style="padding-left: 2%">{{$product_tops->category->name}}</span></p>
                        <p class="about-title">: <span style="padding-left: 2%">{{$product_tops->productcare}}</span></p>
                        <p class="about-title">: <span style="padding-left: 2%">{{$product_tops->productmaterial}}</span></p>
                    </div>
                </div>
            </div>
    </div>
    <div class="tab-pane fade mt-3 show mt-3" id="sizedetail" role="tabpanel" aria-labelledby="sizedetail-tab">
        <div class="tab-pane fade show active mt-4" id="detail" role="tabpanel" aria-labelledby="sizedetail-tab" style="
        margin: 0 4%;">
            <div class="row">
                <div class="col-sm-1 col-md-2">
                    <p class="about-title">Size :</p>
                    <p class="about-title">Color :</p>
                    <p class="about-title">Quantity :</p>
                    <p class="about-title">Weight :</p>
                </div>
                <div class="col-sm-5 offset-sm-2 col-md-10 offset-md-0">
                    <p class="about-title"><span style="padding-left: 2%">{{$product_tops->productquantity}}</span></p>
                    <p class="about-title"><span style="padding-left: 2%">{{$product_tops->productcolor}}</span></p>
                    <p class="about-title"><span style="padding-left: 2%">{{$product_tops->productquantity}}</span></p>
                    <p class="about-title"><span style="padding-left: 2%">{{$product_tops->productweight}}</span></p>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade show mt-3" id="review" role="tabpanel" aria-labelledby="review-tab">
        <div class="tab-pane fade show active mt-4" id="detail" role="tabpanel" aria-labelledby="sizedetail-tab">
            @foreach($reviews as $review)
            @if($review->product_id == $product_tops->id)
            <div class="row">
                <div class="card mb-3 col-md-11" style="border-radius: 10px;margin: 0 4%;box-shadow: 1px 2px #888888;">
                    <div class="media ml-3 mt-3">
                        <div class="col-md-2">
                            <img src="{{asset('../storage/images/Users/' . $review->user->picture)}}" width="100px;"
                                height="100px;" alt="Image" class="mr-3">
                        </div>
                        <div class="col-md-8">
                            <div class="media-body">
                                <h4 class="mt-0 text-left">{{$review->user->username}}</h4>
                                @if($review->rating_score == 5)
                                <p class="card-text"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                    {{ $review->rating_score }}
                                </p>
                                @elseif($review->rating_score == 4.5)
                                <p class="card-text"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star"></i> <i class="fa fa-star-half-o"
                                        aria-hidden="true"></i><i class="far fa-star"></i> {{ $review->rating_score }}
                                </p>
                                @elseif($review->rating_score == 4)
                                <p class="card-text"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                                    {{ $review->rating_score }}
                                </p>
                                @elseif($review->rating_score == 3.5)
                                <p class="card-text"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fa fa-star-half-o" aria-hidden="true"></i><i
                                        class="far fa-star"></i><i class="far fa-star"></i> {{ $review->rating_score }}
                                </p>
                                @elseif($review->rating_score == 3)
                                <p class="card-text"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                                    {{ $review->rating_score }}
                                </p>
                                @elseif($review->rating_score == 2.5)
                                <p class="card-text"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fa fa-star-half-o" aria-hidden="true"></i><i class="far fa-star"></i><i
                                        class="far fa-star"></i><i class="far fa-star"></i> {{ $review->rating_score }}
                                </p>
                                @elseif($review->rating_score == 2)
                                <p class="card-text"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                                    {{ $review->rating_score }}
                                </p>
                                @elseif($review->rating_score == 1.5)
                                <p class="card-text"><i class="fas fa-star"></i><i class="fa fa-star-half-o"
                                        aria-hidden="true"></i><i class="far fa-star"></i><i class="far fa-star"></i><i
                                        class="far fa-star"></i><i class="far fa-star"></i> {{ $review->rating_score }}
                                </p>
                                @elseif($review->rating_score == 1)
                                <p class="card-text"><i class="fas fa-star"></i><i class="far fa-star"></i><i
                                        class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                                    {{ $review->rating_score }}
                                </p>
                                @endif
                                <p>{{$review->review_description}}.</p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <p class="mt-0 font-italic" style="font-size:12px; color: #888888;">{{$review->created_at}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
    <div class="tab-pane fade show mt-3" id="policy" role="tabpanel" aria-labelledby="policy-tab">
        <div class="tab-pane fade show active mt-4" id="policy" role="tabpanel" aria-labelledby="policy-tab">
            <ul class="m-4">
                <p>
                    Refund request must be made within 14 days of delivery date. After 14 days from delivery
                    date
                    you must contact TokoLokal Customer Service to determine the best course of action.
                    TokoLokal
                    will not issue refunds for products purchades through other entities, such as distributors
                    or
                    retail partners. Defective units arecovered under TokoLokal oneyear limted warranty policy
                    will
                    be replaced at TokoLokal cost.
                </p>
            </ul>
        </div>
    </div>
</div>

<ul class="nav nav-tabs bg-transparent" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
        <a class="nav-link active bg-transparent" id="other-choice-tab" data-toggle="tab" href="#otherchoice" role="tab"
            aria-controls="other-choice" aria-selected="false"><span class="font-weight-bold">Other Choice</span></a>
    </li>
</ul>

<!-- Others Product -->
<div class="container mb-5">
    <p class="title-home">Other Choice</p>
    @include('bestseller')
</div>
<!-- End Other Product -->

<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script>
$(document).ready(function() {
    $('.increment-btn').click(function(e) {
        e.preventDefault();
        var incre_value = $(this).parents('.quantity').find('.qty-input').val();
        var value = parseInt(incre_value, 10);
        value = isNaN(value) ? 0 : value;
        if (value < 100) {
            value++;
            $(this).parents('.quantity').find('.qty-input').val(value);
        }
    });

    $('.decrement-btn').click(function(e) {
        e.preventDefault();
        var decre_value = $(this).parents('.quantity').find('.qty-input').val();
        var value = parseInt(decre_value, 10);
        value = isNaN(value) ? 0 : value;
        if (value > 1) {
            value--;
            $(this).parents('.quantity').find('.qty-input').val(value);
        }
    });

    // $(function() {
    $(".heart").on("click", function() {
        $(this).toggleClass("is-active");
    });

    // $.ajaxSetup({
    //     headers: {
    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //     }
    // });

    // $('.heart').click(function () {
    //     var user = $("#userid").val();
    //     var product = $("#productid").val();
    //     var url = "http://127.0.0.1:8000/wish-list/save"

    //     // console.log(user, product);

    //     $.ajax({
    //         url: url,
    //         method: 'POST',
    //         // data: {user:user, product:product, url:url},
    //         data: $("#wish-list").serialize(),
    //         success: function(data){
    //             if(data<1){
    //                 alert("Data has already added");
    //                 console.log(data)
    //             }else{
    //                 alert("Data has successfully added")
    //             }
    //         }
    //     })
    // });
});
</script>


@endsection