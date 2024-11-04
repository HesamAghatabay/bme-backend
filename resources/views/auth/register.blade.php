@extends('layouts.master')
@section('content')
    <section class="text-start mt-130">
        <div class="container">
            <h1 class="text-center my-5">صفحه ثبت نام</h1>
            <div class="row">
                <div class="col-12 px-5">
                    <form action="">

                        <label for="name" class="form-label"> نام و نام خانوادگی</label>
                        <input type="text" class="form-control mb-4" name="name" id="name"
                            placeholder="نام و نام خانوادگی خود را وارد کنید">

                        <label for="field" class="form-label"> رشته تحصیلی</label>
                        <input type="text" class="form-control mb-4" id="field" name="field"
                            placeholder="رشته تحضیلی خود را وارد کنید">

                        <label for="itro" class="form-label">توضیحات</label>
                        <textarea name="itro" id="itro" class="form-control mb-4"></textarea>

                        <label for="phone" class="form-label">شماره تماس</label>
                        <input type="text" class="form-control mb-4" name="phone" id="phone">

                        <label for="photo">بارگذاری عکس پروفایل</label>
                        <input type="file" name="photo" class="form-control mb-4 mt-2" id="photo">

                        <label for="password" class="form-label">رمز عبور</label>
                        <input type="password" name="password" id="password" class="form-control mb-4">

                        <label for="password-confirmation" class="form-label"></label>
                        <input type="password" name="password_confirmation" class="form-control" id="password-confirmation">

                        <button type="submit" class="btn btn-info">ثبت نام</button>

                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
