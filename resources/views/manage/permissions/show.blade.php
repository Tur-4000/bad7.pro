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
                <h3 class="card-header">{{ $permission->user_friendly_name }}</h3>
                <div class="card-body">
                    <h4 class="card-title"><b>Техническое название:</b> {{ $permission->name }}</h4>
                    <h4 class="card-title"><b>GuardName:</b> {{ $permission->guard_name }}</h4>
                    <h4 class="card-text"><b>Описание:</b> {{ $permission->description }}</h4>
                    <h4 class="card-text"><b>Роли с назначенным разрешением:</b>
                        @foreach($permission->roles as $role)
                            <span class="badge badge-info">{{ $role->user_friendly_name }} </span>
                        @endforeach
                    </h4>
                </div>
            </div>

        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <p class="card-text">Создано: {{ Date::parse($permission->created_at)->format('j M Y г.') }}</p>
                    <p class="card-text">Изменено: {{ Date::parse($permission->updated_at)->format('j M Y г.') }}</p>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-body">
                    <a href="{{ route('manage.permission.edit', $permission) }}" class="btn btn-outline-primary">
                        <i class="fas fa-user-edit"></i>
                        Редактировать
                    </a>
                    <a href="{{ route('manage.permission.index', $permission) }}" class="btn btn-outline-success mt-3">
                        <i class="fas fa-reply"></i>
                        К списку разрешений
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection