<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\RecommendedBy;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class restaurantController extends Controller
{
    public function restaurantIndex(){
        $restaurants = RecommendedBy::all()->shuffle();

        return view('restaurantRecommendation', compact('restaurants'));
    }

    public function restaurantDetail(Request $request){
        $restaurant_detail = RecommendedBy::where('restaurant_id', $request->id)->get();

        return view('restaurantDetail', compact('restaurant_detail'));
    }

    public function categoryIndex(Request $request){
        $restaurantCategory = Restaurant::where('restaurant_category_id', $request->id)->get();

        $categoryName = Category::where('id', $request->id)->first();

        return view('categoryDetail', compact('restaurantCategory', 'categoryName'));
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

        return view('location');
    }

    public function restaurantLocation(Request $request){
        $restaurantLoc = Restaurant::where('restaurant_city', $request->loc)->get()->shuffle();
        $loc = $request->loc;

        return view('recommendationByLocation', compact('restaurantLoc', 'loc'));
    }
}
