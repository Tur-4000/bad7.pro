@extends('manage.layouts.manage-app')

@section('content')

    @include('flash::message')

    <div class="row justify-content-between">
        <div class="col-6">
            <h1>Пользователи</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <a href="{{ route('manage.user.create') }}" class="btn btn-outline-success btn-sm float-right">
                <i class="fas fa-user-plus"></i>
                Добавить пользователя</a>
        </div>
    </div>

    <table class="table table-hover mt-1 mx-0">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Имя</th>
            <th scope="col">eMail</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $item)
            <tr>
                <th scope="row">
                    <a href="{{ route('manage.user.edit', $item) }}">
                        {{ $item->id }}
                        <i class="fas fa-user-edit"></i>
{{--                        <i class="fas fa-edit"></i>--}}
                    </a>
                </th>
                <td>
                    <a href="{{ route('manage.user.show', $item) }}">
                        <i class="fas fa-eye"></i>
                        {{ $item->name }}
                    </a>
                </td>
                <td>{{ $item->email }}</td>
                <td>
                    <a href="{{ route('manage.user.destroy', $item->id) }}"
                       data-confirm="Вы действительно хотите удалить пользователя: {{ $item->name }}?"
                       data-method="delete"
                       rel="nofollow"
                       class="text-danger">
                        <i class="fas fa-user-times"></i>
                        Удалить
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $users->links() }}

@endsection