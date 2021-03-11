<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
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
    return view('home');
})->name('home');

/** Products route  */
Route::get('/produits', [ProductController::class, 'index'])->name('products.index');
Route::get('/produit/{slug}', [ProductController::class, 'show'])->name('products.show');

/** Cart route  */
Route::post('/panier/ajouter', [CartController::class, 'store'])->name('cart.store');
Route::get('/mon-panier', [CartController::class, 'index'])->name('cart.index');
/* Route::get('/vide-panier', [CartController::class, 'destroy'])->name('cart.destroy'); */
Route::delete('/panier/{rowId}', [CartController::class, 'destroy'])->name('cart.destroy');

