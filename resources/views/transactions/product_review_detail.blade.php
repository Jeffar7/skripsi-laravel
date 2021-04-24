@extends('layouts.app')

@section('title', 'TokoLokal | Delivery')

@section('content')

<div class="container mt-3">
    <div class="row justify-content-center mb-3 ">

        <div class="col-10">

            <form action="/submit/review" method="POST">
                @csrf


                <div class="card">
                    <div class="card-header">
                        Waiting For Review
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-4">
                                <img src="{{asset('uploads/products/' . $product->productimage)}}" width="100px;" height="100px;" alt="Image">
                            </div>

                            <div class="col-8">

                                <p class="card-text font-weight-bolder">{{$product->productname}}.</p>

                                <input type="hidden" id="selected_rating" name="selected_rating" value="" required="required">
                                <input type="hidden" name="product_id" value="{{$product->id}}">


                                <h2 class="rating-header" style="">
                                    <span class="selected-rating">0</span><small> / 5</small>
                                </h2>

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


                                <div class="form-group mt-2">
                                    <label for="exampleFormControlTextarea1">Give Product Review</label>
                                    <textarea name="review_description" class="form-control" id="exampleFormControlTextarea1" rows="3" col="2"></textarea>
                                </div>


                                <div class="row justify-content-end">

                                    <div class="col-auto">
                                        <a href="/waiting-for-review" class="btn btn-danger">Cancel</a>
                                    </div>

                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-primary">Submit</button>
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

<script>
    jQuery(document).ready(function($) {

        $(".btnrating").on('click', (function(e) {

            var previous_value = $("#selected_rating").val();

            var selected_value = $(this).attr("data-attr");
            $("#selected_rating").val(selected_value);

            $(".selected-rating").empty();
            $(".selected-rating").html(selected_value);

            for (i = 1; i <= selected_value; ++i) {
                $("#rating-star-" + i).toggleClass('btn-warning');
                $("#rating-star-" + i).toggleClass('btn-default');
            }

            for (ix = 1; ix <= previous_value; ++ix) {
                $("#rating-star-" + ix).toggleClass('btn-warning');
                $("#rating-star-" + ix).toggleClass('btn-default');
            }

        }));


    });
</script>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

@endsection