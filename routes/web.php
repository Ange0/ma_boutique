<?php

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
Route::get('/boutique/produits', [ProductController::class, 'index'])->name('products.index');
Route::get('/boutique/produit/{slug}', [ProductController::class, 'show'])->name('products.show');
