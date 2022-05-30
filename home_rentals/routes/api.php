<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/start-recoding', [App\Http\Controllers\StreamController::class, 'start_recoding']);
Route::post('/stop-recoding', [App\Http\Controllers\StreamController::class, 'stop_recoding']);
Route::get('/streams', [App\Http\Controllers\StreamController::class, 'streams']);
Route::get('/ping-stream/{name}', [App\Http\Controllers\StreamController::class, 'ping_stream']);