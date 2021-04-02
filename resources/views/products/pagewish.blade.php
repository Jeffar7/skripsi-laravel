@extends('layouts.app')

@section('title','TokoLokal | Wish List')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h1 class="text-center mt-3">Wish List</h1>
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif

            <div class="card ">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Picture</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col"> Actions </th>
                        </tr>
                    </thead>
                    @foreach($productwishs as $productwish)
                    @if($productwish->user_id == Auth::user()->id)
                    <tbody>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td><img src="{{asset('uploads/products/' . $productwish->product->productimage)}}" width="100px;" height="100px;" alt="Image"></td>
                            <td>{{$productwish->product->brand->name}}</td>
                            <td>{{$productwish->product->productname}}</td>
                            <td>{{$productwish->product->productprice}}</td>
                            <td>
                                <form action="/wish-list/delete/{{$productwish->product->id}}" method="POST" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="badge btn-danger" type="submit">
                                        Delete
                                    </button>
                                </form>
                                <form action="/wish-list/addtocart/{{$productwish->product->id}}" method="POST" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="badge btn-primary" type="submit">
                                        Add to Cart
                                    </button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                    @endif
                    @endforeach
                </table>

            </div>
        </div>
    </div>
</div>


@endsection