<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function addarticle()
    {
        return view('add-article');
    }
    public function addcategory()
    {
        return view('add-category');
    }

}
