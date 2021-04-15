@extends('layouts.app')

@section('title','TokoLokal | Delivery')

@section('content')

<div class="container pt-3">
  <div class="row justify-content-center">

    <div class="col-md-8 text-center">

      <div class="card">
        <div class="card-header text-left">
          <strong>
            Payment Overview
          </strong>
        </div>
        <div class="card-body mb-2" style="height: 80px;">

          <div class="form-row">
            <select class="form-control" id="payment_type">
              <option value="credit">Credit</option>
              <option value="debit">Debit</option>
            </select>
          </div>
        </div>


        <form class="m-3">
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
            <!-- <div class="col-md-3 mb-3">
              <label for="validationDefault04">State</label>
              <select class="custom-select" id="validationDefault04" required>
                <option selected disabled value="">Choose...</option>
                <option>...</option>
              </select>
            </div> -->
            <div class="col-md-6 mb-3">
              <label for="cvv">CVV</label>
              <input type="number" class="form-control" id="cvv" name="cvv" required>
            </div>
          </div>

          <!-- credit type -->
          <div class="row">
            <div class="col-sm-12 mb-3">
              <div class="card-group ">
                <div class="card">
                  <a href="">
                    <img src="{{asset('uploads/payments/visa.png')}}" class="card-img-top p-2" alt="VISA">
                  </a>
                </div>
                <div class="card">
                  <a href="">
                    <img src="{{asset('uploads/payments/mastercard.png')}}" class="card-img-top p-2" alt="MASTER CARD">
                  </a>
                </div>

                <div class="card">
                  <a href="">
                    <img src="{{asset('uploads/payments/americanexpress.png')}}" class="card-img-top p-2" alt="AMERICAN EXPRESS">
                  </a>
                </div>
                <div class="card">
                  <a href="">
                    <img src="{{asset('uploads/payments/discover.png')}}" class="card-img-top p-2" alt="DISCOVER">
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- credit type end-->

          <div class="form-row">
            <div class="col-md-12 mb-3">
              Valid Until <input type="month" class="form-control" id="valid_until" name="valid_until" required>
            </div>
          </div>

          <div class="row justify-content-between">
            <div class="col-sm-4">
              <button class="btn btn-dark" type="submit"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                </svg> Previous</button>
            </div>
            <div class="col-sm-4">
              <button class="btn btn-dark" type="submit">Submit</button>
            </div>
          </div>

        </form>

      </div>

    </div>

  </div>

</div>


@endsection