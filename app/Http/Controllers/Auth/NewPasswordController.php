<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
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
    }
}
