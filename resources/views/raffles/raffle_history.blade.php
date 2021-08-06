@extends('layouts.app')

@section('title','TokoLokal | Raffle History')

@section('content')
<div class="loader"></div>
<div class="container pt-2">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if ($message = Session::get('status'))
            <div class="alert alert-success alert-block" id="success-alert">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif
            <h3 class="font-weight-bold mt-3" style="text-align: left;">Raffle Entries Item</h3>
            <div class="top-border my-4"></div>

            @if($raffles->count() > 0)
            <table id="dtBasicExample" class="table table-striped table-bordered" style="width:100%">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" class="text-center">Image</th>
                        <th scope="col" class="text-center">Raffle Product</th>
                        <th scope="col" class="text-center">Price</th>
                        <th scope="col" class="text-center">Raffle Close Date</th>
                        <th scope="col" class="text-center">Status</th>
                        <th scope="col" class="text-center">Message</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($raffles as $raffle)
                    <tr>
                        <td class="text-center font-weight-normal"><img src="{{asset('../storage/images/Raffles/' . $raffle->raffleimage)}}" width="100px;" height="80px;" alt="Image"></td>
                        <td class="text-center font-weight-normal">{{$raffle->rafflename}}</td>
                        <td class="text-center font-weight-normal">Rp. {{number_format($raffle->raffleprice)}}</td>
                        <td class="text-center font-weight-normal">{{$raffle->raffleclosedate}}</td>
                        <td class="text-center font-weight-normal text-capitalize">{{$raffle->status}}</td>
                        @if($raffle->status == 'running')
                        <td class="text-center font-weight-normal">Waiting until Raffle Close</td>
                        @else
                        @if($raffle->is_win == 'win')
                        @if($raffle->payment_id != 0)
                        <td class="text-center font-weight-normal">
                            Raffle Has Been Paid
                        </td>
                        @else
                        <td class="row text-center font-weight-normal">
                            <div class="col-sm-12">Congratulations you win! Continue</div>
                            <div class="col-sm-12 my-2"><a href="/raffles/checkout/{{$raffle->id}}" type="button" class="btn btn-success">Checkout</a></div>
                        @endif
                        @elseif($raffle->is_win == 'lose')
                        <td class="text-center font-weight-normal">Sorry you are not lucky, please choose another raffle product.</td>
                        @else
                        <td class="text-center font-weight-normal">Wait for the system to determine the winner</td>
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