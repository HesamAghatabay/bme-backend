<?php

namespace App\Http\Controllers;

use App\Models\article;
use App\Models\category;
use App\Models\view;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
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
        return view('add-article');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'intro' => 'required',
            'resources' => 'required|max:255',
            'writer' => 'required|max:255',
            'date' => 'required|date',
            'body' => 'required'
        ], [
            'title.required' => 'عنوان الزامی است',
            'title.max' => 'بیش از حد مجاز',
            'image.required' => 'تصویر الزامی است',
            'image.max' => 'بیش از حد مجاز',
            'intro.required' => 'توضیحات الزامی است',
            'resources.required' => 'نوشتن منابع الزامی است',
            'resources.max' => 'بیش از حد مجاز',
            'writer.required' => 'نوشتن نویسنده الزامی است',
            'writer.max' => 'بیش از حد مجاز',
            'date.reauired' => 'تاریخ الزامی است',
            'body.required' => 'متن بدنه الزامی است'
        ]);
        $filename = time() . ' - ' . $request->image->getClientOriginalName();
        $request->image->storeAs('/images', $filename);
        $userid = Auth::user()->id;
        $article = article::create([
            'title' => $request->title,
            'image' => $filename,
            'intro' => $request->intro,
            'resources' => $request->resources,
            'writer' => $request->writer,
            'date' => $request->date,
            'body' => $request->body,
            'category_id' => $request->category_id,
            'user_id' => $userid,
        ]);
        if (!$article) {
            return redirect()->back()->with('error', 'ارسال مقاله با مشکل مواجه شد لطفا دوباره تلاش کنید');
        }
        return redirect()->route('index')->with('success', 'مقاله با موفقیت ثبت شد');
    }

    /**
     * Display the specified resource.
     */
    public function show(article $article, $id)
    {
        $newArticles = article::latest()->take(8)->get();
        $bestArticles = DB::table('articles')->orderBy('likes', 'desc')->take(6)->get();
        $article = Article::where('id', $id)->where('activity', 1)->first();
        if (!$article) {
            return redirect()->route('index')->with('error', 'مقاله مورد نظر تایید نشده است لطفا منتظر بمانید');
        }
        $comments = $article->comments()->where('activity', 1)->get();
        $articleCookieName = 'viewed_article_' . $id;
        if (!Cookie::get($articleCookieName)) {
            $article->increment('view');
            Cookie::queue($articleCookieName, 'true', 120);
        }
        return view('article', compact('article', 'comments', 'newArticles', 'bestArticles'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(article $article)
    {
        //
    }
}
