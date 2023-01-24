<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\RecommendedBy;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RestaurantController extends Controller
{
    public function restaurantIndex()
    {
        $restaurants = RecommendedBy::paginate(9)->withQueryString();

        return view('Customer.Restaurant.restaurantRecommendation', compact('restaurants'));
    }

    public function restaurantDetail(Request $request)
    {
        $restaurant_detail = RecommendedBy::where('restaurant_id', $request->id)->get();

        return view('Customer.Restaurant.restaurantDetail', compact('restaurant_detail'));
    }

    public function categoryIndex(Request $request)
    {
        $restaurantCategory_filter = Restaurant::where('restaurant_category_id', $request->id)->get()->shuffle();

        $restaurantCategory = [];

        foreach ($restaurantCategory_filter as $rf) {
            $restaurant_cat = RecommendedBy::where('restaurant_id', $rf->id)->get();
            array_push($restaurantCategory, $restaurant_cat);
        }

        $categoryName = Category::where('id', $request->id)->first();

        return view('Customer.Restaurant.categoryDetail', compact('restaurantCategory', 'categoryName'));
    }

    public function restaurantLocationView()
    {
        $loc1_total = Restaurant::where('restaurant_city', 'Jakarta Utara')->get();
        if (count($loc1_total) < 3) {
            $loc1_filter = $loc1_total;
        } else {
            $loc1_filter = Restaurant::where('restaurant_city', 'Jakarta Utara')->get()->random(3);
        }

        $loc2_total = Restaurant::where('restaurant_city', 'Jakarta Pusat')->get();
        if (count($loc2_total) < 3) {
            $loc2_filter = $loc2_total;
        } else {
            $loc2_filter = Restaurant::where('restaurant_city', 'Jakarta Pusat')->get()->random(3);
        }

        $loc3_total = Restaurant::where('restaurant_city', 'Jakarta Barat')->get();
        if (count($loc3_total) < 3) {
            $loc3_filter = $loc3_total;
        } else {
            $loc3_filter = Restaurant::where('restaurant_city', 'Jakarta Barat')->get()->random(3);
        }

        $loc1 = [];
        foreach ($loc1_filter as $lf) {
            $restaurant_jakut = RecommendedBy::where('restaurant_id', $lf->id)->get();
            array_push($loc1, $restaurant_jakut);
        }

        $loc2 = [];
        foreach ($loc2_filter as $lf) {
            $restaurant_jakpus = RecommendedBy::where('restaurant_id', $lf->id)->get();
            array_push($loc2, $restaurant_jakpus);
        }

        $loc3 = [];
        foreach ($loc3_filter as $lf) {
            $restaurant_jakbar = RecommendedBy::where('restaurant_id', $lf->id)->get();
            array_push($loc3, $restaurant_jakbar);
        }

        return view('Customer.Restaurant.location', compact('loc1', 'loc2', 'loc3'));
    }

    public function restaurantLocation(Request $request)
    {
        $location = Str::replace('-', ' ', $request->loc);
        $restaurantLoc = Restaurant::where('restaurant_city', Str::replace('-', ' ', $request->loc))->paginate(9)->withQueryString();

        if ($request->loc == "jakarta-utara") {
            $loc = "Jakarta Utara";
        } else if ($request->loc == "jakarta-barat") {
            $loc = "Jakarta Barat";
        } else if ($request->loc == "jakarta-selatan") {
            $loc = "Jakarta Selatan";
        } else if ($request->loc == "jakarta-timur") {
            $loc = "Jakarta Timur";
        } else if ($request->loc == "jakarta-pusat") {
            $loc = "Jakarta Pusat";
        }

        return view('Customer.Restaurant.recommendationByLocation', compact('restaurantLoc', 'loc'));
    }
}
