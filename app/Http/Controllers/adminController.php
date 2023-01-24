<?php

namespace App\Http\Controllers;

use App\Models\FoodBlogger;
use App\Models\RecommendedBy;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function loginView()
    {
        return view('Admin.adminLogin');
    }

    public function login(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($credentials, true) == true) {
            if ($request->remember) {
                Cookie::queue('userEmail', "$request->email", 60);
                Cookie::queue('userPassword', "$request->password", 60);
            }
            return redirect()->route('home');
        } else {
            return redirect()->back()->withErrors([
                'email' => 'Invalid Credentials! Log In with Registered Admin Email and Password',
                'password' => 'Invalid Credentials! Log In with Registered Admin Email and Password'
            ]);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }

    public function manageRestaurant()
    {
        $restaurants = Restaurant::paginate(5)->withQueryString();

        return view('Admin.manageRestaurant', compact('restaurants'));
    }

    public function manageFoodBlogger()
    {
        $foodBloggers = FoodBlogger::paginate(3)->withQueryString();

        return view('Admin.manageFoodBlogger', compact('foodBloggers'));
    }

    public function deleteRestaurant(Request $request)
    {
        RecommendedBy::where('restaurant_id', $request->id)->delete();

        Restaurant::where('id', $request->id)->delete();

        return redirect()->route('manageRestaurant')->with('success', 'Restoran berhasil dihapus');
    }

    public function deleteFoodBlogger(Request $request)
    {
        RecommendedBy::where('food_blogger_id', $request->id)->delete();
        FoodBlogger::where('id', $request->id)->delete();

        return redirect()->back()->with('success', 'Food Blooger berhasil dihapus');
    }

    public function searchRestaurant(Request $request)
    {
        $search_restaurant_name = $request->search_restaurant_name;

        $search_results = Restaurant::where('restaurant_name', 'LIKE', "%$search_restaurant_name%")->paginate(6)->withQueryString();

        return view('Admin.adminSearchRestaurantResult', compact('search_results'));
    }

    public function searchFoodBlogger(Request $request)
    {
        $search_food_blogger_name = $request->search_food_blogger_name;

        $search_results = FoodBlogger::where('food_blogger_name', 'LIKE', "%$search_food_blogger_name%")->paginate(6)->withQueryString();

        return view('Admin.adminSearchFoodBloggerResult', compact('search_results'));
    }

    public function addRestaurantView()
    {
        return view('Admin.addRestaurant');
    }

    public function addRestaurantLogic(Request $request)
    {
        $request->validate([
            'restaurant_name' => 'required|min:3',
            'restaurant_address' => 'required',
            'restaurant_city' => 'required',
            'restaurant_gmaps' => 'required',
            'restaurant_whatsapp_link' => 'required',
            'restaurant_image' => 'required|mimes:png,jpg,jpeg',
            'restaurant_category_id' => 'required'
        ]);

        $original_name = $request->file('restaurant_image')->getClientOriginalName();
        $original_ext = $request->file('restaurant_image')->getClientOriginalExtension();
        $restaurant_image_filename = $original_name . time() . '.' . $original_ext;

        $request->file('restaurant_image')->storeAs('public/images/restaurant', $restaurant_image_filename);
        $restaurant_image_file = 'storage/images/restaurant/' . $restaurant_image_filename;

        DB::table('restaurants')->insert([
            'restaurant_name' => $request->restaurant_name,
            'restaurant_address' => $request->restaurant_address,
            'restaurant_city' => $request->restaurant_city,
            'restaurant_gmaps' => $request->restaurant_gmaps,
            'restaurant_whatsapp_link' => $request->restaurant_whatsapp_link,
            'restaurant_instagram_link' => $request->restaurant_instagram_link,
            'restaurant_tiktok_link' => $request->restaurant_tiktok_link,
            'restaurant_gofood' => $request->restaurant_gofood,
            'restaurant_grabfood' => $request->restaurant_grabfood,
            'restaurant_image' => $restaurant_image_file,
            'restaurant_category_id' => $request->restaurant_category_id
        ]);

        return redirect()->route('manageRestaurant')->with('success', 'Berhasil Menambahkan Restoran Baru');
    }

    public function updateRestaurantView(Request $request)
    {
        $restaurant = Restaurant::where('id', $request->id)->first();

        return view('Admin.editRestaurant', compact('restaurant'));
    }

    public function updateRestaurantLogic(Request $request)
    {
        $request->validate([
            'restaurant_name' => 'required|min:3',
            'restaurant_address' => 'required',
            'restaurant_city' => 'required',
            'restaurant_gmaps' => 'required',
            'restaurant_whatsapp_link' => 'required',
            'restaurant_image' => 'required|mimes:png,jpg,jpeg',
            'restaurant_category_id' => 'required'
        ]);

        $original_name = $request->file('restaurant_image')->getClientOriginalName();
        $original_ext = $request->file('restaurant_image')->getClientOriginalExtension();
        $restaurant_image_filename = $original_name . time() . '.' . $original_ext;

        $request->file('restaurant_image')->storeAs('public/images/restaurant', $restaurant_image_filename);
        $restaurant_image_file = 'storage/images/restaurant/' . $restaurant_image_filename;

        DB::table('restaurants')->where('id', '=', $request->id)->update([
            'restaurant_name' => $request->restaurant_name,
            'restaurant_address' => $request->restaurant_address,
            'restaurant_city' => $request->restaurant_city,
            'restaurant_gmaps' => $request->restaurant_gmaps,
            'restaurant_whatsapp_link' => $request->restaurant_whatsapp_link,
            'restaurant_instagram_link' => $request->restaurant_instagram_link,
            'restaurant_tiktok_link' => $request->restaurant_tiktok_link,
            'restaurant_gofood' => $request->restaurant_gofood,
            'restaurant_grabfood' => $request->restaurant_grabfood,
            'restaurant_image' => $restaurant_image_file,
            'restaurant_category_id' => $request->restaurant_category_id
        ]);

        return redirect()->route('manageRestaurant')->with('success', 'Berhasil Memperbarui Data Restoran');
    }

    public function addFoodBloggerView()
    {
        return view('Admin.addFoodBlogger');
    }

    public function addFoodBloggerLogic(Request $request)
    {
        $request->validate([
            'food_blogger_name' => 'required|min:3',
            'food_blogger_description' => 'required',
            'food_blogger_image' => 'required|mimes:jpg,jpeg,png'
        ]);

        $original_name = $request->file('food_blogger_image')->getClientOriginalName();
        $original_ext = $request->file('food_blogger_image')->getClientOriginalExtension();
        $foodBlogger_image_filename = $original_name . time() . '.' . $original_ext;

        $request->file('food_blogger_image')->storeAs('public/images/foodblogger', $foodBlogger_image_filename);
        $foodBlogger_image_file = 'storage/images/foodblogger/' . $foodBlogger_image_filename;

        DB::table('food_bloggers')->insert([
            'food_blogger_name' => $request->food_blogger_name,
            'food_blogger_description' => $request->food_blogger_description,
            'food_blogger_ig_link' => $request->food_blogger_ig_link,
            'food_blogger_tiktok_link' => $request->food_blogger_tiktok_link,
            'food_blogger_youtube_link' => $request->food_blogger_youtube_link,
            'food_blogger_image' => $foodBlogger_image_file
        ]);

        return redirect()->route('manageFoodBlogger')->with('success', 'Berhasil Menambahkan Food Blogger Baru');
    }

    public function updateFoodBloggerView(Request $request)
    {
        $foodBlogger = FoodBlogger::where('id', $request->id)->first();

        return view('Admin.editFoodBlogger', compact('foodBlogger'));
    }

    public function updateFoodBloggerLogic(Request $request)
    {
        $request->validate([
            'food_blogger_name' => 'required|min:3',
            'food_blogger_description' => 'required',
            'food_blogger_image' => 'required|mimes:jpg,jpeg,png'
        ]);

        $original_name = $request->file('food_blogger_image')->getClientOriginalName();
        $original_ext = $request->file('food_blogger_image')->getClientOriginalExtension();
        $foodBlogger_image_filename = $original_name . time() . '.' . $original_ext;

        $request->file('food_blogger_image')->storeAs('public/images/foodblogger', $foodBlogger_image_filename);
        $foodBlogger_image_file = 'storage/images/foodblogger/' . $foodBlogger_image_filename;

        DB::table('food_bloggers')->where('id', '=', $request->id)->update([
            'food_blogger_name' => $request->food_blogger_name,
            'food_blogger_description' => $request->food_blogger_description,
            'food_blogger_ig_link' => $request->food_blogger_ig_link,
            'food_blogger_tiktok_link' => $request->food_blogger_tiktok_link,
            'food_blogger_youtube_link' => $request->food_blogger_youtube_link,
            'food_blogger_image' => $foodBlogger_image_file
        ]);

        return redirect()->route('manageFoodBlogger')->with('success', 'Berhasil Memperbarui Data Food Blogger');

    }
}
