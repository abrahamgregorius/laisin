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
            <div class="product product-name">
                <p>Product Name</p>
                <h4>Toyota Hens</h4>
            </div>
            <div class="product product-part-number">
                <p>Part Number</p>
                <h4>Toyota Hens</h4>
            </div>
            <div class="product product-description">
                <p>Description</p>
                <h4>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto, iste?</h4>
            </div>
            <div class="product product-brand">
                <p>Brand</p>
                <h4>Toyota</h4>
            </div>
            <div class="product product-car-year">
                <p>Car Year</p>
                <h4>2019</h4>
            </div>
            
        </div>

    </div>
   </div>
</div>


@endsection