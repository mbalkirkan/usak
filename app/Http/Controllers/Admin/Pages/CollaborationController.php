<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Controller;
use App\Models\Pages\Collaboration;
use Illuminate\Http\Request;

class CollaborationController extends Controller
{
    public function index(Request $request)
    {
        $collaborations = \App\Models\Pages\Collaboration::all();
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
        return ['status' => 'success'];
    }

    public function collaborationDelete(Request $request)
    {
        $news = Collaboration::find($request->id);
        $news->delete();
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
