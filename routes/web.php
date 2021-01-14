<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});


Route::get('/product', function () {
    return ['product' => 'orange'];
})->name('product');

Route::get('/product/{productName}/{id}', function ($productName, $id) {
    return "Number of items : $id $productName";
})->name('ProdCount');

Route::get('/product/{productName}/{id?}', function ($productName, $id = 1) {
    return "Number of items : $id $productName";
});

Route::get('redirect', function () {
    return redirect()->route('product');
});
Route::get('redirect2', function () {
    return redirect()->route('ProdCount', ['productName' => 'Banana', 'id' => 5]);
});

Route::get('page', [\App\Http\Controllers\IndexController::class, 'index'])->name('page_route');
Route::get('show', [\App\Http\Controllers\IndexController::class, 'show'])->name('show_route');
