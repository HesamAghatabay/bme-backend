<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
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
            'password' => Hash::make($request->password),
        ]);
        if(!$user){
            return redirect()->back()->with('error', 'ثبت نام با مشکل مواجه شد!');
        }
        return redirect()->route('index')->with('sucsess', 'ثبت نام با موفقیت انجام شد . لطفا برای دسترسی به سایت اقدام به ورود نمایید!');
    }
    public function login()
    {
        return view('auth.login');
    }
    public function loginstore(Request $request)
    {

        $credentials = $request->validate([
            'phone' => 'required|max:255|unique:users',
            'password' => 'required|min:8|confirmed'
        ], [
            'phone.required' => '*شماره تماس الزامی است*',
            'phone.max' => '*بیش از حد مجاز*',
            'password.required' => '*ایجاد رمز الزامی است*',
            'password.min' => '*حداقل 8 کارکتر*'
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->back()->with('error', 'ورود به سایت با خطا مواجه شد');
        }

        return redirect()->route('home')->with('sucsess', 'ورود با موفقیت انجام شد!');
    }
}
