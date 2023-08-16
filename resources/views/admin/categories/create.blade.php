@extends('admin.layout.app')
@section('content')
<div class="products-header d-flex align-items-center justify-content-between my-3">
    <h3>Create New Category</h3>
    <a href="{{ route('index.brands') }}" class="btn btn-primary">Back</a>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('create.category') }}" method="POST">
                    @csrf
                    <label for="brand_name" class="form-label">Category Name</label>
                    <input type="text" autocomplete="off" name="category_name" class="form-control" placeholder="Type Category Name Here">
                    <button type="submit" class="btn btn-primary float-right mt-4">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection