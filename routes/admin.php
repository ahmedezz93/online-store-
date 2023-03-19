<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\AdsController;
use App\Http\Controllers\admin\AttributeController;
use App\Http\Controllers\admin\BrandController;
use App\Http\Controllers\admin\CategoriesController;
use App\Http\Controllers\admin\DashboardAdminController;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\OptionController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\ProfileController;
use App\Http\Controllers\admin\RoleController;
use App\Http\Controllers\admin\SectionController;
use App\Http\Controllers\admin\SettingController;
use App\Http\Controllers\admin\SliderController;
use App\Http\Controllers\admin\TagsController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\site\CartController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

//==================================dashboard controller==================================================
        Route::group(['middleware'=>'auth:admin',"prefix"=>"admin"],function(){

            Route::get('dashboard',[DashboardAdminController::class,'index'])->name('admin.dashboard');


//==================================setting controller==================================================

Route::group(["prefix"=>"settings"],function(){

    Route::get('shippings_type/{type}',[SettingController::class,'shippings'])->name('shippings_type');
    Route::post('shipping_type_update',[SettingController::class,'shipping_update'])->name('shipping_update');
    Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');
      });
    //==================================profile controller==================================================
    Route::get('edit_profile',[ProfileController::class,'edit_profile'])->name('edit_profile');
    Route::post('update_profile',[ProfileController::class,'update_profile'])->name('update_profile');

    //==================================categories controller==================================================
    Route::get('categories',[CategoriesController::class,'index'])->name('categories');
    Route::get('create_categories',[CategoriesController::class,'create'])->name('create_categories');
    Route::post('store_categories',[CategoriesController::class,'store'])->name('store_categories');
    Route::get('edit_categories/{id}',[CategoriesController::class,'edit'])->name('edit_categories');
    Route::post('update_categories',[CategoriesController::class,'update'])->name('update_categories');
    Route::get('delete_categories/{id}',[CategoriesController::class,'destroy'])->name('delete_categories');
    //==================================sections controller==================================================
    Route::get('sections',[SectionController::class,'index'])->name('sections');
    Route::get('create_section',[SectionController::class,'create'])->name('create_section');
    Route::post('store_section',[SectionController::class,'store'])->name('store_section');
    Route::get('edit_section/{id}',[SectionController::class,'edit'])->name('edit_section');
    Route::post('update_section',[SectionController::class,'update'])->name('update_section');
    Route::get('delete_section/{id}',[SectionController::class,'destroy'])->name('delete_section');
    //==================================Brands controller==================================================
    Route::group(["prefix"=>"brands"],function(){
        Route::get('brands',[BrandController::class,'index'])->name('brands');
        Route::get('create_brands',[BrandController::class,'create'])->name('create_brands');
        Route::post('store_brands',[BrandController::class,'store'])->name('store_brands');
        Route::get('edit_brands/{id}',[BrandController::class,'edit'])->name('edit_brands');
        Route::post('update_brands',[BrandController::class,'update'])->name('update_brands');
        Route::get('delete_brands/{id}',[BrandController::class,'destroy'])->name('delete_brands');

    });
    //==================================Tags Controller==================================================

    Route::group(["prefix"=>"tags"],function(){

    Route::get('tags',[TagsController::class,'index'])->name('tags');
    Route::get('create_tags',[TagsController::class,'create'])->name('create_tags');
    Route::post('store_tags',[TagsController::class,'store'])->name('store_tags');
    Route::get('edit_tags/{id}',[TagsController::class,'edit'])->name('edit_tags');
    Route::post('update_tags',[TagsController::class,'update'])->name('update_tags');
    Route::get('delete_tags/{id}',[TagsController::class,'destroy'])->name('delete_tags');

    });


    //==================================Products Controller==================================================

    Route::group(["prefix"=>"products"],function(){

        Route::get('products',[ProductController::class,'index'])->name('products');

        Route::get('create_products',[ProductController::class,'create'])->name('create_products');
        Route::post('store_products',[ProductController::class,'store'])->name('store_products');
        Route::get('delete_products/{id}',[ProductController::class,'destroy'])->name('delete_products');


        Route::get('get_price/{id}',[ProductController::class,'get_price'])->name('get_price');
        Route::post('store_price',[ProductController::class,'store_price'])->name('store_price');

        Route::get('get_stock/{id}',[ProductController::class,'get_stock'])->name('get_stock');
        Route::post('store_stock',[ProductController::class,'store_stock'])->name('store_stock');

        Route::get('add_image/{id}',[ProductController::class,'add_image'])->name('add_image');
        Route::post('image_in_folder',[ProductController::class,'image_in_folder'])->name('image_in_folder');
        Route::post('save_image',[ProductController::class,'save_image'])->name('save_image');

        });

    //==================================attributes controller==================================================
    Route::group(["prefix"=>"attributes"],function(){
        Route::get('attributes',[AttributeController::class,'index'])->name('attributes');
        Route::get('create_attributes',[AttributeController::class,'create'])->name('create_attributes');
        Route::post('store_attributes',[AttributeController::class,'store'])->name('store_attributes');
        Route::get('edit_attributes/{id}',[AttributeController::class,'edit'])->name('edit_attributes');
        Route::post('update_attributes',[AttributeController::class,'update'])->name('update_attributes');
        Route::get('delete_attributes/{id}',[AttributeController::class,'destroy'])->name('delete_attributes');

    });

    //==================================options controller==================================================
    Route::group(["prefix"=>"options"],function(){
        Route::get('options',[OptionController::class,'index'])->name('options');
        Route::get('create_options',[OptionController::class,'create'])->name('create_options');
        Route::post('store_options',[OptionController::class,'store'])->name('store_options');
        Route::get('edit_options/{id}',[OptionController::class,'edit'])->name('edit_options');
        Route::post('update_options',[OptionController::class,'update'])->name('update_options');
        Route::get('delete_options/{id}',[OptionController::class,'destroy'])->name('delete_options');

    });

    //==================================Sliders Controller==================================================

    Route::group(["prefix"=>"sliders"],function(){
        Route::get('sliders',[SliderController::class,'index'])->name('sliders');
        Route::get('create_sliders',[SliderController::class,'create'])->name('create_sliders');
        Route::post('photos_in_folder',[SliderController::class,'image_in_folder'])->name('photos_in_folder');
        Route::post('store_sliders',[SliderController::class,'store'])->name('store_sliders');
        Route::get('delete_sliders/{id}',[SliderController::class,'destroy'])->name('delete_sliders');

    });

    //==================================Role Controller==================================================
    Route::group(["prefix"=>"roles"],function(){
        Route::get('roles',[RoleController::class,'index'])->name('roles');
        Route::get('create_roles',[RoleController::class,'create'])->name('create_roles');
        Route::get('edit_roles/{id}',[RoleController::class,'edit'])->name('edit_roles');
        Route::post('update_roles',[RoleController::class,'update'])->name('update_roles');
        Route::get('delete_roles/{id}',[RoleController::class,'destroy'])->name('delete_roles');
        Route::post('store_roles',[RoleController::class,'store'])->name('store_roles');

    });

//==================================admin Controller==================================================

Route::group(["prefix"=>"users"],function(){
    Route::get('users',[UserController::class,'index'])->name('users');
    Route::get('create_users',[UserController::class,'create'])->name('create_users');
    Route::get('edit_users/{id}',[UserController::class,'edit'])->name('edit_users');
    Route::post('update_users',[UserController::class,'update'])->name('update_users');
    Route::get('delete_users/{id}',[UserController::class,'destroy'])->name('delete_users');
    Route::post('store_users',[UserController::class,'store'])->name('store_users');

});

//==================================admin Controller==================================================

Route::group(["prefix"=>"ads"],function(){
    Route::get('ads',[AdsController::class,'index'])->name('ads');
    Route::get('create_ads',[AdsController::class,'create'])->name('create_ads');
    Route::get('delete_ads/{id}',[AdsController::class,'destroy'])->name('delete_ads');
    Route::post('store_ads',[AdsController::class,'store'])->name('store_ads');
    Route::post('save_images',[AdsController::class,'save_images'])->name('save_images');

});




            });



});



Route::group(["middleware"=>"guest:admin"],function(){


    Route::get('admin.login',[LoginController::class,'index'])->name('admin.login');
    Route::post('store_login',[LoginController::class,'store_login'])->name('store_login');

});

?>

