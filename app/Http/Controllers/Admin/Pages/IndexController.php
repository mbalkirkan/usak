<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Controller;
use App\Models\Pages\Index\IndexPageAbout;
use App\Models\Pages\Index\IndexPageNumber;
use App\Models\Pages\Index\IndexPageSlider;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function slider(Request $request)
    {

        $sliders = IndexPageSlider::all();

        return view('admin.pages.index.slider', compact('sliders'));
    }
    public function numbers(Request $request)
    {

        $numbers = IndexPageNumber::first();

        return view('admin.pages.index.numbers', compact('numbers'));
    }



    public function sliderCreate(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'image' => 'required',
            'description' => 'required',
        ], [
            'title.required' => 'Başlık boş girilemez !',
            'image.required' => 'Resim boş girilemez !',
            'description.required' => 'Açıklama boş girilemez !',
        ]);

        $slider = IndexPageSlider::create([
            'title' => $request->title,
            'image' => $request->image,
            'description' => $request->description,
        ]);

        if($slider)
            return response()->json(['status' => 'success', 'message' => 'Slider başarıyla oluşturuldu !']);
        else
            return response()->json(['status' => 'error', 'message' => 'Slider oluşturulurken bir hata oluştu !']);
    }

    public function numbersUpdate(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'image' => 'required',
            'description' => 'required',
            'number1_title' => 'required',
            'number1' => 'required',
            'number1_url' => 'required',
            'number2_title' => 'required',
            'number2' => 'required',
            'number2_url' => 'required',
            'number3_title' => 'required',
            'number3' => 'required',
            'number3_url' => 'required',
            'number4_title' => 'required',
            'number4' => 'required',
            'number4_url' => 'required',

        ], [
            'title.required' => 'Başlık boş girilemez !',
            'image.required' => 'Resim boş girilemez !',
            'description.required' => 'Açıklama boş girilemez !',
            'number1_title.required' => '1. sayı başlığı boş girilemez !',
            'number1.required' => '1. sayı boş girilemez !',
            'number2_title.required' => '2. sayı başlığı boş girilemez !',
            'number2.required' => '2. sayı boş girilemez !',
            'number3_title.required' => '3. sayı başlığı boş girilemez !',
            'number3.required' => '3. sayı boş girilemez !',
            'number4_title.required' => '4. sayı başlığı boş girilemez !',
            'number4.required' => '4. sayı boş girilemez !',
            'number1_url.required' => '1. sayı bağlantısı boş girilemez !',
            'number2_url.required' => '2. sayı bağlantısı boş girilemez !',
            'number3_url.required' => '3. sayı bağlantısı boş girilemez !',
            'number4_url.required' => '4. sayı bağlantısı boş girilemez !',
        ]);
        $number = IndexPageNumber::first();
        $number->title = $request->title;
        $number->image = $request->image;
        $number->description = $request->description;
        $number->number1_title = $request->number1_title;
        $number->number1 = $request->number1;
        $number->number2_title = $request->number2_title;
        $number->number2 = $request->number2;
        $number->number3_title = $request->number3_title;
        $number->number3 = $request->number3;
        $number->number4_title = $request->number4_title;
        $number->number4 = $request->number4;
        $number->number1_url = $request->number1_url;
        $number->number2_url = $request->number2_url;
        $number->number3_url = $request->number3_url;
        $number->number4_url = $request->number4_url;
        $number->save();
        return response()->json(['status' => 'success', 'message' => 'Veriler başarıyla güncellendi !']);

    }

    public function sliderDelete(Request $request)
    {
        $slider = IndexPageSlider::find($request->id);
        if($slider)
        {
            $fileName = $slider->image;
            $filePath = public_path('uploads/sliders/'.$fileName);
            if(file_exists($filePath))
                unlink($filePath);;
            $slider->delete();
            return response()->json(['status' => 'success', 'message' => 'Slider başarıyla silindi !']);
        }
        else
            return response()->json(['status' => 'error', 'message' => 'Slider silinirken bir hata oluştu !']);
    }

    public function sliderUpdate(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'image' => 'required',
            'description' => 'required',
        ], [
            'title.required' => 'Başlık boş girilemez !',
            'image.required' => 'Resim boş girilemez !',
            'description.required' => 'Açıklama boş girilemez !'
        ]);

        $slider = IndexPageSlider::find($request->id);
        if($slider)
        {
            if($slider->image != $request->image)
            {
                $fileName = $slider->image;
                $filePath = public_path('uploads/sliders/'.$fileName);
                if(file_exists($filePath))
                    unlink($filePath);;
            }


            $slider->title = $request->title;
            $slider->image = $request->image;
            $slider->description = $request->description;
            $slider->save();
            return response()->json(['status' => 'success', 'message' => 'Slider başarıyla güncellendi !']);
        }
        else
            return response()->json(['status' => 'error', 'message' => 'Slider güncellenirken bir hata oluştu !']);
    }

    public function about(Request $request)
    {
        $about = IndexPageAbout::find(1);
        return view('admin.pages.index.about', compact('about'));
    }

    public function aboutUpdate(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
            'main_title' => 'required',
            'collaboration_1_title' => 'required',
            'collaboration_1_description' => 'required',
            'collaboration_2_title' => 'required',
            'collaboration_2_description' => 'required',
            'collaboration_3_title' => 'required',
            'collaboration_3_description' => 'required',
            'collaboration_4_title' => 'required',
            'collaboration_4_description' => 'required',
        ], [
            'title.required' => 'Başlık boş girilemez !',
            'description.required' => 'Açıklama boş girilemez !',
            'image.required' => 'Resim boş girilemez !',
            'main_title.required' => 'Başlık boş girilemez !',
            'collaboration_1_title.required' => 'Başlık boş girilemez !',
            'collaboration_1_description.required' => 'Açıklama boş girilemez !',
            'collaboration_2_title.required' => 'Başlık boş girilemez !',
            'collaboration_2_description.required' => 'Açıklama boş girilemez !',
            'collaboration_3_title.required' => 'Başlık boş girilemez !',
            'collaboration_3_description.required' => 'Açıklama boş girilemez !',
            'collaboration_4_title.required' => 'Başlık boş girilemez !',
            'collaboration_4_description.required' => 'Açıklama boş girilemez !',
        ]);
        $about = IndexPageAbout::find(1);
        if($about)
        {
            if($about->image != $request->image)
            {
                $fileName = explode('/', $about->image);
                $filePath = public_path('uploads/about/'.$fileName[count($fileName) - 1]);
                if(file_exists($filePath))
                    unlink($filePath);;
            }
            $about->title = $request->title;
            $about->description = $request->description;
            $about->image = $request->image;
            $about->main_title = $request->main_title;
            $about->collaboration_1_title = $request->collaboration_1_title;
            $about->collaboration_1_description = $request->collaboration_1_description;
            $about->collaboration_2_title = $request->collaboration_2_title;
            $about->collaboration_2_description = $request->collaboration_2_description;
            $about->collaboration_3_title = $request->collaboration_3_title;
            $about->collaboration_3_description = $request->collaboration_3_description;
            $about->collaboration_4_title = $request->collaboration_4_title;
            $about->collaboration_4_description = $request->collaboration_4_description;

            $about->save();
            return response()->json(['status' => 'success', 'message' => 'About başarıyla güncellendi !']);
        }
        else
            return response()->json(['status' => 'error', 'message' => 'About güncellenirken bir hata oluştu !']);
    }
}
