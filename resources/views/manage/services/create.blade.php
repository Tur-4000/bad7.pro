@extends('manage.layouts.manage-app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-8">

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{ $error }}
                    </div>
                @endforeach
            @endif

            <h1>Добавление новой услуги</h1>

            {{ Form::model($service, ['route' => 'manage.services.store', 'method' => 'POST','files'=>'true']) }}

            @include('manage.includes.services_form')

            <div class="form-group d-flex justify-content-between">
                {{ Form::submit('Добавить', ['class' => 'btn btn-primary']) }}
                <a href="{{ route('manage.services.index') }}" class="btn btn-outline-success">Назад</a>
            </div>
            {{ Form::close() }}
        </div>
    </div>

@endsection
