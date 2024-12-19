@extends('layouts.master')
@section('content')
    <section class="text-start mt-130">
        <div class="container text-start">
            <div class="row justify-content-center align-items-start">
                <div class="col-7 px-5">
                    <p class="profile-info">{{ $userAuth->name }}</p>
                    <p class="profile-info">{{ $userAuth->profile->study }}</p>
                    <p>{{ $userAuth->profile->info }}</p>
                    <a class="btn btn-sm btn-info" href="{{ route('profile.edit') }}">ویرایش پروفایل</a>
                </div>
                <div class="col-5">
                    <div class="card">
                        <div class="card-body shadow">
                            <img class="profile-img" src="{{ asset('images/images/' . $userAuth->profile->photo) }}"
                                alt="عکس پروفایلش">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5 px-5">
                <div class="h3-div d-flex justify-content-between align-items-center">
                    <h4 class="text-start">مقالات اضافه شده</h4>
                </div>

                <div class="row row-cols-2 row-cols-md-4 justify-content-center">

                    @foreach ($userAuth->articles as $article)
                        <div class="col align-self-center my-3">
                            <a href="{{ route('article.show', $article->id) }}">
                                <div class="new-card shadow"
                                    style="background-image: url('{{ asset('images/images/' . $article->image) }}')">
                                    <div class="new-card-body">
                                        <h6>
                                            {{ $article->intro }}
                                        </h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
@endsection
