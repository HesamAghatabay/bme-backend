@extends('layouts.master')
@section('content')
    <h1 class="text-center mt-5 pt-5">صفحه افزودن مقاله جدید</h1>
    <section class="text-start mt-130 bg-add-article py-5">
        <form method="POST" action="{{route('article.add')}}">
            @csrf
            <div class="container">

                <div class="row justify-content-center align-items-start">
                    <div class="col-10 col-md-4">
                        <label for="title" class="form-label">عنوان</label>
                        <input type="text" class="form-control mb-2" name="title" id="title" placeholder="عنوان">
                        @error('title')
                            <p class="f-r mb-4">{{ $message }}</p>
                        @enderror


                        <label for="img" class="form-label">تصویر</label>
                        <input type="file" class="form-control mb-2" name="img" id="img"
                            placeholder="بارگذاری عکس ">
                        @error('img')
                            <p class="f-r mb-4">{{ $message }}</p>
                        @enderror


                        <label for="info" class="form-label">مقدمه</label>
                        <input type="text" class="form-control mb-2" name="info" id="info" placeholder="مقدمه">
                        @error('info')
                            <p class="f-r mb-4">{{ $message }}</p>
                        @enderror


                        <label for="Resources" class="form-label">منابع</label>
                        <input type="text" class="form-control mb-2" name="Resources" id="Resources" placeholder="منابع">
                        @error('Resources')
                            <p class="f-r mb-4">{{ $message }}</p>
                        @enderror


                        <label for="writer" class="form-label">نویسنده</label>
                        <input type="text" class="form-control mb-2" name="writer" id="writer" placeholder="نویسنده">
                        @error('writer')
                            <p class="f-r mb-4">{{ $message }}</p>
                        @enderror


                        <label for="date" class="form-label">تاریخ</label>
                        <input type="date" class="form-control mb-2" name="date" id="date">
                        @error('date')
                            <p class="f-r mb-4">{{ $message }}</p>
                        @enderror

                    </div>

                    <div class="col-10 col-md-7">
                        <label for="body" class="form-label">بدنه</label>
                        <div>
                            <div class="main-container">
                                <div class="editor-container editor-container_classic-editor" id="editor-container">
                                    <div class="editor-container__editor">
                                        <div id="editor"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @error('editor')
                            <p class="f-r mb-4">{{ $message }}</p>
                        @enderror
                        {{-- <textarea name="body" id="body" class="form-control" rows="15" cols="30"></textarea> --}}
                    </div>

                </div>
                <div class="row justify-content-start">
                    <div class="col-3 text-end mt-4">
                        <button type="submit" class="btn btn-info m-4">ارسال مقاله</button>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection
