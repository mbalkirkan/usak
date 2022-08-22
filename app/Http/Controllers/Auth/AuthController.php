<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function index(Request $request)
    {
        if(Auth::check())
            return redirect()->route('admin.pages.index.slider');

        return view('admin.auth.login');
    }

    public function login(Request $request): \Illuminate\Http\RedirectResponse
    {
        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'Kullanıcı adı boş girilemez !',
            'password.required' => 'Şifre boş girilemez !'
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('admin.pages.index.slider');
        }
        else
            return redirect()->route('login.index')->withErrors('Yanlış Kullanıcı Adı veya Şifre');
    }


    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('index');
    }
}
