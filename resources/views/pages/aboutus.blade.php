@extends('layouts.app')

@section('title','TokoLokal | About Us')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <p class="title-home font-weight-bold">About Us</p>
    </div>
</div>

<img src="{{ asset('../storage/images/About Page/about.png') }}" style="width: 100%; height: 400px;" alt="">

<div class="container">
    <div class="row justify-content-center my-4">
        <div class="col-md-12">
            <h5>TokoLokal is a concept electronic store based in Jakarta. Started in 2021, TokoLokal become a point for
                fashion and lifestyle from Indonesian local brands. TokoLokal is a place for curated local products to
                compete with international products. Working with passionate and like-minded individuals, constantly
                striving for greatness and on a mission against time to create a legacy for mankind to remember the
                Indonesian culture. </h5>
        </div>
    </div>

    {{-- <hr> --}}

    <div class="row justify-content-center my-4">
        <div class="col-md-6" style="margin-top: 60px;">
            <h3 class="font-weight-bold mb-4">Our Location</h3>
            {{-- <div class=""> --}}
            <div class="my-5">

                <div class="container">
                    <div class="row">
                        <div class="col-md-2"> <img src="{{ asset('../storage/images/About Page/locationLogo.png') }}"
                                style="width: 50%" class="location" alt="">
                        </div>
                        <div class="col-md-10"><span class="pull-right">
                                <h5 class="card-title">Office 8 Building, 19th Floor Unit A</h5>
                                <p class="card-text">Jl. Jend. Sudirman Kav.52-53
                                    RT.8/RW.3 Senayan, Kebayoran Baru
                                    Jakarta Selatan 12190
                                    Indonesia</p>
                            </span></div>
                    </div>
                </div>


            </div>
            {{-- </div> --}}
        </div>
        <div class="col-md-6 cons">
            <img src="{{ asset('../storage/images/About Page/location.png') }}" style="width: 100%" class="" alt="">
            <div class="overlay">
                {{-- <div class="about-text">Current Office</div> --}}
            </div>
        </div>
    </div>

    {{-- <hr> --}}

    <div class="row justify-content-center my-4">
        <label class="title-home font-weight-bold">Our Awesome <span style="color: #001b74">Features</span></label>
        <div class="col-md-12">
            <div class="about-hr-line"></div>
        </div>

    </div>

    <div class="row justify-content-center my-5">
        <div class="col-md-4">
            <div class="event-card">
                <div class="justify-content-center" style="padding: 5% 38%;">
                    <img src="{{ asset('../storage/images/About Page/forumLogo.png') }}" style="height: 80px" class=""
                        alt="">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center">Forum Discussion</h5>
                    <p class="card-text" style="text-align: center">An online discussion site where people can hold
                        conversations in the form of posted messages. They differ from chat rooms in that messages are
                        often longer than one line of text, and are at least temporarily archived.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="event-card">
                <div class="justify-content-center" style="padding: 5% 38%;">
                    <img src="{{ asset('../storage/images/About Page/raffleLogo.png') }}" style="height: 80px" class=""
                        alt="">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center">Raffle</h5>
                    <p class="card-text" style="text-align: center">A system in the form of a lottery, where
                        participants buy tickets to win a prize. After all tickets are sold, the result of the draw will
                        determine which user's ticket number will be the winner.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="event-card">
                <div class="justify-content-center" style="padding: 5% 38%;">
                    <img src="{{ asset('../storage/images/About Page/completeTheLook.png') }}" style="height: 80px"
                        class="" alt="">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center">Complete The Look</h5>
                    <p class="card-text" style="text-align: center">A novel approach to performing visual complements in
                        a way that leverages rich context from scene images to provide highly personalized
                        recommendations</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection