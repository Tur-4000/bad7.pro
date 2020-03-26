@extends('manage.layouts.manage-app')

@section('content')

    <div class="row">
        <div class="col-10">
            <h1>Страница "{{ $tags->user_friendly_name }}"</h1>
        </div>
    </div>


    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="content-tab" data-toggle="tab" href="#content" role="tab" aria-controls="content" aria-selected="true">Контент</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="metatag-tab" data-toggle="tab" href="#metatag" role="tab" aria-controls="metatag" aria-selected="false">Метатеги</a>
        </li>
    </ul>

    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="content" role="tabpanel" aria-labelledby="content-tab">

        <div class="row justify-content-center mt-2">
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
        </div>

        </div>

        <div class="tab-pane fade" id="metatag" role="tabpanel" aria-labelledby="metatag-tab">

            <div class="row mt-2">
                <div class="col-12">
                    <a href="{{ route('manage.pages.edit', $tags->name) }}" class="btn btn-outline-primary btn-sm float-left">
                        {{--<a href="#" class="btn btn-outline-primary btn-sm float-left">--}}
                        <i class="fas fa-edit"></i>
                        Редактировать</a>
                    @hasanyrole('Developer|Admin')
                    <a href="{{ route('manage.pages.create') }}" class="btn btn-outline-success btn-sm float-right">
                        <i class="fas fa-plus-square"></i>
                        Добавить страницу</a>
                    @endhasrole
                </div>
            </div>

            <div class="card mt-2">
                <h3 class="card-header">
                    Title
                </h3>
                <div class="card-body">
                    <p class="card-text h5">{{ $tags->title_tag }}</p>
                </div>
            </div>

            <div class="card mt-2">
                <h3 class="card-header">
                    Description
                </h3>
                <div class="card-body">
                    <p class="card-text h5">{{ $tags->description_tag }}</p>
                </div>
            </div>

            <div class="card mt-2">
                <h3 class="card-header">
                    Keywords
                </h3>
                <div class="card-body">
                    <p class="card-text h5">{{ $tags->keywords_tag }}</p>
                </div>
            </div>

    </div>

@endsection
