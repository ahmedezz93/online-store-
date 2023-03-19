<?php

use App\Http\Controllers\site\CartController;
use App\Http\Controllers\site\CartSiteController;
use App\Http\Controllers\site\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\site\LoginSiteController;
use App\Http\Controllers\site\PaymentController;
use App\Http\Controllers\site\ProductSiteController;
use App\Http\Controllers\site\WishlistController;

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


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], function(){

//=========================HomeController==================================================
Route::get('/',[HomeController::class,'home'])->name('home');


//=========================ProductController==================================================

Route::get('get_products_site/{slug}',[ProductSiteController::class,'get_products'])->name('get_products_site');
Route::get('product_details/{slug}',[ProductSiteController::class,'product_details'])->name('product_details');
Route::post('search_results',[ProductSiteController::class,'search_results'])->name('search_results');


//=========================WishlistController==================================================

Route::post('store_wishlist',[WishlistController::class,'store_wishlist'])->name('store_wishlist');
Route::get('wishlists',[WishlistController::class,'index'])->name('wishlists');
Route::post('wishlist.destroy',[WishlistController::class,'delete'])->name('wishlist.destroy');

//=========================cartlist Controller==================================================
Route::post('add_to_cart',[CartSiteController::class,'add_to_cart'])->name('add_to_cart');
Route::get('basket',[CartSiteController::class,'basket'])->name('basket');
Route::post('delete_from_cart',[CartSiteController::class,'delete_from_cart'])->name('delete_from_cart');
Route::get('total_cartlists',[CartSiteController::class,'total_cartlists'])->name('total_cartlists');
Route::post('quantity',[CartSiteController::class,'quantity'])->name('quantity');

//=========================payment controller==================================================
Route::post('proceed_payment',[PaymentController::class,'proceed_payment'])->name('proceed_payment');

    Route::post('order_payment',[PaymentController::class,'order_payment'])->name('order_payment');

    Route::get('get_payment_callback',[PaymentController::class,'get_payment_callback'])->name('get_payment_callback');
    Route::get('get_payment_error',[PaymentController::class,'get_payment_error'])->name('get_payment_error');


//=========================Site_loginController==================================================

    Route::get('users_login',[LoginSiteController::class,'login'])->name('user_login');
    Route::get('user_register',[LoginSiteController::class,'register'])->name('user_register');
    Route::post('store_register',[LoginSiteController::class,'store_register'])->name('store_register');
    Route::post('login_user',[LoginSiteController::class,'store'])->name('login_user');



    Route::post('user_logout', [LoginSiteController::class, 'destroy'])
                ->middleware('auth')
                ->name('user_logout');
            });
