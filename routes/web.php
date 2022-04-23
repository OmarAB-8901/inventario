<?php

use Illuminate\Support\Facades\Route;

// Ruta de redireccion
use Illuminate\Support\Facades\Redirect;
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
    // return view('welcome');

    return Redirect::to("/login");
});

Auth::routes();

Route::group(['middleware'=>['auth']],function(){

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('inventario/registrarProducto', [inventario::class, 'registerProduct'])->name('registerProduct');
    Route::get('inventario/getProducts', [inventario::class, 'index'])->name('getProducts');
    Route::get('inventario/getProduct/{id}', [inventario::class, 'show'])->name('getProduct');
    Route::get('inventario/verDetalleProducto/{id}', [inventario::class, 'detailProduct'])->name('detailProduct');
    Route::post('inventario/saveProducts', [inventario::class, 'store'])->name('saveProducts');
    Route::put('inventario/updateProducts/{id}', [inventario::class, 'update'])->name('updateProducts');
    Route::delete('inventario/deleteProducts/{id}', [inventario::class, 'destroy'])->name('deleteProducts');
});
