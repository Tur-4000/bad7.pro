@extends('layouts.app')

@section('metatag')
    <meta name="title" content="{{ $metaData->title_tag }}">
    <meta name="description" content="{{ $metaData->description_tag }}">
    <meta name="keywords" content="{{ $metaData->keywords_tag }}">
@endsection

@section('title')
    - {{ $metaData->user_friendly_name }}
@endsection

@section('content')
    <div class="contacts">
        <h1 class="contacts__title">Связаться с нами</h1>

        <div class="contacts__form form">
            @include('includes.orderForm')
        </div>

        <div class="contacts__footer">
            <div class="contacts__item">
                <p>{{ $contacts->address }}</p>
            </div>
            <div class="contacts__item">
                <p>
                    <a href="tel:{{ $contacts->phone_viber }}" class="contacts__link">+38 (050) 157 25 97</a>
                    <svg class="socials__viber">
                        <use xlink:href="/img/symbol/viber-brands.svg#viber"></use>
                    </svg>
                </p>
                <p><a href="tel:{{ $contacts->phone }}" class="contacts__link">+38 (067) 597 39 63</a></p>
            </div>
            <div class="contacts__item">
                <a href="mailto:{{ $contacts->email }}" class="contacts__link">{{ $contacts->email }}</a>
            </div>
        </div>

    </div>
@endsection
