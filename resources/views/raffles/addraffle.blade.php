@extends('layouts.app')

@section('title','TokoLokal | Add Raffle')

@section('content')
<div class="loader"></div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h1 class="title-home mt-3">Add Raffle</h1>
            <div class="card shadow-lg">
                <div class="card-header text-left bg-dark">
                    <h5 class="text-white">RAFFLE</h5>
                </div>
                <div class="card-body">

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form method="POST" action="/manageraffle" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group ">
                            <label for="rafflename">Raffle Name</label>
                            <input type="text" class="form-control" id="rafflename" name="rafflename" required>
                        </div>

                        <div class="form-group ">
                            <label for="raffleimage">Picture</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="raffleimage" id="raffleimage" required>
                                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                            </div>
                        </div>


                        <div class="form-group ">
                            <label for="rafflebrand">Brand</label>
                            <select name="brand_id" class="form-control" required>
                                @foreach($brands as $brand)
                                <option value="{{$brand->id}}">
                                    {{$brand->name}}
                                </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group ">
                            <label for="category">Category</label>
                            <select name="category_id" class="form-control" required>
                                @foreach($categoryraffles as $categoryraffle)
                                <option value="{{$categoryraffle->id}}">
                                    {{$categoryraffle->categoryname}}
                                </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group ">
                            <label for="raffleprice">Price</label>
                            <input type="number" class="form-control" id="raffleprice" placeholder="" name="raffleprice" required>
                        </div>

                        <div class="form-group ">
                            <label for="rafflequantity">Quantity</label>
                            <input type="number" class="form-control" id="rafflequantity" placeholder="" name="rafflequantity" required>
                        </div>

                        <div class="form-group ">
                            <label for="rafflequantity">Quota</label>
                            <input type="number" class="form-control" id="rafflequantity" placeholder="" name="rafflequota" required>
                        </div>

                        <div class="form-group">
                            <label for="rafflereleasedate">Release Date</label>
                            <input type="datetime-local" class="form-control" id="rafflereleasedate" name="rafflereleasedate" required>
                        </div>

                        <div class="form-group">
                            <label for="raffleclosedate">Close Date</label>
                            <input type="datetime-local" class="form-control" id="raffleclosedate" name="raffleclosedate" required>
                        </div>

                        <div class="form-group">
                            <label for="raffledescription">Raffle Description</label>
                            <textarea class="form-control" id="raffledescription" rows="3" placeholder="add product information here..." name="raffledescription"></textarea required> 
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Add Product to Raffle</button>
                        </div>

                    </form>
                </div>
            </div>
            <div class="mt-4"></div>
        </div>
    </div>
</div>

@endsection