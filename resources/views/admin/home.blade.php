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
            <table class="table">
                <thead>
                   <tr>
                    <td>
                        No
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
                        Brand
                    </td>
                    <td>
                        Car Year
                    </td>
                   </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Toyota Hens</td>
                        <td>121984</td>
                        <td>Lorem ipsum dolor sit amet.</td>
                        <td>Toyota</td>
                        <td>2019</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Mitsubishi Hens</td>
                        <td>121984</td>
                        <td>Lorem ipsum dolor sit amet.</td>
                        <td>Toyota</td>
                        <td>2019</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Toyota Hens</td>
                        <td>121984</td>
                        <td>Lorem ipsum dolor sit amet.</td>
                        <td>Toyota</td>
                        <td>2019</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Toyota Hens</td>
                        <td>121984</td>
                        <td>Lorem ipsum dolor sit amet.</td>
                        <td>Toyota</td>
                        <td>2019</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Toyota Hens</td>
                        <td>121984</td>
                        <td>Lorem ipsum dolor sit amet.</td>
                        <td>Toyota</td>
                        <td>2019</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Toyota Hens</td>
                        <td>121984</td>
                        <td>Lorem ipsum dolor sit amet.</td>
                        <td>Toyota</td>
                        <td>2019</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection