@extends('layouts.app')

@section('metatag')

    <meta name="title" content="{{ $page->title_tag }}">
    <meta name="description" content="{{ $page->description_tag }}">
    <meta name="keywords" content="{{ $page->keywords_tag }}">

@endsection


@section('title')
    - {{ $page->user_friendly_name }}
@endsection

@section('content')

    <div class="main">
        <div class="main__wrapper">
            <div class="main__info">
                <div class="main__info--wrapper">
                    <h1 class="main__title">
                        <svg class="main__img">
                            <use xlink:href="/img/BAD7_Logo.svg#full_logo"></use>
                        </svg>
                    </h1>
                    <p class="main__text">
                        {{ $content->text }}
                        <br>
                        <a href="#order-form"  class="main__link popup-with-form">сделать хорошо</a>
                    </p>
                </div>
            </div>

            <div class="main__video">
                <div class="main__video--wrapper">
                    <div class="video">
                        <a class="popup-youtube" href="{{ $content->video_url }}">
                            <button class="video__btn">
                                <svg>
                                    <use xlink:href="/img/symbol/sprite.svg#play"></use>
                                </svg>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
<!--
        {{--        <div class="main__partners partners">--}}
        {{--            <div class="partners__wrap wrap">--}}
        {{--                <div class="partners__item">--}}
        {{--                    <img src="images/logo/basket.jpg" alt="Баскетбольный клуб" title="Баскетбольный клуб">--}}
        {{--                </div>--}}
        {{--                <div class="partners__item">--}}
        {{--                    <img src="images/logo/mig.png" alt="ООО УК МИГ" title="ООО УК МИГ">--}}
        {{--                </div>--}}
        {{--                <div class="partners__item">--}}
        {{--                    <img src="images/logo/uta.jpg" alt="ООО УкрТрансАгро" title="ООО УкрТрансАгро">--}}
        {{--                </div>--}}
        {{--                <div class="partners__item">--}}
        {{--                    <img src="images/logo/mmr.jpg" alt="Мариупольский горсовет" title="Мариупольский горсовет">--}}
        {{--                </div>--}}
        {{--            </div>--}}

        {{--            наши счастливые клиенты--}}

        {{--        </div>--}}
-->
    </div>

    <div id="order-form" class="white-popup mfp-hide popupOrderForm">
        @include('includes.popupOrderForm')
    </div>

@endsection

@section('scripts')

    <script>
        // magnificPopup
        $('.popup-with-form').magnificPopup({
            type: 'inline',
            focus: '#name',
            preloader: false,
            modal: true
        });

        $(document).ready(function() {
            $('.popup-youtube').magnificPopup({
                disableOn: 700,
                type: 'iframe',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: false,

                fixedContentPos: false
            });
        });

        $(document).on('click', '.popup-modal-dismiss', function(e) {
            e.preventDefault();
            $.magnificPopup.close();
        });
    </script>

@endsection
