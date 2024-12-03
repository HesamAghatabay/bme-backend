@extends('layouts.master')
@section('content')
    <section class="text-start mt-130">
        <div class="container text-start">
            <div class="row justify-content-center align-items-center">
                <div class="col-8 px-5">
                    <p class="profile-info">{{ $userAuth->name }}</p>
                    <p class="profile-info">دانشگاه و رشتش و تحصیلات</p>
                    <p>توضیحات</p>
                    <a href="">ویرایش پروفایل</a>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="" alt="عکس پروفایلش">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5 px-5">
                <div class="h3-div d-flex justify-content-between align-items-center">
                    <h4 class="text-start">مقالات اضافه شده</h4>
                </div>

                <div class="row row-cols-2 row-cols-md-4 justify-content-center">

                    <div class="col align-self-center my-3">
                        <a href="">
                            <div class="new-card shadow">
                                <div class="new-card-body">
                                    <h6>
                                        This is some text within a card body.
                                    </h6>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col align-self-center my-3">
                        <a href="">
                            <div class="new-card shadow">
                                <div class="new-card-body">
                                    <h6>
                                        This is some text within a card body.
                                    </h6>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col align-self-center my-3">
                        <a href="">
                            <div class="new-card shadow">
                                <div class="new-card-body">
                                    <h6>
                                        This is some text within a card body.
                                    </h6>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col align-self-center my-3">
                        <a href="">
                            <div class="new-card shadow">
                                <div class="new-card-body">
                                    <h6>
                                        This is some text within a card body.
                                    </h6>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col align-self-center my-3">
                        <a href="">
                            <div class="new-card shadow">
                                <div class="new-card-body">
                                    <h6>
                                        This is some text within a card body.
                                    </h6>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col align-self-center my-3">
                        <a href="">
                            <div class="new-card shadow">
                                <div class="new-card-body">
                                    <h6>
                                        This is some text within a card body.
                                    </h6>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
