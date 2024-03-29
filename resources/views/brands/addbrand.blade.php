@extends('layouts.app')

@section('title','TokoLokal | Manage Brand')

@section('content')
<div class="loader"></div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="title-home mt-3 font-weight-bold">Add Brand</h1>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="card shadow-lg">
                <div class="card-header text-left bg-dark">
                    <h5 class="text-white">BRAND</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="/managebrand" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group ">
                            <label for="name">Brand Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>

                        <div class="form-group ">
                            <label for="picture">Picture</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="picture" id="picture" required>
                                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="detail_picture">Detail Picture</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="detail_picture" id="detail_picture" required>
                                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="owner">Owner</label>
                            <input type="text" class="form-control" id="owner" name="owner" required>
                        </div>

                        <div class="form-group ">
                            <label for="website">Website</label>
                            <input type="text" class="form-control" id="website" placeholder="" name="website" required>
                        </div>

                        <div class="form-group">
                            <label for="About">About</label>
                            <textarea class="form-control" id="About" rows="3" placeholder="add brand information here..." name="about" required></textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Add Brand to Store</button>
                        </div>

                    </form>
                </div>
            </div>
            <div class="mt-4"></div>
        </div>
    </div>
</div>

@endsection