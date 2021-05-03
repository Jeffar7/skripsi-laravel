@extends('layouts.app')

@section('title', 'TokoLokal | Delivery')

@section('content')

<div class="container pt-2">
  <!-- Address -->
  <div class="row justify-content-center mb-3">
    <div class="col-md-10 text-center">
      <div class="card shadow-lg">
        <!-- Title -->
        <div class="card-header text-left bg-dark text-white">
          <strong>
            Order Summary
          </strong>
        </div>
        <!-- Title -->

        <!-- Table -->
        <div class="row justify-content-center m-3">
          <div class="col-sm-11">
            <div class="table-responsive-sm">
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
                  </tr>
                </thead>
                <tbody class="bg-transparent">
                  <tr>
                    <th scope="row"><img src="{{asset('uploads/products/' . $product->productimage)}}" width="100px;" height="100px;" alt="Image"></th>
                    <td>{{$product->brand->name}}</td>
                    <td class="text-center">{{$product->productname}}</td>
                    <td class="text-center">{{$product->productsize}}</td>
                    <td class="text-center">{{$product->productprice}}</td>
                    <td class="text-center">{{$product->productquantity}}</td>
                    <td class="text-center">Rp. X,XXX,XXX</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- End Table -->

        <!-- Detail Address -->
        @if (!empty($address))
        <div class="row justify-content-around">
          <div class="col-sm-10 bg-light card mb-3">
            <div class="text-left">
              <p class="mb-1 mt-3 text-capitalize">Recipient Name: {{$address->recipient_name}}</p>
              <p class="mb-1 text-capitalize">Contact Number: {{$address->contact_number}}</p>
              <p class="mb-1 text-capitalize">Address: {{$address->address}}</p>
              <p class="mb-1 text-capitalize">Address Note (optional): {{$address->address_note}}</p>
              <p class="mb-1 text-capitalize">Post Code: {{$address->post_code}}</p>
              <p class="mb-1 text-capitalize">Province: {{$address->province}}</p>
              <p class="mb-1 text-capitalize">City: {{$address->city}}</p>
              <p class="mb-1 text-capitalize">District: {{$address->district}}</p>
            </div>
          </div>
        </div>
        @else
        <div class="row justify-content-center m-3">
          <div class="col-md-5 bg-light">
            <div class="text-left">
              Data selected null.
            </div>
          </div>
        </div>
        @endif
        <!--End Detail Address -->

        <!-- Shipping Option-->
        <div class="row justify-content-around">
          <div class="col-sm-10 bg-light card mb-3">
            <div class="text-left">
              <h5 class='mb-1 mt-3'>{{$shipment->shipment_method}}</h5>
              <p class='mb-1'>Delivery Cost: {{$shipment->delivery_cost}}</p>
              <p class='mb-3'>Estimated Delivery: {{$shipment->estimated_delivery}}</p>
            </div>
          </div>
        </div>
        <!--End Shipping Option-->

        <!-- Message for -->
        <div class="row justify-content-center mb-5">
          <div class="col-sm-11 text-center ">
            <textarea name="notes" id="notes" cols="96" rows="5" placeholder="Special shipping request or anything you need to know"></textarea>
          </div>
        </div>

        <!-- Table voucher -->
        <div class="row">
          <div class="col-sm-12">
            <div class="table-responsive-sm">
              <table class="table mb-0">
                <tr>
                  <td class="text-left border-top font-weight-bold">VOUCHERS</td>
                  <td class="text-right border-top"></td>
                  <td class="text-right border">Total Product (tax incl.)</td>
                  <td class="text-right border">Rp. X,XXX,XXX</td>
                </tr>
                <tr>
                  <td class="text-left border-0">Ignore it if you dont have any voucher</td>
                  <td class="text-right border-0"></td>
                  <td class="text-right border">Delivery Cost</td>
                  <td class="text-right border">Rp. X,XXX,XXX</td>
                </tr>
                <tr>
                  <td class="text-left border-0"><input type="text" class="form-control" name="vouchers"></td>
                  <td class="text-center border-0"><button type="submit" class="btn btn-dark">SELECT VOUCHERS</button></td>
                  <td class="text-right border">Total Voucher</td>
                  <td class="text-right border">Rp. X,XXX,XXX</td>
                </tr>
                <tr>
                  <td class="text-left border-0">Take Advantage of our exclusive offers</td>
                  <td class="text-right border-0"></td>
                  <td class="text-right border font-weight-bold">TOTAL</td>
                  <td class="text-right border font-weight-bold">Rp. X,XXX,XXX</td>
                </tr>
              </table>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- End Address -->

  <!-- Button -->
  <form action="/payment/buy_now" method="post">
    @csrf
    <!-- check di git -->
    <input type="hidden" name="product" value="{{$product->id}}">
    <input type="hidden" name="address" value="{{$address->id}}">
    <input type="hidden" name="shipment" value="{{$shipment->id}}">

    <div class="row justify-content-center mb-3">
      <div class="col-md-10 text-right">
        <button type="submit" name="formsummary" class="btn btn-dark"><i class="fas fa-arrow-circle-right"></i> PROCEED TO PAYMENT</button>
      </div>
    </div>
  </form>
  <!-- End Button -->
</div>



@endsection