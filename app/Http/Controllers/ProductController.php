<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();

        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $brands = Brand::all();
        return view('admin.products.create', compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Product::create([
            'name' => $request->product_name,
            'part_number' => $request->part_number,
            'description' => $request->description,
            'brand_id' => $request->brand_id,
            'brand_id' => $request->category_id,
            'car_year' => $request->car_year
        ]);

        return redirect('/admin/products');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product, string $id)
    {
        $data = Product::findOrFail($id);
        return view('admin.products.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product, string $id)
    {
        $brands = Brand::all();
        $data = Product::findOrFail($id);
        // dd($data);
        return view('admin.products.update', compact('data', 'brands'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product, string $id)
    {
        $data = Product::findOrFail($id);        
        $data->name = $request->name;
        $data->part_number = $request->part_number;
        $data->description = $request->description;
        $data->brand_id = $request->brand_id;
        $data->car_year = $request->car_year;
        $data->save();

        return redirect('/admin/products');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product, string $id)
    {
        $product_data = Product::findOrFail($id);
        $product_data->delete();
        return redirect('/admin/products');
    }
}
