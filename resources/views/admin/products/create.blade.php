@extends('admin.layout.app')
@section('content')
<div class="products-header d-flex align-items-center justify-content-between my-3">
    <h3>Create New Product</h3>
    <a href="{{ route('index.products') }}" class="btn btn-primary">Back</a>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('create.product') }}" method="POST">
                    @csrf
                    {{-- Name --}}
                    <label for="product_name" class="form-label">Product Name</label>
                    <input autocomplete="off" type="text" name="product_name" class="form-control" placeholder="Type Product Name Here">
                    
                    {{-- Part number --}}
                    <div class="mb-2"></div>
                    <label for="part_number" class="form-label">Part Number</label>
                    <input autocomplete="off" type="number" name="part_number" class="form-control" placeholder="Type Part Number Here">
                    
                    {{-- Description --}}
                    <div class="mb-2"></div>
                    <label for="description" class="form-label">Description</label>
                    <textarea type="text" name="description" class="form-control" placeholder="Type Product Description Here"></textarea>
                     {{-- Select Category --}}
                    <div class="mb-2"></div>
                    <label for="brand_id" class="form-label">Brand Id</label>
                    <select class="form-control" name="category_id">
                        <option selected>-- SELECT CATEGORY --</option>
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    {{-- Select brand --}}
                    <div class="mb-2"></div>
                    <label for="brand_id" class="form-label">Brand Id</label>
                    <select class="form-control" name="brand_id">
                        <option selected>-- SELECT BRAND --</option>
                        @foreach ($brands as $brand)
                        <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                        @endforeach
                    </select>

                    {{-- Car year --}}
                    <div class="mb-2"></div>
                    <label for="year">Car Year</label>
                    <input type="number" name="car_year" class="form-control">
                    <div class="mb-2">
                    </div>
                    <button class="btn btn-primary float-right mt-4">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection