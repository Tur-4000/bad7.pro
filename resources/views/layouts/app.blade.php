<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-161482556-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-161482556-1');
    </script>
    <!-- Google Analytics END -->

    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <script src="{{ mix('/js/app.js') }}"></script>

    <title>Bad7 Production</title>
</head>
<body>

    <main class="container">
        <nav class="navbar">
            <div class="navbar__wrap">
                @include('includes.navbar')
            </div>
        </nav>
        <section class="content">
            @yield('content')
        </section>
    </main>

    <script>
        const hamburger = document.querySelector(`.hamburger`);

        hamburger.addEventListener(`click`, (e) => {
            e.target.closest(`.hamburger`).classList.toggle(`hamburger--active`);
            e.target.closest(`.navbar`).querySelector('.navbar__list').classList.toggle(`navbar__list--active`);
        });
    </script>

    @yield('scripts')
</body>
</html>