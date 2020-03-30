@extends('manage.layouts.manage-content')

@section('tab-content')

    <div class="col-12">
        <a href="{{ route('manage.portfolio.create') }}" class="btn btn-outline-success btn-sm float-left">
            <i class="fas fa-plus-square"></i>
            Добавить материал</a>
    </div>

    <div class="col-12">
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

@endsection
