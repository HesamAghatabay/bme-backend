<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {
        $categories = category::all();
        return view('auth.register', compact('categories'));
    }
    public function registerstore(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'phone' => 'required|max:255|unique:users',
            'email' => 'max:255|email',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required'
        ], [
            'name.required' => '*نام و نام خانوادگی الزامی است*',
            'name.max' => '*بیش از حد مجاز*',
            'phone.required' => '*شماره تماس الزامی است*',
            'phone.max' => '*بیش از حد مجاز*',
            'email.max' => '*بیش از حد مجاز*',
            'email.email' => '*ایمیل خود را به صورت صحیح وارد کنید*',
            'password.required' => '*ایجاد رمز الزامی است*',
            'password.min' => '*حداقل 8 کارکتر*',
            'password_confirmation.required' => '*تاییده رمز الزامی است*',
            'password_confirmation.password_confirmation' => 'تاییده رمز را به صورت صحیح وارد کنید'
        ]);
        $user = User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'userip' => $request->ip(),
            'password' => Hash::make($request->password),
        ]);
        $profile = profile::create([
            'study' => '',
            'photo' => '',
            'info' => '',
            'user_id' => $user->id,
        ]);
        // $role = DB::table('role_user')->insert($user->id);

        if (!$user) {
            return redirect()->back()->with('error', $request->name . 'ثبت نام با مشکل مواجه شد!');
        }
        return redirect()->route('index')->with('success', $request->name . 'ثبت نام با موفقیت انجام شد . لطفا برای دسترسی به سایت اقدام به ورود نمایید!');
    }
    public function login()
    {
        $categories = category::all();
        return view('auth.login', compact('categories'));
    }
    public function loginstore(Request $request)
    {
        $categories = category::all();
        $credentials = $request->validate([
            'phone' => 'required|max:255|exists:users,phone',
            'password' => 'required|min:8'
        ], [
            'phone.required' => '*شماره تماس الزامی است*',
            'phone.max' => '*بیش از حد مجاز*',
            'password.required' => '*ایجاد رمز الزامی است*',
            'password.min' => '*حداقل 8 کارکتر*'
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user()->name;
            return redirect()->route('index')->with('success', $user . 'خوش آمدید');
        }
        return redirect()->back()->with('index', 'ورود به سایت با خطا مواجه شد .لطفا دوباره تلاش کنید!');
    }
    public function logout(Request $request)
    {
        $user = Auth::user()->name;
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('index')->with('success', $user . 'شما از سایت خارج شدید!');
    }
}
