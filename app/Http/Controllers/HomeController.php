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


    public function all_category(){
        $categories = Category::all();
        return view('categories',compact('categories'));
    }

    public function all_brands(){
        $brands = Brand::all();
        return view('brands',compact('brands'));
    }

    public function all_years(){
        return view('years');
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
