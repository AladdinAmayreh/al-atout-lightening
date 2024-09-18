<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUsContent extends Model
{
    use HasFactory;
    protected $table = 'contact_us_contents';

    protected $fillable = ['address_en', 'address_ar', 'phone', 'email', 'fax', 'description_en', 'description_ar', 'image'];
}