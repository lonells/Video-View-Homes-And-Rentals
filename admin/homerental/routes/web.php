<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\EmployeeController;
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
Route::get('/', function () {
    if(\Auth::check()){
        return redirect('/viewproduct');  
    }
    else{
        return view('auth.login');
    }
    
});
Auth::routes();

Route::get('/home', function () {
    return redirect('/viewproduct');
});
/*
|--------------------------------------------------------------------------
|                                   ADMIN
|--------------------------------------------------------------------------
*/

Route::get('/admin', function () {
    if (Auth::guest()) {
        return redirect('/login');
    }
    if (Auth::user()->admin !=1) {
        return redirect('/login');
    }
    // return view('admin.product.view_productreport');
    return redirect('/viewproduct');
});

// Category 

Route::get('/addcategory', [CategoryController::class, 'addform_category'])->middleware('auth');
Route::post('/addedcategory', [CategoryController::class, 'added_category'])->middleware('auth');

Route::get('/viewcategory', [CategoryController::class, 'view_categoryreport'])->middleware('auth');

Route::get('/categoryedit/{id}', [CategoryController::class, 'editform_category'])->middleware('auth');
Route::post('/editedcategory', [CategoryController::class, 'edited_category'])->middleware('auth');

Route::get('/categorydelete/{id}', [CategoryController::class, 'category_delete'])->middleware('auth');
// Category 

/*
|--------------------------------------------------------------------------
| Product Work
|--------------------------------------------------------------------------
*/

Route::get('/addproduct', [ProductController::class, 'addform_product'])->middleware('auth');
Route::post('/addedproduct', [ProductController::class, 'added_product'])->middleware('auth');

Route::get('/viewproduct', [ProductController::class, 'view_productreport'])->middleware('auth');

Route::get('/productedit/{id}', [ProductController::class, 'editform_product'])->middleware('auth');
Route::post('/editedproduct', [ProductController::class, 'edited_product'])->middleware('auth');

Route::get('/productdelete/{id}', [ProductController::class, 'product_delete'])->middleware('auth');




Route::get('/showstates',[ProductController::class, 'states_select']);
Route::get('/showcity',[ProductController::class, 'city_select']);

/*
|--------------------------------------------------------------------------
| Product Work
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| Employee Work
|--------------------------------------------------------------------------
*/

// Route::get('/employee/index', [EmployeeController::class, 'index'])->middleware('auth');

/*
|--------------------------------------------------------------------------
| Employee Work
|--------------------------------------------------------------------------
*/
