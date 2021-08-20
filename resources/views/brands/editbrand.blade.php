@extends('layouts.app')

@section('title','TokoLokal | Edit Brand')

@section('content')
<div class="loader"></div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="title-home mt-3 font-weight-bold">Edit Brand</h1>
            <div class="card shadow-lg">
                <div class="card-header text-left bg-dark">
                    <h5 class="text-white">Brand</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="/brands/{{$brand->id}}" enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <div class="form-group ">
                            <label for="name">Brand Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{$brand->name}}" required>
                            <!-- @error('name')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror -->
                        </div>

                        <div class="form-group ">
                            <label for="picture">Picture</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input @error('picture') is-invalid @enderror" name="picture" id="picture" required value="{{$brand->picture}}">
                                <label class="custom-file-label" for="validatedCustomFile">{{$brand->picture}}</label>
                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                            </div>
                            @error('picture')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group ">
                            <label for="detail_picture">Detail Picture</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input @error('picture') is-invalid @enderror" name="detail_picture" id="detail_picture" required value="{{$brand->detail_picture}}">
                                <label class="custom-file-label" for="validatedCustomFile">{{$brand->detail_picture}}</label>
                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                            </div>
                            @error('picture')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group ">
                            <label for="owner">Owner</label>
                            <input type="text" class="form-control @error('owner') is-invalid @enderror" id="owner" name="owner" value="{{$brand->owner}}" required>
                            @error('owner')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group ">
                            <label for="website">Website</label>
                            <input type="text" class="form-control @error('website') is-invalid @enderror" id="website" placeholder="" name="website" value="{{$brand->website}}" required>
                            @error('website')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="About">About</label>
                            <textarea class="form-control  @error('website') is-invalid @enderror" id="About" rows="3" placeholder="add brand information here..." name="about" value="{{$brand->about}}" required></textarea>
                            @error('about')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Update Brand</button>
                        </div>

                    </form>
                </div>
            </div>
            <div class="mt-4"></div>
        </div>
    </div>
</div>

@endsection