@extends('layouts.app')

@section('title', 'TokoLokal | Review')

@section('content')

<div class="container py-5">
    <div class="row justify-content-center mb-3 ">
        <div class="col-md-12">
            <form action="/submit/review" method="POST">
                @csrf
                <div class="card shadow-lg">
                    <div class="card-header text-left bg-dark text-white">
                        <i class="far fa-comment mr-2" style="color: black; font-size: 16px;"></i>
                        <strong>
                            Write Review
                        </strong>
                    </div>
                    <div class="card-body">
                        <div class="row mx-4">
                            <div class="col-4">
                                <img src="{{asset('../storage/images/Products/' . $product->productimage)}}" alt="Image" width="100%;">
                            </div>

                            <div class="col-8">
                                <p class="about-title mb-0" style="text-decoration:normal;">{{$product->brand->name}}</p>
                                <p class="mb-0" style="font-weight:bold;">{{$product->productname}}</p>
                                <input type="hidden" id="selected_rating" name="selected_rating" value="" required="required">
                                <input type="hidden" name="product_id" value="{{$product->id}}">

                                <div class="form-group mb-0">
                                    <p class="mb-0 @error('selected_rating') is-invalid @enderror">Please, give rate for this product!</p>
                                </div>

                                <!-- Flash Error Message -->
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                    {{ $error }}
                                    @endforeach
                                </div>
                                @endif
                                <!-- End Flash Error Message -->

                                <button type="button" class="btnrating btn btn-default btn-lg" data-attr="1" id="rating-star-1">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </button>
                                <button type="button" class="btnrating btn btn-default btn-lg" data-attr="2" id="rating-star-2">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </button>
                                <button type="button" class="btnrating btn btn-default btn-lg" data-attr="3" id="rating-star-3">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </button>
                                <button type="button" class="btnrating btn btn-default btn-lg" data-attr="4" id="rating-star-4">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </button>
                                <button type="button" class="btnrating btn btn-default btn-lg" data-attr="5" id="rating-star-5">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </button>
                                <!-- p class="rating-header font-weight-bolder"> -->
                                <span class="selected-rating">0</span><span> / 5</span>
                                <!-- </p> -->

                                <div class="form-group mt-2">
                                    <p>What do you think about this product?</p>
                                    <textarea name="review_description" class="form-control notes" id="exampleFormControlTextarea1" placeholder="Type your review here..." rows="3" col="2"></textarea>
                                </div>

                                <div class="row justify-content-end">
                                    <div class="col-auto">
                                        <a href="/waiting-for-review" class="btn btn-danger">Cancel</a>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection