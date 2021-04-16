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
                            <th scope="col">#</th>
                            <th scope="col">Picture</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Name</th>
                            <th scope="col">Size</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Subtotal</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    @foreach($cartlists as $cartlist)
                    @if($cartlist->user_id == Auth::user()->id)
                    <tbody>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td><img src="{{asset('uploads/products/' . $cartlist->product->productimage)}}" width="100px;" height="100px;" alt="Image"></td>
                            <td>{{$cartlist->product->brand->name}}</td>
                            <td>{{$cartlist->product->productname}}</td>
                            <td>{{$cartlist->product->productsize}}</td>
                            <td>{{$cartlist->product->productprice}}</td>
                            <td class="cart-product-quantity" width="132px">
                                <div class="input-group quantity">
                                    <div class="input-group-prepend decrement-btn" style="cursor: pointer">
                                        <span class="input-group-text">-</span>
                                    </div>
                                    <input type="text" class="qty-input form-control text-center" maxlength="2" max="10" value="1">
                                    <div class="input-group-append increment-btn" style="cursor: pointer">
                                        <span class="input-group-text">+</span>
                                    </div>
                                </div>
                            </td>
                            <td>sb</td>
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
                    @endif

                    @endforeach
                </table>

            </div>
        </div>
    </div>
</div>

<script>    
    $(document).ready(function () {
            $('.increment-btn').click(function (e) {
            e.preventDefault();
            var incre_value = $(this).parents('.quantity').find('.qty-input').val();
            var value = parseInt(incre_value, 10);
            value = isNaN(value) ? 0 : value;
            if(value<10){
                value++;
                $(this).parents('.quantity').find('.qty-input').val(value);
            }
        });

    $('.decrement-btn').click(function (e) {
            e.preventDefault();
            var decre_value = $(this).parents('.quantity').find('.qty-input').val();
            var value = parseInt(decre_value, 10);
            value = isNaN(value) ? 0 : value;
            if(value>1){
                value--;
                $(this).parents('.quantity').find('.qty-input').val(value);
            }
        });
    });
</script>
    

@endsection