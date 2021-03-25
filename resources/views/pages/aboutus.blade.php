@extends('layouts.app')

@section('title','TokoLokal')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <p class="title-home">About Us</p>
        </div>

        <img src="{{ asset('images/about.png') }}" class="img-ab" alt="">

        <div class="row justify-content-center my-4">
            <div class="col-md-12">
                <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus temporibus debitis voluptatem facere iure delectus fugit quidem. Dolor magnam pariatur aliquam porro ad, facilis, doloribus, officia labore maxime perferendis quidem?</h5>
            </div>
        </div>

        <hr>

        <div class="row justify-content-center my-4">
            <div class="col-md-6" style="margin-top: 120px;">
                <h4>Our Location</h4>
                <div class="">
                    <div class="my-2">
                        <h5 class="card-title" style="">Office 8 Building, 19th Floor Unit A</h5>
                        <p class="card-text" style="">Jl. Jend. Sudirman Kav.52-53
                        RT.8/RW.3 Senayan, Kebayoran Baru
                        Jakarta Selatan 12190
                        Indonesia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('images/location.png') }}" class="" alt="">
            </div>
        </div>

        <hr>

        <div class="row justify-content-center my-4">
            <label class="title-home">Our Awesome Futures</label>
        </div>

        <div class="row justify-content-center my-4">
            <div class="col-md-4">
                <div class="card" style="">
                    <i class="far fa-comment fa-2x" style="text-align:center;"></i>
                    <div class="card-body">
                        <h5 class="card-title">Live Chat</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio mollitia, aperiam nam impedit architecto nisi sequi blanditiis corrupti voluptatem iste? Eligendi nam esse, libero corporis quod nulla. Est, aperiam quibusdam.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="">
                    <i class="fas fa-shoe-prints fa-2x" style="text-align:center;"></i>
                    <div class="card-body">
                        <h5 class="card-title">Raffle</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita dignissimos, saepe, nisi eius porro voluptatibus id ex officiis totam voluptatem impedit? Adipisci odit pariatur temporibus nisi et maxime voluptatibus ipsum.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="">
                    <i class="fas fa-tshirt fa-2x" style="text-align:center;"></i>
                    <div class="card-body">
                        <h5 class="card-title">Complete The Look</h5>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur, voluptas rerum doloribus esse deserunt architecto modi facere unde accusantium nihil veritatis quibusdam corporis dolores perspiciatis aliquam natus doloremque omnis? Modi!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
