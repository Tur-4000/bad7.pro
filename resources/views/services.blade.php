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
            <div class="services__card card">
                <div class="card__head card__head--reklama">
                    <div class="card__btn--youtube">
                        <a class="popup-youtube" href="https://www.youtube.com/watch?v=gbGCbs_EgkI">
                            <button class="video__btn">
                                <svg>
                                    <use xlink:href="/img/symbol/sprite.svg#play"></use>
                                </svg>
                            </button>
                        </a>
                    </div>
                </div>
                <h2 class="card__title">Рекламный ролик</h2>
                <div class="card__text">
                    <p><b>Рекламный ролик</b>  — это видеоролик, основная цель которого &mdash; привлечь внимание
                        потенциальных потребителей для стимулирования продаж рекламируемого товара (услуги).</p>
                    <div class="card__text--hide">
                        <input type="checkbox" id="hide-reklama" class="hide">
                        <label for="hide-reklama">Подробнее</label>

                        <p>Мы продемонстрируем в Рекламном ролике все преимущества вашего товара с помощью креативной идеи,
                            и покупатели запомнят товар (услугу) и захотят приобрести его. </p>
                        <p class="card__subtitle">Преимущества рекламного ролика:</p>
                        <p><b>Запоминающаяся демонстрация товара (услуги).</b> Учёными доказано, что формат видео+звук –
                            лучшее средство для запоминания информации. Ролик позволит запомнить потребителю внешний вид
                            товара, что увеличивает вероятность покупки.</p>
                        <p><b>Большой выбор площадок для продвижения.</b> Рекламный ролик адаптирован для показа на ТВ, в
                            социальных сетях, на сайте, на Youtube. Ролик будет продавать ваш товар (услугу) 24/7.</p>
                    </div>
                </div>
                <a href="#order-form" class="card__btn popup-with-form">Закажи меня</a>
            </div>
            <div class="services__card card">
                <div class="card__head card__head--image">
                    <div class="card__btn--youtube">
                        <a class="popup-youtube" href="https://www.youtube.com/watch?v=hQvh0tWiX3g">
                            <button class="video__btn">
                                <svg>
                                    <use xlink:href="/img/symbol/sprite.svg#play"></use>
                                </svg>
                            </button>
                        </a>
                    </div>
                </div>
                <h2 class="card__title">Имиджевый ролик</h2>
                <div class="card__text">
                    <p><b>Имиджевый ролик</b> – это видеоролик, основная цель которого – презентовать компанию, рассказать о
                        её корпоративной культуре и сотрудниках в целом, не затрагивая конкретные товары (услуги).</p>

                    <div class="card__text--hide">
                        <input type="checkbox" id="hide-image" class="hide">
                        <label for="hide-image">Подробнее</label>
                        <p>Мы продемонстрируем в Имиджевом ролике видеоисторию способную рассказать Вашей аудитории больше,
                            чем сотни страниц печатного текста.</p>
                        <p>Имиджевый ролик с правильным посылом поможет развивать ваш бизнес, привлекая большее количество
                            аудитории. Покажите людям, что ваша компания успешна, а сотрудники счастливы, и вы получите
                            больше желающих стать частью вашей организации.</p>
                        <p class="card__subtitle">Преимущества имиджевого ролика:</p>
                        <p>Создаёт доверие и лояльность к Вашему бренду, а также демонстрирует человеческую сторону Вашего
                            бизнеса.</p>
                        <p>Большой выбор площадок для продвижения. Имиджевый ролик адаптирован для показа на ТВ, в
                            социальных сетях, на сайте, на Youtube и др. </p>
                        <p>Выполняет роль пассивного HR-инструмента, который работает в режиме 24/7,
                            привлекая талантливых претендентов.</p>
                    </div>
                </div>
                <a href="#order-form" class="card__btn popup-with-form">Закажи меня</a>
            </div>
            <div class="services__card card">
                <div class="card__head card__head--translation"></div>
                <h2 class="card__title">Трансляции</h2>
                <div class="card__text">
                    <p><b>Прямые трансляции</b> – это отличный способ общаться с Вашей целевой аудиторией.</p>
                    <p>Проводим прямые трансляции в прямом эфире телеканала, Youtube канала, социальных сетях.</p>
                    <p>Подготовим всё необходимое для проведения прямой трансляции Вашего мероприятия,
                        оставим Вас довольными полученным результатом.</p>
                </div>
                <a href="#order-form" class="card__btn popup-with-form">Закажи меня</a>
            </div>
            <div class="services__card card">
                <div class="card__head card__head--promotion"></div>
                <h2 class="card__title">Продвижение</h2>
                <div class="card__text">
                    <p class="card__subtitle">Зачем нужно продвижение:</p>
                    <p>Размещение видеороликов в мировой сети интернет позволяет сформировать отношение к бренду
                        компании, создать необходимые ассоциации и нужным образом связать зрительскую эмоцию с
                        компанией или товаром (услугой). Также продвижение в сети является одним из ключевых этапов
                        на пути популяризации идеи, заложенной в ролике.</p>
                </div>
                <a href="#order-form" class="card__btn popup-with-form">Закажи меня</a>
            </div>
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
