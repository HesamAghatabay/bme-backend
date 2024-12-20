@extends('layouts.master')
@section('content')
    <section id="part" class="text-center mt-130">
        <div class="container-fluid">
            <div class="row align-items-start">
                <div class="col-12 col-md-3">

                    <div class="card d-none d-md-flex mb-2">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="text-start">مقالات پرمخاطب</h5>
                            </div>
                            <div class="row row-cols-2 justify-content-center align-items-center">

                                @foreach ($bestarticles as $bArticle)
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
                    <div class="card d-none d-md-flex mb-2">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="text-start">مقالات تازه</h5>
                            </div>
                            <div class="row row-cols-2 justify-content-center align-items-center">

                                @foreach ($newarticles as $nArticles)
                                    <div class="col align-self-center my-3">
                                        <a href="{{ route('article.show', $nArticles->id) }}">
                                            <div class="new-card-part shadow"
                                                style="background-image: url('{{ asset('images/images/' . $nArticles->image) }}')">
                                                <div class="new-card-body-part">
                                                    <h6>
                                                        {{ $nArticles->title }}
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
                <div class="col-12 col-md-9">
                    <div class="card px-4 py-2">
                        <div class="card-body">
                            <div class="row row-cols-md-4 px-3 pb-5 justify-content-center align-items-center">

                                @foreach ($newarticles as $article)
                                    <a href="{{ route('article.show', $article->id) }}" class="gx-3 gy-5 article-part">
                                        <div class="card shadow">
                                            <img src="{{ asset('images/images/' . $article->image) }}" class="card-img-top"
                                                alt="...">
                                            <div class="card-body">
                                                <h5 class="f-b-25">{{ $article->title }}</h5>
                                                <span class=""> <i class="bi bi-eye-fill"></i>
                                                    {{ $article->view }}</span>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
