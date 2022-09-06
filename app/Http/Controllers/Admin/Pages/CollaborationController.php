<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Controller;
use App\Models\Pages\Collaboration;
use Illuminate\Http\Request;

class CollaborationController extends Controller
{
    public function index(Request $request)
    {
        $collaborations = \App\Models\Pages\Collaboration::with('getEn')->where('master_id', null)->get();

        return view('admin.pages.collaboration', compact('collaborations'));
    }

    public function collaborationCreate(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'required|string',
            'description' => 'required|string',
        ]);

        $news = new Collaboration();
        $news->title = $request->title;
        $news->content = $request->input('content');
        $news->image = $request->image;
        $news->description = $request->description;
        $news->save();

        $news_en = new Collaboration();
        $news_en->title = $request->title;
        $news_en->content = $request->input('content');
        $news_en->image = $request->image;
        $news_en->description = $request->description;
        $news_en->master_id = $news->id;
        $news_en->save();

        return ['status' => 'success'];
    }

    public function collaborationDelete(Request $request)
    {
        $news = Collaboration::find($request->id);
        $news->delete();
        $news_en = Collaboration::where('master_id', $request->id)->first();
        $news_en->delete();
        return ['status' => 'success'];
    }

    public function collaborationUpdate(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'required|string',
            'description' => 'required|string',
        ]);
        $news = Collaboration::find($request->id);
        $news->title = $request->title;
        $news->content = $request->input('content');
        $news->image = $request->image;
        $news->description = $request->description;
        $news->save();
        return ['status' => 'success'];
    }
}
