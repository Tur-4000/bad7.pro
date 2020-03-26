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

            <div class="row mt-1">
                <div class="col-12">
                    <a href="{{ route('manage.portfolio.create') }}" class="btn btn-outline-success btn-sm float-right">
                        <i class="fas fa-plus-square"></i>
                        Добавить материал</a>
                </div>
            </div>


            <table class="table table-hover mt-1">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Заголовок</th>
                    <th scope="col">Описание</th>
                    <th scope="col">Тип</th>
                    <th scope="col">Дата</th>
                    <th scope="col">URL</th>
                    <th scope="col">Опубликовано</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($portfolio as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>
                            <a href="{{ route('manage.portfolio.edit', $item->id) }}">
                                <i class="fas fa-edit"></i>
                                {{ $item->title }}
                            </a>
                        </td>
                        <td>{{ $item->description }}</td>
                        <td>{{ $type[$item->type] }}</td>
                        <td>{{ Carbon\Carbon::parse($item->date)->toFormattedDateString() }}</td>
                        <td>{{ $item->url }}</td>
                        <td>
                            @if($item->published)
                                <i class="fas fa-check text-success"></i>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('manage.portfolio.destroy', $item->id) }}"
                               data-confirm="Вы действительно хотите удалить запись: {{ $item->title }}?"
                               data-method="delete"
                               rel="nofollow"
                               class="text-danger">
                                <i class="fas fa-trash-alt"></i>
                                Удалить
                            </a>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>

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
                    {{--<p class="card-text h5">{{ $tags->title_tag }}</p>--}}
                    <p class="card-text h5"></p>
                </div>
            </div>

            <div class="card mt-2">
                <h3 class="card-header">
                    Description
                </h3>
                <div class="card-body">
                    {{--<p class="card-text h5">{{ $tags->description_tag }}</p>--}}
                    <p class="card-text h5"></p>
                </div>
            </div>

            <div class="card mt-2">
                <h3 class="card-header">
                    Keywords
                </h3>
                <div class="card-body">
                    {{--<p class="card-text h5">{{ $tags->keywords_tag }}</p>--}}
                    <p class="card-text h5"></p>
                </div>
            </div>


        </div>
    </div>

@endsection
