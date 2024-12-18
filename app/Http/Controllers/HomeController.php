<?php

namespace App\Http\Controllers;

use App\Models\article;
use App\Models\category;
use App\Models\view;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $articles = article::where('activity', 1)->get();
        $newarticles = article::latest()->where('activity', 1)->take(10)->get();
        $bestarticles = DB::table('articles')->where('activity', 1)->orderBy('likes', 'desc')->take(6)->get();
        // $categories = category::find(2);
        $categories = category::all();
        // dd($categories->articles);

        $categoryHasArticle = Category::limit(10)->has('articles')->get();
        // $categoryHasArticle = Category::with(['articles' => function ($query) {
        //     $query->where('activity', 1);
        // }])->get();
        // $categoryHasArticle = $categoryHasArticle->filter(function ($category) {
        //     return $category->articles->isNotEmpty();
        // });

        // foreach ($categories as $categories) {
        //     $articles = DB::table('articles')->where('category_id', $categories->id)->get();
        // }
        return view('index', compact('categories', 'articles', 'bestarticles', 'categoryHasArticle', 'newarticles'));
    }
    public function create()
    {
        $isAdmin = Auth::user()->is_admin;
        if (!$isAdmin) {
            return redirect()->route('index')->with('error', 'مجوز دسترسی ندارید ');
        }
        return view('create-client');
    }
    public function destroy(Request $request, $id)
    {
        dd($id);
    }
}
