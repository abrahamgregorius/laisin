@extends('admin.layout.app')
@section('content')
<div class="brands-header d-flex align-items-center justify-content-between my-3">
    <h3>Brands Detail</h3>
    <a href="{{ route('index.brands') }}" class="btn btn-primary">Back</a>
</div>
<div class="row">
   <div class="col-12">
    <div class="card">
        <div class="card-body">
            <div class="product product-name">
                <p>ID</p>
                <h3>{{ $data->id }}</h3>
            </div>      
            <div class="product product-name">
                <p>Brand Name</p>
                <h3>{{ $data->brand_name }}</h3>
            </div>      
            <div class="product product-name row">
                <p>Product In {{ $data->brand_name }}</p>
                <div class="table-responsive col-12">
                    <table class="table laisin-table rounded-4 shadow-sm">
                        <thead class="text-black">
                            <tr>
                                <th>Production ID</th>
                                <th>Part Number</th>
                                <th>Category</th>
                                <th>Car Brand</th>
                                <th>Car</th>
                            </tr>
                        </thead>
                        <tbody id="product-homepage-data">
                            @foreach($productContain as $product)
                                <tr class="table-item">
                                    <td><a href="{{ route('show.product',$product->id) }}">{{ $product->name }}</a></td>
                                    <td>{{ $product->part_number }}</td>
                                    <td><a href="{{ route('categories.show', $product->category->slug)}}">{{ $product->category->name }}</a></td>
                                    <td><a href="{{ route('brands.show', $product->brand->slug) }}">{{ $product->brand->brand_name }}</a></td>
                                    <td>{{ $product->car_year }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            
            </div>
        </div>

    </div>
   </div>
</div>


@endsection