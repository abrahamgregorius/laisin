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
                <div class="col-md-8">
                    <div class="product">
                        <div class="product-title">
                            <label>Product Name</label>
                            <h2>{{ $product->name }}</h2>
                        </div>
                        <div class="product-images">
                            <img loading="lazy" src="https://autoimage.templines.info/wp-content/uploads/2018/10/volkswagen_tiguan_offroad_4k-1280x720-750x420.jpg"
                                alt="img">
                        </div>
                        <div class="laisin-show-product-menu">
                            <div class="menu-btn menu-active">
                                DESCRIPTION
                            </div>
                            <div class="menu-btn">
                                SPECIFICATION
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
                        </div>
                        <div class="product-spesification hidden">
                            <table class="table laisin-products-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-car-front" viewBox="0 0 16 16">
                                                <path d="M4 9a1 1 0 1 1-2 0 1 1 0 0 1 2 0Zm10 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0ZM6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2H6ZM4.862 4.276 3.906 6.19a.51.51 0 0 0 .497.731c.91-.073 2.35-.17 3.597-.17 1.247 0 2.688.097 3.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 10.691 4H5.309a.5.5 0 0 0-.447.276Z"/>
                                                <path d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679c.033.161.049.325.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.807.807 0 0 0 .381-.404l.792-1.848ZM4.82 3a1.5 1.5 0 0 0-1.379.91l-.792 1.847a1.8 1.8 0 0 1-.853.904.807.807 0 0 0-.43.564L1.03 8.904a1.5 1.5 0 0 0-.03.294v.413c0 .796.62 1.448 1.408 1.484 1.555.07 3.786.155 5.592.155 1.806 0 4.037-.084 5.592-.155A1.479 1.479 0 0 0 15 9.611v-.413c0-.099-.01-.197-.03-.294l-.335-1.68a.807.807 0 0 0-.43-.563 1.807 1.807 0 0 1-.853-.904l-.792-1.848A1.5 1.5 0 0 0 11.18 3H4.82Z"/>
                                              </svg>
                                            Brand Name :
                                        </td>
                                        <td>
                                            {{ $product->brand->brand_name }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box" viewBox="0 0 16 16">
                                                <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5 8 5.961 14.154 3.5 8.186 1.113zM15 4.239l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"/>
                                              </svg>
                                            Category :
                                        </td>
                                        <td>
                                            {{ $product->category->name }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bezier2" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M1 2.5A1.5 1.5 0 0 1 2.5 1h1A1.5 1.5 0 0 1 5 2.5h4.134a1 1 0 1 1 0 1h-2.01c.18.18.34.381.484.605.638.992.892 2.354.892 3.895 0 1.993.257 3.092.713 3.7.356.476.895.721 1.787.784A1.5 1.5 0 0 1 12.5 11h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5H6.866a1 1 0 1 1 0-1h1.711a2.839 2.839 0 0 1-.165-.2C7.743 11.407 7.5 10.007 7.5 8c0-1.46-.246-2.597-.733-3.355-.39-.605-.952-1-1.767-1.112A1.5 1.5 0 0 1 3.5 5h-1A1.5 1.5 0 0 1 1 3.5v-1zM2.5 2a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm10 10a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z"/>
                                              </svg>
                                            Part Number :
                                        </td>
                                        <td>
                                            
                                            {{ $product->part_number }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
                                                <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                                              </svg>
                                            Car Year :
                                        </td>
                                        <td>
                                            {{ $product->car_year }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-1">

                </div>
                <div class="relative-product col-md-3">
                    <div class="relative-wrappers">
                        <div class="relative-title">
                            <h5>Related Product</h5>
                        </div>
                        <div class="relative-product-list">
                        @foreach($productRelative as $relative)
                        <a class="product-relative anchor-related" href="{{ route('products.detail',$relative->slug) }}" class="product-relative">
                            <div class="product-relative-description">
                                <p class="relative-product-title">{{ $relative->name }}</p>
                                <p>{{ $relative->category->name }}</p>
                            </div>
                            <div class="product-relative-img">
                                <img src="https://autoimage.templines.info/wp-content/uploads/2018/10/volkswagen_tiguan_offroad_4k-1280x720-750x420.jpg" alt="img" loading="lazy">
                            </div>
                        </a>
                        
                        @endforeach

                     </div>
                    </div> 
                   
                </div>
            </div>
        </div>
    </section>
@endsection
