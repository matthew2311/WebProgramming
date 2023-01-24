<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable = [
        'id',
        'restaurant_name',
        'restaurant_address',
        'restaurant_city',
        'restaurant_gmaps',
        'restaurant_whatsapp_link',
        'restaurant_image',
        'restaurant_category_id',
    ];

    use HasFactory;


    public function category()
    {
        return $this->belongsTo(Category::class, 'restaurant_category_id', 'id');
    }
}
