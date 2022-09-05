<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Controller;
use App\Models\Pages\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(Request $request)
    {

        $news = News::with('getEn')->where('master_id', null)->get();
//return $news;
//
//        $news = News::all();
        return view('admin.pages.news', compact('news'));
    }

    public function newsCreate(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'required|string',
            'description' => 'required|string',
        ]);

        $news = new News();
        $news->title = $request->title;
        $news->content = $request->input('content');
        $news->image = $request->image;
        $news->description = $request->description;
        $news->save();

        $news_en = new News();
        $news_en->title = $request->title;
        $news_en->content = $request->input('content');
        $news_en->image = $request->image;
        $news_en->description = $request->description;
        $news_en->master_id = $news->id;
        $news_en->save();

        return ['status' => 'success'];
    }

    public function newsDelete(Request $request)
    {
        $news = News::find($request->id);
        $news->delete();
        $news_en = News::where('master_id', $request->id)->first();
        $news_en->delete();

        return ['status' => 'success'];
    }

    public function newsUpdate(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'required|string',
            'description' => 'required|string',
        ]);
        $news = News::find($request->id);
        $news->title = $request->title;
        $news->content = $request->input('content');
        $news->image = $request->image;
        $news->description = $request->description;
        $news->save();
        return ['status' => 'success'];
    }

    public function newsUpdateEn(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'required|string',
            'description' => 'required|string',
        ]);
        $news = News::where('master_id', $request->id)->first();
        $news->title = $request->title;
        $news->content = $request->input('content');
        $news->image = $request->image;
        $news->description = $request->description;
        $news->save();

        return ['status' => 'success'];
    }

}
