@extends('layouts.app')

@section('title','TokoLokal | Wish List')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <p class="title-home mt-3 font-weight-bold">Wish List</p>
    </div>

    @if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
    @endif

    @if ($productwishs->count() > 0)
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="search-group rounded left-addon-search inner-addon" style="width:100%;">
                <i class="fas fa-search"></i>
                <input type="search" class="search-field rounded" placeholder="Find your wishlist item" aria-label="Search" aria-describedby="search-addon" style="width:100%;" />
            </div>
        </div>
        <div class="col-md-2 text-center pt-2">
            <p class="manage-text">Manage</p>
        </div>
    </div>
</div>
<div class="container mb-5">
    @foreach($productwishs as $productwish)
    <div class="card mt-4 px-3 mb-4" style="border-radius: 10px; box-shadow: 4px 4px 4px 4px #888888; width:100%; min-height:290px">
        <div class="row">
            <div class="col-sm-5">
                <div class="card-body">
                    <img src="{{asset('../storage/images/Products/' . $productwish->product->productimage)}}" alt="Image" style="
                    height: 220px;
                    margin: 5% 0; 
                    width: 100%;
                ">
                </div>
            </div>
            <div class="col-md-7 mb-2">
                <div class="card-body pt-4">
                    <div class="my-4">
                        <p class="about-title mb-0" style="text-decoration:normal;">{{$productwish->product->brand->name}}</p>
                        <p class="pt-0" style="
                        font-size: 20px;
                    ">{{$productwish->product->productname}}</p>
                    <p style="font-weight:bold;font-size: 18px;" class="pt-1">Rp {{number_format($productwish->product->productprice)}}</p>
                    </div>
                </div>
                <div class="row text-left pt-1">
                    <a href="/wish-list/delete/{{$productwish->id}}" class="d-inline badge btn-danger" data-value="{{$productwish->id}}" style="height: 40px;width: 50px; border: 1px solid #e3342f;" data-toggle="modal" data-target="#exampleModal{{$productwish->id}}"><i class="fas fa-trash-alt mt-2" style="color:white; font-size: 16px;"></i></a>
                </div>
                <div class="col-md-9">
                    <form action="addtocart/{{$productwish->id}}" method="POST" class="d-inline">
                        @csrf
                        <button class="badge btn-success" style="height: 40px;width: 100%;border: 1px solid #38c172;"><p class="mt-2" style="
                            font-size: 16px;
                            color: white;
                        ">+ Add to Cart</p></button>
                        <input type="hidden" value="1" name="quantity">
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>
    @endforeach

    @foreach($productwishs as $productwish)
    <div class="modal fade" id="exampleModal{{$productwish->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content" style="4px 4px 4px 4px #575252">
                <form action="/wish-list/delete/{{$productwish->id}}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <div class="modal-body">
                        <div class="faq-section-logo">
                            <img src="{{ asset('../storage/images/Wish List Page/DeleteLogo.png') }}" class="rounded-0 image-cat"
                    alt="Men Display Picture" width="50px" height="">
                </div>
                        <h3 class="text-center"  >Are you sure?</h3>
                        <p class="text-center font-weight-normal mb-0" style="
                        color: black;
                    ">Do you really want to delete 
                        <br>
                        <span class="font-weight-bold">{{$productwish->product->productname}}</span> item?</p> 
                        <p class="text-center font-weight-normal mb-0">This process cannot be undone.</p>
                    </div>
                    <div class="modal-footer justify-content-around pt-0 border-top-0">
                        <button type="button" class="btn btn-secondary modalBtn" data-dismiss="modal" style="
                        background-color: #C4C4C4;
                        border: none;
                        width: 40%;
                    ">Cancel</button>
                        <button type="submit" class="btn btn-danger" name="delete_user" style="
                        width: 40%;
                    ">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach
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