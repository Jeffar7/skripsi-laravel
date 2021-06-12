@extends('layouts.app')

@section('title','TokoLokal | Raffle Payment')

@section('content')

<div class="container pt-2">
    <div class="row justify-content-center mb-3">
        <div class="col-md-12 text-center">
            <div class="breadcrumb-a flat my-4">
                <a class="col-sm-4">DELIVERY</a>
                <a class="col-sm-4">SUMMARY</a>
                <a class="active col-sm-4">PAYMENT</a>
            </div>

            <div class="card shadow-lg">
                <div class="card-header text-left bg-dark text-white">
                    <strong>
                        Payment Overview
                    </strong>
                </div>
            </div>


            <!-- Flash Error Message -->
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <!-- End Flash Error Message -->

            <!-- Selection Debit or Credit -->
            <div class="row justify-content-center m-3">
                <div class="col-sm-12">
                    <select class="form-control div-toggle-payment" data-target=".payment-info">
                        <option value="">Select Payment Type</option>
                        <option value="credit" data-show=".credit" selected>Credit</option>
                        <option value="debit" data-show=".debit">Debit</option>
                    </select>
                </div>
            </div>
            <!-- Selection Debit or Credit -->

            <!-- Detail Debit or Credit -->

            <div class="payment-info">
                <!-- Credit -->
                <div class="credit hide">
                    <form class="m-3 card p-4" action="/raffles/makepayment" method="POST" id="payment-form">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="first_name">First name</label>
                                <input type="text" class="form-control" id="first_name" name="first_name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="last_name">Last name</label>
                                <input type="text" class="form-control" id="last_name" name="last_name" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="card_number">Card Number</label>
                                <input type="number" class="form-control" id="card_number" name="card_number" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="cvv">CVV</label>
                                <input type="number" class="form-control" id="cvv" name="cvv" required>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-12 mb-3">
                                <div class="card-group">
                                    <div class="card">
                                        <a href="">
                                            <img src="{{asset('uploads/payments/visa.png')}}" class="card-img-top p-2" alt="VISA">
                                        </a>
                                        <input type="radio" value="VISA" name="credit_type">
                                    </div>

                                    <div class="card">
                                        <a href="">
                                            <img src="{{asset('uploads/payments/mastercard.png')}}" class="card-img-top p-2" alt="MASTER CARD">
                                        </a>
                                        <input type="radio" value="MasterCard" name="credit_type">
                                    </div>

                                    <div class="card">
                                        <a href="">
                                            <img src="{{asset('uploads/payments/americanexpress.png')}}" class="card-img-top p-2" alt="AMERICAN EXPRESS">
                                        </a>
                                        <input type="radio" value="AmericanExpress" name="credit_type">
                                    </div>

                                    <div class="card">
                                        <a href="">
                                            <img src="{{asset('uploads/payments/discover.png')}}" class="card-img-top p-2" alt="DISCOVER">
                                        </a>
                                        <input type="radio" value="Discover" name="credit_type">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                Valid Until <input type="month" class="form-control" id="valid_until" name="valid_until" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="card-element">Credit Card</label>
                            <div id="card-element">
                                <!-- a Stripe Element will be inserted here. -->
                            </div>

                            <!-- Used to display form errors -->
                            <div id="card-errors" role="alert"></div>
                        </div>

                        <input type="hidden" name="payment_type" value="credit">

                        <div class="row justify-content-center mb-1">
                            <div class="col-md-12 text-right">
                                <button type="submit" class="btn btn-dark">SUBMIT</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- End Credit -->

                <!-- Debit -->
                <div class="debit hide">
                    <form class="m-3 card p-4" action="/raffles/makepayment" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="first_name">First name</label>
                                <input type="text" class="form-control" id="first_name" name="first_name" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="last_name">Last name</label>
                                <input type="text" class="form-control" id="last_name" name="last_name" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="bank_name">Bank Name</label>
                                <select class="form-control" id="bank_name" name="bank_name">
                                    <option value="BCA">BCA</option>
                                    <option value="BNI">BNI</option>
                                    <option value="MANDIRI">MANDIRI</option>
                                    <option value="BRI">BRI</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="account_number">Account Number</label>
                                <input type="number" class="form-control" id="account_number" name="account_number" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="bank_type">Bank Type</label>
                                <select class="form-control" id="bank_type" name="bank_type">
                                    <option value="M-Banking">M-Banking</option>
                                    <option value="BRIVA">BRIVA</option>
                                    <option value="Virtual Account">Virtual Account</option>
                                </select>
                            </div>
                        </div>

                        <input type="hidden" name="payment_type" value="debit">

                        <div class="row justify-content-center mb-1">
                            <div class="col-md-12 text-right">
                                <button type="submit" class="btn btn-dark">SUBMIT</button>
                            </div>
                        </div>

                    </form>
                </div>
                <!-- End Debit -->
            </div>
            <!-- End Detail Debit or Credit -->


        </div>
    </div>
</div>

<script>
    $(document).on('change', '.div-toggle-payment', function() {
        var target = $(this).data('target');
        var show = $("option:selected", this).data('show');
        $(target).children().addClass('hide');
        $(show).removeClass('hide');
    });
    $(document).ready(function() {
        $('.div-toggle-payment').trigger('change');
    });
</script>


@endsection