<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @livewireStyles
    <script src="https://cdn.tailwindcss.com"></script>
    <title>{{ env('APP_NAME') }}</title>
</head>
<body class="antialiased bg-orange-200">
<x-sidebar />
<main class="w-full mx-auto container flex">
    <section class="container px-6 py-10 mx-auto">
        <h1 class="text-3xl font-semibold text-gray-800 capitalize lg:text-4xl">{{ $title }}</h1>
        {{ $slot }}
    </section>
</main>
<x-footer/>
@livewireScripts
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
</html>

