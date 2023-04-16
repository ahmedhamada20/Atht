<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\LatestCollectionController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\StatusController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Admin routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "Admin" middleware group. Make something great!
|
*/

// Prefix = "Admin" is Routes Servises

require __DIR__.'/auth.php';

Route::middleware(['auth','admin'])->group(function(){

    Route::get('/',[AdminController::class,'index'])->name('admin');

    Route::get('/setting',[AdminController::class,'setting'])->name('setting');
    Route::post('/updatedSetting',[AdminController::class,'updatedSetting'])->name('updatedSetting');

    Route::resource('slider',SliderController::class);
    Route::resource('category',CategoryController::class);
    Route::resource('subCategory',SubCategoryController::class);
    Route::resource('color',ColorController::class);
    Route::resource('product',ProductController::class);
    Route::resource('latestCollection',LatestCollectionController::class);
    Route::resource('blog',BlogController::class);
    Route::resource('status',StatusController::class);

});



