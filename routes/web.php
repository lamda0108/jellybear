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
// userpage
Route::get('/profile', [App\Http\Controllers\Auth\UserController::class, 'show'])->name('user.show');
//logout
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
Route::get('/', [App\Http\Controllers\LandingPageController::class, 'index'])->name('landingPage');
// product url
Route::get('/product/{slug}',[App\Http\Controllers\ProductController::class, 'show'] )->name('product.show');
// search products
Route::get('/search',[App\Http\Controllers\ProductController::class, 'searchProducts'] )->name('product.search');
//cart page
Route::get('/cartPage', [App\Http\Controllers\CartController::class, 'showCart'])->name('cart.show');
// cart update add quantity
Route::get('/cart/add/{product}', [App\Http\Controllers\CartController::class, 'addCart'])->name('cart.add');
// cart update minus quantity
Route::get('/cart/minus/{product}', [App\Http\Controllers\CartController::class, 'minusCart'])->name('cart.minus');
// remove an item from the cart
Route::get('/cart/remove/{product}', [App\Http\Controllers\CartController::class, 'removeCart'])->name('cart.remove');
// cart checkout
Route::get('/checkout/{amount}', [App\Http\Controllers\CartController::class, 'checkoutCart'])->name('cart.checkout');
// submit the payment
Route::post('/charge', [App\Http\Controllers\CartController::class, 'charge'])->name('cart.charge');
// category url
Route::get('/{slug}',[App\Http\Controllers\CategoryController::class, 'show'] )->name('category.show');
// store a review
Route::post('/reviews', [App\Http\Controllers\ProductReviewController::class, 'store'])->name('reviews.store');
// add item to the cart
Route::get('/addToCart/{product}', [App\Http\Controllers\CartController::class, 'addToCart'])->name('add.cart');

