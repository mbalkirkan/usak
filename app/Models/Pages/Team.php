<?php

namespace App\Models\Pages;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'position',
        'job',
        'unit',
        'image',
        'description',
        'yok_link',
        'linkedin_link',

    ];

}
