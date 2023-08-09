@extends('layout.app')
@section('content')


<div class="laisin-hero">
    <img src="{{ asset('assets/image2.jpg') }}" alt="">
    <div class="hero-text">
        <h1>Contact us!</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium accusamus, ipsam ex doloribus vitae nisi. Mollitia vitae sit rem a, enim, facilis quisquam error impedit, fugit minima voluptatum ab alias consequatur velit quidem. Non, sapiente.</p>
    </div>
</div>

<div class="container mt-2">
    <h1>Contacts</h1>

    <div class="contact-info" style="display: flex; width: 100%; justify-content: space-between">
        <div class="info">
            <h4>Phone Number:</h4>
            <h4>Email:</h4>
            <h4>Facebook:</h4>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.2195578510823!2d106.68099497467303!3d-6.101106459842249!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a02fdc7f176e1%3A0xfc975417ae79d654!2sLaisindo%20Anugerah%20Pt.%2C%20Benda%2C%20Kec.%20Benda%2C%20Kota%20Tangerang%2C%20Banten!5e0!3m2!1sen!2sid!4v1691601062729!5m2!1sen!2sid" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>

@endsection