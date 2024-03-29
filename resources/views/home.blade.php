@extends('layouts.app')

@section('title','TokoLokal')

@section('content')
<div class="loader"></div>

<?

use Illuminate\Support\Facades\Auth; ?>

@if ($message = Session::get('success'))
<div class="alert alert-success alert-block mt-3" id="success-alert">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
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
            <div class="text-center">
                <a href="/product/detail/96" class="btn btn-home-slider-2">View More</a>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('../storage/images/Home Page/image 3.jpg') }}" alt="Third slide">
            <div class="text-center">
                <a href="/product/detail/425" class="btn btn-home-slider-3">View Now</a>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('../storage/images/Home Page/image 4.png') }}" alt="Third slide">
            <div class="text-center">
                <a href="/events/detail/8" class="btn btn-home-slider">Go Now</a>
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
    <p class="title-home font-weight-bold">Gender</p>
    <div class="row justify-content-sm-between mb-5">
        <div class="col-md-6">
            <div class="card mb-3 rounded-0 border-dark" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-8">
                        <div class="card-body text-center my-2">
                            <h5 class="card-title">MEN</h5>
                            <p class="card-text font-weight-bold">COLLECTION</p>
                            <button class="btn-gender visibleBtn"><a href="/men" style="text-decoration:none; color:#6c757d">VIEW
                                    MORE</a></button>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-body text-center">
                            <img src="{{ asset('../storage/images/Category/men.png') }}" alt="" height="141px" width="100%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-3 rounded-0 border-dark" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-8">
                        <div class="card-body text-center my-2">
                            <h5 class="card-title">WOMEN</h5>
                            <p class="card-text font-weight-bold">COLLECTION</p>
                            <button class="btn-gender visibleBtn"><a href="/women" style="text-decoration:none; color:#6c757d">VIEW
                                    MORE</a></button>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-body text-center">
                            <img src="{{ asset('../storage/images/Category/woman.png') }}" alt="" height="141px" width="100%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <p class="title-home font-weight-bold">TRENDING NOW</p>
        @include('bestseller')
    </div>


    {{-- @guest --}}
    <div class="container mb-5">
        <p class="title-home font-weight-bold">CATEGORY</p>

        @if(Auth::check() && Auth::user()->gender === 'Male')
        <div class="row row-cols-1 row-cols-md-2">
            <div class="col-md-6 mb-1 p-0">
                <div class="card rounded-0 border-0 con-photo" style="background-color: #f3f7f9;">
                    <a href="/men-tops" style="text-decoration:none;">
                        <img src="{{ asset('../storage/images/Category/top.png') }}" class="rounded-0 image-cat" alt="..." width="550px" height="300px" style="object-fit:cover"> <!-- card-img -->
                        <div class="middle-cat">
                            <div class="text-cat"><a href="/men-tops" style="text-decoration:none; color:black">TOP</a></div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-6 mb-1 p-0">
                <div class="card rounded-0 border-0 con-photo" style="background-color: #f3f7f9;">
                    <a href="/men-bottoms" style="text-decoration:none;">
                        <img src="{{ asset('../storage/images/Category/bottom.png') }}" class="rounded-0 image-cat" alt="..." width="550px" height="300px" style="object-fit:cover"> <!-- card-img -->
                        <div class="middle-cat">
                            <div class="text-cat"><a href="/men-bottoms" style="text-decoration:none; color:black">BOTTOM</a>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-6 mb-1 p-0">
                <!--offset-md-3  mr-1 -->
                <div class="card rounded-0 border-0 con-photo" style="background-color: #f3f7f9;">
                    <a href="/men-shoes" style="text-decoration:none;">
                        <img src="{{ asset('../storage/images/Category/shoes.png') }}" class="rounded-0 image-cat" alt="..." width="550px" height="300px" style="object-fit:cover"> <!-- card-img -->
                        <div class="middle-cat">
                            <div class="text-cat"><a href="/men-shoes" style="text-decoration:none; color:black">SHOES</a></div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-6 mb-1 p-0">
                <div class="card rounded-0 border-0 con-photo" style="background-color: #f3f7f9;">
                    <a href="/men-accessories" style="text-decoration:none;">
                        <img src="{{ asset('../storage/images/Category/accessories.png') }}" class="rounded-0 image-cat" alt="..." width="550px" height="300px" style="object-fit:cover"> <!-- card-img -->
                        <div class="middle-cat">
                            <div class="text-cat"><a href="/men-accessories" style="text-decoration:none; color:black">ACCESSORIES</a></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        @elseif(Auth::check() && Auth::user()->gender === 'Female')
        <div class="row row-cols-1 row-cols-md-2">
            <div class="col-md-6 mb-1 p-0">
                <div class="card rounded-0 border-0 con-photo" style="background-color: #f3f7f9;">
                    <a href="/women-tops" style="text-decoration:none;">
                        <img src="{{ asset('../storage/images/Category/top.png') }}" class="rounded-0 image-cat" alt="..." width="550px" height="300px" style="object-fit:cover"> <!-- card-img -->
                        <div class="middle-cat">
                            <div class="text-cat"><a href="/women-tops" style="text-decoration:none; color:black">TOP</a></div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-6 mb-1 p-0">
                <div class="card rounded-0 border-0 con-photo" style="background-color: #f3f7f9;">
                    <a href="/women-bottoms" style="text-decoration:none;">
                        <img src="{{ asset('../storage/images/Category/bottom.png') }}" class="rounded-0 image-cat" alt="..." width="550px" height="300px" style="object-fit:cover"> <!-- card-img -->
                        <div class="middle-cat">
                            <div class="text-cat"><a href="/women-bottoms" style="text-decoration:none; color:black">BOTTOM</a>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-6 mb-1 p-0">
                <!--offset-md-3  mr-1 -->
                <div class="card rounded-0 border-0 con-photo" style="background-color: #f3f7f9;">
                    <a href="/women-shoes" style="text-decoration:none;">
                        <img src="{{ asset('../storage/images/Category/shoes.png') }}" class="rounded-0 image-cat" alt="..." width="550px" height="300px" style="object-fit:cover"> <!-- card-img -->
                        <div class="middle-cat">
                            <div class="text-cat"><a href="/women-shoes" style="text-decoration:none; color:black">SHOES</a></div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-6 mb-1 p-0">
                <div class="card rounded-0 border-0 con-photo" style="background-color: #f3f7f9;">
                    <a href="/women-accessories" style="text-decoration:none;">
                        <img src="{{ asset('../storage/images/Category/accessories.png') }}" class="rounded-0 image-cat" alt="..." width="550px" height="300px" style="object-fit:cover"> <!-- card-img -->
                        <div class="middle-cat">
                            <div class="text-cat"><a href="/women-accessories" style="text-decoration:none; color:black">ACCESSORIES</a></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        @else
        @guest
        <div class="row row-cols-1 row-cols-md-2">
            <div class="col-md-6 mb-1 p-0">
                <div class="card rounded-0 border-0 con-photo" style="background-color: #f3f7f9;">
                    <a href="/men-tops" style="text-decoration:none;">
                        <img src="{{ asset('../storage/images/Category/top.png') }}" class="rounded-0 image-cat" alt="..." width="100%" height="300px" style="object-fit:cover">
                        <div class="middle-cat">
                            <div class="text-cat">
                                <a href="/top" style="text-decoration:none; color:black">TOP</a>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-6 mb-1 p-0">
                <div class="card rounded-0 border-0 con-photo" style="background-color: #f3f7f9;">
                    <a href="/men-bottoms" style="text-decoration:none;">
                        <img src="{{ asset('../storage/images/Category/bottom.png') }}" class="rounded-0 image-cat" alt="..." width="100%" height="300px" style="object-fit:cover">
                        <div class="middle-cat">
                            <div class="text-cat"><a href="/bottom" style="text-decoration:none; color:black">BOTTOM</a>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-6 mb-1 p-0">
                <!--offset-md-3  mr-1 -->
                <div class="card rounded-0 border-0 con-photo" style="background-color: #f3f7f9;">
                    <a href="/men-shoes" style="text-decoration:none;">
                        <img src="{{ asset('../storage/images/Category/shoes.png') }}" class="rounded-0 image-cat" alt="..." width="100%" height="300px" style="object-fit:cover"> <!-- card-img -->
                        <div class="middle-cat">
                            <div class="text-cat"><a href="/shoes" style="text-decoration:none; color:black">SHOES</a></div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-6 mb-1 p-0">
                <div class="card rounded-0 border-0 con-photo" style="background-color: #f3f7f9;">
                    <a href="/men-accessories" style="text-decoration:none;">
                        <img src="{{ asset('../storage/images/Category/accessories.png') }}" class="rounded-0 image-cat" alt="..." width="100%" height="300px" style="object-fit:cover"> <!-- card-img -->
                        <div class="middle-cat">
                            <div class="text-cat"><a href="/accessories" style="text-decoration:none; color:black">ACCESSORIES</a></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        @endguest
        @endif
    </div>
    {{-- @endguest --}}

    <div class="container pb-5">
        <p class="title-home font-weight-bold">FEATURE BRANDS </p>
        <div class="row justify-content-center my-1">
            <h6>EXPLORE MORE BRAND THAT WE LOVE</h6>
        </div>
        <div class="row justify-content-center">
            <button class="btn-gender my-1 visibleBtn" id="boxx"><a href="/allbrand" style="text-decoration:none; color:#6c757d">EXPLORE MORE</a></button>
        </div>
    </div>
</div>
@endsection