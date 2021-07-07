@extends('layouts.app')

@section('title','TokoLokal | Contact')

@section('content')
<div>
    <img src="{{ asset('../storage/images/Contact Us Page/Contact_Us_Header.png') }}" class="img-fit" alt="">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5" style="margin: 4%;">
                <h1><b>Drop us a line</b></h1>
                <form method="POST" action="/contact" enctype="multipart/form-data">
                    @csrf
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="form-group" style="margin-right: 9%;">
                                <label for="name">Your Name</label>
                                <input type="text" class="form-control" name="name" id="name"
                                    placeholder="Enter your name ...">
                            </div>

                            <div class="form-group">
                                <label for="email">Your Email</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror"
                                    name="email" id="email" placeholder="Enter your email ...">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name">Your Message</label>
                        <textarea rows="4" cols="50" class="form-control" name="message" id="message"
                            placeholder="Type your message here ..."></textarea>
                    </div>

                    <div class="form-group">
                        <button style="border-radius: 5px" type="submit" class="btn btn-clock btn-template">
                            Send Now!</button>
                    </div>
                </form>
            </div>
            <div class="vr"></div>
            <div class="col-md-5" style="margin: 4% 0% 4% 8%;">
                <div class="inner-contact-logo">
                    <div class="location">
                        <img src="{{ asset('../storage/images/Contact Us Page/phoneLogo.png') }}" width="100"
                            height="100" alt="" class="center">
                        <p class="text-center">+800-820-8210</p>
                        <p class="text-center">Mon - Fri | 9am - 5pm</p>
                    </div>
                    <div class="location">
                        <img src="{{ asset('../storage/images/Contact Us Page/mailLogo.png') }}" width="100"
                            height="100" alt="" class="center">
                        <p class="text-center">info@tokolokal.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection