<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Pages\Activity;
use App\Models\Pages\ActivityCategory;
use App\Models\PageSetting;
use Illuminate\Http\Request;

class ActivityController extends Controller
{

    public function index(Request $request)
    {
        $activities = Activity::with('activityCategory')->orderBy('id', 'desc')->get();
        $categories = ActivityCategory::all();
        $page_settings = PageSetting::where('name', 'activity')->first();
        return view('pages.activity.index', compact('activities', 'categories', 'page_settings'));
    }

    public function activity(Request $request)
    {
        $activity = $request->id;
        $activity = Activity::find($activity);
        $activities = Activity::where('id' ,'!=', $activity->id)->orderBy('id', 'desc')->take(4)->get();
        $page_settings = PageSetting::where('name', 'activity')->first();
        return view('pages.activity.single', compact('activity', 'activities', 'page_settings'));
    }
}
