@extends('layouts.app')

@section('title','TokoLokal | Cart')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h3 class="text-left my-4">Your Cart</h3>

            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            <form action="/checkout" id="form_checkout" method="POST">
                @csrf

                @if ($cartlists->count() > 0)
                <div class="card "> {{-- 
                    background-color: #F3F7F9;
                    border: none;
                 --}}
                    <table class="table" id="cart_checkout">
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
                                <td class="text-center"><img src="{{asset('../storage/images/Products/' . $cartlist->product->productimage)}}" width="150px;" height="150px;" alt="Image"></td>
                                <td class="text-center" style="
                                padding-top: 6%;
                            ">{{$cartlist->product->brand->name}}</td>
                                <td class="text-center" style="
                                padding-top: 6%;
                            ">{{$cartlist->product->productname}}</td>
                                <td class="text-center" style="
                                padding-top: 6%;
                            ">{{$cartlist->product->productsize}}</td>
                                <td class="text-center" style="
                                padding-top: 6%;
                            ">Rp. <span class="price">{{ $cartlist->product->productprice}}</span></td>
                                <td class="cart-product-quantity text-center" width="132px" style="
                                padding-top: 6%;
                            ">
                                    <div class="input-group quantity">
                                        <div class="input-group-prepend decrement-btn changeQuantity" style="cursor: pointer">
                                            <span class="input-group-text">-</span>
                                        </div>
                                        <input type="text" class="qty-input form-control text-center" maxlength="2" value="{{$cartlist->quantity}}" name="quantity">
                                        <div class="input-group-append increment-btn changeQuantity" style="cursor: pointer">
                                            <span class="input-group-text">+</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center" style="
                                padding-top: 6%;
                            ">
                                    <span class="subtotal">Rp. {{ number_format($cartlist->product->productprice*$cartlist->quantity)}}</span>
                                    <!-- <input type="hidden" id="subtotal" name="subtotal" value=""> -->
                                </td>
                                <!-- <td class="text-center">
                                    <span id="subtotal">Rp. {{ number_format($cartlist->product->productprice)}}</span>
                                </td> -->
                                <td class="text-center" style="
                                padding-top: 6%;
                            ">
                                    <a class="d-inline btn btn-danger" data-toggle="modal" data-target="#exampleModal">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>

                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-sm">
                            <div class="modal-content" style="4px 4px 4px 4px #575252">
                                <div class="modal-body">
                                    <div class="faq-section-logo">
                                        <img src="{{ asset('../storage/images/Wish List Page/DeleteLogo.png') }}" class="rounded-0 image-cat"
                                alt="Men Display Picture" width="50px" height="">
                            </div>
                                        <h3 class="text-center" style="
                                        color: #8B8B8B;
                                    ">Are you sure?</h3>
                                        <p class="text-center font-weight-normal mb-0" style="
                                        color: #8B8B8B;
                                    ">Do you really want to delete this item? This process cannot be undone.</p>
                                    </div>
                                    <div class="modal-footer justify-content-around pt-0 border-top-0">
                                        <button type="button" class="btn btn-secondary modalBtn" data-dismiss="modal" style="
                                        background-color: #C4C4C4;
                                        border: none;
                                        width: 40%;
                                    ">Cancel</button>
                                        <button type="submit" class="btn btn-danger" name="formaddress" style="
                                        width: 40%;
                                    ">Delete</button>
                                </div>
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
                <div class="text-left mt-5 mb-4">
                    <h5 class="font-weight-bold">Total:
                        <span class="grandtotal">0</span>
                        <input type="hidden" id="grandtotal" name="grandtotal" value="">
                    </h5>

                    <p>Delivery and discount will be calculated during the checkout process.</p>
                </div>
                <input type="hidden" value="{{$cartlists}}" name="cartlists">
                <div class="form-group row" style="
                margin-bottom: 6%;
            ">
                    <div class="col-md-6">
                    <a href="/" class="continueShopBtn" style="text-decoration: none">Continue Shopping</a>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary mt-4" for="form_checkout" style="
                        width: 30%;
                        float: right;
                    ">Checkout</button>
                    </div>
                </div>
        </div>
        </form>
    </div>
</div>

<script>
    function priceTotal() {
        var grandTotal = 0;
        $('#cart_checkout > tbody > tr').each(function() {
            var qty = $(this).find('.qty-input').val()
            var price = parseInt($(this).find('.price').text());
            var subTotal = qty * price;
            grandTotal += subTotal;
            // document.getElementById("subtotal").innerText = "Rp. " + subTotal.toLocaleString('en');
            // $(this).text("Rp. " + subTotal.toLocaleString('en'));
            $(this).find('.subtotal').text('Rp. ' + subTotal.toLocaleString('en'));

            var sub_total = $('.subtotal').html();
            $("#subtotal").val(sub_total);
        });
        // document.getElementById("grandtotal").innerText = "Rp. " + grandTotal.toLocaleString('en');
        // $('.grandtotal').text("Rp. " + grandTotal.toLocaleString('en'));
        $('.grandtotal').text('Rp. ' + grandTotal.toLocaleString('en'));

        var grand_total = $('.grandtotal').html();
        $("#grandtotal").val(grand_total);

        // (".grandtotal").empty();
        // $(".grandtotal").html(grand_total);
    }

    $(document).ready(function() {
        priceTotal();
        $('.increment-btn').click(function(e) {
            e.preventDefault();
            var incre_value = $(this).parents('.quantity').find('.qty-input').val();
            var value = parseInt(incre_value, 10);
            value = isNaN(value) ? 0 : value;
            if (value < 100) {
                value++;
                $(this).parents('.quantity').find('.qty-input').val(value);
            }

            priceTotal();
        });


        $('.decrement-btn').click(function(e) {
            e.preventDefault();
            var decre_value = $(this).parents('.quantity').find('.qty-input').val();
            var value = parseInt(decre_value, 10);
            value = isNaN(value) ? 0 : value;
            if (value > 1) {
                value--;
                $(this).parents('.quantity').find('.qty-input').val(value);
            }

            priceTotal();
        });
    });
</script>


@endsection