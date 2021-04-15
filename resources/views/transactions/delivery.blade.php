@extends('layouts.app')

@section('title', 'TokoLokal | Delivery')

@section('content')

<div class="container pt-2">

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
                        <select class="form-control" id="payment_type">
                            @foreach($addresses as $address)
                            <option value="{{$address->id}}">{{$address->address}}</option>
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
                        <livewire:order-index></livewire:order-index>
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
                        <select class="form-control" id="payment_type">
                            @foreach($shipments as $shipment)
                            <option value="{{$address->id}}">{{$shipment->shipment_method}}</option>
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
    </div>
    <!--End Shipping Option-->

    <div class="row justify-content-center mb-3 align-right">
        <div class="col-md-8">
        </div>
        <div class="col-md-4">
            <a href="/order-summary" class="btn btn-dark">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                </svg> NEXT
            </a>
        </div>
    </div>
</div>



@endsection