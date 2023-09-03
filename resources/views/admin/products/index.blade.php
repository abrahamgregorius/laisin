@extends('admin.layout.app')
@section('content')
<div class="products-header d-flex align-items-center justify-content-between my-3">
    <h3>Products</h3>
    <a href="{{ route('create.product.index') }}" class="btn btn-primary d-flex" style="gap: 5px; justify-content:center; align-items:center;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
      </svg>Add Products</a>
</div>
<div class="row">
    <div class="col-12">
        <div class="col-lg-4 col-12 mb-4">
            <div class="search d-flex" style="gap: 10px;">
                <input type="text" placeholder="Cari Produk" class="form-control" id="product_search">
                <button class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                  </svg></button>
            </div>
        </div>
        <div class="card">
            <table class="table">
                <thead>
                   <tr>
                    <td>
                        ID
                    </td>
                    <td>
                        Product Name
                    </td>
                    <td>
                        Part Number
                    </td>
                    <td>
                        Description
                    </td>
                    <td>
                        Brand
                    </td>
                    <td>
                        Car Year
                    </td>
                    <td>
                        Action
                    </td>
                   </tr>
                </thead>
                <tbody id="product-data">
                    <?php $id = 1 ?>
                    @foreach ($products as $product)
                    <tr>
                        <td>{{ $id++ }}</td>
                        <td><a href="{{ route('show.product', $product->id) }}">{{ $product->name }}</a></td>
                        <td>{{ $product->part_number }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->brand->brand_name }}</td>
                        <td>{{ $product->car_year }}</td>
                        <td class="d-flex" style="gap: 10px;">
                            <a href="{{ route('edit.product', $product->id) }}" class="btn btn-warning mr-2" >
                                <svg style="fill: white !important" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                    <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                                </svg>
                            </a>
                            {{-- ganti 2 nya jadi $products->id --}}
                            <form id="product-form" action="{{ route('delete.product', $product->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger product-confirm-delete">
                                    <svg style="fill: white !important" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                    </svg>
                                </button>
                            </form>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="pagination">
            <ul>
                @if ($products->currentPage() > 1)
                    <li class="prev"><a href="{{ $products->previousPageUrl() }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                      </svg> Previous</a></li>
                @endif
        
                @if(request()->page != 'show_all')
                @php
                    $startPage = max($products->currentPage() - 2, 1);
                    $endPage = min($startPage + 4, $products->lastPage());
                @endphp
                @for ($i = $startPage; $i <= $endPage; $i++)
                    <li class="{{ ($i == $products->currentPage()) ? 'active' : '' }}">
                        <a href="{{ $products->url($i) }}">{{ $i }}</a>
                    </li>
                @endfor
                @endif
        
                @if ($products->currentPage() < $products->lastPage())
                    <li class="next"><a href="{{ $products->nextPageUrl() }}">Next <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                      </svg></a></li>
                @endif
    
                <li class="show_all"><a href="{{ (request()->page == 'show_all' ) ? route('index.products') :$products->url('show_all') }}">{{ (request()->page == 'show_all') ? 'Show Less' : 'Show All' }}</a></li>
            </ul>
        </div>
@endsection