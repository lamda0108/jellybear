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


Auth::routes();

Route::get('/', [App\Http\Controllers\LandingPageController::class, 'index'])->name('landingPage');
// product url
Route::get('/product/{slug}',[App\Http\Controllers\ProductController::class, 'show'] )->name('product.show');
//cart page
Route::get('/cartPage', [App\Http\Controllers\CartController::class, 'showCart'])->name('cart.show');
// cart update add quantity
Route::get('/cart/add/{product}', [App\Http\Controllers\CartController::class, 'addCart'])->name('cart.add');
// cart update minus quantity
Route::get('/cart/minus/{product}', [App\Http\Controllers\CartController::class, 'minusCart'])->name('cart.minus');
// remove an item from the cart
Route::get('/cart/remove/{product}', [App\Http\Controllers\CartController::class, 'removeCart'])->name('cart.remove');
// category url
Route::get('/{slug}',[App\Http\Controllers\CategoryController::class, 'show'] )->name('category.show');
// store a review
Route::post('/reviews', [App\Http\Controllers\ProductReviewController::class, 'store'])->name('reviews.store');
// add item to the cart
Route::get('/addToCart/{product}', [App\Http\Controllers\CartController::class, 'addToCart'])->name('add.cart');

