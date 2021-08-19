@extends('layouts.app')

@section('title','TokoLokal | ' .e($product_tops->productname))

@section('content')
<div class="loader"></div>
<div class="container py-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0 bg-transparent">
            <li class="breadcrumb-item"><a href="/" class="text-dark">Home</a></li>
            @if($product_tops->category->name == 'Top')
            <li class="breadcrumb-item"><a href="/top" class="text-dark">{{$product_tops->category->name}}</a></li>
            @elseif($product_tops->category->name == 'Bottom')
            <li class="breadcrumb-item"><a href="/bottom" class="text-dark">{{$product_tops->category->name}}</a></li>
            @elseif($product_tops->category->name == 'Shoes')
            <li class="breadcrumb-item"><a href="/shoes" class="text-dark">{{$product_tops->category->name}}</a></li>
            @elseif($product_tops->category->name == 'Accessories')
            <li class="breadcrumb-item"><a href="/accessories" class="text-dark">{{$product_tops->category->name}}</a>
            </li>
            @endif
            <li class="breadcrumb-item active text-bold text-dark" aria-current="page" style="color:black;font-weight:bold;">{{$product_tops->productname}}</li>
        </ol>
    </nav>
</div>

<div class="container">
    <div class="row">
        @if ($message = Session::get('status'))
        <div class="alert alert-success alert-block" id="success-alert">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
        @endif
    </div>
    <div class="row">
        <div id='carousel-custom' class='col-6 carousel slide m-0' data-interval='false'>
            <div class="row">
                <div class="col-sm-3">
                    <ol class='carousel-indicators justify-content-center flex-column'>
                        <li data-target='#carousel-custom' data-slide-to='0' class="active"><img src="{{asset('../storage/images/Products/' . $image_detail->image_detail_1)}}" alt='Image' class="border border-dark photo-thumb" /></li>
                        @if(!empty($image_detail->image_detail_2))
                        <li data-target='#carousel-custom' data-slide-to='1'><img src="{{asset('../storage/images/Products/' . $image_detail->image_detail_2)}}" alt='Image' class="border border-dark photo-thumb" /></li>
                        @endif
                        @if(!empty($image_detail->image_detail_3))
                        <li data-target='#carousel-custom' data-slide-to='2'><img src="{{asset('../storage/images/Products/' . $image_detail->image_detail_3)}}" alt='Image' class="border border-dark photo-thumb" /></li>
                        @endif
                        @if(!empty($image_detail->image_detail_4))
                        <li data-target='#carousel-custom' data-slide-to='3'><img src="{{asset('../storage/images/Products/' . $image_detail->image_detail_4)}}" alt='Image' class="border border-dark photo-thumb" /></li>
                        @endif
                    </ol>
                </div>
                <div class="col-sm-9">
                    <div class='carousel-inner text-center'>
                        <div class='carousel-item active'>
                            <img src="{{asset('../storage/images/Products/' . $image_detail->image_detail_1)}}" alt='Image' class="border border-dark" style="width: 100%;
                            height: 400px;" />
                        </div>
                        @if(!empty($image_detail->image_detail_2))
                        <div class='carousel-item'>
                            <img src="{{asset('../storage/images/Products/' . $image_detail->image_detail_2)}}" alt='Image' class="border border-dark photo-detail" style="width: 100%;
                            height: 400px;" />
                        </div>
                        @endif
                        @if(!empty($image_detail->image_detail_3))
                        <div class='carousel-item'>
                            <img src="{{asset('../storage/images/Products/' . $image_detail->image_detail_3)}}" alt='Image' class="border border-dark photo-detail" style="width: 100%;
                            height: 400px;" />
                        </div>
                        @endif
                        @if(!empty($image_detail->image_detail_4))
                        <div class='carousel-item'>
                            <img src="{{asset('../storage/images/Products/' . $image_detail->image_detail_4)}}" alt='Image' class="border border-dark photo-detail" style="width: 100%;
                            height: 400px;" />
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="card p-4 border border-dark" style="height: 100%">
                <!-- product about -->
                <div class="my-3">
                    <p class="about-title mb-0" style="text-decoration:normal;">{{$product_tops->brand->name}}</p>
                    <p class="mb-0" style="font-weight:bold;">{{$product_tops->productname}}</p>
                    <p class="about-title mb-2" style="font-size: 10px">Stock:<span style="padding-left: 2%">{{$product_tops->productquantity}}</span></p>
                    <p class="mb-2" style="font-weight:bold;">Rp. {{number_format($product_tops->productprice)}}</p>
                    <p style="font-size: 10px">{{$product_tops->productdescription}}</p>

                    <!-- button size and quantity -->
                    <form action="/wish-list/save" method="POST">
                        <input type="hidden" name="product_id" value="{{$product_tops->id}}">
                        @csrf
                        <div class="row my-4">
                            <div class="col-auto">
                                <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
                                @if($product_tops->categoryid == 4)
                                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="size" disabled>
                                    <option selected>Select Size</option>
                                </select>
                                @else
                                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="size">
                                    <option selected>Select Size</option>
                                    @foreach($product_tops->category->sizeDetails as $size)
                                    <option value="{{$size->size}}">{{$size->size}}</option>
                                    @endforeach
                                </select>
                                @endif
                            </div>

                            <div class="col">
                                <div class="input-group quantity">
                                    <div class="input-group-prepend decrement-btn changeQuantity" style="cursor: pointer">
                                        <span class="input-group-text">-</span>
                                    </div>
                                    <input type="text" class="qty-input form-control text-center" maxlength="2" value="1" id="qty-input" name="quantity">
                                    <div class="input-group-append increment-btn changeQuantity" style="cursor: pointer">
                                        <span class="input-group-text">+</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- wish list button -->
                        @guest
                        <div class="row my-4">
                            <div class="col-3 filter-heart text-center">
                                <button class="btn" style="border:none;">
                                    <i class="fas fa-heart wish-not-active" style="font-size: 23px"><a href="/login"></a></i>
                                </button>
                            </div>
                            <div class="col">
                                <button class="btn btn-light border border-dark" style="width:100%; background-color:white;"><a href="/login" class="card-link" style="color:black;">Add to Cart</a></button>
                            </div>
                        </div>
                        <div class="row my-4">
                            <div class="col">
                                <button class="btn btn-dark" style="width:100%;"><a href="/login" class="card-link" style="color:white;">Buy Now</a></button>
                            </div>
                        </div>
                        @else
                        <input type="hidden" id="userid" name="user_id" value="{{Auth::user()->id}}">
                        <input type="hidden" id="productid" name="product_id" value="{{$product_tops->id}}">
                        <div class="row my-4">
                            <div class="col-3 filter-heart text-center">
                                <button class="btn" style="border:none;" type="submit">
                                    @if(isset($validasiwishlist) && $validasiwishlist)
                                    <i class="fas fa-heart wish-active" style="font-size: 23px"></i>
                                    @else
                                    <i class="fas fa-heart wish-not-active" style="font-size: 23px"></i>
                                    @endif
                                </button>
                            </div>

                            <div class="col">
                                @if($product_tops->productquantity > 0)
                                <button type="submit" class="btn btn-light border border-dark" style="width:100%; background-color:white;" formaction="/cart-list/add">Add to Cart</button>
                                @else
                                <button type="submit" class="btn btn-light border border-dark" style="width:100%; background-color:white;" formaction="/cart-list/add" disabled>Add to Cart</button>
                                @endif
                            </div>
                        </div>
                        <div class="row my-4">
                            <div class="col">
                                @if($product_tops->productquantity > 0)
                                <button type="submit" class="btn btn-dark" style="width:100%;" formaction="/buy-now/add">Buy Now</button>
                                @else
                                <button type="submit" class="btn btn-danger" style="width:100%;" formaction="/buy-now/add" disabled>Out Of Stock!</button>
                                @endif
                            </div>
                        </div>
                        @endguest
                    </form>
                </div>
                <div class="row my-4">
                    <div class="col">
                        <button type="submit" class="btn btn-dark" style="width:100%;" formaction="/buy-now/add">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-3">
    <ul class="nav nav-tabs bg-transparent" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active bg-transparent" id="detail-tab" data-toggle="tab" href="#detail" role="tab" aria-controls="detail" aria-selected="false">Details</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link bg-transparent" id="sizedetail-tab" data-toggle="tab" href="#sizedetail" role="tab" aria-controls="sizedetail" aria-selected="false">Size Details</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link bg-transparent" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="true">Review</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link bg-transparent" id="policy-tab" data-toggle="tab" href="#policy" role="tab" aria-controls="policy" aria-selected="false">Return Policy</a>
        </li>
    </ul>

    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active mt-4" id="detail" role="tabpanel" aria-labelledby="detail-tab" style="
            margin: 0 4%;">
            <div class="table-responsive-sm" style="border: none">
                <table class="mb-0" style="width: 100%; color: #212529; border-collapse: collapse; display: table; text-indent: initial; border-spacing: 2px; ">
                    <tr class="about-title border-0">
                        <td class="col-3" style="padding: 0">SKU</td>
                        <td class="col-9" style="padding: 0"> : <span style="padding-left: 2%">
                                {{$product_tops->sku}}</span></td>
                    </tr>
                    <tr class="about-title">
                        <td class="" style="padding: 0">Category</td>
                        <td class="" style="padding: 0">: <span style="padding-left: 2%">{{$product_tops->category->name}}</span></td>
                    </tr>
                    <tr class="about-title">
                        <td class="" style="padding: 0">Care Instruction</td>
                        <td class="" style="padding: 0">: <span style="padding-left: 2%">{{$product_tops->productcare}}</span></td>
                    </tr>
                    <tr class="about-title">
                        <td class="" style="padding: 0">Material</td>
                        <td class="" style="padding: 0">: <span style="padding-left: 2%">{{$product_tops->productmaterial}}</span></td>
                    </tr>
                </table>
            </div>
        </div>


        <div class="tab-pane fade mt-3 show mt-3" id="sizedetail" role="tabpanel" aria-labelledby="sizedetail-tab">
            <div class="tab-pane fade show active mt-4" id="detail" role="tabpanel" aria-labelledby="sizedetail-tab" style="
        margin: 0 4%;">
                <div class="table-responsive-sm" style="border: none">
                    <table class="mb-0" style="width: 100%; color: #212529; border-collapse: collapse; display: table; text-indent: initial; border-spacing: 2px; ">
                        <tr class="about-title border-0">
                            <td class="col-3" style="padding: 0">Size</td>
                            <td class="col-9" style="padding: 0"> : <span style="padding-left: 2%">{{$product_tops->productsize}}</span></td>
                        </tr>
                        <tr class="about-title">
                            <td class="" style="padding: 0">Color</td>
                            <td class="" style="padding: 0">: <span style="padding-left: 2%">{{$product_tops->productcolor}}</td>
                        </tr>
                        <tr class="about-title">
                            <td class="" style="padding: 0">Weight</td>
                            <td class="" style="padding: 0">: <span style="padding-left: 2%">{{$product_tops->productweight}}</span></td>
                        </tr>
                    </table>
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
                                <img src="{{asset('../storage/images/Users/' . $review->user->picture)}}" width="100px;" height="100px;" alt="Image" class="mr-3">
                            </div>
                            <div class="col-md-8">
                                <div class="media-body">
                                    <h4 class="mt-0 text-left">{{$review->user->username}}</h4>
                                    @if($review->rating_score == 5)
                                    <p class="card-text"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                        {{ $review->rating_score }}
                                    </p>
                                    @elseif($review->rating_score == 4.5)
                                    <p class="card-text"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> <i class="fa fa-star-half-o" aria-hidden="true"></i><i class="far fa-star"></i>
                                        {{ $review->rating_score }}
                                    </p>
                                    @elseif($review->rating_score == 4)
                                    <p class="card-text"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                                        {{ $review->rating_score }}
                                    </p>
                                    @elseif($review->rating_score == 3.5)
                                    <p class="card-text"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fa fa-star-half-o" aria-hidden="true"></i><i class="far fa-star"></i><i class="far fa-star"></i> {{ $review->rating_score }}
                                    </p>
                                    @elseif($review->rating_score == 3)
                                    <p class="card-text"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                                        {{ $review->rating_score }}
                                    </p>
                                    @elseif($review->rating_score == 2.5)
                                    <p class="card-text"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fa fa-star-half-o" aria-hidden="true"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> {{ $review->rating_score }}
                                    </p>
                                    @elseif($review->rating_score == 2)
                                    <p class="card-text"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                                        {{ $review->rating_score }}
                                    </p>
                                    @elseif($review->rating_score == 1.5)
                                    <p class="card-text"><i class="fas fa-star"></i><i class="fa fa-star-half-o" aria-hidden="true"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> {{ $review->rating_score }}
                                    </p>
                                    @elseif($review->rating_score == 1)
                                    <p class="card-text"><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                                        {{ $review->rating_score }}
                                    </p>
                                    @endif
                                    <p>{{$review->review_description}}.</p>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <p class="mt-0 font-italic" style="font-size:12px; color: #888888;">
                                    {{$review->created_at}}
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
        <li class="nav-item " role="presentation">
            <a class="nav-link active bg-transparent" id="other-choice-tab" data-toggle="tab" href="#otherchoice" role="tab" aria-controls="other-choice" aria-selected="false">
                <span class="font-weight-bold">Other Choice</span>
            </a>
        </li>
    </ul>

    <!-- Others Product -->
    <div class="container mb-5">
        <p class="title-home">Other Choice</p>
        @include('bestseller')
    </div>
    <!-- End Other Product -->
</div>

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
    });
</script>
@endsection