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

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/restaurant/all', [RestaurantController::class, 'restaurantIndex'])->name('restaurantIndex');

Route::get('/restaurant/detail/{id}', [RestaurantController::class, 'restaurantDetail'])->name('restaurantDetail');

Route::get('/restaurant/category/{id}', [RestaurantController::class, 'categoryIndex'])->name('categoryIndex');

Route::get('/restaurant/location', [RestaurantController::class, 'restaurantLocationView'])->name('restaurantLocationView');

Route::get('/restaurant/location/{loc}', [RestaurantController::class, 'restaurantLocation'])->name('restaurantLocation');

Route::get('/foodblogger/all', [FoodBloggerController::class, 'foodBloggerIndex'])->name('foodBloggerIndex');

Route::get('/foodblogger/detail/{id}', [FoodBloggerController::class, 'foodBloggerDetail'])->name('foodBloggerDetail');

Route::get('/search', [HomeController::class, 'search'])->name('search');
