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

            <h1>Добавление новой роли</h1>

            {{ Form::model($role, ['route' => 'manage.role.store', 'method' => 'POST']) }}

            @include('manage.includes.role_form')

            <div class="form-group d-flex justify-content-between">
                {{ Form::submit('Добавить', ['class' => 'btn btn-primary']) }}
                <a href="{{ route('manage.role.index') }}" class="btn btn-outline-success">Назад</a>
            </div>
            {{ Form::close() }}
        </div>
    </div>
@endsection
