<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home.index');
<<<<<<< Updated upstream
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/contacts', function() {
    return view('contacts');
})->name('contacts.index');


// TODO: route dibawah diexecute setelah Login, buat middleware
Route::prefix('/admin')->group(function(){

    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    
    Route::prefix('/products')->group(function(){
        Route::controller(ProductController::class)->group(function(){
             Route::get('/','admin_index')->name('index.products');
             Route::get('/create','create')->name('create.product.index');
             Route::post('/create','store')->name('create.product');
             Route::get('{id}/show','show')->name('show.product');
             Route::get('/{id}/edit','edit')->name('edit.product');
             Route::put('/{id}','update')->name('update.product');
             Route::delete('{id}/delete','destroy')->name('delete.product');
        });
    });

    Route::prefix('/brands')->group(function(){
        Route::controller(BrandController::class)->group(function(){
            Route::get('/','index')->name('index.brands');
            Route::get('/create','create')->name('create.brand.index');
            Route::post('/create','store')->name('create.brand');
            Route::get('{id}/show','show')->name('show.brand');
            Route::get('/{id}/edit','edit')->name('edit.brand');
            Route::put('/{id}','update')->name('update.brand');
            Route::delete('{id}/delete','destroy')->name('delete.brand');
        });
    });

});


=======
Route::get('/products', function() {return view('products');})->name('products.show');
Route::get('/contacts', function() {return view('contacts');})->name('contacts.index');
Route::get('/admin', [AdminController::class, 'index']);
>>>>>>> Stashed changes

Route::middleware('isLogin')->group(function() {
    Route::prefix('/admin')->group(function() {
        Route::controller(ProductController::class)->group(function (){
            Route::get('/products', 'index')->name('products.index');
            Route::post('/products/create', 'store');
            Route::put('/products/{id}', 'update');
            Route::delete('/products/{id}/delete', 'destroy');
        });
    });
    
    Route::controller(BrandController::class)->group(function() {
        Route::get('/brands', 'index');
    });
});

<<<<<<< Updated upstream
Route::controller(BrandController::class)->group(function() {
    Route::get('/brands', 'index');
});
=======
>>>>>>> Stashed changes
