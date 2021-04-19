@extends('layouts.app')

@section('title', 'TokoLokal | Delivery')

@section('content')

<div class="container mt-2">
    <div class="row justify-content-center">
        <div class="jumbotron-fluid">

            <div class="col-md-6">
                <ul class="list-group" style="width: 400px;">

                    <select class="form-control">
                        @foreach($addresses as $address)
                        <option value="{{$address->id}}">{{$address->address}}</option>
                        @endforeach
                    </select>
                    <select class="form-control">
                        @foreach($shipments as $shipment)
                        <option value="{{$shipment->id}}">{{$shipment->shipment_method}}</option>
                        @endforeach
                    </select>
                    <select class="form-control">
                        <option value="debit">Debit</option>
                        <option value="credit">Credit</option>
                    </select>

                </ul>

            </div>

        </div>
    </div>

</div>



@endsection