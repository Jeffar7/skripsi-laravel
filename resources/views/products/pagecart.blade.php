@extends('layouts.app')

@section('title','TokoLokal | Cart')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h1 class="text-center mt-3">Cart List</h1>

            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif


            <div class="card ">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Thumbnail</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Product</th>
                            <th scope="col">Size</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Subtotal</th>
                            <th scope="col"> </th>
                        </tr>
                    </thead>
                    @foreach($cartlists as $cartlist)
                    <tbody>
                        <tr>
                            <td><img src="{{asset('uploads/products/' . $cartlist->product->productimage)}}" width="100px;" height="100px;" alt="Image"></td>
                            <td>{{$cartlist->product->brand->name}}</td>
                            <td>{{$cartlist->product->productname}}</td>
                            <td>{{$cartlist->product->productsize}}</td>
                            <td>{{$cartlist->product->productprice}}</td>
                            <td><input style="text-align:center; width: 40px;" type="text" name="quantity" id="quantity" value="1"></td>
                            <td><input style="text-align:center; width: 70px;" type="text" name="subtotal" id="subtotal" value="{{$cartlist->product->productprice}}"></td>
                            <td>
                                <form action="/product-cart/delete/{{$cartlist->id}}" method="POST" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="badge btn-danger" type="submit">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    </tbody>

                    @endforeach
                </table>
            </div>
            <div class="form-group ">
                <a href="/checkout">
                    <button type="submit" class="btn btn-primary col-2 mt-5">Check out </button>
                </a>
            </div>
        </div>
    </div>
</div>


@endsection