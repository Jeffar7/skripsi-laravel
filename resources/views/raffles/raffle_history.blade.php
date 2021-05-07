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
                        <td class="text-center font-weight-normal" ><img src="{{asset('../storage/images/Raffles/' . $raffle->raffleimage)}}" width="100px;" height="80px;" alt="Image"></td>
                        <td class="text-center font-weight-normal">{{$raffle->rafflename}}</td>
                        <td class="text-center font-weight-normal">Rp. {{$raffle->raffleprice}}</td>
                        <td class="text-center font-weight-normal">{{$raffle->raffleclosedate}}</td>
                        <td class="text-center font-weight-normal">CLOSED</td>
                        <td class="text-center font-weight-normal">Try again next time!</td>
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