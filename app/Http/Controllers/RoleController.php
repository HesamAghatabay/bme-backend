<?php

namespace App\Http\Controllers;

use App\Models\role;
use App\Models\User;
use App\Models\view;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(role $role)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, role $role)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(role $role)
    {
        //
    }
}
