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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
</head>
<body>

    <div id="app">
        <nav class="navbar has-shadow" role="navigation" aria-label="main navigation">
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item" href="/">{{ env('APP_NAME') }}</a>
                </div>
                <div class="navbar-menu">
                    <div class="navbar-start">
                        <router-link to="/" class="navbar-item">Home</router-link>
                        <router-link to="/about" class="navbar-item">About</router-link>
                        <router-link to="/contact" class="navbar-item">Contact</router-link>
                    </div>
                </div>
            </div>
        </nav>

        <section class="hero is-light">
            <div class="hero-body">
                <div class="container">
                    <router-view></router-view>
                </div>
            </div>
        </section>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>