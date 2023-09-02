@extends('layout.app')
@section('content')


<div class="laisin-hero">
    <img src="{{ asset('assets/image2.jpg') }}" alt="">
    <div class="hero-text">
        <h1>Contact us!</h1>
        <p>Welcome to our Contact Us! We value your feedback, inquiries, and communication. Whether you have a question about our products or services, want to collaborate, or simply want to share your thoughts, we're here to listen and assist.</p>
    </div>
</div>


<div class="laisin-contact-page">
    <div class="container mx-auto pt-4"> 
        <div class="contact-page-card">
            @if(Session::get('message'))
            <div class="response" style=" margin-bottom: 50px">
                <img src="{{ asset('assets/response-ilustration.svg')}}" alt="resp" style="height: 16rem">
                <h4>We greatly appreciate you taking the time to get in touch with us.</h4>
                <p>
                    Your message has been received, and we will review it as soon as possible.
                </p>
                <a href="{{ route('home')}}" style="float:right;">Back To Home</a>
            </div>
            @endif
            
            <div class="contact-us @if(Session::get('message')) invisible @endif">
             <h4 class="fw-bold">Contact Us</h4>
            <div class="card-wrappers">
             <form id="contact-form" action="" method="POST">
                 @csrf
                 <div class="mt-2">
                     <label>Name</label>
                     <input id="contact=name" type="text" autocomplete="off" name="name" class="form-control mt-2" placeholder="Type Your Name Here">
                 </div>
                 <div class="mt-2">
                     <label>Email</label>
                     <input id="contact-email" type="email" autocomplete="off" name="email" class="form-control mt-2" placeholder="Type Your Email Address Here"> 
                 </div>
                 <div class="mt-2">
                     <label>Message</label>
                     <textarea id="contact-message" name="message" placeholder="Type Your Message Here" class="form-control mt-2"></textarea>
                 </div>
                 <div class="mt-2">
                     <button id="contact-submit" type="submit" class="laisin-contact-btn">Submit</button>
                 </div>
             </form>
             </div>
         </div>

        </div>
    </div>
</div>


@endsection