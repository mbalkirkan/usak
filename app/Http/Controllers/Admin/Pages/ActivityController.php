<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Controller;
use App\Models\Pages\Activity;
use App\Models\Pages\ActivityCategory;
use Illuminate\Http\Request;

class ActivityController extends Controller
{

    public function index(Request $request)
    {
        $activities = Activity::all();
        $categories = ActivityCategory::all();
        return view('admin.pages.activity', compact('activities', 'categories'));
    }

    public function activityCreate(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|max:255',
            'image' => 'required',
            'content' => 'required',
            'category_id' => 'required',
        ],
            [
                'title.required' => 'Başlık alanı boş bırakılamaz',
                'description.required' => 'Açıklama alanı boş bırakılamaz',
                'image.required' => 'Resim alanı boş bırakılamaz',
                'content.required' => 'İçerik alanı boş bırakılamaz',
                'category_id.required' => 'Kategori alanı boş bırakılamaz',

            ]);


        $activity = new Activity();
        $activity->title = $request->title;
        $activity->description = $request->description;
        $activity->activity_category_id = $request->category_id;
        $activity->image = $request->image;
        $activity->content = $request->input('content');
        $activity->save();
        return ['status' => 'success'];
    }

    public function activityDelete(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required',
        ],
            [
                'id.required' => 'id alanı boş bırakılamaz',
            ]);
        $activity = Activity::find($request->id);
        $activity->delete();
        return ['status' => 'success'];
    }

    public function activityUpdate(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required',
            'title' => 'required|max:255',
            'description' => 'required|max:255',
            'image' => 'required',
            'content' => 'required',
            'category_id' => 'required',
        ],
            [
                'id.required' => 'id alanı boş bırakılamaz',
                'title.required' => 'Başlık alanı boş bırakılamaz',
                'description.required' => 'Açıklama alanı boş bırakılamaz',
                'image.required' => 'Resim alanı boş bırakılamaz',
                'content.required' => 'İçerik alanı boş bırakılamaz',
                'category_id.required' => 'Kategori alanı boş bırakılamaz',

            ]);

        $activity = Activity::find($request->id);
        $activity->title = $request->title;
        $activity->description = $request->description;
        $activity->activity_category_id = $request->category_id;
        $activity->image = $request->image;
        $activity->content = $request->input('content');
        $activity->save();
        return ['status' => 'success'];
    }

    public function activityCategoryCreate(Request $request)
    {
        $category = new ActivityCategory();
        $category->name = $request->name;
        $category->save();
        return ['status' => 'success'];
    }

    public function activityCategoryDelete(Request $request)
    {
        $category = ActivityCategory::find($request->id);
        $category->delete();
        return ['status' => 'success'];
    }

    public function activityCategoryUpdate(Request $request)
    {
        $category = ActivityCategory::find($request->id);
        $category->name = $request->name;
        $category->save();
        return ['status' => 'success'];
    }


}
