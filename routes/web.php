<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\LoginValidateController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrdersController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [InicioController::class, 'mostrarInicio'])->name('inicio');

Route::get('/signup', [SignupController::class, 'showsignupForm'])->name('signup');

Route::post('/signup', [SignupController::class, 'registrarUsuario'])->name('signup.post');

Route::get('/shop', [ShopController::class, 'showProducts'])->name('shop');

Route::post('/shop', [ShopController::class, 'addProduct1'])->name('shop1.post');

Route::post('/shop2', [ShopController::class, 'addProduct2'])->name('shop2.post');

Route::post('/shop3', [ShopController::class, 'addProduct3'])->name('shop3.post');

Route::get('/orders', [OrdersController::class, 'showOrders'])->name('orders');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');





