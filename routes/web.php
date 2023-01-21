<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\restaurantController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [homeController::class, 'home'])->name('home');
Route::get('/restaurantdetail', [restaurantController::class, 'detail'])->name('restaurant_detail');

