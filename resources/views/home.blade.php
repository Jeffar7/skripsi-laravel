@extends('layouts.app')

@section('title','TokoLokal')

@section('content')
<!-- <div id="preloader"></div> -->
<!-- <div id="homeslider" class="shadow-sm border-top border-light"></div> -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <!-- <div id="carouselExampleIndicators" class="carousel slide" data-interval="false"> -->
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{ asset('../storage/images/Home Page/image 1.png') }}" alt="First slide">
      <div class="text-center">
        <a href="/product/detail/375" class="btn btn-home-slider">Shop Now</a>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('../storage/images/Home Page/image 2.png') }}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('../storage/images/Home Page/image 3.jpg') }}" alt="Third slide">
      <div class="text-center">
        <a href="/product/detail/425" class="btn btn-home-slider-2">View Now</a>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('../storage/images/Home Page/image 4.png') }}" alt="Third slide">
      <div class="text-center">
        <a href="/events/detail/8" class="btn btn-home-slider-3">Go Now</a>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="container">
    <p class="title-home">Gender</p>
    <div class="row justify-content-sm-between mb-5">
        <div class="col-md-6">
            <div class="card mb-3 rounded-0 border-dark" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-8">
                        <div class="card-body text-center pt-4">
                            <h5 class="card-title">MEN</h5>
                            <p class="card-text font-weight-bold">COLLECTION</p>
                            <button class="btn-gender"><a href="/men" style="text-decoration:none; color:#6c757d">VIEW MORE</a></button>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-body text-center">
                            <img src="{{ asset('../storage/images/Category/men.png') }}" alt="" height="141px" width="135px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-3 rounded-0 border-dark" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-8">
                        <div class="card-body text-center pt-4">
                            <h5 class="card-title">WOMEN</h5>
                            <p class="card-text font-weight-bold">COLLECTION</p>
                            <button class="btn-gender"><a href="/women" style="text-decoration:none; color:#6c757d">VIEW MORE</a></button>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-body text-center">
                            <img src="{{ asset('../storage/images/Category/woman.png') }}" alt="" height="141px" width="135px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <p class="title-home">BEST SELLER</p>
        @include('bestseller')
    </div>

    <div class="container mb-5">
        <p class="title-home">CATEGORY</p>
        <div class="row row-cols-1 row-cols-md-2">
            <div class="col-md-3 offset-md-3 mb-1 mr-1 p-0">
                <div class="card rounded-0 border-0 con-photo">
                    <img src="{{ asset('../storage/images/Category/top.png') }}" class="card-img rounded-0 image-cat" alt="..." width="320px" height="240px">
                    <div class="middle-cat">
                        <div class="text-cat"><a href="/top" style="text-decoration:none; color:black">TOP</a></div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-1 p-0">
                <div class="card rounded-0 border-0 con-photo">
                    <img src="{{ asset('../storage/images/Category/bottom.png') }}" class="card-img rounded-0 image-cat" alt="..." width="320px" height="240px">
                    <div class="middle-cat">
                        <div class="text-cat"><a href="/bottom" style="text-decoration:none; color:black">BOTTOM</a></div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 offset-md-3 mb-1 mr-1 p-0">
                <div class="card rounded-0 border-0 con-photo">
                    <img src="{{ asset('../storage/images/Category/shoes.png') }}" class="card-img rounded-0 image-cat" alt="..." width="320px" height="240px">
                    <div class="middle-cat">
                        <div class="text-cat"><a href="/shoes" style="text-decoration:none; color:black">SHOES</a></div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-1 p-0">
                <div class="card rounded-0 border-0 con-photo">
                    <img src="{{ asset('../storage/images/Category/accessories.png') }}" class="card-img rounded-0 image-cat" alt="..." width="320px" height="240px">
                    <div class="middle-cat">
                        <div class="text-cat"><a href="/accessories" style="text-decoration:none; color:black">ACCESSORIES</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container pb-5">
        <p class="title-home">FEATURE BRANDS</p>
        <div class="row justify-content-center my-1">
            <h6>EXPLORE MORE BRAND THAT WE LOVE</h6>
        </div>
        <div class="row justify-content-center">
            <button class="btn-gender my-1"><a href="/allbrand" style="text-decoration:none; color:#6c757d">EXPLORE MORE</a></button>
        </div>
    </div>
</div>
<script src="{{ asset('js/app.js') }}" defer></script>
@endsection