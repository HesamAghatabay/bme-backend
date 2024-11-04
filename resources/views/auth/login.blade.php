@extends('layouts.master')
@section('content')
    <section class="text-start mt-130">
        <div class="container">
            <h1 class="text-center my-5">صفحه ورود</h1>
            <div class="row">
                <div class="col-12 px-5">
                    <form action="">

                        <label for="name" class="form-label"> نام و نام خانوادگی</label>
                        <input type="text" class="form-control mb-4" name="name" id="name"
                            placeholder="نام و نام خانوادگی خود را وارد کنید">

                        <label for="password" class="form-label">رمز عبور</label>
                        <input type="password" name="password" id="password" class="form-control mb-4">

                        <button type="submit" class="btn btn-info">ورود</button>

                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
