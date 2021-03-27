@extends('layouts.app')

@section('title','TokoLokal | Manage Brand')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card ">
                <div class="card-header text-center">
                    <h5>Add Brand</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="/managebrand" >
                        @csrf
                        <div class="form-group ">
                            <label for="name">Brand Name</label>
                            <input type="text" class="form-control" id="name" name="name">
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
                            <label for="owner">Owner</label>
                            <input type="text" class="form-control" id="owner" name="owner">
                        </div>

                        <div class="form-group ">
                            <label for="website">Website</label>
                            <input type="text" class="form-control" id="website" placeholder="" name="website">
                        </div>

                        <div class="form-group">
                            <label for="About">About</label>
                            <textarea class="form-control" id="About" rows="3" placeholder="add brand information here..." name="about"></textarea>
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