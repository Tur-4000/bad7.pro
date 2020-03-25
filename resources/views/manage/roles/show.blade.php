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
                <h3 class="card-header">{{ $role->user_friendly_name }}</h3>
                <div class="card-body">
                    <h4 class="card-title"><b>Техническое название:</b> {{ $role->name }}</h4>
                    <h4 class="card-title"><b>GuardName:</b> {{ $role->guard_name }}</h4>
                    <h4 class="card-text"><b>Описание:</b> {{ $role->description }}</h4>
                    <h4 class="card-text"><b>Назначенные разрешения:</b></h4>
                    <table class="table table-sm">
                        @foreach($role->permissions as $permission)
                            <tr>
                                <td>{{ $permission->user_friendly_name }}</td>
                                <td><span class="badge badge-info">{{ $permission->name }}</span></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>

        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <p class="card-text">Создана: {{ Date::parse($role->created_at)->format('j M Y г.') }}</p>
                    <p class="card-text">Изменена: {{ Date::parse($role->updated_at)->format('j M Y г.') }}</p>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-body">
                    <a href="{{ route('manage.role.edit', $role) }}" class="btn btn-outline-primary">
                        <i class="fas fa-user-edit"></i>
                        Редактировать
                    </a>
                    <a href="{{ route('manage.role.index', $role) }}" class="btn btn-outline-success mt-3">
                        <i class="fas fa-reply"></i>
                        К списку ролей
                    </a>
                </div>
                </div>
            </div>
        </div>
    </div>

@endsection