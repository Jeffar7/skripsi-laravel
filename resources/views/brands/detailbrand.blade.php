@extends('layouts.app')

@section('title','TokoLokal | ' .e($brand->name))

@section('content')
<div class="container pt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0 bg-transparent">
            <li class="breadcrumb-item"><a href="/" class="text-dark">Home</a></li>
            <li class="breadcrumb-item"><a href="/allbrand" class="text-dark">Brand</a></li>
            <li class="breadcrumb-item active text-bold text-dark" aria-current="page" style="color:black;font-weight:bold;">{{$brand->name}}</li>
        </ol>
    </nav>
</div>

<div class="container pb-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="text-center">
                <img src="{{asset('../storage/images/Brands/' . $brand->picture)}}" class="img-fluid p-3" alt="Couldn't process image" height="323px" width="400px">
            </div>
            <h1 class="text-center mt-3" style="text-transform:capitalize;font-weight:bold">{{$brand->name}}</h1>
            <div class="text-center">
                <img src="{{asset('../storage/images/Brands/' . $brand->detail_picture)}}" class="img-fluid p-3" alt="Couldn't process image" height="323px" width="400px">
            </div>
            <h5 class="text-center mt-3" style="text-transform:capitalize;font-weight:bold">Owned by {{$brand->owner}}</h5>

            <h5 class="text-center mt-3" style="font-weight:bold">Website</h5>
            <div class="text-center"><a href="">{{$brand->website}}</a></div>

            <h5 class="text-center mt-3" style="font-weight:bold">About Us</h5>
            <p class="text-center">{{$brand->about}}</p>
        </div>
    </div>
</div>

@endsection