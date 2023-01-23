<?php

namespace App\Http\Controllers;

use App\Models\FoodBlogger;
use App\Models\RecommendedBy;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class adminController extends Controller
{
    public function loginView(){
        return view('Admin.adminLogin');
    }

    public function login(Request $request){
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($credentials, true) == true){
            if($request->remember){
                Cookie::queue('userEmail', "$request->email", 60);
            }
            return redirect()->route('home');
        }else{
            return redirect()->back()->withErrors([
                'email' => 'Invalid Credentials! Log In with Registered Admin Email and Password',
                'password' => 'Invalid Credentials! Log In with Registered Admin Email and Password'
            ]);
        }
    }

    public function logout(){
        Auth::logout();
        Cookie::queue(Cookie::forget('userEmail'));
        return redirect()->route('home');
    }

    public function manageRestaurant(){
        $restaurants = Restaurant::paginate(10)->withQueryString();

        return view('Admin.manageRestaurant', compact('restaurants'));
    }

    public function manageFoodBlogger(){
        $foodBloggers = FoodBlogger::paginate(10)->withQueryString();

        return view('Admin.manageFoodBlogger', compact('foodBloggers'));
    }

    public function deleteRestaurant(Request $request){
        Restaurant::where('id', $request->id)->delete();
        RecommendedBy::where('restaurant_id', $request->id)->delete();

        return redirect()->route('manageRestaurant');
    }

    public function deleteFoodBlogger(Request $request){
        FoodBlogger::where('id', $request->id)->delete();
        RecommendedBy::where('food_blogger_id', $request->id)->delete();

        return redirect()->route('manageFoodBlogger');
    }

    public function searchRestaurant(Request $request){
        $search_restaurant_name = $request->search_restaurant_name;

        $search_results = Restaurant::where('restaurant_name', 'LIKE', "%$search_restaurant_name%")->paginate(10)->withQueryString();

        return view('Admin.adminSearchRestaurantResult', compact('search_results'));
    }

    public function searchFoodBlogger(Request $request){
        $search_food_blogger_name = $request->search_food_blogger_name;

        $search_results = FoodBlogger::where('food_blogger_name', 'LIKE', "%$search_food_blogger_name%")->paginate(10)->withQueryString();

        return view('Admin.adminSearchFoodBloggerResult', compact('search_results'));
    }
}
