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

            <h1>Редактирование контента Главной страницы</h1>

            {{ Form::model($content, ['route' => ['manage.mainpage.update', $content->id], 'method' => 'PATCH']) }}

                <div class="form-group">
                    {{ Form::label('title', 'Заголовок') }}
                    {{ Form::text('title', null, ['class' => 'form-control', 'aria-describedby' => 'titleHelp']) }}
                    <small id="titleHelp" class="form-text text-muted">Заголовок, максимум 64 символа.</small>
                </div>

                <div class="form-group">
                    {{ Form::label('text', 'Текст главной страницы') }}
                    {{ Form::textarea('text', null, ['class' => 'form-control', 'rows' => 3, 'aria-describedby' => 'textHelp']) }}
                    <small id="textHelp" class="form-text text-muted">Текст главной страницы.</small>
                </div>

                <div class="form-group">
                    {{ Form::label('video_url', 'Шоурил') }}
                    {{ Form::text('video_url', null, ['class' => 'form-control', 'aria-describedby' => 'urlHelp']) }}
                    <small id="urlHelp" class="form-text text-muted">Ссылка на шоурил такого вида: https://www.youtube.com/watch?v=Qv97VzXxUXc .</small>
                </div>

                <div class="form-group d-flex justify-content-between">
                    {{ Form::submit('Сохранить', ['class' => 'btn btn-primary']) }}
                    <a href="{{ route('manage.mainpage') }}" class="btn btn-outline-success">Назад</a>
                </div>
            {{ Form::close() }}
        </div>
    </div>

@endsection
