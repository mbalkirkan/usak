<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Pages\Index\IndexPageAbout;
use App\Models\Pages\Index\IndexPageNumber;
use App\Models\Pages\Index\IndexPageSlider;
use App\Models\Pages\News;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function index(Request $request)
    {
        $sliders = IndexPageSlider::all();
        $about = IndexPageAbout::first();
        $news = News::orderBy('id', 'desc')->take(3)->get();
        $numbers = IndexPageNumber::first();

        return view('pages.index', compact('sliders', 'about', 'news', 'numbers'));
    }
}
