<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

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
    function redirect2kimlik()
    {
        return Socialite::driver('laravelpassport')->scopes(["*"])->redirect();
    }
    function kimlik_callback(Request $request)
    {
        if ($request->error) {
            return redirect("/login");
        }
        $kimlik_user = Socialite::driver('laravelpassport')->user();

        $user = User::firstOrCreate([
            'name' => $kimlik_user->name,

            "username" => $kimlik_user->username,
            'email' => $kimlik_user->email,]);

        $user->name = $kimlik_user->name;
        $user->save();

        if($user->active)
        {
            Auth::login($user);
            return redirect()->route('admin.pages.index.slider');
        }




        return redirect("/");
    }
}
