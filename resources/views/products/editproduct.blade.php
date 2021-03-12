@extends('layouts.template')

@section('title','Add product')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card ">
                <div class="card-header text-center">
                    <h5>Edit Product</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="/products/{{$product->id}}" enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <div class="form-group ">
                            <label for="name">Item Name</label>
                            <input type="text" class="form-control" id="name" name="productname" value="{{$product->productname}}">
                        </div>

                        <div class="form-group ">
                            <label for="picture">Picture</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="productimage" id="picture" required value="{{$product->productimage}}">
                                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                            </div>
                        </div>


                        <div class="form-group ">
                            <label for="brand">Brand</label>
                            <select class="form-control" name="brandid">
                                @foreach($brands as $brand)
                                <option value="{{$brand->id}}">{{$brand->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group ">
                            <label for="productprice">Price</label>
                            <input type="text" class="form-control" id="productprice" placeholder="" name="productprice" value="{{$product->productprice}}">
                        </div>

                        <div class="form-group ">
                            <label for="productquantity">Quantity</label>
                            <input type="text" class="form-control" id="productquantity" placeholder="" name="productquantity" value="{{$product->productquantity}}">
                        </div>

                        <div class="form-group ">
                            <label for="productquantity">Size</label>
                            <input type="text" class="form-control" id="productquantity" placeholder="" name="productsize" value="{{$product->productsize}}">
                        </div>

                        <div class="form-group">
                            <label for="productdescription">About</label>
                            <textarea class="form-control" id="productdescription" rows="3" placeholder="add product information here..." name="productdescription" value="{{$product->productdescription}}"></textarea>
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Add Brand to Store</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection