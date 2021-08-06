@extends('layouts.app')

@section('title','TokoLokal | Manage Product')

@section('content')
<div class="loader"></div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="title-home mt-3 font-weight-bold">Manage Product</h1>
            <div class="text-right"><a href="/products/create" class="btn btn-primary my-3">Add Product</a></div>

            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif

            <table id="dtBasicExample" class="table table-striped table-bordered" style="width:100%">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Item ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Picture</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Created At</th>
                        <th scope="col"> Actions </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <th scope="row">{{$product->id}}</th>
                        <td>{{$product->productname}}</td>
                        <td>{{$product->category->name}}</td>
                        <td><img src="{{asset('../storage/images/Products/' . $product->productimage)}}" width="100px;" height="100px;" alt="Image"></td>
                        <td>{{$product->brand['name']}}</td>
                        <td>Rp. {{number_format($product->productprice)}}</td>
                        <td>{{$product->productquantity}}</td>
                        <td>{{$product->created_at}}</td>
                        <td>
                            <a href="products/{{$product->id}}/edit" class="badge btn-success"><i class="fas fa-edit" style="color:white"></i></a>
                            <a href="products/{{$product->id}}/delete" class="delete-modal badge btn-danger" data-value="{{ $product->id }}" data-toggle="modal" data-target="#exampleModal{{ $product->id }}"><i class="fas fa-trash-alt" style="color:white"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            @foreach ($products as $product)
            <div class="modal fade" id="exampleModal{{ $product->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-sm">
                    <div class="modal-content" style="box-shadow: 4px 4px 4px 4px #575252;">
                        <form action="/products/{{ $product->id }}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <div class="modal-body">
                                <div class="faq-section-logo">
                                    <img src="http://127.0.0.1:8000/../storage/images/Wish List Page/DeleteLogo.png" class="rounded-0 image-cat" alt="Men Display Picture" width="50px" height="">
                        </div>
                                <h3 class="text-center">Are you sure?</h3>
                                <p class="text-center font-weight-normal mb-0">Do you really want to delete 
                                <br>
                                <span class="font-weight-bold">{{$product->productname}}</span> item?</p> 
                                <p class="text-center font-weight-normal mb-0">This process cannot be undone.</p>
                            </div>
                            <div class="modal-footer justify-content-around pt-0 border-top-0">
                                <button type="button" class="btn btn-secondary modalBtn" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger" name="delete_product" style="width: 40%;">Delete</button>
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
            $('button[name="delete_product"]').val(delete_id);
        });
    });
</script>
@endsection