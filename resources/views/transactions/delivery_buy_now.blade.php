@extends('layouts.app') @section('title', 'TokoLokal | Delivery') @section('content')

<div class="container pt-2">

    <form method="post" action="/order-summary-buy-now">
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
                                    <option value="{{$address->id}}" selected>{{$address->address}}</option>
                                    {{-- <input type="hidden" wire:model="search"> --}}
                                @endforeach
                            </select>
                        </div>

                        <div class="col-sm-2">
                            <div class="form-row">
                                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">Add Address</button>
                            </div>
                        </div>

                    </div>

                    <div class="row justify-content-center m-3">
                        <div class="col-md-5 bg-light">
                            @if (empty($addresses))
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

            <input type="hidden" value="{{$products->id}}" name="product">

            <button type="submit" name="formsummary">NEXT</button>
    </form>

    <!-- {{-- Address Form --}} -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title " id="exampleModalLabel">Add Address</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                </div>
                <form method="post" action="/delivery/addaddress/buy_now">
                    @csrf
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="recipient_name">Recipient Name</label>
                                <input wire:model="recipient_name" type="text" class="form-control  @error('recipient_name') is-invalid @enderror" id="recipient_name" placeholder="Name" name="recipient_name"> @error('recipient_name')
                                <span class="invalid-feedback">
                                                        <strong> {{$message}}</strong>
                                                        </span> @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="contact_number">Contact Number</label>
                                <input wire:model="contact_number" type="text" class="form-control @error('contact_number') is-invalid @enderror" id="contact_number" placeholder="contact_number" name="contact_number"> @error('contact_number')
                                <div class="invalid-feedback">
                                    <strong> {{$message}}</strong>
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input wire:model="address" type="text" class="form-control @error('address') is-invalid @enderror" id="address" placeholder="1234 Main St" name="address"> @error('contact_number')
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
                                <input wire:model="city" type="text" class="form-control @error('city') is-invalid @enderror" id="city" name="city"> @error('city')
                                <div class="invalid-feedback">
                                    <strong> {{$message}}</strong>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group col-md-3">
                                <label for="province">Province</label>
                                <input wire:model="province" type="text" class="form-control @error('province') is-invalid @enderror" id="province" name="province"> @error('province')
                                <div class="invalid-feedback">
                                    <strong> {{$message}}</strong>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group col-md-3">
                                <label for="post_code">Post Code</label>
                                <input wire:model="post_code" type="text" class="form-control @error('post_code') is-invalid @enderror" id="post_code" name="post_code"> @error('post_code')
                                <div class="invalid-feedback">
                                    <strong> {{$message}}</strong>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group col-md-3">
                                <label for="district">District</label>
                                <input wire:model="district" type="text" class="form-control  @error('district') is-invalid @enderror" id="district" name="district"> @error('district')
                                <div class="invalid-feedback">
                                    <strong> {{$message}}</strong>
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="formaddress">Add New Address</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- {{-- End Address Form --}} -->

    </div>

    @endsection