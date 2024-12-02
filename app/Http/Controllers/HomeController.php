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
        // $categories = category::find(2);
        $categories = category::all();
        $categoryHasArticle = Category::has('articles')->with('articles')->get();
        // dd($categories->articles);

        // foreach ($categories as $categories) {
        //     $articles = DB::table('articles')->where('category_id', $categories->id)->get();
        // }
        return view('index', compact('categories', 'articles', 'categoryHasArticle'));
    }
}
