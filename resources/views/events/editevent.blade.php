@extends('layouts.app')

@section('title','TokoLokal | Edit Event')

@section('content')
<div class="loader"></div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="title-home mt-3 font-weight-bold">Edit Event</h1>
            <div class="card shadow-lg">
                <div class="card-header text-left bg-dark">
                    <h5 class="text-white">EVENT</h5>
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

                    <form method="POST" action="/events/{{$event->id}}" enctype="multipart/form-data">
                        @method('patch')
                        @csrf

                        <div class="form-group ">
                            <label for="rafflename">Event Name</label>
                            <input type="text" class="form-control" id="rafflename" name="name" value="{{$event->name}}" required>
                        </div>

                        <div class="form-group">
                            <label for="theme">Theme</label>
                            <input type="text" class="form-control" id="theme" name="theme" value="{{$event->theme}}" required>
                        </div>

                        <div class="form-group ">
                            <label for="picture">Picture</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="picture" id="picture" required>
                                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="held_on">Held On</label>
                            <input type="date" class="form-control" id="held_on" name="held_on" value="{{$event->held_on}}" required>
                        </div>

                        <div class="form-group ">
                            <label for="website">Website</label>
                            <input type="text" class="form-control" id="website" placeholder="" name="website" value="{{$event->website}}" required>
                        </div>

                        <div class="form-group ">
                            <label for="capacity">Capacity</label>
                            <input type="number" class="form-control" id="capacity" placeholder="" name="capacity" value="{{$event->capacity}}" required>
                        </div>

                        <div class="form-group ">
                            <label for="about_us">About Us</label>
                            <textarea type="textarea" class="form-control" id="about_us" name="about_us" rows="5" value="" placeholder="add brand information here...">{{$event->about_us}}
                            </textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Edit Event</button>
                        </div>

                    </form>
                </div>
            </div>
            <div class="mt-4"></div>
        </div>
    </div>
</div>

@endsection