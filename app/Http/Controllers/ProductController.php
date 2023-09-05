<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert as Alert;
use Illuminate\Support\Facades\File as FacadesFile;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $perPage = request()->page == "show_all" ? 1000 : 25;
        $products = Product::paginate($perPage);
        $categories = Category::all();

        return view('admin.products.index', compact('products'));
    }


    public function products_search(Request $request){
        if($request->ajax()){
            if($request->has('value_to_search')){
                $brandToSearch = Product::where('name','like','%'.$request->value_to_search.'%')->with('brand')->get();
                return response()->json($brandToSearch);
                
            }
            return json_encode("There's Not Data To Show!");
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
        
        $validator = Validator::make($request->all(), [
            'product_name' => ['required'],
            'part_number' => ['required', 'unique:products,part_number'],
            'description' => ['nullable'],
            'brand_id' => ['required'],
            'category_id' => ['required'],
            'car_year' => ['nullable'],
            'thumbnail' => ['nullable'],
        ]);

        
        if ($validator->fails()) {
            $messages = $validator->errors()->all();
            Alert::error('Field incorrect', implode( " ", $messages));
            return redirect('/admin/products/create');
        }

        if($request->hasFile('thumbnail')){
            $request->file('thumbnail')->move("images/$slug/", "image.png");
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
      
        Alert::success('Success', 'Success Inserting Products');
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
        return view('admin.products.update', compact('data', 'brands', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Product::findOrFail($id);
        $slug = $data->slug;

        $validator = Validator::make($request->all(), [
            'name' => ['required'],
            'part_number' => ['required'],
            'description' => ['nullable'],
            'brand_id' => ['required'],
            'category_id' => ['required'],
            'car_year' => ['nullable'],
            'thumbnail' => ['nullable'],
        ]);

        if ($validator->fails()) {
            $messages = $validator->errors()->all();
            Alert::error('Field incorrect', implode( " ", $messages));
            return back();
        }


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
        $data->thumbnail = "/images/$slug/image.png";
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
        return redirect()->back();
    }
}
