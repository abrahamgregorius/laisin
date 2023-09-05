@extends('admin.layout.app')
@section('content')
<div class="brands-header d-flex align-items-center justify-content-between my-3">
    <h3>Category Detail</h3>
    <a href="{{ route('index.categories') }}" class="btn btn-primary">Back</a>
</div>
<div class="row">
   <div class="col-12">
    <div class="card">
        <div class="card-body">
            <div class="product category-name">
                <p>ID</p>
                <h3>{{ $data->id }}</h3>
            </div>      
            <div class="product category-name">
                <p>Category Name</p>
                <h3>{{ $data->name }}</h3>
            </div>      
            <div class="product brand-in-category mt-2">
                <div class="row d-flex justify-content-between">
                    <div class="col-6">
                        <p>Product In This Category</p>
                    </div>
                </div>
               
                
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
                                <td><a href="{{ route('show.category', $product->category->slug)}}">{{ $product->category->name }}</a></td>
                                <td><a href="{{ route('show.brand', $product->brand->id) }}">{{ $product->brand->brand_name }}</a></td>
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