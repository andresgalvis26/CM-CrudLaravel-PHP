<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/', [ProductsController::class, 'index']) -> name('products.index');

Route::resource('products', ProductsController::class);

/* 
Route::get('products/create', [ProductsController::class, 'create']) -> name ('products.create');

Route::post('products/create', [ProductsController::class, 'store']) -> name ('products.store');
*/

?>


