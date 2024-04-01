<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield("title")</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" />
    <script src="{{ asset('js/main.js') }}"></script>

    <!-- Development Environment Only-->
    <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->
</head>

<body class="bg-white light:bg-gray-900">
    @include('layouts.board.navbar')

    @if (isset($header))
    <header class="bg-white light:bg-gray-800 shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            {{ $header }}
        </div>
    </header>
    @endif

    <main class="max-w-7xl mx-auto mt-4">
        {{ $slot }}
    </main>
</body>

</html>