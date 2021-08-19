@extends('layouts.app')

@section('title', 'TokoLokal | FAQ - ' .($faq->title))

@section('content')

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

<div class="container mb-4">
    <div class="row justify-content-center">
        @foreach($detailFaqInformations as $index => $detailFaqInformation)
        <div class="col-md-12 mb-2">
            <div class="row border-bottom filter-header">
                <h4 class="my-2 px-2 font-weight-bold col-12" data-toggle="collapse" href="#multiCollapseExample1-{{$index}}" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                    <i class="fas fa-chevron-up my-1 more-less"></i>        
                    {{$detailFaqInformation->question}}
                </h4>
            </div>
            <div class="collapse multi-collapse show" id="multiCollapseExample1-{{ $index }}">
                <div class="mt-1">
                    <p class="mt-3">
                        {{$detailFaqInformation->answer}}
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection