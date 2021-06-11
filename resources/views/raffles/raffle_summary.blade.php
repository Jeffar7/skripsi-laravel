@extends('layouts.app')

@section('title', 'TokoLokal |Raffle Delivery')

@section('content')


<div class="container pt-2">
    <!-- Summary -->
    <div class="row justify-content-center mb-3">
        <div class="col-md-10 text-center">
            <div class="breadcrumb-a flat my-4">
                <a class="col-sm-4">DELIVERY</a>
                <a class="active col-sm-4">SUMMARY</a>
                <a class="col-sm-4">PAYMENT</a>
            </div>
            <div class="card shadow-lg">
                <!-- Title -->
                <div class="card-header text-left bg-dark text-white">
                    <strong>
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
                                    <tr>
                                        <th scope="col" class="text-center">Thumbnail</th>
                                        <th scope="col" class="text-center">Brand</th>
                                        <th scope="col" class="text-center">Product</th>
                                        <th scope="col" class="text-center">Price</th>
                                        <th scope="col" class="text-center">Quantity</th>
                                        <th scope="col" class="text-center">Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-transparent">
                                    <tr>
                                        <th scope="row"><img src="{{asset('../storage/images/Brands/' . $raffle->brand->picture)}}" width="100px;" height="70px;" alt="Image"></th>
                                        <td>{{$raffle->brand->name}}</td>
                                        <td class="text-center">{{$raffle->rafflename}}</td>
                                        <td class="text-center">Rp. {{ number_format($raffle->raffleprice)}}</td>
                                        <td class="text-center">{{1}}</td>
                                        <td class="text-center">Rp. {{ number_format($raffle->raffleprice)}}</td>
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
                            <p class='mb-1 mt-3 text-capitalize'>Recipient Name: {{$address->first_name}}</p>
                            <p class='mb-1 text-capitalize'>Contact Number: {{$address->phone_number}}</p>
                            <p class='mb-1 text-capitalize'>Address: {{$address->number_street_address_1}}</p>
                            <p class='mb-1 text-capitalize'>Address Note (optional): {{$address->number_street_address_2}}</p>
                            <p class='mb-1 text-capitalize'>Post Code: {{$address->post_code}}</p>
                            <p class='mb-1 text-capitalize'>City: {{$address->city}}</p>
                            <p class='mb-3 text-capitalize'>Country: {{$address->country}}</p>
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
                            <h5 class='mb-1 mt-3 font-weight-bold'>{{$shipment->shipment_method}}</h5>
                            <p class='mb-1'>Delivery Cost: Rp. {{ number_format($shipment->delivery_cost)}}</p>
                            <p class='mb-3'>Estimated Delivery: {{$shipment->estimated_delivery}}</p>
                        </div>
                    </div>
                </div>
                <!--End Shipping Option-->

                <!-- Trophy -->
                <div class="row justify-content-center">
                    <div class="col-sm-10 bg-light mb-3">
                        <h4 class="font-weight-bold">RAFFLE WINNER</h4>
                        <img src="{{asset('../storage/images/Raffles/trophy.png')}}" width="100px;" height="100px;" alt="Image">
                    </div>
                </div>
                <!-- End Trophy -->

                <div class="row">
                    <div class="col-sm-12">
                        <div class="table-responsive-sm">
                            <table class="table mb-0">
                                <tr>
                                    <td class="text-right border">Total Product (tax incl.)</td>
                                    <td class="text-right border">Rp. {{ number_format($raffle->raffleprice)}}</td>
                                </tr>
                                <tr>
                                    <td class="text-right border">Delivery Cost</td>
                                    <td class="text-right border">Rp. {{ number_format($shipment->delivery_cost)}}</td>
                                </tr>
                                <tr>
                                    <td class="text-right border font-weight-bold">TOTAL</td>
                                    <td class="text-right border font-weight-bold">Rp. {{number_format($raffle->raffleprice + $shipment->delivery_cost)}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Summary -->

    <!-- Button -->

    <div class="row justify-content-center mb-3">
        <div class="col-md-10 text-right">
            <button type="submit" name="formsummary" class="btn btn-dark"><i class="fas fa-arrow-circle-right"></i> PROCEED
                TO PAYMENT</button>
        </div>
    </div>

    <!-- End Button -->
</div>

@endsection