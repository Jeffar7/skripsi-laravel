@extends('layouts.app')

@section('title','TokoLokal | Manage Raffle')

@section('content')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="title-home mt-3">Manage Raffle</h1>
            <div class="text-right"><a href="/raffles/create" class="btn btn-primary my-3">Add Raffle</a></div>
            <div class="text-right"><a href="/raffles/check" class="btn btn-primary my-3">Check Raffle</a></div>

            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif

            <table id="dtBasicExample" class="table table-striped table-bordered" style="width:100%">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Item ID</th>
                        <th scope="col">Raffle Name</th>
                        <th scope="col">Image</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Category</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                        <th scope="col">Description</th>
                        <th scope="col">Released Date</th>
                        <th scope="col">Close Date</th>
                        <th scope="col">Actions </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($raffles as $raffle)
                    <tr>
                        <th scope="row">{{$raffle->id}}</th>
                        <td>{{$raffle->rafflename}}</td>
                        <td><img src="{{asset('../storage/images/Raffles/' . $raffle->raffleimage)}}" width="100px;" height="100px;" alt="Image"></td>
                        <td>{{$raffle->brand->name}}</td>
                        <td>{{$raffle->categoryraffle->categoryname}}</td>
                        <td>{{$raffle->rafflequantity}}</td>
                        <td>{{$raffle->raffleprice}}</td>
                        <td>{{$raffle->raffledescription}}</td>
                        <td>{{$raffle->rafflereleasedate}}</td>
                        <td>{{$raffle->raffleclosedate}}</td>
                        <td>
                            <a href="raffles/{{$raffle->id}}/edit" class="badge btn-success"><i class="fas fa-edit" style="color:white"></i></a>

                            <!-- <form action="raffles/{{$raffle->id}}" method="POST" class="d-inline"> -->
                            @method('delete')
                            @csrf
                            <button type="submit" class="badge btn-danger"><i class="fas fa-trash-alt" style="color:white"></i></button>
                            <!-- </form> -->
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- <div class="modal-header">
                            <h5 class="modal-title " id="exampleModalLabel">Add Address</h5>
                        </div> -->
                        <form action="raffles/{{$raffle->id}}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <div class="modal-body">
                                <p>Are you sure you want to delete?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger" name="formaddress">Delete</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

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