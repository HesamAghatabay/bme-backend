@extends('layouts.master')
@section('content')
    <h1 class="text-center mt-5 pt-5">
        صفحه ویرایش نقش </h1>
    <section class="text-start mt-130 bg-add-article py-5">
        <div class="container">

            <form method="POST" action="{{ route('role.update', $theUser->id) }}">
                @csrf
                @method('put')
                <div class="row justify-content-center align-items-start">
                    <div class="col-10 col-md-10">
                        <p>نقش قبلی {{ $theUser->name }} برابر ===> @foreach ($theUser->roles as $role)
                                {{ $role->name }}
                            @endforeach
                        </p>
                        <label for="title" class="form-label mt-4">نقش جدید:</label>
                        {{-- <input type="text" value="{{ $theUser->roles }}" class="form-control mb-2" name="name"
                            id="name" placeholder="نام نقش"> --}}
                        <select class="form-select" aria-label="Default select example" name="name">
                            <option selected>انتخاب کنید</option>
                            @foreach ($roles as $role)
                                <option value="{{ $role->name }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                        @error('name')
                            <p class="f-r mb-4">{{ $message }}</p>
                        @enderror

                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-3 text-start my-4">
                        <button type="submit" class="btn btn-info m-4">ویرایش نقش</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
