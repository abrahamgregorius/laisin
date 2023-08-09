@extends('layout.app')
@section('content')

<div class="laisin-hero">
    <img src="{{ asset('assets/image3.jpg') }}" alt="">
    <div class="hero-text">
        <h1>Our Products</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate alias tempore dignissimos! Sequi illo ipsam delectus, sed eaque ut vitae exercitationem neque aperiam sapiente, alias fugit provident quam vel ab!</p>
    </div>
</div>

<div class="container mt-3">
    <h1>Products</h1>
    <table class="table table-striped" >
        <thead>
            <tr>
                <th>Name</th>
                <th>Part Number</th>
                <th>Car Brand</th>
                <th>Car Year</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach($datas as $data) --}}
                <tr>
                    <td>Drupal</td>
                    <td>12345</td>
                    <td>Toyota</td>
                    <td>2021</td>
                </tr>
                <tr>
                    <td>Joomla</td>
                    <td>12345</td>
                    <td>Daihatsu</td>
                    <td>2020</td>
                </tr>
                <tr>
                    <td>Wordpress</td>
                    <td>12345</td>
                    <td>Datsun</td>
                    <td>2023</td>
                </tr>
            {{-- @endforeach --}}
        </tbody>
    </table>
</div>

@endsection