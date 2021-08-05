@extends('layouts.app')

@section('title', 'TokoLokal | Delivery')

@section('content')

<div class="container mt-2 mb-5">
  <!-- Address -->
  <div class="row justify-content-center mb-3">
    <div class="col-md-12 text-center">
      <div class="breadcrumb-a flat mt-4 mb-5">
        <a class="col-sm-4"><span class="ml-2">DELIVERY</span></a>
        <a class="active col-sm-4"><span class="ml-2">SUMMARY</span></a>
        <a class="col-sm-4"><span class="ml-2">PAYMENT</span></a>
      </div>

      <div class="card" style="box-shadow: 4px 4px 4px 4px #888888;">
        <!-- Title -->
        <div class="card-header text-left bg-dark text-white">
          <img src="{{ asset('../storage/images/Transaction Page/orderSummaryLogo.png') }}" alt="" style="width: 2%;height: 20px;margin-top: -0.5%;">
          <strong class="ml-2">
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
                  <tr class="top-border">
                    <th scope="col" class="text-center">Thumbnail</th>
                    <th scope="col" class="text-center">Brand</th>
                    <th scope="col" class="text-center">Product</th>
                    <th scope="col" class="text-center">Size</th>
                    <th scope="col" class="text-center">Price</th>
                    <th scope="col" class="text-center">Quantity</th>
                    <th scope="col" class="text-center">Subtotal</th>
                  </tr>
                </thead>
                <tbody class="down-border bg-transparent">
                  @foreach ($orders as $product)
                  <tr class="top-border">
                    <td scope="row" class="text-center"><img src="{{asset('../storage/images/Products/' . $product->productimage)}}" width="100px;" height="100px;" alt="Image"></td>
                    <td class="text-center py-4">{{$product->brand}}</td>
                    <td class="text-center py-4">{{$product->productname}}</td>
                    <td class="text-center py-4">{{$product->productsize}}</td>
                    <td class="text-center py-4">Rp. {{ number_format($product->productprice)}}</td>
                    <td class="text-center py-4">{{$product->quantity}}</td>
                    <td class="text-center py-4">Rp. {{number_format($product->productprice*$product->quantity)}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- End Table -->

        <!-- Detail Address -->
        @if (!empty($address))

        <div class="row justify-content-around">
          <div class="row col-md-10 py-2" style="background-color: #f3f1f1;
          background-clip: border-box;
          border: 1px solid rgba(0, 0, 0, 0.125);
          border-radius: 0.25rem;">
            <div class="col-md-3 text-left mt-2">
              <p class='mb-1'>Recipient Name</p>
              <p class='mb-1'>Contact Number</p>
              <p class='mb-1'>Address</p>
              <p class='mb-1'>Address Note (optional)</p>
              <p class='mb-1'>Post Code</p>
              <p class='mb-1'>Province</p>
              <p class='mb-1'>City</p>
              <p class='mb-1'>District</p>
            </div>
            <div class="col-md-7 text-left mt-2">
              <p class='mb-1'>: Rp. {{$address->recipient_name}}
              <p class='mb-1'>: {{$address->contact_number}}</p>
              <p class='mb-1'>: {{$address->address}}</p>
              <p class='mb-1'>: {{$address->address_note}}</p>
              <p class='mb-1'>: {{$address->post_code}}</p>
              <p class='mb-1'>: {{$address->province}}</p>
              <p class='mb-1'>: {{$address->city}}</p>
              <p class='mb-3'>: {{$address->district}}</p>
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


        <div class="row justify-content-around mt-4">
          <div class="row col-md-10 py-2" style="background-color: #f3f1f1;
          background-clip: border-box;
          border: 1px solid rgba(0, 0, 0, 0.125);
          border-radius: 0.25rem;">
            <div class="col-md-12 text-left">
              <h5 class='mb-1 mt-3 font-weight-bold '>{{$shipment->shipment_method}}</h5>
            </div>
            <div class="col-md-2 text-left mt-2">
              <p class='mb-1'>Delivery Cost</p>
              <p class='mb-1'>Estimated Delivery</p>
            </div>
            <div class="col-md-8 text-left mt-2">
              <p class='mb-1'>: Rp. {{number_format($shipment->delivery_cost)}}
              <p class='mb-3'>: {{$shipment->estimated_delivery}}</p>
            </div>
          </div>
        </div>
        <!--End Shipping Option-->

        <!-- Message for -->
        <h5 style="text-align: left;margin-left: 7%;" class="font-weight-bold mt-4">Additional Notes to Seller</h5>
        <div class="row justify-content-around mb-5">

          <div class="col-sm-11 text-center ">
            <textarea name="notes" id="notes" cols="96" rows="5" placeholder="Special shipping request or anything you need to know" form="form-id" class="notes" style="
    width: 94%;
"></textarea>
          </div>
        </div>

        @if (session('status'))
        <div class="alert alert-danger">
          {{ session('status') }}
        </div>
        @endif

        @if (session('success_status'))
        <div class="alert alert-success">
          {{ session('success_status') }}
        </div>
        @endif

        <!-- Table voucher -->
        <div class="row">
          <div class="col-sm-12">
            <div class="table-responsive-sm">
              <table class="table mb-0">
                <tr class="top-border">
                  <td class="text-left top-border font-weight-bold">VOUCHERS</td>
                  <td class="text-right top-border"></td>
                  <td class="text-right all-border">Total Product (tax incl.)</td>
                  <td class="text-right top-border down-border">Rp. {{ number_format($totals) }}</td>
                </tr>
                <tr>
                  <td class="text-left border-0 font-weight-normal">Ignore it if you dont have any voucher</td>
                  <td class="text-right border-0"></td>
                  <td class="text-right all-border">Delivery Cost</td>
                  <td class="text-right top-border down-border">Rp. {{number_format($shipment->delivery_cost)}}</td>
                </tr>
                <tr>
                  <form action="{{route('voucher.store.checkout')}}" method="POST">
                    @csrf
                    <td class="text-left border-0">
                      <input type="text" class="form-control notes" name="voucher_code">
                      <input type="hidden" class="form-control" name="grand_total" value="{{$totals}}">
                    </td>
                    <td class="text-center border-0"><button type="submit" class="btn btn-dark" style="
                      margin-right: 10%;
                  "><span class="font-weight-normal">SELECT VOUCHERS</span></button>
                    </td>
                  </form>
                  <td class="text-right all-border">Voucher ({{(session()->get('voucher')['category'])}})</td>
                  @if (session()->has('voucher'))

                  <form action="{{ route('voucher.destroy.checkout') }}" method="POST" style="display: inline;">
                    @csrf
                    @method('delete')
                    <button type="submit" style="font-size: 14px;"> Remove </button>
                  </form>
                  @endif
                  <td class="text-right top-border down-border">Rp.
                    {{number_format(session()->get('voucher')['discount'])}}
                  </td>
                </tr>
                <tr>
                  <td class="text-left border-0 font-weight-normal">Take Advantage of our exclusive offers</td>
                  <td class="text-right border-0"></td>
                  <td class="text-right top-left-right-border font-weight-bold">TOTAL</td>
                  <td class="text-right top-border font-weight-bold">Rp. {{number_format($newTotal)}}</td>
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
  <form action="/payment" method="post" id="form-id">
    @csrf

    <input type="hidden" name="products" value="{{ json_encode($products,TRUE)}}">
    <input type="hidden" name="address" value="{{$address->id}}">
    <input type="hidden" name="shipment" value="{{$shipment->id}}">

    <div class="row justify-content-center mb-3">
      <div class="col-md-5 text-left my-4">
        <a href="/transactions/delivery" name="formsummary" class="btn btn-dark"><i class="fas fa-arrow-circle-left"></i> PREVIOUS</a>
      </div>
      {{-- <form action="/payment" method="post" id="form-id"> --}}
      @csrf
      <div class="col-md-6 text-right my-4">
        <button type="submit" name="formsummary" class="btn btn-dark" style="width: 40%"><i class="fas fa-arrow-circle-right pr-2"></i> PROCEED
          TO PAYMENT</button>
      </div>
    </div>
    <!-- End Button -->
  </form>
</div>



@endsection