@extends('layouts.template')

@section('title','Edit Brand')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card ">
                <div class="card-header text-center">
                    <h5>Edit Brand</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="/brands/{{$brand->id}}">
                        @method('patch')
                        @csrf
                        <div class="form-group ">
                            <label for="name">Brand Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{$brand->name}}">
                            <!-- @error('name')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror -->
                        </div>

                        <div class="form-group ">
                            <label for="picture">Picture</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input @error('picture') is-invalid @enderror" name="picture" id="picture" required value="{{$brand->picture}}">
                                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                            </div>
                            @error('picture')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group ">
                            <label for="owner">Owner</label>
                            <input type="text" class="form-control @error('owner') is-invalid @enderror" id="owner" name="owner" value="{{$brand->owner}}">
                            @error('owner')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group ">
                            <label for="website">Website</label>
                            <input type="text" class="form-control @error('website') is-invalid @enderror" id="website" placeholder="" name="website" value="{{$brand->website}}">
                            @error('website')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                       </div>

                        <div class="form-group">
                            <label for="About">About</label>
                            <textarea class="form-control  @error('website') is-invalid @enderror" id="About" rows="3" placeholder="add brand information here..." name="about"></textarea>
                            @error('about')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
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