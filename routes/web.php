<?php

use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/shop_grid',[HomeController::class,'shop_grid'])->name('shop_grid');
Route::get('/product',[HomeController::class,'products'])->name('products');
Route::get('/post',[HomeController::class,'post'])->name('post');
Route::get('/cart',[HomeController::class,'cart'])->name('cart');
Route::get('/checkout',[HomeController::class,'checkout'])->name('checkout');
Route::get('/account',[HomeController::class,'account'])->name('account');
Route::get('/track_order',[HomeController::class,'track_order'])->name('track_order');
Route::get('/compare',[HomeController::class,'compare'])->name('compare');
Route::get('/blog',[HomeController::class,'blog'])->name('blog');
Route::get('/contact_us',[HomeController::class,'contact_us'])->name('contact_us');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
