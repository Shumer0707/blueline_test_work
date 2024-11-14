<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="wrapper">
        <header>
            <h1 class="test">Test</h1>
            @if (auth()->check())
                <p>Здравствуйте, {{ auth()->user()->name }}. Ваша роль: {{ auth()->user()->role }}</p>
            @endif
        </header>
        <main>
            @yield('content')
        </main>
        <footer>

        </footer>
    </div>
</body>
</html>
