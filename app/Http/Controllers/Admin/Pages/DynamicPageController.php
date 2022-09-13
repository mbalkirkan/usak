<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Controller;
use App\Models\DynamicPageMenu;
use App\Models\Pages\DynamicPage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class DynamicPageController extends Controller
{

    public function index(Request $request)
    {
        $dynamicPages = DynamicPage::with('getEn')->where('master_id', null)->get();
        $dynamicMenus = DynamicPageMenu::all();
        return view('admin.pages.dynamic', compact('dynamicPages', 'dynamicMenus'));
    }

    public function dynamicMenuCreate(Request $request)
    {
        $dynamicPageMenu = new DynamicPageMenu();
        $dynamicPageMenu->name = $request->name;
        $dynamicPageMenu->en_name = $request->name;
        $dynamicPageMenu->parent_id = $request->parent_id;
        $dynamicPageMenu->page_id = $request->page_id;
        $dynamicPageMenu->save();
        return response()->json(['status' => 'success', 'message' => 'Dynamic Page Menu Created Successfully']);
    }

    public function dynamicMenuUpdate(Request $request)
    {
        $dynamicPageMenu = DynamicPageMenu::find($request->id);
        $dynamicPageMenu->name = $request->name;
        $dynamicPageMenu->en_name = $request->en_name;
        $dynamicPageMenu->parent_id = $request->parent_id;
        $dynamicPageMenu->page_id = $request->page_id;
        $dynamicPageMenu->save();
        return response()->json(['status' => 'success', 'message' => 'Dynamic Page Menu Updated Successfully']);
    }

    public function dynamicMenuDelete(Request $request)
    {
        $dynamicPageMenu = DynamicPageMenu::find($request->id);
        $dynamicPageMenu->delete();
        return response()->json(['status' => 'success', 'message' => 'Dynamic Page Menu Deleted Successfully']);
    }

    public function dynamicCreate(Request $request)
    {
        $dynamicPage = new DynamicPage();
        $dynamicPage->title = $request->title;
        $dynamicPage->content = $request->input('content');
        $dynamicPage->image = $request->image;
        $dynamicPage->slug = Str::slug($request->title);
        $dynamicPage->save();

        $dynamicPageEn = new DynamicPage();
        $dynamicPageEn->title = $request->title;
        $dynamicPageEn->content = $request->input('content');
        $dynamicPageEn->image = $request->image;
        $dynamicPageEn->slug = Str::slug($request->title);
        $dynamicPageEn->master_id = $dynamicPage->id;
        $dynamicPageEn->save();


        return response()->json(['status' => 'success', 'message' => 'Dynamic Page Created Successfully']);
    }

    public function dynamicUpdate(Request $request)
    {
        $dynamicPage = DynamicPage::find($request->id);
        $dynamicPage->title = $request->title;
        $dynamicPage->content = $request->input('content');
        $dynamicPage->image = $request->image;
        $dynamicPage->slug = Str::slug($request->title);
        $dynamicPage->save();
        return response()->json(['status' => 'success', 'message' => 'Dynamic Page Updated Successfully']);
    }
}
