<?php

namespace App\Models\Pages\Index;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndexPageAbout extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'main_title',
        'description',
        'image',
        'collaboration_1_title',
        'collaboration_1_description',
        'collaboration_2_title',
        'collaboration_2_description',
        'collaboration_3_title',
        'collaboration_3_description',
        'collaboration_4_title',
        'collaboration_4_description',
        ];
}
