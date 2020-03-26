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

            <h1>Редактирование метатегов страницы "{{ $page->user_friendly_name }}"</h1>

                {{ Form::model($page, ['route' => ['manage.pages.update', $page], 'method' => 'PATCH']) }}

                @include('manage.includes.metatag_form')

                {{ Form::close() }}
        </div>
    </div>
@endsection
