@extends('layouts.master')
@section('content')
    <section class="text-start mt-130">
        <div class="container text-start">
            <div class="row justify-content-evenly align-items-start">
                <div class="col-8 px-5">
                    <p class="profile-info">{{ $userAuth->name }}</p>
                    <p class="profile-info">{{ $userAuth->profile->study }}</p>
                    <p>{!! $userAuth->profile->info !!}</p>
                    <a class="btn btn-sm btn-info mt-3" href="{{ route('profile.edit') }}"> ویرایش پروفایل </a>
                    <a class="btn btn-sm btn-danger mt-3" href="{{ route('password.edit') }}"> تغییر رمز </a>
                </div>
                <div class="col-4">

                    <img class="profile-img shadow" src="{{ asset('images/images/' . $userAuth->profile->photo) }}"
                        alt="عکس پروفایلش">

                </div>
            </div>
            <div class="row mt-5 px-5">
                <div class="h3-div d-flex justify-content-between align-items-center">
                    <h4 class="text-start">مقالات اضافه شده</h4>
                </div>

                <div class="row row-cols-2 row-cols-md-4 justify-content-center">

                    @foreach ($userAuth->articles as $article)
                        <div class="col align-self-center my-3 d-flex">
                            <div class="card-article-dashboard">
                                <a href="{{ route('article.show', $article->id) }}">
                                    <div class="new-card shadow"
                                        style="background-image: url('{{ asset('images/images/' . $article->image) }}')">
                                        <div class="new-card-body">
                                            <h6 class="text-center article-h6">
                                                {{ $article->intro }}
                                            </h6>
                                        </div>
                                    </div>
                                </a>
                                <div class="d-flex mt-3 justify-content-center">
                                    <a class="btn btn-sm btn-success mx-1" href="/article/{{ $article->id }}/edit">ویرایش
                                        مقاله</a>
                                    <a class="btn btn-sm btn-danger" href="">حذف</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
@endsection
