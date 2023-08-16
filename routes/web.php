<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route guest
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/products', [HomeController::class, 'index_products'])->name('products.index');
Route::get('/products/categories',[HomeController::class,'all_category'])->name('categories.index');
Route::get('/products/brands',[HomeController::class,'all_brands'])->name('brands.index');
Route::get('/products/years',[HomeController::class,'all_years'])->name('brands.years');
Route::get('/products/{id}', [HomeController::class], 'show');
Route::get('/contacts', function() {return view('contacts');})->name('contacts.index');
// Route::middleware(['guest'])->group(function() {
// });


// Route admin
Route::prefix('/admin')->group(function(){
    Auth::routes();
    Route::middleware(['auth'])->group(function() {
        // Admin page
        Route::get('/', [AdminController::class, 'index'])->name('admin.index');
        
        // Entry products di admin
        Route::prefix('/products')->group(function(){
            Route::controller(ProductController::class)->group(function(){
                // Index products
                Route::get('/', 'index')->name('index.products');
                // Create product
                Route::get('/create','create')->name('create.product.index');
                Route::post('/create','store')->name('create.product');
                // Show product
                Route::get('{id}/show','show')->name('show.product');
                // Edit product
                Route::get('/{id}/edit','edit')->name('edit.product');
                Route::post('/{id}/edit','update')->name('update.product');
                
                Route::delete('{id}/delete','destroy')->name('delete.product');
            });
        });
    
        // Entry brands di admin
        Route::prefix('/brands')->group(function(){
            Route::controller(BrandController::class)->group(function(){
                // Index brands
                Route::get('/','index')->name('index.brands');
                Route::post('/','brands_search')->name('brands.search');
                // Create brand
                Route::get('/create','create')->name('create.brand.index');
                Route::post('/create','store')->name('create.brand');
                // Show brand
                Route::get('{id}/show','show')->name('show.brand');
                // Edit brand
                Route::get('/{id}/edit','edit')->name('edit.brand');
                Route::post('/{id}/edit','update')->name('update.brand');
                // Delete brand
                Route::delete('{id}/delete','destroy')->name('delete.brand');
            });
        });


        Route::prefix('/categories')->group(function(){
            Route::controller(CategoryController::class)->group(function(){
                // Index categories
                Route::get('/','index')->name('index.categories');
                // Create category
                Route::get('/create','create')->name('create.category.index');
                Route::post('/create','store')->name('create.category');
                // Show category
                Route::get('{slug}/detail','show')->name('show.category');
                // Edit category
                Route::get('/{slug}/edit','edit')->name('edit.category');
                Route::post('/{slug}/edit','update')->name('update.category');
                // Delete category
                Route::delete('{slug}/delete','destroy')->name('delete.category');
            });
        });
    });

});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
