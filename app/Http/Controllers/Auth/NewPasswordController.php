<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Nette\Utils\Random;

class NewPasswordController extends Controller
{
    public function index()
    {
        //
    }
    /**
     * Display the password reset view.
     */
    public function create()
    {
        return view('auth.forgot-password');
    }

    /**
     * Handle an incoming new password request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'phone' => 'required|exists:users,phone',
        ]);
        $newPassword = str()->random(8);
        $user = User::where('phone', $request->phone)->first();
        $updatePassword = $user->update([
            'password' => Hash::make($newPassword),
        ]);
        if (!$updatePassword) {
            return redirect()->back()->with('error', 'دوباره تلاش نمایید');
        }
        dd($newPassword);
        // return redirect()->route('login')->with('success ', 'رمز تغیر کرد'.$newPassword);
    }
    public function edit()
    {
        $user = Auth::user();
        return view('auth.edit-password', compact('user'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'oldpassword' => 'required|min:8',
            'newpassword' => 'required|min:8',
            // 'password_confirmation' => 'required'
        ], [
            'oldpassword.required' => '*رمز قبلی خود را وارد نمایید*',
            'oldpassword.min' => '*حداقل 8 کارکتر*',
            'newpassword.required' => '*رمز جدید خود را وارد نمایید*',
            'newpassword.min' => '*حداقل 8 کارکتر*',
            'newpassword.confirmed' => 'تاییده رمز را به صورت صحیح وارد کنید',
            // 'password_confirmation.required' => '*تاییده رمز الزامی است*',

        ]);
        $user = User::findOrFail($id);
        $checkOldPassword = Hash::check($request->oldpassword, $user->password);
        if (!$checkOldPassword) {
            return redirect()->route('dashboard')->with('error', 'اطلاعات ورودی همخوانی ندارد');
        }
        // dd('hi');
        $updatePassword = $user->update([
            'password' => Hash::make($request->newpassword),
        ]);
        if (!$updatePassword) {
            return redirect()->route('dashboard')->with('error', 'دوباره تلاش نمایید');
        }
        return redirect()->route('dashboard')->with('success', $user->name . ' عزیز , تغییر رمز شما با موفقیت انجام شد');
    }
}
