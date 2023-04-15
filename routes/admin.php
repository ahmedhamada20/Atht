<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\SliderController;
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

});



