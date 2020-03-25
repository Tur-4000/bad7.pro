@extends('manage.layouts.manage-app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-8">

            @include('flash::message')

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{ $error }}
                    </div>
                @endforeach
            @endif

            <h1>Редактирование разрешения</h1>

            {{ Form::model($permission, ['route' => ['manage.permission.update', $permission], 'method' => 'PATCH']) }}

            @include('manage.includes.permission_form')

            <div class="form-group d-flex justify-content-between">
                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Сохранить</button>
{{--                {{ Form::submit('Сохранить', ['class' => 'btn btn-primary']) }}--}}
                <a href="{{ route('manage.permission.index') }}" class="btn btn-outline-success"><i class="fas fa-reply"></i> Назад</a>
            </div>
            {{ Form::close() }}
        </div>
    </div>
@endsection
