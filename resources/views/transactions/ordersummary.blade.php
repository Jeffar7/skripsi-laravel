@extends('layouts.app')

@section('title', 'TokoLokal | Delivery')

@section('content')

<div class="container pt-2">

  <!-- Address -->
  <div class="row justify-content-center mb-3 ">
    <div class="col-md-10 text-center ">

      <div class="card shadow-lg">


        <!-- Title -->
        <div class="card-header text-left bg-dark text-white">
          <strong>
            Order Summary
          </strong>
        </div>
        <!-- Title -->

        <!-- Table -->
        <div class="row justify-content-center m-3">
          <div class="col-sm-10">
            <div class="table-responsive-sm">
              <table class="table">
                <thead class="thead-light">
                  <tr>
                    <th>Thumbnail</th>
                    <th>Brand</th>
                    <th>Product</th>
                    <th>Size</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">A</th>
                    <td>A</td>
                    <td>A</td>
                    <td>A</td>
                    <td>A</td>
                    <td>A</td>
                    <td>A</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

        </div>
        <!-- End Table -->

        <!-- Detail Address -->
        <div class="row justify-content-center m-3">
          <div class="col-md-5 bg-light">
            <div class="text-left">
              <p>Recipient Name:</p>
              <p>Contact Number:</p>
              <p>Address:</p>
              <p>Address Note (optional): </p>
              <p>Post Code: </p>
              <p>Province: </p>
              <p>City: </p>
              <p>District:</p>
            </div>
          </div>
        </div>
        <!--End Detail Address -->

        <!-- Shipping Option-->
        <div class="row justify-content-center mb-3">
          <div class="col-md-10 text-center ">
            <div class="card shadow-lg">

              <div class="row justify-content-center m-3">

                <div class="row">
                  <div class="col">
                    <h4></h4>
                  </div>
                </div>

                <div class="col-md-4 bg-light">
                  <div class="text-left">
                    <p>Delivery Cost: </p>
                    <p>Estimated Cost: </p>
                  </div>
                </div>

              </div>

            </div>
          </div>
        </div>
        <!--End Shipping Option-->

        <div class="row justify-content-center mb-3">
          <div class="col-md-10 text-center ">
            <div class="card shadow-lg">

              <textarea name="notes" id="notes" cols="10" rows="5" placeholder="Special shipping request or anything you need to know"></textarea>
            </div>
          </div>
        </div>

        <span class="border">

          <div class="row">
            <div class="col-md-6">
              <h4>VOUCHERS</h4>
              <p>Ignore it if you dont have any voucher</p>
              <div>
                <input type="text" class="form-control" name="vouchers">
                <button type="submit" class="btn btn-dark">SELECT VOUCHERS</button>
              </div>
              <p>Take Advantage of our exclusive offers
              </p>

            </div>
            <div class="col-md-3">
              <div class="row">
                <p>Total Product (tax incl.)</p>
              </div>
              <div class="row">
                <p>Delivery Cost</p>
              </div>
              <div class="row">
                <p>Total Voucers</p>
              </div>
              <div class="row">
                <p>Total</p>
              </div>
            </div>

            <div class="col-md-3 ">
              <div class="row">
                <p></p>
              </div>
              <div class="row">
                <p></p>
              </div>
              <div class="row">
                <p></p>
              </div>
              <div class="row">
                <p></p>
              </div>
            </div>

          </div>
        </span>

      </div>



    </div>
  </div>
  <!-- End Address -->


  <!-- Button -->
  <div class="row justify-content-center mb-3 align-right">
    <div class="col-md-8">
    </div>
    <div class="col-md-4">
      <a href="/payment" class="btn btn-dark">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
        </svg> NEXT
      </a>
    </div>
  </div>
  <!-- End Button -->

</div>



@endsection