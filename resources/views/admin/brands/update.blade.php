@extends('admin.layout.app')
@section('content')
<div class="brands-header d-flex align-items-center justify-content-between my-3">
    <h3>Update Brand {nama_brand}</h3>
    <a href="{{ route('index.brands') }}" class="btn btn-primary">Back</a>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                {{-- ganti 2 jadi id --}}
                <form action="{{ route('edit.brand',2) }}" method="POST">
                    @csrf
                    <label for="brand_name" class="form-label">Brands Name</label>
                    <input type="text" name="brand_name" class="form-control" placeholder="Type Brands Name Here">
                    <button type="submit" class="btn btn-primary float-right mt-4">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection