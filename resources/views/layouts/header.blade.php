<!doctype html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>index</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <link rel="icon" type="image/png" href="https://ckeditor.com/assets/images/favicons/32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="https://ckeditor.com/assets/images/favicons/96x96.png" sizes="96x96">
    <link rel="apple-touch-icon" type="image/png" href="https://ckeditor.com/assets/images/favicons/120x120.png"
        sizes="120x120">
    <link rel="apple-touch-icon" type="image/png" href="https://ckeditor.com/assets/images/favicons/152x152.png"
        sizes="152x152">
    <link rel="apple-touch-icon" type="image/png" href="https://ckeditor.com/assets/images/favicons/167x167.png"
        sizes="167x167">
    <link rel="apple-touch-icon" type="image/png" href="https://ckeditor.com/assets/images/favicons/180x180.png"
        sizes="180x180">
    <link rel="stylesheet" href="{{ asset('CKEditor5Folder/style.css') }}">
    <link rel="stylesheet" href="{{ asset('CKEditor5Folder/ckeditor5/ckeditor5.css') }}">

    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


</head>

<body>


    <!-- mobile header -->

    <header class="d-flex d-md-none shadow">
        <nav class="shadow">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-between">
                    <div class="col-4">
                        <div class="row row-cols-4 align-items-center">
                            {{-- <div class="col">
                                <a class="button-87s" href="{{ route('register') }}">ثبت نام</a>
                            </div>
                            <div class="col">
                                <a class="button-87s" href="{{ route('login') }}">ورود</a>
                            </div> --}}
                            <div class="col">
                                <a class="" href="{{ route('index') }}"><i
                                        class="bi bi-house-door-fill f-orange"></i></a>
                            </div>
                            <div class="col">
                                <div class="dropdown vazir">
                                    <h6 class="dropdown-toggle " data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-person-circle f-orange"></i>
                                    </h6>
                                    <ul class="dropdown-menu dropdown-bg">
                                        <li class="my-1 px-1"><a class="" href="{{ route('register') }}">ثبت
                                                نام</a></li>
                                        <li class="my-1 px-1"><a class="" href="{{ route('login') }}">ورود</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col">
                                <div class="dropdown vazir button-87s">
                                    <h6 class="dropdown-toggle " data-bs-toggle="dropdown" aria-expanded="false">
                                        افزودن
                                    </h6>
                                    <ul class="dropdown-menu dropdown-bg">
                                        <li class="my-1 px-1"><a class="" href="{{ route('article.add') }}">افزودن
                                                مقاله</a></li>
                                        <li class="my-1 px-1"><a class=""
                                                href="{{ route('category.add') }}">افزودن
                                                دسته</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-8">
                        <div class="serch-navs shadow">
                            <form action="" class="d-flex justify-content-center">
                                <input type="search" class="form-control" placeholder="جست و جو">
                                <button type="submit" class="btn btn-primary"><i class="bi bi-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row text-center justify-content-center">
                    <div class="col-8">

                        @if (session('success'))
                            <div class="alert alert-success zz" role="alert">
                                <p style="color: green">{{ session('success') }}</p>
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger zz" role="alert">
                                <p style="color: red">{{ session('error') }}</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </nav>
        @yield('mobileh')
    </header>


    <!-- desktop header -->
    <header class="d-none d-md-flex shadow">
        <nav class="shadow">
            <div class="container-fluid text-center">
                <div class="row justify-content-between align-items-center">
                    <div class="col col-3">
                        @guest
                            <a class="button-87" href="{{ route('register') }}">ثبت نام</a>
                            <a class="button-87" href="{{ route('login') }}">ورود</a>
                        @endguest
                        @auth
                            <a class="button-87" href="{{ route('article.add') }}">افزودن مقاله</a>
                            <a class="button-87" href="{{ route('category.add') }}">افزودن دسته</a>
                            <a class="button-87" href="{{ route('logout') }}">خروج</a>
                        @endauth
                    </div>
                    <div class="col col-6">
                        <ul class="d-md-flex justify-content-center align-items-center">
                            <li class="mx-4"><a class="vazir" href="{{ route('index') }}">خانه</a></li>
                            <!-- <li class="mx-4"><a class="a-bold" href="#parts">دسته ها</a></li> -->
                            <li class="mx-4">
                                <div class="dropdown vazir">
                                    <h6 class="dropdown-toggle h6-dropdown" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        دسته ها
                                    </h6>
                                    <ul class="dropdown-menu dropdown-bg">
                                        @foreach ($categories as $category)
                                            <li><a class="dropdown-item mt-1"
                                                    href="{{ route('category.show', $category->id) }}">{{ $category->title }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </li>
                            <!-- <li class="mx-4"><a class="a-bold" href="#articles">مقالات</a></li> -->
                            <li class="mx-4">
                                <div class="dropdown vazir">
                                    <h6 class="dropdown-toggle h6-dropdown" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        مقالات
                                    </h6>
                                    <ul class="dropdown-menu dropdown-bg">
                                        <li><a class="dropdown-item mt-1" href="#">مقالات پرطرفدار</a></li>
                                        <li><a class="dropdown-item mt-1" href="#">مقالات جدید</a></li>
                                        @foreach ($categories as $category)
                                            <li><a class="dropdown-item mt-1"
                                                    href="{{ route('category.show', $category->id) }}">مقالات
                                                    {{ $category->title }}</a></li>
                                        @endforeach

                                    </ul>
                                </div>
                            </li>
                            <li class="mx-4"><a class="vazir" href="#about">درباره ما</a></li>
                        </ul>
                    </div>
                    <div class="col col-3">
                        <!-- <img class="logo-img shadow" src="./imgs/logo.jpg" alt="bme-logo"> -->
                        <div class="serch-nav shadow">
                            <form action="" class="d-flex justify-content-center">
                                <input type="search" class="form-control" placeholder="مقالات خود را جست و جو کنید">
                                <button type="submit" class="btn btn-primary"><i class="bi bi-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row text-center justify-content-center">
                    <div class="col-8">

                        @if (session('success'))
                            <div class="alert alert-success zz" role="alert">
                                <p style="color: green">{{ session('success') }}</p>
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger zz" role="alert">
                                <p style="color: red">{{ session('error') }}</p>
                            </div>
                        @endif
                    </div>
                </div>

            </div>
        </nav>
        @yield('desktoph')
    </header>
