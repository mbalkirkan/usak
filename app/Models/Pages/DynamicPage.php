<?php

namespace App\Models\Pages;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DynamicPage extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'image',
        'master_id',
    ];

    public function getEn()
    {
        // master id parent
        return $this->hasOne(DynamicPage::class, 'master_id');
    }

    public function getTr()
    {
        // master id child
        return $this->belongsTo(DynamicPage::class, 'master_id');
    }
}
