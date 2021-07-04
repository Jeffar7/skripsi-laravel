@extends('layouts.app')

@section('title','TokoLokal | Edit Raffle')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="title-home mt-3">Edit Raffle</h1>
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

                    <form method="POST" action="/raffles/{{$raffle->id}}" enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <div class="form-group ">
                            <label for="rafflename">Raffle Name</label>
                            <input type="text" class="form-control" id="rafflename" name="rafflename" value="{{$raffle->rafflename}}">
                        </div>

                        <div class="form-group ">
                            <label for="raffleimage">Picture</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="raffleimage" id="raffleimage" value="{{$raffle->raffleimage}}">
                                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                            </div>
                        </div>


                        <div class="form-group ">
                            <label for="rafflebrand">Brand</label>
                            <select name="brand_id" class="form-control">
                                @foreach($brands as $brand)
                                <option value="{{$brand->id}}">
                                    {{$brand->name}}
                                </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group ">
                            <label for="category">Category</label>
                            <select name="category_id" class="form-control">
                                @foreach($categoryraffles as $categoryraffle)
                                <option value="{{$categoryraffle->id}}">
                                    {{$categoryraffle->categoryname}}
                                </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group ">
                            <label for="raffleprice">Price</label>
                            <input type="number" class="form-control" id="raffleprice" placeholder="" name="raffleprice" value="{{$raffle->raffleprice}}">
                        </div>

                        <div class="form-group ">
                            <label for="rafflequantity">Quantity</label>
                            <input type="number" class="form-control" id="rafflequantity" placeholder="" name="rafflequantity" value="{{$raffle->rafflequantity}}">
                        </div>

                        <div class="form-group ">
                            <label for="rafflequota">Quota</label>
                            <input type="number" class="form-control" id="rafflequota" placeholder="" name="rafflequota" value="{{$raffle->rafflequota}}">
                        </div>

                        <div class="form-group">
                            <label for="rafflereleasedate">Release Date</label>
                            <input type="datetime-local" class="form-control" id="rafflereleasedate" name="rafflereleasedate" value="{{$raffle->rafflereleasedate}}">
                        </div>

                        <div class="form-group">
                            <label for="raffleclosedate">Close Date</label>
                            <input type="datetime-local" class="form-control" id="raffleclosedate" name="raffleclosedate" value="{{$raffle->raffleclosedate}}">
                        </div>


                        <div class="form-group">
                            <label for="raffledescription">Description</label>
                            <textarea class="form-control" id="raffledescription" rows="3" placeholder="add product information here..." name="raffledescription">{{$raffle->raffledescription}}</textarea>
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Update Raffle</button>
                        </div>

                    </form>
                </div>
            </div>
            <div class="mt-4"></div>
        </div>
    </div>
</div>

@endsection