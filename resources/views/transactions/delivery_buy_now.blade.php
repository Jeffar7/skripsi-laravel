@extends('layouts.app')

@section('title', 'TokoLokal | Delivery')

@section('content')

<div class="container pt-2">
    <form method="post" action="/order-summary-buy-now">
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
                        <div class="col-sm-8">
                            <select class="form-control" id="address" name="address_detail" required>
                                <option value="">Select Address</option>
                                @foreach($addresses as $address)
                                <option id="address-{{$address->id}}" value="{{$address->id}}" data-name="{{$address->recipient_name}}" data-contact="{{$address->contact_number}}" data-address="{{$address->address}}" data-addressnote="{{$address->address_note}}" data-postcode="{{$address->post_code}}" data-province="{{$address->province}}" data-city="{{$address->city}}" data-district="{{$address->district}}">{{ $address->address }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-row">
                                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal" style="width:100%"><i class="fas fa-plus-circle"></i> New Address</button>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-around">
                        <div class="col-sm-10 bg-light card mb-3">
                            <div class="detail-info-address">
                                @if (empty($addresses))
                                <div class="text-left">
                                    Please select or add new address.
                                </div>
                                @else
                                <div class="info-address text-left">
                                    <div id="details"></div>
                                </div>
                                @endif
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
                            Shipping Option
                        </strong>
                    </div>

                    <div class="row justify-content-center m-3">
                        <div class="col-sm-12">
                            <select class="form-control" id="shipment_type" name="shipment" required>
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

        <input type="hidden" value="{{$product_id}}" name="product">
        <input type="hidden" value="{{$quantity}}" name="quantity">

        <div class="row justify-content-center mb-3">
            <div class="col-md-12 text-right">
                <button type="submit" name="formsummary" class="btn btn-dark"><i class="fas fa-arrow-circle-right"></i> NEXT</button>
            </div>
        </div>
    </form>

    <!-- {{-- Address Form --}} -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title " id="exampleModalLabel">Add Address</h5>
                </div>
                <form action="/delivery/addaddress/buy_now" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="recipient_name">Recipient Name</label>
                                <input wire:model="recipient_name" type="text" class="form-control  @error('recipient_name') is-invalid @enderror" id="recipient_name" placeholder="Name" name="recipient_name">
                                @error('recipient_name')
                                <span class="invalid-feedback">
                                    <strong> {{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="contact_number">Contact Number</label>
                                <input wire:model="contact_number" type="text" class="form-control @error('contact_number') is-invalid @enderror" id="contact_number" placeholder="Contact Number" name="contact_number">
                                @error('contact_number')
                                <div class="invalid-feedback">
                                    <strong> {{$message}}</strong>
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input wire:model="address" type="text" class="form-control @error('address') is-invalid @enderror" id="address" placeholder="1234 Main St" name="address">
                            @error('contact_number')
                            <div class="invalid-feedback">
                                <strong> {{$message}}</strong>
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="address_note">Address Note (Optional)</label>
                            <input wire:model="address_note" type="text" class="form-control" id="address_note" placeholder="Apartment, studio, or floor" name="address_note">
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="city">City</label>
                                <input wire:model="city" type="text" class="form-control @error('city') is-invalid @enderror" id="city" name="city" placeholder="City">
                                @error('city')
                                <div class="invalid-feedback">
                                    <strong> {{$message}}</strong>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group col-md-3">
                                <label for="province">Province</label>
                                <input wire:model="province" type="text" class="form-control @error('province') is-invalid @enderror" id="province" name="province" placeholder="Province">
                                @error('province')
                                <div class="invalid-feedback">
                                    <strong> {{$message}}</strong>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group col-md-3">
                                <label for="post_code">Post Code</label>
                                <input wire:model="post_code" type="text" class="form-control @error('post_code') is-invalid @enderror" id="post_code" name="post_code" placeholder="Post Code">
                                @error('post_code')
                                <div class="invalid-feedback">
                                    <strong> {{$message}}</strong>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group col-md-3">
                                <label for="district">District</label>
                                <input wire:model="district" type="text" class="form-control  @error('district') is-invalid @enderror" id="district" name="district" placeholder="District">
                                @error('district')
                                <div class="invalid-feedback">
                                    <strong> {{$message}}</strong>
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="formaddress">Save & Continue</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- {{-- End Address Form --}} -->

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