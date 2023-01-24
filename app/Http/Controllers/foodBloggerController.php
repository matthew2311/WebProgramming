<?php

namespace App\Http\Controllers;

use App\Models\FoodBlogger;
use App\Models\RecommendedBy;
use Illuminate\Http\Request;

class FoodBloggerController extends Controller
{
    public function foodBloggerIndex()
    {
        $foodBloggers = FoodBlogger::orderBy('food_blogger_name')->paginate(9)->withQueryString();
        $recommend = RecommendedBy::all()->groupBy('food_blogger_id');

        foreach ($recommend as $r) {
            $recommendationTotal = 0;
            $foodBloggerID = 0;
            foreach ($r as $r1) {
                $recommendationTotal += 1;
            }
            $r->recommendationTotal = $recommendationTotal;
            foreach ($r as $r2) {
                $foodBloggerID = $r2->food_blogger_id;
                break;
            }
            $r->foodBloggerID = $foodBloggerID;
        }

        return view('Customer.FoodBlogger.foodBloggerList', compact('foodBloggers', 'recommend'));
    }

    public function foodBloggerDetail(Request $request)
    {
        $foodBlogger = FoodBlogger::where('id', $request->id)->first();
        $foodBloggerRec = RecommendedBy::where('food_blogger_id', $request->id)->get();

        return view('Customer.FoodBlogger.foodBloggerDetail', compact('foodBlogger', 'foodBloggerRec'));
    }
}
