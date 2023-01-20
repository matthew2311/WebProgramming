<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $restaurants = [
            [
                "id" => 1,
                "restaurant_name" => "Gocha Gocha Sunter",
                "restaurant_address" => "Jl. Danau Agung 2 No.73, RT.10/RW.11, Sunter Agung, Kec. Tj. Priok, Jakarta, Daerah Khusus Ibukota Jakarta 14350",
                "restaurant_city" => "Jakarta Utara",
                "restaurant_gmaps" => "https://goo.gl/maps/64mZudGBAaurs8vy7",
                "restaurant_whatsapp_link" => "https://wa.me/082283076242",
                "restaurant_instagram_link" => "https://www.instagram.com/gochagocha.id/",
                "restaurant_tiktok_link" => "",
                "restaurant_image" => "https://anakjajan.files.wordpress.com/2017/10/dscf4555.jpg?w=810",
                "restaurant_category_id" => 2,
            ]
        ];

        foreach($restaurants as $restaurant){
            Restaurant::insert($restaurant);
        }
    }
}
