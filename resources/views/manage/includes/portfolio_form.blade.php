<div class="form-group form-check">
    {{ Form::checkbox('published', 1, $portfolio->published, ['class' => 'form-check-input']) }}
    {{ Form::label('published', 'Опубликовать', ['class' => 'form-check-label']) }}
    <small id="titleHelp" class="form-text text-muted">Опубликовать или снять с публикации работу.</small>
</div>

{{--<div class="form-group custom-control custom-switch">--}}
{{--    {{ Form::checkbox('published', 1, true, ['class' => 'custom-control-input']) }}--}}
{{--    {{ Form::label('published', 'Опубликовать', ['class' => 'custom-control-label']) }}--}}
{{--</div>--}}

<div class="form-group">
    {{ Form::label('title', 'Заголовок') }}
    {{--                    @error('title')--}}
    {{--                        <div class="alert alert-danger">{{ $message }}</div>--}}
    {{--                    @enderror--}}
    {{ Form::text('title', null, ['class' => 'form-control', 'aria-describedby' => 'titleHelp']) }}
    <small id="titleHelp" class="form-text text-muted">Название ролика, максимум 128 символов.</small>
</div>

<div class="form-group">
    {{ Form::label('description', 'Описание') }}
    {{ Form::textarea('description', null, ['class' => 'form-control', 'rows' => 3]) }}
    <small id="descriptionHelp" class="form-text text-muted">Развернутое описание ролика.</small>
</div>

<div class="form-group">
    {{ Form::label('url', 'Ссылка') }}
    {{ Form::text('url', $value = null, ['class' => 'form-control', 'aria-describedby' => 'urlHelp']) }}
    <small id="urlHelp" class="form-text text-muted">Ссылка на ролик в таком виде: https://www.youtube.com/watch?v=kF8BbtQuxak</small>
</div>

<div class="form-group">
    {{ Form::label('bgimage', 'Фоновое изображение') }}
    {{ Form::file('bgimage', $attributes = ['class' => 'form-control-file', 'aria-describedby' => 'bgimageHelp']) }}
    <small id="bgimageHelp" class="form-text text-muted">Фоновое изображение шириной не более 640 пикселей</small>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        {{ Form::label('type', 'Тип') }}
        {{ Form::select('type',
                ['image' => 'Имиджевый', 'reklama' => 'Рекламный'],
                null,
                ['class' => 'form-control', 'placeholder' => 'Выберите тип ролика...']
            ) }}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('date', 'Дата') }}
        {{ Form::date('date', null, ['class' => 'form-control']) }}
    </div>
</div>
