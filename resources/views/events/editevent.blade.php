@extends('layouts.app')

@section('title','TokoLokal | Edit Event')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card ">
                <div class="card-header text-center">
                    <h5>Edit Event</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="/events/{{$event->id}}" enctype="multipart/form-data">
                        @method('patch')
                        @csrf

                        <div class="form-group ">
                            <label for="rafflename">Event Name</label>
                            <input type="text" class="form-control" id="rafflename" name="name" value="{{$event->name}}">
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
                            <input type="date" class="form-control" id="held_on" name="held_on" value="{{$event->held_on}}">
                        </div>

                        <div class="form-group ">
                            <label for="website">Website</label>
                            <input type="text" class="form-control" id="website" placeholder="" name="website" value="{{$event->website}}">
                        </div>

                        <div class="form-group ">
                            <label for="capacity">Capacity</label>
                            <input type="text" class="form-control" id="capacity" placeholder="" name="capacity" value="{{$event->capacity}}">
                        </div>

                        <div class="form-group ">
                            <label for="about_us">About Us</label>
                            <input type="textarea" class="form-control" id="about_us" placeholder="" name="about_us">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Add Event</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection