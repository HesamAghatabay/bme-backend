<?php

namespace App\Http\Controllers;

use App\Models\article;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = category::all();
        return view('add-category', compact('categories'));
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
        return redirect()->route('index')->with('success', 'دسته با موفقت ایجاد شد!');
    }

    /**
     * Display the specified resource.
     */
    public function show(article $article, $id)
    {
        $newArticles = article::latest()->take(8)->get();
        $bestArticles = DB::table('articles')->orderBy('likes', 'desc')->take(6)->get();
        $thiscategory = Category::findOrFail($id);
        // $categories = category::all();
        // dd($newArticles);
        return view('category', compact('thiscategory', 'newArticles', 'bestArticles'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(category $category, $id)
    {
        $categories = category::all();
        $category = category::findOrFail($id);
        return view('edit-category', compact('category', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, category $category, $id)
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
        if ($request->hasFile('image')) {
            // Storage::delete('/images/images/', $category->image);
            $filename = time() . ' - ' . $request->image->getClientOriginalName();
            $request->image->storeAs('/images', $filename);
        }
        $category = category::findOrFail($id);
        $updatedcategory = $category->update([
            'title' => $request->title,
            'image' => $filename,
            'info' => $request->info,
        ]);
        if (!$updatedcategory) {
            return redirect()->back()->with('error', 'ویرایش با خطا مواجه شد لطفا دوباره تلاش نمایید');
        }
        return redirect()->route('category.show', $category->id)->with('success', 'ویرایش دسته با موفقیت انجام شد');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(category $category, $id)
    {
        $category = category::findOrFail($id);
        $destroycategory = $category->delete();
        if (!$destroycategory) {
            return redirect()->route('category.show', $category->id)->with('error', 'حذف' . $category->title . 'به مشکل خورد');
        }
        return redirect()->route('index')->with('success', 'دسته' . $category->title . 'با موفقیت حذف شد');
    }
}
