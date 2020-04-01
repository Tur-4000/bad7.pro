@extends('manage.layouts.manage-content')

@section('tab-content')
    <div class="col-12">
        <a href="{{ route('manage.services.create') }}" class="btn btn-outline-success btn-sm float-left">
            <i class="fas fa-plus-square"></i>
            Добавить услугу</a>
    </div>

    <div class="col-12">
        <table class="table table-hover mt-1">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Заголовок</th>
                <th scope="col">Описание</th>
                <th scope="col">Расширенное описание</th>
                <th scope="col">Фоновое изображение</th>
                <th scope="col">Видео URL</th>
            </tr>
            </thead>
            <tbody>
            @foreach($services as $service)
                <tr>
                    <td scope="row">{{ $service->order }}</td>
                    <th>
                        <a href="{{ route('manage.services.edit', $service->id) }}">
                            <i class="fas fa-edit"></i>
                            {{ $service->title }}
                        </a>
                    </th>
                    <td>{!!  $service->description !!}</td>
                    <td>{!! $service->description_ext !!}</td>
                    <td><img src="/img/uploads/services/original/{{ $service->bg_image }}" alt="{{ $service->bg_image }}" width="200"></td>
                    <td>{{ $service->video_url }}</td>
                    {{--<td>--}}
                        {{--<a href="{{ route('manage.portfolio.destroy', $service->id) }}"--}}
                           {{--data-confirm="Вы действительно хотите удалить запись: {{ $service->title }}?"--}}
                           {{--data-method="delete"--}}
                           {{--rel="nofollow"--}}
                           {{--class="text-danger">--}}
                            {{--<i class="fas fa-trash-alt"></i>--}}
                            {{--Удалить--}}
                        {{--</a>--}}
                    {{--</td>--}}

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
