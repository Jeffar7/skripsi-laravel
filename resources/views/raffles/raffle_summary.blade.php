@extends('layouts.app')

@section('title', 'TokoLokal |Raffle Delivery')

@section('content')


<div class="container mt-2 mb-5">
    <!-- Summary -->
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
                    <img src="{{ asset('../storage/images/Transaction Page/orderSummaryLogo.png') }}" alt=""
                        style="width: 2%;height: 20px;margin-top: -0.5%;">
                    <strong class="ml-2">
                        Raffle Summary
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
                                        <th scope="col" class="text-center">Price</th>
                                        <th scope="col" class="text-center">Quantity</th>
                                        <th scope="col" class="text-center">Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody class="down-border bg-transparent">
                                    <tr class="top-border">
                                        <td scope="row"><img
                                                src="{{asset('../storage/images/Brands/' . $raffle->brand->picture)}}"
                                                width="100px;" height="100px;" alt="Raffle Summary Image"></td>
                                        <td class="text-center py-4">{{$raffle->brand->name}}</td>
                                        <td class="text-center py-4">{{$raffle->rafflename}}</td>
                                        <td class="text-center py-4">Rp. {{ number_format($raffle->raffleprice)}}</td>
                                        <td class="text-center py-4">{{1}}</td>
                                        <td class="text-center py-4">Rp. {{ number_format($raffle->raffleprice)}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- End Table -->

                <!-- Detail Address -->
                @if (!empty($address))
                <div class="row justify-content-around m-3">
                    <div class="col-sm-10 order-card">
                        <div class="my-3 text-left">
                            <div class="row">
                                <div class="col-5 col-md-3 col-lg-2">
                                    <p class='mb-1 font-weight-normal'>Recipient Name</p>
                                    <p class='mb-1 font-weight-normal'>Contact Number</p>
                                    <p class='mb-1 font-weight-normal'>Address</p>
                                    <p class='mb-1 font-weight-normal'>Address Note</p>
                                    <p class='mb-1 font-weight-normal'>Post Code</p>
                                    <p class='mb-1 font-weight-normal'>Province</p>
                                    <p class='mb-1 font-weight-normal'>City</p>
                                    <p class='mb-1 font-weight-normal'>District</p>
                                    <p class='mb-1 font-weight-normal'>Country</p>
                                </div>
                                <div class="col-7 col-md-9 col-lg-10 offset-md-0">
                                    <p class='mb-1 font-weight-normal'>: {{$address->first_name}}
                                        {{$address->last_name}}
                                        <p class='mb-1 font-weight-normal'>: {{$address->phone_number}}</p>
                                        <p class='mb-1 font-weight-normal'>: {{$address->number_street_address_1}}</p>
                                        <p class='mb-1 font-weight-normal'>: {{$address->number_street_address_2}}</p>
                                        <p class='mb-1 font-weight-normal'>: {{$address->post_code}}</p>
                                        <p class='mb-1 font-weight-normal'>: {{$address->province}}</p>
                                        <p class='mb-1 font-weight-normal'>: {{$address->city}}</p>
                                        <p class='mb-1 font-weight-normal'>: {{$address->district}}</p>
                                        <p class='mb-1 font-weight-normal'>: {{$address->country}}</p>
                                </div>
                            </div>
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
                <div class="row justify-content-around m-3">
                    <div class="col-sm-10 order-card pb-2 mb-3">
                        <div class="text-left">
                            <h4 class='my-3 font-weight-bold'>{{$shipment->shipment_method}}</h4>
                            <div class="row">

                                <div class="col-5 col-md-3 col-lg-2">
                                    <p class='mb-1 font-weight-normal'>Delivery Cost</p>
                                    <p class='mb-1 font-weight-normal'>Estimated Delivery</p>
                                </div>

                                <div class="col-7 col-md-9 col-lg-10 offset-md-0">
                                    <p class='mb-1 font-weight-normal'>: Rp. {{number_format($shipment->delivery_cost)}}
                                        <p class='mb-1 font-weight-normal'>: {{$shipment->estimated_delivery}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <!--End Shipping Option-->

            <!-- Trophy -->
            <div class="row justify-content-center mx-3 mb-5">
                <div class="col-sm-10 order-card py-4">
                    <h4 class="font-weight-bold">RAFFLE WINNER</h4>
                    <img src="{{asset('../storage/images/Raffles/trophy.png')}}" width="100px;" height="100px;"
                        alt="Image">
                </div>
            </div>
            <!-- End Trophy -->

            <!-- Total -->
            <div class="">
                <div class="table-responsive-sm">
                  <table class="table mb-0">
                    <tr class="top-border">
      
                      <td rowspan="4" colspan="2" class="text-left top-border font-weight-bold">
      
                      </td>
                      <td class="text-right top-border"></td>
                      <td class="text-right border-0"></td>
                      <td class="text-right border-0"></td>
                      <td class="text-right border-0"></td>
                      <td class="text-right border-0"></td>
                      <td class="text-right border-0"></td>
                      <td class="text-right all-border">Total Product (tax incl.)</td>
                      <td class="text-right top-border down-border">Rp. {{ number_format($raffle->raffleprice)}}</td>
                    </tr>
      
                    <tr>
      
                      <td class="text-right border-0">
                      </td>
                      <td class="text-right border-0"></td>
                      <td class="text-right border-0"></td>
                      <td class="text-right border-0"></td>
                      <td class="text-right border-0"></td>
                      <td class="text-right border-0"></td>
                      <td class="text-right all-border">Delivery Cost</td>
                      <td class="text-right top-border down-border">Rp. {{ number_format($shipment->delivery_cost)}}</td>
                    </tr>
                    <tr>
                      <td class="text-right border-0"></td>
                      <td class="text-right border-0"></td>
                      <td class="text-right border-0"></td>
                      <td class="text-right border-0"></td>
                      <td class="text-right border-0"></td>
                      <td class="text-right border-0"></td>
                      <td class="text-right top-left-right-border font-weight-bold">TOTAL</td>
                      <td class="text-right top-border font-weight-bold">Rp.
                        {{number_format($raffle->raffleprice + $shipment->delivery_cost)}}</td>
                    </tr>
                  </table>
                </div>
              </div>
        </div>
        <!-- End Total -->
        </div>
    </div>
<!-- End Summary -->

<!-- Button -->

<div class="row justify-content-center mb-3">
    <div class="col-6 text-left my-4">
        <a href="/transactions/delivery_buy_now" name="formsummary" class="btn btn-dark h-100"><i
            class="fas fa-arrow-circle-left"></i> PREVIOUS</a>
      </div>
    <div class="col-6 text-right my-4">
        <a href="/raffles/payment" name="formsummary" class="btn btn-dark"><i class="fas fa-arrow-circle-right"></i>
            PROCEED
            TO PAYMENT</a>
    </div>
</div>
</div>

<!-- End Button -->
</div>

@endsection