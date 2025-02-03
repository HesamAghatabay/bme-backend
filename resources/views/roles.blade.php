@extends('layouts.master')
@section('content')
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


    <div class="btn-group m-5" role="group" aria-label="Basic outlined example">
        <a class="btn btn-outline-primary" href="{{ route('client.add') }}">افزودن کاربر جدید</a>
        {{-- <a class="btn btn-outline-primary" href="#">افزودن نقش</a> --}}
    </div>

    <div class="container">
        <table class="table table-info bg-role-table shadow">
            <thead class="bg-role-table">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">number</th>
                    <th scope="col">articles</th>
                    <th scope="col">categories</th>
                    <th scope="col">role</th>
                    <th scope="col">setting</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($allUsers as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->articles->count($user->id) }}</td>
                        <td>{{ $user->categories->count($user->id) }}</td>
                        @foreach ($user->roles as $role)
                            <td>{{ $role->name }}</td>
                        @endforeach
                        <td>
                            <div class="flix">
                                @can('edit roles')
                                    <a class="btn btn-warning mx-1" href="{{ route('role.edit', $user->id) }}">edit</a>
                                @endcan

                                <a class="btn btn-danger mx-1" href="#">remove</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
