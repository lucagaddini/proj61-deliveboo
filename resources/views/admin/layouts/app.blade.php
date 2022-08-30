<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>DeliveBoo | Gestisci il tuo ristorante</title>

    <!-- Scripts -->
    <script src="{{ asset('js/back.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/admin/style.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">

        @include('admin.layouts.partials.header-admin')
        
        @include('admin.layouts.partials.left-navbar')

        <main class="">

            @yield('content')

        </main>
    </div>
</body>
</html>
