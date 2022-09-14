<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Pages\DynamicPage;
use Illuminate\Http\Request;

class DynamicPageController extends Controller
{
    public function index(Request $request)
    {
        $slug = $request->slug;
        $dynamicPage = DynamicPage::where('slug', $slug)->first();
        $en = false;
        return view('pages.dynamic', compact('dynamicPage', 'en'));
    }


    public function en_index(Request $request)
    {
        $slug = $request->slug;
        $dynamicPage = DynamicPage::where('slug', $slug)->first();
//        $dynamicPage = $dynamicPage->getEn;

        $en = true;


        return view('pages.dynamic', compact('dynamicPage', 'en'));
    }

}
