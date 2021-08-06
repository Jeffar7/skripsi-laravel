<div class="row justify-content-around">
    <div id="myCarousel" class="carousel slide w-100" data-interval="false">
        <div class="carousel-inner carousel-inner-custom w-100 px-3">
            @foreach($others as $key => $product)
            <div class="carousel-item carousel-item-custom col col-md-3 {{$key == 0 ? 'active' : '' }}">
                <div class="card">
                    <a href="/product/detail/{{$product->id}}" class="TrendingNow"><img src="{{asset('../storage/images/Products/' . $product->productimage)}}" alt="Image" class="card-img-top border TrendingNow"></a>
                </div>
                <div class="card px-2 mb-4" style="border:none; background-color: #f3f7f9">
                    <a href="/product/detail/{{$product->id}}" style="color:black;">
                        <p class="mt-3 mb-0 text-truncate font-weight-bold">{{$product->productname}}</p>
                    </a>
                    <a class="about-title mb-0 bolder" style="color:#757575;" href="/brands/{{$product->brand->id}}">{{$product->brand->name}}</a>
                    <p style="font-weight:bold;">Rp. {{number_format($product->productprice)}}</p>
                </div>
            </div>
            @endforeach
        </div>
        <a class="carousel-control-prev w-auto" href="#myCarousel" role="button" data-slide="prev">
            <span style="margin-bottom: 1000%"><i class="fa fa-angle-left" aria-hidden="true" style="color:black; font-size:22px;"></i></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next w-auto" href="#myCarousel" role="button" data-slide="next">
            <span style="margin-bottom: 1000%"><i class="fa fa-angle-right" aria-hidden="true" style="color:black; font-size:22px;"></i></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<style>
    .carousel-item-custom {
        margin-right: 0;
    }

    .carousel-inner-custom .active,
    .carousel-inner-custom .active+.carousel-item-custom,
    .carousel-inner-custom .active+.carousel-item-custom+.carousel-item-custom,
    .carousel-inner-custom .active+.carousel-item-custom+.carousel-item-custom+.carousel-item-custom {
        display: block;
    }


    .carousel-inner-custom .carousel-item-custom.active:not(.carousel-item-right):not(.carousel-item-left),
    .carousel-inner-custom .carousel-item-custom.active:not(.carousel-item-right):not(.carousel-item-left)+.carousel-item-custom,
    .carousel-inner-custom .carousel-item-custom.active:not(.carousel-item-right):not(.carousel-item-left)+.carousel-item-custom+.carousel-item-custom,
    .carousel-inner-custom .carousel-item-custom.active:not(.carousel-item-right):not(.carousel-item-left)+.carousel-item-custom+.carousel-item-custom+.carousel-item-custom {
        transition: none;
    }

    .carousel-inner-custom .carousel-item-next,
    .carousel-inner-custom .carousel-item-prev {
        position: relative;
        transform: translate3d(0, 0, 0);
    }

    .carousel-inner-custom .active.carousel-item-custom+.carousel-item-custom+.carousel-item-custom+.carousel-item-custom+.carousel-item-custom {
        position: absolute;
        top: 0;
        right: -25%;
        z-index: -1;
        /* display: block; */
        visibility: visible;
    }

    .active.carousel-item-left+.carousel-item-next.carousel-item-left,
    .carousel-item-next.carousel-item-left+.carousel-item-custom,
    .carousel-item-next.carousel-item-left+.carousel-item-custom+.carousel-item-custom,
    .carousel-item-next.carousel-item-left+.carousel-item-custom+.carousel-item-custom+.carousel-item-custom,
    .carousel-item-next.carousel-item-left+.carousel-item-custom+.carousel-item-custom+.carousel-item-custom+.carousel-item-custom {
        position: relative;
        transform: translateX(-100%);
        /*ini yg diganti */
        visibility: visible;
    }

    .carousel-inner-custom .carousel-item-next.carousel-item-left {
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        display: block;
        visibility: visible;
    }

    .carousel-inner-custom .carousel-item-prev.carousel-item-right {
        position: absolute;
        top: 0;
        left: -25%;
        z-index: -1;
        display: block;
        visibility: visible;
    }

    .active.carousel-item-right+.carousel-item-prev.carousel-item-right,
    .carousel-item-prev.carousel-item-right+.carousel-item-custom,
    .carousel-item-prev.carousel-item-right+.carousel-item-custom+.carousel-item-custom,
    .carousel-item-prev.carousel-item-right+.carousel-item-custom+.carousel-item-custom+.carousel-item-custom,
    .carousel-item-prev.carousel-item-right+.carousel-item-custom+.carousel-item-custom+.carousel-item-custom+.carousel-item-custom {
        position: relative;
        transform: translate3d(100%, 0, 0);
        display: block;
        visibility: visible;
    }
</style>