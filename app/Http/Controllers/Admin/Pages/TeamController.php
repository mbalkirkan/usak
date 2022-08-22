<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Controller;
use App\Models\Pages\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index(Request $request)
    {
        $teams = Team::all();
        return view('admin.pages.team', compact('teams'));
    }

    public function teamCreate(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'position' => 'required|max:255',
            'job' => 'required|max:255',
            'unit' => 'required|max:255',
            'image' => 'required',
            'description' => 'required',
            'yok_link' => 'required|max:255',
            'linkedin_link' => 'required|max:255',
        ],
        [
            'name.required' => 'İsim alanı boş bırakılamaz',
            'position.required' => 'Ünvan alanı boş bırakılamaz',
            'job.required' => 'Meslek alanı boş bırakılamaz',
            'unit.required' => 'Birim alanı boş bırakılamaz',
            'image.required' => 'Resim alanı boş bırakılamaz',
            'description.required' => 'Açıklama alanı boş bırakılamaz',
            'yok_link.required' => 'Yök Link alanı boş bırakılamaz',
            'linkedin_link.required' => 'Linkedin Link alanı boş bırakılamaz',
        ]);

        $team = new Team();
        $team->name = $request->name;
        $team->position = $request->position;
        $team->job = $request->job;
        $team->unit = $request->unit;
        $team->image = $request->image;
        $team->description = $request->description;
        $team->yok_link = $request->yok_link;
        $team->linkedin_link = $request->linkedin_link;
        $team->save();
        return ['status' => 'success'];
    }
    public function teamUpdate(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required',
            'name' => 'required|max:255',
            'position' => 'required|max:255',
            'job' => 'required|max:255',
            'unit' => 'required|max:255',
            'image' => 'required',
            'description' => 'required',
            'yok_link' => 'required|max:255',
            'linkedin_link' => 'required|max:255',
        ],
        [
            'id.required' => 'ID alanı boş bırakılamaz',
            'name.required' => 'İsim alanı boş bırakılamaz',
            'position.required' => 'Ünvan alanı boş bırakılamaz',
            'job.required' => 'Meslek alanı boş bırakılamaz',
            'unit.required' => 'Birim alanı boş bırakılamaz',
            'image.required' => 'Resim alanı boş bırakılamaz',
            'description.required' => 'Açıklama alanı boş bırakılamaz',
            'yok_link.required' => 'Yök Link alanı boş bırakılamaz',
            'linkedin_link.required' => 'Linkedin Link alanı boş bırakılamaz',
        ]);
        $team = Team::find($request->id);
        $team->name = $request->name;
        $team->position = $request->position;
        $team->job = $request->job;
        $team->unit = $request->unit;
        $team->image = $request->image;
        $team->description = $request->description;
        $team->yok_link = $request->yok_link;
        $team->linkedin_link = $request->linkedin_link;
        $team->save();
        return ['status' => 'success'];
    }
    public function teamDelete(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required',
        ],
        [
            'id.required' => 'ID alanı boş bırakılamaz',
        ]);
        $team = Team::find($request->id);
        $team->delete();
        return ['status' => 'success'];
    }


}
