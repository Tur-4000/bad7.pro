@hasanyrole('Developer')
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
@endhasrole

<div class="form-group">
    {{ Form::label('title_tag', 'Title метатег') }}
    {{ Form::text('title_tag', null, ['class' => 'form-control', 'aria-describedby' => 'titleHelp']) }}
    <small id="titleHelp" class="form-text text-muted">Метатег Title, максимум 256 символов</small>
</div>

<div class="form-group">
    {{ Form::label('description_tag', 'Description метатег') }}
    {{ Form::textarea('description_tag', null, ['class' => 'form-control', 'rows' => 3, 'aria-describedby' => 'descriptionTagHelp']) }}
    <small id="descriptionTagHelp" class="form-text text-muted">Метатег Description.</small>
</div>

<div class="form-group">
    {{ Form::label('keywords_tag', 'Keywords метатег') }}
    {{ Form::textarea('keywords_tag', null, ['class' => 'form-control', 'rows' => 3, 'aria-describedby' => 'keywordsHelp']) }}
    <small id="keywordsHelp" class="form-text text-muted">Метатег Keywords.</small>
</div>

<div class="form-group d-flex justify-content-between">
    {{ Form::submit('Сохранить', ['class' => 'btn btn-primary']) }}
</div>
