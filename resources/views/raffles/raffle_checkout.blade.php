@extends('layouts.app')

@section('title', 'TokoLokal |Raffle Delivery')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <form method="post" action="/raffles/summary">
                @csrf
                <!-- Address -->
                <div class="row justify-content-center mb-3 ">
                    <div class="col-md-12 text-center ">
                        <div class="breadcrumb-a flat my-4">
                            <a class="active col-sm-4">DELIVERY</a>
                            <a class="col-sm-4">SUMMARY</a>
                            <a class="col-sm-4">PAYMENT</a>
                        </div>

                        <div class="card shadow-lg">
                            <div class="card-header text-left bg-dark text-white">
                                <strong>
                                    Address
                                </strong>
                            </div>

                            <div class="row justify-content-center m-3">
                                <div class="col-sm-10">

                                </div>
                            </div>

                            <div class="row justify-content-around">
                                <div class="col-sm-10 bg-light card mb-3">
                                    <div class="detail-info-address">
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
                        </div>
                    </div>

                </div>
                <!-- End Address -->

                <!-- Shipping Option-->
                <div class="row justify-content-center mb-3">
                    <div class="col-md-12 text-center ">
                        <div class="card shadow-lg">
                            <div class="card-header text-left bg-dark text-white">
                                <strong>
                                    Shipping Options
                                </strong>
                            </div>

                            <div class="row justify-content-center m-3">
                                <div class="col-sm-12">
                                    <select class="form-control" id="shipment_type" name="shipment_id" required>
                                        <option value="">Select Shipment Type</option>
                                        @foreach($shipments as $shipment)
                                        <option id="shipment-{{$shipment->id}}" value="{{$shipment->id}}" data-shipmethod="{{$shipment->shipment_method}}" data-shipcost="{{$shipment->delivery_cost}}" data-shipestimated="{{$shipment->estimated_delivery}}">{{$shipment->shipment_method}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row justify-content-around">
                                <div class="col-sm-11 bg-light card mb-3">
                                    <div class="detail-info-shipment">
                                        @if (empty($shipments))
                                        <div class="text-left">
                                            Please select the shipment type.
                                        </div>
                                        @else
                                        <div class="info-address text-left">
                                            <div id="details_shipment"></div>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Shipping Option-->

                <!-- Input Hidden -->
                <input type="hidden" value="{{$address->id}}" name="address_id">
                <input type="hidden" value="{{$raffle_user->raffle_id}}" name="raffle_id">
                <!-- End Input Hidden -->

                <!-- Submit Button -->
                <div class="row justify-content-end mb-3">
                    <div class="col-md-12 text-right">
                        <button type="submit" name="formsummary" class="btn btn-dark"><i class="fas fa-arrow-circle-right"></i> NEXT</button>
                    </div>
                </div>
                <!-- EndSubmit Button -->
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        //Address
        $("#address").change(function() {
            //get data detail that already define in select option
            var recName = $("#address-" + this.value).data('name');
            var contactNum = $("#address-" + this.value).data('contact');
            var addressName = $("#address-" + this.value).data('address');
            var addressNote = $("#address-" + this.value).data('addressnote');
            var postCode = $("#address-" + this.value).data('postcode');
            var provinceName = $("#address-" + this.value).data('province');
            var cityName = $("#address-" + this.value).data('city');
            var districtName = $("#address-" + this.value).data('district');

            //if addressnote null
            if (addressNote.length == 0) {
                addressNote = "-";
            }

            //layout for the detail
            $('#details').html(
                "<p class='mb-1 mt-3 text-capitalize'>Recipient Name: " + recName + "</p>" +
                "<p class='mb-1 text-capitalize'>Contact Number: " + contactNum + "</p>" +
                "<p class='mb-1 text-capitalize'>Address: " + addressName + "</p>" +
                "<p class='mb-1 text-capitalize'>Address Note (optional): " + addressNote + "</p>" +
                "<p class='mb-1 text-capitalize'>Post Code: " + postCode + "</p>" +
                "<p class='mb-1 text-capitalize'>Province: " + provinceName + "</p>" +
                "<p class='mb-1 text-capitalize'>City: " + cityName + "</p>" +
                "<p class='mb-3 text-capitalize'>District: " + districtName + "</p>");
        });

        //Shipment
        $("#shipment_type").change(function() {
            //get data detail that already define in select option
            var shipMethod = $("#shipment-" + this.value).data('shipmethod');
            var delivCost = $("#shipment-" + this.value).data('shipcost');
            var estimatedCost = $("#shipment-" + this.value).data('shipestimated');

            if (shipMethod === undefined && delivCost === undefined && estimatedCost === undefined) {
                document.getElementById(details_shipment).innerHTML = "Please select shipment.";
            }

            //layout for the detail
            $('#details_shipment').html(
                "<h4 class='mb-1 mt-3 font-weight-bold'>" + shipMethod + "</h4>" +
                "<p class='mb-1'>Delivery Cost: Rp. " + delivCost.toLocaleString('en') + "</p>" +
                "<p class='mb-3'>Estimated Delivery: " + estimatedCost + "</p>");
        });
    });
</script>


@endsection