@extends('layouts.master')
@section('content')
    <section id="parts" class="text-center">

        <div class="container">
            <div class="row">

                @foreach ($categories as $category)
                    <div class="col-4 col-md-2">
                        <a href="{{ route('category.show', $category->id) }}" class="">
                            <div class="parts-card mt-5">
                                <img src="{{ asset('images/images/' . $category->image) }}"
                                    class="card-img-top card-img shadow" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $category->title }}</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </section>


    <section id="part" class="text-center mt-130">
        <div class="container-fluid">
            <div class="row align-items-start">
                <div class="col-12 col-md-3">
                    <div class="card mb-2">

                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="text-start">{{ $thiscategory->title }}</h5>
                            </div>
                            <p>{{ $thiscategory->info }}</p>
                        </div>
                        <div class="row row-cols-2 justify-content-center mx-5 p-2 mt-4">
                            <div class="col">
                                <a href="{{ route('category.edit', $thiscategory->id) }}" class="btn btn-warning">ویرایش
                                </a>
                            </div>
                            <div class="col">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    حذف
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">آیا
                                                    {{ $thiscategory->title }} را حذف می کنید؟</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">لغو</button>
                                                <form method="POST"
                                                    action="{{ route('category.destroy', $thiscategory->id) }}">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger">حذف</button>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card d-none d-md-flex mb-2">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="text-start">مقالات پرمخاطب</h5>
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
                    <div class="card d-none d-md-flex mb-2">
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
                <div class="col-12 col-md-9">
                    <div class="card px-4 py-2">
                        <div class="card-body">
                            <div class="row row-cols-md-4 px-3 pb-5 justify-content-center align-items-center">

                                @foreach ($thiscategory->articles as $article)`
                                    <a href="{{ route('article.show', $article->id) }}" class="gx-3 gy-5 article-part">
                                        <div class="card shadow">
                                            <img src="{{ asset('images/images/' . $article->image) }}"
                                                class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="f-b-25">{{ $article->title }}</h5>
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
