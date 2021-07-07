@extends('layouts.app')

@section('title', 'TokoLokal | FAQ')

@section('content')
<img src="{{ asset('../storage/images/FAQ Page/FAQ_Background.png') }}" alt="" style="width: 100%; height: 1000px;">
<div style="margin-left: 2%;margin-right: 2%;">
  <div class="center-faq text-center" style="margin: 1% 0;">
    <h1>Have a Question?</h1>
    <p style="font-size: 18px">If you have any question you can ask below or enter what are you looking for!</p>
    <div class="row justify-content-center">
      <div class="col-md-10" style="margin-top: 2%;">
        <input type="search" name="" id="" class="faq-format" placeholder="Type your search here...">
      </div>
      <div class="col-md-2" style=" margin: 2% 0;">
        <button type="submit" class="btn btn-clock btn-faq">Search</button>
      </div>
    </div>
  </div>

  <div class="" style="margin-top: -30%;">


    <div class="row">
      @foreach ($faqs as $faq)
      
        <div class="ol col-sm-4" style="margin-bottom: 5%">
          <a href="faq/detailfaqinfo/{{$faq->id}}">
          <div class="card-body card-faq">
            <div class="faq-section-logo"><img src="{{ asset('../storage/images/FAQ Page/'.$faq->image) }}" alt=""
                style="width: 35%;"></div>

            <div class="faq-section-title" style="padding: 5% 0;">
              <h5 class="card-title text-center font-weight-bold" style="color: black">{{$faq->title}}</h5>
              <hr>
              <p class="card-text" style="font-size:large; color: black">{{$faq->about}}</p>
            </div>
          </div>
        </a>
        </div>
      
      @endforeach
    </div>

    @endsection