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
        </div>

    </div>
   </div>
</div>


@endsection