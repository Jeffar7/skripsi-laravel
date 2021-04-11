@extends('layouts.app')

@section('title', 'TokoLokal | Add New Address')

@section('content')

<div class="container">

    <div class="row justify-content-center">
        <div class="card">
            <div class="card-header">
                Add New Address
            </div>
            <div class="card-body">
                <livewire:address-delivery-create></livewire:address-delivery-create>

            </div>


        </div>


    </div>

</div>

@endsection