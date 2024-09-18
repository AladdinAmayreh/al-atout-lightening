<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUsContent extends Model
{
    use HasFactory;
    protected $table = 'about_us_content';

    protected $fillable = [
        'title_en',
        'title_ar',
        'description_en',
        'description_ar',
        'banner_image',
        'about_image'
    ];
}
