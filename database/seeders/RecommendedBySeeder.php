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
            ]
        ];

        foreach($recommended_by as $rb){
            RecommendedBy::insert($rb);
        }
    }
}
