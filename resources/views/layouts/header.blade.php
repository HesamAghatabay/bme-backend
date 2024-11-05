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
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


</head>

<body>


    <!-- mobile header -->

    <header class="d-flex d-md-none shadow">
        <nav class="shadow">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-between">
                    <div class="col-5">
                        <div class="row row-cols-3">
                            <div class="col">
                                <a class="button-87s" href="{{ route('register') }}">ثبت نام</a>
                            </div>
                            <div class="col">
                                <a class="button-87s" href="{{route('login')}}">ورود</a>
                            </div>
                            <div class="col">
                                <a class="button-87s" href="{{route('add-article')}}">افزودن </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="serch-navs shadow">
                            <form action="" class="d-flex justify-content-center">
                                <input type="search" class="form-control" placeholder="جست و جو">
                                <button type="submit" class="btn btn-primary"><i class="bi bi-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        @yield('mobileh')
    </header>


    <!-- desktop hader -->
    <header class="d-none d-md-flex shadow">
        <nav class="shadow">
            <div class="container-fluid text-center">
                <div class="row justify-content-between align-items-center">
                    <div class="col col-3">
                        <a class="button-87" href="{{route('register')}}">ثبت نام</a>
                        <a class="button-87" href="{{route('login')}}">ورود</a>
                        <a class="button-87" href="{{route('add-article')}}">افزودن مقاله</a>
                    </div>
                    <div class="col col-6">
                        <ul class="d-md-flex justify-content-center align-items-center">
                            <li class="mx-4"><a class="vazir" href="{{route('index')}}">خانه</a></li>
                            <!-- <li class="mx-4"><a class="a-bold" href="#parts">دسته ها</a></li> -->
                            <li class="mx-4">
                                <div class="dropdown vazir">
                                    <h6 class="dropdown-toggle h6-dropdown" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        دسته ها
                                    </h6>
                                    <ul class="dropdown-menu dropdown-bg">
                                        <li><a class="dropdown-item mt-1" href="#">دسته اول</a></li>
                                        <li><a class="dropdown-item mt-1" href="#">دسته دوم</a></li>
                                        <li><a class="dropdown-item mt-1" href="#">دسته سوم</a></li>
                                        <li><a class="dropdown-item mt-1" href="#">دسته چهارم</a></li>
                                        <li><a class="dropdown-item mt-1" href="#">دسته پنجم</a></li>
                                        <li><a class="dropdown-item mt-1" href="#">دسته ششم</a></li>
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
                                        <li><a class="dropdown-item mt-1" href="#">مقالات دسته اول</a></li>
                                        <li><a class="dropdown-item mt-1" href="#">مقالات دسته دوم</a></li>
                                        <li><a class="dropdown-item mt-1" href="#">مقالات دسته سوم</a></li>
                                        <li><a class="dropdown-item mt-1" href="#">مقالات دسته چهارم</a></li>
                                        <li><a class="dropdown-item mt-1" href="#">مقالات دسته پنجم</a></li>
                                        <li><a class="dropdown-item mt-1" href="#">مقالات دسته ششم</a></li>
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
            </div>
        </nav>

        @yield('desktoph')
    </header>
