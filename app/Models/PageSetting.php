<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'title',
        'description',
        'image',
        'title_en',
        'description_en',
        'image_en',
    ];
}
