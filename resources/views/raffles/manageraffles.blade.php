@extends('layouts.app')

@section('title','TokoLokal | Manage Raffle')

@section('content')
<div class="loader"></div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="title-home mt-3 font-weight-bold">Manage Raffle</h1>
            <div class="text-right"><a href="/raffles/create" class="btn btn-primary my-3">Add Raffle</a></div>

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
                        <th scope="col">Status</th>
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
                        <td>Rp. {{number_format($raffle->raffleprice)}}</td>
                        <td>{{$raffle->raffledescription}}</td>
                        <td>{{$raffle->rafflereleasedate}}</td>
                        <td>{{$raffle->raffleclosedate}}</td>
                        <td>{{$raffle->status}}</td>
                        <td class="text-center">
                            <a href="raffles/{{$raffle->id}}/edit" class="badge btn-success"><i class="fas fa-edit" style="color:white"></i></a>
                            <a href="raffles/{{$raffle->id}}/delete" class="delete-modal badge btn-danger" data-value="{{ $raffle->id }}" data-toggle="modal" data-target="#exampleModal{{ $raffle->id }}"><i class="fas fa-trash-alt" style="color:white"></i></a>
                            <a href="/raffles/check/{{$raffle->id}}" class="badge btn-primary d-inline">Check Raffled</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            @foreach ($raffles as $raffle)
            <div class="modal fade" id="exampleModal{{ $raffle->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-sm">
                    <div class="modal-content shadow-sm">
                        <form action="/raffles/{{ $raffle->id }}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <div class="modal-body">
                                <div class="faq-section-logo">
                                    <img src="http://127.0.0.1:8000/../storage/images/Wish List Page/DeleteLogo.png" class="rounded-0 image-cat" alt="Men Display Picture" width="50px" height="">
                        </div>
                                <h3 class="text-center">Are you sure?</h3>
                                <p class="text-center font-weight-normal mb-0">Do you really want to delete 
                                <br>
                                <span class="font-weight-bold">{{$raffle->rafflename}}</span> item?</p> 
                                <p class="text-center font-weight-normal mb-0">This process cannot be undone.</p>
                            </div>
                            <div class="modal-footer justify-content-around pt-0 border-top-0">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger" name="delete_raffle">Delete</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="mt-4"></div>
        </div>
    </div>
</div>



<script>
    $(document).ready(function() {
        $('#dtBasicExample').DataTable();

        $(document).on("click", ".delete-modal", function (e) {
            var delete_id = $(this).attr('data-value');
            $('button[name="delete_raffle"]').val(delete_id);
        });
    });
</script>
@endsection