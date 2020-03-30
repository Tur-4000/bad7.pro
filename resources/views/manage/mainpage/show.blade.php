@extends('manage.layouts.manage-content')

@section('tab-content')

    <div class="col-8">
        <div class="card">
            <h2 class="card-header">Контент Главной страницы</h2>
            <div class="card-body">
                <h4 class="card-title">Заголовок</h4>
                <p class="card-text">{{ $data->title }}</p>
                <hr>
                <h4 class="card-title">Основной текст</h4>
                <p class="card-text">{{ $data->text }}</p>
                <hr>
                <h4 class="card-title">Ссылка на шоурил</h4>
                <p class="card-text">{{ $data->video_url }}</p>
                <hr>
            </div>
        </div>
    </div>

    <div class="col-4">
        <div class="card">
            <div class="card-body">
                <p class="card-text">Изменена: {{ Date::parse($data->updated_at)->format('j M Y г.') }}</p>
            </div>
        </div>
        <div class="card mt-3">
            <div class="card-body">
                <a href="{{ route('manage.mainpage.edit') }}" class="btn btn-primary">
                    <i class="fas fa-edit"></i>
                    Редактировать
                </a>
            </div>
        </div>
    </div>

@endsection
