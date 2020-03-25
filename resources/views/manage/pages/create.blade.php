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
                    {{ Form::label('name', 'Название страницы*') }}
                    {{ Form::text('name', null, ['class' => 'form-control', 'aria-describedby' => 'nameHelp']) }}
                    <small id="nameHelp" class="form-text text-muted">Название страницы</small>
                </div>

                <div class="form-group">
                    {{ Form::label('title_tag', 'Title метатег') }}
                    {{ Form::text('title_tag', null, ['class' => 'form-control', 'aria-describedby' => 'titleHelp']) }}
                    <small id="titleHelp" class="form-text text-muted">Метатег Title, максимум 256 символов</small>
                </div>

                <div class="form-group">
                    {{ Form::label('description_tag', 'Description метатег') }}
                    {{ Form::textarea('description_tag', null, ['class' => 'form-control', 'rows' => 3, 'aria-describedby' => 'descriptionHelp']) }}
                    <small id="descriptionHelp" class="form-text text-muted">Метатег Description.</small>
                </div>

                <div class="form-group">
                    {{ Form::label('keywords_tag', 'Keywords метатег') }}
                    {{ Form::textarea('keywords_tag', null, ['class' => 'form-control', 'rows' => 3, 'aria-describedby' => 'keywordsHelp']) }}
                    <small id="keywordsHelp" class="form-text text-muted">Метатег Keywords.</small>
                </div>

                <div class="form-group d-flex justify-content-between">
                    {{ Form::submit('Добавить', ['class' => 'btn btn-primary']) }}
                </div>
                {{ Form::close() }}
        </div>
    </div>
@endsection
