@extends('layouts.app')

@section('title','TokoLokal | Brand')

@section('content')
<div class="container py-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0 bg-transparent">
            <li class="breadcrumb-item"><a href="/" class="text-dark">Home</a></li>
            <li class="breadcrumb-item active text-bold text-dark" aria-current="page" style="color:black;font-weight:bold;">Brand</li>
        </ol>
    </nav>
    <div class="text-center">
        <img src="images/localpride.png" class="img-fluid p-3" alt="" height="323px" width="400px">
    </div>
</div>
<div id="exTab1" class="container pb-5">
    <ul class="nav nav-tabs-brand justify-content-between" id="myTab" role="tablist" style="margin-left: 360px;margin-right: 360px;">
        <li class="nav-item-brand" role="presentation">
            <a class="nav-link-brand bg-transparent" id="profile-tab" data-toggle="tab" href="#1a" role="tab" aria-controls="home"aria-selected="true">#</a>
        </li>
        <li class="nav-item-brand active" role="presentation">
            <a class="nav-link-brand active bg-transparent" id="notification-tab" data-toggle="tab" href="#2a" role="tab" aria-controls="profile" aria-selected="false">A</a>
        </li>
        <li class="nav-item-brand" role="presentation">
            <a class="nav-link-brand bg-transparent" id="notification-tab" data-toggle="tab" href="#3a" role="tab" aria-controls="profile" aria-selected="false">B</a>
        </li>
        <li class="nav-item-brand" role="presentation">
            <a class="nav-link-brand bg-transparent" id="notification-tab" data-toggle="tab" href="#4a" role="tab" aria-controls="profile" aria-selected="false">C</a>
        </li>
        <li class="nav-item-brand" role="presentation">
            <a class="nav-link-brand bg-transparent" id="notification-tab" data-toggle="tab" href="#5a" role="tab" aria-controls="profile" aria-selected="false">D</a>
        </li>
        <li class="nav-item-brand" role="presentation">
            <a class="nav-link-brand bg-transparent" id="notification-tab" data-toggle="tab" href="#6a" role="tab" aria-controls="profile" aria-selected="false">E</a>
        </li>
        <li class="nav-item-brand" role="presentation">
            <a class="nav-link-brand bg-transparent" id="notification-tab" data-toggle="tab" href="#7a" role="tab" aria-controls="profile" aria-selected="false">F</a>
        </li>
        <li class="nav-item-brand" role="presentation">
            <a class="nav-link-brand bg-transparent" id="notification-tab" data-toggle="tab" href="#8a" role="tab" aria-controls="profile" aria-selected="false">G</a>
        </li>
        <li class="nav-item-brand" role="presentation">
            <a class="nav-link-brand bg-transparent" id="notification-tab" data-toggle="tab" href="#9a" role="tab" aria-controls="profile" aria-selected="false">H</a>
        </li>
        <li class="nav-item-brand" role="presentation">
            <a class="nav-link-brand bg-transparent" id="notification-tab" data-toggle="tab" href="#10a" role="tab" aria-controls="profile" aria-selected="false">I</a>
        </li>
        <li class="nav-item-brand" role="presentation">
            <a class="nav-link-brand bg-transparent" id="notification-tab" data-toggle="tab" href="#11a" role="tab" aria-controls="profile" aria-selected="false">J</a>
        </li>
        <li class="nav-item-brand" role="presentation">
            <a class="nav-link-brand bg-transparent" id="notification-tab" data-toggle="tab" href="#12a" role="tab" aria-controls="profile" aria-selected="false">K</a>
        </li>
        <li class="nav-item-brand" role="presentation">
            <a class="nav-link-brand bg-transparent" id="notification-tab" data-toggle="tab" href="#13a" role="tab" aria-controls="profile" aria-selected="false">L</a>
        </li>
        <li class="nav-item-brand" role="presentation">
            <a class="nav-link-brand bg-transparent" id="notification-tab" data-toggle="tab" href="#14a" role="tab" aria-controls="profile" aria-selected="false">M</a>
        </li>
        <li class="nav-item-brand" role="presentation">
            <a class="nav-link-brand bg-transparent" id="notification-tab" data-toggle="tab" href="#15a" role="tab" aria-controls="profile" aria-selected="false">N</a>
        </li>
        <li class="nav-item-brand" role="presentation">
            <a class="nav-link-brand bg-transparent" id="notification-tab" data-toggle="tab" href="#16a" role="tab" aria-controls="profile" aria-selected="false">O</a>
        </li>
        <li class="nav-item-brand" role="presentation">
            <a class="nav-link-brand bg-transparent" id="notification-tab" data-toggle="tab" href="#17a" role="tab" aria-controls="profile" aria-selected="false">P</a>
        </li>
        <li class="nav-item-brand" role="presentation">
            <a class="nav-link-brand bg-transparent" id="notification-tab" data-toggle="tab" href="#18a" role="tab" aria-controls="profile" aria-selected="false">Q</a>
        </li>
        <li class="nav-item-brand" role="presentation">
            <a class="nav-link-brand bg-transparent" id="notification-tab" data-toggle="tab" href="#19a" role="tab" aria-controls="profile" aria-selected="false">R</a>
        </li>
        <li class="nav-item-brand" role="presentation">
            <a class="nav-link-brand bg-transparent" id="notification-tab" data-toggle="tab" href="#20a" role="tab" aria-controls="profile" aria-selected="false">S</a>
        </li>
        <li class="nav-item-brand" role="presentation">
            <a class="nav-link-brand bg-transparent" id="notification-tab" data-toggle="tab" href="#21a" role="tab" aria-controls="profile" aria-selected="false">T</a>
        </li>
        <li class="nav-item-brand" role="presentation">
            <a class="nav-link-brand bg-transparent" id="notification-tab" data-toggle="tab" href="#22a" role="tab" aria-controls="profile" aria-selected="false">U</a>
        </li>
        <li class="nav-item-brand" role="presentation">
            <a class="nav-link-brand bg-transparent" id="notification-tab" data-toggle="tab" href="#23a" role="tab" aria-controls="profile" aria-selected="false">V</a>
        </li>
        <li class="nav-item-brand" role="presentation">
            <a class="nav-link-brand bg-transparent" id="notification-tab" data-toggle="tab" href="#24a" role="tab" aria-controls="profile" aria-selected="false">W</a>
        </li>
        <li class="nav-item-brand" role="presentation">
            <a class="nav-link-brand bg-transparent" id="notification-tab" data-toggle="tab" href="#25a" role="tab" aria-controls="profile" aria-selected="false">X</a>
        </li>
        <li class="nav-item-brand" role="presentation">
            <a class="nav-link-brand bg-transparent" id="notification-tab" data-toggle="tab" href="#26a" role="tab" aria-controls="profile" aria-selected="false">Y</a>
        </li>
        <li class="nav-item-brand" role="presentation">
            <a class="nav-link-brand bg-transparent" id="notification-tab" data-toggle="tab" href="#27a" role="tab" aria-controls="profile" aria-selected="false">Z</a>
        </li>
    </ul>	
    <div class="mt-4 pl-3 pr-3">
        <div class="tab-content py-3">
            <div class="tab-pane fade" id="1a" role="tabpanel">
                <h4>#</h4>
                <div class="row pl-3">
                @foreach($groups as $letter => $group)
                    @foreach($group as $category)
                        @if($letter == '1')
                            <a href="/brands/{{$category->id}}" class="mr-5 text-dark">{{ $category['name'] }}</a>
                        @endif
                    @endforeach
                @endforeach
                </div>
            </div>
            <div class="tab-pane fade show active" id="2a" role="tabpanel">
                <h4>A</h4>
                <div class="row pl-3">
                @foreach($groups as $letter => $group)
                    @foreach($group as $category)
                        @if($letter == 'A')
                            <a href="/brands/{{$category->id}}" class="mr-5 text-dark">{{ $category['name'] }}</a>
                        @endif
                    @endforeach
                @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="3a" role="tabpanel">
                <h4>B</h4>
                <div class="row pl-3">
                @foreach($groups as $letter => $group)
                    @foreach($group as $category)
                        @if($letter == 'B')
                            <a href="/brands/{{$category->id}}" class="mr-5 text-dark">{{ $category['name'] }}</a>
                        @endif
                    @endforeach
                @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="4a" role="tabpanel">
                <h4>C</h4>
                <div class="row pl-3">
                @foreach($groups as $letter => $group)
                    @foreach($group as $category)
                        @if($letter == 'C')
                            <a href="/brands/{{$category->id}}" class="mr-5 text-dark">{{ $category['name'] }}</a>
                        @endif
                    @endforeach
                @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="5a" role="tabpanel">
                <h4>D</h4>
                <div class="row pl-3">
                @foreach($groups as $letter => $group)
                    @foreach($group as $category)
                        @if($letter == 'D')
                            <a href="/brands/{{$category->id}}" class="mr-5 text-dark">{{ $category['name'] }}</a>
                        @endif
                    @endforeach
                @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="6a" role="tabpanel">
                <h4>E</h4>
                <div class="row pl-3">
                @foreach($groups as $letter => $group)
                    @foreach($group as $category)
                        @if($letter == 'E')
                            <a href="/brands/{{$category->id}}" class="mr-5 text-dark">{{ $category['name'] }}</a>
                        @endif
                    @endforeach
                @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="7a" role="tabpanel">
                <h4>F</h4>
                <div class="row pl-3">
                @foreach($groups as $letter => $group)
                    @foreach($group as $category)
                        @if($letter == 'F')
                            <a href="/brands/{{$category->id}}" class="mr-5 text-dark">{{ $category['name'] }}</a>
                        @endif
                    @endforeach
                @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="8a" role="tabpanel">
                <h4>G</h4>
                <div class="row pl-3">
                @foreach($groups as $letter => $group)
                    @foreach($group as $category)
                        @if($letter == 'G')
                            <a href="/brands/{{$category->id}}" class="mr-5 text-dark">{{ $category['name'] }}</a>
                        @endif
                    @endforeach
                @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="9a" role="tabpanel">
                <h4>H</h4>
                <div class="row">
                @foreach($groups as $letter => $group)
                    @foreach($group as $category)
                        @if($letter == 'H')
                            <a href="/brands/{{$category->id}}" class="mr-5 text-dark">{{ $category['name'] }}</a>
                        @endif
                    @endforeach
                @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="10a" role="tabpanel">
                <h4>I</h4>
                <div class="row pl-3">
                @foreach($groups as $letter => $group)
                    @foreach($group as $category)
                        @if($letter == 'I')
                            <a href="/brands/{{$category->id}}" class="mr-5 text-dark">{{ $category['name'] }}</a>
                        @endif
                    @endforeach
                @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="11a" role="tabpanel">
                <h4>J</h4>
                <div class="row pl-3">
                @foreach($groups as $letter => $group)
                    @foreach($group as $category)
                        @if($letter == 'J')
                            <a href="/brands/{{$category->id}}" class="mr-5 text-dark">{{ $category['name'] }}</a>
                        @endif
                    @endforeach
                @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="12a" role="tabpanel">
                <h4>K</h4>
                <div class="row pl-3">
                @foreach($groups as $letter => $group)
                    @foreach($group as $category)
                        @if($letter == 'K')
                            <a href="/brands/{{$category->id}}" class="mr-5 text-dark">{{ $category['name'] }}</a>
                        @endif
                    @endforeach
                @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="13a" role="tabpanel">
                <h4>L</h4>
                <div class="row pl-3">
                @foreach($groups as $letter => $group)
                    @foreach($group as $category)
                        @if($letter == 'L')
                            <a href="/brands/{{$category->id}}" class="mr-5 text-dark">{{ $category['name'] }}</a>
                        @endif
                    @endforeach
                @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="14a" role="tabpanel">
                <h4>M</h4>
                <div class="row pl-3">
                @foreach($groups as $letter => $group)
                    @foreach($group as $category)
                        @if($letter == 'M')
                            <a href="/brands/{{$category->id}}" class="mr-5 text-dark">{{ $category['name'] }}</a>
                        @endif
                    @endforeach
                @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="15a" role="tabpanel">
                <h4>N</h4>
                <div class="row pl-3">
                @foreach($groups as $letter => $group)
                    @foreach($group as $category)
                        @if($letter == 'N')
                            <a href="/brands/{{$category->id}}" class="mr-5 text-dark">{{ $category['name'] }}</a>
                        @endif
                    @endforeach
                @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="16a" role="tabpanel">
                <h4>O</h4>
                <div class="row pl-3">
                @foreach($groups as $letter => $group)
                    @foreach($group as $category)
                        @if($letter == 'O')
                            <a href="/brands/{{$category->id}}" class="mr-5 text-dark">{{ $category['name'] }}</a>
                        @endif
                    @endforeach
                @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="17a" role="tabpanel">
                <h4>P</h4>
                <div class="row pl-3">
                @foreach($groups as $letter => $group)
                    @foreach($group as $category)
                        @if($letter == 'P')
                            <a href="/brands/{{$category->id}}" class="mr-5 text-dark">{{ $category['name'] }}</a>
                        @endif
                    @endforeach
                @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="18a" role="tabpanel">
                <h4>Q</h4>
                <div class="row pl-3">
                @foreach($groups as $letter => $group)
                    @foreach($group as $category)
                        @if($letter == 'Q')
                            <a href="/brands/{{$category->id}}" class="mr-5 text-dark">{{ $category['name'] }}</a>
                        @endif
                    @endforeach
                @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="19a" role="tabpanel">
                <h4>R</h4>
                <div class="row pl-3">
                @foreach($groups as $letter => $group)
                    @foreach($group as $category)
                        @if($letter == 'R')
                            <a href="/brands/{{$category->id}}" class="mr-5 text-dark">{{ $category['name'] }}</a>
                        @endif
                    @endforeach
                @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="20a" role="tabpanel">
                <h4>S</h4>
                <div class="row pl-3">
                @foreach($groups as $letter => $group)
                    @foreach($group as $category)
                        @if($letter == 'S')
                            <a href="/brands/{{$category->id}}" class="mr-5 text-dark">{{ $category['name'] }}</a>
                        @endif
                    @endforeach
                @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="21a" role="tabpanel">
                <h4>T</h4>
                <div class="row pl-3">
                @foreach($groups as $letter => $group)
                    @foreach($group as $category)
                        @if($letter == 'T')
                            <a href="/brands/{{$category->id}}" class="mr-5 text-dark">{{ $category['name'] }}</a>
                        @endif
                    @endforeach
                @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="22a" role="tabpanel">
                <h4>U</h4>
                <div class="row pl-3">
                @foreach($groups as $letter => $group)
                    @foreach($group as $category)
                        @if($letter == 'U')
                            <a href="/brands/{{$category->id}}" class="mr-5 text-dark">{{ $category['name'] }}</a>
                        @endif
                    @endforeach
                @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="23a" role="tabpanel">
                <h4>V</h4>
                <div class="row pl-3">
                @foreach($groups as $letter => $group)
                    @foreach($group as $category)
                        @if($letter == 'V')
                            <a href="/brands/{{$category->id}}" class="mr-5 text-dark">{{ $category['name'] }}</a>
                        @endif
                    @endforeach
                @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="24a" role="tabpanel">
                <h4>W</h4>
                <div class="row pl-3">
                @foreach($groups as $letter => $group)
                    @foreach($group as $category)
                        @if($letter == 'W')
                            <a href="/brands/{{$category->id}}" class="mr-5 text-dark">{{ $category['name'] }}</a>
                        @endif
                    @endforeach
                @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="25a" role="tabpanel">
                <h4>X</h4>
                <div class="row pl-3">
                @foreach($groups as $letter => $group)
                    @foreach($group as $category)
                        @if($letter == 'X')
                            <a href="/brands/{{$category->id}}" class="mr-5 text-dark">{{ $category['name'] }}</a>
                        @endif
                    @endforeach
                @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="26a" role="tabpanel">
                <h4>Y</h4>
                <div class="row pl-3">
                @foreach($groups as $letter => $group)
                    @foreach($group as $category)
                        @if($letter == 'Y')
                            <a href="/brands/{{$category->id}}" class="mr-5 text-dark">{{ $category['name'] }}</a>
                        @endif
                    @endforeach
                @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="27a" role="tabpanel">
                <h4>Z</h4>
                <div class="row pl-3">
                @foreach($groups as $letter => $group)
                    @foreach($group as $category)
                        @if($letter == 'Z')
                            <a href="/brands/{{$category->id}}" class="mr-5 text-dark">{{ $category['name'] }}</a>
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