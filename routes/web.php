<?php

use App\Http\Controllers\foodBloggerController;
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

Route::get('/restaurant/all', [restaurantController::class, 'restaurantIndex'])->name('restaurantIndex');

Route::get('/restaurant/detail/{id}', [restaurantController::class, 'restaurantDetail'])->name('restaurantDetail');

Route::get('/restaurant/category/{id}', [restaurantController::class, 'categoryIndex'])->name('categoryIndex');

Route::get('/restaurant/location', [restaurantController::class, 'restaurantLocationView'])->name('restaurantLocationView');

Route::get('/restaurant/location/{loc}', [restaurantController::class, 'restaurantLocation'])->name('restaurantLocation');

Route::get('/foodblogger/all', [foodBloggerController::class, 'foodBloggerIndex'])->name('foodBloggerIndex');

Route::get('/foodblogger/detail/{id}', [foodBloggerController::class, 'foodBloggerDetail'])->name('foodBloggerDetail');

Route::get('/search', [homeController::class, 'search'])->name('search');
