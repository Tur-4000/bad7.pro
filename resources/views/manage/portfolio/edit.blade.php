@extends('manage.layouts.manage-app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-8">

            @if ($errors->any())
{{--                <div>--}}
{{--                    <ul>--}}
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger" role="alert">
{{--                                <button type="button" class="close" aria-label="Close">--}}
{{--                                    <span aria-hidden="true">&times;</span>--}}
{{--                                </button>--}}
                                {{ $error }}
                            </div>
                        @endforeach
{{--                    </ul>--}}
{{--                </div>--}}
            @endif

            <h1>Редактирование работы</h1>

            {{ Form::model($portfolio, ['route' => ['manage.portfolio.update', $portfolio->id], 'method' => 'PATCH','files'=>'true']) }}

                @include('manage.includes.portfolio_form')

                <div class="form-group d-flex justify-content-between">
                    {{ Form::submit('Сохранить', ['class' => 'btn btn-primary']) }}
                    <a href="{{ route('manage.portfolio.index') }}" class="btn btn-outline-success">Назад</a>
                </div>
            {{ Form::close() }}
        </div>
    </div>

@endsection
