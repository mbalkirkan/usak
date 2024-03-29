<?php

namespace App\Models\Pages;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collaboration extends Model
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
        return $this->hasOne(Collaboration::class, 'master_id');
    }
}
