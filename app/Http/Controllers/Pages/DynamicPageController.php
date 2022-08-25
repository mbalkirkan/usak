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
        return view('pages.dynamic', compact('dynamicPage'));
    }
}
