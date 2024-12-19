@extends('layouts.master')
@section('content')
    <h1 class="text-center mt-5 pt-5">
        صفحه ویرایش نقش </h1>
    <section class="text-start mt-130 bg-add-article py-5">
        <div class="container">
            <p>نقش قبلی {{ $theUser->name }} برابر ===> @foreach ($theUser->roles as $role)
                    {{ $role->name }}
                @endforeach
            <div class="col">
                <!-- Button trigger modal -->
                {{-- <button type="button" class="btn btn-sm btn-danger m-1" data-bs-toggle="modal"
                data-bs-target="#exampleModal">
                حذف کاربر
            </button> --}}

                <!-- Modal -->
                {{-- <div class="modal fade bg-transparent" id="exampleModal" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">آیا
                                {{ $theUser->name }} را حذف می کنید؟</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                                data-bs-dismiss="modal">لغو</button>
                            <form method="POST"
                                action="{{ route('client.destroy', $theUser->id) }}">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">حذف</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div> --}}
                {{-- <a class="btn btn-sm btn-danger" href=""> حذف کاربر</a> --}}
                <form action="{{ route('client.destroy', $theUser->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="btn btn-sm btn-danger" type="submit"> حذف کاربر </button>
                </form>
                </p>
                <form method="POST" action="{{ route('role.update', $theUser->id) }}">
                    @csrf
                    @method('put')
                    <div class="row justify-content-center align-items-start">
                        <div class="col-10 col-md-10">
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
