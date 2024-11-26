@extends('layouts.master')
@section('content')
    <h1 class="text-center mt-5 pt-5">صفحه افزودن دسته جدید</h1>
    <section class="text-start mt-130 bg-add-article py-5">
        <form action="">
            <div class="container">

                <form method="POST" action="{{ route('store-category') }}">
                    @csrf
                    <div class="row justify-content-center align-items-start">
                        <div class="col-10 col-md-10">
                            <label for="title" class="form-label">عنوان</label>
                            <input type="text" class="form-control mb-2" name="title" id="title"
                                placeholder="عنوان">
                            @error('title')
                                <p class="f-r mb-4">{{ $message }}</p>
                            @enderror


                            <label for="img" class="form-label">تصویر</label>
                            <input type="file" class="form-control mb-2" name="img" id="img"
                                placeholder="بارگذاری عکس ">
                            @error('img')
                                <p class="f-r mb-4">{{ $message }}</p>
                            @enderror


                            <label for="body" class="form-label"> بدنه و توضیحات </label>
                            <textarea name="body" id="body" class="form-control" placeholder="توضیحات مختصر در مورد دسته" rows="15"
                                cols="30"></textarea>
                            @error('body')
                                <p class="f-r mb-4">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-3 text-start my-4">
                            <button type="submit" class="btn btn-info m-4">ثبت دسته</button>
                        </div>
                    </div>
                </form>
            </div>
        </form>
    </section>
@endsection
