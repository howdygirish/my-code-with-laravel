<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('inc/meta')
    @include('inc/styles')
</head>
<body class="antialiased">
    <div>
        @yield('content')
    </div>
    @vite('resources/js/app.js')
</body>
</html>
