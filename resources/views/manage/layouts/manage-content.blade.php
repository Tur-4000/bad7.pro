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

            <div class="row justify-content-center mt-2">

                @yield('tab-content')

            </div>

            </div>

            <div class="tab-pane fade" id="metatag" role="tabpanel" aria-labelledby="metatag-tab">

                @include('manage.includes.metatag_index')

            </div>
        </div>

@endsection
