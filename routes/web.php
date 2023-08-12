<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route guest
Route::middleware(['guest'])->group(function() {
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/products/{id}', [ProductController::class], 'show');
    Route::get('/contacts', function() {
        return view('contacts');
    })->name('contacts.index');
});


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
    });

});



// Route::middleware('isLogin')->group(function() {
//     Route::prefix('/admin')->group(function() {
//         Route::controller(ProductController::class)->group(function (){
//             Route::get('/products', 'index')->name('products.index');
//             Route::post('/products/create', 'store');
//             Route::put('/products/{id}', 'update');
//             Route::delete('/products/{id}/delete', 'destroy');
//         });
//     });
    
//     Route::controller(BrandController::class)->group(function() {
//         Route::get('/brands', 'index');
//     });

// });

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
