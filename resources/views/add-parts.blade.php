@extends('layouts.master')
@section('content')
    <section class="text-start mt-130 bg-add-article py-5">
        <form action="">
            <div class="container">
                <div class="row justify-content-center align-items-start">
                    <div class="col-10 col-md-10">
                        <label for="title" class="form-label">عنوان</label>
                        <input type="text" class="form-control mb-2" name="title" id="title" placeholder="عنوان">

                        <label for="body" class="form-label">بدنه</label>
                        <textarea name="body" id="body" class="form-control" rows="15" cols="30"></textarea>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-3 text-start my-4">
                        <button type="submit" class="btn btn-info m-4">ثبت دسته</button>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection
