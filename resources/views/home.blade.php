@extends('layouts.app')

@section('title','TokoLokal')

@section('content')


  {{-- <div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>
  
    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../storage/images/Home Page/HomeSlider4.png" alt="Los Angeles">
      </div>
      <div class="carousel-item">
        <img src="../storage/images/Home Page/HomeSlider4.png" alt="Chicago">
      </div>
      <div class="carousel-item">
        <img src="../storage/images/Home Page/HomeSlider4.png" alt="New York">
      </div>
    </div>
  
    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  
  </div> --}}


<div class="container">
    <!-- <div id="preloader"></div> -->

{{-- <div id="homeslider" class="shadow-sm border-top border-light"></div> --}}

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{asset('../storage/images/Home Page/HomeSlider1.png')}}" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{asset('../storage/images/Home Page/HomeSlider2.png')}}" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{asset('../storage/images/Home Page/HomeSlider3.png')}}" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{asset('../storage/images/Home Page/HomeSlider4.png')}}" alt="Third slide">
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

    <p class="title-home font-weight-bold">Gender</p>
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

    {{-- Iseng Code d --}}
    {{-- @if(auth()->user()->is_admin)
    @forelse($notifications as $notification)
    <div class="alert alert-sucess" role="alert">
        [{{ $notification->created_at}}] User {{ $notification->data['username']}} ({{ $notification->data['email']}}) has just registered.
        <a href="#" class="float-right mark-as-read" data-id="{{ $notification->id }}">Mark as read</a>
    </div>

    @if($loop->last)
        <a href="#" id="mark-all">Mark all as read</a>
    @endif
    @empty
        There are no new notifications
    @endforelse
    @endif --}}

    {{-- <p>{{count(auth()->user()->notifications)}}</p> --}}

    <div class="container mb-5">
        <p class="title-home font-weight-bold">BEST SELLER</p>
        <div class="row justify-content-around">
            <div id="myCarousel" class="carousel slide  w-100" data-interval="false">
                <div class="carousel-inner w-100 px-3">

                    @foreach($products as $key => $product)
                    <div class="carousel-item col col-md-3 {{$key == 0 ? 'active' : '' }}">
                        <!-- Gambar 1 -->
                        <!-- <div class="col col-sm-3 mb-3"> -->
                        <div class="card">
                            <a href="/men-tops/detail/{{$product->id}}" style="width: 239.5px;height:272px;"><img src="{{asset('../storage/images/Products/' . $product->productimage)}}" width="239.5px;" height="272px;" alt="Image" class="card-img-top border border-dark"></a>
                        </div>
                        <div class="card px-2 border border-dark">
                            <a href="/men-tops/detail/{{$product->id}}" style="color:black;">
                                <p class="mt-3 mb-0 text-truncate" style="font-weight:bold;">{{$product->productname}}</p>
                            </a>
                            <a class="about-title mb-0" style="text-decoration:normal;" href="/brands/{{$product->brand->id}}">{{$product->brand->name}}</a>
                            <p style="font-weight:bold;">Rp. {{number_format($product->productprice)}}</p>
                        </div>
                        <!-- </div> -->
                        <!-- Akhir Gambar 1 -->
                    </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev w-auto" href="#myCarousel" role="button" data-slide="prev">
                    <span><i class="fa fa-angle-left" aria-hidden="true" style="color:black; font-size:22px;"></i></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next w-auto" href="#myCarousel" role="button" data-slide="next">
                    <span><i class="fa fa-angle-right" aria-hidden="true" style="color:black; font-size:22px;"></i></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <p class="title-home font-weight-bold">CATEGORY</p>
        <div class="row row-cols-1 row-cols-md-2">
            <div class="col-md-3 offset-md-3 mb-1 mr-1 p-0">
                <div class="card rounded-0 border-0 con-photo">
                    <img src="{{ asset('../storage/images/Category/top.png') }}" class="card-img rounded-0 image-cat" alt="..." width="320px" height="240px">
                    <div class="middle-cat">
                        <div class="text-cat">TOP</div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-1 p-0">
                <div class="card rounded-0 border-0 con-photo">
                    <img src="{{ asset('../storage/images/Category/bottom.png') }}" class="card-img rounded-0 image-cat" alt="..." width="320px" height="240px">
                    <div class="middle-cat">
                        <div class="text-cat">BOTTOM</div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 offset-md-3 mb-1 mr-1 p-0">
                <div class="card rounded-0 border-0 con-photo">
                    <img src="{{ asset('../storage/images/Category/shoes.png') }}" class="card-img rounded-0 image-cat" alt="..." width="320px" height="240px">
                    <div class="middle-cat">
                        <div class="text-cat">SHOES</div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-1 p-0">
                <div class="card rounded-0 border-0 con-photo">
                    <img src="{{ asset('../storage/images/Category/accessories.png') }}" class="card-img rounded-0 image-cat" alt="..." width="320px" height="240px">
                    <div class="middle-cat">
                        <div class="text-cat">ACCESSORIES</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container pb-5">
        <p class="title-home font-weight-bold">FEATURE BRANDS</p>
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