<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePageContent extends Model
{
    use HasFactory;

    protected $fillable = [
        'banner_title_1',
        'banner_text_1',
        'banner_image_1',
        'banner_title_2',
        'banner_text_2',
        'banner_image_2',
        'about_us_text',
        'about_us_image',
        'vision_text',
        'section_title',
    ];
}
