@extends('layouts.app')

@section('title','TokoLokal | Wish List')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h1 class="text-center mt-3">Wish List</h1>
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif

            <div class="card ">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Picture</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col"> Actions </th>
                        </tr>
                    </thead>
                    @foreach($productwishs as $productwish)
                    <tbody>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td><img src="{{asset('uploads/products/' . $productwish->product->productimage)}}" width="100px;" height="100px;" alt="Image"></td>
                            <td>{{$productwish->product->brand->name}}</td>
                            <td>{{$productwish->product->productname}}</td>
                            <td>{{$productwish->product->productprice}}</td>
                            <td>
                                <a href="#products/{{$productwish->id}}/edit" class="badge btn-danger">Hapus</a>
                                <a href="#products/{{$productwish->id}}/edit" class="badge btn-success">+ Keranjang</a>
                            </td>
                        </tr>
                    </tbody>

                    @endforeach
                </table>

            </div>
        </div>
    </div>
</div>


@endsection