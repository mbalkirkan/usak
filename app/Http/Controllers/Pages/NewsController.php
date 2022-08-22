<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Pages\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $news = News::all();
        return view('pages.news.index', compact('news'));
    }

    public function news(Request $request)
    {
        $news = $request->id;
        $new = News::find($news);
        $news4 = News::where('id' ,'!=', $new->id)->orderBy('id', 'desc')->take(4)->get();
        return view('pages.news.single', compact('new', 'news4'));
    }

}
