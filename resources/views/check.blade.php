@extends('layouts.app')

@section('title','TokoLokal | Testing Page')

@section('content')
<!-- <div class="container-fluid">
  <h1 class="text-center mb-3">Bootstrap Multi-Card Carousel</h1>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner row w-100 mx-auto">
      <div class="carousel-item col-md-3 active">
        <div class="card">
          <img class="card-img-top img-fluid" src="http://placehold.it/800x600/f44242/fff" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card 1</h4>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
      <div class="carousel-item col-md-3">
        <div class="card">
          <img class="card-img-top img-fluid" src="http://placehold.it/800x600/418cf4/fff" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card 2</h4>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
      <div class="carousel-item col-md-3">
        <div class="card">
          <img class="card-img-top img-fluid" src="http://placehold.it/800x600/3ed846/fff" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card 3</h4>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
      <div class="carousel-item col-md-3">
        <div class="card">
          <img class="card-img-top img-fluid" src="http://placehold.it/800x600/42ebf4/fff" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card 4</h4>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
      <div class="carousel-item col-md-3">
        <div class="card">
          <img class="card-img-top img-fluid" src="http://placehold.it/800x600/f49b41/fff" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card 5</h4>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
      <div class="carousel-item col-md-3">
        <div class="card">
          <img class="card-img-top img-fluid" src="http://placehold.it/800x600/f4f141/fff" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card 6</h4>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
      <div class="carousel-item col-md-3">
        <div class="card">
          <img class="card-img-top img-fluid" src="http://placehold.it/800x600/8e41f4/fff" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card 7</h4>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div> -->

<!-- <div class="container text-center my-3">
    <h2>Our Certifications</h2>
    <div class="row mx-auto my-auto">
        <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
            <div class="carousel-inner w-100" role="listbox">
                <div class="carousel-item active">
                    <img width="900" height="1200" class="d-block col-3 img-fluid" src="https://cdn.shopify.com/s/files/1/2304/9095/files/NMSDC.png?10873">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-3 img-fluid" src="https://cdn.shopify.com/s/files/1/2304/9095/files/DBE-ACDBE-logo.png?10873">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-3 img-fluid" src="https://cdn.shopify.com/s/files/1/2304/9095/files/MBE_LOGO.png?10873">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-3 img-fluid" src="https://cdn.shopify.com/s/files/1/2304/9095/files/2018_WBENC_logo_text_gray.png?10873">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-3 img-fluid" src="http://novel-mg.com/assets/cert_logo.png">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-3 img-fluid" src="https://www.kriaanet.com/wp-content/uploads/2019/02/300ppi-feat-logo_feat_logo-EDWOSB.png">
                </div>
            </div>
            <a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div> -->

<div id="myCarousel" class="carousel slide  w-100" data-interval="false">
                <div class="carousel-inner w-100 px-3">

                    @foreach($products as $key => $product)
                    <div class="carousel-item col col-md-3 {{$key == 0 ? 'active' : '' }}">
                        <!-- Gambar 1 -->
                        <!-- <div class="col col-sm-3 mb-3"> -->
                        <div class="card">
                            <a href="/product/detail/{{$product->id}}" style="width: 239.5px;height:272px;"><img src="{{asset('../storage/images/Products/' . $product->productimage)}}" width="239.5px;" height="272px;" alt="Image" class="card-img-top border border-dark"></a>
                        </div>
                        <div class="card px-2 border border-dark">
                            <a href="/product/detail/{{$product->id}}" style="color:black;">
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

<!-- <script>
  $('#recipeCarousel').carousel({
  interval :2000
})

$('.carousel .carousel-item').each(function(){
    var next = $(this).next();
    if (!next.length) {
    next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));
    
    for (var i=0;i<2;i++) {
        next=next.next();
        if (!next.length) {
        	next = $(this).siblings(':first');
      	}
        
        next.children(':first-child').clone().appendTo($(this));
      }
});

</script> -->



@endsection