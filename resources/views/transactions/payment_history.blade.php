@extends('layouts.app')

@section('title', 'TokoLokal | Delivery')

@section('content')

<div class="container pt-2">
  <div class="row justify-content-center mb-3 ">


    <h1>Payment History</h1>

    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Date</th>
          <th scope="col">Order-ID</th>
          <!-- <th scope="col">Brand</th> -->
          <th scope="col">Payment Type</th>
          <th scope="col">Status</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      @if ($all_order->count() > 0)

      @foreach ($all_order as $item)

      <tbody>
        <tr>
          <th>{{date('d M Y',strtotime($item->created_at))}}</th>
          <td>{{$item->order_number}}</td>
          @if($item->payment_id === 0)
          <td>have not selected a payment</td>
          @else
          <td>{{$item->payment->payment_type}}</td>
          @endif
          <td>{{$item->status}}</td>
          @if($item->status === 'pending')
          <td>

            <form action="#" method="post" class="d-inline">
              @method('post')
              @csrf
              <button type="submit" class="btn btn-warning">Continue Checkout</button>
            </form>

          </td>
          @else
          <td>
            <a href="brands/{{$item->id}}/detail" class="btn btn-success"><i class="fas fa-edit" style="color:white"></i>Detail Product</a>
          </td>
          @endif
        </tr>
      </tbody>
      @endforeach
      @endif
    </table>


  </div>
</div>

@endsection