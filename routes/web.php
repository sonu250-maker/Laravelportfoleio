<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;





Route::get('/register', [AuthController::class, 'regform']);
Route::post('/register', [AuthController::class, 'savedb']);

Route::get('/login', [AuthController::class, 'loginform']);
Route::post('/login', [AuthController::class, 'loginhandle']);

Route::get('/dashboard',[AuthController::class,'dashboard']);


Route::post('/add-to-cart', [CartController::class, 'addToCart']);
Route::get('/cart', [CartController::class, 'showCart']);

Route::get('/cart/delete/{id}', [CartController::class, 'delete'])->name('cart.delete');


Route::get('/cart/clear', [CartController::class, 'clearCart'])->name('cart.clear');
