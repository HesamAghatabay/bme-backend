@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row justify-content-center mt-130">
            <p class="mb-5">{{ $user->name }} عزیز شما در حال تغییر رمز عبور خود میباشید</p>
            <div class="col-8">

                <form method="POST" action="{{ route('password.updates', $user->id) }}">
                    @csrf
                    @method('put')
                    <label for="oldpassword" class="form-label"> رمز عبور قدیم</label>
                    <input type="password" name="oldpassword" id="oldpassword" class="form-control mb-4">
                    @error('oldpassword')
                        <p class="f-r mb-4">{{ $message }}</p>
                    @enderror

                    <label for="newpassword" class="form-label"> رمز عبور جدید</label>
                    <input type="password" name="newpassword" id="newpassword" class="form-control mb-4">
                    @error('newpassword')
                        <p class="f-r mb-4">{{ $message }}</p>
                    @enderror
{{-- 
                    <label for="password-confirmation" class="form-label"> تایید رمز جدید</label>
                    <input type="password" name="password_confirmation" class="form-control" id="password-confirmation">
                    @error('password_confirmation')
                        <p class="f-r mb-4">{{ $message }}</p>
                    @enderror --}}

                    <button type="submit" class="btn btn-sm btn-info mt-3"> اعمال تغییرات </button>

                </form>
            </div>
        </div>
    </div>
@endsection
