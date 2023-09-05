@extends('admin.layout.app')
@section('content')
<h3>Dashboard</h3>
<div class="row mx-auto">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-text">Web Visitors</h5>
                <canvas id="myChart"></canvas>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-text">Reports</h5>
                <canvas id="chart2"></canvas>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                       <tr>
                        <td>
                            ID
                        </td>
                        <td>
                            Product Name
                        </td>
                        <td>
                            Part Number
                        </td>
                        <td>
                            Description
                        </td>
                        <td>
                            Car Brand
                        </td>
                        <td>
                            Car Year
                        </td>
                       </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td><a href="{{ route('show.product', $product->id) }}">{{ $product->name }}</a></td>
                            <td>{{ $product->part_number }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->brand->brand_name }}</td>
                            <td>{{ $product->car_year }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



@endsection