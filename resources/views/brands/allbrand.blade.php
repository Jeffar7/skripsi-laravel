@extends('layouts.app')

@section('title','TokoLokal | Brand')

@section('content')
<div class="container py-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0 bg-transparent">
            <li class="breadcrumb-item"><a href="/" class="text-decoration-none text-dark">Home</a></li>
            <li class="breadcrumb-item active text-bold text-dark" aria-current="page"
                style="color:black;font-weight:bold;">Brand</li>
        </ol>
    </nav>
    <div class="text-center">
        <img src="../storage/images/Brand Page/localpride.png" class="img-fluid p-3" alt="" height="323px"
            width="400px">
    </div>
</div>
<div class="container pb-5">
    <ul class="nav nav-tabs-brand justify-content-start" id="myTab" role="tablist"
        style="margin-left: 30%;margin-right: 30%;">
        <li class="nav-item-brand" role="presentation">
            <a class="nav-link-brand bg-transparent" id="hash-tab" data-toggle="tab" href="#hash" role="tab"
                aria-controls="hash" aria-selected="false">#</a>
        </li>
        <li class="nav-item-brand active" role="presentation">
            <a class="nav-link-brand active bg-transparent" id="alphabeta-tab" data-toggle="tab" href="#alphabeta"
                role="tab" aria-controls="alphabeta" aria-selected="false">A</a>
        </li>
        <li class="nav-item-brand" role="presentation">
            <a class="nav-link-brand bg-transparent" id="alphabetb-tab" data-toggle="tab" href="#alphabetb" role="tab"
                aria-controls="alphabetb" aria-selected="false">B</a>
        </li>
        <li class="nav-item-brand" role="presentation">
            <a class="nav-link-brand bg-transparent" id="alphabetc-tab" data-toggle="tab" href="#alphabetc" role="tab"
                aria-controls="alphabetc" aria-selected="false">C</a>
        </li>
        <li class="nav-item-brand" role="presentation">
            <a class="nav-link-brand bg-transparent" id="alphabetd-tab" data-toggle="tab" href="#alphabetd" role="tab"
                aria-controls="alphabetd" aria-selected="false">D</a>
        </li>
        <li class="nav-item-brand" role="presentation">
            <a class="nav-link-brand bg-transparent" id="alphabete-tab" data-toggle="tab" href="#alphabete" role="tab"
                aria-controls="alphabete" aria-selected="false">E</a>
        </li>
        <li class="nav-item-brand" role="presentation">
            <a class="nav-link-brand bg-transparent" id="alphabetf-tab" data-toggle="tab" href="#alphabetf" role="tab"
                aria-controls="alphabetf" aria-selected="false">F</a>
        </li>
        <li class="nav-item-brand" role="presentation">
            <a class="nav-link-brand bg-transparent" id="alphabetg-tab" data-toggle="tab" href="#alphabetg" role="tab"
                aria-controls="alphabetg" aria-selected="false">G</a>
        </li>
        <li class="nav-item-brand" role="presentation">
            <a class="nav-link-brand bg-transparent" id="alphabeth-tab" data-toggle="tab" href="#alphabeth" role="tab"
                aria-controls="alphabeth" aria-selected="false">H</a>
        </li>
        <li class="nav-item-brand" role="presentation">
            <a class="nav-link-brand bg-transparent" id="alphabeti-tab" data-toggle="tab" href="#alphabeti" role="tab"
                aria-controls="alphabeti" aria-selected="false">I</a>
        </li>
        <li class="nav-item-brand" role="presentation">
            <a class="nav-link-brand bg-transparent" id="alphabetj-tab" data-toggle="tab" href="#alphabetj" role="tab"
                aria-controls="alphabetj" aria-selected="false">J</a>
        </li>
        <li class="nav-item-brand" role="presentation">
            <a class="nav-link-brand bg-transparent" id="alphabetk-tab" data-toggle="tab" href="#alphabetk" role="tab"
                aria-controls="alphabetk" aria-selected="false">K</a>
        </li>
        <li class="nav-item-brand" role="presentation">
            <a class="nav-link-brand bg-transparent" id="alphabetl-tab" data-toggle="tab" href="#alphabetl" role="tab"
                aria-controls="alphabetl" aria-selected="false">L</a>
        </li>
        <li class="nav-item-brand" role="presentation">
            <a class="nav-link-brand bg-transparent" id="alphabetm-tab" data-toggle="tab" href="#alphabetm" role="tab"
                aria-controls="alphabetm" aria-selected="false">M</a>
        </li>
        <li class="nav-item-brand" role="presentation">
            <a class="nav-link-brand bg-transparent" id="alphabetn-tab" data-toggle="tab" href="#alphabetn" role="tab"
                aria-controls="alphabetn" aria-selected="false">N</a>
        </li>
        <li class="nav-item-brand" role="presentation">
            <a class="nav-link-brand bg-transparent" id="alphabeto-tab" data-toggle="tab" href="#alphabeto" role="tab"
                aria-controls="alphabeto" aria-selected="false">O</a>
        </li>
        <li class="nav-item-brand" role="presentation">
            <a class="nav-link-brand bg-transparent" id="alphabetp-tab" data-toggle="tab" href="#alphabetp" role="tab"
                aria-controls="alphabetp" aria-selected="false">P</a>
        </li>
        <li class="nav-item-brand" role="presentation">
            <a class="nav-link-brand bg-transparent" id="alphabetq-tab" data-toggle="tab" href="#alphabetq" role="tab"
                aria-controls="alphabetq" aria-selected="false">Q</a>
        </li>
        <li class="nav-item-brand" role="presentation">
            <a class="nav-link-brand bg-transparent" id="alphabetr-tab" data-toggle="tab" href="#alphabetr" role="tab"
                aria-controls="alphabetr" aria-selected="false">R</a>
        </li>
        <li class="nav-item-brand" role="presentation">
            <a class="nav-link-brand bg-transparent" id="alphabets-tab" data-toggle="tab" href="#alphabets" role="tab"
                aria-controls="alphabets" aria-selected="false">S</a>
        </li>
        <li class="nav-item-brand" role="presentation">
            <a class="nav-link-brand bg-transparent" id="alphabett-tab" data-toggle="tab" href="#alphabett" role="tab"
                aria-controls="alphabett" aria-selected="false">T</a>
        </li>
        <li class="nav-item-brand" role="presentation">
            <a class="nav-link-brand bg-transparent" id="alphabetu-tab" data-toggle="tab" href="#alphabetu" role="tab"
                aria-controls="alphabetu" aria-selected="false">U</a>
        </li>
        <li class="nav-item-brand" role="presentation">
            <a class="nav-link-brand bg-transparent" id="alphabetv-tab" data-toggle="tab" href="#alphabetv" role="tab"
                aria-controls="alphabetv" aria-selected="false">V</a>
        </li>
        <li class="nav-item-brand" role="presentation">
            <a class="nav-link-brand bg-transparent" id="alphabetw-tab" data-toggle="tab" href="#alphabetw" role="tab"
                aria-controls="alphabetw" aria-selected="false">W</a>
        </li>
        <li class="nav-item-brand" role="presentation">
            <a class="nav-link-brand bg-transparent" id="alphabetx-tab" data-toggle="tab" href="#alphabetx" role="tab"
                aria-controls="alphabetx" aria-selected="false">X</a>
        </li>
        <li class="nav-item-brand" role="presentation">
            <a class="nav-link-brand bg-transparent" id="alphabety-tab" data-toggle="tab" href="#alphabety" role="tab"
                aria-controls="alphabety" aria-selected="false">Y</a>
        </li>
        <li class="nav-item-brand" role="presentation">
            <a class="nav-link-brand bg-transparent" id="alphabetz-tab" data-toggle="tab" href="#alphabetz" role="tab"
                aria-controls="alphabetz" aria-selected="false">Z</a>
        </li>
    </ul>
    <div class="mt-4 pl-3 pr-3">
        <div class="tab-content py-3">
            <div class="tab-pane fade" id="hash" role="tabpanel" aria-labelledby="hash-tab">
                <h4>#</h4>
                <div class="row pl-3">
                    @foreach($groups as $letter => $group)
                    @foreach($group as $category)
                    <div class="col-md-3 px-2">
                        <a href="/brands/{{$category->id}}" class="text-decoration-none text-dark">
                            <img src="{{asset('../storage/images/Brands/' . $category->picture)}}" class="rounded-0 brand-pic" alt="...">
                            <p class="text-center pt-2">{{ $category['name'] }}</p>
                        </a>
                    </div>
                    @endforeach
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade show active" id="alphabeta" role="tabpanel" aria-labelledby="alphabeta-tab">
                <h4>A</h4>
                <div class="row pl-3">
                    @foreach($groups as $letter => $group)
                    @foreach($group as $category)
                    @if($letter == 'A')
                    <div class="col-md-3 px-2">
                        <a href="/brands/{{$category->id}}" class="text-decoration-none text-dark">
                            <img src="{{asset('../storage/images/Brands/' . $category->picture)}}" class="rounded-0 brand-pic" alt="...">
                            <p class="text-center pt-2">{{ $category['name'] }}</p>
                        </a>
                    </div>
                    @endif
                    @endforeach
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="alphabetb" role="tabpanel" aria-labelledby="alphabetb-tab">
                <h4>B</h4>
                <div class="row pl-3">
                    @foreach($groups as $letter => $group)
                    @foreach($group as $category)
                    @if($letter == 'B')
                    <div class="col-md-3 px-2">
                        <a href="/brands/{{$category->id}}" class="text-decoration-none text-dark">
                            <img src="{{asset('../storage/images/Brands/' . $category->picture)}}" class="rounded-0 brand-pic" alt="...">
                            <p class="text-center pt-2">{{ $category['name'] }}</p>
                        </a>
                    </div>
                    @endif
                    @endforeach
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="alphabetc" role="tabpanel" aria-labelledby="alphabetc-tab">
                <h4>C</h4>
                <div class="row pl-3">
                    @foreach($groups as $letter => $group)
                    @foreach($group as $category)
                    @if($letter == 'C')
                    <div class="col-md-3 px-2">
                        <a href="/brands/{{$category->id}}" class="text-decoration-none text-dark">
                            <img src="{{asset('../storage/images/Brands/' . $category->picture)}}" class="rounded-0 brand-pic" alt="...">
                            <p class="text-center pt-2">{{ $category['name'] }}</p>
                        </a>
                    </div>
                    @endif
                    @endforeach
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="alphabetd" role="tabpanel" aria-labelledby="alphabetd-tab">
                <h4>D</h4>
                <div class="row pl-3">
                    @foreach($groups as $letter => $group)
                    @foreach($group as $category)
                    @if($letter == 'D')
                    <div class="col-md-3 px-2">
                        <a href="/brands/{{$category->id}}" class="text-decoration-none text-dark">
                            <img src="{{asset('../storage/images/Brands/' . $category->picture)}}" class="rounded-0 brand-pic" alt="...">
                            <p class="text-center pt-2">{{ $category['name'] }}</p>
                        </a>
                    </div>
                    @endif
                    @endforeach
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="alphabete" role="tabpanel" aria-labelledby="alphabete-tab">
                <h4>E</h4>
                <div class="row pl-3">
                    @foreach($groups as $letter => $group)
                    @foreach($group as $category)
                    @if($letter == 'E')
                    <div class="col-md-3 px-2">
                        <a href="/brands/{{$category->id}}" class="text-decoration-none text-dark">
                            <img src="{{asset('../storage/images/Brands/' . $category->picture)}}" class="rounded-0 brand-pic" alt="...">
                            <p class="text-center pt-2">{{ $category['name'] }}</p>
                        </a>
                    </div>
                    @endif
                    @endforeach
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="alphabetf" role="tabpanel" aria-labelledby="alphabetf-tab">
                <h4>F</h4>
                <div class="row pl-3">
                    @foreach($groups as $letter => $group)
                    @foreach($group as $category)
                    @if($letter == 'F')
                    <div class="col-md-3 px-2">
                        <a href="/brands/{{$category->id}}" class="text-decoration-none text-dark">
                            <img src="{{asset('../storage/images/Brands/' . $category->picture)}}" class="rounded-0 brand-pic" alt="...">
                            <p class="text-center pt-2">{{ $category['name'] }}</p>
                        </a>
                    </div>
                    @endif
                    @endforeach
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="alphabetg" role="tabpanel" aria-labelledby="alphabetg-tab">
                <h4>G</h4>
                <div class="row pl-3">
                    @foreach($groups as $letter => $group)
                    @foreach($group as $category)
                    @if($letter == 'G')
                    <div class="col-md-3 px-2">
                        <a href="/brands/{{$category->id}}" class="text-decoration-none text-dark">
                            <img src="{{asset('../storage/images/Brands/' . $category->picture)}}" class="rounded-0 brand-pic" alt="...">
                            <p class="text-center pt-2">{{ $category['name'] }}</p>
                        </a>
                    </div>
                    @endif
                    @endforeach
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="alphabeth" role="tabpanel" aria-labelledby="alphabeth-tab">
                <h4>H</h4>
                <div class="row pl-3">
                    @foreach($groups as $letter => $group)
                    @foreach($group as $category)
                    @if($letter == 'H')
                    <div class="col-md-3 px-2">
                        <a href="/brands/{{$category->id}}" class="text-decoration-none text-dark">
                            <img src="{{asset('../storage/images/Brands/' . $category->picture)}}" class="rounded-0 brand-pic" alt="...">
                            <p class="text-center pt-2">{{ $category['name'] }}</p>
                        </a>
                    </div>
                    @endif
                    @endforeach
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="alphabeti" role="tabpanel" aria-labelledby="alphabeti-tab">
                <h4>I</h4>
                <div class="row pl-3">
                    @foreach($groups as $letter => $group)
                    @foreach($group as $category)
                    @if($letter == 'I')
                    <div class="col-md-3 px-2">
                        <a href="/brands/{{$category->id}}" class="text-decoration-none text-dark">
                            <img src="{{asset('../storage/images/Brands/' . $category->picture)}}" class="rounded-0 brand-pic" alt="...">
                            <p class="text-center pt-2">{{ $category['name'] }}</p>
                        </a>
                    </div>
                    @endif
                    @endforeach
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="alphabetj" role="tabpanel" aria-labelledby="alphabetj-tab">
                <h4>J</h4>
                <div class="row pl-3">
                    @foreach($groups as $letter => $group)
                    @foreach($group as $category)
                    @if($letter == 'J')
                    <div class="col-md-3 px-2">
                        <a href="/brands/{{$category->id}}" class="text-decoration-none text-dark">
                            <img src="{{asset('../storage/images/Brands/' . $category->picture)}}" class="rounded-0 brand-pic" alt="...">
                            <p class="text-center pt-2">{{ $category['name'] }}</p>
                        </a>
                    </div>
                    @endif
                    @endforeach
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="alphabetk" role="tabpanel" aria-labelledby="alphabetk-tab">
                <h4>K</h4>
                <div class="row pl-3">
                    @foreach($groups as $letter => $group)
                    @foreach($group as $category)
                    @if($letter == 'K')
                    <div class="col-md-3 px-2">
                        <a href="/brands/{{$category->id}}" class="text-decoration-none text-dark">
                            <img src="{{asset('../storage/images/Brands/' . $category->picture)}}" class="rounded-0 brand-pic" alt="...">
                            <p class="text-center pt-2">{{ $category['name'] }}</p>
                        </a>
                    </div>
                    @endif
                    @endforeach
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="alphabetl" role="tabpanel" aria-labelledby="alphabetl-tab">
                <h4>L</h4>
                <div class="row pl-3">
                    @foreach($groups as $letter => $group)
                    @foreach($group as $category)
                    @if($letter == 'L')
                    <div class="col-md-3 px-2">
                        <a href="/brands/{{$category->id}}" class="text-decoration-none text-dark">
                            <img src="{{asset('../storage/images/Brands/' . $category->picture)}}" class="rounded-0 brand-pic" alt="...">
                            <p class="text-center pt-2">{{ $category['name'] }}</p>
                        </a>
                    </div>
                    @endif
                    @endforeach
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="alphabetm" role="tabpanel" aria-labelledby="alphabetm-tab">
                <h4>M</h4>
                <div class="row pl-3">
                    @foreach($groups as $letter => $group)
                    @foreach($group as $category)
                    @if($letter == 'M')
                    <div class="col-md-3 px-2">
                        <a href="/brands/{{$category->id}}" class="text-decoration-none text-dark">
                            <img src="{{asset('../storage/images/Brands/' . $category->picture)}}" class="rounded-0 brand-pic" alt="...">
                            <p class="text-center pt-2">{{ $category['name'] }}</p>
                        </a>
                    </div>
                    @endif
                    @endforeach
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="alphabetn" role="tabpanel" aria-labelledby="alphabetn-tab">
                <h4>N</h4>
                <div class="row pl-3">
                    @foreach($groups as $letter => $group)
                    @foreach($group as $category)
                    @if($letter == 'N')
                    <div class="col-md-3 px-2">
                        <a href="/brands/{{$category->id}}" class="text-decoration-none text-dark">
                            <img src="{{asset('../storage/images/Brands/' . $category->picture)}}" class="rounded-0 brand-pic" alt="...">
                            <p class="text-center pt-2">{{ $category['name'] }}</p>
                        </a>
                    </div>
                    @endif
                    @endforeach
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="alphabeto" role="tabpanel" aria-labelledby="alphabeto-tab">
                <h4>O</h4>
                <div class="row pl-3">
                    @foreach($groups as $letter => $group)
                    @foreach($group as $category)
                    @if($letter == 'O')
                    <div class="col-md-3 px-2">
                        <a href="/brands/{{$category->id}}" class="text-decoration-none text-dark">
                            <img src="{{asset('../storage/images/Brands/' . $category->picture)}}" class="rounded-0 brand-pic" alt="...">
                            <p class="text-center pt-2">{{ $category['name'] }}</p>
                        </a>
                    </div>
                    @endif
                    @endforeach
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="alphabetp" role="tabpanel" aria-labelledby="alphabetp-tab">
                <h4>P</h4>
                <div class="row pl-3">
                    @foreach($groups as $letter => $group)
                    @foreach($group as $category)
                    @if($letter == 'P')
                    <div class="col-md-3 px-2">
                        <a href="/brands/{{$category->id}}" class="text-decoration-none text-dark">
                            <img src="{{asset('../storage/images/Brands/' . $category->picture)}}" class="rounded-0 brand-pic" alt="...">
                            <p class="text-center pt-2">{{ $category['name'] }}</p>
                        </a>
                    </div>
                    @endif
                    @endforeach
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="alphabetq" role="tabpanel" aria-labelledby="alphabetq-tab">
                <h4>Q</h4>
                <div class="row pl-3">
                    @foreach($groups as $letter => $group)
                    @foreach($group as $category)
                    @if($letter == 'Q')
                    <div class="col-md-3 px-2">
                        <a href="/brands/{{$category->id}}" class="text-decoration-none text-dark">
                            <img src="{{asset('../storage/images/Brands/' . $category->picture)}}" class="rounded-0 brand-pic" alt="...">
                            <p class="text-center pt-2">{{ $category['name'] }}</p>
                        </a>
                    </div>
                    @endif
                    @endforeach
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="alphabetr" role="tabpanel" aria-labelledby="alphabetr-tab">
                <h4>R</h4>
                <div class="row pl-3">
                    @foreach($groups as $letter => $group)
                    @foreach($group as $category)
                    @if($letter == 'R')
                    <div class="col-md-3 px-2">
                        <a href="/brands/{{$category->id}}" class="text-decoration-none text-dark">
                            <img src="{{asset('../storage/images/Brands/' . $category->picture)}}" class="rounded-0 brand-pic" alt="...">
                            <p class="text-center pt-2">{{ $category['name'] }}</p>
                        </a>
                    </div>
                    @endif
                    @endforeach
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="alphabets" role="tabpanel" aria-labelledby="alphabets-tab">
                <h4>S</h4>
                <div class="row pl-3">
                    @foreach($groups as $letter => $group)
                    @foreach($group as $category)
                    @if($letter == 'S')
                    <div class="col-md-3 px-2">
                        <a href="/brands/{{$category->id}}" class="text-decoration-none text-dark">
                            <img src="{{asset('../storage/images/Brands/' . $category->picture)}}" class="rounded-0 brand-pic" alt="...">
                            <p class="text-center pt-2">{{ $category['name'] }}</p>
                        </a>
                    </div>
                    @endif
                    @endforeach
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="alphabett" role="tabpanel" aria-labelledby="alphabett-tab">
                <h4>T</h4>
                <div class="row pl-3">
                    @foreach($groups as $letter => $group)
                    @foreach($group as $category)
                    @if($letter == 'T')
                    <div class="col-md-3 px-2">
                        <a href="/brands/{{$category->id}}" class="text-decoration-none text-dark">
                            <img src="{{asset('../storage/images/Brands/' . $category->picture)}}" class="rounded-0 brand-pic" alt="...">
                            <p class="text-center pt-2">{{ $category['name'] }}</p>
                        </a>
                    </div>
                    @endif
                    @endforeach
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="alphabetu" role="tabpanel" aria-labelledby="alphabetu-tab">
                <h4>U</h4>
                <div class="row pl-3">
                    @foreach($groups as $letter => $group)
                    @foreach($group as $category)
                    @if($letter == 'U')
                    <div class="col-md-3 px-2">
                        <a href="/brands/{{$category->id}}" class="text-decoration-none text-dark">
                            <img src="{{asset('../storage/images/Brands/' . $category->picture)}}" class="rounded-0 brand-pic" alt="...">
                            <p class="text-center pt-2">{{ $category['name'] }}</p>
                        </a>
                    </div>
                    @endif
                    @endforeach
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="alphabetv" role="tabpanel" aria-labelledby="alphabetv-tab">
                <h4>V</h4>
                <div class="row pl-3">
                    @foreach($groups as $letter => $group)
                    @foreach($group as $category)
                    @if($letter == 'V')
                    <div class="col-md-3 px-2">
                        <a href="/brands/{{$category->id}}" class="text-decoration-none text-dark">
                            <img src="{{asset('../storage/images/Brands/' . $category->picture)}}" class="rounded-0 brand-pic" alt="...">
                            <p class="text-center pt-2">{{ $category['name'] }}</p>
                        </a>
                    </div>
                    @endif
                    @endforeach
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="alphabetw" role="tabpanel" aria-labelledby="alphabetw-tab">
                <h4>W</h4>
                <div class="row pl-3">
                    @foreach($groups as $letter => $group)
                    @foreach($group as $category)
                    @if($letter == 'W')
                    <div class="col-md-3 px-2">
                        <a href="/brands/{{$category->id}}" class="text-decoration-none text-dark">
                            <img src="{{asset('../storage/images/Brands/' . $category->picture)}}" class="rounded-0 brand-pic" alt="...">
                            <p class="text-center pt-2">{{ $category['name'] }}</p>
                        </a>
                    </div>
                    @endif
                    @endforeach
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="alphabetx" role="tabpanel" aria-labelledby="alphabetx-tab">
                <h4>X</h4>
                <div class="row pl-3">
                    @foreach($groups as $letter => $group)
                    @foreach($group as $category)
                    @if($letter == 'X')
                    <div class="col-md-3 px-2">
                        <a href="/brands/{{$category->id}}" class="text-decoration-none text-dark">
                            <img src="{{asset('../storage/images/Brands/' . $category->picture)}}" class="rounded-0 brand-pic" alt="...">
                            <p class="text-center pt-2">{{ $category['name'] }}</p>
                        </a>
                    </div>
                    @endif
                    @endforeach
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="alphabety" role="tabpanel" aria-labelledby="alphabety-tab">
                <h4>Y</h4>
                <div class="row pl-3">
                    @foreach($groups as $letter => $group)
                    @foreach($group as $category)
                    @if($letter == 'Y')
                    <div class="col-md-3 px-2">
                        <a href="/brands/{{$category->id}}" class="text-decoration-none text-dark">
                            <img src="{{asset('../storage/images/Brands/' . $category->picture)}}" class="rounded-0 brand-pic" alt="...">
                            <p class="text-center pt-2">{{ $category['name'] }}</p>
                        </a>
                    </div>
                    @endif
                    @endforeach
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="alphabetz" role="tabpanel" aria-labelledby="alphabetz-tab">
                <h4>Z</h4>
                <div class="row pl-3">
                    @foreach($groups as $letter => $group)
                    @foreach($group as $category)
                    @if($letter == 'Z')
                    <div class="col-md-3 px-2">
                        <a href="/brands/{{$category->id}}" class="text-decoration-none text-dark">
                            <img src="{{asset('../storage/images/Brands/' . $category->picture)}}" class="rounded-0 brand-pic" alt="...">
                            <p class="text-center pt-2">{{ $category['name'] }}</p>
                        </a>
                    </div>
                    @endif
                    @endforeach
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="pb-5"></div>
</div>

@endsection