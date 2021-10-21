@extends('layout.app')
@section('title', 'Contact')

@section('mainContent')
<!-- One -->
<section id="one">
    <div class="position-relative" style="background-image: url('/images/bg.jpg');
    height: 13rem;
    background-repeat: no-repeat; width: 100%;
    background-position: right bottom, left top;
    background-size: 100%;">
        <div class="position-absolute top-50 start-50 translate-middle text-center" style="font-family: Serif;">
            <h1 class="text-white">Contact Us</h1>
            <hr style="margin: auto; height: 3px; opacity: 0.5; color: rgba(239, 239, 239, 1);">
        </div>
    </div>
</section>
<!-- Two -->
<section id="two" class="p-4">
            <div class="container contact" style="width: 70%; height:70%;">
                <div class="row">
                    <div class="col-md-3">
                        <div class="contact-info">
                            <img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image" />
                            <h2>Contact Us</h2>
                            <h4>We would love to hear from you !</h4>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="contact-form">
                            <form method="POST" action="/contact">
                            @csrf
                            @if(session('message'))
                            <p style="color: green; margin: 0 0px 2rem 13px; font-weight: 600;">{{session('message')}}</p>
                            @endif
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="fname">First Name:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname">
                                    @error('fname')
                                      <div class="text-red-500 text-xs">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="lname">Last Name:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname">
                                    @error('lname')
                                       <div class="text-red-500 text-xs">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Email:</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                                    @error('email')
                                       <div class="text-red-500 text-xs">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="message">Your Message:</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="5" name="message" id="message"
                                    placeholder="Enter Your Value Message..."></textarea>
                                    @error('message')
                                        <div class="text-red-500 text-xs">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn" style="background-color: black;">Send</button>
                                </div>
                            </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
</section>
@endsection
