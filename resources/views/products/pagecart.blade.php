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
            <form action="/checkout" id="form_checkout" method="POST">
                @csrf

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
                                <td id="price">{{$cartlist->product->productprice}}</td>
                                <td>
                                    <button type="button" class="minus-btn btn btn-outline-secondary btn-sm">-</button>
                                    <input id="quantity" style="text-align:center; width: 40px;" type="text" name="quantity" id="quantity" value="1">
                                    <button type="button" class="plus-btn btn btn-outline-secondary btn-sm">+</button>
                                </td>
                                <td>

                                    <!-- <input style="text-align:center; width: 70px;" type="text" name="subtotal" id="subtotal" value="{{$cartlist->product->productprice}}" > -->

                                    <span id="subtotal">{{$cartlist->product->productprice}}</span>

                                </td>
                                <th>
                                    <!-- <form action="/product-cart/delete/{{$cartlist->id}}" method="POST" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="badge btn-danger" type="submit">
                                        Delete
                                    </button>
                                </form> -->
                                    <a href="/product-cart/delete/{{$cartlist->id}}" class="d-inline btn btn-danger">Delete</a>
                                </th>
                            </tr>
                        </tbody>

                        @endforeach
                    </table>
                </div>
                <input type="hidden" value="{{$cartlists}}" name="cartlists">
                <div class="form-group ">
                    <button type="submit" class="btn btn-dark col-2 mt-5" for="form_checkout">Checkout</button>
                </div>
        </div>
        </form>
    </div>
</div>

<script>
    document.querySelector(".minus-btn").setAttribute("disabled", "disabled");

    //taking value to increment or decrement input value
    var valueCount

    //taking price value in variable
    var price = document.getElementById("price").innerText;

    //price calculation function

    function priceTotal() {
        var total = valueCount * price;
        document.getElementById("subtotal").innerText = total;
    }

    //plus button
    document.querySelector(".plus-btn").addEventListener("click", function() {
        //getting value from input
        valueCount = document.getElementById("quantity").value;

        //input value increment by 1
        valueCount++;

        //setting increment input value
        document.getElementById("quantity").value = valueCount

        if (valueCount > 1) {
            document.querySelector(".minus-btn").removeAttribute("disabled");
            document.querySelector(".minus-btn").classList.remove("disabled");
        }

        // calling price function
        priceTotal()

    })

    //minus button
    document.querySelector(".minus-btn").addEventListener("click", function() {
        //getting value from input
        valueCount = document.getElementById("quantity").value;

        //input value decrement by 1
        valueCount--;

        //setting decrement input value
        document.getElementById("quantity").value = valueCount

        if (valueCount == 1) {
            document.querySelector(".minus-btn").setAttribute("disabled", "disabled")
        }

        // calling price function
        priceTotal()

    })
</script>


@endsection