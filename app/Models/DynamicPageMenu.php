<?php

namespace App\Models;

use App\Models\Pages\DynamicPage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DynamicPageMenu extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'en_name',
        'parent_id',
        'page_id',
    ];

    public function dynamicPage()
    {
        return $this->belongsTo(DynamicPage::class, 'page_id');
    }

    public function children()
    {
        return $this->hasMany(DynamicPageMenu::class, 'parent_id');
    }
}
