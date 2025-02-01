@extends('layouts.master')
@section('content')
    <section id="" class="text-center mt-130">
        <div class="comtainer px-3">


            <div class="row justify-content-center align-items-center">
                <div class="col-10">
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
            </div>


            <div class="row justify-content-center align-items-center mb-200 mt-80">
                <div class="col-10 col-md-4">
                    <h5>رئیس دانشکده: محمدرضا جوان
                    </h5>
                    <p class="text-start"> دانشکده مهندسی برق از بزرگترین دانشکده های دانشگاه شاهرود محسوب می گردد. هسته
                        اولیه این دانشکده در
                        سال ۱۳۶۶ بعنوان گروه برق شکل گرفت. در حال حاضر این دانشکده درگرایش های الکترونیک، مخابرات، کنترل،
                        قدرت و مهندسی پزشکی در مقاطع مختلف کارشناسی و تحصیلات تکمیلی (ارشد، دکتری) دانشجو می پذیرد. در حال
                        حاضر ۳۲ عضو هیات علمی مجرب شامل ۳ نفر استاد تمام، ۱۲ نفر دانشیار و ۱۷ نفر استادیار بصورت تمام وقت در
                        این دانشکده فعالیت می نمایند. این دانشکده مجهز به ۳۲ آزمایشگاه آموزشی و تحقیقاتی می باشد. وجود
                        امکانات آزمایشگاهی و اعضاء هیات علمی مجرب این دانشکده را به فضایی مناسب جهت تربیت دانشجویان در مقاطع
                        تحصیلی مختلف تبدیل نموده است. کانال رسمی دانشکده در فضای مجازی: https://splus.ir/ee_sut تلفنهای
                        داخلی آموزش کارشناسی: ۳۲۲۶ داخلی آموزش ارشد: ۳۲۲۳ </p>
                </div>
                <div class="col-10 col-md-5">
                    <img class="rounded shadow w-100 my-4" src="{{ asset('imgs/bargh.jpg') }}" alt="دانشکده برق شاهرود">
                </div>
            </div>




            <div class="row justify-content-center align-items-start my-5">

                <div class="col-10 col-md-5 py-5">
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
