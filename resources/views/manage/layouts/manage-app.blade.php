<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="csrf-param" content="_token" />

    <link rel="stylesheet" href="{{ mix('/css/manage.css') }}">
    <script src="{{ mix('/js/manage.js') }}"></script>
    <title>BAD7 - Управление контентом</title>

</head>
<body>

<div class="container-fluid">

    @include('manage.includes.nav')

    <div class="row px-sm-0 px-xs-0 mx-xs-0">
        <main class="col-xl-9 col-lg-10 col-md-12 py-4 px-md-1 px-0 px-sm-0 mt-5 mx-lg-auto mx-sm-0" role="main">

            @yield('content')

        </main>
    </div>

</div>

{{--<script src="js/jquery-3.js"></script>--}}
{{--<script src="js/bootstrap.js"></script>--}}

@yield('scripts')

</body>
</html>
