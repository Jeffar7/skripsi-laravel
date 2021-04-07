@extends('layouts.app')

@section('title','TokoLokal | Detail Brand')

@section('content')
<div class="container pt-4">
    <div><p class="text-left">Brands > {{$brand->name}}</p></div>
</div>

<div class="container pb-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h1 class="text-center mt-3" style="text-transform:capitalize;font-weight:bold">{{$brand->name}}</h1>
            <h5 class="text-center mt-3" style="text-transform:capitalize;font-weight:bold">Owned by {{$brand->owner}}</h5>
            <div class="text-center">
                <img src="{{asset('uploads/brands/' . $brand->picture)}}" class="img-fluid p-3" alt="Couldn't process image" height="323px" width="400px">
            </div>

            <h5 class="text-center mt-3" style="font-weight:bold">Website</h5>
            <div class="text-center"><a href="">{{$brand->website}}</a></div>

            <h5 class="text-center mt-3" style="font-weight:bold">About Us</h5>
            <p class="text-center">{{$brand->about}}</p>
        </div>
    </div>
</div>

@endsection