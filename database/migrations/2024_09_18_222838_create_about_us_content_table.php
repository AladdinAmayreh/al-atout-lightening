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
        Schema::create('about_us_content', function (Blueprint $table) {
            $table->id();
            $table->string('title_en'); // Title in English
            $table->string('title_ar'); // Title in Arabic
            $table->text('description_en'); // Description in English
            $table->text('description_ar'); // Description in Arabic
            $table->string('banner_image')->nullable(); // Banner image path
            $table->string('about_image')->nullable(); // About Us image path
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us_content');
    }
};
