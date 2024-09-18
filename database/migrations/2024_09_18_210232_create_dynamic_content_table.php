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
        Schema::create('dynamic_content', function (Blueprint $table) {
            $table->id();
            $table->string('section'); // To identify the section (e.g., 'about', 'contact')
            $table->text('content_en'); // English content
            $table->text('content_ar'); // Arabic content
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dynamic_content');
    }
};
