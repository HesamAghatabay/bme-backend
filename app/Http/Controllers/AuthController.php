<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        $$credentials = $request->validate([
            'name' => 'required|max:255',
            'phone' => 'required|max:255|unique:users',
            'email' => 'max:255|email',
            'password' => 'required|password|min:8',
            'password_confirmation' => 'required|password-confirmation'
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
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->back()->with('error', 'ثبت نام با خطا مواجه شد');
        }

        return redirect()->route('login')->with('sucsess', 'ثبت نام با موفقیت انجام شد . لطفا برای دسترسی به خدمات وارد سایت شوید');
    }
}
