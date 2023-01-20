<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodBloggersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_bloggers', function (Blueprint $table) {
            $table->id();
            $table->string('food_blogger_name');
            $table->string('food_blogger_description', 5000);
            $table->string('food_blogger_ig_link', 500)->nullable();
            $table->string('food_blogger_tiktok_link', 500)->nullable();
            $table->string('food_blogger_youtube_link', 500)->nullable();
            $table->string('food_blogger_image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('food_bloggers');
    }
}
