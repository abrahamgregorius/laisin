@extends('layout.app')
@section('content')

{{-- <div class="laisin-hero">
    <img src="{{ asset('assets/image3.jpg') }}" alt="">
    <div class="hero-text">
        <h1>Our Products</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate alias tempore dignissimos! Sequi illo ipsam delectus, sed eaque ut vitae exercitationem neque aperiam sapiente, alias fugit provident quam vel ab!</p>
    </div>
</div> --}}

<div class="container mx-auto mt-4">
    <div class="laisin-breadcrumb">
        <ul>
            <li>
            <a href="">Home</a>
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
              </svg>
            </li>
            <li>
                <a href="">Product</a>
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                  </svg>
            </li>
            <li>
                <a href="">All Products</a>
            </li>
        </ul>
    </div>
    <div class="laisin-search-product">
        <input type="text" placeholder="Search Product Name">
    </div>
    <table class="table">
        <thead class="text-white">
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