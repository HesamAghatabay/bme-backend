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

            $profile = profile::create([
                'study' => 'رشته وارد نشده است',
                'photo' => 'تصویر پروفایل درج نشده است',
                'info' => 'اطلاعاتی وارد نشده است',
                'user_id' => $userAuth->id,
            ]);
        
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
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
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
