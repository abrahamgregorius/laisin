@extends('layout.app')
@section('content')
<div class="laisin-breadcrumb">
    <div class="container mx-auto">
        <ul>
            <li>
        <a href="{{ route('home.index') }}">Home</a>
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
              </svg>
            </li>
            <li>
                <a href="{{ route('products.index') }}">Products</a>
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                  </svg>
            </li>
            <li>
                <a href="{{ route('brands.years') }}">Cars</a>
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                  </svg>
            </li>
            <li>
                <a href="{{ route('categories.index') }}" style="color: #f8470a">{{ $slug }}</a>
            </li>
        </ul>
    </div>
</div>


<section class="laisin-products-page">
    <div class="container mx-auto mt-4">
        <h4>{{ $slug }} Products</h4>
        <div class="laisin-products-options">
            <a href="{{ route('categories.index') }}" class="options-category">
                <div class="wrappers-options-category">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#f8470a" class="bi bi-box" viewBox="0 0 16 16">
                        <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5 8 5.961 14.154 3.5 8.186 1.113zM15 4.239l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"/>
                    </svg>
                    By Category
                </div>
            </a>
            <a href="{{ route('brands.index') }}" class="options-category">
                <div class="wrappers-options-category">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#f8470a" class="bi bi-car-front" viewBox="0 0 16 16">
                        <path d="M4 9a1 1 0 1 1-2 0 1 1 0 0 1 2 0Zm10 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0ZM6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2H6ZM4.862 4.276 3.906 6.19a.51.51 0 0 0 .497.731c.91-.073 2.35-.17 3.597-.17 1.247 0 2.688.097 3.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 10.691 4H5.309a.5.5 0 0 0-.447.276Z"/>
                        <path d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679c.033.161.049.325.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.807.807 0 0 0 .381-.404l.792-1.848ZM4.82 3a1.5 1.5 0 0 0-1.379.91l-.792 1.847a1.8 1.8 0 0 1-.853.904.807.807 0 0 0-.43.564L1.03 8.904a1.5 1.5 0 0 0-.03.294v.413c0 .796.62 1.448 1.408 1.484 1.555.07 3.786.155 5.592.155 1.806 0 4.037-.084 5.592-.155A1.479 1.479 0 0 0 15 9.611v-.413c0-.099-.01-.197-.03-.294l-.335-1.68a.807.807 0 0 0-.43-.563 1.807 1.807 0 0 1-.853-.904l-.792-1.848A1.5 1.5 0 0 0 11.18 3H4.82Z"/>
                      </svg>
                    By Car Brands
                </div>
            </a>
            <a href="{{ route('brands.years') }}" class="options-category">
                <div class="wrappers-options-category">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#f8470a" class="bi bi-calendar2-check" viewBox="0 0 16 16">
                        <path d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"/>
                        <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"/>
                      </svg>
                    By Car Year
                </div>
            </a>
        </div>
        <div class="laisin-search">
            <svg class="icons" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#8e99a4;" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
              </svg>
            <input alt="{{ $slug }}" id="search-homepageyearshow" type="text" placeholder="Search Product Name" class="form-control">
        </div>
        <div class="laisin-table table-responsive">
            <div class="table-title">
                <p>{{ $slug }} Products</p>
            </div>
            <table class="table rounded-4 shadow-sm">
                <thead class="text-white">
                    <tr>
                        <th>Name</th>
                        <th>Part Number</th>
                        <th>Category</th>
                        <th>Car Brand</th>
                        <th>Car Year</th>
                    </tr>
                </thead>
                <tbody id="search-homepageyearshow-data">
                    @foreach($yearproducts as $product)
                        <tr class="table-item">
                            <td><a href="/product/{{ $product->slug }}">{{ $product->name }}</a></td>
                            <td>{{ $product->part_number }}</td>
                            <td><a href="/products/category/{{ $product->category->slug }}">{{ $product->category->name }}</a></td>
                            <td><a href="/products/brand/{{ $product->brand->slug }}">{{ $product->brand->brand_name }}</a></td>
                            <td>{{ $product->car_year }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>


@endsection