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
        $comment = comment::create([
            'name' => $request->name,
            'body' => $request->body,
            'user_id' => $userId,
            'article_id' => $id,
        ]);
        if (!$comment) {
            return redirect()->back()->with('error', ' نظر ثبت نشد لطفا دوباره سعی کنید');
        }
        return redirect()->route('article.show', $id)->with('success', 'درخواست ثبت نظر شما با موفقیت انجام شد');
    }

    /**
     * Display the specified resource.
     */
    public function show(comment $comment)
    {
        //
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
