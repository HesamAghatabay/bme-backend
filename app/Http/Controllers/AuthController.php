<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        $request->validate([
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
        ]);
    }
}
