@extends('admin.layout.app')
@section('content')
<div class="brands-header d-flex align-items-center justify-content-between my-3">
    <h3>Update Category "{{ $data->name }}"</h3>
    <a href="{{ route('index.categories') }}" class="btn btn-primary">Back</a>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                {{-- ganti 2 jadi id --}}
                <form action="{{ route('edit.category', $data->id) }}" method="POST">
                    @csrf
                    <label for="brand_name" class="form-label">Category Name</label>
                    <input autocomplete=off type="text" value="{{ $data->name }}" name="category_name" class="form-control" placeholder="Type Brands Name Here">
                    <button type="submit" class="btn btn-primary float-right mt-4">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection