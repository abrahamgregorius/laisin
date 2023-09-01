<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\File as FacadesFile;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();

        return view('admin.products.index', compact('products'));
    }


    public function products_search(Request $request){
        if($request->ajax()){
            if($request->has('value_to_search')){
                $brandToSearch = Product::where('name','like','%'.$request->value_to_search.'%')->with('brand')->get();
                return response()->json($brandToSearch);
                
            }
            return json_encode("Tidak Ada Data Yang Masuk Bjir");
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   $categories = Category::all();
        $brands = Brand::all();
        return view('admin.products.create', compact('brands','categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {    
        $slug = str()->slug($request->product_name);
        $request->file('thumbnail')->move("images/$slug/", "image.png");

        $validator = Validator::make([
            'name' => ['required'],
            'part_number' => ['required', 'unique:products,part_number'],
            'description' => ['nullable'],
            'brand_id' => ['required'],
            'category_id' => ['required'],
            'car_year' => ['nullable'],
            'thumbnail' => ['nullable'],
        ]);

        if($validator->fails()){
            return redirect('/admin/products/create')->with('message', $validator->errors());
        }

        Product::create([
            'name' => $request->product_name,
            'part_number' => $request->part_number,
            'description' => $request->description,
            'brand_id' => $request->brand_id,
            'category_id' => $request->category_id,
            'car_year' => $request->car_year,
            'thumbnail' => "/images/$slug/image.png",
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
        $categories = Category::all();
        $data = Product::findOrFail($id);
        // dd($data);
        return view('admin.products.update', compact('data', 'brands', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $data = Product::findOrFail($id);
        $slug = $data->slug;


        if($request->hasFile('thumbnail')){
            FacadesFile::delete(public_path("images/$slug/image.png"));
            $request->file('thumbnail')->move("images/$slug/", "image.png");
        }

        $data->name = $request->name;
        $data->part_number = $request->part_number;
        $data->description = $request->description;
        $data->category_id = $request->category_id;
        $data->brand_id = $request->brand_id;
        $data->car_year = $request->car_year;
        // $data->thumbnail = "images/$slug/image1.png";
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
