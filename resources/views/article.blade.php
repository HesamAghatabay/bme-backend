@extends('layouts.master')
@section('content')
    <section id="part" class="text-center mt-130">
        <div class="container-fluid">
            <div class="row align-items-start">
                <div class="col-12 col-md-3 sidbar-bg py-2 my-2">
                    <div class="card mb-2 shadow">
                        <div class="card-body">
                            <div class="writer-profile d-flex justify-content-between align-items-center">
                                <div class="">
                                    <h6 class="text-start">{{ $article->user->name }}</h6>
                                    <h6 class="text-start">{{ $article->user->profile->study }}</h6>
                                </div>
                                <img class="writer-img rounded shadow m-3"
                                    src="{{ asset('images/images/' . $article->user->profile->photo) }}"
                                    alt="{{ $article->user->name }}">
                            </div>
                            <p class="mt-4">{{ $article->user->profile->info }}</p>
                        </div>
                    </div>
                    <div class="card d-none d-md-flex mb-2 shadow">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="text-start">مقالات پربازدید</h5>
                            </div>
                            <div class="row row-cols-2 justify-content-center align-items-center">

                                @foreach ($bestArticles as $bArticle)
                                    <div class="col align-self-center my-3">
                                        <a href="{{ route('article.show', $bArticle->id) }}">
                                            <div class="new-card-part shadow"
                                                style="background-image: url('{{ asset('images/images/' . $bArticle->image) }}')">
                                                <div class="new-card-body-part">
                                                    <h6>
                                                        {{ $bArticle->title }}
                                                    </h6>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>

                    <div class="card d-none d-md-flex mb-2 shadow">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="text-start">مقالات تازه</h5>
                            </div>
                            <div class="row row-cols-2 justify-content-center align-items-center">

                                @foreach ($newArticles as $nArticle)
                                    <div class="col align-self-center my-3">
                                        <a href="{{ route('article.show', $nArticle->id) }}">
                                            <div class="new-card-part shadow"
                                                style="background-image: url('{{ asset('images/images/' . $nArticle->image) }}')">
                                                <div class="new-card-body-part">
                                                    <h6>
                                                        {{ $nArticle->title }}
                                                    </h6>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-9 my-2">
                    <div class="card px-4 py-2 shadow">
                        <div class="card-body">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-12 col-md-5 text-start my-4">
                                    <h1>{{ $article->title }}</h1>
                                    <p class="my-2">نویسنده: {{ $article->writer }}</p>
                                    <p>تاریخ: {{ $article->date }}</p>
                                    <div class="py-3 px-1">
                                        <span class=""> <i class="bi bi-eye-fill"></i> {{ $article->view }}</span>
                                        <span class="mx-5"><a href=""><i class="bi bi-emoji-heart-eyes-fill f-r">
                                                    {{ $article->likes }} </i></a>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-12 col-md-7">
                                    <img class="article-img rounded shadow"
                                        src="{{ asset('images/images/' . $article->image) }}" alt="">
                                </div>
                            </div>
                            <div class="article-text">
                                <p class="mb-5">{{ $article->body }}</pcl>
                            </div>
                        </div>
                        <div class="row justify-content-center my-4">
                            <div class="col-10 mb-5">
                                @foreach ($comments as $comment)
                                    <div class="card text-start p-2">
                                        <p class="f-b mb-2">{{ $comment->name }}</p>
                                        <div class="card-body">
                                            <p>{{ $comment->body }}</p>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                            <div class="col-9 text-start p-5">
                                <form action="{{ route('comment.store', $article->id) }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-10 col-md-6 text-center">


                                            <input type="text" class="form-control mb-4"
                                                placeholder="نام و نام خانوادگی خود را وارد کنید" id="name"
                                                name="name">
                                            @error('name')
                                                <p class="f-r mb-4">{{ $message }}</p>
                                            @enderror

                                            <button type="submit" class="btn btn-info px-5"> ثبت نظر</button>
                                        </div>
                                        <div class="col-10 col-md-6">
                                            <textarea name="body" class="form-control" placeholder="نظرتان را اینجا بنویسید" id="body" cols="35"
                                                rows="10"></textarea>
                                            @error('body')
                                                <p class="f-r mb-4">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
