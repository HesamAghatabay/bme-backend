@extends('layouts.master')
@section('content')
    <!-- parts -->
    <section id="parts" class="text-center">
        <div class="h3-div">
            <h3>دسته ها</h3>
        </div>
        <div class="container">
            <div class="row">

                <div class="col-4 col-md-2">
                    <a href="#" class="">
                        <div class="parts-card mt-5">
                            <img src="{{ asset('imgs/img-1.jpg') }}" class="card-img-top card-img shadow" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-4 col-md-2">
                    <a href="#" class="">
                        <div class="parts-card mt-5">
                            <img src="{{ asset('imgs/img-1.jpg') }}" class="card-img-top card-img shadow" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-4 col-md-2">
                    <a href="#" class="">
                        <div class="parts-card mt-5">
                            <img src="{{ asset('imgs/img-1.jpg') }}" class="card-img-top card-img shadow" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-4 col-md-2">
                    <a href="#" class="">
                        <div class="parts-card mt-5">
                            <img src="{{ asset('imgs/img-1.jpg') }}" class="card-img-top card-img shadow" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-4 col-md-2">
                    <a href="#" class="">
                        <div class="parts-card mt-5">
                            <img src="{{ asset('imgs/img-1.jpg') }}" class="card-img-top card-img shadow" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-4 col-md-2">
                    <a href="#" class="">
                        <div class="parts-card mt-5">
                            <img src="{{ asset('imgs/img-1.jpg') }}" class="card-img-top card-img shadow" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                            </div>
                        </div>
                    </a>
                </div>


            </div>
        </div>
    </section>


    <!-- best-articles -->
    <section id="best-articles" class="text-center">
        <div class="container-fluid best-articles-bg px-5">
            <div class="d-flex h3-div justify-content-between align-items-center">
                <h3 class="text-start">مقالات پرمخاطب</h3>
                <a href="" class="text-end button-71 shadow">مشاهده همه</a>
            </div>
            <div class="row row-cols-2 row-cols-md-6">

                <a href="#" class="button-92 my-5">
                    <div class="col-6 w-100">
                        <div class="card text-start">
                            <img src="{{ asset('imgs/img-2.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body shadow">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text my-3">Some quick example text to build on the card title and
                                </p>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="#" class="button-92 my-5">
                    <div class="col-6 w-100">
                        <div class="card text-start">
                            <img src="{{ asset('imgs/img-2.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body shadow">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text my-3">Some quick example text to build on the card title and
                                </p>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="#" class="button-92 my-5">
                    <div class="col-6 w-100">
                        <div class="card text-start">
                            <img src="{{ asset('imgs/img-2.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body shadow">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text my-3">Some quick example text to build on the card title and
                                </p>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="#" class="button-92 my-5">
                    <div class="col-6 w-100">
                        <div class="card text-start">
                            <img src="{{ asset('imgs/img-2.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body shadow">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text my-3">Some quick example text to build on the card title and
                                </p>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="#" class="button-92 my-5">
                    <div class="col-6 w-100">
                        <div class="card text-start">
                            <img src="{{ asset('imgs/img-2.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body shadow">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text my-3">Some quick example text to build on the card title and
                                </p>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="#" class="button-92 my-5">
                    <div class="col-6 w-100">
                        <div class="card text-start">
                            <img src="{{ asset('imgs/img-2.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body shadow">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text my-3">Some quick example text to build on the card title and
                                </p>
                            </div>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </section>


    <!-- new-articles -->
    <section id="new-articles" class="text-center">
        <div class="container">
            <div class="h3-div d-flex justify-content-between align-items-center">
                <h3 class="text-start">مقالات جدید</h3>
                <a href="" class="text-end button-71 shadow">مشاهده همه</a>
            </div>
            <div class="row row-cols-2 row-cols-md-5 justify-content-center align-items-center">

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
    </section>


    <!-- ////////////part-1-articles//////////// -->
    <section id="part-1-articles" class="text-center mt-130">
        <div class="container">
            <div class="h3-div d-flex justify-content-between align-items-center">
                <h3 class="text-start">مقالات دسته اول</h3>
                <a href="" class="text-end button-71 shadow">مشاهده همه</a>
            </div>
            <div class="row row-cols-2 row-cols-md-4 justify-content-center align-items-center">

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
    </section>


    <!-- ////////////part-2-articles//////////// -->
    <section id="part-2-articles" class="text-center mt-130">
        <div class="container">
            <div class="h3-div d-flex justify-content-between align-items-center">
                <h3 class="text-start">مقالات دسته دوم</h3>
                <a href="" class="text-end button-71 shadow">مشاهده همه</a>
            </div>
            <div class="row row-cols-2 row-cols-md-4 justify-content-center align-items-center">

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
    </section>


    <!-- ////////////part-3-articles//////////// -->
    <section id="part-3-articles" class="text-center mt-130">
        <div class="container">
            <div class="h3-div d-flex justify-content-between align-items-center">
                <h3 class="text-start">مقالات دسته سوم</h3>
                <a href="" class="text-end button-71 shadow">مشاهده همه</a>
            </div>
            <div class="row row-cols-2 row-cols-md-4 justify-content-center align-items-center">

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
    </section>


    <!-- ////////////part-4-articles//////////// -->
    <section id="part-4-articles" class="text-center mt-130">
        <div class="container">
            <div class="h3-div d-flex justify-content-between align-items-center">
                <h3 class="text-start">مقالات دسته چهارم</h3>
                <a href="" class="text-end button-71 shadow">مشاهده همه</a>
            </div>
            <div class="row row-cols-2 row-cols-md-4 justify-content-center align-items-center">

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
    </section>



    <!-- ////////////part-5-articles//////////// -->
    <section id="part-5-articles" class="text-center mt-130">
        <div class="container">
            <div class="h3-div d-flex justify-content-between align-items-center">
                <h3 class="text-start">مقالات دسته پنجم</h3>
                <a href="" class="text-end button-71 shadow">مشاهده همه</a>
            </div>
            <div class="row row-cols-2 row-cols-md-4 justify-content-center align-items-center">

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
    </section>



    <!-- ////////////part-6-articles//////////// -->
    <section id="part-6-articles" class="text-center mt-130">
        <div class="container">
            <div class="h3-div d-flex justify-content-between align-items-center">
                <h3 class="text-start">مقالات دسته ششم</h3>
                <a href="" class="text-end button-71 shadow">مشاهده همه</a>
            </div>
            <div class="row row-cols-2 row-cols-md-4 justify-content-center align-items-center">

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
    </section>



    <!-- //////////////about//////////////// -->
    <section id="about" class="text-center mt-130">
        <div class="comtainer px-3">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-md-6">
                    <video class="video rounded mb-4" muted="" type="video/mp4" id="videoPlayer" controls="">
                        <source src="https://shahroodut.ac.ir/en/sec/files/fl/44/about/about.mp4">
                        Your browser does not support the video tag.
                    </video>
                    <div class="text-start px-4">
                        <h4 class="my-4"> دانشگاه صنعتی شاهرود در مسیر پیشرفت و افتخار</h4>
                        <p>
                            دانشگاه صنعتی شاهرود اولین دانشگاه استان سمنان در سال 1352 تحت عنوان «مدرسه عالی معدن»
                            فعالیت خود را با ایجاد رشته تقاضامحور كاردانی استخراج زغالسنگ آغاز کرد. در سال 1366 با
                            ایجاد
                            رشته-های مهندسی معدن و دوره‌های كاردانی عمران و برق به «مجتمع آموزش عالی شاهرود» تبدیل
                            شد.
                            این دانشگاه پس از ایجاد و توسعه رشته‌های مختلف تحصیلی به ویژه گسترش تحصیلات تكمیلی در
                            رشته
                            های فنی و مهندسی از سال 1381 تحت عنوان «دانشگاه صنعتی شاهرود» به فعالیت خود ادامه
                            می‌دهد.
                            اینک پس از گذشت بیش از چهار دهه، دانشگاه با ارکان‌های تصمیم‌گیری مستقل هیات امناء، هیات
                            ممیزه و هیات اجرایی جذب هیات علمی؛ فعالیت‌های آموزشی و پژوهشی خود را در قالب چهار پردیس
                            تحت
                            عناوین پردیس مرکزی، پردیس مهندسی و فناوری‌های نوین، پردیس مهندسی کشاورزی و پردیس معدن
                            آموزشی
                            و 14 دانشکده، مرکز آموزش‌های الکترونیکی، مرکز آموزش‌های آزاد مهارت محور، چهار پژوهشکده،
                            دو
                            مرکز پژوهشی، یک گروه پژوهشی، مرکز رشد فناوری های نوین و یک قطب علمی ادامه داده و در مسیر
                            دانشگاه کارآفرین گام بر می‌دارد.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 py-5">
                    <div id="carouselExample" class="carousel slide">
                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <a href="">
                                    <img src="{{ asset('imgs/img-1.jpg') }}" class="d-block img-ostadha rounded shadow"
                                        alt="...">
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a href="">
                                    <img src="{{ asset('imgs/img-2.jpg') }}" class="d-block img-ostadha rounded shadow"
                                        alt="...">
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a href="">
                                    <img src="{{ asset('imgs/img-3.jpg') }}" class="d-block img-ostadha rounded shadow"
                                        alt="...">
                                </a>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-3">
                            <h5 class="seener-ostadha mx-3">اساتید ناظر مقالات</h5>
                            <a class="mx-1" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                <i class="bi bi-arrow-right-square-fill f-blue f-25"></i>
                            </a>
                            <a class="mx-1" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                <i class="bi bi-arrow-left-square-fill f-blue f-25"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
