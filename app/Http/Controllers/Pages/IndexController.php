<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\DynamicPageMenu;
use App\Models\Pages\Activity;
use App\Models\Pages\Index\IndexPageAbout;
use App\Models\Pages\Index\IndexPageNumber;
use App\Models\Pages\Index\IndexPageSlider;
use App\Models\Pages\News;
use App\Models\Pages\Team;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function index(Request $request)
    {
//        app()->setLocale('en');


        $sliders = IndexPageSlider::all();
        $about = IndexPageAbout::first();
        $news = News::where('master_id', null)->orderBy('id', 'desc')->take(3)->get();
        $numbers = IndexPageNumber::first();
        $teams = Team::all();
        $activities = Activity::with('activityCategory')->where('master_id', null)->orderBy('id', 'desc')->take(3)->get();
        $en = false;
        return view('pages.index', compact('sliders', 'about', 'news', 'numbers', 'teams', 'activities', 'en'));
    }


    public function en_index(Request $request)
    {



        $sliders = IndexPageSlider::all();
        $about = IndexPageAbout::first();
        $news = News::where('master_id','!=', null)->orderBy('id', 'desc')->take(3)->get();
        $numbers = IndexPageNumber::first();
        $teams = Team::all();
        $activities = Activity::with('activityCategory')->where('master_id', '!=',null)->orderBy('id', 'desc')->take(3)->get();
        $en = true;

        return view('pages.index', compact('sliders', 'about', 'news', 'numbers', 'teams', 'activities', 'en'));
    }
}
