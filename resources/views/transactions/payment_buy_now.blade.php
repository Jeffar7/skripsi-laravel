@extends('layouts.app')

@section('title','TokoLokal | Payment')

@section('extra-css')

{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
  .spacer {
    margin-bottom: 24px;
  }

  /**
             * The CSS shown here will not be introduced in the Quickstart guide, but shows
             * how you can use CSS to style your Element's container.
             */
  .StripeElement {
    background-color: white;
    padding: 10px 12px;
    border-radius: 4px;
    border: 1px solid #ccd0d2;
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
    -webkit-transition: box-shadow 150ms ease;
    transition: box-shadow 150ms ease;
  }

  .StripeElement--focus {
    box-shadow: 0 1px 3px 0 #cfd7df;
  }

  .StripeElement--invalid {
    border-color: #fa755a;
  }

  .StripeElement--webkit-autofill {
    background-color: #fefde5 !important;
  }

  #card-errors {
    color: #fa755a;
  }
</style>

@endsection

@section('content')
<div class="container mt-2 mb-5">
  <div class="row justify-content-center mb-3">
    <div class="col-md-12 text-center">
      <div class="breadcrumb-a flat mt-4 mb-5">
        <a class="col-sm-4"><span class="ml-2">DELIVERY</span></a>
        <a class="col-sm-4"><span class="ml-2">SUMMARY</span></a>
        <a class="active col-sm-4"><span class="ml-2">PAYMENT</span></a>
      </div>

      @if ($errors->any())
      <div class="alert alert-danger" id="success-alert">
          <button type="button" class="close" data-dismiss="alert">×</button>
          @foreach ($errors->all() as $error)
          <p class="font-weight-bold text-left mb-0">{{ $error }}</p>
          @endforeach
      </div>
      @endif

      <div class="card" style="box-shadow: 4px 4px 4px 4px #888888;">
        <div class="card-header text-left bg-dark text-white">
          <img src="{{ asset('../storage/images/Transaction Page/paymentLogo.png') }}" alt=""
                            style="width: 2%;height: 20px;margin-top: -0.5%;">
          <strong class="ml-2">
            Payment Overview
          </strong>
        </div>

        <div class="row justify-content-center m-3">
          <div class="col-sm-12">
            <select class="form-control div-toggle-payment" data-target=".payment-info" id="select_payment">
              <option value="">Select Payment Type</option>
              <option value="credit" data-show=".credit">Credit</option>
              <option value="debit" data-show=".debit">Debit</option>
            </select>
          </div>
        </div>

        <div class="payment-info">
          <div class="credit hide">
            <form class="m-3 card p-4" action="/makepayment/buy_now" method="POST" id="payment-form">
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

              <div class="form-group">
                <label for="card-element">Credit Card</label>
                <div id="card-element">
                  <!-- a Stripe Element will be inserted here. -->
                </div>

                <!-- Used to display form errors -->
                <div id="card-errors" role="alert"></div>
              </div>

              <input type="hidden" name="payment_type" value="credit">

              <!-- <div class="row justify-content-center mb-1">
                <div class="col-md-12 text-right">
                  <button type="submit" class="btn btn-dark">SUBMIT</button>
                </div>
              </div> -->

            </form>
          </div>

          <div class="debit hide">
            <form class="m-3 card p-4" action="/makepayment/buy_now" method="POST" id="debit_payment">
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
                  <input type="account_number" class="form-control" id="account_number" name="account_number" placeholder="ex: 12345678910" required>
                </div>
              </div>


              <div class="form-row">
                <div class="col-md-12 mb-3">
                  <label for="bank_type">Bank Type</label>
                  <select class="form-control" id="bank_type" name="bank_type">
                    <option value="M-Banking">M-Banking</option>
                    <option value="BRIVA">BRIVA</option>
                    <option value="Virtual Account">Virtual Account</option>
                  </select>
                </div>
              </div>

              <input type="hidden" name="payment_type" value="debit">
            </form>
          </div>
        </div>
      </div>

      <div class="row justify-content-center mt-5">

        <div class="col-6 text-left my-4">
          <a href="{{ url()->previous() }}" name="formsummary" class="btn btn-dark h-100"><i class="fas fa-arrow-circle-left"></i> PREVIOUS</a>
        </div>

        <div class="col-6 text-right my-4">
          <button type="submit" class="btn btn-dark" id="submitBtn">SUBMIT</button>
        </div>
      </div>
  </div>
