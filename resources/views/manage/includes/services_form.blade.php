<div class="form-group">
    {{ Form::label('order', 'Порядок*') }}
    {{ Form::text('order', null, ['class' => 'form-control', 'aria-describedby' => 'orderHelp', 'required' => 'required']) }}
    <small id="orderHelp" class="form-text text-muted">Число. Определяет порядок вывода карточек услуг на странице.</small>
</div>

<div class="form-group">
    {{ Form::label('title', 'Заголовок*') }}
    {{ Form::text('title', null, ['class' => 'form-control', 'aria-describedby' => 'titleHelp', 'required' => 'required']) }}
    <small id="titleHelp" class="form-text text-muted">Название услуги. Используется как заголовок.</small>
</div>

<div class="form-group">
    {{ Form::label('description', 'Описание*') }}
    {{ Form::textarea('description', null, ['class' => 'form-control description', 'rows' => 3, 'aria-describedby' => 'descriptionHelp', 'required' => 'required']) }}
    <small id="descriptionHelp" class="form-text text-muted">Описание услуги.</small>
</div>

<div class="form-group">
    {{ Form::label('description_ext', 'Развернутое описание') }}
    {{ Form::textarea('description_ext', null, ['class' => 'form-control description', 'rows' => 3, 'aria-describedby' => 'descriptioextnHelp']) }}
    <small id="descriptioextnHelp" class="form-text text-muted">Развернутое описание услуги. Скрыто под ссылкой "ПОДРОБНЕЕ"</small>
</div>

<div class="form-group">
    {{ Form::label('bg_image', 'Фоновое изображение*') }}
    <div class="image-preview-block">
        <div class="image-preview-image">
            @if($service->bg_image)
                <img src="/img/uploads/services/original/{{ $service->bg_image }}" alt="$service->bg_image" width="200">
            @endif
        </div>
        {{ Form::file('bg_image', $attributes = ['class' => 'form-control-file image-preview-input', 'aria-describedby' => 'bgimageHelp']) }}
{{--        {!! Form::file('image', ['class' => 'image-preview-input']) !!}--}}
    </div>
    <small id="bgimageHelp" class="form-text text-muted">Фоновое изображение</small>
</div>

<div class="form-group">
    {{ Form::label('video_url', 'Видеоролик') }}
    {{ Form::text('video_url', $value = null, ['class' => 'form-control', 'aria-describedby' => 'urlHelp']) }}
    <small id="urlHelp" class="form-text text-muted">Ссылка на ролик в таком виде: https://www.youtube.com/watch?v=kF8BbtQuxak</small>
</div>
