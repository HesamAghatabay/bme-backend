<?php

namespace App\Http\Controllers;

use App\Models\comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        $request->validate(
            [
                'name' => 'required|max:255',
                'body' => 'required'
            ],
            [
                'name.required' => 'نام و نام خانوادگی نمیتواند خالی باشد',
                'name.max' => 'ورودی بیش از حد مجاز',
                'body.required' => 'متن کامنت نمیتواند خالی باشد'
            ]
        );
        $userId = Auth::user()->id;
        $userIp = $request->ip();
        $comment = comment::create([
            'name' => $request->name,
            'body' => $request->body,
            'user_id' => $userId,
            'article_id' => $id,
            'userip' => $userIp
        ]);
        if (!$comment) {
            return redirect()->back()->with('error', ' نظر ثبت نشد لطفا دوباره سعی کنید');
        }
        return redirect()->route('article.show', $id)->with('success', 'درخواست ثبت نظر شما با موفقیت انجام شد');
    }

    /**
     * Display the specified resource.
     */
    public function show(comment $comment, $id)
    {
        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login')->with('error', 'لطفا وارد سایت شوید');
        }
        $comment = comment::findOrFail($id);
        $articleId = $comment->article->id;
        $usreRole = Auth::user()->roleUsers->role_id;
        // dd($usreRole);
        if ($usreRole != 1) {
            return redirect()->route('article.show', $articleId)->with('error', 'مجوز دسترسی ندارید');
        }
        // dd($articleId);
        $confirm = $comment->update([
            'activity' => 1,
        ]);
        if (!$confirm) {
            return redirect()->back()->with('error', 'دوباره تلاش کنید');
        }
        return redirect()->route('article.show', $articleId)->with('success', 'نظر' . $comment->name . 'تایید شد');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(comment $comment)
    {
        //
    }
}
