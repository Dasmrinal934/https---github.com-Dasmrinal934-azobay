<?php

use App\Http\Controllers\frontend\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\homeController;
use App\Http\Controllers\frontend\cartController;
use App\Http\Controllers\frontend\CheckOutController;
use App\Http\Controllers\frontend\ProductController;
use App\Http\Controllers\frontend\ShopControlle;
use App\Http\Controllers\LoginController;

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
Route::get('/',[homeController::class,'index']);
Route::get('/home',[homeController::class,'index']);
Route::get('/cart',[cartController::class,'index']);
Route::get('/login',[LoginController::class,'index']);
Route::post('/login',[LoginController::class,'login']);
Route::get('/checkout',[CheckOutController::class,'index']);
Route::get('/blog',[BlogController::class,'index']);
Route::get('/product-details',[ProductController::class,'productDetails']);
Route::get('/shop',[ShopControlle::class,'index']);

