<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('add-category');
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
        $request->validate([
            'title' => 'required|max:255',
            'img' => 'required|max:255',
            'body' => 'required',
        ], [
            'title.required' => 'عنوان الزامی است',
            'title.max' => 'بیش از حد مجاز',
            'img.required' => 'تصویر الزامی است',
            'img.max' => 'بیش از حد مجاز',
            'body.required' => 'توضیحات الزامی است',
        ]);
        $category = category::create([
            'title' => $request->title,
            'img' => $request->img,
            'body' => $request->body,
        ]);
        if (!$category) {
            return redirect()->back()->with('error', 'ایجاد دسته با مشکل مواجه شد!');
        }
        return redirect()->route('index')->with('succsess', 'دسته با موفقت ایجاد شد!');
    }

    /**
     * Display the specified resource.
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(category $category)
    {
        //
    }
}
