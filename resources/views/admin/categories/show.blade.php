@extends('admin.layout.app')
@section('content')
<div class="brands-header d-flex align-items-center justify-content-between my-3">
    <h3>Category Detail</h3>
    <a href="{{ route('index.categories') }}" class="btn btn-primary">Back</a>
</div>
<div class="row">
   <div class="col-12">
    <div class="card">
        <div class="card-body">
            <div class="product category-name">
                <p>ID</p>
                <h3>{{ $data->id }}</h3>
            </div>      
            <div class="product category-name">
                <p>Category Name</p>
                <h3>{{ $data->name }}</h3>
            </div>      
            <div class="product brand-in-category mt-2">
                <div class="row d-flex justify-content-between">
                    <div class="col-6">
                        <p>Brand In This Category</p>
                    </div>
                    <div class="col-4">
                        <div class="search d-flex" style="gap: 10px;">
                            <input type="text" placeholder="Search Brand" class="form-control">
                            <button class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                              </svg></button>
                        </div>
                    </div>
                </div>
               
                
                <table class="table table-striped shadow-md mt-2 rounded-2 overflow-hidden">
                    <thead class="bg-primary">
                       <tr>
                        <td>
                            ID
                        </td>
                        <td>
                           Brand Name
                        </td>
                        <td>Action</td>
                       </tr>
                    </thead>
                    <tbody>
                       
                        <tr>
                            <td>1</td>
                            <td>Busi ANu</td>
                            <td>
                                <a href="" class="btn btn-secondary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                      </svg>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
   </div>
</div>


@endsection