@extends('layouts.app')

@section('title', 'TokoLokal | FAQ - ' .($faq->title))

@section('content')

<script>
    function showOrHideContent(x){
        if(x.style.display === "none"){
            x.style.display = "block";
            x.className = "";
        }else{
            x.style.display = "none";
            x.className = "down";
        }
    }
</script>

<div class="container py-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0 bg-transparent">
            <li class="breadcrumb-item"><a href="/" class="text-dark">Home</a></li>
            <li class="breadcrumb-item"><a href="/faq" class="text-dark">FAQ</a></li>
            <li class="breadcrumb-item active text-bold text-dark" aria-current="page"
                style="color:black;font-weight:bold;"></li>
            {{$faq->title}}
        </ol>
    </nav>
</div>

@foreach($detailFaqInformations as $detailFaqInformation)
<div class="container pb-1">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="px-5">
                <div class="row">
                    <h4 class=" mt-1" style="text-transform:capitalize;font-weight:bold">
                        {{$detailFaqInformation->question}}
                    </h4>
                    <span class="drop-down" onclick="showOrHideContent(document.getElementById('showOrHideContent' + {{ $detailFaqInformation->id }}))"><i class="arrow " ></i></span>
                </div>
                <div id="showOrHideContent{{ $detailFaqInformation->id }}">
                    <p class=" mt-3" style="text-transform:capitalize;font-weight:bold">
                        {{$detailFaqInformation->answer}}
                    </p>
                </div>
            </div>
            <hr>
        </div>
    </div>
</div>
@endforeach
@endsection