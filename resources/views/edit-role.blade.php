@extends('layouts.master')
@section('content')
    <h1 class="text-center mt-5 pt-5">
        صفحه ویرایش کاربر </h1>
    <section class="text-start mt-130 bg-add-article py-5">
        <div class="container">
            <table class="table table-info bg-role-table shadow">
                <thead class="bg-role-table">
                    <tr>
                        <th scope="col">name</th>
                        <th scope="col">number</th>
                        <th scope="col">articles</th>
                        <th scope="col">categories</th>
                        <th scope="col">role</th>
                        <th scope="col">chang role</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>

                        <td>{{ $theUser->name }}</td>
                        <td>{{ $theUser->phone }}</td>
                        <td>{{ $theUser->articles->count($theUser->id) }}</td>
                        <td>{{ $theUser->categories->count($theUser->id) }}</td>
                        @foreach ($theUser->roles as $role)
                            <td>{{ $role->name }}</td>
                        @endforeach
                        <td>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>new role</option>
                                <option value="1"><a href="#">Admin</a></option>
                                <option value="2"><a href="#">Reader</a></option>
                                <option value="3"><a href="#">User</a></option>
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
    </section>
@endsection
