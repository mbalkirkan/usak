<?php

namespace App\Models\Pages;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class News extends Model
{
    use HasFactory;


    protected $fillable = [
        'title',
        'description',
        'image',
        'content',
        'master_id',
    ];

    public function getEn()
    {
        // master id parent
        return $this->hasOne(News::class, 'master_id');
    }
}
