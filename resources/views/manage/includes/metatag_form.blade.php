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
    {{ Form::submit('Добавить', ['class' => 'btn btn-primary']) }}
</div>
