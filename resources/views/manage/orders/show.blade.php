@extends('manage.layouts.manage-app')

@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-8">

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{ $error }}
                    </div>
                @endforeach
            @endif

            <div class="card">
                <h3 class="card-header">Заявка № {{ $order->id }}</h3>
                <div class="card-body">
                    <h4 class="card-title">{{ $order->name }}</h4>
                    <p class="card-text">{{ $order->description }}</p>
                    <hr>
                    <h5 class="card-title">Примечание:</h5>
                    <p class="card-text">{{ $order->note }}</p>
                </div>
            </div>

        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
{{--                    <p class="card-text">Создана: {{ Carbon\Carbon::parse($order->created_at)->toFormattedDateString() }}</p>--}}
                    <p class="card-text">Создана: {{ Date::parse($order->created_at)->format('j M Y г.') }}</p>
                    <p class="card-text">Изменена: {{ Date::parse($order->updated_at)->format('j M Y г.') }}</p>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-body">
                    <a href="{{ route('manage.order.edit', $order) }}" class="btn btn-primary">
                        <i class="fas fa-edit"></i>
                        Добавить примечание
                    </a><br>
                    <a href="{{ route('manage.order.destroy', $order) }}"
                       data-confirm="Вы действительно хотите удалить зявку № {{ $order->id }} от {{ $order->name }}?"
                       data-method="delete"
                       rel="nofollow"
                       class="btn btn-danger mt-3">
                        <i class="fas fa-times"></i>
                        Удалить
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
