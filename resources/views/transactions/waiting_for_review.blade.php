@extends('layouts.app')

@section('title','TokoLokal | Waiting For Review')

@section('content')

<div class="container pt-2">
    <div class="row justify-content-center">
        <div class="col-md-12 mb-4">

            @if ($message = Session::get('status'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif

            <h3 class="font-weight-bold mt-3" style="text-align: left;">Waiting For Review</h3>
            <div class="top-border my-4"></div>
            @if ($all_order->count() > 0)
            <table id="dtBasicExample" class="table table-striped table-bordered" style="width:100%">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" class="text-center">Image</th>
                        <th scope="col" class="text-center">Product</th>
                        <th scope="col" class="text-center">Arrived At</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($all_order as $product)
                    <tr>
                        <td class="text-center font-weight-normal"> <img src="{{asset('../storage/images/Products/' . $product->productimage)}}" width="100px;" height="100px;" alt="Image"></td>
                        <td class="text-center font-weight-normal">{{$product->productname}}</td>
                        <td class="text-center font-weight-normal">{{$product->created_at}}</td>
                        <td class="text-center font-weight-normal">
                            <a href="products/review/{{$product->id}}" class="btn btn-success">Write Review</a>
                        </td>
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