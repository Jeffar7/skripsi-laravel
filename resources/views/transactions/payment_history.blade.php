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
          <th scope="col">Name</th>
          <th scope="col">Brand</th>
          <th scope="col">Payment Type</th>
          <th scope="col">Status</th>
        </tr>
      </thead>
      @if ($all_order->count() > 0)
      @foreach ($all_order as $item)
      @foreach ($item->product as $product)

      <tbody>
        <tr>
          <th>{{date('d M Y',strtotime($item->created_at))}}</th>
          <td>{{$product->productname}}</td>
          <td>{{$product->brand->name}}</td>
          @if($item->payment_id === 0)
          <td>have not selected a payment</td>
          @else
          <td>{{$item->payment->payment_type}}</td>
          @endif
          <td>{{$item->status}}</td>
        </tr>
      </tbody>

      @endforeach
      @endforeach
      @endif
    </table>


  </div>
</div>

@endsection