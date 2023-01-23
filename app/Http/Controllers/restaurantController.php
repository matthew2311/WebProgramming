<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\RecommendedBy;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RestaurantController extends Controller
{
    public function restaurantIndex(){
        $restaurants = RecommendedBy::paginate(10)->withQueryString();

        return view('Customer.restaurantRecommendation', compact('restaurants'));
    }

    public function restaurantDetail(Request $request){
        $restaurant_detail = RecommendedBy::where('restaurant_id', $request->id)->get();

        return view('Customer.restaurantDetail', compact('restaurant_detail'));
    }

    public function categoryIndex(Request $request){
        $restaurantCategory = Restaurant::where('restaurant_category_id', $request->id)->get()->shuffle();

        $categoryName = Category::where('id', $request->id)->first();

        return view('Customer.categoryDetail', compact('restaurantCategory', 'categoryName'));
    }

    public function restaurantLocationView(){
        // $loc1 = ;
        // $loc2 = ;

        return view('Customer.location');
    }

    public function restaurantLocation(Request $request){
        $location = Str::replace('-', ' ', $request->loc);
        $resto = Restaurant::where('restaurant_city', Str::replace('-', ' ', $request->loc))->first();
        $restaurantLoc = Restaurant::where('restaurant_city', Str::replace('-', ' ', $request->loc))->paginate(9)->withQueryString();

        $loc = $resto->restaurant_city;

        return view('Customer.recommendationByLocation', compact('restaurantLoc', 'loc'));
    }
}