</div>

<!-- <script>
  (function() {
    $('form > input').keyup(function() {

      var empty = false;
      $('form > input').each(function() {
        if ($(this).val() == '') {
          empty = true;
        }
      });

      if (empty) {
        $('#submitBtn').attr('disabled', 'disabled'); // updated according to http://stackoverflow.com/questions/7637790/how-to-remove-disabled-attribute-with-jquery-ie
      } else {
        $('#submitBtn').removeAttr('disabled'); // updated according to http://stackoverflow.com/questions/7637790/how-to-remove-disabled-attribute-with-jquery-ie
      }
    });
  })()
</script> -->

<script>
  $(document).on('change', '.div-toggle-payment', function() {
    var target = $(this).data('target');
    var show = $("option:selected", this).data('show');
    $(target).children().addClass('hide');
    $(show).removeClass('hide');
  });
  $(document).ready(function() {
    $('.div-toggle-payment').trigger('change');

    $('#submitBtn').attr('disabled', 'disabled');

    $('#select_payment').on('change', function() {
      var option_value = $(this).val();
      if (option_value == 'credit') {
        $('#submitBtn').removeAttr('disabled');
        $("#submitBtn").click(function() {
          $("#payment-form").submit(); // Submit the form
        });
      } else if (option_value == 'debit') {
        $('#submitBtn').removeAttr('disabled');
        $("#submitBtn").click(function() {
          $("#debit_payment").submit(); // Submit the form
        });
      } else {
        $('#submitBtn').attr('disabled', 'disabled');
      }
    });

  });
</script>

{{-- Stripe --}}
<script src="https://js.stripe.com/v3/"></script>

<script>
  $(function() {
    // Create a Stripe client
    var stripe = Stripe('pk_test_51Isn0aBee1LnamoclfRN0rT3bqrpKS0b37p8twt83OsQTiSEvtny5Urs4Lp5veM95PoTUtH23v5aXFhSNrxYrN1600MSlQLtUi');
    // Create an instance of Elements
    var elements = stripe.elements();
    // Custom styling can be passed to options when creating an Element.
    // (Note that this demo uses a wider set of styles than the guide below.)
    var style = {
      base: {
        color: '#32325d',
        lineHeight: '18px',
        fontFamily: '"Raleway", Helvetica, sans-serif',
        fontSmoothing: 'antialiased',
        fontSize: '16px',
        '::placeholder': {
          color: '#aab7c4'
        }
      },
      invalid: {
        color: '#fa755a',
        iconColor: '#fa755a'
      }
    };
    // Create an instance of the card Element
    var card = elements.create('card', {
      style: style
    });
    // Add an instance of the card Element into the `card-element` <div>
    card.mount('#card-element');
    // Handle real-time validation errors from the card Element.
    card.addEventListener('change', function(event) {
      var displayError = document.getElementById('card-errors');
      if (event.error) {
        displayError.textContent = event.error.message;
      } else {
        displayError.textContent = '';
      }
    });
    // Handle form submission
    var form = document.getElementById('payment-form');
    form.addEventListener('submit', function(event) {
      event.preventDefault();
      // var options = {
      //   name: document.getElementById('name_on_card').value,
      // }
      stripe.createToken(card).then(function(result) {
        if (result.error) {
          // Inform the user if there was an error
          var errorElement = document.getElementById('card-errors');
          errorElement.textContent = result.error.message;
        } else {
          // Send the token to your server
          stripeTokenHandler(result.token);
        }
      });
    });

    function stripeTokenHandler(token) {
      // Insert the token ID into the form so it gets submitted to the server
      var form = document.getElementById('payment-form');
      var hiddenInput = document.createElement('input');
      hiddenInput.setAttribute('type', 'hidden');
      hiddenInput.setAttribute('name', 'stripeToken');
      hiddenInput.setAttribute('value', token.id);
      form.appendChild(hiddenInput);
      // Submit the form;
      form.submit();
    }

  });
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

@endsection