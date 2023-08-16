<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::controller(ProductController::class)->group(function (){
    Route::get('/eloquent/local/scope','QueryLocalScope')->name('local.scope');

});
Route::controller(HomeController::class)->group(function (){
    Route::get('/eloquent/global/scope','QueryGlobalScope')->name('global.scope');
});
