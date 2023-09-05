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
                <form action="{{ route('edit.product', $data->id) }}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    {{-- Name --}}
                    <label for="product_name" class="form-label">Product Name</label>
                    <input autocomplete="off" value="{{ $data->name }}" type="text" name="name" class="form-control" placeholder="Type Product Name Here">
                    
                    {{-- Part number --}}
                    <div class="mb-2"></div>
                    <label for="part_number" class="form-label">Part Number</label>
                    <input autocomplete="off" value="{{ $data->part_number }}" type="text" name="part_number" class="form-control" placeholder="Type Part Number Here">
                    
                    {{-- Description --}}
                    <div class="mb-2"></div>
                    <label for="description" class="form-label">Description</label>
                    <textarea type="text" name="description" class="form-control" placeholder="Type Product Description Here">{{ $data->description }}</textarea>
                    
                    {{-- Select Category --}}
                    <div class="mb-2"></div>
                    <label for="brand_id" class="form-label">Category</label>
                    <select class="form-control" name="category_id">
                        <option selected>-- SELECT CATEGORY --</option>
                        @foreach ($categories as $category)
                        <option @if($category->id === $data->category->id) selected @endif value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>

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
                    <label for="year">Car</label>
                    <input type="text" name="car_year" value="{{ $data->car_year }}" class="form-control">
                    
                    {{-- Thumbnail upload --}}
                    <div class="mb-2"></div>
                    <label for="thumbnail">Thumbnail</label>
                    <p>Latest Thumbnail :</p>
                    <div class="latest-thumbnail">
                        <img src="{{ url($data->thumbnail)}}" alt="">
                    </div>
                    <div class="drag-and-drop">
                        <div class="preview no-img">
                            <img id="preview-img" src="" class="">
                        </div>
                        <div class="drag-icons">
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-images" viewBox="0 0 16 16">
                                <path d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                                <path d="M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2zM14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1zM2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1h-10z"/>
                              </svg>
                              <span>
                                Drag And Drop Or <span style="opacity:100%; color: blue">Browse</span><br>
                               Support Format "JPEG,PNG,JPG"
                              </span>
                        </div>
                        <input id="input-file" type="file" name="thumbnail" class="form-control">
                    </div>
                    
                    <div class="mb-2"></div>
                    <button type="submit" class="btn btn-primary float-right mt-4">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection