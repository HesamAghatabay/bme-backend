{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

@extends('layouts.master')
@section('content')
    <section class="text-start mt-130">
        <div class="container">
            <h1 class="text-center my-5">صفحه ورود</h1>
            <div class="row">
                <div class="col-12 px-5">

                    <form method="POST" action="{{ route('login.store') }}">
                        @csrf
                        <label for="phone" class="form-label">شماره تماس</label>
                        <input type="text" class="form-control mb-4" name="phone" id="phone">
                        @error('phone')
                            <p class="f-r mb-4">{{ $message }}</p>
                        @enderror

                        <label for="password" class="form-label">رمز عبور</label>
                        <input type="password" name="password" id="password" class="form-control mb-4">
                        @error('password')
                            <p class="f-r mb-4">{{ $message }}</p>
                        @enderror

                        <div class="d-flex align-items-center">
                            <button type="submit" class="btn btn-info mx-4">ورود</button>
                            <a class="forget-psass" href="{{ route('forgot.password') }}"> رمز خود را فراموش کرده اید. </a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
