@extends('layouts.app')

@section('title','TokoLokal | Raffle History')

@section('content')

<div class="container pt-2">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="title-home mt-3">Raffle History</h1>

            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif

            @if($raffles->count() > 0)
            <table id="dtBasicExample" class="table table-striped table-bordered" style="width:100%">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Raffle Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Raffle Close Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Message</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($raffles as $raffle)
                    <tr>
                        <td class="text-center font-weight-normal"><img src="{{asset('../storage/images/Raffles/' . $raffle->raffleimage)}}" width="100px;" height="80px;" alt="Image"></td>
                        <td class="text-center font-weight-normal">{{$raffle->rafflename}}</td>
                        <td class="text-center font-weight-normal">Rp. {{$raffle->raffleprice}}</td>
                        <td class="text-center font-weight-normal">{{$raffle->raffleclosedate}}</td>
                        <td class="text-center font-weight-normal">{{$raffle->status}}</td>
                        @if($raffle->status == 'pending')
                        <td class="text-center font-weight-normal">Waiting until raffle closedate</td>
                        @elseif($raffle->status == 'closed')
                        <td class="text-center font-weight-normal">wait for the system to determine the winner</td>
                        @elseif($raffle->status == 'lose')
                        <td class="text-center font-weight-normal">sorry you are not lucky, please choose another raffle product.</td>
                        @else
                        <td class="text-center font-weight-normal">congratulations you can buy this product. click the following <a href="#!">link</a> to continue the transaction</td>
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