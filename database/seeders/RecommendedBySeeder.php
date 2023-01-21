<?php

namespace Database\Seeders;

use App\Models\RecommendedBy;
use Illuminate\Database\Seeder;

class RecommendedBySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $recommended_by = [
            [
                "id" => 1,
                "restaurant_id" => 1,
                "food_blogger_id" => 1
            ],
            [
                "id" => 2,
                "restaurant_id" => 2,
                "food_blogger_id" => 1
            ],
            [
                "id" => 3,
                "restaurant_id" => 3,
                "food_blogger_id" => 1
            ],
            [
                "id" => 4,
                "restaurant_id" => 4,
                "food_blogger_id" => 2
            ],
            [
                "id" => 5,
                "restaurant_id" => 5,
                "food_blogger_id" => 3
            ],
            [
                "id" => 6,
                "restaurant_id" => 6,
                "food_blogger_id" => 4
            ],
            [
                "id" => 7,
                "restaurant_id" => 7,
                "food_blogger_id" => 4
            ],
            [
                "id" => 8,
                "restaurant_id" => 8,
                "food_blogger_id" => 5
            ],
            [
                "id" => 9,
                "restaurant_id" => 9,
                "food_blogger_id" => 5
            ],
            [
                "id" => 10,
                "restaurant_id" => 10,
                "food_blogger_id" => 6
            ],
            [
                "id" => 11,
                "restaurant_id" => 11,
                "food_blogger_id" => 7
            ],
            [
                "id" => 12,
                "restaurant_id" => 12,
                "food_blogger_id" => 8
            ],
            [
                "id" => 13,
                "restaurant_id" => 13,
                "food_blogger_id" => 9
            ],
            [
                "id" => 14,
                "restaurant_id" => 14,
                "food_blogger_id" => 10
            ],
            [
                "id" => 15,
                "restaurant_id" => 15,
                "food_blogger_id" => 11
            ],
            [
                "id" => 16,
                "restaurant_id" => 16,
                "food_blogger_id" => 11
            ],
            [
                "id" => 17,
                "restaurant_id" => 17,
                "food_blogger_id" => 12
            ],
            [
                "id" => 18,
                "restaurant_id" => 18,
                "food_blogger_id" => 12
            ],
            [
                "id" => 19,
                "restaurant_id" => 19,
                "food_blogger_id" => 13
            ],
            [
                "id" => 20,
                "restaurant_id" => 20,
                "food_blogger_id" => 13
            ]
        ];

        foreach($recommended_by as $rb){
            RecommendedBy::insert($rb);
        }
    }
}
