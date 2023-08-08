@extends('admin.layout.app')
@section('content')
<div class="products-header d-flex align-items-center justify-content-between my-3">
    <h3>Update Product {nama_produk}</h3>
    <a href="{{ route('index.products') }}" class="btn btn-primary">Back</a>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                {{-- ganti 2 jadi id --}}
                <form action="{{ route('edit.product',2) }}" method="POST">
                    @csrf
                    <label for="product_name" class="form-label">Product Name</label>
                    <input type="text" name="product_name" class="form-control" placeholder="Type Product Name Here">
                    <div class="mb-2"></div>
                    <label for="part_number" class="form-label">Part Number</label>
                    <input type="number" name="part_number" class="form-control" placeholder="Type Part Number Here">
                    <div class="mb-2"></div>
                    <label for="description" class="form-label">Description</label>
                    <textarea type="text" name="description" class="form-control" placeholder="Type Product Description Here"></textarea>
                    <div class="mb-2"></div>
                    <label for="brand_id" class="form-label">Brand Id</label>
                    <select class="form-control" name="brand_id">
                        <option selected>Select Brand Id</option>
                        <option>Toyota</option>
                        <option>Ford</option>
                    </select>
                    <div class="mb-2"></div>
                    <label for="year">Car Year</label>
                    <input type="text" name="year" class="form-control">
                    <div class="mb-2">
                    </div>
                    <button type="submit" class="btn btn-primary float-right mt-4">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection