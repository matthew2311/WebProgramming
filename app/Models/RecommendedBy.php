<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecommendedBy extends Model
{
    use HasFactory;

    public function foodBlogger(){
        return $this->belongsTo(FoodBlogger::class, 'food_blogger_id', 'id');
    }

    public function restaurant(){
        return $this->belongsTo(Restaurant::class, 'restaurant_id', 'id');
    }
}
