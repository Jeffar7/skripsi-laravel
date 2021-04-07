@extends('layouts.app')

@section('title','TokoLokal | Add Product')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card ">
                <div class="card-header text-center">
                    <h5>Add Product</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="/manageproduct" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group ">
                            <label for="name">Item Name</label>
                            <input type="text" class="form-control" id="name" name="productname">
                        </div>

                        <div class="form-group ">
                            <label for="picture">Picture</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="productimage" id="picture" required>
                                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="category">Category</label>
                            <select class="form-control" name="categoryid">
                                @foreach($categories as $category)

                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group ">
                            <label for="brand">Product Gender</label>
                            <select class="form-control" name="gender_id">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
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
                            <input type="text" class="form-control" id="productprice" placeholder="" name="productprice">
                        </div>

                        <div class="form-group ">
                            <label for="productquantity">Quantity</label>
                            <input type="text" class="form-control" id="productquantity" placeholder="" name="productquantity">
                        </div>

                        <div class="form-group ">
                            <label for="productquantity">Size</label>
                            <input type="text" class="form-control" id="productquantity" placeholder="" name="productsize">
                        </div>

                        <div class="form-group">
                            <label for="productdescription">About</label>
                            <textarea class="form-control" id="productdescription" rows="3" placeholder="add product information here..." name="productdescription"></textarea>
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