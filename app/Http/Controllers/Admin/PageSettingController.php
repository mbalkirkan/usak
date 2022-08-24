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
        $settings = PageSetting::all();
        return $request->all();
        foreach ($settings as $key=>$setting) {
            $setting->value = $request->input($setting->name);
            $setting->save();
        }
        return ['status' => 'success'];
    }
}
