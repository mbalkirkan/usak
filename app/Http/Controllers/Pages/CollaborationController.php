<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Pages\Collaboration;
use Illuminate\Http\Request;

class CollaborationController extends Controller
{

    public function index(Request $request)
    {
        $collaborations = Collaboration::all();
        return view('pages.collaboration.index', compact('collaborations'));

    }

    public function collaboration(Request $request)
    {
        $collaboration = $request->id;
        $collaboration = Collaboration::find($collaboration);
        $collaborations = Collaboration::where('id' ,'!=', $collaboration->id)->orderBy('id', 'desc')->take(4)->get();
        return view('pages.collaboration.single', compact('collaboration', 'collaborations'));
    }
}
