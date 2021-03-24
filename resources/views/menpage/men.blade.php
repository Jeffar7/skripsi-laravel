@extends('layouts.template')

@section('title','Men | TokoLokal')

@section('content')

<div class="jumbotron bg-transparent" style="margin-top: -3rem;">
    <div class="text-center">
        <h5 class="text-left" style="margin-left: 1rem;">Home > Men </h5>
        <img src="image/men.jpg" class="img-fluid p-3" alt="men" height="40rem">
    </div>

</div>

<section>
    <div class="container">
        <div class="row justify-content-start" style="margin-left: -6rem;">
            <div class="col-3 border border-dark">
                <!-- Awal Drop Down -->
                <div class="dropdown  pb-5">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Top
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        @foreach($products as $product)
                        @if($product->categoryid == 1)

                        <ul>
                            <li>
                                <a href=""><img src="{{asset('uploads/products/' . $product->productimage)}}" width="100px;" height="100px;" alt="Image"> {{$product->productname}}</a>
                            </li>
                        </ul>

                        @endif
                        @endforeach
                    </div>
                </div>
                <div class="dropdown pb-5">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Bottom
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        @foreach($products as $product)
                        @if($product->categoryid == 2)

                        <ul>
                            <li>
                                <a href=""><img src="{{asset('uploads/products/' . $product->productimage)}}" width="100px;" height="100px;" alt="Image"> {{$product->productname}}</a>
                            </li>
                        </ul>

                        @endif
                        @endforeach
                    </div>
                </div>
                <div class="dropdown pb-5">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Shoes
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        @foreach($products as $product)
                        @if($product->categoryid == 3)

                        <ul>
                            <li>
                                <a href=""><img src="{{asset('uploads/products/' . $product->productimage)}}" width="100px;" height="100px;" alt="Image"> {{$product->productname}}</a>
                            </li>
                        </ul>

                        @endif
                        @endforeach
                    </div>
                </div>
                <div class="dropdown pb-5">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        accessories
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        @foreach($products as $product)
                        @if($product->categoryid == 4)

                        <ul>
                            <li>
                                <a href=""><img src="{{asset('uploads/products/' . $product->productimage)}}" width="100px;" height="100px;" alt="Image"> {{$product->productname}}</a>
                            </li>
                        </ul>

                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- Akhir Drop Down -->

            <!-- Tampilan Gambar Produk -->
            <div class="col-md-9 border border-dark">
                <div class="row">

                    @foreach($products as $product)

                    <div class="col-4 pt-2">
                        <!-- Gambar 1 -->
                        <div class="card mb-3" style="width: 15rem;">
                            <img src="{{asset('uploads/products/' . $product->productimage)}}" width="100px;" height="200px;" alt="Image" class="card-img-top">
                            <div class="card">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">{{$product->productname}}</li>
                                    <li class="list-group-item">{{$product->productdescription}}</li>
                                    <li class="list-group-item">Rp. {{$product->productprice}}</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Akhir Gambar 1 -->
                    </div>

                    @endforeach


                </div>

            </div>
            <!--AKhir Tampilan Gambar Produk -->
        </div>
    </div>
</section>

@endsection