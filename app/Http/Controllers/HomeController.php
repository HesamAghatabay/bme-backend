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
        $categories = category::all();
        // dd($categories->count());
        // $articles = article::all();
        foreach ($categories as $categories) {
            $articles = DB::table('articles')->where('category_id', $categories->id)->get();
        }
        return view('index', compact('categories', 'articles'));
    }
}
