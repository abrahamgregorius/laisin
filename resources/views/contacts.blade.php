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
           <h4 class="fw-bold">Contact Us</h4>
           <div class="card-wrappers">
            <form action="" method="POST">
                @csrf
                <div class="mt-2">
                    <label>Name</label>
                    <input type="text" autocomplete="off" name="name" class="form-control" placeholder="Type Your Name Here">
                </div>
                <div class="mt-2">
                    <label>Email</label>
                    <input type="email" autocomplete="off" name="email" class="form-control" placeholder="Type Your Email Address Here"> 
                </div>
                <div class="mt-2">
                    <label>Message</label>
                    <textarea name="message" placeholder="Type Your Message Here" class="form-control"></textarea>
                </div>
                <div class="mt-2">
                    <button class="laisin-contact-btn">Submit</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>


@endsection