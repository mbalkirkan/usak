<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PageSetting;
use Illuminate\Http\Request;

class PageSettingController extends Controller
{

    public function index(Request $request)
    {
        $settings = PageSetting::all();
        return view('admin.pages.settings', compact('settings'));
    }

    public function settingUpdate(Request $request)
    {
        foreach ($request->data as $setting) {
            $pSetting = PageSetting::find($setting['id']);
            $pSetting->title = $setting['title'];
            $pSetting->description = $setting['description'];
            $pSetting->image = $setting['image'];
            $pSetting->save();
        }
        return ['status' => 'success'];
    }
}
