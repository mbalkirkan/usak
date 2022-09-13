<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Pages\News;
use App\Models\PageSetting;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $news = News::where('master_id', null)->orderBy('id', 'desc')->get();
        $page_settings = PageSetting::where('name', 'news')->first();
        $en = false;
        return view('pages.news.index', compact('news', 'page_settings', 'en'));
    }

    public function news(Request $request)
    {
        $news = $request->id;
        $new = News::find($news);
        $news4 = News::where('id' ,'!=', $new->id)->where('master_id', null)->orderBy('id', 'desc')->take(4)->get();
        $page_settings = PageSetting::where('name', 'news')->first();
        $en = false;
        return view('pages.news.single', compact('new', 'news4', 'page_settings', 'en'));
    }


    public function en_index(Request $request)
    {
        $news = News::where('master_id','!=', null)->orderBy('id', 'desc')->get();
        $page_settings = PageSetting::where('name', 'news')->first();
        $en = true;
        return view('pages.news.index', compact('news', 'page_settings', 'en'));
    }

    public function en_news(Request $request)
    {
        $news = $request->id;
        $new = News::find($news);
        $news4 = News::where('master_id','!=', null)->where('id' ,'!=', $new->id)->orderBy('id', 'desc')->take(4)->get();
        $page_settings = PageSetting::where('name', 'news')->first();
        $en = true;
        return view('pages.news.single', compact('new', 'news4', 'page_settings', 'en'));
    }

}
