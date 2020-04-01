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
    <section class="services">
        <div class="services__header"></div>
        <div class="services__content">

        @foreach($services as $service)
            <div class="services__card card">
                <div
                    class="card__head"
                    style="
                        background: url('/img/uploads/services/original/{{ $service->bg_image }}') center no-repeat;
                        background-size: cover;
                        ">
                    @if($service->video_url)
                    <div class="card__btn--youtube">
                        <a class="popup-youtube" href="{{ $service->video_url }}">
                            <button class="video__btn">
                                <svg>
                                    <use xlink:href="/img/symbol/sprite.svg#play"></use>
                                </svg>
                            </button>
                        </a>
                    </div>
                    @endif
                </div>
                <h2 class="card__title">{{ $service->title }}</h2>
                <div class="card__text">
                    {!! $service->description !!}

                    @if($service->description_ext)
                        <div class="card__text--hide">
                            <input type="checkbox" id="hide-{{ $service->order }}" class="hide">
                            <label for="hide-{{ $service->order }}">Подробнее</label>

                            {!! $service->description_ext !!}
                        </div>
                    @endif
                </div>
                <a href="#order-form" class="card__btn popup-with-form">Закажи меня</a>
            </div>
        @endforeach

        </div>
    </section>

    <div id="order-form" class="white-popup mfp-hide popupOrderForm">
        @include('includes.popupOrderForm')
    </div>

@endsection

@section('scripts')

    <script>
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
