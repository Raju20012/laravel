<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Session;



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

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/login');
});

Route::view("/login","login");
Route::post("login", [UserController::class, 'login']);
Route::get("/", [ProductController::class, 'index']);
Route::get("detail/{id}", [ProductController::class, 'detail']);
Route::get("search", [ProductController::class, 'search']);
Route::post("add_to_cart", [ProductController::class, 'addToCart']);
Route::get("cardlist", [ProductController::class,'cardList']);
Route::get("removecart/{id}", [ProductController::class,'removeCart']);
Route::get("ordernow", [ProductController::class,'orderNow']);
Route::post("orderplace", [ProductController::class,'orderPlace']);
Route::get("myorder", [ProductController::class,'myOrder']);
