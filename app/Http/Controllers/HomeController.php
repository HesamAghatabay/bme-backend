<?php

namespace App\Http\Controllers;

use App\Models\allarticles;
use App\Models\article;
use App\Models\category;
use App\Models\profile;
use App\Models\User;
use App\Models\view;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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

        $categoryHasArticle = Category::has('articles')->get();
        $latestArticleWithoutActivity = article::where('activity', 0)->limit(10)->get();
        // $categoryHasArticle = Category::with(['articles' => function ($query) {
        //     $query->where('activity', 1);
        // }])->get();
        // $categoryHasArticle = $categoryHasArticle->filter(function ($category) {
        //     return $category->articles->isNotEmpty();
        // });

        // foreach ($categories as $categories) {
        //     $articles = DB::table('articles')->where('category_id', $categories->id)->get();
        // }
        return view('index', compact('categories', 'articles', 'bestarticles', 'categoryHasArticle', 'newarticles', 'latestArticleWithoutActivity'));
    }
    public function create()
    {
        $isAdmin = Auth::user()->is_admin;
        if (!$isAdmin) {
            return redirect()->route('index')->with('error', 'مجوز دسترسی ندارید ');
        }
        return view('create-client');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'phone' => 'required|max:255|unique:users',
            'email' => 'max:255|email',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required'
        ], [
            'name.required' => '*نام و نام خانوادگی الزامی است*',
            'name.max' => '*بیش از حد مجاز*',
            'phone.required' => '*شماره تماس الزامی است*',
            'phone.max' => '*بیش از حد مجاز*',
            'email.max' => '*بیش از حد مجاز*',
            'email.email' => '*ایمیل خود را به صورت صحیح وارد کنید*',
            'password.required' => '*ایجاد رمز الزامی است*',
            'password.min' => '*حداقل 8 کارکتر*',
            'password_confirmation.required' => '*تاییده رمز الزامی است*',
            'password_confirmation.password_confirmation' => 'تاییده رمز را به صورت صحیح وارد کنید'
        ]);
        $user = User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'userip' => $request->ip(),
            'password' => Hash::make($request->password),
        ]);
        $profile = profile::create([
            'study' => '',
            'photo' => '',
            'info' => '',
            'user_id' => $user->id,
        ]);
        // $role = DB::table('role_user')->insert($user->id);

        if (!$user) {
            return redirect()->back()->with('error', $request->name . 'ثبت نام با مشکل مواجه شد!');
        }
        return redirect()->route('index')->with('success', $request->name . 'ثبت نام با موفقیت انجام شد . لطفا برای دسترسی به سایت اقدام به ورود نمایید!');
    }
    public function destroy(Request $request, $id)
    {
        $isAdmin = Auth::user()->is_admin;
        if (!$isAdmin) {
            return redirect()->route('index')->with('error', 'مجوز دسترسی ندارید ');
        }
        $user = User::findOrFail($id);
        $destroyUser = $user->delete();
        if (!$destroyUser) {
            return redirect()->back()->with('error', 'تلاش مجدد');
        }
        return redirect()->route('roles')->with('success', ' کاربر ' . $user->name . 'با موفقیت حذف شد ');
    }
    public function allarticles()
    {
        $allArticles = allarticles::latest()->where('activity', 1)->get();
        $newarticles = article::latest()->where('activity', 1)->take(10)->get();
        $bestarticles = DB::table('articles')->where('activity', 1)->orderBy('likes', 'desc')->take(6)->get();
        return view('all-articles', compact('bestarticles', 'newarticles', 'allArticles'));
    }
    public function bestarticles()
    {
        $newarticles = article::latest()->where('activity', 1)->take(10)->get();
        $bestarticles = DB::table('articles')->where('activity', 1)->orderBy('likes', 'desc')->take(6)->get();
        return view('best-articles', compact('bestarticles', 'newarticles'));
    }
    public function lastestarticles()
    {
        $newarticles = article::latest()->where('activity', 1)->take(10)->get();
        $bestarticles = DB::table('articles')->where('activity', 1)->orderBy('likes', 'desc')->take(6)->get();
        return view('lastest-articles', compact('bestarticles', 'newarticles'));
    }
}
