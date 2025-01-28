@extends('layouts.master')
@section('content')
    <h1 class="text-center mt-5 pt-5">صفحه افزودن مقاله جدید</h1>
    <section class="text-start mt-130 bg-add-article py-5">
        <form method="POST" action="article" enctype="multipart/form-data">
            @csrf
            <div class="container">

                <div class="row justify-content-center align-items-start">
                    <div class="col-10 col-md-4">
                        <label for="title" class="form-label">عنوان</label>
                        <input type="text" class="form-control mb-2" name="title" id="title" placeholder="عنوان">
                        @error('title')
                            <p class="f-r mb-4">{{ $message }}</p>
                        @enderror


                        <label for="image" class="form-label">تصویر</label>
                        <input type="file" class="form-control mb-2" name="image" id="image"
                            placeholder="بارگذاری عکس ">
                        @error('image')
                            <p class="f-r mb-4">{{ $message }}</p>
                        @enderror


                        <label for="intro" class="form-label">مقدمه</label>
                        <input type="text" class="form-control mb-2" name="intro" id="intro" placeholder="مقدمه">
                        @error('intro')
                            <p class="f-r mb-4">{{ $message }}</p>
                        @enderror


                        <label for="resources" class="form-label">منابع</label>
                        <input type="text" class="form-control mb-2" name="resources" id="resources" placeholder="منابع">
                        @error('resources')
                            <p class="f-r mb-4">{{ $message }}</p>
                        @enderror


                        <label for="writer" class="form-label">نویسنده</label>
                        <input type="text" class="form-control mb-2" name="writer" id="writer" placeholder="نویسنده">
                        @error('writer')
                            <p class="f-r mb-4">{{ $message }}</p>
                        @enderror


                        <label for="date" class="form-label">تاریخ</label>
                        <input type="datetime-local" class="form-control mb-2" name="date" id="date">
                        @error('date')
                            <p class="f-r mb-4">{{ $message }}</p>
                        @enderror


                        <label for="category-id" class="form-label">دسته</label>
                        <select class="form-select" id="category-id" name="category_id" aria-label="Default select example">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach

                        </select>
                        {{-- <input type="date" class="form-control mb-2" name="date" id="date"> --}}
                        @error('category_id')
                            <p class="f-r mb-4">{{ $message }}</p>
                        @enderror

                    </div>

                    <div class="col-10 col-md-7">
                        <label for="body" class="form-label">بدنه</label>
                        <textarea class="ckeditor mb-2" name="body" id="editor1"></textarea>
                        @error('body')
                            <p class="f-r mb-4">{{ $message }}</p>
                        @enderror
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
