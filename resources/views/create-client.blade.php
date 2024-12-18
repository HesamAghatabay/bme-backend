@extends('layouts.master')
@section('content')
    <section class="text-start mt-130">
        <div class="container">
            <h1 class="text-center my-5">صفحه افزودن کاربر جدید</h1>
            <div class="row">
                <div class="col-12 px-5">

                    <form method="POST" action="{{ route('client.store') }}">
                        @csrf

                        <label for="name" class="form-label"> نام و نام خانوادگی</label>
                        <input type="text" class="form-control mb-1" name="name" id="name"
                            placeholder="نام و نام خانوادگی خود را وارد کنید">
                        @error('name')
                            <p class="f-r mb-4">{{ $message }}</p>
                        @enderror

                        <label for="phone" class="form-label">شماره تماس</label>
                        <input type="text" class="form-control mb-4" name="phone" id="phone">
                        @error('phone')
                            <p class="f-r mb-4">{{ $message }}</p>
                        @enderror

                        <label for="email" class="form-label">ایمیل</label>
                        <input type="email" class="form-control mb-4" name="email" id="email">
                        @error('email')
                            <p class="f-r mb-4">{{ $message }}</p>
                        @enderror

                        <label for="password" class="form-label">رمز عبور</label>
                        <input type="password" name="password" id="password" class="form-control mb-4">
                        @error('password')
                            <p class="f-r mb-4">{{ $message }}</p>
                        @enderror

                        <label for="password-confirmation" class="form-label">تایید رمز عبور</label>
                        <input type="password" name="password_confirmation" class="form-control" id="password-confirmation">
                        @error('password-confirmation')
                            <p class="f-r mb-4">{{ $message }}</p>
                        @enderror

                        <button type="submit" class="btn btn-info">ثبت نام کاربر جدید</button>

                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
