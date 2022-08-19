<?php

namespace App\Models\Pages\Index;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndexPageSlider extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
    ];
}
