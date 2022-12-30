<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/cover', function () {
    return view('landing');
});

Route::middleware(['auth', 'ceklevel:admin,customer'])->group(function () {
    Route::get('/home', [HomeController::class, 'home'])->name('home');
});

Route::get('/detail_product/{id}', [HomeController::class, 'detailproduct'])->name('detailproduct');
Route::get('/cart', [CartController::class, 'cart'])->name('cart');
Route::get('/detail_cart/{id}', [CartController::class, 'detailcart'])->name('detailcart');

Route::get('/history', function () {
    return view('history');
});

Route::get('/profile', function () {
    return view('profile');
});
// Route::post('/login', [LoginController::class, 'index']);
// Route::post('/register', [RegisterController::class, 'index']);


Auth::routes();

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
