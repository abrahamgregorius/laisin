<?php

namespace App\Http\Controllers;

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

        dd($products);
        return view('products', compact('products'));
    } 

    public function all_category(){
        return view('categories');
    }

    public function all_brands(){
        return view('brands');
    }

    public function all_years(){
        return view('years');
    }
}
