@extends('layouts.master')
@section('content')
    <section id="parts" class="text-center">
        <div class="h3-div">
            <h3>دسته ها</h3>
        </div>
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
                                <p>{{$thiscategory->info}}</p>
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
                            <div class="row row-cols-md-3 justify-content-center align-items-center">


                                <a href="" class="gx-3 gy-5 article-part">
                                    <div class="card shadow">
                                        <img src="./imgs/img-3.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="f-b-25">Card title</h5>
                                        </div>
                                    </div>
                                </a>



                                <a href="" class="gx-3 gy-5 article-part">
                                    <div class="card shadow">
                                        <img src="./imgs/img-3.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="f-b-25">Card title</h5>
                                        </div>
                                    </div>
                                </a>



                                <a href="" class="gx-3 gy-5 article-part">
                                    <div class="card shadow">
                                        <img src="./imgs/img-3.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="f-b-25">Card title</h5>
                                        </div>
                                    </div>
                                </a>



                                <a href="" class="gx-3 gy-5 article-part">
                                    <div class="card shadow">
                                        <img src="./imgs/img-3.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="f-b-25">Card title</h5>
                                        </div>
                                    </div>
                                </a>



                                <a href="" class="gx-3 gy-5 article-part">
                                    <div class="card shadow">
                                        <img src="./imgs/img-3.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="f-b-25">Card title</h5>
                                        </div>
                                    </div>
                                </a>



                                <a href="" class="gx-3 gy-5 article-part">
                                    <div class="card shadow">
                                        <img src="./imgs/img-3.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="f-b-25">Card title</h5>
                                        </div>
                                    </div>
                                </a>



                                <a href="" class="gx-3 gy-5 article-part">
                                    <div class="card shadow">
                                        <img src="./imgs/img-3.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="f-b-25">Card title</h5>
                                        </div>
                                    </div>
                                </a>



                                <a href="" class="gx-3 gy-5 article-part">
                                    <div class="card shadow">
                                        <img src="./imgs/img-3.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="f-b-25">Card title</h5>
                                        </div>
                                    </div>
                                </a>



                                <a href="" class="gx-3 gy-5 article-part">
                                    <div class="card shadow">
                                        <img src="./imgs/img-3.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="f-b-25">Card title</h5>
                                        </div>
                                    </div>
                                </a>



                            </div>
                        </div>
                        <p>...pagination 1 2 3</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
