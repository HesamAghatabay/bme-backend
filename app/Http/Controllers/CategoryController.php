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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'info' => 'required',
        ], [
            'title.required' => 'عنوان الزامی است',
            'title.max' => 'بیش از حد مجاز',
            'image.required' => 'تصویر الزامی است',
            'image.max' => 'بیش از حد مجاز',
            'info.required' => 'توضیحات الزامی است',
        ]);
        $filename = time() . ' - ' . $request->image->getClientOriginalName();
        $request->image->storeAs('/images', $filename);
        $category = category::create([
            'title' => $request->title,
            'image' => $filename,
            'info' => $request->info,
        ]);
        if (!$category) {
            return redirect()->back()->with('error', 'ایجاد دسته با مشکل مواجه شد!');
        }
        return redirect()->route('index')->with('succsess', 'دسته با موفقت ایجاد شد!');
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $categories = category::find($id);
        return view('category', compact('categories'));
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
