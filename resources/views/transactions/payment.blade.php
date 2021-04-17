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

            <div class="btn-group" role="group">
              <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle btn-block" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Select Method
              </button>

              <div class="dropdown-menu btn-block" aria-labelledby="btnGroupDrop1">
                    <button type="button" class="dropdown-item btn btn-primary" value="credit" data-toggle="modal" data-target="#credit">
                      Credit
                    </button>
                    <button type="button" class="dropdown-item btn btn-primary" value="debit" data-toggle="modal" data-target="#debit">
                    Debit
                    </button>
              </div>
            </div>

          </div>
        </div>


{{--Modal Credit Form --}}

<div class="modal fade" id="credit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Debit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
          <form class="m-3" action="/makepayment" method="POST">
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
                    <!-- credit type end-->

                    <div class="form-row">
                      <div class="col-md-12 mb-3">
                        Valid Until <input type="month" class="form-control" id="valid_until" name="valid_until" required>
                      </div>
                    </div>

                    <input type="hidden" name="payment_type" value="credit">
                    <input type="hidden" name="order" value="{{$order->id}}">


                    <div class="row justify-content-between">
                      <div class="col-sm-4">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
                      </div>
                      <div class="col-sm-4">
                        <button type="submit" class="btn btn-primary">SUBMIT</button>
                      </div>
                    </div>

                  </form>

                </div>

              </div>

            </div>

          </div>

      </div>
    </div>
  </div>
</div>

{{--Modal End Credit Form --}}

{{--Modal Debit Form --}}

<div class="modal fade" id="debit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Debit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form class="m-3" action="/makepayment" method="POST">
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
                        <option value="BCA" >BCA</option>
                        <option value="BNI">BNI</option>
                        <option value="MANDIRI">MANDIRI</option>
                        <option value="BRI">BRI</option>
                      </select>
                    </div>

                    <div class="col-md-6 mb-3">
                      <label for="account_number">Account Number</label>
                      <input type="account_number" class="form-control" id="account_number" name="account_number" required>
                    </div>
                  </div>



                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label for="bank_type">Bank Type</label>
                       <select class="form-control" id="bank_type" name="bank_type">
                        <option value="M-Banking" >M-Banking</option>
                        <option value="BRIVA">BRIVA</option>
                        <option value="Virtual Account">Virtual Account</option>
                      </select>
                    </div>
                  </div>

                  <input type="hidden" name="payment_type" value="debit">
                  <input type="hidden" name="order" value="{{$order->id}}">

                  <div class="row justify-content-between">
                    <div class="col-sm-4">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
                    </div>
                    <div class="col-sm-4">
                      <button type="submit" class="btn btn-primary">SUBMIT</button>
                    </div>
                  </div>

                </form>

              </div>

            </div>

          </div>

        </div>

        
      </div>
    </div>
  </div>
</div>

{{--Modal End Debit Form --}}


@endsection