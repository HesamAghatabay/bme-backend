<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\profile;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function index()
    {
        $userAuth = Auth::user();
        // $user = DB::table('users')->where('id', $userAuth)->get();
        // $profile = DB::table('profile')->where()

        return view('dashboard', compact('userAuth'));
    }

    /**
     * Display the user's profile form.
     */
    public function edit(Request $request)
    {
        $userAuth = Auth::user();
        // dd($userAuth->profile->info);
        return view('profile.edit', compact('userAuth'));
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request, $id, User $user)
    {
        // $request->validate([
        //     'name' => 'required|max:255',
        //     'phone' => 'required|max:255|unique:users',
        //     'email' => 'max:255|email',
        //     'study' => 'required',
        //     'info' => 'required',
        //     'photo' => 'required',
        // ], [

        //     'name.required' => '*نام و نام خانوادگی الزامی است*',
        //     'name.max' => '*بیش از حد مجاز*',
        //     'phone.required' => '*شماره تماس الزامی است*',
        //     'phone.max' => '*بیش از حد مجاز*',
        //     'email.max' => '*بیش از حد مجاز*',
        //     'email.email' => '*ایمیل خود را به صورت صحیح وارد کنید*',
        //     'stydy.required' => 'رشته تحصیلی الزامی است',
        //     'info.required' => 'یه اینفوگرافی ریز الزامی است',
        //     'photo.required' => 'تصویر پروفایل الزامی است',
        // ]);
        $user = User::findOrFail($id);
        $updateUser = $user->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);
        $profile = profile::fondOrFail($user);
        dd($profile);
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
