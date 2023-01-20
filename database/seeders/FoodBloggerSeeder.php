<?php

namespace Database\Seeders;

use App\Models\FoodBlogger;
use Illuminate\Database\Seeder;

class FoodBloggerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $food_bloggers = [
            [
                "id" => 1,
                "food_blogger_name" => "Nex Carlos",
                "food_blogger_description" => "Nex Carlos lahir pada tanggal 4 November 1986. Youtuber kuliner ini menargetkan tempat makanan enak tersembunyi atau yang sering disebut Hidden Gem. Berawal dari video 'CUMA NASI SAMA TELOR TAPI YANG MAKAN RAME!!!!'  yang membuatnya terkenal dengan lebih dari 18 juta views, ia menjadi youtuber kuliner sampai saat ini dan membuka usaha kuliner 'Ayam Gedebuk' dan 'Minum Cui'.",
                "food_blogger_ig_link" => "https://www.instagram.com/nexcarlos/",
                "food_blogger_tiktok_link" => "https://www.tiktok.com/@nex.carlos",
                "food_blogger_youtube_link" => "https://www.youtube.com/@NexCarlos",
                "food_blogger_image" => "https://media.matamata.com/thumbs/2022/01/24/66731-profil-nex-carlos-instagramnexcarlos/745x489-img-66731-profil-nex-carlos-instagramnexcarlos.jpg",
            ],
            [
                "id" => 2,
                "food_blogger_name" => "Ken & Grat",
                "food_blogger_description" => "Ken & Grat merintis karir sebagai Youtuber sejak 29 September 2015 yang diawali dengan hobi mereka untuk makan. Sampai saat ini, Ken & Grat telah memiliki 2,69 juta subscriber dan memiiki beberapa bisnis di bidang kuliner (Nyayap) dan real estate (Wangsa Serpong). ",
                "food_blogger_ig_link" => "https://www.instagram.com/kenandgrat/",
                "food_blogger_tiktok_link" => "https://www.tiktok.com/@kenandgratt",
                "food_blogger_youtube_link" => "https://www.youtube.com/@Kenandgrat",
                "food_blogger_image" => "https://images.bisnis.com/posts/2020/07/02/1260641/img-20200702-wa0027_copy_800x618.jpg",
            ]
        ];

        foreach($food_bloggers as $food_blogger){
            FoodBlogger::insert($food_blogger);
        }
    }
}
