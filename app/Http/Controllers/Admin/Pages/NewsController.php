<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Controller;
use App\Models\Pages\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $news = News::all();
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
        return ['status' => 'success'];
    }

    public function newsDelete(Request $request)
    {
        $news = News::find($request->id);
        $news->delete();
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

}
