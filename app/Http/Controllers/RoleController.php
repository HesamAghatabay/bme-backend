<?php

namespace App\Http\Controllers;

use App\Models\role;
use App\Models\role_user;
use App\Models\User;
use App\Models\view;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Contracts\Role as ContractsRole;
use Spatie\Permission\Models\Role as ModelsRole;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $isAdmin = Auth::user()->is_admin;
        $allUsers = User::all();
        if ($isAdmin) {
            return view('roles', compact('allUsers'));
        }
        return redirect()->route('index')->with('error', 'مجوز دسترسی ندارید ');
    }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    // public function create()
    // {
    //     $isAdmin = Auth::user()->is_admin;
    //     if ($isAdmin) {
    //         $roles = role::all();
    //         return view('add-role', compact('roles'));
    //     }
    //     return redirect()->route('index')->with('error', 'مجوز دسترسی ندارید ');
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(Request $request)
    // {
    //     $isAdmin = Auth::user()->is_admin;
    //     $request->validate([
    //         'name' => 'required'
    //     ], [
    //         'name.required' => 'فیلد الزامی است',
    //     ]);
    //     if ($isAdmin) {
    //         $role = role::create([
    //             'name' => $request->name,
    //         ]);
    //         return redirect()->route('roles')->with('success', 'نقش ' . $request->name . ' با موفقیت ایجاد شد');
    //     }
    //     return redirect()->route('index')->with('error', 'مجوز دسترسی ندارید ');
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(role $role)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    public function edit($id)
    {
        $isAdmin = Auth::user()->is_admin;
        if (!$isAdmin) {
            return redirect()->route('index')->with('error', 'مجوز دسترسی ندارید ');
        }
        $theUser = user::findOrFail($id);
        // dd($theUser->roles);

        return view('edit-role', compact('theUser'));
    }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, role $role, $id)
    // {
    //     $isAdmin = Auth::user()->is_admin;
    //     if (!$isAdmin) {
    //         return redirect()->route('index')->with('error', 'مجوز دسترسی ندارید ');
    //     }
    //     $request->validate([
    //         'name' => 'required'
    //     ], [
    //         'name.required' => 'فیلد الزامی است',
    //     ]);
    //     $user = User::findOrFail($id);
    //     $userRoleId = $user->roleUsers;
    //     $roleName = role::where('name', $request->name)->first();
    //     // dd($userRoleId);
    //     $roleId = $roleName->id;
    //     $updateRole = $userRoleId->update([
    //         'role_id' => $roleId,
    //     ]);
    //     // $ss = role_user::where('user_id', $id)->first();
    //     // $ss = DB::table('role_users')->where('user_id', $id)->first();
    //     // dd($user->roles);
    //     // $ss = DB::table('role_users')->where('user_id', $id)->first();
    //     // dd($roleName->id);
    //     // $updateRole = $user->save();
    //     // $updateRole = $user->roles;
    //     // dd($request);
    //     // dd($updateRole);
    //     // $roleName = DB::table('roles')->where('name', $request->name)->get();
    //     // $roleId = $roleName->id;
    //     // dd($roleId);
    //     // $roleUser->update([
    //     // 'role_id' => $roleId,
    //     // ]);
    //     if (!$updateRole) {
    //         return redirect()->back()->with('error', ' اعمال تغییرات با مشکل مواجه شد ');
    //     }
    //     return redirect()->route('roles')->with('success', 'تغییرات با موفقیت اعمال شد ');
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(role $role)
    // {
    //     //
    // }
}
