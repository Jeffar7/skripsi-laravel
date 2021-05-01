@extends('layouts.app')

@section('title','TokoLokal')

@section('content')
<!-- <div id="preloader"></div> -->
<div id="homeslider" class="shadow-sm border-top border-light"></div>
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
                            <button href="/men" class="btn-gender">VIEW MORE</button>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-body text-center">
                            <img src="{{ asset('../storage/images/Category/men.png') }}" alt="" height="141px"
                                width="135px">
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
                            <button href="/women" class="btn-gender">VIEW MORE</button>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-body text-center">
                            <img src="{{ asset('../storage/images/Category/woman.png') }}" alt="" height="141px"
                                width="135px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Iseng Code --}}
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

    <div class="container mb-5">
        <p class="title-home">BEST SELLER</p>
        <div class="row justify-content-around">
            <div id="myCarousel" class="carousel slide  w-100" data-interval="false">
                <div class="carousel-inner w-100 px-3">

                    @foreach($products as $key => $product)
                    <div class="carousel-item col col-md-3 {{$key == 0 ? 'active' : '' }}">
                        <!-- Gambar 1 -->
                        <!-- <div class="col col-sm-3 mb-3"> -->
                        <div class="card">
                            <a href="/men-tops/detail/{{$product->id}}" style="width: 239.5px;height:272px;"><img
                                    src="{{asset('../storage/images/Products/' . $product->productimage)}}"
                                    width="239.5px;" height="272px;" alt="Image"
                                    class="card-img-top border border-dark"></a>
                        </div>
                        <div class="card">
                            <a href="/men-tops/detail/{{$product->id}}" style="color:black;">
                                <p class="mt-3 mb-0" style="font-weight:bold;">{{$product->productname}}</p>
                            </a>
                            <a class="about-title mb-0" style="text-decoration:normal;"
                                href="/brands/{{$product->brand->id}}">{{$product->brand->name}}</a>
                            <p style="font-weight:bold;">Rp. {{$product->productprice}}</p>
                        </div>
                        <!-- </div> -->
                        <!-- Akhir Gambar 1 -->
                    </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev w-auto" href="#myCarousel" role="button" data-slide="prev">
                    <span><i class="fa fa-angle-left" aria-hidden="true"
                            style="color:black; font-size:22px;"></i></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next w-auto" href="#myCarousel" role="button" data-slide="next">
                    <span><i class="fa fa-angle-right" aria-hidden="true"
                            style="color:black; font-size:22px;"></i></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <p class="title-home">CATEGORY</p>
        <div class="row row-cols-1 row-cols-md-2">
            <div class="col-md-3 offset-md-3 mb-1 mr-1 p-0">
                <div class="card rounded-0 border-0 con-photo">
                    <img src="{{ asset('../storage/images/Category/top.png') }}" class="card-img rounded-0 image-cat"
                        alt="..." width="320px" height="240px">
                    <div class="middle-cat">
                        <div class="text-cat">TOP</div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-1 p-0">
                <div class="card rounded-0 border-0 con-photo">
                    <img src="{{ asset('../storage/images/Category/bottom.png') }}" class="card-img rounded-0 image-cat"
                        alt="..." width="320px" height="240px">
                    <div class="middle-cat">
                        <div class="text-cat">BOTTOM</div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 offset-md-3 mb-1 mr-1 p-0">
                <div class="card rounded-0 border-0 con-photo">
                    <img src="{{ asset('../storage/images/Category/shoes.png') }}" class="card-img rounded-0 image-cat"
                        alt="..." width="320px" height="240px">
                    <div class="middle-cat">
                        <div class="text-cat">SHOES</div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-1 p-0">
                <div class="card rounded-0 border-0 con-photo">
                    <img src="{{ asset('../storage/images/Category/accessories.png') }}"
                        class="card-img rounded-0 image-cat" alt="..." width="320px" height="240px">
                    <div class="middle-cat">
                        <div class="text-cat">ACCESSORIES</div>
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
            <button href="/allbrand" class="btn-gender my-1">EXPLORE MORE</button>
        </div>
    </div>
</div>
<script src="{{ asset('js/app.js') }}" defer></script>
@endsection