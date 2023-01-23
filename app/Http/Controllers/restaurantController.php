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
        $restaurants = RecommendedBy::paginate(9)->withQueryString();

        return view('Customer.Restaurant.restaurantRecommendation', compact('restaurants'));
    }

    public function restaurantDetail(Request $request){
        $restaurant_detail = RecommendedBy::where('restaurant_id', $request->id)->get();

        return view('Customer.Restaurant.restaurantDetail', compact('restaurant_detail'));
    }

    public function categoryIndex(Request $request){
        $restaurantCategory = Restaurant::where('restaurant_category_id', $request->id)->get()->shuffle();

        $categoryName = Category::where('id', $request->id)->first();

        return view('Customer.Restaurant.categoryDetail', compact('restaurantCategory', 'categoryName'));
    }

    public function restaurantLocationView(){
        // $restaurantLoc = Restaurant::all()->groupBy('restaurant_city');

        // foreach($restaurantLoc as $r){
        //     $total = 0;
        //     foreach($r as $r1){
        //         $total += 1;
        //     }
        //     $r->total = $total;
        // }

        return view('Customer.Restaurant.location');
    }

    public function restaurantLocation(Request $request){
        $location = Str::replace('-', ' ', $request->loc);
        $resto = Restaurant::where('restaurant_city', Str::replace('-', ' ', $request->loc))->first();
        $restaurantLoc = Restaurant::where('restaurant_city', Str::replace('-', ' ', $request->loc))->paginate(9)->withQueryString();

        $loc = $resto->restaurant_city;

        return view('Customer.Restaurant.recommendationByLocation', compact('restaurantLoc', 'loc'));
    }
}
