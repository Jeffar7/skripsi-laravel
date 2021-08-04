@extends('layouts.app')

@section('title', 'TokoLokal |Raffle Delivery')

@section('content')

<div class="container mt-2 mb-5">
    {{-- <div class="row justify-content-center mb-3">
        <div class="col-md-12 text-center"> --}}
    <form method="post" action="/raffles/summary">
        @csrf
        <!-- Address -->
        <div class="row justify-content-center mb-3 ">
            <div class="col-md-12 text-center ">
                <div class="breadcrumb-a flat mt-4 mb-5">
                    <a class="active col-sm-4"><span class="ml-2">DELIVERY</span></a>
                    <a class="col-sm-4"><span class="ml-2">SUMMARY</span></a>
                    <a class="col-sm-4"><span class="ml-2">PAYMENT</span></a>
                </div>

                <div class="card" style="box-shadow: 4px 4px 4px 4px #888888;">
                    <div class="card-header text-left bg-dark text-white">
                        <img src="{{ asset('../storage/images/Transaction Page/addressLogo.png') }}" alt=""
                            style="width: 2%;height: 20px;margin-top: -0.5%;">
                        <strong class="ml-2">
                            Address
                        </strong>
                    </div>


                    <div class="row justify-content-around m-3">
                        <div class="col-sm-11" style="padding: 0">
                            <div class="detail-info-address order-card text-left p-3 my-3">



                                
                                <div class='row p-3 mb-3'>
                                    <div class='col-6 col-md-3 col-lg-2'>
                                        <p class='mb-1 font-weight-normal'>Recipient Name </p>
                                        <p class='mb-1 font-weight-normal'>Contact Number </p>
                                        <p class='mb-1 font-weight-normal'>Address </p>
                                        <p class='mb-1 font-weight-normal'>Address Note </p>
                                        <p class='mb-1 font-weight-normal'>Post Code </p>
                                        <p class='mb-1 font-weight-normal'>Province </p>
                                        <p class='mb-1 font-weight-normal'>City </p>
                                        <p class='mb-1 font-weight-normal'>District </p>
                                        <p class='mb-1 font-weight-normal'>Country </p>
                                    </div>
                                    <div class='col-6 col-md-9 col-lg-10 offset-md-0'>
                                        <p class='mb-1 font-weight-normal'>: {{$address->first_name}} {{$address->last_name}}</p>
                                        <p class='mb-1 font-weight-normal'>: {{$address->phone_number}}</p>
                                        <p class='mb-1 font-weight-normal'>:
                                            {{$address->number_street_address_1}}</p>
                                        <p class='mb-1 font-weight-normal'>:
                                            {{$address->number_street_address_2}}</p>
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
                </div>
            </div>
        </div>


        <!-- End Address -->

        <!-- Shipping Option-->
        <div class="row justify-content-center mt-4 mb-3">
            <div class="col-md-12 text-center ">
                <div class="card" style="box-shadow: 4px 4px 4px 4px #888888;">
                    <div class="card-header text-left bg-dark text-white">
                        <img src="{{ asset('../storage/images/Transaction Page/shippingLogo2.png') }}" alt=""
                            style="width: 2%;height: 20px;margin-top: -0.5%;">
                        <strong class="ml-2">
                            Shipping Options
                        </strong>
                    </div>

                    <div class="row justify-content-center m-3">
                        <div class="col-sm-11" style="padding: 0">
                            <select class="form-control" id="shipment_type" name="shipment_id" required>
                                <option value="">Select Shipment Type</option>
                                @foreach($shipments as $shipment)
                                <option id="shipment-{{$shipment->id}}" value="{{$shipment->id}}"
                                    data-shipmethod="{{$shipment->shipment_method}}"
                                    data-shipcost="{{$shipment->delivery_cost}}"
                                    data-shipestimated="{{$shipment->estimated_delivery}}">
                                    {{$shipment->shipment_method}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row justify-content-around m-3">
                        <div class="col-sm-11" style="padding: 0">
                            <div class="detail-info-shipment order-card text-left">
                                @if (empty($shipments))
                                <div class="">
                                    Please select the shipment type.
                                </div>
                                @else
                                <div class="info-address">
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
            <div class="col-md-12 text-right my-4">
                <button type="submit" name="formsummary" class="btn btn-dark"><i
                        class="fas fa-arrow-circle-right pr-2"></i>NEXT</button>
            </div>
        </div>
        <!-- EndSubmit Button -->
    </form>
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

            //layout for the detail USELESSSSS
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
                "<h4 class='mt-3 font-weight-bold p-3'>" + shipMethod + "</h4>" +
                "<div class='row px-3 pb-3 mb-3'> <div class='col-5 col-md-3 col-lg-2'>" +
                "<p class='mb-1 font-weight-normal'>Delivery Cost       </p>" +
                "<p class='mb-1 font-weight-normal'>Estimated Delivery  </p></div>" 
                + "<div class='col-7 col-md-9 col-lg-10 offset-md-0'>" +
                    "<p class='mb-1 font-weight-normal'>" + ": Rp. " + delivCost.toLocaleString('en') + "</p>"
                    + "<p class='mb-1 font-weight-normal'>: " + estimatedCost + "</p>"
                    + "</div></div>"
                );
        });
    });
</script>


@endsection