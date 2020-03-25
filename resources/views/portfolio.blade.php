@extends('layouts.app')

@section('title'){{ $title }}@endsection

@section('content')

    <section class="portfolio">
        <div class="portfolio__header">
        </div>
        <ul class="portfolio__filter filter">
            <li class="filter__element @if(empty($workType)) filter__element--active @endif">
                <a href="{{ route('portfolio') }}" class="filter__link">Все работы</a>
            </li>
            <li class="filter__element @if($workType == 'reklama') filter__element--active @endif ">
                <a href="{{ route('portfolio.filter', 'reklama') }}" class="filter__link">Рекламные</a>
            </li>
            <li class="filter__element @if($workType == 'image') filter__element--active @endif ">
                <a href="{{ route('portfolio.filter', 'image') }}" class="filter__link">Имиджевые</a>
            </li>
        </ul>
        <ul class="portfolio__works works">

            @foreach($portfolio as $item)
                <li class="works__element">
                    <div class="works__video" style="background: url('/img/uploads/portfolios/original/{{ $item->bg_image }}') no-repeat center top;background-size: cover;">
                        <div class="video--clip">
                            <div class="card__btn--youtube">
                                <a class="popup-youtube" href="{{ $item->url }}">
                                    <button class="video__btn">
                                        <svg>
                                            <use xlink:href="/img/symbol/sprite.svg#play"></use>
                                        </svg>
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="works__info">
                            <h2 class="works__title">{{ $item->title }}</h2>
                            <p class="works__details">
                                <time class="works__date" datetime="{{ $item->date }}">{{ Date::parse($item->date)->format('F Y г.') }}</time>
                                <span class="works__type">{{ $type[$item->type] }}</span>
                            </p>
                            <p class="works__description">{{ $item->description }}</p>
                        </div>

                    </div>

                </li>
            @endforeach

        </ul>

        @if($portfolio->total() > $portfolio->count())
            {{ $portfolio->links() }}
        @endif

    </section>

@endsection

@section('scripts')

    <script>
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