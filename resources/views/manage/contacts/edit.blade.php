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

            <h1>Редактирование контента страницы Контакты</h1>

            {{ Form::model($content, ['route' => ['manage.contacts.update', $content->id], 'method' => 'PATCH']) }}

            <div class="form-group">
                {{ Form::label('address', 'Адрес*') }}
                {{ Form::text('address', null, ['class' => 'form-control', 'aria-describedby' => 'addressHelp']) }}
                <small id="addressHelp" class="form-text text-muted">Адрес, максимум 255 символов.</small>
            </div>
            <div class="form-group">
                {{ Form::label('email', 'e-Mail*') }}
                {{ Form::text('email', null, ['class' => 'form-control', 'aria-describedby' => 'emailHelp']) }}
                <small id="emailHelp" class="form-text text-muted">Контактный email продажников, максимум 128 символов.</small>
            </div>
            <div class="form-group">
                {{ Form::label('email_info', 'e-Mail Info') }}
                {{ Form::text('email_info', null, ['class' => 'form-control', 'aria-describedby' => 'emailInfoHelp']) }}
                <small id="emailInfoHelp" class="form-text text-muted">Контактный email Info, максимум 128 символов.</small>
            </div>
            <div class="form-group">
                {{ Form::label('phone', 'Телефон*') }}
                {{ Form::text('phone', null, ['class' => 'form-control', 'aria-describedby' => 'phoneHelp']) }}
                <small id="phoneHelp" class="form-text text-muted">Контактный телефон, максимум 16 символов. Строго в формате +380675973963 !</small>
            </div>
            <div class="form-group">
                {{ Form::label('phone_viber', 'Телефон-Viber*') }}
                {{ Form::text('phone_viber', null, ['class' => 'form-control', 'aria-describedby' => 'phone_viberHelp']) }}
                <small id="phone_viberHelp" class="form-text text-muted">Контактный телефон связнный с аккаунтом Viber, максимум 16 символов. Строго в формате +380675973963 !</small>
            </div>
            <div class="form-group">
                {{ Form::label('facebook', 'Ссылка на Facebook*') }}
                {{ Form::text('facebook', null, ['class' => 'form-control', 'aria-describedby' => 'facebookHelp']) }}
                <small id="facebook" class="form-text text-muted">Ссылка на Facebook, максимум 128 символов.</small>
            </div>
            <div class="form-group">
                {{ Form::label('instagram', 'Ссылка на Instagram*') }}
                {{ Form::text('instagram', null, ['class' => 'form-control', 'aria-describedby' => 'instagramHelp']) }}
                <small id="instagramHelp" class="form-text text-muted">Ссылка на Instagram, максимум 128 символов.</small>
            </div>
            <div class="form-group">
                {{ Form::label('youtube', 'Ссылка на канал Youtube*') }}
                {{ Form::text('youtube', null, ['class' => 'form-control', 'aria-describedby' => 'youtubeHelp']) }}
                <small id="youtubeHelp" class="form-text text-muted">Ссылка на канал Youtube, максимум 128 символов.</small>
            </div>


            <div class="form-group d-flex justify-content-between">
                {{ Form::submit('Сохранить', ['class' => 'btn btn-primary']) }}
                <a href="{{ route('manage.contacts.index') }}" class="btn btn-outline-success">Назад</a>
            </div>
            {{ Form::close() }}
        </div>
    </div>

@endsection
