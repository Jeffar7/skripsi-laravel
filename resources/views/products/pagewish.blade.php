@extends('layouts.app')

@section('title','TokoLokal | Wish List')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <p class="title-home">Wish List</p>
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="search-group rounded left-addon-search inner-addon" style="width:730px;">
                <i class="fas fa-search"></i>
                <input type="search" class="search-field rounded" placeholder="Find your wishlist item" aria-label="Search" aria-describedby="search-addon" style="width:730px;"/>
            </div>
        </div>
        <div class="col-md-4">
            <p>Manage</p>
        </div>
    </div>
    <div class="row justify-content-center">
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
    </div>
</div> 
<div class="container">
    <div class="card mt-4 pl-3 pr-3 mb-4" style="border-radius: 10px; box-shadow: 1px 2px #888888; width:820px;">
        <div class="row mb-3">
        @foreach($productwishs as $productwish)
                <div class="col-sm-4">
                    <div class="card-body">
                        <img src="{{asset('uploads/products/' . $productwish->product->productimage)}}" width="100px;" height="100px;" alt="Image"> 
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="card-body">
                        <div class="my-2">
                            <p class="about-title pt-3 mb-0" style="text-decoration:normal;">{{$productwish->product->brand->name}}</p>
                            <p class="pt-0">{{$productwish->product->productname}}</p>
                            <p style="font-weight:bold;">Rp {{$productwish->product->productprice}}</p>
                        </div>
                    </div>
                    <div class="row text-left ml-3">
                        <form action="/wish-list/{{$productwish->id}}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="badge btn-danger" type="submit" style="height: 30px;width: 30px">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                        <button href="/products/{{$productwish->id}}/edit" class="badge btn-success ml-2" style="height: 30px;width: 350px;">+ Cart</button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection