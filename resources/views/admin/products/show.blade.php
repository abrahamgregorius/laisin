@extends('admin.layout.app')
@section('content')
<div class="products-header d-flex align-items-center justify-content-between my-3">
    <h3>Products Detail</h3>
    <a href="{{ route('index.products') }}" class="btn btn-primary">Back</a>
</div>
<div class="row">
   <div class="col-12">
    <div class="card">
        <div class="card-body">
            <img src="{{ url($data->thumbnail)}}" alt="">
            <div class="product product-name">
                <p>Product Name</p>
                <h4>{{ $data->name }}</h4>
            </div>
            <div class="product product-part-number">
                <p>Part Number</p>
                <h4>{{ $data->part_number }}</h4>
            </div>
            <div class="product product-description">
                <p>Description</p>
                <h4>{{ $data->description }}</h4>
            </div>
            <div class="product product-brand">
                <p>Brand</p>
                <h4>{{ $data->brand->brand_name }}</h4>
            </div>
            <div class="product product-car-year">
                <p>Car Year</p>
                <h4>{{ $data->car_year }}</h4>
            </div>
            
        </div>

    </div>
   </div>
</div>


@endsection