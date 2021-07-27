@extends('layouts.app')

@section('title', 'TokoLokal | Payment History')

@section('content')

<div class="container pt-2">
  <div class="row justify-content-center">
    <div class="col-md-12">
      @if ($message = Session::get('status'))
      <div class="alert alert-success alert-block" id="success-alert">
          <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>{{ $message }}</strong>
      </div>
      @endif
      <h3 class="font-weight-bold mt-3" style="text-align: left;">Payment History</h3>
      <div class="top-border my-4"></div>

      @if ($all_order->count() > 0)
      <table id="dtBasicExample" class="table table-striped table-bordered" style="width:100%">
        <thead class="thead-dark">
          <tr>
            <th scope="col" class="text-center">Date</th>
            <th scope="col" class="text-center">Order-ID</th>
            <!-- <th scope="col">Brand</th> -->
            <th scope="col" class="text-center">Payment Type</th>
            <th scope="col" class="text-center">Status</th>
            <th scope="col" class="text-center">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($all_order as $item)
          <tr>
            <td class="text-center font-weight-normal">{{date('d M Y H:i:s',strtotime($item->created_at))}}</td>
            <td class="text-center font-weight-normal">{{$item->order_number}}</td>
            @if($item->payment_id === 0)
            <td class="text-center font-weight-normal">Have not selected a payment.</td>
            @else
            <td class="text-center font-weight-normal text-capitalize">{{$item->payment->payment_type}}</td>
            @endif
            <td class="text-center font-weight-normal text-capitalize">{{$item->status}}</td>
            @if($item->status === 'pending')
            <td class="text-center">
              <a href="payment-history/{{$item->id}}/continue-checkout" class="btn btn-warning">Continue Checkout</a>
            </td>
            @else
            @if(strstr($item->order_number,'-', true) == 'ORD')
            <td class="text-center">
              <a href="payment-history/{{$item->id}}/detail" class="btn btn-success"><i class="fas fa-edit" style="color:white"></i> Detail Product</a>
            </td>
            @else
            <td class="text-center">
              <a href="/raffle/description/{{$item->id}}" class="btn btn-success"><i class="fas fa-edit" style="color:white"></i> Detail Raffle</a>
            </td>
            @endif
            @endif
          </tr>
          @endforeach
        </tbody>
      </table>
      @else
      @error('no_post_result')
      <div class="text-center">
        <img src="images/empty_item.png" alt="" height="200px" width="200px">
        <p class="mb-0">Oops!</p>
        <p>{{ $message }}</p>
      </div>
      @enderror
      @endif

      <div class="mb-5"></div>
    </div>
  </div>
</div>


<script>
  $(document).ready(function() {
    $('#dtBasicExample').DataTable();
  });
</script>

@endsection