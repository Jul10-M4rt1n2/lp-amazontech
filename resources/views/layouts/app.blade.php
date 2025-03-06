<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Amazontech') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased">
    <div id="app">
        <x-navbar />
        <!-- Conteúdo da página -->
        @yield('content')
        <!-- Adicionando o Footer -->
        <x-footer />
    </div>
</body>
</html>