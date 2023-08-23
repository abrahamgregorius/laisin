@extends('layout.app')
@section('content')
    <div class="laisin-breadcrumb">
        <div class="container mx-auto">
            <ul>
                <li>
                    <a href="{{ route('home.index') }}">Home</a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                        class="bi bi-chevron-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                    </svg>
                </li>
                <li>
                    <a href="{{ route('products.index') }}">Product</a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                        class="bi bi-chevron-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                    </svg>
                </li>
                <li>
                    <a href="{{ route('products.index') }}" style="color:#f8470a">{{ $product->name }}</a>
                </li>
            </ul>
        </div>
    </div>


    <section class="laisin-products-show">
        <div class="container mx-auto mt-4">
            <div class="row">
                <div class="col-md-7">
                    <div class="product">
                        <div class="product-title">
                            <label>Product Name</label>
                            <h2>{{ $product->name }}</h2>
                        </div>
                        <div class="product-images">
                            <img src="https://autoimage.templines.info/wp-content/uploads/2018/10/volkswagen_tiguan_offroad_4k-1280x720-750x420.jpg"
                                alt="img">
                        </div>
                        <div class="laisin-show-product-menu">
                            <div class="menu-btn">
                                DESCRIPTION
                            </div>
                            <div class="menu-btn menu-active">
                                SPESIFICATION
                            </div>
                        </div>
                        <div class="product-description">
                        This 2018 model car is Brilliant Black Crystal Pearlcoat with a Black/Diesel Gray interior. Buy
                        confidence knowing Jeep Dodge Ram Surprise has been exceeding customer expectations for many
                        years and always provide customers with a great value!
                        Sit amet consectetura dipisicing elit dui sed eiusmod ciltempor incididunt uet labore uset
                        dolore magna aliqua minim veniam quisnostrud exercitation. Slamco em laborisa aliquip ex ea
                        comdo consequat uis sed auted irure rehenderit voluptate velit esse cillum doloreu fugiat nulla
                        sed pariatura ipsum dolor am consecteu adipis elit sed do eiusmod tempora incididunt. Lorem
                        ipsum dolor sitamet, consectetur adipisicing elit sedo eius tempor incididunt ut labore et
                        dolore magna aliqua.
                        Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea comodo
                        consequat aute irure reprehen deritin voluptate velit esse cillum dolore eu fugiat nula pariatur
                        excepteur sint cupidatat no proident sunt in culpa qui officia deserunt mollit anim. Lorem ipsum
                        dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation.
                        </div>
                        <div class="product-spesification hidden">
                            <table class="table laisin-table">
                                <thead style="background-color:white">
                                    <tr>
                                        <td>
                                            Brand Name
                                        </td>
                                        <td>
                                            Part Number
                                        </td>
                                        <td>
                                            Category
                                        </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            {{ $product->brand->brand_name }}
                                        </td>
                                        <td>
                                            {{ $product->part_number }}
                                        </td>
                                        <td>
                                            {{ $product->category->name }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">

                </div>
            </div>
        </div>
    </section>
@endsection
