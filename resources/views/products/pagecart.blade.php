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
                    <tbody class="bg-transparent">
                        <tr class="cartpage">
                            <td class="text-center"><img src="{{asset('uploads/products/' . $cartlist->product->productimage)}}" width="100px;" height="100px;" alt="Image"></td>
                            <td class="text-center">{{$cartlist->product->brand->name}}</td>
                            <td class="text-center">{{$cartlist->product->productname}}</td>
                            <td class="text-center">{{$cartlist->product->productsize}}</td>
                            <td class="text-center">{{$cartlist->product->productprice}}</td>
                            <td class="cart-product-quantity text-center" width="132px">
                                <input type="hidden" class="product_id" value="{{$cartlist->product->id}}">
                                <div class="input-group quantity">
                                    <div class="input-group-prepend decrement-btn changeQuantity" style="cursor: pointer">
                                        <span class="input-group-text">-</span>
                                    </div>
                                    <input type="text" class="qty-input form-control text-center" maxlength="2" max="10" value="{{$cartlist->product->productquantity}}">
                                    <div class="input-group-append increment-btn changeQuantity" style="cursor: pointer">
                                        <span class="input-group-text">+</span>
                                    </div>
                                </div>
                            </td>
                            <!-- <td class="text-center"><input style="text-align:center; width: 70px;" type="text" name="subtotal" id="subtotal" value=""></td> -->
                            <td class="text-center">
                                <span>Rp. {{ number_format($cartlist->product->productquantity * $cartlist->product->productprice)}}</span>
                            </td>
                            <td class="text-center">
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

            <div class="text-left mt-3">
                <h5 class="bold">Total: <span>Rp. {{ number_format($cartlist->product->productquantity * $cartlist->product->productprice)}}</span></h5>
                <p>Delivery and discount will be calculated during the checkout process.</p>
            </div>

            <div class="form-group text-left">
                <a href="/">
                    <button type="" class="btn btn-secondary col-2 mt-5">Continue Shopping</button>
                </a>

                <a href="/checkout">
                    <button type="submit" class="btn btn-primary col-2 mt-5">CHECK OUT</button>
                </a>
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

    //update cart
    $(document).ready(function () {

        $('.changeQuantity').click(function (e) {
            e.preventDefault();

            var quantity = $(this).closest(".cartpage").find('.qty-input').val();
            var product_id = $(this).closest(".cartpage").find('.product_id').val();

            var data = {
                '_token': $('input[name=_token]').val(),
                'quantity':quantity,
                'product_id':product_id,
            };

            $.ajax({
                url: '/update-to-cart',
                type: 'POST',
                data: data,
                success: function (response) {
                    window.location.reload();
                    alertify.set('notifier','position','top-right');
                    alertify.success(response.status);
                }
            });
    });

});

</script>
    

@endsection