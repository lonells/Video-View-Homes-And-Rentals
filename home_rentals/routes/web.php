<?php

use Illuminate\Support\Facades\Route;
// use DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//  Route::get('/', function () {
//      \Artisan::call('config:clear');
//      });



Route::get('/', function () {
    return view('index');
});

Route::get('/aboutus', function () {
    return view('about_us');
});

Route::get('/bid', function () {
    return view('bid');
});

Route::get('/price', function () {
    return view('price');
});

Route::get('/countries', function () {

    $data=DB::table('country')->get();
    return view('countries',compact('data'));
});

Route::get('/states/{id}', [App\Http\Controllers\ProductController::class, 'statesget'])->name('statesget');
Route::get('/city/{id}', [App\Http\Controllers\ProductController::class, 'cityget'])->name('cityget');


Route::get('/listing', function () {
    return view('listing');
});

Route::get('/serviceform', function () {
    return view('service_form');
});

Route::get('/uploadservice', function () {
    return view('uploadservice_product');
});


// Product 
Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])->name('products');

Route::get('/filter/{category}', [App\Http\Controllers\ProductController::class, 'category'])->name('category');

Route::get('/productdetail/{id}', [App\Http\Controllers\ProductController::class, 'product_detail'])->name('product_detail');

Route::get('/cityproducts/{id}', [App\Http\Controllers\ProductController::class, 'cityproducts'])->name('cityproducts');

// Product 