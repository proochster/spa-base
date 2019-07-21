<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', env('APP_NAME'))</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <section class="section">
        <div class="container" id="app">
            <router-view></router-view>
            {{-- @yield('content') --}}
            <hr>
            <router-link to="/">Home</router-link>
            <router-link to="/about">About</router-link>
        </div>
    </section>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>