<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::all();
        return view('admin.brands.index', compact("brands"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Brand::create([
            'brand_name' => $request->brand_name,
        ]);

        return redirect('/admin/brands');
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand, string $id)
    {
        $data = Brand::where('id', $id)->first();
        return view('admin.brands.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand, string $id)
    {
        $data = Brand::where('id', $id)->first();
        return view('admin.brands.update', compact('data')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brand $brand, string $id)
    {
        $brand = Brand::findOrFail($id);
        $brand->brand_name = $request->brand_name;
        $brand->save();

        return redirect('/admin/brands');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand, string $id)
    {
        $brand_data = Brand::findOrFail($id);
        $brand_data->delete();
        return redirect('/admin/brands');
    }
}
