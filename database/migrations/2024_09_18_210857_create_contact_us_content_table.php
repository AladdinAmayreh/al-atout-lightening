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
        Schema::create('contact_us_contents', function (Blueprint $table) {
            $table->id();
            $table->string('address_en');
            $table->string('address_ar');
            $table->string('phone');
            $table->string('email');
            $table->string('fax')->nullable();
            $table->text('description_en');
            $table->text('description_ar');
            $table->string('image'); // For the contact page image
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_us_content');
    }
};
