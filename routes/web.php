<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/contacts', function() {
    return view('contacts');
})->name('contacts.index');


// TODO: route dibawah diexecute setelah Login, buat middleware

Route::get('/admin', [AdminController::class, 'index']);

Route::controller(ProductController::class)->group(function (){
    Route::get('/products', 'index')->name('products.index');
    Route::post('/products/create', 'store');
    Route::put('/products/{id}', 'update');
    Route::delete('/products/{id}/delete', 'destroy');
});

Route::controller(BrandController::class)->group(function() {
    Route::get('/brands', 'index');

});
