@extends('layouts.master')
@section('content')
    <h1 class="text-center mt-5 pt-5">ویرایش {{ $category->title }}</h1>
    <section class="text-start mt-130 bg-add-article py-5">
        <div class="container">

            <form method="POST" action="/category/{{ $category->id }}" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row justify-content-center align-items-start">
                    <div class="col-10 col-md-10">
                        <label for="title" class="form-label">عنوان</label>
                        <input type="text" class="form-control mb-2" name="title" id="title" placeholder="عنوان"
                            value="{{ $category->title }}">
                        @error('title')
                            <p class="f-r mb-4">{{ $message }}</p>
                        @enderror


                        <label for="image" class="form-label">تصویر</label>
                        <input type="file" class="form-control mb-2" name="image" id="image"
                            placeholder="بارگذاری عکس ">
                        @error('image')
                            <p class="f-r mb-4">{{ $message }}</p>
                        @enderror


                        <label for="info" class="form-label"> بدنه و توضیحات </label>
                        <textarea name="info" id="editor1" class="ckeditor" placeholder="توضیحات مختصر در مورد دسته" rows="15"
                            cols="30">{{ $category->info }}</textarea>
                        @error('info')
                            <p class="f-r mb-4">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-3 text-start my-4">
                        <button type="submit" class="btn btn-info m-4">ثبت تغییرات</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
