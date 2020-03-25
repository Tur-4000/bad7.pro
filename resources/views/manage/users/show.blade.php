@extends('manage.layouts.manage-app')

@section('content')

    <div class="row justify-content-center mt-5">
        <div class="col-8">

            @include('flash::message')

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{ $error }}
                    </div>
                @endforeach
            @endif

            <div class="card">
                <h3 class="card-header">{{ $user->name }}</h3>
                <div class="card-body">
                    <h4 class="card-title"><b>eMail:</b> {{ $user->email }}</h4>
                    <h4 class="card-text"><b>Роли:</b>
                        @foreach($user->roles as $role)
                            <span class="badge badge-info">{{ $role->user_friendly_name }} </span>
                        @endforeach
                    </h4>
                </div>
            </div>

        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <p class="card-text">Создан: {{ Date::parse($user->created_at)->format('j M Y г.') }}</p>
                    <p class="card-text">Изменен: {{ Date::parse($user->updated_at)->format('j M Y г.') }}</p>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-body">
                    <a href="{{ route('manage.user.edit', $user) }}" class="btn btn-primary">
                        <i class="fas fa-user-edit"></i>
                        Редактировать
                    </a><br>
                    <a href="{{ route('manage.user.destroy', $user) }}"
                       data-confirm="Вы действительно хотите удалить пользователя {{ $user->name }}?"
                       data-method="delete"
                       rel="nofollow"
                       class="btn btn-danger mt-3">
                        <i class="fas fa-user-times"></i>
                        Удалить
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection