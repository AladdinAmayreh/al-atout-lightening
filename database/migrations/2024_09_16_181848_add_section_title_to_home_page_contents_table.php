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
        Schema::table('home_page_contents', function (Blueprint $table) {
            $table->string('section_title')->nullable(); // Add a new column for the section title
        });
    }
    
    public function down()
    {
        Schema::table('home_page_contents', function (Blueprint $table) {
            $table->dropColumn('section_title'); // Rollback if needed
        });
    }
    
};
