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
                                    <h6 class="text-start">{{ $article->writer }}</h6>
                                    <h6 class="text-start">رشتش</h6>
                                </div>
                                <img class="writer-img rounded shadow m-3"
                                    src="" alt="">
                            </div>
                            <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab sunt ut doloribus
                                quisquam dolor enim temporibus assumenda dignissimos minus dolore voluptatem, consequuntur
                                debitis nisi, laborum eius nemo repellat iste quas?</p>
                        </div>
                    </div>
                    <div class="card d-none d-md-flex mb-2 shadow">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="text-start">مقالات پربازدید</h5>
                            </div>
                            <div class="row row-cols-2 justify-content-center align-items-center">

                                <div class="col align-self-center my-3">
                                    <a href="">
                                        <div class="new-card-part shadow">
                                            <div class="new-card-body-part">
                                                <h6>
                                                    This is some text within a card body.
                                                </h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col align-self-center my-3">
                                    <a href="">
                                        <div class="new-card-part shadow">
                                            <div class="new-card-body-part">
                                                <h6>
                                                    This is some text within a card body.
                                                </h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>


                                <div class="col align-self-center my-3">
                                    <a href="">
                                        <div class="new-card-part shadow">
                                            <div class="new-card-body-part">
                                                <h6>
                                                    This is some text within a card body.
                                                </h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>


                                <div class="col align-self-center my-3">
                                    <a href="">
                                        <div class="new-card-part shadow">
                                            <div class="new-card-body-part">
                                                <h6>
                                                    This is some text within a card body.
                                                </h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>


                                <div class="col align-self-center my-3">
                                    <a href="">
                                        <div class="new-card-part shadow">
                                            <div class="new-card-body-part">
                                                <h6>
                                                    This is some text within a card body.
                                                </h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>


                                <div class="col align-self-center my-3">
                                    <a href="">
                                        <div class="new-card-part shadow">
                                            <div class="new-card-body-part">
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
                    <div class="card d-none d-md-flex mb-2 shadow">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="text-start">مقالات تازه</h5>
                            </div>
                            <div class="row row-cols-2 justify-content-center align-items-center">

                                <div class="col align-self-center my-3">
                                    <a href="">
                                        <div class="new-card-part shadow">
                                            <div class="new-card-body-part">
                                                <h6>
                                                    This is some text within a card body.
                                                </h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col align-self-center my-3">
                                    <a href="">
                                        <div class="new-card-part shadow">
                                            <div class="new-card-body-part">
                                                <h6>
                                                    This is some text within a card body.
                                                </h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>


                                <div class="col align-self-center my-3">
                                    <a href="">
                                        <div class="new-card-part shadow">
                                            <div class="new-card-body-part">
                                                <h6>
                                                    This is some text within a card body.
                                                </h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>


                                <div class="col align-self-center my-3">
                                    <a href="">
                                        <div class="new-card-part shadow">
                                            <div class="new-card-body-part">
                                                <h6>
                                                    This is some text within a card body.
                                                </h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>


                                <div class="col align-self-center my-3">
                                    <a href="">
                                        <div class="new-card-part shadow">
                                            <div class="new-card-body-part">
                                                <h6>
                                                    This is some text within a card body.
                                                </h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>


                                <div class="col align-self-center my-3">
                                    <a href="">
                                        <div class="new-card-part shadow">
                                            <div class="new-card-body-part">
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
                </div>
                <div class="col-12 col-md-9 my-2">
                    <div class="card px-4 py-2 shadow">
                        <div class="card-body">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-12 col-md-5 text-start my-4">
                                    <h1>{{ $article->title }}</h1>
                                    <p class="my-2">نویسنده: {{ $article->writer }}</p>
                                    <p>تاریخ: {{ $article->date }}</p>
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
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
