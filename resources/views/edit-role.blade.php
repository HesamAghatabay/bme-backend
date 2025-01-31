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
                        <th scope="col">chang role to</th>
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
                            @can('add admin')
                                <a class="btn btn-info" href="{{ route('setadmin', $theUser->id) }}">Admin</a>
                            @endcan
                            @can('add reader')
                                <a class="btn btn-info" href="{{ route('setreader', $theUser->id) }}">Reader</a>
                            @endcan
                            <a class="btn btn-info" href="{{ route('setuser', $theUser->id) }}">User</a>

                        </td>
                    </tr>
                </tbody>
            </table>
            <a class="btn btn-warning" href="{{ route('roles') }}">بازگشت</a>
        </div>
    </section>
@endsection
