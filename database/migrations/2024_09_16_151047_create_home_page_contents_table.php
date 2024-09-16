<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('home_page_contents', function (Blueprint $table) {
            $table->id();
            $table->string('banner_title_1')->nullable();
            $table->text('banner_text_1')->nullable();
            $table->string('banner_image_1')->nullable();
            $table->string('banner_title_2')->nullable();
            $table->text('banner_text_2')->nullable();
            $table->string('banner_image_2')->nullable();
            $table->text('about_us_text')->nullable();
            $table->string('about_us_image')->nullable();
            $table->text('vision_text')->nullable();
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_page_contents');
    }
};
