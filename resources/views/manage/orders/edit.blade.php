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

            <h2>Примечание к заявке № {{ $order->id }}</h2>

            {{ Form::model($order, ['route' => ['manage.order.update', $order->id], 'method' => 'PATCH']) }}

                <div class="form-group">
{{--                    {{ Form::label('note', 'Описание') }}--}}
                    {{ Form::textarea('note', null, ['class' => 'form-control', 'rows' => 5]) }}
                    <small id="noteHelp" class="form-text text-muted">Комментарий к заявке от менеджера по продажам</small>
                </div>

            <div class="form-group d-flex justify-content-between">
                {{ Form::submit('Сохранить', ['class' => 'btn btn-primary']) }}
                <a href="{{ route('manage.order.show', $order) }}" class="btn btn-outline-success">Назад</a>
            </div>
            {{ Form::close() }}

        </div>
    </div>
@endsection
