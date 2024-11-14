<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="font-sans antialiased">


<div class="min-h-screen bg-gray-100">
    @livewire('navigation-menu')

    <!-- Page Content -->
    <main>
        <div class="mx-auto" style="width: 1028px">
        {{ $slot }}
        <div>
    </main>
</div>

@stack('modals')

@livewireScripts
</body>
</html>
