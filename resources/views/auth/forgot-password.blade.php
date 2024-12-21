@extends('layouts.master')
@section('content')
    <div class="container my-5">
        <div class="row mt-130">

            <form method="POST" action="{{ route('forgot.password.store') }}">
                @csrf
                <label class="form-label" for="phone">شماره همراه خود را وارد نمایید</label>
                <input type="text" id="phone" class="form-control mb-2" name="phone">
                @error('phone')
                    <p class="f-r mb-4">{{ $message }}</p>
                @enderror
                <button class="btn btn-sm btn-info" type="submit">ارسال</button>
            </form>

        </div>
    </div>
@endsection
