<?php

namespace App\Http\Controllers\Admin\Helpers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadController extends Controller
{

    public function sliderUpload(Request $request)
    {
        $file = $request->file('file');
        $fileName = time().'.'.$file->extension();
        $file->move(public_path('uploads/sliders/'),$fileName);

        return response()->json(['success'=>$fileName]);
    }

    public function aboutUpload(Request $request)
    {
        $file = $request->file('upload');
        $fileName = time().'.'.$file->extension();
        $file->move(public_path('uploads/about/'),$fileName);
        $url = asset('uploads/about/'.$fileName);


        return response()->json(['success'=>$url]);
    }
    public function ckeditorUpload(Request $request)
    {
        $file = $request->file('upload');
        $fileName = time().'.'.$file->extension();
        $file->move(public_path('uploads/ckeditor/'),$fileName);
        $url = asset('uploads/ckeditor/'.$fileName);


        return response()->json(['uploaded'=>true, 'url'=>$url]);
    }

    public function newsUpload(Request $request)
    {
        $file = $request->file('file');
        $fileName = time().'.'.$file->extension();
        $file->move(public_path('uploads/news/'),$fileName);
        $url = asset('uploads/news/'.$fileName);


        return response()->json(['uploaded'=>true, 'url'=>$url, 'name'=>$fileName]);
    }

    public function newsDelete(Request $request)
    {
        $fileName = explode('/',$request->fileName);
        $filePath = public_path('uploads/news/'.$fileName[count($fileName) - 1]);
        if(file_exists($filePath))
            unlink($filePath);
        return response()->json(['success'=>$fileName]);
    }

    public function sliderDelete(Request $request)
    {
        $fileName = $request->fileName;
        $filePath = public_path('uploads/sliders/'.$fileName);
        if(file_exists($filePath))
            unlink($filePath);
        return response()->json(['success'=>$fileName]);
    }
}
