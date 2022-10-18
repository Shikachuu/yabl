<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @livewireStyles
    <script src="https://cdn.tailwindcss.com"></script>
    <title>{{ env('APP_NAME') }}</title>
</head>
<body class="antialiased bg-orange-200">
<main class="w-full mx-auto container flex">{{ $slot }}</main>
<x-footer />
@livewireScripts
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
</html>
