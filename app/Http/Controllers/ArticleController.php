<?php

namespace App\Http\Controllers;

use App\Models\allarticles;
use App\Models\article;
use App\Models\category;
use App\Models\confirm;
use App\Models\view;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

use function Laravel\Prompts\confirm;

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
        $userIp = $request->ip();
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
            'userip' => $userIp
        ]);
        $allArticles = allarticles::create([
            'title' => $request->title,
            'image' => $filename,
            'intro' => $request->intro,
            'resources' => $request->resources,
            'writer' => $request->writer,
            'date' => $request->date,
            'body' => $request->body,
            'category_id' => $request->category_id,
            'user_id' => $userid,
            'userip' => $userIp
        ]);
        if (!$article || !$allArticles) {
            return redirect()->back()->with('error', 'ارسال مقاله با مشکل مواجه شد لطفا دوباره تلاش کنید');
        }
        return redirect()->route('index')->with('success', 'مقاله با موفقیت ثبت شد');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // dd($userRole);
        $newArticles = article::latest()->take(8)->get();
        $bestArticles = DB::table('articles')->orderBy('likes', 'desc')->take(6)->get();
        $article = Article::where('id', $id)->where('activity', 1)->first();
        $latestArticleWithoutActivity = article::where('id', $id)->where('activity', 0)->first();
        // dd($confirm);
        // if (Auth::check()) {
        //     $userRole = Auth::user()->roleUsers->role_id;
        //     if ($latestArticleWithoutActivity && ($userRole == 1 || $userRole == 2)) {
        //         return view('latestarticle', compact('newArticles', 'bestArticles', 'latestArticleWithoutActivity'));
        //         // dd($latestArticleWithoutActivity->title);
        //     }
        // }
        if (!$article) {
            $user = Auth::user();
            foreach ($user->roles as $role) {
                $therole = $role->id;
            }
            if ($therole == 1 || $therole == 2 || $therole == 3) {
                return view('latestarticle', compact('newArticles', 'bestArticles', 'latestArticleWithoutActivity'));
            }
            return redirect()->route('index')->with('error', 'مقاله مورد نظر تایید نشده است لطفا منتظر بمانید');
        }
        $confirm = $article->confirm;
        $comments = $article->comments()->where('activity', 1)->get();
        $commentsWithoutActivity = $article->comments()->where('activity', 0)->get();

        $articleCookieName = 'viewed_article_' . $id;
        if (!Cookie::get($articleCookieName)) {
            $article->increment('view');
            Cookie::queue($articleCookieName, 'true', 120);
        }

        return view('article', compact('article', 'confirm', 'commentsWithoutActivity', 'comments', 'newArticles', 'bestArticles'));
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
    public function confirm($id)
    {
        $user = Auth::user();
        $article = article::findOrFail($id);
        $activity = $article->update([
            'activity' => 1,
        ]);
        $confirm = confirm::create([
            'userIp' => $user->userip,
            'date' => Carbon::now(),
            'user_id' => $user->id,
            'article_id' => $id,
        ]);
        if (!$activity && !$confirm) {
            return redirect()->back()->with('error', 'دوباره تلاش نمایید');
        }
        return redirect()->route('index')->with('success', 'مقاله تایید شد');
    }
}
