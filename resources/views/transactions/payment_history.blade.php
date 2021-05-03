@extends('layouts.app')

@section('title', 'TokoLokal | Delivery')

@section('content')

<div class="container pt-2">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <h1 class="title-home mt-3">Payment History</h1>

      @if ($all_order->count() > 0)
      <table id="dtBasicExample" class="table table-striped table-bordered" style="width:100%">
        <thead class="thead-dark">
          <tr>
            <th scope="col" class="text-center">Date</th>
            <th scope="col" class="text-center">Name</th>
            <th scope="col" class="text-center">Brand</th>
            <th scope="col" class="text-center">Payment Type</th>
            <th scope="col" class="text-center">Status</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($all_order as $item)
          @foreach ($item->product as $product)
          <tr>
            <td class="text-center font-weight-normal">{{date('d M Y',strtotime($item->created_at))}}</td>
            <td class="text-center font-weight-normal">{{$product->productname}}</td>
            <td class="text-center font-weight-normal">{{$product->brand->name}}</td>
            @if($item->payment_id === 0)
            <td class="text-center font-weight-normal">Have not selected any payment.</td>
            @else
            <td class="text-center text-capitalize font-weight-normal">{{$item->payment->payment_type}}</td>
            @endif
            @if($item->status === "pending")
            <td class="text-center text-uppercase text-info">{{$item->status}}</td>
            @elseif($item->status === "completed")
            <td class="text-center text-uppercase text-success">{{$item->status}}</td>
            @else
            <td class="text-center text-uppercase text-danger">{{$item->status}}</td>
            @endif
          </tr>
          @endforeach
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

      <div class="mt-4"></div>
    </div>
  </div>
</div>


<script>
  $(document).ready(function() {
    $('#dtBasicExample').DataTable();
  });
</script>

@endsection