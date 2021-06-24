@extends('layouts.app')

@section('title','TokoLokal | Wish List')

@section('content')



<div class="container">
    <div class="row justify-content-center">
        <p class="title-home mt-3">Wish List</p>
    </div>

    @if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
    @endif

    @if ($productwishs->count() > 0)
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="search-group rounded left-addon-search inner-addon" style="width:100%;">
                <i class="fas fa-search"></i>
                <input type="search" class="search-field rounded" placeholder="Find your wishlist item" aria-label="Search" aria-describedby="search-addon" style="width:100%;" />
            </div>
        </div>
        <div class="col-md-4 text-center">
            <p>Manage</p>
        </div>
    </div>
</div>
<div class="container">
    @foreach($productwishs as $productwish)
    <div class="card mt-4 pl-3 pr-3 mb-4" style="border-radius: 10px; box-shadow: 1px 2px #888888; width:820px;">
        <div class="row">
            <div class="col-sm-4">
                <div class="card-body">
                    <img src="{{asset('../storage/images/Products/' . $productwish->product->productimage)}}" width="100%;" alt="Image">
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
                    <!-- <form action="/wish-list/delete/{{$productwish->id}}" method="POST" class="d-inline"> -->
                    <!-- @method('delete')
                    @csrf -->
                    <button class="badge btn-danger" type="submit" style="height: 30px;width: 30px" data-toggle="modal" data-target="#exampleModal">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                    <!-- </form> -->

                    <form action="addtocart/{{$productwish->id}}" method="POST" class="d-inline">
                        @csrf
                        <button class="badge btn-success ml-2" style="height: 30px;width: 350px;">+ Cart</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content shadow-sm">
                <form action="/wish-list/delete/{{$productwish->id}}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <div class="modal-body">
                        <h3 class="text-center">Are you sure?</h3>
                        <p class="text-center font-weight-normal mb-0">Do you really want to delete this item? This process cannot be undone.</p>
                    </div>
                    <div class="modal-footer justify-content-around pt-0 border-top-0">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger" name="formaddress">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@else
@error('no_post_result')
<div class="text-center">
    <img src="images/empty_item.png" alt="" height="200px" width="200px">
    <p class="mb-0">Oops!</p>
    <p>{{ $message }}</p>
</div>
@enderror
@endif

@endsection