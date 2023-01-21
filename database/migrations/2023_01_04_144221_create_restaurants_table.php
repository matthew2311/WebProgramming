<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->string('restaurant_name', 500);
            $table->string('restaurant_address', 5000);
            $table->string('restaurant_city');
            $table->string('restaurant_gmaps', 1000);
            $table->string('restaurant_whatsapp_link', 1000)->nullable();
            $table->string('restaurant_instagram_link', 1000)->nullable();
            $table->string('restaurant_tiktok_link', 1000)->nullable();
            $table->string('restaurant_gofood', 1000)->nullable();
            $table->string('restaurant_grabfood', 1000)->nullable();
            $table->string('restaurant_image', 500);
            $table->foreignId('restaurant_category_id')->constrained('categories', 'id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurants');
    }
}
