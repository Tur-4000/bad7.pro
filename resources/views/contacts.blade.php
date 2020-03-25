@extends('layouts.app')

@section('title'){{ $title }}@endsection


@section('content')
    <div class="contacts">
        <h1 class="contacts__title">Связаться с нами</h1>

        <div class="contacts__form form">
            @include('includes.orderForm')
        </div>

        <div class="contacts__footer">
            <div class="contacts__item">
                <p>Маріуполь, бул.Приморський, 25</p>
            </div>
            <div class="contacts__item">
                <p><a href="tel:+380675973963" class="contacts__link">+38 (067) 597 39 63</a></p>
            </div>
            <div class="contacts__item">
                <a href="mailto:sales@bad7.pro" class="contacts__link">sales@bad7.pro</a>
            </div>
        </div>

    </div>
@endsection
