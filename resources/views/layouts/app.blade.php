<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SIPPMI</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- ICON -->
    <link rel="icon" type="image/vnd.microsoft.icon" href="http://www.pmi.or.id/templates/pmi_pusat/images/favicon.ico"/>
</head>
<body>
    <div id="app">

    <br>
    <br>
    <br>
    <br>
    <br>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
