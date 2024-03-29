<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Pages\Collaboration;
use App\Models\PageSetting;
use Illuminate\Http\Request;

class CollaborationController extends Controller
{

    public function index(Request $request)
    {
        $collaborations = Collaboration::with('getEn')->where('master_id', null)->get();
        $page_settings = PageSetting::where('name', 'collaboration')->first();
        $en = false;
        return view('pages.collaboration.index', compact('collaborations', 'page_settings', 'en'));

    }

    public function collaboration(Request $request)
    {
        $collaboration = $request->id;
        $collaboration = Collaboration::find($collaboration);
        $collaborations = Collaboration::where('id' ,'!=', $collaboration->id)->orderBy('id', 'desc')->take(4)->get();
        $page_settings = PageSetting::where('name', 'collaboration')->first();
        $en = false;
        return view('pages.collaboration.single', compact('collaboration', 'collaborations', 'page_settings', 'en'));
    }

    public function en_index(Request $request)
    {
        $collaborations = Collaboration::where('master_id','!=', null)->get();
        $page_settings = PageSetting::where('name', 'collaboration')->first();

        $en = true;
        return view('pages.collaboration.index', compact('collaborations', 'page_settings', 'en'));

    }

    public function en_collaboration(Request $request)
    {
        $collaboration = $request->id;
        $collaboration = Collaboration::find($collaboration);
        $collaborations = Collaboration::where('master_id','!=', null)->where('id' ,'!=', $collaboration->id)->orderBy('id', 'desc')->take(4)->get();
        $page_settings = PageSetting::where('name', 'collaboration')->first();
        $en = true;
        return view('pages.collaboration.single', compact('collaboration', 'collaborations', 'page_settings', 'en'));
    }
}
