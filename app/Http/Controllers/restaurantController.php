<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class restaurantController extends Controller
{
    public function detail(){
        return view('restaurantDetail');
    }
}
