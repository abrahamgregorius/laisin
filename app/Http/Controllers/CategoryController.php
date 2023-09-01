<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Crypt;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
    
        return view('admin.categories.index', compact('categories'));
    }

    public function category_search(Request $request){
        if($request->ajax()){
            if($request->has('value_to_search')){
                $categoryToSearch = Category::where('name','like','%'.$request->value_to_search.'%')->get();
                return response()->json($categoryToSearch);
                
            }
            return json_encode("Tidak Ada Data Yang Masuk Bjir");
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Category::create([
            'name' => $request->category_name,
        ]);

        return redirect(route('index.categories'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category, string $slug)
    {
        $data = Category::where('slug', $slug)->first();
        $productContain = Product::where('category_id',$data->id)->get();
        return view('admin.categories.show', compact('data','productContain'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category, string $slug)
    {
        $data = Category::where('slug', $slug)->first();
        return view('admin.categories.update', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category, string $slug)
    {
        $category = Category::findOrFail($slug);
        $category->name = $request->category_name;
        $category->save();

        return redirect(route('index.categories'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category, string $id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect(route('index.categories'));
    }
}
