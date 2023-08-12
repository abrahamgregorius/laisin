@extends('admin.layout.app')
@section('content')
<div class="products-header d-flex align-items-center justify-content-between my-3">
    <h3>Update Product "{{ $data->name }}"</h3>
    <a href="{{ route('index.products') }}" class="btn btn-primary">Back</a>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                {{-- ganti 2 jadi id --}}
                <form action="{{ route('edit.product', $data->id) }}" method="POST">
                    @csrf
                    {{-- Name --}}
                    <label for="product_name" class="form-label">Product Name</label>
                    <input autocomplete="off" value="{{ $data->name }}" type="text" name="name" class="form-control" placeholder="Type Product Name Here">
                    
                    {{-- Part number --}}
                    <div class="mb-2"></div>
                    <label for="part_number" class="form-label">Part Number</label>
                    <input autocomplete="off" value="{{ $data->part_number }}" type="number" name="part_number" class="form-control" placeholder="Type Part Number Here">
                    
                    {{-- Description --}}
                    <div class="mb-2"></div>
                    <label for="description" class="form-label">Description</label>
                    <textarea type="text" name="description" class="form-control" placeholder="Type Product Description Here">{{ $data->description }}</textarea>
                    
                    {{-- Brand ID --}}
                    <div class="mb-2"></div>
                    <label for="brand_id" class="form-label">Brand ID</label>
                    <select class="form-control" name="brand_id">
                        <option selected>-- SELECT BRAND --</option>
                        @foreach ($brands as $brand)
                            <option @if($brand->id === $data->brand->id) selected @endif value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                        @endforeach
                    </select>
                    
                    
                    <div class="mb-2"></div>
                    <label for="year">Car Year</label>
                    <input type="text" name="car_year" value="{{ $data->car_year }}" class="form-control">
                    <div class="mb-2">
                    </div>
                    <button type="submit" class="btn btn-primary float-right mt-4">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection