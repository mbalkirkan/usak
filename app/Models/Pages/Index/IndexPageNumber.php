<?php

namespace App\Models\Pages\Index;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndexPageNumber extends Model
{
    use HasFactory;

    protected $fillable = ['title','description','image','number1_title','number1','number2_title','number2','number3_title','number3','number4_title','number4',];
}
