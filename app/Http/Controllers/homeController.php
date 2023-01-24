<?php

namespace App\Http\Controllers;

use App\Models\FoodBlogger;
use App\Models\RecommendedBy;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function search(Request $request)
    {
        $search_food_blogger_name = $request->search_food_blogger_name;

        $search_results = FoodBlogger::where('food_blogger_name', 'LIKE', "%$search_food_blogger_name%")->paginate(9)->withQueryString();

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

        return view('Customer.searchResult', compact('search_results', 'recommend'));
    }
}
