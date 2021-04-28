@extends('layouts.app')

@section('title','TokoLokal | Cart')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h3 class="text-left mt-3">Your Cart</h3>

            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            <form action="/checkout" id="form_checkout" method="POST">
                @csrf

                <div class="card ">
                    <table class="table">
                        <thead class="bg-transparent">
                            <tr>
                                <th scope="col" class="text-center">Thumbnail</th>
                                <th scope="col" class="text-center">Brand</th>
                                <th scope="col" class="text-center">Product</th>
                                <th scope="col" class="text-center">Size</th>
                                <th scope="col" class="text-center">Price</th>
                                <th scope="col" class="text-center">Quantity</th>
                                <th scope="col" class="text-center">Subtotal</th>
                                <th scope="col" class="text-center">Actions</th>
                            </tr>
                        </thead>
                        @foreach($cartlists as $cartlist)
                        <tbody class="bg-transparent" class="checkout_cart">
                            <tr class="cartpage">
                                <td class="text-center"><img src="{{asset('uploads/products/' . $cartlist->product->productimage)}}" width="100px;" height="100px;" alt="Image"></td>
                                <td class="text-center">{{$cartlist->product->brand->name}}</td>
                                <td class="text-center">{{$cartlist->product->productname}}</td>
                                <td class="text-center">{{$cartlist->product->productsize}}</td>
                                <td class="price text-center">Rp. <span id="price" data-price="{{$cartlist->product->productprice}}">{{ $cartlist->product->productprice}}</span></td>
                                <td class="cart-product-quantity text-center" width="132px">
                                    <div class="input-group quantity">
                                        <div class="input-group-prepend decrement-btn changeQuantity" style="cursor: pointer">
                                            <span class="input-group-text">-</span>
                                        </div>
                                        <input type="text" class="qty-input form-control text-center" maxlength="2" value="1" id="qty-input">
                                        <div class="input-group-append increment-btn changeQuantity" style="cursor: pointer">
                                            <span class="input-group-text">+</span>
                                        </div>
                                    </div>
                                </td>

                                <!-- <input style="text-align:center; width: 70px;" type="text" name="subtotal" id="subtotal" value="{{$cartlist->product->productprice}}" > -->
                                <td class="text-center">
                                    <span id="subtotal">Rp. {{ number_format($cartlist->product->productprice)}}</span>
                                </td>
                                <td class="text-center">
                                    <a href="/product-cart/delete/{{$cartlist->id}}" class="d-inline btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
                <div class="text-left mt-3">
                    <input type="hidden" name="grandtotal" id="grandtotal">
                    <h5 class="bold">Total: <span name="grandtotal" id="grandtotal"></span></h5>
                    <p>Delivery and discount will be calculated during the checkout process.</p>
                </div>
                <input type="hidden" value="{{$cartlists}}" name="cartlists">
                <div class="form-group ">
                    <button type="submit" class="btn btn-primary col-2 mt-5" for="form_checkout">Checkout</button>
                </div>
        </div>
        </form>
    </div>
</div>

<script>
    function priceTotal(value) {
        var grandTotal = 0;
        $('#subtotal').each(function() {
            var qty = value;
            var price = parseInt($("#price").text());
            var subTotal = value * price;
            grandTotal = grandTotal + subTotal;
            document.getElementById("subtotal").innerText = "Rp. " + subTotal.toLocaleString('en');
        });
        document.getElementById("grandtotal").innerText = "Rp. " + grandTotal.toLocaleString('en');
    }

    $('.increment-btn').click(function(e) {
        e.preventDefault();
        var incre_value = $(this).parents('.quantity').find('#qty-input').val();
        var value = parseInt(incre_value, 10);
        value = isNaN(value) ? 0 : value;
        if (value < 100) {
            value++;
            $(this).parents('.quantity').find('#qty-input').val(value);
        }

        priceTotal(value);
    });

    $('.decrement-btn').click(function(e) {
        e.preventDefault();
        var decre_value = $(this).parents('.quantity').find('#qty-input').val();
        var value = parseInt(decre_value, 10);
        value = isNaN(value) ? 0 : value;
        if (value > 1) {
            value--;
            $(this).parents('.quantity').find('#qty-input').val(value);
        }

        priceTotal(value);
    });
</script>


@endsection