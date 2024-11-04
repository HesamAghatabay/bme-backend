@extends('layouts.master')
@section('content')
    <section class="text-start mt-130 bg-add-article py-5">
        <form action="">
            <div class="container">
                <div class="row justify-content-center align-items-start">
                    <div class="col-10 col-md-4">
                        <label for="title" class="form-label">عنوان</label>
                        <input type="text" class="form-control mb-2" name="title" id="title" placeholder="عنوان">

                        <label for="img" class="form-label">عکس</label>
                        <input type="file" class="form-control mb-2" name="img" id="img"
                            placeholder="بارگذاری عکس ">

                        <label for="info" class="form-label">مقدمه</label>
                        <input type="text" class="form-control mb-2" name="info" id="info" placeholder="مقدمه">

                        <label for="Resources" class="form-label">منابع</label>
                        <input type="text" class="form-control mb-2" name="Resources" id="Resources" placeholder="منابع">

                        <label for="writer" class="form-label">نویسنده</label>
                        <input type="text" class="form-control mb-2" name="writer" id="writer" placeholder="نویسنده">

                        <label for="date" class="form-label">تاریخ</label>
                        <input type="date" class="form-control mb-2" name="date" id="date">
                    </div>

                    <div class="col-10 col-md-7">
                        <label for="body" class="form-label">بدنه</label>
                        <textarea name="body" id="body" class="form-control" rows="15" cols="30"></textarea>
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
