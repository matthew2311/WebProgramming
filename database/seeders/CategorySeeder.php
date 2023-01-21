<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                "id" => 1,
                "category_name" => "Indonesian Food"
            ],
            [
                "id" => 2,
                "category_name" => "Chinese Food"
            ],
            [
                "id" => 3,
                "category_name" => "Japanese Food"
            ],
            [
                "id" => 4,
                "category_name" => "Western Food"
            ],
            [
                "id" => 5,
                "category_name" => "Italian Food"
            ],
            [
                "id" => 6,
                "category_name" => "Dessert"
            ],
        ];

        foreach($categories as $category){
            Category::insert($category);
        }
    }
}
