@extends('layouts.master')
@section('content')
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


    <div class="btn-group m-5" role="group" aria-label="Basic outlined example">
        <button type="button" class="btn btn-outline-primary">افزودن کاربر</button>
        <button type="button" class="btn btn-outline-primary">افزودن نقش</button>
    </div>

    <div class="container-fluid">
        <table class="table table-info">
            <thead>
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
                        <td>{{ $user->roles }}</td>
                        <td>
                            <a class="btn btn-warning" href="">edit</a>

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                حذف
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">آیا
                                                {{ $user->name }} را حذف می کنید؟</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">لغو</button>
                                            <form method="POST" action="{{ route('user.destroy', $user->id) }}">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger">حذف</button>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
