<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @livewireStyles
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>{{ env('APP_NAME') }}</title>
</head>
<body class="antialiased">
@yield('content', 'Default content')
<x-layout.footer></x-layout.footer>
@livewireScripts
</body>
</html>

