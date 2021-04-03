@extends('layouts.app')

@section('title','TokoLokal')

@section('content')
<div id="preloader"></div>
<div id="homeslider"></div>
<div class="container mb-5">
    <p class="title-home">Gender</p>
    <div class="row justify-content-sm-between">
        <div class="col-sm-6">
            <div class="card-gender">
                <div class="row justify-content-sm-between">
                    <div class="col-sm-6">
                        <div class="card-body">
                            <div class="my-2">
                                <h5 class="card-title" style="text-align: center">MEN</h5>
                                <p class="card-text" style="text-align: center;font-weight: bold;">COLLECTION</p>
                                <button href="/men" class="btn-gender">VIEW MORE</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card-body">
                            <img src="{{ asset('images/men.png') }}" class="img-gender">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card-gender">
                <div class="row justify-content-sm-between">
                    <div class="col-sm-6">
                        <div class="card-body">
                            <div class="my-2">
                                <h5 class="card-title" style="text-align: center">WOMEN</h5>
                                <p class="card-text" style="text-align: center;font-weight: bold;">COLLECTION</p>
                                <button href="/women" class="btn-gender">VIEW MORE</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card-body">
                            <img src="{{ asset('images/woman.png') }}" class="img-gender">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <p class="title-home">Best Seller</p>
    <!-- <div class="row justify-cont"> -->
    <!-- </div> -->
    <div id="bestseller"></div>
</div>


<div class="container mb-5">
    <p class="title-home">CATEGORY</p>
    <div class="row justify-content-between mb-2">
        <div class="con-photo">
            <!-- <div class="con-photo"> -->
                <img src="{{ asset('images/top.png') }}" class="image-cat">
                <div class="middle-cat">
                    <div class="text-cat">TOP</div>
                </div>
            <!-- </div> -->
        </div>
        <div class="con-photo-left">
            <!-- <div class="con-photo"> -->
                <img src="{{ asset('images/bottom.png') }}" class="image-cat">
                <div class="middle-cat">
                    <div class="text-cat">BOTTOM</div>
                </div>
            <!-- </div> -->
        </div>
    </div>
    <div class="row justify-content-between">
        <div class="con-photo">
            <!-- <div class="con-photo"> -->
                <img src="{{ asset('images/shoes.png') }}" class="image-cat">
                <div class="middle-cat">
                    <div class="text-cat">SHOES</div>
                </div>
            <!-- </div> -->
        </div>
        <div class="con-photo-left">
            <!-- <div class="con-photo"> -->
                <img src="{{ asset('images/accessories.png') }}" class="image-cat">
                <div class="middle-cat">
                    <div class="text-cat">ACCESSORIES</div>
                </div>
            <!-- </div> -->
        </div>
    </div>
</div>

<div class="container pad">
    <!-- <div class="row align-content-center"> -->
        <p class="title-home">FEATURE BRANDS</p>
        <div class="row justify-content-center my-1">
            <h6>EXPLORE MORE BRAND THAT WE LOVE</h6>
        </div>
        <div class="row justify-content-center">
            <button href="/allbrand" class="btn-gender my-1">EXPLORE MORE</button>
        </div>
    <!-- </div> -->
</div>
@endsection
