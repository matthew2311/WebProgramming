<?php

namespace App\Http\Controllers;

use App\Models\FoodBlogger;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('home');
    }

    public function search(Request $request){
        $search_food_blogger_name = $request->search_food_blogger_name;

        $search_results = FoodBlogger::where('food_blogger_name', 'LIKE', "%$search_food_blogger_name%")->paginate(10)->withQueryString();

        return view('Customer.searchResult', compact('search_results'));
    }
}
