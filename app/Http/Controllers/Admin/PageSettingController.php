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

            $pSetting->title_en = $setting['title_en'];
            $pSetting->description_en = $setting['description_en'];
            $pSetting->image_en = $setting['image_en'];

            $pSetting->save();
        }
        return ['status' => 'success'];
    }
}
