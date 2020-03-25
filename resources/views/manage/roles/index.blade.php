@extends('manage.layouts.manage-app')

@section('content')

    @include('flash::message')

    <div class="row justify-content-between">
        <div class="col-6">
            <h1>Пользовательские роли</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <a href="{{ route('manage.role.create') }}" class="btn btn-outline-success btn-sm float-right">
                <i class="fas fa-plus-square"></i>
                Добавить роль</a>
        </div>
    </div>

    <table class="table table-hover mt-1 mx-0">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Название</th>
            <th scope="col">Техническое название</th>
            <th scope="col">Guard name</th>
            <th scope="col">Описание</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($roles as $item)
            <tr>
                <th scope="row">
                    <a href="{{ route('manage.role.edit', $item) }}">
{{--                        {{ $item->id }}--}}
                        <i class="fas fa-edit"></i>
                        {{--                        <i class="fas fa-edit"></i>--}}
                    </a>
                </th>
                <td>{{ $item->user_friendly_name }}</td>
                <td>
                    <a href="{{ route('manage.role.show', $item) }}">
                        <i class="fas fa-eye"></i>
                        {{ $item->name }}
                    </a>
                </td>
                <td>{{ $item->guard_name }}</td>
                <td>{{ $item->description }}</td>
                @hasanyrole('Developer|Admin')
                    <td>
                        <a href="{{ route('manage.role.destroy', $item->id) }}"
                           data-confirm="Вы действительно хотите удалить роль: {{ $item->name }}?"
                           data-method="delete"
                           rel="nofollow"
                           class="text-danger">
                            <i class="fas fa-user-times"></i>
                            Удалить
                        </a>
                    </td>
                @endhasanyrole
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $roles->links() }}

@endsection