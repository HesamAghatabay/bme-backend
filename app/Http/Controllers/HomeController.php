<?php

namespace App\Http\Controllers;

use App\Models\article;
use App\Models\category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = category::all();
        $articles = article::all();
        return view('index', compact('categories', 'articles'));
    }
}
