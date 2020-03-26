@extends('manage.layouts.manage-app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-8">

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{ $error }}
                    </div>
                @endforeach
            @endif

            <h1>Добавление новой страницы</h1>

                {{ Form::model($page, ['route' => 'manage.pages.store', 'method' => 'POST']) }}

                <div class="form-group">
                    {{ Form::label('name', 'Техническое название страницы*') }}
                    {{ Form::text('name', null, ['class' => 'form-control', 'aria-describedby' => 'nameHelp']) }}
                    <small id="nameHelp" class="form-text text-muted">Техническое название страницы</small>
                </div>

                <div class="form-group">
                    {{ Form::label('user_friendly_name', 'Название страницы*') }}
                    {{ Form::text('user_friendly_name', null, ['class' => 'form-control', 'aria-describedby' => 'user_friendly_nameHelp']) }}
                    <small id="user_friendly_nameHelp" class="form-text text-muted">Название страницы</small>
                </div>

                <div class="form-group">
                    {{ Form::label('description', 'Описание') }}
                    {{ Form::textarea('description', null, ['class' => 'form-control', 'rows' => 2, 'aria-describedby' => 'descriptionHelp']) }}
                    <small id="descriptionHelp" class="form-text text-muted">Описание страницы.</small>
                </div>

                @include('manage.includes.metatag_form')

                {{ Form::close() }}
        </div>
    </div>
@endsection
