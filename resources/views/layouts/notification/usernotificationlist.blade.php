@extends('layouts.app')

@section('title','TokoLokal | User Notification Detail')

@section('content')
<div class="container">
    <div class="row pt-4 pb-2">
        <h4 style="font-weight: bold">Notification Center</h4>
    </div>

    @if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
    @endif
    
    {{-- <div class="text-right"><a class="btn my-3" data-toggle="modal" data-target="#exampleModal"
            style="background: #D40A0A; color: white; width: 8%;"><i class="far fa-trash-alt"
                style="padding-right: 10%;"></i>Delete</a></div> --}}
</div>

<div class="container pb-5">
    {{-- @if ($notification->count() > 0) --}}
    <div class="card mt-4 pl-3 pr-3" style="border-radius: 10px; box-shadow: 4px 4px 4px 4px #888888;">
        <div class="tab-content py-3" id="myTabContent">
            <div class="tab-pane fade show active mt-3" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="row">
                    <div class="col-md-1">
                        @foreach($find as $finds)
                        <img src="http://127.0.0.1:8000/../storage/images/Users/Amy_Jones.jpg"
                            class="rounded img-thumbnail rounded-circle" alt="..." style="height: 60%;width: 100%;">
                    </div>
                    <div class="col-md-10 mb-3">
                        <p href="#" style="margin: 0; font-size: 12px;">{{$finds->first_name}} (Admin)</p>
                        <p href="#" style="
                        font-size: 20px;
                        margin: 0;
                    ">{{auth()->user()->first_name.' '.auth()->user()->last_name}} has just registered</p>
                        @endforeach

                        <p href="#" style="
                        font-size: 12px;
                        color: #c4c4c4; margin: 0;
                    ">{{auth()->user()->created_at->diffForHumans()}}</p>
                    </div>
                    <div class="col-md-1">
                        <i class="fas fa-user-check" style="font-size: 36px;padding-top: 25%;padding-left: 20%;"></i>
                    </div>
                </div>


                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-sm">
                        <div class="modal-content" style="box-shadow: 4px 4px 4px 4px #575252">
                            {{-- <form action="/notification/delete/{{$notification->id}}" method="POST" class="d-inline">
                            @method('delete')
                        @csrf --}}
                            <div class="modal-body">
                                <div class="faq-section-logo">
                                    <img src="{{ asset('../storage/images/Wish List Page/DeleteLogo.png') }}"
                                        class="rounded-0 image-cat" alt="Men Display Picture" width="50px" height="">
                                </div>
                                <h3 class="text-center" style="
                                    color: #8B8B8B;
                                ">Are you sure?</h3>
                                <p class="text-center font-weight-normal mb-0" style="
                                    color: #8B8B8B;
                                ">Do you really want to delete this notification? This process cannot be undone.</p>
                            </div>
                            <div class="modal-footer justify-content-around pt-0 border-top-0">
                                <button type="button" class="btn btn-secondary modalBtn" data-dismiss="modal" style="
                                    background-color: #C4C4C4;
                                    border: none;
                                    width: 40%;
                                ">Cancel</button>
                                <button type="submit" class="btn btn-danger" name="formaddress" style="
                                    width: 40%;
                                ">Delete</button>
                            </div>
                        {{-- </form> --}}
                        </div>
                    </div>
                </div>


               
</div>
</div>
</div>
</div>
@endsection