@extends('layouts.app') @section('title', 'TokoLokal | Delivery') @section('content')

<div class="container mt-2 mb-5">
    <form method="post" action="/order-summary">
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

                    <div class="row justify-content-center m-3">
                        <div class="col-sm-9">
                            <select class="form-control" id="address" name="address_detail" required>
                                <option value="">Select Address</option>
                                @foreach($addresses as $address)
                                <option id="address-{{$address->id}}" value="{{$address->id}}"
                                    data-name="{{$address->recipient_name}}" data-contact="{{$address->contact_number}}"
                                    data-address="{{$address->address}}" data-addressnote="{{$address->address_note}}"
                                    data-postcode="{{$address->post_code}}" data-province="{{$address->province}}"
                                    data-city="{{$address->city}}" data-district="{{$address->district}}">
                                    {{ $address->address }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-row">
                                <button type="button" class="btn btn-secondary" data-toggle="modal"
                                    data-target="#exampleModal" style="width:100%"><i class="fas fa-plus-circle"></i>
                                    <span class="ml-3">New Address</span></button>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-around">
                        <div class="col-sm-10 bg-light card mb-3" style="border:none">
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
                <div class="card mt-2" style="box-shadow: 4px 4px 4px 4px #888888;">
                    <div class="card-header text-left bg-dark text-white">
                        <img src="{{ asset('../storage/images/Transaction Page/shippingLogo2.png') }}" alt=""
                            style="width: 2%;height: 20px;margin-top: -0.5%;">
                        <strong class="ml-2">
                            Shipping Option
                        </strong>
                    </div>

                    <div class="row justify-content-center m-3">
                        <div class="col-sm-12">
                            <select class="form-control" id="shipment_type" name="shipment" required>
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

                    <div class="row justify-content-around">
                        <div class="col-sm-11 bg-light card mb-3" style="border:none">
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

        <input type="hidden" value="{{ json_encode($products,TRUE)}}" name="products">

        <div class="row justify-content-end mb-3">
            <div class="col-md-12 text-right my-4">
                <button type="submit" name="formsummary" class="btn btn-dark" style="width: 10%"><i class="fas fa-arrow-circle-right pr-2"></i>
                    NEXT</button>
            </div>
        </div>
    </form>

    {{-- Address Form --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content card" style="border-radius: 10px; box-shadow: 1px 2px 10px 4px #575252;">
                <div class="modal-header card-header text-left bg-dark text-white">

                    <h5 class="modal-title " id="exampleModalLabel" style="
                    width: 250px;
                "> <img src="{{ asset('../storage/images/Transaction Page/addressLogo.png') }}" alt=""
                            style="height: 20px;margin-top: -2.5%;margin-right: 4%;">Add Address</h5>
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button> -->
                </div>
                <form action="/delivery/addaddress" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="recipient_name">Recipient Name</label>
                                <input wire:model="recipient_name" type="text"
                                    class="form-control  @error('recipient_name') is-invalid @enderror"
                                    id="recipient_name" placeholder="Name" name="recipient_name">
                                @error('recipient_name')
                                <span class="invalid-feedback">
                                    <strong> {{$message}}</strong>
                                </span>
                                @enderror
                            </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="contact_number">Contact Number</label>
                    <input wire:model="contact_number" type="text"
                        class="form-control @error('contact_number') is-invalid @enderror" id="contact_number"
                        placeholder="Contact Number" name="contact_number">
                    @error('contact_number')
                    <div class="invalid-feedback">
                        <strong> {{$message}}</strong>
                    </div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input wire:model="address" type="text" class="form-control @error('address') is-invalid @enderror"
                    id="address" placeholder="1234 Main St" name="address">
                @error('contact_number')
                <div class="invalid-feedback">
                    <strong> {{$message}}</strong>
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="address_note">Address Note (Optional)</label>
                <input wire:model="address_note" type="text" class="form-control" id="address_note"
                    placeholder="Apartment, studio, or floor" name="address_note">
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="city">City</label>
                    <input wire:model="city" type="text" class="form-control @error('city') is-invalid @enderror"
                        id="city" name="city" placeholder="City">
                    @error('city')
                    <div class="invalid-feedback">
                        <strong> {{$message}}</strong>
                    </div>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="province">Province</label>
                    <input wire:model="province" type="text"
                        class="form-control @error('province') is-invalid @enderror" id="province" name="province"
                        placeholder="Province">
                    @error('province')
                    <div class="invalid-feedback">
                        <strong> {{$message}}</strong>
                    </div>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="post_code">Post Code</label>
                    <input wire:model="post_code" type="text"
                        class="form-control @error('post_code') is-invalid @enderror" id="post_code" name="post_code"
                        placeholder="Post Code">
                    @error('post_code')
                    <div class="invalid-feedback">
                        <strong> {{$message}}</strong>
                    </div>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="district">District</label>
                    <input wire:model="district" type="text"
                        class="form-control  @error('district') is-invalid @enderror" id="district" name="district"
                        placeholder="District">
                    @error('district')
                    <div class="invalid-feedback">
                        <strong> {{$message}}</strong>
                    </div>
                    @enderror
                </div>
            </div>
            <div class="form-row mt-4">
                <div class="form-group col-md-4">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" style="width: 100%">Close</button>
                </div>
                <div class="form-group col-md-8">
                <button type="submit" class="btn btn-primary" name="formaddress" style="width: 100%">Save & Continue</button>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" value="{{ json_encode($products,TRUE)}}" name="products">
    <input type="hidden" value="{{$order->id}}" name="order">
    </form>
</div>
</div>
</div>
{{-- End Address Form --}}

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
                "<div class='row my-3'> <div class='col-sm-1 col-md-2'>" +
                "<p class='mb-1 font-weight-normal'>Recipient Name  </p>" +
                "<p class='mb-1 font-weight-normal'>Contact Number  </p>" +
                "<p class='mb-1 font-weight-normal'>Address         </p>" +
                "<p class='mb-1 font-weight-normal'>Address Note    </p>" + 
                "<p class='mb-1 font-weight-normal'>Post Code       </p>" + 
                "<p class='mb-1 font-weight-normal'>Province        </p>" + 
                "<p class='mb-1 font-weight-normal'>City            </p>" + 
                "<p class='mb-1 font-weight-normal'>District        </p></div>" + 
                "<div class='col-sm-5 offset-sm-2 col-md-10 offset-md-0'>" +
                "<p class='mb-1 font-weight-normal'>: " + recName + "</p>" +
                "<p class='mb-1 font-weight-normal'>: " + contactNum + "</p>" +
                "<p class='mb-1 font-weight-normal'>: " + addressName + "</p>" +
                "<p class='mb-1 font-weight-normal'>: " + addressNote + "</p>" +
                "<p class='mb-1 font-weight-normal'>: " + postCode + "</p>" +
                "<p class='mb-1 font-weight-normal'>: " + provinceName + "</p>" +
                "<p class='mb-1 font-weight-normal'>: " + cityName + "</p>" +
                "<p class='mb-1 font-weight-normal'>: " + districtName + "</p>" +
                "</div></div>"
                );
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
                "<h4 class='my-3 font-weight-bold'>" + shipMethod + "</h4>" +
                "<div class='row'> <div class='col-sm-1 col-md-2'>" +
                "<p class='mb-1 font-weight-normal'>Delivery Cost       </p>" +
                "<p class='mb-1 font-weight-normal'>Estimated Delivery  </p></div>" 
                + "<div class='col-sm-5 offset-sm-2 col-md-10 offset-md-0'>" +
                    "<p class='mb-1 font-weight-normal'>" + ": Rp. " + delivCost.toLocaleString('en') + "</p>"
                    + "<p class='mb-1 font-weight-normal'>: " + estimatedCost + "</p>"
                    + "</div></div>"
                );
        });
    });
</script>

@endsection