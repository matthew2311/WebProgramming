<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\foodBloggerController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\restaurantController;
use App\Http\Middleware\AuthCheck;
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

// Restaurant
Route::get('/restaurant/all', [RestaurantController::class, 'restaurantIndex'])->name('restaurantIndex');
Route::get('/restaurant/detail/{id}', [RestaurantController::class, 'restaurantDetail'])->name('restaurantDetail');
Route::get('/restaurant/category/{id}', [RestaurantController::class, 'categoryIndex'])->name('categoryIndex');
Route::get('/restaurant/location', [RestaurantController::class, 'restaurantLocationView'])->name('restaurantLocationView');
Route::get('/restaurant/location/{loc}', [RestaurantController::class, 'restaurantLocation'])->name('restaurantLocation');
Route::get('/search', [HomeController::class, 'search'])->name('search');

// FoodBlogger
Route::get('/foodblogger/all', [FoodBloggerController::class, 'foodBloggerIndex'])->name('foodBloggerIndex');
Route::get('/foodblogger/detail/{id}', [FoodBloggerController::class, 'foodBloggerDetail'])->name('foodBloggerDetail');


//Admin
Route::get('/admin/login', [AdminController::class, 'loginView']);
Route::post('/admin/login/post', [AdminController::class, 'login'])->name('adminLogin');
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('adminLogout');
Route::middleware('admin')->group(function () {
    Route::get('/admin/manage/restaurant', [AdminController::class, 'manageRestaurant'])->name('manageRestaurant');
    Route::get('/admin/manage/foodblogger', [AdminController::class, 'manageFoodBlogger'])->name('manageFoodBlogger');
    Route::get('/admin/manage/restaurant/search', [AdminController::class, 'searchRestaurant'])->name('searchRestaurant');
    Route::get('/admin/manage/foodblogger/search', [AdminController::class, 'searchFoodBlogger'])->name('searchFoodBlogger');
    Route::delete('/admin/manage/restaurant/{id}', [AdminController::class, 'deleteRestaurant'])->name('deleteRestaurant');
    Route::delete('/admin/manage/foodblogger/{id}', [AdminController::class, 'deleteFoodBlogger'])->name('deleteFoodBlogger');
    Route::get('/admin/manage/restaurant/add', [AdminController::class, 'addRestaurantView'])->name('addRestaurantView');
    Route::post('/admin/manage/restaurant/add/post', [AdminController::class, 'addRestaurantLogic'])->name('addRestaurantLogic');
    Route::get('/admin/manage/restaurant/update/{id}', [AdminController::class, 'updateRestaurantView'])->name('updateRestaurantView');
    Route::patch('/admin/manage/restaurant/update/post/{id}', [AdminController::class, 'updateRestaurantLogic'])->name('updateRestaurantLogic');
    Route::get('/admin/manage/foodblogger/add', [AdminController::class, 'addFoodBloggerView'])->name('addFoodBloggerView');
    Route::post('/admin/manage/foodblogger/add/post', [AdminController::class, 'addFoodBloggerLogic'])->name('addFoodBloggerLogic');
    Route::get('/admin/manage/foodblogger/update/{id}', [AdminController::class, 'updateFoodBloggerView'])->name('updateFoodBloggerView');
    Route::patch('/admin/manage/foodblogger/update/post/{id}', [AdminController::class, 'updateFoodBloggerLogic'])->name('updateFoodBloggerLogic');
});
