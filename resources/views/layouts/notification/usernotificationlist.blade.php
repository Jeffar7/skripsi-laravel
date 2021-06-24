@extends('layouts.app')

@section('title','TokoLokal | User Notification Detail')

@section('content')
<div class="container">
    <div class="row pt-4 pb-2">
        <h4 style="font-weight: bold">Notification Center</h4>
    </div>
    <div class="text-right"><a href="/products/create" class="btn my-3"
            style="background: #D40A0A; color: white; width: 8%;"><i class="far fa-trash-alt"
                style="padding-right: 10%;"></i>Delete</a></div>
</div>

<div class="container pb-5">
    <div class="card mt-4 pl-3 pr-3" style="border-radius: 10px; box-shadow: 1px 2px #888888">
        <div class="tab-content py-3" id="myTabContent">
            <div class="tab-pane fade show active mt-3" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="row">  
                    <div class="col-md-4">
                        @foreach($find as $finds)
                        <img src="{{asset('../storage/images/Users/'.$finds->picture)}}"
                            class="rounded img-thumbnail rounded-circle" alt="..." width="200" height="150"
                            style="margin-left: 80px;">
                    </div>
                    <div class="col-md-6">
                        <p href="#">{{$finds->first_name}} (Admin)</p>
                        <p href="#">{{auth()->user()->first_name.' '.auth()->user()->last_name}} has just registered</p>
                        @endforeach
                        
                        <p href="#">{{auth()->user()->created_at->diffForHumans()}}</p>
                    </div>
                    <div class="col-md-2">
                        <i class="fas fa-user-check" style="font-size: 100px;"></i>
                    </div>
                </div>





                {{-- @foreach ($faqs as $faq)
      <div class="ol col-sm-4" style="margin-bottom: 5%">
        <div class="card-body card-faq">
          <div class="faq-section-logo"><img src="{{ asset('../storage/images/FAQ Page/'.$faq->image) }}" alt=""
                style="width: 35%;">
            </div>

            <div class="faq-section-title" style="padding: 5% 0;">
                <h5 class="card-title text-center"><a href="faq/detailfaqinfo/{{$faq->id}}">{{$faq->title}}</a></h5>
                <hr>
                <p class="card-text" style="font-size:large">{{$faq->about}}</p>
            </div>
        </div>

    </div>
    @endforeach --}}

    {{-- </div> --}}
</div>
</div>
</div>
{{-- @endforeach --}}
{{-- @endforeach --}}
{{-- <div class="pb-5"></div> --}}
</div>
@endsection