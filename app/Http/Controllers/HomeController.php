<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function index_products() {
        $products = Product::all();
        return view('products', compact('products'));
    } 

    public function search_products(Request $request){
        if($request->ajax()){
            if($request->has('value_to_search')){
                $productToSearch = Product::where('name','like','%'.$request->value_to_search.'%')->with('category','brand')->get();
                return response()->json($productToSearch);
                
            }
            return json_encode("There's No Data To Show!");
        }
    }

    public function search_categories(Request $request){
        if($request->ajax()){
            if($request->has('value_to_search')){
                $categoryToSearch = Category::where('name','like','%'.$request->value_to_search.'%')->get();
                foreach($categoryToSearch as $perCategory){
                    $perCategory->productCount = $perCategory->products()->count();
                }
                return response()->json($categoryToSearch);
                
            }
            return json_encode("There's No Data To Show!");
        }
    }

    public function search_detail_category(Request $request){
        if($request->ajax()){
            if($request->has('value_to_search') && $request->has('current_slug')){
                $productToSearch = Product::where('category_id',$request->current_slug)->where('name','like','%'.$request->value_to_search.'%')->with('category','brand')->get();
                return response()->json($productToSearch);                
            }
            return json_encode("There's No Data To Show!");
        }
    }

   
    
    public function search_brands(Request $request){
        if($request->ajax()){
            if($request->has('value_to_search')){
                $brandToSearch = Brand::where('brand_name','like','%'.$request->value_to_search.'%')->get();
                foreach($brandToSearch as $perBrand){
                    $perBrand->productCount = $perBrand->products()->count();
                }
                return response()->json($brandToSearch);
            }
            return json_encode("There's No Data To Show!");
        }
    }

    public function search_brands_detail(Request $request){
        if($request->ajax()){
            if($request->has('value_to_search') && $request->has('current_slug')){
                $productToSearch = Product::where('brand_id', $request->current_slug)
                    ->where('name', 'like', '%' . $request->value_to_search . '%')
                    ->with('category', 'brand')
                    ->get();
                return response()->json($productToSearch);                
            }
            return response()->json(["message" => "There's No Data To Show!"]);
        }
    }

    public function search_years_detail(Request $request){
        if($request->ajax()){
            if($request->has('value_to_search') && $request->has('current_slug')){
                $productToSearch = Product::where('car_year', $request->current_slug)
                    ->where('name', 'like', '%' . $request->value_to_search . '%')
                    ->with('category', 'brand')
                    ->get();
                return response()->json($productToSearch);                
            }
            return response()->json(["message" => "There's No Data To Show!"]);
        }
    }
    
    


    public function all_category(){
        $categories = Category::all();
        return view('categories',compact('categories'));
    }

    public function all_brands(){
        $brands = Brand::with('products')->get();
        return view('brands',compact('brands'));
    }

    public function all_years(){
        $years = Product::pluck('car_year')->unique();
        $productCounts = [];
        $years->productCount = $productCounts;
        foreach ($years as $year) {
            $count = Product::where('car_year', $year)->count();
            $productCounts[$year] = $count;
        }
    
        return view('years', compact('years', 'productCounts'));
    }

    public function show_per_years(string $slug){
        $yearproducts = Product::where('car_year',$slug)->get();
        return view('showyear',compact('yearproducts','slug'));
    }    

    public function search_year(Request $request) {
        if ($request->ajax()) {
            if ($request->has('value_to_search')) {
                $yearToSearch = Product::where('car_year', 'like', '%' . $request->value_to_search . '%')
                                       ->selectRaw('car_year, COUNT(*) as product_count')
                                       ->groupBy('car_year')
                                       ->get();
    
                return response()->json($yearToSearch);
            }
            return response()->json("There's No Data To Show!");
        }
    }
    

    public function show_per_product(string $slug){
            $product = Product::where('slug',$slug)->firstOrFail();
            $productRelative = Product::where('id', '!=', $product->id)
            ->where(function ($query) use ($product) {
                $query->where('name', 'LIKE', '%' . $product->slug . '%')
                    ->orWhere('category_id', $product->category->id)
                    ->orWhere('brand_id', $product->brand_id);
            })->inRandomOrder()
            ->take(3)
            ->get();
    
        return view('productshow',compact('product','productRelative'));
    }   

    public function show_per_brand(string $slug){

        $brand = Brand::where('slug',$slug)->firstOrFail();
        return view('brandshow',compact('brand'));
    }

    public function show_category(string $slug) {
        $category = Category::where('slug', $slug)->firstOrFail();
        
        $products = Product::where('category_id', $category->id)->get();

        return view('categoryshow', compact('category', 'products'));
    }

    public function show_brand(string $slug) {
        $brand = Brand::where('slug', $slug)->firstOrFail();
        
        $products = Product::where('brand_id', $brand->id)->get();

        return view('brandshow', compact('brand', 'products'));
    }

}
