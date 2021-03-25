<?php

use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckOutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

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

/** users route */
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/authenticate', [UserController::class, 'authenticate'])->name('authenticate');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');


Route::get('/', function () {
    return view('home');
})->name('home');

/** Products route  */
Route::get('/produits', [ProductController::class, 'item'])->name('products.item');
Route::get('/produit/{slug}', [ProductController::class, 'show'])->name('products.show');
Route::get('/search', [ProductController::class, 'search'])->name('products.search');

/** Cart route  */
Route::post('/panier/ajouter', [CartController::class, 'store'])->name('cart.store');
Route::get('/mon-panier', [CartController::class, 'item'])->name('cart.item');
/* Route::get('/vide-panier', [CartController::class, 'destroy'])->name('cart.destroy'); */
Route::post('panier/{rowId}', [CartController::class, 'update'])->name('cart.update');
Route::delete('/panier/{rowId}', [CartController::class, 'destroy'])->name('cart.destroy');

/** Checkout route  */
Route::middleware('auth')->group(function(){
    Route::get('/paiement', [CheckOutController::class, 'index'])->name('checkout.index');
    Route::post('/paiement', [CheckOutController::class, 'store'])->name('checkout.store');
    Route::get('/merci',[CheckOutController::class, 'thankYou'])->name('checkout.thankYou');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
