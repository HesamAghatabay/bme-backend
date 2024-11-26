{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

@extends('layouts.master')
@section('content')
    <section class="text-start mt-130">
        <div class="container">
            <h1 class="text-center my-5">صفحه ثبت نام</h1>
            <div class="row">
                <div class="col-12 px-5">

                    <form method="POST" action="{{ route('register-store') }}">
                        @csrf

                        <label for="name" class="form-label"> نام و نام خانوادگی</label>
                        <input type="text" class="form-control mb-4" name="name" id="name"
                            placeholder="نام و نام خانوادگی خود را وارد کنید">

                        <label for="field" class="form-label"> رشته تحصیلی</label>
                        <input type="text" class="form-control mb-4" id="study" name="study"
                            placeholder="رشته تحضیلی خود را وارد کنید">


                        <label for="phone" class="form-label">شماره تماس</label>
                        <input type="text" class="form-control mb-4" name="phone" id="phone">

                        <label for="email" class="form-label">ایمیل</label>
                        <input type="email" class="form-control mb-4" name="email" id="email">

                        <label for="photo">بارگذاری عکس پروفایل</label>
                        <input type="file" name="photo" class="form-control mb-4 mt-2" id="photo">

                        <label for="itro" class="form-label">توضیحات</label>
                        <textarea name="itro" id="itro" class="form-control mb-4"></textarea>

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