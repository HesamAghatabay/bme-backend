@extends('layouts.master')
@section('content')
    <h1 class="text-center mt-5 pt-5">صفحه افزودن نقش</h1>
    <section class="text-start mt-130 bg-add-article py-5">
        <div class="container">

            <form method="POST" action="{{ route('role.store') }}">
                @csrf
                <div class="row justify-content-center align-items-start">
                    <div class="col-10 col-md-10">

                        <label for="title" class="form-label">نام نقش</label>
                        <input type="text" class="form-control mb-2" name="name" id="name" placeholder="نام نقش">
                        @error('name')
                            <p class="f-r mb-4">{{ $message }}</p>
                        @enderror

                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-3 text-start my-4">
                        <button type="submit" class="btn btn-info m-4">ثبت نقش</button>
                    </div>
                </div>
            </form>
            <div class="shadow m-3 p-4">
                <h5 class="my-2">نقش های موجود</h5>
                <ul class="px-3">
                    @foreach ($roles as $role)
                        <li class="p-1">{{ $role->name }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
@endsection
