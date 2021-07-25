@foreach($raffles as $raffle)
<div class="raf col-md-12 mb-3">
    @if($raffle->status === 'running' || $raffle->status === 'not_started')
    <div class="event-card rounded-lg">
        <div class="row no-gutters">
            <div class="col-md-4">
                <a href="/raffle/description/{{$raffle->id}}">
                    <img src="{{asset('../storage/images/Raffles/'. $raffle->raffleimage)}}" class="card-img-top p-3" alt="Image">
                </a>
            </div>
            <div class="col-md-8" style="background: #E5E5E5;">
                <div class="card-body border">
                    <a href="/raffle/description/{{$raffle->id}}" class="text-decoration-none" style="color:black;">
                        <p class="text-right mb-0">
                            <!-- <u> -->
                            <small class="font-weight-bolder mr-5">Started From:</small>
                            <!-- </u> -->
                        </p>
                        <h5 class="text-right">
                            <u>
                                <!-- <small></small> -->
                                {{date('d M Y',strtotime($raffle->rafflereleasedate))}}
                            </u>
                        </h5>
                        <p class="about-title mb-0" style="
                        font-size: 16px;
                    ">Item</p>
                        <p class="mb-0" style="
                        font-size: 12px;
                        padding-top: -20%;
                    ">{{$raffle->brand->name}}
                        </p>
                        <p class="font-weight-bolder mb-0" style="
                        font-size: 20px;
                    ">{{$raffle->rafflename}}
                        </p>
                        <p class="about-title mb-0" style="
                        font-size: 16px;
                    ">Price</p>
                        <p class="font-weight-bold" style="font-size: 20px">Rp. {{number_format($raffle->raffleprice)}}</p>
                    </a>
                    <div class="text-right">
                        @guest
                        @if($raffle->status === 'running')
                        <a href="/register" class="btn btn-primary">ENTER NOW</a>
                        @elseif($raffle->status === 'closed')
                        <a href="#" class="btn btn-danger disabled">CLOSED</a>
                        @else
                        <a href="/raffle/detail/{{$raffle->id}}" class="btn btn-secondary disabled">UPCOMING</a>
                        @endif
                        @else
                        @if($raffle->status === 'running')
                        <a href="/raffle/detail/{{$raffle->id}}" class="btn btn-primary">ENTER NOW</a>
                        @elseif($raffle->status === 'closed')
                        <a href="#" class="btn btn-danger disabled">CLOSED</a>
                        @else
                        <a href="/raffle/detail/{{$raffle->id}}" class="btn btn-secondary disabled">UPCOMING</a>
                        @endif
                        @endguest
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-3">
                            <p class="mb-0">
                                @if($raffle->status === 'running')
                                <small class="font-weight-bolder"><i class="fas fa-user-alt"></i> {{$raffle->rafflejoined}}/{{$raffle->rafflequota}}</small>
                                @else
                                <small class="font-weight-bolder"><i class="fas fa-user-alt"></i> N/A</small>
                                @endif
                            </p>
                        </div>
                        <div class="col">
                            <p class="mb-0">
                                <small class="font-weight-bolder">Category:
                                    @if($raffle->categoryraffle->categoryname === 'Top')
                                    <a href="/men-tops">{{$raffle->categoryraffle->categoryname}}</a>
                                    @elseif($raffle->categoryraffle->categoryname === 'Bottom')
                                    <a href="/men-bottoms">{{$raffle->categoryraffle->categoryname}}</a>
                                    @elseif($raffle->categoryraffle->categoryname === 'Shoes')
                                    <a href="/men-shoes">{{$raffle->categoryraffle->categoryname}}</a>
                                    @elseif($raffle->categoryraffle->categoryname === 'Accessories')
                                    <a href="/men-accessories">{{$raffle->categoryraffle->categoryname}}</a>
                                    @endif
                                </small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @elseif($raffle->status === 'closed')
    <div class="card rounded-lg shadow-lg" id="overlay">
        <div class="row no-gutters">
            <div class="col-md-4">
                <a href="/raffle/description/{{$raffle->id}}">
                    <img src="{{asset('../storage/images/Raffles/'. $raffle->raffleimage)}}" class="card-img-top p-3" alt="Image">
                </a>
            </div>
            <div class="col-md-8" style="background: #E5E5E5;">
                <div class="card-body border">
                    <a href="/raffle/description/{{$raffle->id}}" class="text-decoration-none" style="color:black;">
                        <p class="text-right mb-0">
                            <!-- <u> -->
                            <small class="font-weight-bolder">Started From:</small>
                            <!-- </u> -->
                        </p>
                        <h5 class="text-right mt-1">
                            <u>
                                <!-- <small></small> -->
                                {{date('d M Y',strtotime($raffle->rafflereleasedate))}}
                            </u>
                        </h5>
                        <p class="about-title mb-0">Item</p>
                        <p class="mb-0">{{$raffle->brand->name}}
                        </p>
                        <p class="font-weight-bolder mb-0">{{$raffle->rafflename}}
                        </p>
                        <p class="about-title mb-0">Price</p>
                        <p style="font-weight:bold;">Rp. {{number_format($raffle->raffleprice)}}</p>
                    </a>
                    <div class="text-right">
                        @guest
                        @if($raffle->status === 'running')
                        <a href="/register" class="btn btn-primary">ENTER NOW</a>
                        @elseif($raffle->status === 'closed')
                        <a href="#" class="btn btn-danger disabled">CLOSED</a>
                        @else
                        <a href="/raffle/detail/{{$raffle->id}}" class="btn btn-secondary disabled">UPCOMING</a>
                        @endif
                        @else
                        @if($raffle->status === 'running')
                        <a href="/raffle/detail/{{$raffle->id}}" class="btn btn-primary">ENTER NOW</a>
                        @elseif($raffle->status === 'closed')
                        <a href="#" class="btn btn-danger disabled">CLOSED</a>
                        @else
                        <a href="/raffle/detail/{{$raffle->id}}" class="btn btn-secondary disabled">UPCOMING</a>
                        @endif
                        @endguest
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p class="mb-0">
                                <small class="font-weight-bolder"><i class="fas fa-user-alt"></i> {{$raffle->rafflejoined}}/{{$raffle->rafflequota}}</small>
                            </p>
                        </div>
                        <div class="col">
                            <p class="mb-0">
                                <small class="font-weight-bolder">Category: {{$raffle->categoryraffle->categoryname}}</small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
@endforeach


<div class="row justify-content-around mt-5">
    {{ $raffles->links() }}
</div>