@extends('layouts.app')

@section('title', 'TokoLokal | Delivery')

@section('content')

<div class="container pt-2">

    <form  method="post" action="/order-summary">
        @csrf
     <!-- Address -->
        <div class="row justify-content-center mb-3 ">
            <div class="col-md-10 text-center ">

                <div class="card shadow-lg">

                    <div class="card-header text-left bg-dark text-white">
                        <strong>
                            Address
                        </strong>
                    </div>

                    <div class="row justify-content-center m-3">


                        <div class="col-sm-8">
                            <select class="form-control" id="payment_type" wire:model="search" name="address_detail">
                                @foreach($addresses as $address)
                                    <option value="{{$address->id}}" selected>{{$address->recipient_name}}</option>
                                    {{-- <input type="hidden" wire:model="search"> --}}
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="col-sm-2">
                            <div class="form-row">
                                <button type="button" class="btn btn-secondary">Add Address</button>
                            </div>
                        </div>
                    </div>


                    <div class="row justify-content-center m-3">
                        <div class="col-md-5 bg-light">
                            @if ($addresses)
                            <div class="text-left">
                                <p>Recipient Name: {{$address->recipient_name}}</p>
                                <p>Contact Number: {{$address->contact_number}}</p>
                                <p>Address: {{$address->address}}</p>
                                <p>Address Note (optional): {{$address->address_note}}</p>
                                <p>Post Code: {{$address->post_code}}</p>
                                <p>Province: {{$address->province}}</p>
                                <p>City: {{$address->city}}</p>
                                <p>District: {{$address->district}}</p> <br>
                            </div>
                            @else
                            <div class="text-left">
                                <p>Recipient Name: </p>
                                <p>Contact Number: </p>
                                <p>Address: </p>
                                <p>Address Note (optional): </p>
                                <p>Post Code: </p>
                                <p>Province: </p>
                                <p>City:</p>
                                <p>District:</p> <br>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- End Address -->
   
        <!-- Shipping Option-->
        <div class="row justify-content-center mb-3">
            <div class="col-md-10 text-center ">
                <div class="card shadow-lg">

                <div class="card-header text-left bg-dark text-white">
                    <strong>
                        Shipping Option
                    </strong>
                </div>

                <div class="row justify-content-center m-3">
                    <div class="col-sm-10">
                        <select class="form-control" id="payment_type" name="shipment">
                            @foreach($shipments as $shipment)
                            <option value="{{$shipment->id}}">{{$shipment->shipment_method}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row justify-content-center m-3">

                    <div class="row">
                        <div class="col">
                            <h4>{{$shipment->shipment_method}}</h4>
                        </div>
                    </div>

                    <div class="col-md-4 bg-light">
                        <div class="text-left">
                            <p>Delivery Cost: {{$shipment->delivery_cost}}</p>
                            <p>Estimated Cost: {{$shipment->estimated_delivery}}</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!--End Shipping Option-->

        <input type="hidden" value="{{$products->id}}" name="products">

        <button type="submit">NEXT</button>
    </form>

</div>

@endsection