<?php



use App\Http\Controllers\AlbumController;
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



Route::get('/',function(){
    return view('albums.index');
});

            Route::group(['prefix'=>'albums'], function(){
                Route::get('index',[AlbumController::class,'index'])->name('albums.index');
                Route::get('create',[AlbumController::class,'create'])->name('albums.create');
                Route::get('createImages/{id}',[AlbumController::class,'createImages'])->name('albums.createImages');   // view page to upload images
                Route::post('upload_images/{id}',[AlbumController::class,'uploadImages'])->name('upload_images');            //upload images

                Route::post('store_images/{id}',[AlbumController::class,'storeImages'])->name('albums.store_images');

                Route::get('destroy/{id}',[AlbumController::class,'destroy'])->name('albums.destroy');
                Route::get('edit/{id}',[AlbumController::class,'edit'])->name('albums.edit');
                Route::post('update/{id}',[AlbumController::class,'update'])->name('albums.update');

                Route::Post('destroy_or_move/{id}',[AlbumController::class,'destroyOrMove'])->name('albums.destroy_or_move');
                Route::Post('move_to_folder/{id}',[AlbumController::class,'moveToFolder'])->name('albums.move_to_folder');
                Route::post('store',[AlbumController::class,'store'])->name('albums.store');


            });

    //==================================Sliders Controller==================================================

    // Route::group(["prefix"=>"sliders"],function(){
    //     Route::get('sliders',[SliderController::class,'index'])->name('sliders');
    //     Route::get('create_sliders',[SliderController::class,'create'])->name('create_sliders');
    //     Route::post('photos_in_folder',[SliderController::class,'image_in_folder'])->name('photos_in_folder');
    //     Route::post('store_sliders',[SliderController::class,'store'])->name('store_sliders');
    //     Route::get('delete_sliders/{id}',[SliderController::class,'destroy'])->name('delete_sliders');

    // });

//==================================admin Controller==================================================

// Route::group(["prefix"=>"users"],function(){
//     Route::get('users',[UserController::class,'index'])->name('users');
//     Route::get('create_users',[UserController::class,'create'])->name('create_users');
//     Route::get('edit_users/{id}',[UserController::class,'edit'])->name('edit_users');
//     Route::post('update_users',[UserController::class,'update'])->name('update_users');
//     Route::get('delete_users/{id}',[UserController::class,'destroy'])->name('delete_users');
//     Route::post('store_users',[UserController::class,'store'])->name('store_users');

// });







// Route::group(["middleware"=>"guest:admin"],function(){


//     Route::get('admin.login',[LoginController::class,'index'])->name('admin.login');
//     Route::post('store_login',[LoginController::class,'store_login'])->name('store_login');

// });

?>

