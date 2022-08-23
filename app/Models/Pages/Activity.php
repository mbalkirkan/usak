<?php

namespace App\Models\Pages;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'content',
        'activity_category_id',
    ];

    public function activityCategory()
    {
        return $this->belongsTo(ActivityCategory::class);
    }
}
