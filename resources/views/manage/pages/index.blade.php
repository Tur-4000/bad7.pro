@extends('manage.layouts.manage-app')

@section('content')

    <div class="row">
        <div class="col-12">
            <h1>Управление страницами сайта</h1>
        </div>
    </div>

    <div class="row mt-1">
        <div class="col-12">
            <a href="{{ route('manage.pages.create') }}" class="btn btn-outline-success btn-sm float-left">
                <i class="fas fa-plus-square"></i>
                Добавить страницу</a>
        </div>
    </div>

<div class="row mt-1">
    <div class="col-12">
        <table class="table table-hover">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Техническое название</th>
                <th scope="col">Название</th>
                <th scope="col">Описание</th>
                <th scope="col">Тэг Title</th>
                <th scope="col">Тэг Description</th>
                <th scope="col">Тэг Keywords</th>
            </tr>
            </thead>
            <tbody>
            @foreach($pages as $page)
                <tr>
                    <td scope="row">
                        <a href="{{ route('manage.pages.edit', $page->name) }}">
                            <i class="fas fa-edit"></i>
                            {{ $page->name }}
                        </a>
                    </td>
                    <td>{{ $page->user_friendly_name }}</td>
                    <td>{{ $page->description }}</td>
                    <td>{{ $page->title_tag }}</td>
                    <td>{{ $page->description_tag }}</td>
                    <td>{{ $page->keywords_tag }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
