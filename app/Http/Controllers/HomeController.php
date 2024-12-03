<?php

namespace App\Http\Controllers;

use App\Models\article;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $articles = article::all();
        $newarticles = article::latest()->take(8)->get();
        $bestarticles = DB::table('articles')->orderBy('likes', 'desc')->take(6)->get();
        // $categories = category::find(2);
        $categories = category::all();
        $categoryHasArticle = Category::take(8)->has('articles')->with('articles')->get();
        // dd($categories->articles);

        // foreach ($categories as $categories) {
        //     $articles = DB::table('articles')->where('category_id', $categories->id)->get();
        // }
        return view('index', compact('categories', 'articles', 'bestarticles', 'categoryHasArticle', 'newarticles'));
    }
}
