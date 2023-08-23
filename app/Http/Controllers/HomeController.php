<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

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

    public function show_per_product(String $slug){
        $product = Product::where('slug',$slug)->first();
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
}
