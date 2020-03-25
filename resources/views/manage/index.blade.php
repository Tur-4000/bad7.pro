@extends('manage.layouts.manage-app')

@section('content')

    <div class="row justify-content-between">
        <div class="col-6">
            <h1>{{ $head }}</h1>
        </div>
        <div class="col-4 d-flex" style="justify-content: end;align-items: center">
            @if(!request()->is('manage/order/deleted'))
                <a href="{{ route('manage.order.deleted') }}" class="">Показать удалённые</a>
            @else
                <a href="{{ route('manage.index') }}" class="">Все заявки</a>
            @endif
        </div>
    </div>

    <table class="table table-hover mt-1 mx-0">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Имя</th>
            <th scope="col">Компания</th>
            <th scope="col">Текст запроса</th>
            <th scope="col">Контатная информaция</th>
            <th scope="col">Примечание</th>
        </tr>
        </thead>
        <tbody>
        @foreach($orders as $item)
            <tr>
                <th scope="row">
                    <a href="
                        @if(!request()->is('manage/order/deleted'))
                            {{ route('manage.order.show', $item) }}">{{ $item->id }} <i class="fas fa-eye"></i>
                        @else
                            {{ route('manage.order.restore', $item) }}"
                            data-confirm="Вы действительно хотите восстановить зявку № {{ $item->id }} от {{ $item->name }}?"
                            data-method="patch"
                            rel="nofollow">Восстановить
                        @endif
                    </a>
                </th>
                <td>{{ $item->name }}</td>
                <td>{{ $item->company }}</td>
                <td>{{ $item->description }}</td>
                <td>{{ $item->contact }}</td>
                <td>{{ $item->note }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $orders->links() }}

@endsection
